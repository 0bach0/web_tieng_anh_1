<?php
class Routesecure extends CI_Controller {
    function __construct(){
      parent::__construct();
      session_start();
    }

    function logout(){
      session_destroy();
      redirect('dang-nhap');
    }
}