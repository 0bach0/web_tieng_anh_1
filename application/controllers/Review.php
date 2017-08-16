<?php
class Review extends CI_Controller {
    public $data = array();
    private $LIMIT = 5;

    function __construct(){
      parent::__construct();
      $this->load->model('curriculum_model');
      $result = $this->curriculum_model->get_curriculum_list();
      
      $this->data['curriculum-list'] = $result;
    }

    public function index($slug = '')
    {
      $this->data['title'] = 'Cảm nhận học viên';
      $this->data['js'] = array('review.js');

      $this->load->model('review_model');
      $this->data['review_highlight'] = $this->review_model->get_show();

      $this->data['review_all'] = $this->review_model->get_review($this->LIMIT,0);

      $this->load->view('templates/header', $this->data);
      $this->load->view('review/index', $this->data);
      $this->load->view('templates/footer', $this->data);
    }

    public function get_more_review($offset){
      if(isset($offset)){
        try{
          $this->load->model('review_model');
          $result = $this->review_model->get_review($this->LIMIT,$offset);
          foreach($result as $row){
            $row->image = asset_url().$row->image;
            // var_dump($row);
            // echo '\n';
          }
          $json = json_encode($result);
          echo $json;
        }
        catch (Exception $e) {
            echo "{status:'fail',message:'".$e->getMessage()."'}";
        }
      }
      else echo "{status:'fail',message:'Require parameter'}";
    }
    

    
    
}