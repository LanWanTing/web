<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<meta name="viewport" content="width=1050">
<meta name="keywords" content="藍宛亭,LAN,DESIGN,PROFILE">
<meta name="description" content="TINA LAN PROFILE">
<title>BIRD系列香水瓶_其他作品│TINA LAN PORTFOLIO</title>
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
        <div class="pNameCh lPd">BIRD系列香水瓶</div>
        <div class="pNameEn lPd">Bird Series Perfume</div>
        <div class="pInfo lPd">
        以「bird」為主題所設計的香水瓶。<br>
        針對不同性別的消費者，所以分成兩款設計，針對男性香水瓶以具有雄心意涵的老鷹為元素，而女性香水則以優雅的天鵝來做呈現，最後在加上一款代表幸福的青鳥，通用於各式消費者。<br>
        </div>
        <div class="pElseInfo lPd">2009/07/19<br>
        <img class="viewPic"src="images/IllCS3.jpg" alt="PriCS4" width="20" height="20" />&nbsp;&nbsp;產品設計</div>
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
                <li><img src="images/else/else_bird_b1.jpg" alt="青鳥"></li>
                <li><img src="images/else/else_bird_b2.jpg" alt="鷹"></li>
                <li><img src="images/else/else_bird_b3.jpg" alt="天鵝"></li>
              </ul>  	
            </div>
            <!-- Small -->
            <div class="navigator-content">
              <div class="navigator-wrapper">
                <ul class="navigator-wrap-inner">
                  <li><img src="images/else/else_bird_s1.jpg" alt="青鳥"></li>
                  <li><img src="images/else/else_bird_s2.jpg" alt="鷹"></li>
                  <li><img src="images/else/else_bird_s3.jpg" alt="天鵝"></li>
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
