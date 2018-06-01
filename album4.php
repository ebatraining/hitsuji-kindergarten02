<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1">
<meta name="robots" content="noindex,nofollow,noarchive">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<link rel="stylesheet" href="css/old-ie.css">
<![endif]-->
<link rel="stylesheet" media="all" type="text/css" href="css/style.css">
<link rel="stylesheet" media="all" type="text/css" href="css/smart.css">
<title>アルバム｜ひつじ幼稚園</title>

<link rel="stylesheet" href="css/nivo-lightbox.css">
<link rel="stylesheet" href="css/default.css">
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery.marquee.js"></script>
<script type="text/javascript">
		$(function () {
		$('p.ticker').marquee();
		});
$(function() {
		var topBtn = $('.anchor_link');    
		topBtn.hide();
		//スクロールが100に達したらボタン表示
		$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
						topBtn.fadeIn();
				} else {
						topBtn.fadeOut();
				}
		});
		//スクロールしてトップ
		topBtn.click(function () {
				$('body,html').animate({
						scrollTop: 0
				}, 500);
				return false;
		});

});
</script>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
	var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
	var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
		var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
		if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
	var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
		d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
	if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
	for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
	if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
	var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
	 if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body>
	<div id="page">
		<header>
			<?php include( $_SERVER['DOCUMENT_ROOT'] . '/hitsuji-kindergarten02/menu.php'); ?>
		</header>
		<div class="albumpage">
			<div class="albumlogo"><h1><img src="images/album_04.png"></h1>
			</div>
			<aside>
				<div class="publicity">
					<div class="white-mask">
						<a href="images/photo4_1.jpg" data-lightbox-gallery="gallery1"><img src="images/photo4_1_s.jpg" alt="" name="作品展"  border="0"/>
						</a>
					</div>
				</div>
				<div class="publicity">
					<div class="white-mask">
						<a href="images/photo4_2.jpg" data-lightbox-gallery="gallery1"><img src="images/photo4_2_s.jpg" alt="" name="作品展"  border="0"/>
						</a>
					</div>
				</div>
				<div class="publicity">
					<div class="white-mask">
						<a href="images/photo4_3.jpg" data-lightbox-gallery="gallery1"><img src="images/photo4_3_s.jpg" alt="" name="作品展"  border="0"/>
						</a>
					</div>
				</div>
				<div class="publicity last">
					<div class="white-mask">
						<a href="images/photo4_4.jpg" data-lightbox-gallery="gallery1"><img src="images/photo4_4_s.jpg" alt="" name="作品展"  border="0"/>
						</a>
					</div>
				</div>
			</aside>
			<aside>
				<div class="publicity">
					<div class="white-mask">
						<a href="images/photo4_5.jpg" data-lightbox-gallery="gallery1"><img src="images/photo4_5_s.jpg" alt="" name="作品展"  border="0"/>
						</a>
					</div>
				</div>
				<div class="publicity">
					<div class="white-mask">
						<a href="images/photo4_6.jpg" data-lightbox-gallery="gallery1"><img src="images/photo4_6_s.jpg" alt="" name="作品展"  border="0"/>
						</a>
					</div>
				</div>
				<div class="publicity">
					<div class="white-mask">
						<a href="images/photo4_7.jpg" data-lightbox-gallery="gallery1"><img src="images/photo4_7_s.jpg" alt="" name="作品展"  border="0"/>
						</a>
					</div>
				</div>
			</aside>
			<div class="anchor_link">
				<a href="#top"><img src="images/hitsuji_top.png">
				</a>
			</div>
		</div>
		<?php include( $_SERVER['DOCUMENT_ROOT'] . '/hitsuji-kindergarten02/footer.php'); ?>
	</div>
<script src="js/nivo-lightbox.min.js"></script> 
<script type="text/javascript">
		$(function () {
				$(document).ready(function(){
				$('a').nivoLightbox();
				effect:'fall'
			});
			});
			</script>
</body>
</html>
