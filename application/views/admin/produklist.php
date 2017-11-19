<?php $this->load->view('templates/header');?>
<?php $this->load->view('templates/menu');?>
<div class="banner-top">
		<div class="container">
			<h3>List Produk</h3>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="check-out">	 
		<div class="container">
			<a href="<?php echo site_url('Produk/tambah'); ?>"><button class="btn btn-success btn-md">Tambah</button></a>
	<table class="table">
		<thead>
			<tr>
				<th class="t-head">ID</th>
				<th class="t-head">Tempat Produksi</th>
				<th class="t-head">Nama</th>
				<th class="t-head">Harga</th>
				<th class="t-head">Gambar</th>
				<th class="t-head">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($dataProduk as $key => $row) {?>
				<tr class="cross">
					<td class="t-data"><?php echo $row->id; ?></td>
					<td class="t-data"><?php echo $row->alamat; ?></td>
					<td class="t-data"><?php echo $row->namaProduk; ?></td>
					<td class="t-data"><?php echo $row->harga; ?></td>
					<td class="t-data">
						<?php 
						$encoded_image = base64_encode($row->gambar);
						echo '<img src="data:image/jpeg;base64,'.base64_decode($encoded_image).'" style="width:20%;">'
						?>
					</td>
					<td class="t-data">
						<?php echo anchor(site_url('Produk/edit_produk/'.$row->id),
						'<i class="fa fa-pencil" aria-hidden="true"></i>',
						'class="btn btn-warning"');?>
						<?php echo anchor(site_url('Produk/hapus_produk/'.$row->id),
						'<i class="fa fa-trash" aria-hidden="true"></i>',
						'class="btn btn-danger"');?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
</div>
<?php $this->load->view('templates/footer');?>