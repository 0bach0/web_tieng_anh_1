<div class="main-content">
   <!-- Section: inner-header -->
   <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo asset_url();?>images/banner/inner-banner.jpg" style="background-image: url(<?php echo asset_url();?>images/banner/inner-banner.jpg); background-position: 50% 24px; background-size: 100%;">
      <div class="container pt-20 pb-20">
         <!-- Section Content -->
         <div class="section-content">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="title text-white">
                     <?php echo $this->data['document']->title?>
                  </h1>
                  <ol class="breadcrumb text-left text-white mt-10">
                     <li><a href="/" class="text-white">Trang chủ</a></li>
                     <li><a href="/tai-lieu/<?php echo $this->data['sub_type'] ?>" class="text-white"><?php echo $this->data['sub_type_text'] ?></a></li>
                     <li class="active text-gray-silver"><?php echo $this->data['document']->title?></li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Article detail -->
   <section>
      <div class="container">
         <div class="row">
            <div class="col-md-9">
               <div class="blog-posts single-post">
                  <article class="post clearfix mb-0">
                     <div class="entry-header">
                        <div class="post-thumb thumb"> <img src="<?php echo asset_url().'images/thumbnail/'.$this->data['document']->image?>" alt="" class="img-responsive img-fullwidth"> </div>
                     </div>
                     <div class="entry-title pt-10">
                        <div class="text-uppercase font-18 mt-10 text-black"><?php echo $this->data['document']->title?></div>
                     </div>
                     <div class="entry-meta">
                        <ul class="list-inline">
                           <li>Đăng ngày: <span class="text-theme-color-2"> <?php echo date( 'd/m/Y', strtotime( $this->data['document']->time ) );?></span></li>
                        </ul>
                     </div>
                     <div class="entry-content mt-10">
                        <?php echo $this->data['document']->full_description?>
                        <div class="fb-comments" data-href="<?php echo current_url();?>" data-width="100%" data-numposts="5"></div>
                     </div>
                  </article>
               </div>
            </div>
            <div class="col-sm-12 col-md-3">
               <div class="sidebar sidebar-left mt-sm-30">
                  <h3 class="line-bottom mt-0 mb-20">Đăng ký kiểm tra trình độ</h3>
                  <p class="mb-20">Cung cấp liên lạc cá nhân để nhận được tư vấn từ các giáo viên giàu kinh nghiệm ngay hôm nay.</p>
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
                        <div class="col-sm-12">
                           <div class="form-group">
                              <select name="form_course" class="form-control">
                                <?php 
                                  foreach($this->data['curriculum-list'] as $curriculum){
                                    echo '<option value="'.$curriculum->id.'">'.$curriculum->title.'</option>';
                                  }
                                ?>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <input name="form_botcheck" class="form-control" type="hidden" value=""/>
                        <button type="submit"
                           class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                           data-loading-text="Xin chờ giây lát...">Gửi nội dung
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
</div>


<div class="modal fade" id="doneModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Lưu ý!</h4>
        </div>
        <div class="modal-body">
          <p>Bạn có muốn làm bài kiểm tra trình độ luôn không?</p>
        </div>
        <div class="modal-footer">
          <button type="button" id="test_page" class="btn btn-default">Làm test trình độ.</button>
        </div>
      </div>
      
    </div>
</div>