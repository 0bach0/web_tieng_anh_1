<div class="main-content">
   <!-- Section: inner-header -->
   <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo asset_url()?>images/banner/banner-news.jpg" style="background-image: <?php echo asset_url()?>images/banner/banner-news.jpg; background-position: 50% 94px;">
      <div class="container pt-20 pb-20">
         <!-- Section Content -->
         <div class="section-content">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="title text-white">
                     Tin tức
                  </h1>
                  <ol class="breadcrumb text-left text-white mt-10">
                     <li><a href="/" class="text-white">Trang chủ</a></li>
                     <li class="active text-gray-silver">Tin tức</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- All Articles -->
   <section id="news">
      <div class="container" style="padding-bottom:0px;">
         <div class="row blog-posts">
            <div class="col-md-12">
               <div id="MasonryArticle" class="gallery-isotope grid-3 masonry gutter-30 clearfix" style="position: relative; height: 1901.45px;">

               <?php 

                foreach($this->data['news'] as $post){
                  echo '<div class="gallery-item">';
                  echo '<article class="post clearfix mb-30 bg-lighter">';
                  echo '<div class="entry-header">';
                  echo '  <div class="post-thumb thumb">';
                  if($post->image!=''){
                    echo '    <img src="'.asset_url().'images/thumbnail/'.$post->image.'" alt="'.$post->title.'" class="img-responsive img-fullwidth">';
                  }
                  echo '  </div>';
                  echo '  </div>';
                  echo '  <div class="entry-content border-1px p-20 pr-10">';
                  echo '<div class="entry-meta media mt-0 no-bg no-border">';
                  echo '  <div class="media-body">';
                  echo '    <div class="event-content pull-left flip">';
                  echo '      <h2 class="entry-title text-white text-uppercase m-0 mt-5 font-18"><a href="'.base_url().'tin-tuc/'.$post->slug.'">'.$post->title.'</a></h2>';
                  echo '    </div>';
                  echo '  </div>';
                  echo '  <div class="entry-date pr-15 pb-5">';
                  echo '    <ul>';
                  echo '      <li class="font-12font-weight-300">'.date( 'd/m/Y', strtotime( $post->time ) ).'</li>';
                  echo '    </ul>';
                  echo '  </div>';
                  echo '</div>';
                  echo '<p class="mt-10">'.$post->short_description.'</p>';
                  echo '<a href="'.base_url().'tin-tuc/'.$post->slug.'" class="btn-read-more">Chi tiết</a>';
                  echo '<div class="clearfix"></div>';
                  echo '</div>';
                  echo '</article>';
                  echo '</div>';
                  
                }
               ?>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section style="text-align: center;">
      <button id='load-more' type="button" class="btn btn-lg btn-default ld-over" style="height:50px;margin-bottom:20px;">
        <span>Xem thêm</span>
        <div class="ld ld-ring ld-spin"></div>
      </button>
   </section >
</div>