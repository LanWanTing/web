<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<meta name="viewport" content="width=1050">
<meta name="keywords" content="藍宛亭,LAN,DESIGN,PORTFOLIO">
<meta name="description" content="TINA LAN PORTFOLIO">
<title>GRAPHIC DESIGN│TINA LAN PORTFOLIO</title>
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
<?php include('page_header_gra.php'); ?>
<!--header-->
<!--main-->
<div class="wrap">
  <div id="content">
  <div id="indexMain"> 
    <div id="tmpList"><!-- 此區塊需使用display:none;隱藏 -->
    <!--1-->
     <div class="item item-portfolio pd">
      <img src="images/graphic/gra_zy.jpg">
       <a href="graphic1.php" class="info" title="Dragon Tiger Tower">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>Dragon Tiger Tower<br><span>+ Postcard +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
     <!--6-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_myself.jpg">
      <a href="graphic6.php" class="info" title="Myself">
      <div class="mask">
        <table>
            <tr class="view80">
              <td>Myself<br><span>+ Poster +</span></td>
            </tr>
          </table>
      </div>
      </a>
    </div>
    <!--2-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_ice.jpg">
      <a href="graphic2.php" class="info" title="Baskin Robbins">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>Baskin Robbins<br><span>+ DM +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--7-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_ncity.jpg">
      <a href="graphic7.php" class="info" title="New City Impression">
      <div class="mask">
        <table>
            <tr class="view80">
              <td>New City Impression<br><span>+ Poster +</span></td>
            </tr>
          </table>
      </div>
      </a>
    </div>
    <!--3-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_2013nyc.jpg">
      <a href="graphic3.php" class="info" title="2013新年賀卡">
       <div class="mask">
        <table>
            <tr class="view95">
              <td>2013新年賀卡<br><span>+ Greeting Card +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--4-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_2014nyc.jpg">
      <a href="graphic4.php" class="info" title="2013新年賀卡">
       <div class="mask">
        <table>
            <tr class="view95">
              <td>2014新年賀卡<br><span>+ Greeting Card +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--5-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_inc.jpg">
      <a href="graphic5.php" class="info" title="巧克力幸福‧甜蜜的交匯">
       <div class="mask">
        <table>
            <tr class="view70">
              <td>巧克力幸福‧甜蜜的交匯<br><span>+ Invitation Card +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--8-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_dark.jpg">
      <a href="graphic8.php" class="info" title="Desire">
       <div class="mask">
        <table>
            <tr class="view70">
              <td>Desire<br><span>+ Poster +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--9-->
     <div class="item item-portfolio pd">
      <img src="images/graphic/gra_death.jpg">
      <a href="graphic9.php" class="info" title="J&D 樂器購物網">
       <div class="mask">
        <table>
            <tr class="view70">
              <td>水是生命系列海報<br><span>+ Poster +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--10-->
     <div class="item item-portfolio pd">
      <img src="images/graphic/gra_water.jpg">
      <a href="graphic10.php" class="info" title="Thirst and Death">
      <div class="mask">
        <table>
            <tr class="view70">
              <td>Thirst and Death<br><span>+ Poster +</span></td>
            </tr>
          </table>
      </div>
      </a>
    </div>
    <!--11-->
   <div class="item item-portfolio pd">
      <img src="images/graphic/gra_2011.jpg">
      <a href="graphic11.php" class="info" title="2011 Calendar">
       <div class="mask">
        <table>
            <tr class="view80">
              <td>2011 Calendar<br><span>+ Calendar +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--12-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_exotic.jpg">
      <a href="graphic12.php" class="info" title="EXCTIC">
      <div class="mask">
        <table>
            <tr class="view70">
              <td>EXCTIC<br><span>+ Magazine +</span></td>
            </tr>
          </table>
      </div>
      </a>
    </div>
    <!--13-->
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