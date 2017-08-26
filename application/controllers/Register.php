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
      if(!isset($_POST['form_answer'])){
        $_POST['form_answer'] ='';
      }
      if(isset($_POST['form_class_id'])){
        $this->register_model->insert($_POST['form_name'],$_POST['form_phone'],$_POST['form_email'],$_POST['form_course'],$_POST['form_answer'],$_POST['form_class_id']);
      }
      else{
        $this->register_model->insert($_POST['form_name'],$_POST['form_phone'],$_POST['form_email'],$_POST['form_course'],$_POST['form_answer']);
      }

      echo '{"status":true,"message":"done"}';
      // echo $_POST['form_name'].$_POST['form_email'];
    }
    
    
}