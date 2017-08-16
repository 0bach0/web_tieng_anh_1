<?php
class Register extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->model('curriculum_model');
      $result = $this->curriculum_model->get_curriculum_list();
      
      $this->data['curriculum-list'] = $result;
    }
    
    public function submit()
    {
      $this->load->model('register_model');
      $this->register_model->insert($_POST['form_name'],$_POST['form_phone'],$_POST['form_email'],$_POST['form_course']);

      echo '{"status":true,"message":"done"}';
      // echo $_POST['form_name'].$_POST['form_email'];
    }
    
    
}