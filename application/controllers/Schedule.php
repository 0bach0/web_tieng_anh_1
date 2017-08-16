<?php
class Schedule extends CI_Controller {
    public $data = array();

    function __construct(){
      parent::__construct();
      $this->load->model('curriculum_model');
      $result = $this->curriculum_model->get_curriculum_list();
      
      $this->data['curriculum-list'] = $result;
    }

    public function index($slug = '')
    {
      $this->data['title'] = 'Lịch khai giảng';
      $this->data['js'] = array('register.js');

      $this->load->model('schedule_model');
      $schedule_list = $this->schedule_model->get_schedule_list();
      $this->data['schedule_list'] = $schedule_list;

      $this->data['schedule_full'] = $this->schedule_model->get_schedule_full();
      
      $this->load->view('templates/header', $this->data);
      $this->load->view('schedule/index', $this->data);
      $this->load->view('templates/footer', $this->data);
    }

        
}