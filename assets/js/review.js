$(document).ready(function () {
  var LIMIT = 5;
  var pagenow = LIMIT;
  
  $("#load-more").bind("click", function(){
    
    $("#load-more").addClass('running');
    $.get( 'https://'+document.domain+"/review/get_more_review/" + pagenow, function( data ) {
      pagenow +=LIMIT;
      data = JSON.parse(data);

      var grid = $('#MasonryArticle').masonry({
        itemSelector: '.gallery-item'
      });
      for (var key in data) {
        if (data.hasOwnProperty(key)) {
          // console.log(data[key]);
          var strElem = '';
          if(data[key].url!=''){
            strElem = '<a href="'+data[key].url+'">';
          }
          strElem +='<div class="gallery-item"> <article class="post clearfix mb-30 bg-lighter"> <div class="entry-header">  <div class="post-thumb thumb">';
          if(data[key].image!=''){
                  strElem+= '    <img src="'+data[key].image+'" alt="'+data[key].student_name+'" class="img-responsive img-fullwidth">';
          }
          strElem += '  </div>  </div>   <div class="entry-content border-1px p-20 pr-10"><div class="entry-meta media mt-0 no-bg no-border">  <div class="media-body">    <div class="event-content pull-left flip">';
          strElem += '      <h2 class="entry-title text-uppercase m-0 mt-5 font-18">'+data[key].student_name+'</h2>'+'</div>    </div>    </div><p class="mt-10">'+data[key].description+'</p><div class="clearfix"></div></div></article></div>';
          var elem = $(strElem);
          grid.append(elem).masonry('appended', elem );
        }
      }
      
      setTimeout(function(){ 
        $("#load-more").removeClass('running');
      }, 1000);
    });
    
  });
});
