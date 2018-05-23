
$(function () {
    var viewW = $(window).width();
    if (viewW > 768) {
        $('.menuBar li').hover(function () {
            if ($('.searchForm').is(':visible')) {
                $(this).children('.subBar').css({
                    'background': 'transparent'
                });
            } else {
                $(this).children('.subBar').css({
                    'background': 'rgba(100,70,95,0.7)'
                });
            }
        });
    } else {
        $('.menuBar li').hover('style').hide();
    }
});
/*主選單被hover時要出現次選單
$('.menuBar li').hover(function () {
    var menuSub = $(this);
    menuSub.children('.subBar').stop(false, true).fadeIn(300);
}, function () {
    var menuSub = $(this);
    menuSub.children('.subBar').stop(false, true).fadeOut(300);
});
*/
/*主選單被hover且searchForm為顯示的狀態，則次選單的背景要隱藏or顯示
    $('.menuBar li').hover(function () {
        if ($('.searchForm').is(':visible')) {
            $(this).children('.subBar').css({
                'background': 'transparent'
            });
        } else {
            $(this).children('.subBar').css({
                'background': 'rgba(100,70,95,0.7)'
            });
        }
    });
*/
/*search被按時，search表單要隱藏or顯示&search表單背景顏色設定*/
$(function () {
    var off = 1;
    $('.searchBtn').click(function () {
        if (off == 1) {
            $('.searchForm').fadeIn(300);
            $('.searchForm').css({
                'background': 'rgba(100,70,95,0.7)'
            });
            off = 0;
        } else {
            $('.searchForm').fadeOut(300);
            $('.searchForm').css({
                'background': 'transparent'
            });
            off = 1;
        }
    });
});
/*以上是width<1200的js*/

/*視窗大於767 search直接顯示
$(function () {
    var off = 1;
    var viewW = $(window).width();
    if (viewW > 767) {
        $('.form-inline .btn').click(function () {
            if (off == 1) {
                $('.form-control').addClass('formShow');
                off = 0;
            } else {
                $('.form-control').removeClass('formShow');
                off = 1;
            }
        });
    } else {
        $('.form-inline .btn').click(function () {
            $('.form-control').addClass('formShow');
        });
        $('.form-control').addClass('formShow')
    }
});
*/
/*視窗小於768 hover效果隱藏*/
$(function () {
    var off = 1;
    var viewW = $(window).width();
    if (viewW > 768) {
        $('.menuBar li').hover(function () {
            $(this).children('.subBar').stop(false, true).fadeIn(300);
        }, function () {
            $(this).children('.subBar').stop(false, true).fadeOut(300);
        });
    } else {
        /*$('.menuBar li').hover('style').hide();*/
        $('.menuBar li').click(function () {
            $(this).children('.subBar').stop(false, true).slideToggle(300);
        });
    }
});

/*視窗小於768 hover效果隱藏*/
$(function () {
    var off = 1;
    var viewW = $(window).width();
    if (viewW > 768) {
        $('.toggleBtn').hide();
    } else {
        $('.toggleBtn').click(function () {
            if (off == 1) {
                $('.lineA1').addClass('lineA2');
                $('.lineB1').addClass('lineB2');
                $('.lineC1').addClass('lineC2');
                $('.mainMenu').stop(false, true).slideDown(500);
                off = 0;
            }else{
                $('.lineA1').removeClass('lineA2');
                $('.lineB1').removeClass('lineB2');
                $('.lineC1').removeClass('lineC2');
                $('.mainMenu').stop(false, true).slideUp(500);
                off = 1;
            }
        });
    }
});











