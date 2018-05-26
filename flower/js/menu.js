//子選單呈現效果設定
$(function () {
    var off = 1;
    var viewW = $(window).width();
    $('.subBar').hide();
    if (viewW > 768) {
        $('.menuBar li').click().unbind();
        $('.menuBar li').hover(function () {
            $(this).children('.subBar').stop(false, true).fadeIn(300);
        }, function () {
            $(this).children('.subBar').stop(false, true).fadeOut(300);
        });
    } else {
        $('.menuBar li').hover().unbind();
        $('.menuBar li').click(function () {
            $(this).children('.subBar').stop(false, true).slideToggle(300);
        });
    }
    $(window).resize(function () {
        var off = 1;
        var viewW = $(window).width();
        $('.subBar').hide();
        if (viewW > 768) {
            $('.menuBar li').click().unbind();
            $('.menuBar li').hover(function () {
                $(this).children('.subBar').stop(false, true).fadeIn(300);
            }, function () {
                $(this).children('.subBar').stop(false, true).fadeOut(300);
            });
        } else {
            $('.menuBar li').hover().unbind();
            $('.menuBar li').click(function () {
                $(this).children('.subBar').stop(false, true).slideToggle(300);
            });
        }
    });
});


//行動版狀態下，且mainMenu隱藏狀態下，視窗>768時，則mainMenu顯示
$(function () {
    var viewW = $(window).width();
    var off = 1;
    if (viewW > 768) {
        $('.mainMenu').show();
    } else {
        if ($('.mainMenu').is(':visible')) {
            $('.mainMenu').show();
        } else {
            $('.mainMenu').hide();
        }
    }
    $(window).resize(function () {
        var viewW = $(window).width();
        var off = 1;
        if (viewW > 768) {
            $('.mainMenu').show();
        } else {
            var off = 1;
            if ($('.mainMenu').is(':visible')) {
                $('.mainMenu').hide();
                $('.lineA1').removeClass('lineA2');
                $('.lineB1').removeClass('lineB2');
                $('.lineC1').removeClass('lineC2');
            } else {
                $('.mainMenu').hide();
            }
        }
    });
});

//行動版主選單按鈕，選單開啟/關閉的時候 >> 按鈕動畫+主選單展開、搜尋表單顯示狀態、搜尋表單背景設定
$(function () {
    var off = 1;
    $('.toggleBtn').click(function () {
        if (off == 1) {
            $('.lineA1').addClass('lineA2');
            $('.lineB1').addClass('lineB2');
            $('.lineC1').addClass('lineC2');
            $('.mainMenu').stop(false, true).slideDown(500);
            $('.searchForm').show();
            $('.searchForm').css({
                'background': 'rgba(100,70,95,0.7)'
            });
            off = 0;
        } else {
            $('.lineA1').removeClass('lineA2');
            $('.lineB1').removeClass('lineB2');
            $('.lineC1').removeClass('lineC2');
            $('.mainMenu').stop(false, true).slideUp(500);
            $('.searchForm').hide();
            $('.searchForm').css({
                'background': 'transparent'
            });
            off = 1;
        }
    });
    $(window).resize(function () {
        var viewW = $(window).width();
        if (viewW > 768) {
            $('.toggleBtn').hide();
            $('.lineA1').removeClass('lineA2');
            $('.lineB1').removeClass('lineB2');
            $('.lineC1').removeClass('lineC2');
            $('.searchForm').hide();
            $('.searchForm').css({
                'background': 'transparent'
            });
        } else {
            var off = 1;
            $('.toggleBtn').show();
            $('.toggleBtn').click(function () {
                if (off == 1) {
                    $('.lineA1').addClass('lineA2');
                    $('.lineB1').addClass('lineB2');
                    $('.lineC1').addClass('lineC2');
                    $('.mainMenu').stop(false, true).slideDown(500);
                    $('.searchForm').show();
                    $('.searchForm').css({
                        'background': 'rgba(100,70,95,0.7)'
                    });
                    off = 0;
                } else {
                    $('.lineA1').removeClass('lineA2');
                    $('.lineB1').removeClass('lineB2');
                    $('.lineC1').removeClass('lineC2');
                    $('.mainMenu').stop(false, true).slideUp(500);
                    $('.searchForm').hide();
                    $('.searchForm').css({
                        'background': 'transparent'
                    });
                    off = 1;
                }
            });
        }
    });
});

//搜尋按鈕被點時，表單的呈現方式&背景色設定
$(function () {
    var off = 1;
    $(window).resize(function () {
        var viewW = $(window).width();
        if (viewW > 768) {
            $('.searchBtn').show();
        } else {
            $('.searchBtn').hide();
        }
    });
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

//次選單的背景顯示狀態
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
        $('.menuBar li').hover(function () {
            $(this).children('.subBar').css({
                'background': 'rgba(100,70,95,0.7)'
            });
        });
        $('.menuBar li').click(function () {
            $(this).children('.subBar').css({
                'background': 'rgba(100,70,95,0.7)'
            });
        });
    }
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
            $('.menuBar li').hover(function () {
                $(this).children('.subBar').css({
                    'background': 'rgba(100,70,95,0.7)'
                });
            });
            $('.menuBar li').click(function () {
                $(this).children('.subBar').css({
                    'background': 'rgba(100,70,95,0.7)'
                });
            });
        }
    });
});











