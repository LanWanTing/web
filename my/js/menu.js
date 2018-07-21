$(function(){
    /*menu按鈕切換時動態效果*/
    var off = 1;
    $('.menuBtn').click(function(){
        if (off == 1) {
            $('.menuBtn span').eq(0).addClass('lineA1');
            $('.menuBtn span').eq(1).addClass('lineB1');
            $('.menuBtn span').eq(2).addClass('lineC1');
            $('#iMain').addClass('iMainH');
            $('.menuWrap').stop(false, true).slideDown(500);
            $('.navBox').stop(false, true).show();
            $('.menuTxt').stop(false, true).show();
            off = 0;
        }
        else{
            $('.menuBtn span').eq(0).removeClass('lineA1');
            $('.menuBtn span').eq(1).removeClass('lineB1');
            $('.menuBtn span').eq(2).removeClass('lineC1');
            $('#iMain').removeClass('iMainH');
            $('.menuWrap').stop(false, true).slideUp(500);
            $('.navBox').stop(false, true).hide();
            $('.menuTxt').stop(false, true).hide();
            off = 1;
        }
    });
});