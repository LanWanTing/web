<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<meta name="viewport" content="width=1050">
<meta name="keywords" content="藍宛亭,LAN,DESIGN,PROFILE">
<meta name="description" content="TINA LAN PROFILE">
<title>七宗罪巧克力_其他作品│TINA LAN PORTFOLIO</title>
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
<?php include('page_header_else.php'); ?>

<!--內容-->
<div id="pMain">
 <div id="pElse">
    <div class="pLeft">
        <div class="pTitle lPd" id="else">ELSE DESIGN</div>
        <div class="pNameCh lPd">七宗罪巧克力包裝</div>
        <div class="pNameEn lPd">Saven</div>
        <div class="pInfo lPd">
        以「七宗罪」為主題所設計的巧克力包裝。<br>
        七宗罪意指「貪婪、嫉妒、憤怒、色慾、暴食、驕傲、懶散」，並以不同顏色來代表，放在在一個形似雪花的包裝，其中「貪婪」是造成另外六種罪的主因，所以放在中間，其餘放在另六小盒中。
        </div>
        <div class="pElseInfo lPd">2011/05/27<br>藍宛亭、葉佳憫、王麗惠 共同參與設計</div>
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
                <li><img src="images/else/else_seven_b1.jpg" alt="七宗罪巧克力包裝"></li>
                <li><img src="images/else/else_seven_b2.jpg" alt="七宗罪巧克力包裝"></li>
                <li><img src="images/else/else_seven_b3.jpg" alt="七宗罪巧克力包裝"></li>
              </ul>  	
            </div>
            <!-- Small -->
            <div class="navigator-content">
              <div class="navigator-wrapper">
                <ul class="navigator-wrap-inner">
                  <li><img src="images/else/else_seven_s1.jpg" alt="七宗罪巧克力包裝"></li>
                <li><img src="images/else/else_seven_s2.jpg" alt="七宗罪巧克力包裝"></li>
                <li><img src="images/else/else_seven_s3.jpg" alt="七宗罪巧克力包裝"></li>
                </ul>
              </div>
            </div>
            <!-- Small end -->
          </div>
        </div>
      </div>
    </div>
    <!--相簿結束-->
    <div class="btnBack"><a href="else.php">返回列表│BACK</a></div>
 </div>
</div>

<!--頁尾-->
<?php include('page_footer.php'); ?>
</body>
</html>
