<?php

require("Routesecure.php");

class Login extends Routesecure {
    public $data = array();
    private $LIMIT =5;

    function __construct(){
      parent::__construct();
      if(isset($_SESSION['login_user'])){
        redirect('quan-ly');
        die();
      }
      $this->load->model('user_model');
    }

    public function index($tmp = '')
    {
      $this->data['css'] = array('login.css');
      $this->load->view('login/index', $this->data);
    }

    public function check(){
      if (!empty($_POST['inputUsername']) && !empty($_POST['inputPassword'])) {

        $user = $this->user_model->get_by_username($_POST['inputUsername']);

        if(count($user)!=0)
        {
          if(password_verify($_POST['inputPassword'],$user[0]->password)){
            $_SESSION['login_user'] = $user[0]->username;
            $_SESSION['is_root'] = $user[0]->root;
            redirect(base_url().'quan-ly');
            return;
          }
        }
      }
      redirect(base_url().'dang-nhap/');
    }
}