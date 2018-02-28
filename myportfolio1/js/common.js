jQuery(document).ready(function() {
	/* 平板旋轉設定 */
	jQuery(window).on('orientationchange', function(e) {
			jQuery(window).trigger('resize');
	});	
	jQuery(window).on('orientationchange', function(e) {
    window.scroll(0, 0);
  });
  
	jQuery('ul#menu').lavaLamp();  

});