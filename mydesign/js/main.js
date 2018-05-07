/*
$(function() {
    var tagetTop = $('.listArea').eq(pageNo).offset().top;
    $('.secMenu a').click(function(){ 
        $('html,body').animate({scrollTop:tagetTop}, 500);
    });
});
*/
$(function () {
    //$('nav').load('nav.html');
    //$('footer').load('footer.html');
    $(function () {
        var openBtn = $('.navbar-toggler').is(':visible')
        var viewW = $(window).width();
        if (viewW > 991) {
            var pageNo = $('body').attr('data-pageno'); //偵測目前頁面是第幾頁
            var tagetLeft = $('.navbar-nav>li').eq(pageNo).offset().left; //console.log(tagetLeft); //偵測所在頁面對應的按鈕與視窗左邊的距離
            var tagetWidth = $('.navbar-nav>li').eq(pageNo).innerWidth(); //console.log(tagetWidth); //偵測所在頁面對應的按鈕的寬度
            //網頁已載入#navPoint(做個動畫animate)自左飛入
            $('#navPoint').animate({
                left: tagetLeft,
                width: tagetWidth
            }, 1000, 'easeInOutCubic');

            //當滑鼠HoverButtom要控制navPoint去移動與變化
            $('.navbar-nav>li').hover(
                //#navPoint要移動到滑鼠指定的按鈕上的動畫呈現
                function () {
                    var goalLeft = $(this).offset().left;
                    var goalWidth = $(this).innerWidth();
                    $('#navPoint').stop().animate({
                        left: goalLeft,
                        width: goalWidth
                    }, 200, 'easeOutQuint');
                }
                //滑鼠離開按鈕時#navPoint要回去所在按鈕的動畫呈現
                ,
                function () {
                    $('#navPoint').stop().animate({
                        left: tagetLeft,
                        width: tagetWidth
                    }, 200, 'easeOutQuint');
                }
            );
            //當視窗調整大小時，#navPoint要跟著調整位置
            $(window).resize(function () {
                tagetLeft = $('.navbar-nav>li').eq(pageNo).offset().left;
                tagetWidth = $('.navbar-nav>li').eq(pageNo).innerWidth();
                $('#navPoint').stop().animate({
                    left: tagetLeft,
                    width: tagetWidth
                }, 200, 'easeOutQuint');
            });
        } else {
            $('#navPoint').removeAttr('style').hide();
        }
    });
    $('.secMenu .nav-link').click(function () {
        var contentNo = $('#listArea').attr('data-pageno');
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top - $('.secMenu').outerHeight()
        },800 ,'easeInOutCubic');
        return false;
    });
    
    $(window).scroll(function () {
        var scrollValue = $(window).scrollTop();
        var fixMenu = $('.secMenu')
        var targetScroll = $('.container-fluid').offset().top - $('#mainHeader').innerHeight();
        if (scrollValue >= targetScroll) {
            fixMenu.addClass('fixTop');
            $('#mainHeader').removeClass('fixed-top');
            $('.secMenu a').addClass('white-txt');
            $('.topButton').show().fadeIn();
        } else {
            fixMenu.removeClass('fixTop');
            $('#mainHeader').addClass('fixed-top');
            $('.secMenu a').removeClass('white-txt');
            $('.topButton').hide().fadeOut(800);
        }
    });
    $('.topButton').click(function(){
        $('html,body').animate({scrollTop:0} ,800 ,'easeInOutCubic');
    });
});

/*瀑布流效果*/
$(function () {
    /*$('.masonry').masonry({
					  itemSelector: '.item'
					});*/
    var $container = $('.masonry');
    //當圖片讀取完畢才執行
    $container.imagesLoaded(function () {
        // initialize
        $container.masonry({
            itemSelector: '.item'
        })

    });
});
/**/
