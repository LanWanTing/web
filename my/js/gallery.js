$(function () {
    $(".workPhoto").delegate("li", "click", function () {
        if (document.body.scrollTop == 0) {
            var wrapTop = document.documentElement.scrollTop;
        } else {
            var wrapTop = document.body.scrollTop;
        }
        $('body').addClass('offScroll');
        //$(".iMain").hide();
        $(".workGallery").stop(true, true).fadeIn(500);
        $(".workGallery").find("." + $(this).attr("org")).stop(true, true).fadeIn(500);
        $("html, body").scrollTop(0);
        $(".workGallery").delegate('.closeBtn', "click", function () {
            $(".workGallery, .workGallery .galleryBox").stop(true, true).fadeOut(500);
            $("html, body").scrollTop(wrapTop);
            $('body').removeClass('offScroll');
        });
    });
});

$(function () {
    //變數宣告區=============================================================
    var galleryBoxNo = -1; //負責page1目前畫面呈現的背景的索引號碼(0代表第1張)

    //page1影像輪播----------------------------------------------------------
    //偵測.page1中class名稱為page1bg的length"總數量"
    //alert($('.page1 .page1bg').length);

    function page1show() {
        //讓目前畫面上的影像以1秒的時間淡出
        $('.workGallery .galleryBox').eq(galleryBoxNo).fadeOut(0);

        //準備下一張
        galleryBoxNo++;
        if (galleryBoxNo == $('.page1 .page1bg').length) {
            galleryBoxNo = 0;
        }

        //讓下一張以1秒的時間淡入
        $('.workGallery .galleryBox').eq(galleryBoxNo).fadeIn(1000);
    }

    page1show(); //馬上執行一次page1show()函式
    setInterval(page1show, 2000); //設定每隔5秒之後執行一次page1show的函式

});