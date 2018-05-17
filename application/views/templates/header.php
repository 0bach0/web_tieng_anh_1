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

      
      <!-- Stylesheet -->
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
      
      <?php 
        if (isset($this->data['css']))
          {
            foreach ($this->data['css'] as $row){
              echo '<link media="all" type="text/css" rel="stylesheet" href="'.asset_url() . 'css/'.$row.'">';
            }
          }
      ?>

      <!-- Favicon -->
      <link rel='icon' type='image/png' href='<?php echo asset_url()?>images/favicon.ico'/>
   </head>
   <body>
      <div id="wrapper" class="clearfix">
         <!-- Preloader -->
         <!-- End Preloader -->
         <!-- Header -->
         <header id="header" class="header">        
            <div class="header-middle p-0 bg-lightest xs-text-center">
               <div class="container pt-0 pb-0">
                  <div class="row">
                     <div class="col-xs-12 col-sm-3 col-md-5">
                        <div class="widget no-border m-0">
                           <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="<?php echo base_url()?>"><img src="<?php echo asset_url()?>images/logo-web-tienganh.png" alt="" style="max-height: 45px"></a>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 col-md-2">
                        <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
                           <ul class="list-inline">
                              <li ><i class="fa fa-envelope-o text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                              <li>
                                 <span class="font-12 text-gray text-uppercase">EMAIl</span>
                                 <div class="font-13 text-black m-0">abc@gmail.com</div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 col-md-2">
                        <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
                           <ul class="list-inline">
                              <li ><i class="fa fa-phone-square text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                              <li>
                                 <span class="font-12 text-gray text-uppercase">HOTLINE!</span>
                                 <div class="font-13 text-black m-0">096 886 0488</div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-3 col-md-3">
                        <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
                           <ul class="list-inline">
                              <li class="hidden-xs hidden-ms"><i class="fa fa-map-marker text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                              <li>
                                 <span class="font-12 text-gray text-uppercase">Địa chỉ</span>
                                 <div class="font-13 text-black m-0">15/378 Lê Duẩn, Hà Nội</div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
            <div class="header-nav">
               <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px" style="z-index: 1000;">
                  <div class="container">
                     <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
                        <ul class="menuzord-menu text-uppercase menuzord-indented scrollable" style="max-height: 400px;">
                           <li class="<?php if($this->uri->segment(1) === null) echo 'active';?>"><a href="<?php echo base_url()?>">Trang chủ</a></li>
                           <li class="<?php if($this->uri->segment(1) === 'gioi-thieu') echo 'active';?>"><a href="<?php echo base_url()?>gioi-thieu">Giới thiệu</a></li>
                           <li class="<?php if($this->uri->segment(1) === 'khoa-hoc') echo 'active';?>">
                              <a href="<?php echo base_url()?>khoa-hoc">Khóa học<span class="indicator">
                              </a>
                              <ul class="dropdown" style="right: auto;">
                                <?php 
                                  foreach($this->data['curriculum-list'] as $curriculum){
                                    echo '<li><a href="'.base_url().'khoa-hoc/'.$curriculum->slug.'">'.$curriculum->title.'</a></li>';
                                  }
                                ?>
                              </ul>
                           </li>
                           <li class="<?php if($this->uri->segment(1) === 'lich-khai-giang') echo 'active';?>"><a href="<?php echo base_url()?>lich-khai-giang">Lịch khai giảng</a></li>
                           <li class="<?php if($this->uri->segment(1) === 'tin-tuc') echo 'active';?>"><a href="<?php echo base_url()?>tin-tuc">Tin tức</a></li>
                           <li class="<?php if($this->uri->segment(1) === 'tai-lieu') echo 'active';?>"><a href="<?php echo base_url()?>tai-lieu">Tài liệu Ielts theo mục tiêu<span class="indicator"></span></a>
                              <ul class="dropdown" style="right: auto;">
                                 <li><a href="<?php echo base_url()?>tai-lieu/muc-tieu-3">Mục tiêu 0 - 3.0</a></li>
                                 <li><a href="<?php echo base_url()?>tai-lieu/muc-tieu-45">Mục tiêu 3.0 - 4.5</a></li>
                                 <li><a href="<?php echo base_url()?>tai-lieu/muc-tieu-6">Mục tiêu 4.5 - 6.0</a></li>
                                 <li><a href="<?php echo base_url()?>tai-lieu/muc-tieu-9">Mục tiêu 6.0+</a></li>
                              </ul>
                           </li>
                           <li class="<?php if($this->uri->segment(1) === 'cam-nhan-hoc-vien') echo 'active';?>"><a href="<?php echo base_url()?>cam-nhan-hoc-vien">Cảm nhận học viên</a></li>
                           <li class="<?php if($this->uri->segment(1) === 'lien-he') echo 'active';?>"><a href="<?php echo base_url()?>lien-he">Liên hệ</a></li>
                           <li class="scrollable-fix"></li>
                        </ul>
                        <div id="top-search-bar" class="collapse">
                           <div class="container">
                              <form role="search" action="<?php echo base_url()?>#" class="search_form_top" method="get">
                                 <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                                 <span class="search-close"><i class="fa fa-search"></i></span>
                              </form>
                           </div>
                        </div>
                     </nav>
                  </div>
               </div>
               <div></div>
            </div>
         </header>


      <!-- Facebook utility -->
      <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=268585663526955&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
