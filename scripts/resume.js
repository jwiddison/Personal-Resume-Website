$(".big_icon").click(function() {
    $('html, body').animate({
        scrollTop: $("#link_down").offset().top
    }, 1500);
});
