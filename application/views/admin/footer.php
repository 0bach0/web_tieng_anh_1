 </body>

<!-- <script type="text/javascript" src="<?php echo asset_url()?>js/bootstrap.min.js"></script>
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
<script type="text/javascript" src="<?php echo asset_url()?>js/revolution.extension.video.min.js"></script> -->

 <?php 
        if (isset($this->data['js']))
        {
          foreach ($this->data['js'] as $row){
            echo '<script type="text/javascript" src="' . asset_url() . 'js/'.$row.'"> </script>';
          }
        }
?>

      

</html>