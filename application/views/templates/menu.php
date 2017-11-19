<body>
	<div class="header">

		<div class="container">
			
			<div class="logo">
				<center>
					<img src="<?php echo base_url()."assets/";?>images/logo.png" alt=" " class="img-responsive"/>
				</center>
				<br>
				<h1>Toko Bahagia</h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<?php 
					if(!$this->session->userdata("username")==true) { 
						?>
						<li><a href="<?php echo site_url('Logincontroller'); ?>">Masuk Akun</a></li>
						<li><a href="<?php echo site_url('Register'); ?>">Daftar Akun</a></li>
						<?php }else{ ?>
						<li><a href="<?php echo site_url('Logincontroller/logout'); ?>"><?php echo $this->session->userdata('username'); ?>
						</a></li>
						<?php } ?>
					</ul>	
				</div>

				<div class="nav-top">
					<nav class="navbar navbar-default">

						<div class="navbar-header nav_2">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div> 

						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav ">
								<?php 
								if($this->session->userdata("username")=="admin") { 
									?>
									<li><a href="<?php echo base_url().'Menulist/home'?>">Beranda</a></li>
									<li><a href="<?php echo base_url().'Memberlistcontroller/memberlist'?>">List Member</a></li>
									<li><a href="<?php echo base_url().'Produklistcontroller/produklist'?>">List Produk</a></li>
									<li><a href="<?php echo base_url().'Orderlistcontroller/orderlist'?>">List Order</a></li>
									<li><a href="<?php echo base_url().'Listtempatcontroller/listTempat'?>">List Tempat</a></li>
									<?php } else {
										if($this->session->userdata("username")==true) { 
											?>
											<li><a href="<?php echo base_url().'Menulist/home'?>">Beranda</a></li>
											<li><a href="<?php echo base_url().'Menulist/biscuitMember'?>">Kue</a></li>
											<li><a href="<?php echo base_url().'Menulist/noodleMember'?>">Mie</a></li>
											<li><a href="<?php echo base_url().'Menulist/contactMember'?>">Tentang</a></li>
											<li><a href="<?php echo base_url().'Menulist/ProfilMember'?>">Profil</a></li>
										</ul>
									</div>
								</nav>
								

									<?php } else {
										?>
										<li><a href="<?php echo base_url().'Menulist/home'?>">Beranda</a></li>
										<li><a href="<?php echo base_url().'Menulist/biscuitGuest'?>">Kue</a></li>
										<li><a href="<?php echo base_url().'Menulist/noodleGuest'?>">Mie</a></li>
										<li><a href="<?php echo base_url().'Menulist/contactGuest'?>">Tentang</a></li>
									</ul>
							</nav>
							<?php } } ?>
						</div>
						<div class="clearfix"></div>
					</div>

				</div>			
			</div>