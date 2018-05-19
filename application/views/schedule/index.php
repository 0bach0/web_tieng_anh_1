<!-- Main Content -->
<div class="main-content">
   <section class="inner-header divider parallax layer-overlay overlay-dark-5" 
      data-bg-img="<?php echo asset_url()?>images/banner/banner-schedule.jpg" style="background-image: <?php echo asset_url()?>images/banner/banner-schedule.jpg;">
      <div class="container pt-70 pb-20">
         <!-- Section Content -->
         <div class="section-content">
            <div class="row">
               <div class="col-md-12">
                  <h2 class="title text-white">
                     Lịch khai giảng
                  </h2>
                  <ol class="breadcrumb text-left text-black mt-10">
                     <li><a href="/">Trang chủ</a></li>
                     <li class="active text-gray-silver">Lịch khai giảng</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section id="Schedule">
      <div class="container pt-20 pb-20">
         <div class="row">
            <div class="col-md-3">
               <div class="vertical-tab custom">
                  <ul class="nav nav-tabs">
                    <?php 
                      $count = 0;
                      foreach($this->data['schedule_list'] as $schedule)
                      {
                        echo '<li class="';
                        if($count==0) echo 'active';
                        echo '"><a href="#'.$schedule->id.'" data-toggle="tab">'.$schedule->title.'</a> </li>';
                        $count++;
                      }
                    ?>
                  </ul>
               </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12">
               <div class="tab-content custom">

              <?php
                $show =0;
                foreach($this->data['schedule_list'] as $schedule_list)
                {
                  if($show ==0)
                  echo '<div class="tab-pane fade in active" id="'.$schedule_list->id.'">';
                  else echo '<div class="tab-pane fade" id="'.$schedule_list->id.'">';
                  $show++;
                  echo '<table class="table table-bordered col-sm-12 col-xs-12"> <thead> <th>Mã lớp</th><th>Lịch học</th><th>Khai giảng</th><th>Học phí/buổi</th><th>Lợi ích khác</th><th></th></thead><tbody>';
                  $count = 0;
                  foreach($this->data['schedule_full'] as $schedule){
                    if ($schedule->curriculum_id == $schedule_list->id){
                      if($count % 2 == 1) {echo '<tr class="info">';}
                      else echo '<tr class="">';
                      $count++;
                      // echo '<td>'.$schedule_list->name.'</td>';
                      echo '<td>'.$schedule->class_name.'</td>';
                      echo '<td>'.$schedule->schedule.'</td>';
                      echo '<td><b class="theme-text-color-red">'.$schedule->start_day.'</b></td>';
                      echo '<td>'.$schedule->fee.'</td>';
                      echo '<td>'.$schedule->other_benefit.'</td>';
                      if($schedule->show_item==='1'){
                        echo '<td>';
   
echo '<button class="btn btn-default col-md-12 col-xs-12 col-sm-12" style="background-color: #e4602f;" data-toggle="modal" data-target="#myModal-'.$schedule->id.'">Đăng ký</button>';

echo '<div id="myModal-'.$schedule->id.'" class="modal fade" role="dialog">';
echo '  <div class="modal-dialog">';
echo '    <div class="modal-content">';
echo '      <div class="modal-header">';
echo '        <button type="button" class="close" data-dismiss="modal">&times;</button>';
echo '        <h4 class="modal-title">Đăng ký lớp '.$schedule_list->title.' '.$schedule->class_name.'</h4>';
echo '      </div>';
echo '      <div class="modal-body">';

echo '<form id="contact_form" name="contact_form" class="contact_form" action="'.base_url() .'register/submit" method="post">';
echo '  <div class="row">';
echo '    <div class="col-sm-12">';
echo '      <div class="form-group">';
echo '        <input name="form_name" class="form-control" type="text" placeholder="Họ tên (*)" required>';
echo '       </div>';
echo '    </div>';
echo '    <div class="col-sm-12">';
echo '      <div class="form-group">';
echo '        <input name="form_email" class="form-control" autocomplete="email" type="email" placeholder="Email (*)" required>';
echo '       </div>';
echo '    </div>';
echo '  </div>';

echo '  <div class="row">';
echo '    <div class="col-sm-12">';
echo '      <div class="form-group">';
echo '        <input name="form_phone" class="form-control required" autocomplete="tel" type="text" placeholder="Điện thoại (*)" required>';
echo '       </div>';
echo '    </div>';

echo '    <div class="col-sm-12">';
echo '      <div class="form-group">';
echo '        <input name="form_course" class="form-control hidden" type="text" value="'.$schedule->curriculum_id.'"';
echo '       </div>';
echo '    </div>';
echo '    <div class="col-sm-12">';
echo '      <div class="form-group">';
echo '        <input name="form_class_id" class="form-control hidden" type="text" value="'.$schedule->id.'"';
echo '       </div>';
echo '    </div>';

echo '  </div>';
                     
echo '  <div class="form-group modal-footer">';
echo '    <input name="form_botcheck" class="form-control" type="hidden" value=""/>';
echo '      <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                        data-loading-text="Xin chờ giây lát...">Đăng ký
                     </button>';
echo '                     <button type="reset"
                        class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">
                     Xóa
                     </button>';
echo '                 </div>
               </form>';

echo '      </div>';

echo '    </div>';
echo '  </div>';
echo '</div>';
                        
                        echo '</td>';
                      }
                      else {
                        echo '<td>';
                        echo '<button class="btn disabled col-md-12 col-xs-12 col-sm-12">Hết chỗ</button>';
                        echo '</td>';}
                      echo '</tr>';
                    }}
                  echo '</tbody></table></div>';
                    
                } 
              ?>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<!-- End Main Content -->


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
