<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<meta name="viewport" content="width=1050">
<meta name="keywords" content="藍宛亭,LAN,DESIGN,PORTFOLIO">
<meta name="description" content="TINA LAN PORTFOLIO">
<title>TINA LAN PORTFOLIO│首頁</title>
<link href="myfavicon.ico" rel="icon">
<link href="myfavicon.ico" rel="shortcut icon">
<link href="apple-touch-icon.png" rel="apple-touch-icon">
<link href="css/style.css" rel="stylesheet">
<link href="css/jquery.vegas.css" rel="stylesheet">
<script src="js/plugins/jQuery/jquery-1.8.3.js"></script>
<script src="js/plugins/jQuery/jquery.lavalamp-1.4.min.js"></script>
<script src="js/plugins/jQuery/jquery.vegas-1.3.4.js"></script>
<script src="js/common.js"></script>
<script>
jQuery(document).ready(function(e) {
	$.vegas('slideshow', {
		delay:5000,
		valign:'bottom',
		backgrounds:[
			{ src:'images/dbk.gif', fade:500 }
		]
	})('overlay');
});
</script>
</head>
<body>
<!--header-->
<?php include('page_header.php'); ?>
<!--header-->
<!--main-->
<div class="pMain">
  <div id="pDesigner">
    <div class="dMain">
      <div class="pNameCh">DESIGNER <span>設計師</span></div>
      <div class="name">藍宛亭 <span>Tina Lan</span></div>
      <div class="txt">
      畢業於台南應用科技大學視覺傳達設計系，接觸設計領域近八年，積極探索不同的設計領域，期許能找到有興趣去發展的專長，後決定專心在網頁視覺設計上深入，去探索這個不斷日新月異的網站是如何透過語法與設計交織出既富動感與視覺的美麗畫面。<br><br>
      秉持著「今天努力，明天收獲」的精神，一天一步腳踏實地、積累與學習努力超越昨天的自己，不斷讓自己以嶄新的面貌迎接每一天。<br><br>
      本作品集一共分有四個單元，分別為「形象設計」、「平面設計」、「網頁設計」、「其他作品」，精心選出自2009年起所作之作品。<br><br>
      其中《Thirst and Death 》曾獲得2011澳門國際設計雙年展海報類入選。
      </div>
    </div>
  </div>
</div>
<!--main-->
<!--footer-->
<?php include('page_pfooter.php'); ?>
<!--footer-->
</body>
</html>