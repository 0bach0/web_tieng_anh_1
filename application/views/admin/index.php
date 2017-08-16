<div class='main'> 

  <?php echo $this->data['table'];?>

  <?php 
  if(isset($this->data['curriculum_list'])){
    echo '<h2>List các khóa học</h1>';
    echo '<table class="table table-hover">    <thead>      <tr>        <th>Id</th>        <th>Curriculum name</th>      </tr>    </thead>    <tbody>';
      
    foreach($this->data['curriculum_list'] as $curriculum){
      foreach($curriculum as $key => $value)
        echo '<tr> <td>'.$key.'</td><td>'.$value.'</td></tr>';
    }
    echo '</tbody>  </table>';
  }
  // echo '<textarea class="xcrud-input xcrud-texteditor ckeditor" data-type="texteditor" name="cG9zdC5mdWxsX2Rlc2NyaXB0aW9u" id="editor_rq3a0x">&lt;p&gt;Th&amp;aacute;ng 7 n&amp;agrave;y, m&amp;igrave;nh tiếp tục mở c&amp;aacute;c lớp Ietls từ cơ bản tới n&amp;acirc;ng cao- x&amp;acirc;y dựng nền tảng cho c&amp;aacute;c bạn mới học v&amp;agrave; ho&amp;agrave;n thiện kĩ năng cho c&amp;aacute;c bạn sắp thi. Với sự hỗ trợ của team gi&amp;aacute;o vi&amp;ecirc;n Việt Nam (profile c&amp;oacute; trong từng link)- gi&amp;aacute;o vi&amp;ecirc;n nước ngo&amp;agrave;i (native UK), trợ giảng v&amp;agrave; tutor (Ielts 8.0) rất t&amp;acirc;m huyết + hệ thống kiểm tra feedback thường xuy&amp;ecirc;n đảm bảo đ&amp;atilde; học l&amp;agrave; tiến bộ :) Cụ thể: *** NH&amp;Oacute;M LỚP 4 KĨ NĂNG (nh&amp;oacute;m n&amp;agrave;y khai giảng thường xuy&amp;ecirc;n, khoảng 3 tuần c&amp;oacute; một lớp Found/ Inter mới) 1. IELTS FOUNDATION 22- target 4.5+ https://goo.gl/forms/EJjJFh0q1rhTLjjR2&lt;/p&gt;</textarea>';
  ?>


</div>