$(function () {
    $('nav').load('nav.html');
    //如果是手機版時() ==================================================================
    /*if( $('.navbar-toggler').is(':visible') ){
        //當選單按鈕被click
        $('#navb .navbar-nav a:not(.dropdown-toggle)').click(function(){
            //自動觸發.navbar-toggle按鈕被按=>選單關閉
            window.location.href="网站链接";
        });
    }*/
    $('footer').load('footer.html');
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

