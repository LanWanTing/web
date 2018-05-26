//主選單被滑入且搜尋表單為呈現狀態時，子選單背景色設定
$(function () {
    $(window).resize(function () {
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
            $('.menuBar li:hover').removeAttr();
        }
    });
});
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
        $('.menuBar li:hover').removeAttr();
    }
});

//搜尋表單的呈現方式&背景色設定
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

//子選單&主選單按鈕效果呈現方式
$(function () {
    $(window).resize(function () {
        var off = 1;
        var viewW = $(window).width();
        if (viewW > 768) {
            //視窗大於768，次選單淡入淡出
            $('.menuBar li').hover(function () {
                $(this).children('.subBar').stop(false, true).fadeIn(300);
            }, function () {
                $(this).children('.subBar').stop(false, true).fadeOut(300);
            });
            //視窗大於768 主選單按鈕隱藏
        } else {
            $('.menuBar li:hover').removeAttr();
            //視窗小於768，次選單滑入滑出出現
            $('.menuBar li').click(function () {
                $(this).children('.subBar').stop(false, true).slideToggle(300);
            });
            //視窗小於768，主選單按鈕出現
            $('.toggleBtn').click(function () {
                if (off == 1) {
                    $('.lineA1').addClass('lineA2');
                    $('.lineB1').addClass('lineB2');
                    $('.lineC1').addClass('lineC2');
                    $('.mainMenu').stop(false, true).slideDown(500);
                    off = 0;
                } else {
                    $('.lineA1').removeClass('lineA2');
                    $('.lineB1').removeClass('lineB2');
                    $('.lineC1').removeClass('lineC2');
                    $('.mainMenu').stop(false, true).slideUp(500);
                    off = 1;
                }

            });
        }
    });
});
//子選單&主選單按鈕效果呈現方式
$(function () {
    var off = 1;
    var viewW = $(window).width();
    if (viewW > 768) {
        //視窗大於768，次選單淡入淡出
        $('.menuBar li').hover(function () {
            $(this).children('.subBar').stop(false, true).fadeIn(300);
        }, function () {
            $(this).children('.subBar').stop(false, true).fadeOut(300);
        });
        //視窗大於768 主選單按鈕隱藏
    } else {
        $('.menuBar li:hover').removeAttr();
        //視窗小於768，次選單滑入滑出出現
        $('.menuBar li').click(function () {
            $(this).children('.subBar').stop(false, true).slideToggle(300);
        });
        //視窗小於768，主選單按鈕出現
        $('.toggleBtn').click(function () {
            if (off == 1) {
                $('.lineA1').addClass('lineA2');
                $('.lineB1').addClass('lineB2');
                $('.lineC1').addClass('lineC2');
                $('.mainMenu').stop(false, true).slideDown(500);
                off = 0;
            } else {
                $('.lineA1').removeClass('lineA2');
                $('.lineB1').removeClass('lineB2');
                $('.lineC1').removeClass('lineC2');
                $('.mainMenu').stop(false, true).slideUp(500);
                off = 1;
            }

        });
    }
});
