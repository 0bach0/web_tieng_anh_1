 </body>

 <?php 
        if (isset($this->data['js']))
        {
          foreach ($this->data['js'] as $row){
            echo '<script type="text/javascript" src="' . asset_url() . 'js/'.$row.'"> </script>';
          }
        }
?>

      

</html>
