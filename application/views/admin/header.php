<!DOCTYPE html>
<html dir="ltr" lang="vi" style="" class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths no-mobile nivo-lightbox-notouch">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <meta name="description" content="Luyện Ielts Writing & Speaking theo từng mục tiêu | 15/378 Lê Duẩn, Hà Nội">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <title> <?php 
        if(isset($this->data['title']))
          echo $this->data['title'];
        else
          echo 'Luyện Ielts Writing & Speaking theo từng mục tiêu | 15/378 Lê Duẩn, Hà Nội';
      ?> </title>


      <?php 
        if (isset($this->data['css']))
          {
            foreach ($this->data['css'] as $row){
              echo '<link media="all" type="text/css" rel="stylesheet" href="'.asset_url() . 'css/'.$row.'">';
            }
          }
      ?>

       <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/bootstrap.min.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/jquery-ui.min.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/animate.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/css-plugin-collections.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/style-main.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/preloader.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/custom-bootstrap-margin-padding.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/responsive.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/settings.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/layers.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/navigation.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/theme-skin-color-set-7.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/frontend.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/loading.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/loading-btn.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/home.css">
      <link media="all" type="text/css" rel="stylesheet" href="<?php echo asset_url()?>css/bootstrap.min.css">
  </head>

<body>
 <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if($this->uri->segment(2) === 'post') echo 'active';?>"><a href="<?php echo base_url();?>quan-ly/post">Tin tức & tài liệu</a></li>
            <li class="<?php if($this->uri->segment(2) === 'curriculum') echo 'active';?>"><a href="<?php echo base_url();?>quan-ly/curriculum">Khóa học</a></li>
            <li class="<?php if($this->uri->segment(2) === 'register') echo 'active';?>"><a href="<?php echo base_url();?>quan-ly/register">Người đăng ký</a></li>
            <li class="<?php if($this->uri->segment(2) === 'review') echo 'active';?>"><a href="<?php echo base_url();?>quan-ly/review">Cảm nhận học viên</a></li>
            <li class="<?php if($this->uri->segment(2) === 'teacher') echo 'active';?>"><a href="<?php echo base_url();?>quan-ly/teacher">Giáo viên</a></li>
            <li class="<?php if($this->uri->segment(2) === 'schedule') echo 'active';?>"><a href="<?php echo base_url();?>quan-ly/schedule">Lịch khai giảng</a></li>
            <li class="<?php if($this->uri->segment(2) === 'image') echo 'active';?>"><a href="<?php echo base_url();?>quan-ly/image">Tải ảnh</a></li>
            <?php 
              if($_SESSION['is_root']==='1'){
                $tmp = " <li ";
                if($this->uri->segment(2) === 'admin') $tmp = $tmp.'class="active"><a href="'.base_url().'quan-ly/admin">Tài khoản</a></li>';
                else $tmp=$tmp.'class=""><a href="'.base_url().'quan-ly/admin">Tài khoản</a></li>';
                echo $tmp;
              }
            ?>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url();?>routesecure/logout">Đăng xuất</a></li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>