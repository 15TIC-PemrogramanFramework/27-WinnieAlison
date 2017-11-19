<?php $this->load->view('templates/header');?>
<?php $this->load->view('templates/menu');?>
<div class="banner-top">
	<div class="container">
		<h3>List Member</h3>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="check-out">	 
	<div class="container">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th class="t-head">ID</th>
					<th class="t-head">Username</th>
					<th class="t-head">Password</th>
					<th class="t-head">No Hp</th>
					<th class="t-head">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($dataMember as $key => $row) {?>
				<tr>
					<td class="t-data"><?php echo $row->idMember; ?></td>
					<td class="t-data"><?php echo $row->username; ?></td>
					<td class="t-data"><?php echo $row->pwd; ?></td>
					<td class="t-data"><?php echo $row->nohp; ?></td>
					<td class="t-data"><?php echo anchor(site_url('Member/hapus_member/'.$row->idMember),
						'<i class="fa fa-trash" aria-hidden="true"></i>',
						'class="btn btn-danger"');?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<?php $this->load->view('templates/footer');?>