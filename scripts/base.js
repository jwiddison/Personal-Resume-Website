$(document).ready(function($){
 // Defining a function to set size for #hero
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
