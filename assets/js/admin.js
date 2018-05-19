function handleSelect(elm)
{
  window.location = '/quan-ly/question/'+elm.value;
}

function submit(elm) {
  var theUrl = 'https://'+document.domain+"/admin/update_time/"+slug2+'/'+elm.value;
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open( "GET", theUrl, true ); // false for synchronous request
  xmlHttp.send( null );
  return xmlHttp.responseText;
};

