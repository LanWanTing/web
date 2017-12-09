<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<meta name="viewport" content="width=1050">
<meta name="keywords" content="藍宛亭,LAN,DESIGN,PROFILE">
<meta name="description" content="TINA LAN PROFILE">
<title>形象設計_藥物濫用認輔志工 標誌設計│TINA LAN PORTFOLIO</title>
<link href="myfavicon.ico" rel="icon">
<link href="myfavicon.ico" rel="shortcut icon">
<link href="apple-touch-icon.png" rel="apple-touch-icon">
<link href="css/style.css" rel="stylesheet">
<link href="css/style1650.css" rel="stylesheet" media="screen and (min-width: 1650px) and (max-width: 1920px)">
<link href="css/style1280.css" rel="stylesheet" media="screen and (min-width: 1280px) and (max-width: 1649px)">
<link href="css/colorbox.css" rel="stylesheet">
<script src="js/plugins/jQuery/jquery-1.8.3.js"></script>
<script src="js/plugins/jQuery/script-3.0.6.js"></script>
<script src="js/plugins/jQuery/jquery.easing-1.3.js"></script><!--相簿-->
<script src="js/plugins/jQuery/jquery.colorbox-1.4.15.js"></script>
<script src="js/plugins/jQuery/jquery.lavalamp-1.4.min.js"></script>
<script src="js/common.js"></script>
<script>
jQuery(document).ready(function(e) {
	// Big Photo
	var buttons = {
		previous: jQuery('.button-previous'),
		next:jQuery('.button-next')
	};
	
	jQueryobj = jQuery('.profileSlideWrap').lofJSidernews({
		interval: 6000,
		easing: 'easeInOutQuad',
		//direction    : 'opacity',
		duration: 700,
		auto: true,
		maxItemDisplay: 4,
		startItem: 0,
		navPosition: 'horizontal', // horizontal
		navigatorHeight: 68,
		navigatorWidth: 85, // 包括小圖中間間隔寬度
		mainWidth: 840,
		buttons: buttons
	});	
});
</script>
</head>

<body>
<!--頁首-->
<?php include('page_header_img.php'); ?>

<!--內容-->
<div id="pMain">
 <div id="pImage">
    <div class="pLeft">
        <div class="pTitle lPd" id="image">IMAGE DESIGNER</div>
        <div class="pNameCh lPd">藥物濫用認輔志工 標誌設計</div>
        <div class="pNameEn lPd">Drgus Abuse Volunteers</div>
        <div class="pInfo lPd">
        以「回心」為設計主軸，強調因藥物上癮、濫用藥物，滿腦子充滿藥癮的人，在志工的規勸下收復身心，但上癮的人不會一次就戒掉，他們會不斷的跑回去找毒品來吃，所以志工要不斷的規勸他們，靠得是一個簡單的「心」。戒毒人、濫用藥物人的決心與志工付出的愛心，合起來就是個完整的心。
        </div>
        <div class="pElseInfo lPd">2010/10/04<br>參加  認輔志工標誌設計競賽<br>
        <img class="viewPic"src="images/IllCS3.jpg" alt="IllCS3" width="20" height="20" />&nbsp;&nbsp;電腦繪圖</div>
    </div>
    <!--相簿開始-->
    <div class="viewRight">	
      <div class="profileSlideWrap">
        <div class="imgWrap">
          <!-- Button -->
          <div class="button-previous">Previous</div>
          <div class="button-next">Next</div>
          <div class="button-control"><span></span></div>
          <div id="bannerWrap">
            <!-- Loding -->
            <div class="preload"><div></div></div>
            <!-- Big --> 
            <div class="main-slider-content">
              <ul class="sliders-wrap-inner">
                <li><a href="images/image/img_drguslogo_b.jpg" title="主標誌"><img src="images/image/img_drguslogo_b.jpg" alt="主標誌"></a></li>
              </ul>  	
            </div>
            <!-- Small -->
            <div class="navigator-content">
              <div class="navigator-wrapper">
                <ul class="navigator-wrap-inner">
                  <li><img src="images/image/img_drguslogo_s.jpg" alt="主標誌"></li>
                </ul>
              </div>
            </div>
            <!-- Small end -->
          </div>
        </div>
      </div>
    </div>
    <!--相簿結束-->
    <div class="btnBack"><a href="image.php">返回列表│BACK</a></div>
 </div>
</div>

<!--頁尾-->
<?php include('page_footer.php'); ?>
</body>
</html>
