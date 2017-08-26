<?php
class Curriculum extends CI_Controller {
    public $data = array();
    private $LIMIT =5;

    function __construct(){
      parent::__construct();
      $this->load->model('curriculum_model');
      $result = $this->curriculum_model->get_curriculum_list();
      
      $this->data['curriculum-list'] = $result;
    }

    public function index($slug)
    {
      $this->data['js'] = array('register.js');
      $this->data['css'] = array('curriculum.css');
      if($this->uri->segment(2)== null)
      {
        redirect(base_url().'khoa-hoc/'.$this->data['curriculum-list'][0]->slug);
        die();
      }

      foreach($this->data['curriculum-list'] as $curriculum)
      if ($curriculum->slug === $slug)
        $this->data['curriculum'] = $curriculum;
      
      $this->data['title'] = $this->data['curriculum']->title;

      $this->load->view('templates/header', $this->data);
      $this->load->view('curriculum/index', $this->data);
      $this->load->view('templates/footer', $this->data);
    }
}