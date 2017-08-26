<div class="main-content">
  <script type="text/javascript">var test_time = <?php echo $this->data['course']->test_time; ?>;</script>

  <!-- Section: confirm modal -->
  <section style="text-align: center;">
    <div class="modal fade" id="myModal" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Xác nhận thông tin </br> <?php echo $this->data['course']->title; ?></h4>
          </div>

          <div class="modal-body">
            <form id="contact_form" name="contact_form" class="" action="<?php echo base_url();?>register/submit" method="post">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="form-group">
                           <input name="form_name" class="form-control" type="text" placeholder="Họ tên (*)"
                              required id="form_name">
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <div class="form-group">
                           <input name="form_email" class="form-control required email" type="email"
                              placeholder="Email (*)" id="form_email">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="form-group">
                           <input name="form_phone" class="form-control required" type="text" placeholder="Điện thoại (*)" id="form_phone">
                        </div>
                     </div>
                     
                  </div>
                  
            </form>
            <em>
              Vui lòng chuẩn bị sẵn loa / tai nghe.
              <br>
              Bài kiểm tra kéo dài trong <?php echo $this->data['course']->test_time;?> phút, bạn không thể dừng lại khi bài kiểm tra đã bắt đầu.
            </em>
          
          
          
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="start-windows">Bắt đầu</button>
            <button type="button" class="btn btn-secondary" id="quit-windows">Thoát</button>
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button> -->
          </div>
        </div>
      </div>
    </div>    

    <div class="modal fade" id="doneModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Xác nhận thông tin </br> <?php echo $this->data['course']->title; ?></h4>
          </div>

          <div class="modal-body">
          
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="confirm-windows">Bắt đầu</button>
          </div>
        </div>
      </div>
    </div>    
  </section >

  <div id="clockdiv">
    
    <div>
      <span class="minutes"></span>
      <span class="seconds"></span>
      <!-- <div class="smalltext">Minutes</div> -->
    </div>
    <!-- <div> -->
      <!-- <div class="smalltext">Seconds</div> -->
    <!-- </div> -->
  </div>

  <section id="sheet" class="container">
    <div class="row">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-8">
        <div class="form-group">
        <?php 
          foreach($this->data['question-list'] as $question){
            echo '<div class="question">';
            echo $question->content;
            if($question->answer_size==='small'){
              echo '<input type="text" class="form-control answer-list" id="">';
            }
            else{
              echo '<textarea class="form-control answer-list" rows="5" id=""></textarea>';
            }
            echo '</div>';
          }
        ?>
        </div>
      </div>
      <div class="col-sm-2"></div>

    </div>
    <div class="row">
      <div class="col-sm-5">      </div>
      <button type="button" id="submit-answer" style="background-color: #e4602f;" class="btn col-sm-2"><span style="color:#fff; font-size: large;">Nộp bài<span></button>
      <div class="col-sm-5">      </div>
    </div>

  </div>
  </section>

</div>