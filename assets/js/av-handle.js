var audio = document.getElementsByTagName('audio');
var supposedCurrentTime = [];    

Object.keys(audio).forEach(function(key) {

    console.log(key, audio[key]);
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