<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<meta name="viewport" content="width=1050">
<meta name="keywords" content="藍宛亭,LAN,DESIGN,PORTFOLIO">
<meta name="description" content="TINA LAN PORTFOLIO">
<title>ELSE DESIGN│TINA LAN PORTFOLIO</title>
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
<?php include('page_header_else.php'); ?>
<!--header-->
<!--main-->
<div class="wrap">
  <div id="content">
  <div id="indexMain"> 
    <div id="tmpList"><!-- 此區塊需使用display:none;隱藏 -->
    <!--8-->
   <div class="item item-portfolio pd">
      <img src="images/else/else_silver.jpg">
      <a href="else8.php" class="info" title="Silver">
      <div class="mask">
        <table>
            <tr class="view70">
              <td>silver<br><span>+ Photography +</span></td>
            </tr>
          </table>
      </div>
      </a>
    </div>
     <!--5-->
   <div class="item item-portfolio pd">
      <img src="images/else/else_seven.jpg">
      <a href="else5.php" class="info" title="Seven">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>Seven<br><span>+ Packaging Design +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--4-->
    <div class="item item-portfolio pd nopd">
      <img src="images/else/else_bird.jpg">
      <a href="else4.php" class="info" title="BIRD Series Perfume">
      <div class="mask">
        <table>
            <tr class="view70">
              <td>BIRD series perfume<br><span>+ Product Design +</span></td>
            </tr>
          </table>
      </div>
      </a>
    </div>
    <!--1-->
     <div class="item item-portfolio pd">
      <img src="images/else/else_dream.jpg">
      <a href="else1.php" class="info" title="圓夢樹屋">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>圓夢樹屋<br><span>+ Movie +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--2-->
   <div class="item item-portfolio pd">
      <img src="images/else/else_cell.jpg">
      <a href="else2.php" class="info" title="求生e智-手機篇短片">
       <div class="mask">
        <table>
            <tr class="view80">
              <td>求生e智-手機篇<br><span>+ Movie +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--3-->
    <div class="item item-portfolio pd">
      <img src="images/else/else_marrow.jpg">
      <a href="else3.php" class="info" title="求生e智-精華篇">
       <div class="mask">
        <table>
            <tr class="view80">
              <td>求生e智-精華篇<br><span>+ Movie +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--6-->
    <div class="item item-portfolio pd">
      <img src="images/else/else_leather.jpg">
      <a href="else6.php" class="info" title="Leather">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>Leather<br><span>+ Photography +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--7-->
    <div class="item item-portfolio pd">
      <img src="images/else/else_flower.jpg">
      <a href="else7.php" class="info" title="Flower">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>Flower<br><span>+ Photography +</span></td>
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