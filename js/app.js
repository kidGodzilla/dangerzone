/* This code is for window resize events. This is helpful when demonstrating responsiveness in class, or portrait / landscape switch events */
$(document).ready(function(){
    $(window).resize(function(){
        if ($(window).width() > 1000) {
            $('.menu li').show();
            $('.menu ul').show();
            $('.mobile-only').hide();
        }
        else {
            $('#menu li').hide();
            $('.menu ul li ul').hide();
            $('.mobile-only').hide();
        }
    });
});
/* Mobile Menu toggler */
$('.hasChildren').click(function() {
    if ($(window).width() < 1000) {
        $('.menu ul li ul').not(this).hide();
        $(this).siblings().toggle();
        return false;
    }
});