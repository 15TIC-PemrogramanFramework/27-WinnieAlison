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
		<h3 >Edit Produk</h3>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

<div class="login">
	<div class="main-agileits">
		<div class="form-w3agile form1">
			<h3>Edit Produk</h3>
			<form action="<?php echo $action; ?>" method="post">
				Nama :
				<div class="key">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="namaProduk" placeholder="namaProduk" required=" "  value="<?php echo $namaProduk;?>">
					<div class="clearfix"></div>
				</div>
				Alamat :
				<div class="key">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<input type="text" name="alamat" placeholder="alamat" required=" " disabled value="<?php echo $alamat;?>">
					<div class="clearfix"></div>
				</div>
				Harga :
				<div class="key">
					<i class="fa fa-money" aria-hidden="true"></i>
					<input type="text" name="harga"  placeholder="harga" required=" " value="<?php echo $harga;?>">
					<div class="clearfix"></div>
				</div>
				Gambar :
				<div class="key">
					<i class="fa fa-upload" aria-hidden="true"></i>
					<input type="file" name="gambar"  placeholder="gambar" required=" "  value="<?php echo $gambar;?>">
					<div class="clearfix"></div>
				</div>
				<input type="hidden" name="id" value="<?php echo $id;?>">
				<input type="hidden" name="alamat" value="<?php echo $alamat;?>">
				<input type="submit" value="Edit">
			</form>
		</div>

	</div>
</div>
<?php $this->load->view('templates/footer');?>
<?php $this->load->view('templates/cart');?>