$(function() {
    $('nav').load('nav.html');
    $('footer').load('footer.html');
});

/*瀑布流效果*/
$(function() {
    /*$('.masonry').masonry({
					  itemSelector: '.item'
					});*/
    var $container = $('.masonry');
    //當圖片讀取完畢才執行
    $container.imagesLoaded(function() {
        // initialize
        $container.masonry({
            itemSelector: '.item'
        })

    });
});
$(function() {
//如果是手機版時() ==================================================================
if( $('.navbar-toggler').is(':visible') ){
    //當選單按鈕被click
    $('#navb .navbar-nav a:not(.dropdown-toggle)').click(function(){ 
        //#navb .navbar-nav a，但不是有.dropdown-toggle這個class的a之外被點則處發關閉按鈕
        //自動觸發.navbar-toggle按鈕被按=>選單關閉
        $('.navbar-toggler').trigger('click');
    });
}
});