$('#myModal').modal('show');

$('#quit-windows').click(function(){
  location.href= '/';
});

$('#start-windows').click(function(){
  localStorage.setItem("form_name",$('#form_name').val());
  localStorage.setItem("form_phone",$('#form_phone').val());
  localStorage.setItem("form_email",$('#form_email').val());
  $('#myModal').modal('hide');
  force_user();
  var deadline = new Date(Date.parse(new Date()) + test_time * 60 * 1000);
  initializeClock('clockdiv', deadline);
});

$('#form_name').val(localStorage.getItem("form_name"));
$('#form_phone').val(localStorage.getItem("form_phone"));
$('#form_email').val(localStorage.getItem("form_email"));

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / (1000 * 60 * 60))) *60 + Math.floor((t / 1000 / 60) % 60);
  // var hours = Math.floor((t / (1000 * 60 * 60)));
  // var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    // 'days': days,
    // 'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);
    
    if (t.total <= 1) {
      clearInterval(timeinterval);
      t.minutes = 0;
      t.seconds = 0;
      alert('Hết giờ!');
      submit_answer();
      
    }

    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

$('#submit-answer').click(function(){
  var r = confirm("Bạn có muốn nộp bài luôn?");
  if (r == true) {
    submit_answer();
  } else {
  }
});

function submit_answer(){
//console.log('hihi',typeof($('.answer-list')));
  var x = document.getElementsByClassName("answer-list");
  var answer = [];
  var str_answer = '';

  for (var key in x) {
    if (x.hasOwnProperty(key)) {
      // console.log(key + ' ' + x[key].value);
      answer.push(x[key].value);

      str_answer += '<h3>'+ (parseInt(key)+1) +'</h3>';
      str_answer += x[key].value + '<hr>';
    }
  }
  answer = JSON.stringify(answer);

  var data = {
    form_name : localStorage.getItem("form_name"),
    form_phone : localStorage.getItem("form_phone"),
    form_email : localStorage.getItem("form_email"),
    form_course : localStorage.getItem("form_course"),
    form_class_id : localStorage.getItem("form_class_id"),
    form_answer : str_answer
  };

  $.ajax({
    type: "POST",
    url: 'http://' + window.location.hostname + '/register/submit',
    data: data,
    success: function(succ){
      location.href= '/';
      console.log(succ);
      alert('Nộp bài thành công. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất!');
    },
    dataType: 'json'
  });
}

var active = 2;

function force_user(){
  var audio = document.getElementsByTagName('audio');
  var supposedCurrentTime = [];    

 Object.keys(audio).forEach(function(key) {

  supposedCurrentTime[key] = 0;
  audio[key].addEventListener('timeupdate', function() {
    if (!audio[key].seeking) {
          supposedCurrentTime[key] = audio[key].currentTime;
    }
  });

  audio[key].addEventListener('seeking', function() {
    // guard agains infinite recursion:
    // user seeks, seeking is fired, currentTime is modified, seeking is fired, current time is modified, ....
    var delta = audio[key].currentTime - supposedCurrentTime[key];
    if (Math.abs(delta) > 0.01) {
      audio[key].currentTime = supposedCurrentTime[key];
    }
  });

  audio[key].addEventListener('pause', function() {
    if(!audio[key].ended){
      audio[key].play();
    }
    });
 });
  
}

function show_modal(message){
  // $('#doneModal').modal('show');

}

window.onbeforeunload = function () {
    submit_answer();
    return "Bạn có muốn kết thúc luôn không?";
};
