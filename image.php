<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<meta name="viewport" content="width=1050">
<meta name="keywords" content="藍宛亭,LAN,DESIGN,PORTFOLIO">
<meta name="description" content="TINA LAN PORTFOLIO">
<title>IMAGE DESIGN│TINA LAN PORTFOLIO</title>
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
<?php include('page_header_img.php'); ?>
<!--header-->
<!--main-->
<div class="wrap">
  <div id="content">
  <div id="indexMain"> 
    <div id="tmpList"><!-- 此區塊需使用display:none;隱藏 -->
    <!--7-->
    <div class="item item-portfolio pd">
      <img src="images/image/img_bumper.jpg">
      <a href="image7.php" class="info" title="Bumper Store">
      <div class="mask">
        <table>
            <tr class="view70">
              <td>Bumper Store<br><span>+ CIS +</span></td>
            </tr>
          </table>
      </div>
      </a>
    </div>
     <!--3-->
   <div class="item item-portfolio pd">
      <img src="images/image/img_jd.jpg">
      <a href="image3.php" class="info" title="鶼鰈情深">
       <div class="mask">
        <table>
            <tr class="view70">
              <td>鶼鰈情深<br><span>+ Typography +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--2-->
   <div class="item item-portfolio pd">
      <img src="images/image/img_12logo.jpg">
      <a href="image2.php" class="info" title="12年國民基本教育">
       <div class="mask">
        <table>
            <tr class="view75">
              <td>12年國民基本教育<br><span>+ Logo +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
   <!--5-->
    <div class="item item-portfolio pd">
      <img src="images/image/img_peony.jpg">
      <a href="image5.php" class="info" title="PEONY DRESS.C">
      <div class="mask">
        <table>
            <tr class="view75">
              <td>PEONY DRESS.C<br><span>+ CIS +</span></td>
            </tr> 
          </table>
      </div>
      </a>
    </div>
    <!--6-->
    <div class="item item-portfolio pd">
      <img src="images/image/img_flower.jpg">
      <a href="image6.php" class="info" title="芊芳花藝">
       <div class="mask">
        <table>
            <tr class="view70">
              <td>芊芳花藝<br><span>+ CIS +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--4-->
    <div class="item item-portfolio pd">
      <img src="images/image/img_was.jpg">
      <a href="image4.php" class="info" title="靜觀奇變">
       <div class="mask">
        <table>
            <tr class="view80">
              <td>靜觀奇變<br><span>+ Typography +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--1-->
    <div class="item item-portfolio pd">
      <img src="images/image/img_drguslogo.jpg">
      <a href="image1.php" class="info" title="藥物濫用認輔志工">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>藥物濫用認輔志工<br><span>+ Logo +</span></td>
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