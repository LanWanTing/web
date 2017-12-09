<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<meta name="viewport" content="width=1050">
<meta name="keywords" content="藍宛亭,LAN,DESIGN,PROFILE">
<meta name="description" content="TINA LAN PROFILE">
<title>渴與死亡海報設計_平面設計│TINA LAN PORTFOLIO</title>
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
<?php include('page_header_gra.php'); ?>

<!--內容-->
<div id="pMain">
 <div id="pGraphic">
    <div class="pLeft">
        <div class="pTitle lPd" id="graphic">GRAPHIC DESIGN</div>
        <div class="pNameCh lPd">渴與死亡海報設計</div>
        <div class="pNameEn lPd">Thirst and Death</div>
        <div class="pInfo lPd">
        當人渴望水時就會伸出舌頭，因為「舌頭」是喝到水的一個媒介，它意味著渴望水，也意味著死亡，沒水便伴隨著死亡。<br>
        而舌頭的形狀如同墓碑，墓碑意指死亡，將這墓碑與舌頭結合，想傳達的是沒有水，那麼人類就會死亡，渴望水將是人類邁向死亡的原因。<br>
        <!--<span>People stretch out their tongues when feeling thirsty because tongues are media for drink-ing. Tongues symbols desire of water as well death. Lacks of water also leads to death.The shape of a tongue is similar to a tombstone, which is relevant to death, and the combination of both tongue and tombstone expresses the ideals that thirst might be the main reason why people are going to walk forward death.</span>-->
        </div>
        <div class="pElseInfo lPd">2011/04/19<br>參加 德國法蘭克福海報比賽<br>
        <img class="viewPic"src="images/macao.jpg" alt="macao" width="20" height="20" />&nbsp;&nbsp;2011 澳門國際設計雙年展 入選<br>
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
                <li><img src="images/graphic/gra_water_b.jpg" alt="渴與死亡海報設計"></li>
              </ul>  	
            </div>
            <!-- Small -->
            <div class="navigator-content">
              <div class="navigator-wrapper">
                <ul class="navigator-wrap-inner">
                  <li><img src="images/graphic/gra_water_s.jpg" alt="渴與死亡海報設計"></li>
                </ul>
              </div>
            </div>
            <!-- Small end -->
          </div>
        </div>
      </div>
    </div>
    <!--相簿結束-->
    <div class="btnBack"><a href="graphic.php">返回列表│BACK</a></div>
 </div>
</div>

<!--頁尾-->
<?php include('page_footer.php'); ?>
</body>
</html>
