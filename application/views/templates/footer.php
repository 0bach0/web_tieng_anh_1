<!-- Footer -->
         <footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="http://placehold.it/1920x1280" style="background-image: url(&quot;http://placehold.it/1920x1280&quot;);">
            <div class="container">
               <div class="row border-bottom">
                  <div class="col-sm-6 col-md-4">
                     <div class="widget dark">
                        <img class="mt-5 mb-20" alt="" src="<?php echo asset_url()?>images/logo-web-tienganh.png">
                        <p  style="color:white;">15/378 Lê Duẩn, Hà Nội</p>
                        <ul class="list-inline mt-5">
                           <li class="m-0 pl-10 pr-10"><i class="fa fa-phone text-theme-color-2 mr-5"></i> <span class="" style="color:white;">096 886 0488</span></li>
                           <li class="m-0 pl-10 pr-10"><i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class=""  style="color:white;" href="mailto:%20theieltsplus@gmail.com"  style="color:white !important;">theieltsplus@gmail.com</a></li>
                           <li class="m-0 pl-10 pr-10"><i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="" style="color:white;" href="<?php echo base_url()?>"  style="color:white;">https://ieltsplus.edu.vn/</a></li>
                        </ul>
                     </div>
                     
                  </div>
                  <div class="col-sm-6 col-md-4">
                     <div class="widget dark">
                        <h4 class="widget-title"></h4>
                        <ul class="list angle-double-right list-border">
                           <li><a href="<?php echo base_url()?>gioi-thieu" style="color:white;">Giới thiệu</a></li>
                           <li><a href="<?php echo base_url()?>khoa-hoc" style="color:white;">Khóa học</a></li>
                           <li><a href="<?php echo base_url()?>lich-khai-giang" style="color:white;">Lịch khai giảng</a></googli>
                           <li><a href="<?php echo base_url()?>tin-tuc" style="color:white;">Tin tức</a></li>
                           <li><a href="<?php echo base_url()?>tai-lieu" style="color:white;">Tài liệu</a></li>
                           <li><a href="<?php echo base_url()?>cam-nhan-hoc-vien" style="color:white;">Cảm nhận học viên</a></li>
                           <li><a href="<?php echo base_url()?>lien-he" style="color:white;">Liên hệ</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                     <div class="widget dark">
                        <h4 class="widget-title">Facebook</h4>
                        <div class="fb-page" data-href="https://www.facebook.com//ieltswritingspeakingtheotarget/" data-tabs="timeline" data-width="350" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-bottom bg-black-333">
               <div class="container pt-20 pb-20">
                  <div class="row">
                     <div class="col-md-6">
                        <p class="font-11 m-0" style="color:white;">Copyright ©2018. All Rights Reserved</p>
                     </div>
                     <div class="col-md-6 text-right">
                        <div class="widget no-border m-0">
                           <ul class="list-inline sm-text-center mt-5 font-12">
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- End Footer -->
         <!-- <a class="scrollToTop" href="<?php echo base_url()?>#"><i class="fa fa-angle-up"></i></a> -->
      </div>
      <!-- Javascript -->
      <script type="text/javascript" src="<?php echo asset_url()?>js/jquery-2.2.4.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/jquery-ui.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/jquery-plugin-collection.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/jquery.themepunch.tools.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/jquery.themepunch.revolution.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/html5shiv.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/respond.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/custom.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/revolution.extension.actions.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/revolution.extension.carousel.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/revolution.extension.kenburn.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/revolution.extension.layeranimation.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/revolution.extension.migration.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/revolution.extension.navigation.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/revolution.extension.parallax.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/revolution.extension.slideanims.min.js"></script>
      <script type="text/javascript" src="<?php echo asset_url()?>js/revolution.extension.video.min.js"></script>

      <?php 
        if (isset($this->data['js']))
        {
          foreach ($this->data['js'] as $row){
            echo '<script type="text/javascript" src="' . asset_url() . 'js/'.$row.'"> </script>';
          }
        }
      ?>

      <div class="modal fade" id="BSParentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-body">
               </div>
            </div>
         </div>
      </div>

<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "688380191180933", // Facebook page ID
            call_to_action: "Nhắn tin ngay", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->

   </body>
</html>

