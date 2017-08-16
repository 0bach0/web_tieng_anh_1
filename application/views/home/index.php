<!-- Main Content -->
<div class="main-content">
   <section id="home">
      <div class="container-fluid p-20">
         <!-- Slider Revolution Start -->
         <div class="col-md-9 rev_slider_wrapper">
            <div class="rev_slider" data-version="5.0">
               <ul>
                  <!-- SLIDE 1 -->
                  <?php 
                     foreach($this->data['image'] as $image){
                       echo '<li data-index="rs-0" data-transition="cube-horizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="'.$image->url.'" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">';
                       echo '<img src="'.$image->url.'"  alt=""  data-bgposition="center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>';
                       echo '</li>';
                     }
                     ?>
                  <!-- SLIDE 1 -->
               </ul>
            </div>
            <!-- end .rev_slider -->
         </div>
         <div class="col-sm-12 col-md-3 mt-10">
            <div class="sidebar sidebar-left mt-sm-30">
               <h3 class="line-bottom mt-0 mb-20">Đăng ký kiểm tra trình độ</h3>
               <!-- <p class="mb-20">Cung cấp liên lạc cá nhân để nhận được tư vấn từ các giáo viên giàu kinh nghiệm ngay hôm nay.</p> -->
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
                           <input name="form_course" class="form-control" type="text"
                              placeholder="Ghi chú">
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
   </section>
   <!-- Section: About -->
   <section class="">
      <div class="container pt-0">
         <div class="section-content">
            <div class="row">
               <div class="col-md-12">
                  <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0">Giới thiệu</h6>
                  <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">TRUNG TÂM ÔN LUYỆN IETLS WRITING & SPEAKING THEO TỪNG MỤC TIÊU</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <a class="btn btn-theme-colored btn-flat btn-lg mt-10 mb-sm-30" href="/gioi-thieu">Chi tiết →</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Section: COURSES -->
   <section class="overlay-theme-colored-9" data-background-ratio="0.5" data-bg-img="<?php echo asset_url();?>images/banner/banner-course.jpeg">
      <div class="container pb-60">
         <div class="section-title mb-10">
            <div class="row">
               <div class="col-md-8">
                  <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">KHÓA <span class="text-theme-color-2 font-weight-400">HỌC</span></h2>
               </div>
            </div>
         </div>
         <div class="section-content">
            <div class="row">
               <div class="col-md-12">
                  <div class="owl-carousel-4col" data-dots="true">
                     <?php 
                        foreach($this->data['curriculum-list'] as $curriculum){
                          echo '<div class="item">';
                          echo '  <div class="service-block bg-white">';
                          // echo '  <div class="thumb"> <img alt="featured project" src="'.'" class="img-fullwidth"> </div>';
                          echo '<div class="content text-left flip p-25 pt-0">';
                          echo '<h4 class="line-bottom mb-10">'.$curriculum->name.'</h4>';
                          echo '<div id="who">'.$curriculum->short_description.'</div>';
                          echo '<a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="khoa-hoc/'.$curriculum->slug.'">Chi tiết</a>';
                          echo '</div></div></div>';
                        }
                        
                        ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Section: SCHEDULE -->
   <section class="" data-background-ratio="0.5" style="background-repeat: no-repeat;background-position: 1% 95%;background-size: 20%;" data-bg-img="<?php echo asset_url();?>images/banner/banner-schedule.jpg">
      <div class="container pb-60">
         <div class="section-title mb-10">
            <div class="row">
               <div class="col-md-8">
                  <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">LỚP ĐANG <span class="text-theme-color-2 font-weight-400">TUYỂN SINH</span></h2>
               </div>
            </div>
         </div>
         <div class="section-content">
            <div class="row">
               <div class="col-md-2"></div>
               <div class="col-md-8">
                  <div class="">
                     <table class="table table-bordered">
                        <thead>
                           <th>Lớp</th>
                           <th>Mã lớp</th>
                           <th>Lịch học</th>
                           <th>Khai giảng</th>
                           <th>Học phí</th>
                        </thead>
                        <tbody>
                           <?php 
                              foreach($this->data['schedule_full'] as $schedule)
                              {
                                $count = 0;
                                if($count % 2 == 1) {echo '<tr class="info">';}
                                else echo '<tr class="">';
                                $count++;
                                echo '<td>'.$schedule->name.'</td>';
                                echo '<td>'.$schedule->class_name.'</td>';
                                echo '<td>'.$schedule->schedule.'</td>';
                                echo '<td><b class="theme-text-color-red">'.$schedule->start_day.'</b></td>';
                                echo '<td>'.$schedule->fee.'</td>';
                                echo '</tr>';
                              }
                              ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="col-md-2"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-3 col-xs-3"></div>
            <a class="btn btn-theme-colored text-uppercase mt-10 center-block col-md-4 col-sm-6 col-xs-6" href ="lich-khai-giang">Đăng ký</a>
            <div class="col-md-4 col-sm-3 col-xs-3"></div>
         </div>
      </div>
</div>
</div>
</section>

