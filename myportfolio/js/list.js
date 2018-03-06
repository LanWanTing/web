$(function () {
    $('nav').load('nav.html');
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

