<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<meta name="viewport" content="width=1050">
<meta name="keywords" content="藍宛亭,LAN,DESIGN,PORTFOLIO">
<meta name="description" content="TINA LAN PORTFOLIO">
<title>WEB DESIGN│TINA LAN PORTFOLIO</title>
<link href="myfavicon.ico" rel="icon">
<link href="myfavicon.ico" rel="shortcut icon">
<link href="apple-touch-icon.png" rel="apple-touch-icon">
<link href="css/style.css" rel="stylesheet">
<script src="js/plugins/jQuery/jquery-1.8.3.js"></script>
<script src="js/plugins/jQuery/jquery.lavalamp-1.4.min.js"></script>
<script src="js/plugins/jQuery/jquery.masonry-3.1.5.min.js"></script>
<script src="js/plugins/imagesloaded-3.1.4.min.js"></script>
<script src="js/common.js"></script>
<script>
jQuery(document).ready(function(e) {
	// 瀑布流效果
	var $blueEle = $('#indexMain'), $tmpEle = $('#tmpList');
	imagesLoaded($tmpEle, function() {
		$blueEle.masonry({
			columnWidth: ".item",
			transitionDuration: '1.5s'
		});
		var msnry =  $blueEle.data('masonry'), elems = [];
		$tmpEle.find('.item').each(function() {
			elems.push( this );
			$blueEle.append(this);
		});
		msnry.prepended(elems);
	});
	
	// 輪播
	jQuery('.bxslider').bxSlider();
});
</script>
</head>
<body>
<!--header-->
<?php include('page_header_web.php'); ?>
<!--header-->
<!--main-->
<div class="wrap">
  <div id="content">
  <div id="indexMain"> 
    <div id="tmpList"><!-- 此區塊需使用display:none;隱藏 -->
    <!--2-->
    <div class="item item-portfolio pd">
      <img src="images/web/web_flowerweb.jpg">
      <a href="http://www.tinalan.com/cf_flower/index.php" class="info" title="芊芳花藝形象網站" target="_blank">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>芊芳花藝形象網站<br><span>+ Web +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--3-->
    <div class="item item-portfolio pd">
      <img src="images/web/web_lhouse.jpg">
      <a href="http://www.tinalan.com/leaf/index.php" class="info" target="_blank" title="言葉部屋形象網站">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>言葉部屋形象網站<br><span>+ Web +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--1-->
    <div class="item item-portfolio pd">
      <img src="images/web/web_existence.jpg">
      <a href="http://www.tinalan.com/existence/index.htm" class="info" title="求生e智-互動防災平台" target="_blank">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>求生e智-互動防災平台<br><span>+ Web +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--4-->
    <div class="item item-portfolio pd">
      <img src="images/web/web_guitar.jpg">
      <a href="http://www.tinalan.com/jd/index.php" class="info" target="_blank" title="J&D 樂器購物網">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>J&D 樂器購物網<br><span>+ Web +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--end-->
    </div>
  </div>
  </div>
</div>
<!--main-->
<!--footer-->
<?php include('page_footer.php'); ?>
<!--footer-->
</body>
</html>