<!-- Divider: funfact -->
<section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="<?php echo asset_url();?>images/banner/banner-course.png" data-parallax-ratio="0.7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                <div class="funfact text-center">
                    <i class="fa fa-file-text-o fa-inverse mb-20" aria-hidden="true"></i>
                    <div class="text-white text-uppercase mb-0">Hệ thống bài kiểm tra thường xuyên</div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                <div class="funfact text-center">
                    <i class="fa fa-user fa-inverse mb-20" aria-hidden="true"></i>
                    <div class="text-white text-uppercase mb-0">Bài tập theo khả năng từng học viên</div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                <div class="funfact text-center">
                    <i class="fa fa-film fa-inverse mb-20" aria-hidden="true"></i>
                    <div class="text-white text-uppercase mb-0">Thuyết trình tiếng Anh theo nhóm</div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                <div class="funfact text-center">
                    <i class="fa fa-bar-chart fa-inverse mb-20" aria-hidden="true"></i>
                    <div class="text-white text-uppercase mb-0">Theo dõi tiến bộ học viên theo từng giai đoạn</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: REGISTER STEP -->
<section class="divider parallax layer-overlay overlay-theme-colored-90" style="background-color: rgba(255, 255, 255, 0.58) !important;" data-background-ratio="0.5" data-bg-img="<?php echo asset_url();?>images/banner/banner-student.jpg">
   <div class="container pb-60">
      <div class="section-title mb-10">
         <div class="row">
            <div class="col-md-8">
               <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">CÁC BƯỚC <span class="text-theme-color-2 font-weight-400">ĐĂNG KÝ</span></h2>
            </div>
         </div>
      </div>
      <div class="section-content">
         <div class="row">
            <div class="col-md-12">
               <img src="<?php echo asset_url();?>images/banner/process.png" alt="" style="">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Divider: teacher -->
<section class="divider" data-background-ratio="0.5" data-bg-img="">
   <div class="container pb-50">
      <div class="section-title">
         <div class="row">
            <div class="col-md-6">
               <h2 class="mt-0 mb-0 text-uppercase line-bottom font-28">Đội ngũ<span
                  class="font-30 text-theme-color-2"> giảng viên</span></h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 mb-10">
            <div class="owl-carousel-3col testimonial-box text-black" data-dots="true">
               <?php 
                  foreach($this->data['teacher'] as $teacher){
                    if($teacher->url!='')
                      echo '<a href="'.$teacher->url.'">';
                    echo '<div class="item">';
                    echo '    <div class="testimonial custom pt-10">';
                    echo '        <div class="avatar-teacher">';
                    echo '            <img alt="" src="'.asset_url().'images/thumbnail/'.$teacher->image.'">';
                    echo '        </div>';
                    echo '        <div>';
                    echo '            <div class="home-image-teacher mb-15">'.$teacher->teacher_name;
                    // echo '                <small><em class="text-gray-lightgray">Học viên</em></small>';
                    echo '            </div>';
                    echo '            <h4 class="mt-0 description-color pl-20">'.$teacher->description.'</h4>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                    if($teacher->url!='') 
                      echo'</a>';
                  }
                  ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Divider: testimonials -->
<section class="divider parallax layer-overlay overlay-theme-colored-9" data-background-ratio="0.5" data-bg-img="<?php echo asset_url();?>images/banner/banner-review.jpg">
   <div class="container pb-50">
      <div class="section-title">
         <div class="row">
            <div class="col-md-6">
               <h2 class="mt-0 mb-0 text-uppercase line-bottom text-white font-28">Cảm nhận<span
                  class="font-30 text-theme-color-2"> học viên</span></h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 mb-10">
            <div class="owl-carousel-2col boxed testimonial-box" data-dots="true">
               <?php 
                  foreach($this->data['review_highlight'] as $review){
                    if($review->url!='')
                      echo '<a href="'.$review->url.'">';
                    echo '<div class="item">';
                    echo '    <div class="testimonial custom pt-10">';
                    echo '        <div class="thumb pull-left mb-0 mr-0 pr-20">';
                    echo '            <img alt="" src="'.asset_url().'images/thumbnail/'.$review->image.'">';
                    echo '        </div>';
                    echo '        <div class="ml-100 ">';
                    echo '            <h4 class="text-white mt-0">'.$review->description.'</h4>';
                    echo '            <p class="author mt-20">- <span class="text-theme-color-2">'.$review->student_name.'</span>';
                    echo '                <small><em class="text-gray-lightgray">Học viên</em></small>';
                    echo '            </p>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                    if($review->url!='') 
                      echo'</a>';
                  }
                  ?>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Section: News -->
<section id="event" class="">
   <div class="container pb-50">
      <div class="section-content">
         <div class="row">
            <div class="col-md-12">
               <h3 class="text-uppercase line-bottom mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i>Tin <span class="text-theme-color-2">Tức</span></h3>
               <?php 
                  foreach($this->data['document'] as $document){
                    echo '<article class="post media-post clearfix pb-0 mb-10">';
                    echo '<a href="tin-tuc/'.$document->slug.'" class="post-thumb mr-20"><img alt="'.$document->title.'" src="'.asset_url().'/images/thumbnail/'.$document->image.'" style="max-width: 200px"></a>';
                    echo '<div class="post-right">';
                    echo '<h4 class="mt-0 mb-5"><a href="tin-tuc/'.$document->slug.'">'.$document->title.'</a></h4>';
                    echo '<ul class="list-inline font-12 mb-5">';
                    echo '<li class="pr-0"><i class="fa fa-calendar mr-5"></i>'.date( 'd/m/Y', strtotime( $document->time ) ).'</li>';
                    echo '</ul>';
                    echo '<p class="mb-0 font-13">'.$document->short_description.'</p>';
                    echo '<a class="text-theme-colored font-13" href="tin-tuc/'.$document->slug.'">Chi tiết →</a>';
                    echo '</div>  </article>';
                  }
                  ?>
            </div>
           
         </div>
      </div>
   </div>
</section>
</div>
<!-- End Main Content -->