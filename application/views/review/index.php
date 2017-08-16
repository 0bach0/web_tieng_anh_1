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

<!-- All Articles -->
   <section id="review-all">
      <div class="container" style="padding-bottom:0px;">
         <div class="row blog-posts">
            <div class="col-md-12">
               <div id="MasonryArticle" class="gallery-isotope grid-3 masonry gutter-30 clearfix" style="position: relative; height: 1901.45px;">

               <?php 

                foreach($this->data['review_all'] as $review){
                  if($review->url!='')
                        echo '<a href="'.$review->url.'">';
                  echo '<div class="gallery-item">';
                  echo '<article class="post clearfix mb-30 bg-lighter">';
                  echo '<div class="entry-header">';
                  echo '  <div class="post-thumb thumb">';
                  if($review->image!=''){
                    echo '    <img src="'.asset_url().'images/thumbnail/'.$review->image.'" alt="'.$review->student_name.'" class="img-responsive img-fullwidth">';
                  }
                  echo '  </div>';
                  echo '  </div>';
                  echo '  <div class="entry-content border-1px p-20 pr-10">';
                  echo '<div class="entry-meta media mt-0 no-bg no-border">';
                  echo '  <div class="media-body">';
                  echo '    <div class="event-content pull-left flip">';
                  echo '      <h2 class="entry-title text-uppercase m-0 mt-5 font-18">'.$review->student_name.'</h2>';
                  echo '    </div>';
                  echo '  </div>';
                  echo '</div>';
                  echo '<p class="mt-10">'.$review->description.'</p>';
                  echo '<div class="clearfix"></div>';
                  echo '</div>';
                  echo '</article>';
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
   <section style="text-align: center;">
      <button id='load-more' type="button" class="btn btn-lg btn-default ld-over" style="height:50px;margin-bottom:20px;">
        <span>Xem thêm</span>
        <div class="ld ld-ring ld-spin"></div>
      </button>
   </section >