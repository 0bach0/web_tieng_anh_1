<!-- Main Content -->
    <div class="main-content">
                <!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo asset_url();?>images/banner/banner-course.png" style="background-image: url(<?php echo asset_url();?>images/banner/banner-course.png); background-position: 50% 24px; background-size: 100%;">
    <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title text-white"><?php echo $this->data['curriculum']->name; ?></h2>
                    <ol class="breadcrumb text-left text-white mt-10">
                        <li><a href="/" class="text-white">Trang chủ</a></li>
                        <li><a href="/khoa-hoc" class="text-white">Khóa học</a></li>
                        <li class="active text-gray-silver"><?php echo $this->data['curriculum']->name; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Divider: Curriculum -->
   <section class="divider">
      <div class="container">
         <div class="row pt-30">
            <div class="col-md-5">
               <div class="row">
                <div style="text-align:center">
                  <img class="" src="<?php echo asset_url();?>images/who.jpg" alt="" width=80%>
                </div>
               </div>
            </div>
            <div class="col-md-7">
              <div class="row">
                <h2 class="text-uppercase line-bottom font-28">PHÙ HỢP VỚI CÁC BẠN</h2>
                <div id="who">
                  <?php echo $this->data['curriculum']->who_learn?>
                </div>
              </div>
            </div>
         </div>
         
         <div class="row pt-30">

            <div class="col-md-7">
              <div class="row">
                <h2 class="text-uppercase line-bottom font-28">BẠN NHẬN ĐƯỢC GÌ SAU KHÓA HỌC</h2>
                <div id="who">
                  <?php echo $this->data['curriculum']->achievement?>
                </div>
              </div>
            </div>

            <div class="col-md-5">
               <div class="row">
                <div style="text-align:center; height:50%;">
                  <img class="" src="<?php echo asset_url();?>images/achievement.jpg" alt="" width=80%>
                </div>
               </div>
            </div>
            
         </div>
      </div>
   </section>

<!-- Divider: Detail -->

<section>
      <div class="container">
         <div class="row">
                <h2 class="text-uppercase line-bottom font-28">Nội dung khóa học</h2>
            <div class="col-md-9 pl-0">
               <div class="blog-posts single-post">
                  <article class="post clearfix mb-0">
                                          
                     <div class="entry-content mt-10">
                        <?php echo $this->data['curriculum']->full_description?>
                        
                         <div class="fb-comments" data-href="<?php echo current_url();?>" data-width="100%" data-numposts="5"></div> 
                     </div>
                  </article>
               </div>
            </div>
            <div class="col-sm-12 col-md-3">
               <div class="sidebar sidebar-left mt-sm-30 entry-content mt-10">
                  <h3 class="line-bottom mt-0 mb-20">Đăng ký khóa học</h3>
                  <p class="mb-20">Nhập thông tin cá nhân để đăng ký khóa học <?php echo $this->data['curriculum']->name?>.</p>
                  <!-- Contact Form -->
                  <form id="contact_form" name="contact_form" class="" action="<?php echo base_url();?>register/submit" method="post">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input name="form_name" class="form-control" type="text" placeholder="Họ tên (*)"
                                 required>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input name="form_email" class="form-control required email" type="email"
                                 placeholder="Email (*)" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input name="form_phone" class="form-control required" type="text" placeholder="Điện thoại (*)" required>
                           </div>
                        </div>
                        <div class="col-sm-12" style="display:none" >
                           <div class="form-group">
                              <input name="form_course" class="form-control" type="text"
                                 value="<?php echo $this->data['curriculum']->name?>" placeholder="Khóa học cần tư vấn">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <input name="form_botcheck" class="form-control" type="hidden" value=""/>
                        <button type="submit"
                           class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                           data-loading-text="Xin chờ giây lát...">Đăng ký
                        </button>
                        <button type="reset"
                           class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">
                        Xóa
                        </button>
                     </div>
                  </form>
                  <!-- Contact Form Validation-->
                  
               </div>
            </div>
         </div>
      </div>
   </section>