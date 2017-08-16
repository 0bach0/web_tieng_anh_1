<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>

</head>


<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
  $ci = new CI_Controller();
  $ci->load->view('templates/header');

  // $ci->load->model('curriculum_model');
  // $result = $ci->curriculum_model->get_curriculum_list();
  
  // $ci->data['curriculum-list'] = array();

  echo '<img src="'.asset_url().'images/error_404.png'.'" alt="404 not found">';

  // $ci->load->view('templates/footer');
?>