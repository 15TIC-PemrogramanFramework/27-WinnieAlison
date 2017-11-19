<?php $this->load->view('templates/header');?>
<?php $this->load->view('templates/menu');?>
<div class="banner-top">
		<div class="container">
			<h3>List Order</h3>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="check-out">	 
		<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th class="t-head">ID Order</th>
				<th class="t-head">Username</th>
				<th class="t-head">Nama Produk</th>
				<th class="t-head">Jumlah</th>
				<th class="t-head">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($dataOrder as $key => $row) {?>
				<tr class="cross">
					<td class="t-data"><?php echo $row->idOrder; ?></td>
					<td class="t-data"><?php echo $row->username; ?></td>
					<td class="t-data"><?php echo $row->namaProduk; ?></td>
					<td class="t-data"><?php echo $row->jumlah; ?></td>
					<td class="t-data">
						<?php echo anchor(site_url('Ordercontroller/hapus_order/'.$row->idOrder),
						'<i class="fa fa-trash" aria-hidden="true"></i>',
						'class="btn btn-danger"');?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
</div>
<?php $this->load->view('templates/footer');?>
