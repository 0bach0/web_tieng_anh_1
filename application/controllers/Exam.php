<?php
class Exam extends CI_Controller {
    public $data = array();
    private $LIMIT =5;

    function __construct(){
      parent::__construct();
      $this->load->model('curriculum_model');
      $result = $this->curriculum_model->get_curriculum_list();
      
      $this->data['curriculum-list'] = $result;
    }

    public function index($slug = '1')
    {
      $this->data['course'] = $this->data['curriculum-list'][0];
      foreach($this->data['curriculum-list'] as $curriculum){
        if($curriculum->id===$slug)
          $this->data['course'] = $curriculum;
      }

      $this->data['title'] = 'Test đầu vào '.$this->data['course']->title;
      $this->data['css'] = array('exam.css');
      $this->data['js'] = array('exam.js');

      $this->load->model('question_model');
      $result = $this->question_model->get_question_by_course($slug);
      $this->data['question-list'] = $result;

      $this->load->view('exam/header', $this->data);
      $this->load->view('exam/index', $this->data);
      $this->load->view('exam/footer', $this->data);
    }

}