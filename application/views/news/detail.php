<div class="main-content">
   <!-- Section: inner-header -->
   <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo asset_url();?>images/banner/inner-banner.jpg" style="background-image: url(<?php echo asset_url();?>images/banner/inner-banner.jpg); background-position: 50% 24px; background-size: 100%;">
      <div class="container pt-20 pb-20">
         <!-- Section Content -->
         <div class="section-content">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="title text-white">
                     <?php echo $this->data['news']->title?>
                  </h1>
                  <ol class="breadcrumb text-left text-white mt-10">
                     <li><a href="/" class="text-white">Trang chủ</a></li>
                     <li><a href="/tin-tuc" class="text-white">Tin tức</a></li>
                     <li class="active text-gray-silver"><?php echo $this->data['news']->title?></li>
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
                        <div class="post-thumb thumb"> <img src="<?php echo asset_url().'images/thumbnail/'.$this->data['news']->image?>" alt="" class="img-responsive img-fullwidth"> </div>
                     </div>
                     <div class="entry-title pt-10">
                        <div class="text-uppercase font-18 mt-10 text-black"><?php echo $this->data['news']->title?></div>
                     </div>
                     <div class="entry-meta">
                        <ul class="list-inline">
                           <li>Đăng ngày: <span class="text-theme-color-2"> <?php echo date( 'd/m/Y', strtotime( $this->data['news']->time ) );?></span></li>
                        </ul>
                     </div>
                     
                     <div class="entry-content mt-10">
                        <?php echo $this->data['news']->full_description?>
                        
                         <div class="fb-comments" data-href="<?php echo current_url();?>" data-width="100%" data-numposts="5"></div> 
                     </div>
                  </article>
               </div>
            </div>
            <div class="col-sm-12 col-md-3">
               <div class="sidebar sidebar-left mt-sm-30">
                  <!-- <div class="widget">
                     <h5 class="widget-title line-bottom">Bài viết mới nhất</h5>
                     <div class="latest-posts">
                     </div>
                  </div>
                  <div class="widget">
                     <h5 class="widget-title line-bottom">Bài viết liên quan</h5>
                     <div class="latest-posts">
                     </div>
                  </div> -->

                   <div class="fb-page" data-href="https://www.facebook.com/ieltswritingspeakingtheotarget/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/ieltswritingspeakingtheotarget/" class="fb-xfbml-parse-ignore">
                      <a href="https://www.facebook.com/ieltswritingspeakingtheotarget/">Luyện Ielts Writing &amp; Speaking theo từng mục tiêu</a>
                    </blockquote>
                  </div> 
               </div>
            </div>
         </div>
      </div>
   </section>
</div>