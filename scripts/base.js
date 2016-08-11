$(document).ready(function($){
    function fullscreen(){
      $('.top_cover').css({
        width: $(window).width(),
        height: $(window).height()
      });
    }
    fullscreen();
  // Run the function in case of window resize
  $(window).resize(function() {
    fullscreen();
  });
});
