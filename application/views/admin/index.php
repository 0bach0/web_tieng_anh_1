<div class='main'> 
  <script type="text/javascript">var slug2 = <?php echo $this->data['slug2'] ?>;</script>

  <?php 
  if($this->data['slug']==='question'){
    echo '<h1>Chọn khóa học</h1>';
    echo '<div class="row">';
    echo '  <div class="col-lg-6">';
    echo '   <div class="">';
    echo '      <select class="form-control" onchange="javascript:handleSelect(this)">';

    foreach($this->data['curriculum_list'] as $curriculum){
      foreach($curriculum as $key => $value){
        if($this->data['slug2']==$key){
          echo '<option value="'.$key.'" selected>'.$value.'</option>';
        }
        else{
          echo '<option value="'.$key.'">'.$value.'</option>';
          
        }
      }
    }
    echo '      </select>';
    echo '   </div>';
    echo '   </div>';
    echo '   <div class="col-lg-6">';
    echo '    <div class="input-group">';
    echo '      <input class="form-control" id="test_time" type="number" min="1" value="'.$this->data['course'][0]->test_time.'" onchange="javascript:submit(this)">';
    echo '      <span class="input-group-addon">phút</span>';
    echo '    </div>';
    echo '   </div>';
    echo '  </div>';
    echo '</div>';

  }
  
  if(isset($this->data['table'])){
    echo $this->data['table'];
  }
  // if(isset($this->data['curriculum_list']) && ($this->data['slug']!='question')){
  //   echo '<h2>List các khóa học</h1>';
  //   echo '<table class="table table-hover">    <thead>      <tr>        <th>Id</th>        <th>Curriculum name</th>      </tr>    </thead>    <tbody>';
      
  //   foreach($this->data['curriculum_list'] as $curriculum){
  //     foreach($curriculum as $key => $value)
  //       echo '<tr> <td>'.$key.'</td><td>'.$value.'</td></tr>';
  //   }
  //   echo '</tbody>  </table>';
  // }

  ?>


</div>