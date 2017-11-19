
<?php $this->load->view('templates/header');?>
<?php $this->load->view('templates/menu');?>
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h3>Order Form</h3>
		<div class="clearfix"> </div>
	</div>
</div>

<div class="login">
	<div class="main-agileits">
		<div class="form-w3agile form1">
			<h3>Order Form</h3>
			<form action="<?php echo $action; ?>" method="post">
				Nama :
				<div class="key">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="username" placeholder="username" disabled required=" " disabled value="<?php echo $this->session->userdata("username");?>">
					<div class="clearfix"></div>
				</div>
				Produk :
				<div class="key">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input type="text" name="namaProduk"  placeholder="namaProduk" required=" " disabled value="<?php echo $namaProduk;?>">
					<div class="clearfix"></div>
				</div>
				Jumlah :
				<div class="key">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<input type="text" name="jumlah"  placeholder="jumlah" required=" ">
					<div class="clearfix"></div>
				</div>
				<input type="hidden" name="username" value="<?php echo $this->session->userdata("username");?>">
				<input type="hidden" name="namaProduk" value="<?php echo $namaProduk;?>">
				<input type="submit" value="Tambah">
			</form>
		</div>

	</div>
</div>
<?php $this->load->view('templates/footer');?>