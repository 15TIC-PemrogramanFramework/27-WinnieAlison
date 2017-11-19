<!DOCTYPE html>
<html>
<head>
	<title>Toko Bahagia</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:title" content="Video" />
	<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
<!-- Custom Theme files -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
<!-- js -->
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>">
<script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/js/move-top.js"></script>
<script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('//fonts.googleapis.com/css?family=Montserrat:400,700') ?>">
<link rel="stylesheet" href="<?php echo base_url('//fonts.googleapis.com/css?family=Noto+Sans:400,700') ?>">
<!--- start-rate---->
<script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/js/jstarbox.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/css/jstarbox.css') ?>">
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
