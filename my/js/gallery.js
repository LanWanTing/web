/*
$(function () {
    $(".workApp").delegate("li", "click", function () {
        if (document.body.scrollTop == 0) {
            var wrapTop = document.documentElement.scrollTop;
        } else {
            var wrapTop = document.body.scrollTop;
        }
        $(".workGallery").stop(true, true).fadeIn(500);
        $(".workGallery").find("." + $(this).attr("org")).stop(true, true).fadeIn(500);
        $("html, body").scrollTop(0);
        $(".workGallery").delegate('.closeBtn', "click", function () {
            $(".workGallery, .workGallery .galleryBox").stop(true, true).fadeOut(500);
            $("html, body").scrollTop(wrapTop);
            $('body').removeClass('offScroll');
        });
        $(".workGallery").click(function () {
            $(this).stop(true, true).fadeOut(500);
            $("html, body").scrollTop(wrapTop);
            $('body').removeClass('offScroll');
        });
    });
});
*/

$(function () {
    $('.appBtn1').click(function(){
        $('.app1').stop(true,true).show();
        $('.app2').stop(true,true).hide();
        $('.app3').stop(true,true).hide();
        $('.app4').stop(true,true).hide();
    });
    $('.appBtn2').click(function(){
        $('.app1').stop(true,true).hide();
        $('.app2').stop(true,true).show();
        $('.app3').stop(true,true).hide();
        $('.app4').stop(true,true).hide();
    });
    $('.appBtn3').click(function(){
        $('.app1').stop(true,true).hide();
        $('.app2').stop(true,true).hide();
        $('.app3').stop(true,true).show();
        $('.app4').stop(true,true).hide();
    });
    $('.appBtn4').click(function(){
        $('.app1').stop(true,true).hide();
        $('.app2').stop(true,true).hide();
        $('.app3').stop(true,true).hide();
        $('.app4').stop(true,true).show();
    });
});