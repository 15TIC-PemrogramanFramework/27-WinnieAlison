<?php $this->load->view('templates/header');?>
<?php $this->load->view('templates/menu');?>
<div class="banner-top">
	<div class="container">
		<h3>List Tempat</h3>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="check-out">	 
	<div class="container">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th class="t-head">Alamat</th>
					<th class="t-head">Jenis</th>
					<th class="t-head">Pemilik</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($dataTempat as $key => $row) {?>
				<tr>
					<td class="t-data"><?php echo $row->alamat; ?></td>
					<td class="t-data"><?php echo $row->jenis; ?></td>
					<td class="t-data"><?php echo $row->pemilik; ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<?php $this->load->view('templates/footer');?>