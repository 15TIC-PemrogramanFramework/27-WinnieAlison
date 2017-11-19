<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php $this->load->view('templates/header');?>
<?php $this->load->view('templates/menu');?>
	<!--banner-->
	<div class="banner-top">
		<div class="container">
			<h3 >Masuk Akun</h3>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--login-->

	<div class="login">
		
		<div class="main-agileits">
			<div class="form-w3agile">
				<h3>Masuk Akun</h3>
				<form action="<?php echo site_url('Logincontroller/aksi_login'); ?>" method="POST">
					Username :
					<div class="key">
						<i class="fa fa-user" aria-hidden="true"></i>
						<input  type="text" name="username" required="" placeholder="Username">
						<div class="clearfix"></div>
					</div>
					Password :
					<div class="key">
						<i class="fa fa-lock" aria-hidden="true"></i>
						<input  type="password"  name="pwd" required="" placeholder="Password">
						<div class="clearfix"></div>
					</div>
					<input type="submit" value="Login">
				</form>
			</div>
		</div>
	</div>

<?php $this->load->view('templates/footer');?>