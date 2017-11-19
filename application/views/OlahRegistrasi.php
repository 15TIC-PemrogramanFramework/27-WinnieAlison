<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Toko Bahagia | Akun</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:title" content="Vide" />
	<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript">
	jQuery(function() {
		jQuery('.starbox').each(function() {
			var starbox = jQuery(this);
			starbox.starbox({
				average: starbox.attr('data-start-value'),
				changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
				ghosting: starbox.hasClass('ghosting'),
				autoUpdateAverage: starbox.hasClass('autoupdate'),
				buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
				stars: starbox.attr('data-star-count') || 5
			}).bind('starbox-value-changed', function(event, value) {
				if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
				} 
			})
		});
	});
</script>
<!---//End-rate---->

</head>
<body>
	<div class="header">

		<div class="container">
			
			<div class="logo">
				<img src="images/logo.png">
				<br>
				<h1>Toko Bahagia</h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Masuk ke Akun</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Daftar Akun</a></li>
					<li><a href="about.php" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Histori pemesanan</a></li>
					<li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Pengiriman</a></li>
				</ul>	
			</div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon instagram"><i class="fa fa-instagram" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon google"><i class="fa fa-google" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
			

			<div class="nav-top">
				<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class=" active"><a href="index.php" class="hyper "><span>Beranda</span></a></li>
							<li><a href="biscuit.php" class="hyper"><span>Kue</span></a></li>
							<li><a href="noodle.php" class="hyper"><span> Mie</span></a></li>
							<li><a href="contact.php" class="hyper"><span>Kontak</span></a></li>
						</ul>
					</div>
				</nav>
				<div class="cart" >
					
					<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
				</div>
				<div class="clearfix"></div>
			</div>
			
		</div>			
	</div>
	<!---->

	<!--banner-->
	<div class="banner-top">
		<div class="container">
			<h3 >Daftar Akun</h3>
			<h4><a href="index.html">Beranda</a><label>/</label>Daftar Akun</h4>
			<div class="clearfix"> </div>
		</div>
	</div>

	<!--login-->

	<div class="login">
		<div class="main-agileits">
			<div class="form-w3agile form1">
				<h3>Daftar Akun</h3>
				<form action="#" method="post">
					<div class="key">
						<i class="fa fa-user" aria-hidden="true"></i>
						<input  type="text" value="Username" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
						<div class="clearfix"></div>
					</div>
					<div class="key">
						<i class="fa fa-lock" aria-hidden="true"></i>
						<input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
						<div class="clearfix"></div>
					</div>
					<div class="key">
						<i class="fa fa-lock" aria-hidden="true"></i>
						<input  type="password" value="Confirm Password" name="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
						<div class="clearfix"></div>
					</div>
					<div class="key">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<input  type="text" value="No. Hp" name="NoHp" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'NoHp';}" required="">
						<div class="clearfix"></div>
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
			
		</div>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-grid">
				<h3>Tentang Kami</h3>
				<p>Jl. Senayan No. 075<br/>
					HP : 0811 760 5395<br/>
				Bengkalis - Riau</p>
			</div>
			<div class="col-md-3 footer-grid ">
				<h3>Menu</h3>
				<ul>
					<li><a href="index.php">Beranda</a></li>
					<li><a href="biscuit.php">Kue</a></li>
					<li><a href="noodle.php">Mie</a></li>
					<li><a href="contact.php">Kontak</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-grid ">
				<h3>Layanan Pelanggan</h3>
				<ul>
					<li><a href="shipping.php">Daftar Keinginan</a></li>
					<li><a href="terms.php">Aturan</a></li>
					<li><a href="faqs.php">Pertanyaan</a></li>
					<li><a href="contact.php">Kontak</a></li>						 
					
				</ul>
			</div>
			<div class="col-md-3 footer-grid">
				<h3>Akun Saya</h3>
				<ul>
					<li><a href="login.php">Masuk ke Akun</a></li>
					<li><a href="register.php">Daftar Akun</a></li>
					<li><a href="wishlist.php">Daftar Keinginan</a></li>
					
				</ul>
			</div>
			<div class="clearfix"></div>
			
		</div>
		<div class="copy-right">
			<p> &copy; 1980 Toko Bahagia. All Rights Reserved | Design by  苏蕙妮</p>
		</div>
	</div>
	<!-- //footer-->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
			*/								
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<script type='text/javascript' src="js/jquery.mycart.js"></script>
	<script type="text/javascript">
		$(function () {

			var goToCartIcon = function($addTocartBtn){
				var $cartIcon = $(".my-cart-icon");
				var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
				$addTocartBtn.prepend($image);
				var position = $cartIcon.position();
				$image.animate({
					top: position.top,
					left: position.left
				}, 500 , "linear", function() {
					$image.remove();
				});
			}

			$('.my-cart-btn').myCart({
				classCartIcon: 'my-cart-icon',
				classCartBadge: 'my-cart-badge',
				affixCartIcon: true,
				checkoutCart: function(products) {
					$.each(products, function(){
						console.log(this);
					});
				},
				clickOnAddToCart: function($addTocart){
					goToCartIcon($addTocart);
				},
				getDiscountPrice: function(products) {
					var total = 0;
					$.each(products, function(){
						total += this.quantity * this.price;
					});
					return total * 1;
				}
			});

		});
	</script>

</body>
</html>