<?php
class Document extends CI_Controller {
    public $data = array();
    private $LIMIT =5;

    function __construct(){
      parent::__construct();
      $this->load->model('curriculum_model');
      $result = $this->curriculum_model->get_curriculum_list();
      
      $this->data['curriculum-list'] = $result;
    }

    public function index($slug = 'muc-tieu-3')
    {

      if($this->uri->segment(2)== null)
      {
        redirect(base_url().'tai-lieu/muc-tieu-3');
        die();
      }
      switch($slug){
        case 'muc-tieu-3':
          $title = 'Tài liệu Ielts mục tiêu 3.0';
          break;
        case 'muc-tieu-45':
          $title = 'Tài liệu Ielts mục tiêu 3.0 ~ 4.5';
          break;
        case 'muc-tieu-6':
          $title = 'Tài liệu Ielts mục tiêu 4.5 ~ 6.0';
          break;
        case 'muc-tieu-9':
          $title = 'Tài liệu Ielts mục tiêu 6.0+';
          break;
        default:
          show_404();
          break;
      }
      $this->data['title'] = $title;
      $this->data['js'] = array('document.js','register.js');

      $this->load->model('document_model');
      $this->data['document'] = $this->document_model->get_entries($slug,$this->LIMIT,0);

      $this->load->view('templates/header', $this->data);
      $this->load->view('document/index', $this->data);
      $this->load->view('templates/footer', $this->data);
    }

    public function detail($sub_type,$slug)
    {
      $this->load->model('document_model');
      $result = $this->document_model->get_by_slug($sub_type,$slug);
      
      if(!empty($result)){
        $this->data['document'] = $result[0];
        $this->data['sub_type'] = $sub_type;

        switch($sub_type){
          case 'muc-tieu-3':
            $title = 'Tài liệu Ielts mục tiêu 3.0';
            break;
          case 'muc-tieu-45':
            $title = 'Tài liệu Ielts mục tiêu 3.0 ~ 4.5';
            break;
          case 'muc-tieu-6':
            $title = 'Tài liệu Ielts mục tiêu 4.5 ~ 6.0';
            break;
          case 'muc-tieu-9':
            $title = 'Tài liệu Ielts mục tiêu 6.0+';
            break;
          default:
            show_404();
            break;
        }
        $this->data['sub_type_text'] = $title;
        $this->data['js'] = array('document.js','register.js');
        
        // $data['title'] = ucfirst($data['news']['title']); // Capitalize the first letter

        $this->load->view('templates/header', $this->data);
        $this->load->view('document/detail', $this->data);
        $this->load->view('templates/footer', $this->data);
      }
      else{
        show_404();
      }

    }

    public function get_more_document($sub_type,$offset){
      if(isset($offset)){
        try{
          $this->load->model('document_model');
          $result = $this->document_model->get_entries($sub_type,$this->LIMIT,$offset);
          foreach($result as $row){
            $row->image = asset_url().$row->image;
            $row->slug = base_url().'tin-tuc/'.$row->slug;
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