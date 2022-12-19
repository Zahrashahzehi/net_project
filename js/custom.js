$(document).ready(function(){
    // STICKY TOP CATEGORY NAVBAR
    var stickyNavTop = $('.no-top').offset().top;
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop>stickyNavTop){
            $('.no-top').addClass('sticky_top');
        }else{
            $('.no-top').removeClass('sticky_top');
        }
    };
    stickyNav();
    $(window).scroll(function(){
        stickyNav();
    });

});