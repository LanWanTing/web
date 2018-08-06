/*APP圖片切換*/
$(function () {
    $('.appBtn1').click(function(){
        $('.app1').stop(true,true).fadeIn(500);
        $('.app2').stop(true,true).fadeOut(500);
        $('.app3').stop(true,true).fadeOut(500);
        $('.app4').stop(true,true).fadeOut(500);
    });
    $('.appBtn2').click(function(){
        $('.app2').stop(true,true).fadeIn(500);
        $('.app1').stop(true,true).fadeOut(500);
        $('.app3').stop(true,true).fadeOut(500);
        $('.app4').stop(true,true).fadeOut(500);
    });
    $('.appBtn3').click(function(){
        $('.app3').stop(true,true).fadeIn(500);
        $('.app1').stop(true,true).fadeOut(500);
        $('.app2').stop(true,true).fadeOut(500);
        $('.app4').stop(true,true).fadeOut(500);
    });
    $('.appBtn4').click(function(){
        $('.app4').stop(true,true).fadeIn(500);
        $('.app1').stop(true,true).fadeOut(500);
        $('.app2').stop(true,true).fadeOut(500);
        $('.app3').stop(true,true).fadeOut(500);
    });
});


/*APP圖片按鈕顯示設定*/
$(function () {
    $(window).scroll(function () {
        var scrollValue = $(window).scrollTop();
        var targetScroll = $('.workTxtContent').offset().top;
        if (scrollValue >= targetScroll) {
            $('.workApp').stop(true,true).fadeIn(1000);
        } else {
            $('.workApp').stop(true,true).fadeOut(1000);
        }
    });
});