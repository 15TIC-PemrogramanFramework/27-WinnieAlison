<?php $this->load->view('templates/header');?>
<?php $this->load->view('templates/menu');?>

<!--banner-->
<div class="banner-top">
	<div class="container"> 
		<h3>Profil</h3>
		<div class="clearfix"> </div>
	</div>
</div>
<br/><br/>
<div class="spec ">
	<h3>Profil</h3>
	<div class="ser-t">
		<b></b>
		<span><i></i></span>
		<b class="line"></b>
	</div>
</div>
<div class="check-out">	 
	<div class="container">
		<a href="<?php echo site_url('Member/edit_member/'.$this->session->userdata("username")); ?>"><button class="btn btn-success btn-md">Edit</button></a>
		<table class="table table-striped table-bordered table-hover">
			<?php foreach ($dataMember as $key => $row) {?>
			<tr>
				<td><b>Username</b></td>
				<td><?php echo $row->username; ?></td>
			</tr>
			<tr>
				<td><b>Password</b></td>
				<td><?php echo $row->pwd; ?></td>
			</tr>
			<tr>
				<td><b>No Hp</b></td>
				<td><?php echo $row->nohp; ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>

<div class="spec ">
	<h3>Order History</h3>
	<div class="ser-t">
		<b></b>
		<span><i></i></span>
		<b class="line"></b>
	</div>
</div>
<div class="check-out">	 
	<div class="container">
		<a href="<?php echo site_url('Orderlistcontroller/download'); ?>"><button class="btn btn-success btn-md">Print</button></a>
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<td><b>ID Order</b></td>
				<td><b>Produk</b></td>
				<td>Jumlah<b></b></td>
			</tr>

			<?php
 if(count($resultOrder) > 0) {
  foreach ($resultOrder as $key => $row) {
    ?>

			<tr>
				<td><?php echo $row->idOrder; ?></td>
				<td><?php echo $row->namaProduk; ?></td>
				<td><?php echo $row->jumlah; ?></td>
			</tr>

    <?php } }?>
		</table>
	</div>
</div>
<?php $this->load->view('templates/footer');?>