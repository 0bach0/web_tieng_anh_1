<?php

require("Routesecure.php");

class Admin extends Routesecure {
    public $data = array();
    private $LIMIT =5;

    function __construct(){
      parent::__construct();
      // $this->db->cache_delete_all();
      if(!isset($_SESSION['login_user'])){
        redirect('dang-nhap');
        die();
      }
      // var_dump($_SESSION['is_root']);
      $this->data['css'] = array('admin.css');
      set_include_path(__DIR__."/../../xcrud/xcrud"); 
      require 'xcrud.php';

    }

    public function index($slug ='')
    {
      $navbar=array('post','curriculum','register','review','schedule','image','admin','teacher');

      if($slug==='' || !in_array($slug, $navbar)){
        redirect(base_url().'quan-ly/post');
      }
            
      $xcrud = Xcrud::get_instance();
      $xcrud->table($slug);     

      if(in_array($slug,array('review','post','teacher')))
      {
        $xcrud->change_type('image','image','',array('width'=>500,'path'=>'../../assets/images/thumbnail'));
      } 
      
      if(in_array($slug,array('curriculum','post'))) 
      {
        $xcrud->before_insert('change_data','insert_support.php');
        $xcrud->columns('slug', true);
        $xcrud->fields('slug', true);
      }
      if(in_array($slug,array('schedule'))) 
      {
        $this->load->model('curriculum_model');
        $result = $this->curriculum_model->get_curriculum_list();
        $nameCurriculum =array();
        foreach($result as $curriculum){
          array_push($nameCurriculum,array($curriculum->id => $curriculum->name));
        }
        
        $this->data['curriculum_list'] = $nameCurriculum;
      }

      if(in_array($slug,array('image'))) {
        $xcrud->change_type('name','image','',array('path'=>'../../assets/images/upload'));
        $xcrud->before_insert('change_url_image','insert_support.php');
        $xcrud->columns('url', true);
        $xcrud->readonly('url');
      }

      if(in_array($slug,array('admin'))) {
        $xcrud->before_insert('change_password','insert_support.php');
      }


      
      $this->data['table'] = $xcrud->render();
      
      $this->load->view('admin/header', $this->data);
      $this->load->view('admin/index', $this->data);
      $this->load->view('admin/footer', $this->data);
      
      // echo $this->to_slug('Đăng ký kiểm tra trình độ');
    }
}