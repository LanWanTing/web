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
<header id="iheader">
  <div class="wrap">
 	<h1 id="logo"><a href="./" title="Tina LAN"><img src="images/logo.png" width="220" alt"Tina Lan Portfolio"></a></h1>
    <div id="menuRight">
      <nav>
        <ul id="menu">
          <li class="m1"><a href="index.html" title="ALL" ></a></li>
          <li class="m2"><a href="image.html" title="IMAGE DESIGN"></a></li>
          <li class="m3"><a href="graphic.html" title="GRAPHIC DESIGN"></a></li>
          <li class="m4"><a href="web.html" title="WEB DESIGN" class="m4"></a></li>
          <li class="m5"><a href="else.html" title="ELSE DESIGN" class="m5"></a></li>
          <li class="m6"><a href="designer.html" title="DESIGNER" class="m6"></a></li>
        </ul>
      </nav>
    </div>
    <div class="clearBoth"></div>
  </div>
</header>
<!--header-->
<!--main-->
<div class="wrap">
  <div id="content">
  <div id="indexMain"> 
    <div id="tmpList"><!-- 此區塊需使用display:none;隱藏 -->
    <!--105-->
    <div class="item item-portfolio pd">
      <img src="images/image/img_peony.jpg">
      <a href="image5.html" class="info" title="PEONY DRESS.C">
      <div class="mask">
        <table>
            <tr class="view75">
              <td>PEONY DRESS.C<br><span>+ CIS +</span></td>
            </tr> 
          </table>
      </div>
      </a>
    </div>
    <!--107-->
    <div class="item item-portfolio pd">
      <img src="images/image/img_bumper.jpg">
      <a href="image7.html" class="info" title="Bumper Store">
      <div class="mask">
        <table>
            <tr class="view70">
              <td>Bumper Store<br><span>+ CIS +</span></td>
            </tr>
          </table>
      </div>
      </a>
    </div>
    <!--404-->
    <div class="item item-portfolio pd nopd">
      <img src="images/else/else_bird.jpg">
      <a href="else4.html" class="info" title="BIRD Series Perfume">
      <div class="mask">
        <table>
            <tr class="view70">
              <td>BIRD series perfume<br><span>+ Product Design +</span></td>
            </tr>
          </table>
      </div>
      </a>
    </div>
    <!--206-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_myself.jpg">
      <a href="graphic6.html" class="info" title="Myself">
      <div class="mask">
        <table>
            <tr class="view80">
              <td>Myself<br><span>+ Poster +</span></td>
            </tr>
          </table>
      </div>
      </a>
    </div>
    <!--408-->
    <div class="item item-portfolio pd">
      <img src="images/else/else_silver.jpg">
      <a href="else8.html" class="info" title="Silver">
      <div class="mask">
        <table>
            <tr class="view70">
              <td>silver<br><span>+ Photography +</span></td>
            </tr>
          </table>
      </div>
      </a>
    </div>
    <!--210-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_water.jpg">
      <a href="graphic10.html" class="info" title="Thirst and Death">
      <div class="mask">
        <table>
            <tr class="view70">
              <td>Thirst and Death<br><span>+ Poster +</span></td>
            </tr>
          </table>
      </div>
      </a>
    </div>
    <!--212-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_exotic.jpg">
      <a href="graphic12.html" class="info" title="EXCTIC">
      <div class="mask">
        <table>
            <tr class="view70">
              <td>EXCTIC<br><span>+ Magazine +</span></td>
            </tr>
          </table>
      </div>
      </a>
    </div>
     <!--207-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_ncity.jpg">
      <a href="graphic7.html" class="info" title="New City Impression">
      <div class="mask">
        <table>
            <tr class="view80">
              <td>New City Impression<br><span>+ Poster +</span></td>
            </tr>
          </table>
      </div>
      </a>
    </div>
    <!--201-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_zy.jpg">
       <a href="graphic1.html" class="info" title="Dragon Tiger Tower">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>Dragon Tiger Tower<br><span>+ Postcard +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--211-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_2011.jpg">
      <a href="graphic11.html" class="info" title="2011 Calendar">
       <div class="mask">
        <table>
            <tr class="view80">
              <td>2011 Calendar<br><span>+ Calendar +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--301-->
    <div class="item item-portfolio pd">
      <img src="images/web/web_existence.jpg">
      <a href="http://www.tinalan.com/existence/index.htm" class="info" title="求生e智-互動防災平台" target="_blank">
       <div class="mask">
        <table>
            <tr class="view90">
              <td>求生e智-互動防災平台<br><span>+ Web +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--302-->
    <div class="item item-portfolio pd">
      <img src="images/web/web_flowerweb.jpg">
      <a href="http://www.tinalan.com/cf_flower/index.html" class="info" title="芊芳花藝形象網站" target="_blank">
       <div class="mask">
        <table>
            <tr class="view80">
              <td>芊芳花藝形象網站<br><span>+ Web +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--202-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_ice.jpg">
      <a href="graphic2.html" class="info" title="Baskin Robbins">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>Baskin Robbins<br><span>+ DM +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--303-->
    <div class="item item-portfolio pd">
      <img src="images/web/web_lhouse.jpg">
      <a href="http://www.tinalan.com/leaf/index.html" class="info" target="_blank" title="言葉部屋形象網站">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>言葉部屋形象網站<br><span>+ Web +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
     <!--106-->
    <div class="item item-portfolio pd">
      <img src="images/image/img_flower.jpg">
      <a href="image6.html" class="info" title="芊芳花藝">
       <div class="mask">
        <table>
            <tr class="view70">
              <td>芊芳花藝<br><span>+ CIS +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--304-->
    <div class="item item-portfolio pd">
      <img src="images/web/web_guitar.jpg">
      <a href="http://www.tinalan.com/leaf/jd.html" class="info" target="_blank" title="J&D 樂器購物網">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>J&D 樂器購物網<br><span>+ Web +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--209-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_death.jpg">
      <a href="graphic9.html" class="info" title="J&D 樂器購物網">
       <div class="mask">
        <table>
            <tr class="view70">
              <td>水是生命系列海報<br><span>+ Poster +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--401-->
     <div class="item item-portfolio pd">
      <img src="images/else/else_dream.jpg">
      <a href="else1.html" class="info" title="圓夢樹屋">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>圓夢樹屋<br><span>+ Movie +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--402-->
    <div class="item item-portfolio pd">
      <img src="images/else/else_cell.jpg">
      <a href="else2.html" class="info" title="求生e智-手機篇短片">
       <div class="mask">
        <table>
            <tr class="view80">
              <td>求生e智-手機篇<br><span>+ Movie +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--403-->
    <div class="item item-portfolio pd">
      <img src="images/else/else_marrow.jpg">
      <a href="else3.html" class="info" title="求生e智-精華篇">
       <div class="mask">
        <table>
            <tr class="view80">
              <td>求生e智-精華篇<br><span>+ Movie +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--205-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_inc.jpg">
      <a href="graphic5.html" class="info" title="巧克力幸福‧甜蜜的交匯">
       <div class="mask">
        <table>
            <tr class="view70">
              <td>巧克力幸福‧甜蜜的交匯<br><span>+ Invitation Card +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--405-->
    <div class="item item-portfolio pd">
      <img src="images/else/else_seven.jpg">
      <a href="else5.html" class="info" title="Seven">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>Seven<br><span>+ Packaging Design +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--406-->
    <div class="item item-portfolio pd">
      <img src="images/else/else_leather.jpg">
      <a href="else6.html" class="info" title="Leather">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>Leather<br><span>+ Photography +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--407-->
    <div class="item item-portfolio pd">
      <img src="images/else/else_flower.jpg">
      <a href="else7.html" class="info" title="Flower">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>Flower<br><span>+ Photography +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--101-->
    <div class="item item-portfolio pd">
      <img src="images/image/img_drguslogo.jpg">
      <a href="image1.html" class="info" title="藥物濫用認輔志工">
       <div class="mask">
        <table>
            <tr class="view85">
              <td>藥物濫用認輔志工<br><span>+ Logo +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--102-->
    <div class="item item-portfolio pd">
      <img src="images/image/img_12logo.jpg">
      <a href="image2.html" class="info" title="12年國民基本教育">
       <div class="mask">
        <table>
            <tr class="view75">
              <td>12年國民基本教育<br><span>+ Logo +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--103-->
    <div class="item item-portfolio pd">
      <img src="images/image/img_jd.jpg">
      <a href="image3.html" class="info" title="鶼鰈情深">
       <div class="mask">
        <table>
            <tr class="view70">
              <td>鶼鰈情深<br><span>+ Typography +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--208-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_dark.jpg">
      <a href="graphic8.html" class="info" title="Desire">
       <div class="mask">
        <table>
            <tr class="view70">
              <td>Desire<br><span>+ Poster +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--104-->
    <div class="item item-portfolio pd">
      <img src="images/image/img_was.jpg">
      <a href="image4.html" class="info" title="靜觀奇變">
       <div class="mask">
        <table>
            <tr class="view80">
              <td>靜觀奇變<br><span>+ Typography +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
     <!--203-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_2013nyc.jpg">
      <a href="graphic3.html" class="info" title="2013新年賀卡">
       <div class="mask">
        <table>
            <tr class="view95">
              <td>2013新年賀卡<br><span>+ Greeting Card +</span></td>
            </tr>
         </table>
        </div>
        </a>
    </div>
    <!--204-->
    <div class="item item-portfolio pd">
      <img src="images/graphic/gra_2014nyc.jpg">
      <a href="graphic4.html" class="info" title="2013新年賀卡">
       <div class="mask">
        <table>
            <tr class="view95">
              <td>2014新年賀卡<br><span>+ Greeting Card +</span></td>
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
<footer id="ifooter">
  COPYRIGHT &copy; TINA LAN PORTFOLIO.&nbsp;&nbsp;&nbsp;&nbsp;ALL RIGHTS RESERVED&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.tinalan.com/" title="Tina Lan portfolio">DESIGN BY TINA LAN</a>
</footer>
<!--footer-->
</body>
</html>