<?php
class Contact extends CI_Controller {
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
      $this->data['title'] = 'Liên hệ';
      $this->data['js'] = array('register.js');

      $this->load->view('templates/header', $this->data);
      $this->load->view('contact/index', $this->data);
      $this->load->view('templates/footer', $this->data);
    }
    

    
    
}