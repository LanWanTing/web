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
			columnWidth: ".blueitem",
			transitionDuration: '1.5s'
		});
		var msnry =  $blueEle.data('masonry'), elems = [];
		$tmpEle.find('.blueitem').each(function() {
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
<?php include('page_header.php'); ?>
<!--header-->
<!--main-->
<div class="wrap">
  <div id="content">
  <div id="indexMain"> 
    <div id="tmpList"><!-- 此區塊需使用display:none;隱藏 -->
    <!--105-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/image/img_peony.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>PEONY CIS設計</h2>
              <p>January 2014</p>
              <a href="image5.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--107-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/image/img_bumper.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>Bumper CIS設計</h2>
              <p>June 2014</p>
              <a href="image7.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--404-->
    <div class="blueitem blueitem-portfolio pd nopd">
      <img src="images/else/else_bird.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>BIRD 香水瓶</h2>
              <a href="else4.php" target="_blank" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--206-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/graphic/gra_myself.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>Myself</h2>
              <p>January 2010</p>
              <a href="graphic6.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--408-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/else/else_silver.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>銀飾攝影</h2>
              <a href="else8.php" target="_blank" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--210-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/graphic/gra_water.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>渴與死亡海報設計</h2>
              <a href="graphic10.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--212-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/graphic/gra_exotic.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>EXCTIC美食雜誌</h2>
              <a href="graphic12.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
     <!--207-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/graphic/gra_ncity.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>新城市印象海報</h2>
              <a href="graphic7.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--201-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/graphic/gra_zy.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>左營龍虎塔色彩印象明信片</h2>
              <p>April 2011</p>
              <a href="graphic1.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--211-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/graphic/gra_2011.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>2011兔年月曆</h2>
              <a href="graphic11.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--301-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/web/web_existence.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>求生e智 互動防災平台</h2>
              <a href="http://www.tinalan.com/existence/index.htm" target="_blank"  class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--302-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/web/web_flowerweb.jpg">
        <div class="mask">
        <table>
            <tr>
              <td>
              <h2>芊芳花藝</h2>
              <a href="http://www.tinalan.com/cf_flower/index.php" target="_blank" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--202-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/graphic/gra_ice.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>31冰淇淋促銷DM設計</h2>
              <p>Jane 2011</p>
              <a href="graphic2.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--303-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/web/web_lhouse.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>言葉部屋</h2>
              <a href="http://www.tinalan.com/leaf/index.php" target="_blank" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
     <!--106-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/image/img_flower.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>Cian Fang Flower CIS設計</h2>
              <p>October 2014</p>
              <a href="image6.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--304-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/web/web_guitar.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>J&D 樂器購物網</h2>
              <a href="http://www.tinalan.com/leaf/jd.php" target="_blank" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--209-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/graphic/gra_death.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>水是生命系列海報</h2>
              <a href="graphic9.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--401-->
     <div class="blueitem blueitem-portfolio pd">
      <img src="images/else/else_dream.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>圓夢樹屋形象短片</h2>
              <a href="else1.php" target="_blank" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--402-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/else/else_cell.jpg">
        <div class="mask">
        <table>
            <tr>
              <td>
              <h2>求生e智-手機篇短片</h2>
              <a href="else2.php" target="_blank" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--403-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/else/else_marrow.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>求生e智-精華篇 形象短片</h2>
              <a href="else3.php" target="_blank" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--205-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/graphic/gra_inc.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>巧克力幸福‧甜蜜的交匯<br>貴賓之夜邀請卡</h2>
              <a href="graphic5.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    
    <!--405-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/else/else_seven.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>七宗罪巧克力</h2>
              <a href="else5.php" target="_blank" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--406-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/else/else_leather.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>皮革商品攝影</h2>
              <a href="else6.php" target="_blank" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--407-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/else/else_flower.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>花卉攝影</h2>
              <a href="else7.php" target="_blank" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    
    <!--101-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/image/img_drguslogo.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>藥物濫用認輔志工 標誌設計</h2>
              <p>October 2010</p>
              <a href="image1.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--102-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/image/img_12logo.jpg">
        <div class="mask">
        <table>
            <tr>
              <td>
              <h2>12年國民基本教育 標誌設計</h2>
              <p>March 2012</p>
              <a href="image2.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--103-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/image/img_jd.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>鶼鰈情深 文字設計</h2>
              <p>April 2011</p>
              <a href="image3.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--208-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/graphic/gra_dark.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>欲望黑洞海報</h2>
              <a href="graphic8.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--104-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/image/img_was.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>靜觀奇變 文字設計</h2>
              <p>October 2011</p>
              <a href="image4.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
     <!--203-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/graphic/gra_2013nyc.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>2013新年賀卡</h2>
              <a href="graphic3.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
    <!--204-->
    <div class="blueitem blueitem-portfolio pd">
      <img src="images/graphic/gra_2014nyc.jpg">
      <div class="mask">
        <table>
            <tr>
              <td>
              <h2>2014新年賀卡</h2>
              <a href="graphic4.php" class="info">View</a>
              </td>
            </tr>
          </table>
      </div>
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