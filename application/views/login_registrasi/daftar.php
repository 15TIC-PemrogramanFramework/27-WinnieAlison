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
		<h3 >Daftar Akun</h3>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

<div class="login">
	<div class="main-agileits">
		<div class="form-w3agile form1">
			<h3>Daftar Akun</h3>
			<form action="<?php echo site_url('Register/tambah_Akun_Aksi'); ?>" method="post">
				Username :
				<div class="key">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="username" placeholder="Username" required=" " >
					<div class="clearfix"></div>
				</div>
				Password :
				<div class="key">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input type="password" name="pwd"  placeholder="Password" required=" " >
					<div class="clearfix"></div>
				</div>
				No Hp :
				<div class="key">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<input type="text" name="nohp"  placeholder="No hp" required=" " >
					<div class="clearfix"></div>
				</div>
				
				<input type="submit" value="Daftar">
			</form>
		</div>

	</div>
</div>
<?php $this->load->view('templates/footer');?>