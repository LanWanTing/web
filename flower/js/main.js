$(function(){
    var off = 1;
    $('.navbar-toggler').click(function(){
        if( off == 1 ){
            $('.navbar-toggler-icon').addClass('btnOn');
            off = 0;
        }else{
            $('.navbar-toggler-icon').removeClass('btnOn');
            off = 1;
        }
    });
});