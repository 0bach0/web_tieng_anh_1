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
      $this->data['js'] = array('admin.js');
      set_include_path(__DIR__."/../../xcrud/xcrud"); 
      require 'xcrud.php';

    }

    public function index($slug ='',$slug2='')
    {
      if ($slug2=='') $slug2 = '1';
      $navbar=array('post','curriculum','register','review','schedule','image','admin','teacher','upload','question');

      if($slug==='' || !in_array($slug, $navbar)){
        redirect(base_url().'quan-ly/post');
      }
            
      $xcrud = Xcrud::get_instance();


      $this->data['slug'] = $slug;
      $this->data['slug2'] = $slug2;

      if($slug === "upload"){
        $xcrud->table("image");    


        $xcrud_file = Xcrud::get_instance();
        $xcrud_file->table('file');     
      }
      else{
        $xcrud->table($slug);     
      }

      if(in_array($slug,array('review','post','teacher')))
      {
        $xcrud->change_type('image','image','',array('width'=>500,'path'=>'../../assets/images/thumbnail'));
      } 
      
      if(in_array($slug,array('curriculum','post'))) 
      {
        $xcrud->before_insert('change_data','insert_support.php');
        $xcrud->columns('slug, test_time', true);
        $xcrud->fields('slug, test_time', true);
      }
      if(in_array($slug,array('schedule','question'))) 
      {
        $xcrud->relation('curriculum_id','curriculum','id','title');

        $this->load->model('curriculum_model');
        $result = $this->curriculum_model->get_curriculum_list();
        $nameCurriculum =array();
        foreach($result as $curriculum){
          array_push($nameCurriculum,array($curriculum->id => $curriculum->title));
        }
        
        $this->data['curriculum_list'] = $nameCurriculum;
        $this->data['course'] = $this->curriculum_model->get_time_by_id($slug2);
      }
      if(in_array($slug,array('register')))
      {
        $xcrud->readonly('name,phone,email,course,class_id,answer,register_time');
        $xcrud->relation('curriculum_id','curriculum','id','title');
        $xcrud->relation('class_id','schedule','id','class_name');
        $xcrud->no_editor('answer');
        
      }

      if(in_array($slug,array('upload'))) {
        $xcrud->change_type('name','image','',array('path'=>'../../assets/images/upload'));
        $xcrud->before_insert('change_url_image','insert_support.php');
        $xcrud->columns('url', true);
        $xcrud->readonly('url');

        $xcrud_file->change_type('name', 'file', '', array('not_rename'=>true,'path'=>'../../assets/file/upload'));
        $xcrud_file->before_insert('change_url_file','insert_support.php');
        $xcrud_file->columns('url', true);
        $xcrud_file->readonly('url');
      }


      if(in_array($slug,array('admin'))) {
        $xcrud->before_insert('change_password','insert_support.php');
      }

      $xcrud->label(array('curriculum_id' => 'Khóa học','class_name' => 'Mã lớp','class_id'=>'Mã lớp','short_description'=>'Mô tả ngắn gọn','full_description'=>'Nội dung','done'=>'Xử lý','show_item'=>'Hiển thị trang chủ','description'=>'Nội dung','student_name'=>'Tên học sinh','teacher_name'=>'Tên giáo viên','schedule'=>'Lịch học','start_day'=>'Ngày khai giảng','fee'=>'Học phí','other_benefit'=>'Các lợi ích khác'));
      if(in_array($slug,array('question'))) {
        $xcrud->fields('content, answer_size');
        $xcrud->columns('content, answer_size');
        $xcrud->where('curriculum_id', $slug2);
        $xcrud->pass_var('curriculum_id', $slug2);
        $this->data['table'] = $xcrud->render();
      }
      else{
        $this->data['table'] = $xcrud->render();
      }


      if(isset($xcrud_file)){
        $this->data['table'] = $this->data['table'].'<hr style="height:10px">'.$xcrud_file->render();
      }

      $this->load->view('admin/header', $this->data);
      $this->load->view('admin/index', $this->data);
      $this->load->view('admin/footer', $this->data);
      
      // echo $this->to_slug('Đăng ký kiểm tra trình độ');
    }

    public function update_time($slug,$slug2){
      $this->load->model('curriculum_model');
      $this->curriculum_model->set_time_by_id($slug,$slug2);
      echo 'done';
    }
}