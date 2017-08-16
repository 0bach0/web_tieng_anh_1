<!-- Main Content -->
<div class="main-content">
   <!-- Section: inner-header -->
   <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo asset_url()?>images/banner/banner-contact.jpg" style="background-image: <?php echo asset_url()?>images/banner/banner-contact.jpg; background-position: 50% 94px;">
      <div class="container pt-70 pb-20">
         <!-- Section Content -->
         <div class="section-content">
            <div class="row">
               <div class="col-md-12">
                  <h2 class="title text-white">Liên hệ</h2>
                  <ol class="breadcrumb text-left text-white mt-10">
                     <li><a href="/" class="text-white">Trang chủ</a></li>
                     <li class="active text-gray-silver">Liên hệ</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Divider: Contact -->
   <section class="divider">
      <div class="container">
         <div class="row pt-30">
            <div class="col-md-4">
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-12">
                     <div class="icon-box left media bg-deep p-30 mb-20">
                        <a class="media-left pull-left" href="#"> <i
                           class="pe-7s-map-2 text-theme-colored"></i></a>
                        <div class="media-body">
                           <strong class="text-uppercase">Địa chỉ</strong>
                           <p>15/378 Lê Duẩn, Hà Nội</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-12">
                     <div class="icon-box left media bg-deep p-30 mb-20">
                        <a class="media-left pull-left" href="#"> <i
                           class="pe-7s-call text-theme-colored"></i></a>
                        <div class="media-body">
                           <strong class="text-uppercase">Hotline</strong>
                           <p>096 886 0488</p>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="col-xs-12 col-sm-6 col-md-12">
                     <div class="icon-box left media bg-deep p-30 mb-20"><a class="media-left pull-left" href="#"> <i
                                     class="pe-7s-mail text-theme-colored"></i></a>
                         <div class="media-body"><strong class="text-uppercase">Email</strong>
                             <p>tuvan@thuyed.edu.vn</p>
                         </div>
                     </div>
                     </div> -->
               </div>
            </div>
            <div class="col-md-8">
               <!-- Contact Form -->
               <form id="contact_form" name="contact_form" class="" action="<?php echo base_url();?>register/submit" method="post">
                <h3 class="line-bottom mt-0 mb-20">Đăng ký tư vấn</h3>
                <p class="mb-20">Vui lòng điền họ tên, số điện thoại, email và nội dung cần tư vấn; chúng tôi sẽ chủ động liên lạc với bạn.</p>
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
                     <div class="col-sm-6">
                        <div class="form-group">
                           <input name="form_phone" class="form-control required" type="text" placeholder="Điện thoại (*)" required>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <input name="form_course" class="form-control" type="text"
                              placeholder="Ghi chú">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <input name="form_botcheck" class="form-control" type="hidden" value=""/>
                     <button type="submit"
                        class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                        data-loading-text="Xin chờ giây lát...">Gửi
                     </button>
                     <button type="reset"
                        class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">
                     Xóa
                     </button>
                  </div>
               </form>
               
            </div>
         </div>
      </div>
   </section>
</div>
<!-- End Main Content -->
