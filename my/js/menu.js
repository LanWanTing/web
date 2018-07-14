$(function(){
    /*menu按鈕切換動態效果*/
    var off = 1;
    $('.menuBtn').click(function(){
        if (off == 1) {
            $('.menuBtn span').eq(0).addClass('lineA1');
            $('.menuBtn span').eq(1).addClass('lineB1');
            $('.menuBtn span').eq(2).addClass('lineC1');
            off = 0;
        }
        else{
            $('.menuBtn span').eq(0).removeClass('lineA1');
            $('.menuBtn span').eq(1).removeClass('lineB1');
            $('.menuBtn span').eq(2).removeClass('lineC1');
            off = 1;
        }
    });
});