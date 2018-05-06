$(function () {
    var off = 1;
    $('.navbar-toggler').click(function () {
        if (off == 1) {
            $('.navbar-toggler-icon').addClass('btnOn');
            off = 0;
        } else {
            $('.navbar-toggler-icon').removeClass('btnOn');
            off = 1;
        }
    });
    var viewW = $(window).width();
    if (viewW > 992) {
        $('.navbar-nav .nav-item').eq(1).hover(function () {
            if (off == 1) {
                $('.dropdown-menu').addClass('show').fadeIn(500);
                off = 0;
            } else {
                $('.dropdown-menu').removeClass('show').fadeOut(500);
                off = 1;
            }
        });
    }else{
        $('.navbar-nav .nav-item').hover('style').hide();
    }
});
