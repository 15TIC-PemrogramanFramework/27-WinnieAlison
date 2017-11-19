<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php $this->load->view('templates/header');?>
<?php $this->load->view('templates/menu');?>
	<!---->

	<!--banner-->
	<div class="banner-top">
		<div class="container">
			<h3 >Tentang</h3>
			<div class="clearfix"> </div>
		</div>
	</div>

	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="spec ">
				<h3>Tentang</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			<div class=" contact-w3">	
				<div class="col-md-5 contact-right">	
					<img src="<?php echo base_url()."assets/";?>images/denahbengkalis.jpg" alt=" " class="img-responsive">
				</div>
				<div class="col-md-7 contact-left">
					<h4>Informasi Toko</h4>
					<p> Toko Bahagia ini telah berdiri sejak 1980 yang diwariskan secara turun temurun.<br/>
					Toko ini menjual kue yang biasa dipergunakan sebagai oleh-oleh maupun untuk pernikahan.<br/>
				Toko ini hanya terletak di Bengkalis, Riau, Indonesia..</p><br/><br/>

				<h4>Kontak yang bisa dihubungi</h4>
					<p> <span class="fa fa-phone"> 0811 760 5395</span><br/>
						<span class="fa fa-map-marker"> Jl. Senayan No. 075</span></p><br/><br/>

						<h4>Cara Pesan</h4>
						<p>Anda harus menjadi member dengan menekan tombol <b><a href="<?php echo site_url('Register'); ?>">daftar akun</a></b>.<br/>
						Setelah itu, Anda bisa memesan kue maupun mie yang diinginkan.</p>
					
					
					<!--Plug-in Initialisation-->
					<script type="text/javascript">
						$(document).ready(function() {
					//Horizontal Tab
					$('#parentHorizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});

					// Child Tab
					$('#ChildVerticalTab_1').easyResponsiveTabs({
						type: 'vertical',
						width: 'auto',
						fit: true,
						tabidentify: 'ver_1', // The tab groups identifier
						activetab_bg: '#fff', // background color for active tabs in this group
						inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
						active_border_color: '#c1c1c1', // border color for active tabs heads in this group
						active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
					});

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>
			
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
</div>
<!-- //contact -->

<?php $this->load->view('templates/footer');?>

<!-- tabs -->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
		});
	});				
</script>