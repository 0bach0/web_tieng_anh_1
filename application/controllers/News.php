<?php
class News extends CI_Controller {
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
      $this->data['title'] = 'Tin tức';
      $this->data['js'] = array('news.js');

      $this->load->model('news_model');
      $this->data['news'] = $this->news_model->get_entries($this->LIMIT,0);

      $this->load->view('templates/header', $this->data);
      $this->load->view('news/index', $this->data);
      $this->load->view('templates/footer', $this->data);
    }

    public function detail($slug)
    {
      $this->load->model('news_model');
      $result = $this->news_model->get_by_slug($slug);
      
      if(!empty($result)){
        $this->data['news'] = $result[0];
        $this->data['title'] = $result[0]->title;
        // $data['title'] = ucfirst($data['news']['title']); // Capitalize the first letter

        $this->load->view('templates/header', $this->data);
        $this->load->view('news/detail', $this->data);
        $this->load->view('templates/footer', $this->data);
      }
      else{
        show_404();
      }

    }

    public function get_more_news($offset){
      if(isset($offset)){
        try{
          $this->load->model('news_model');
          $result = $this->news_model->get_entries($this->LIMIT,$offset);
          foreach($result as $row){
            $row->image = asset_url().$row->image;
            $row->slug = base_url().'tin-tuc/'.$row->slug;
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