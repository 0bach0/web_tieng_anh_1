$(document).ready(function () {
  var LIMIT = 5;
  var pagenow = LIMIT;
  
  $("#load-more").bind("click", function(){
    
    $("#load-more").addClass('running');
    $.get( 'https://'+document.domain+"/news/get_more_news/" + pagenow, function( data ) {
      pagenow +=LIMIT;
      data = JSON.parse(data);

      var grid = $('#MasonryArticle').masonry({
        itemSelector: '.gallery-item'
      });
      for (var key in data) {
        if (data.hasOwnProperty(key)) {
          console.log(data[key]);
          var elem = $('<div class="gallery-item" style="position: absolute;"><article class="post clearfix mb-30 bg-lighter"><div class="entry-header">  <div class="post-thumb thumb">    <img src="'+data[key].image+'" alt="'+data[key].title+'" class="img-responsive img-fullwidth">  </div>  </div>  <div class="entry-content border-1px p-20 pr-10"><div class="entry-meta media mt-0 no-bg no-border">  <div class="media-body">    <div class="event-content pull-left flip">      <h2 class="entry-title text-white text-uppercase m-0 mt-5 font-18"><a href="'+data[key].slug+'">'+data[key].title+'</a></h2>    </div>  </div>  <div class="entry-date pr-15 pb-5">    <ul>      <li class="font-12font-weight-300">25/07/2017</li>    </ul>  </div></div><p class="mt-10">'+data[key].short_description+'</p><a href="'+data[key].slug+'" class="btn-read-more">Chi tiết</a><div class="clearfix"></div></div></article></div>');
          grid.append(elem).masonry('appended', elem );
        }
      }
      
      setTimeout(function(){ 
        $("#load-more").removeClass('running');
      }, 1000);
    });
    
  });
});
