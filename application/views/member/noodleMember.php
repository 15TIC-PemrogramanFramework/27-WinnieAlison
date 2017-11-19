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
     <h3 >Mie</h3>
     <div class="clearfix"> </div>
 </div>
</div>

<!--content-->
<div class="product">
  <div class="container">
     <div class="spec ">
        <h3>Mie</h3>
        <div class="ser-t">
           <b></b>
           <span><i></i></span>
           <b class="line"></b>
       </div>
   </div>

   <?php
   if(count($resultMieMember) > 0) {
      foreach ($resultMieMember as $key => $row) {
        ?>

        <div class="col-md-4 pro-1">
          <div class="col-m">
            <a data-toggle="modal" data-target="#myModal5" class="offer-img">
              <?php 
              $encoded_image = base64_encode($row->gambar);
              echo '<img src="data:image/jpeg;base64,'.base64_decode($encoded_image).'" >'
              ?>
          </a>
          <div class="mid-1">
              <div class="women">
                <h6><?php echo $row->namaProduk;?></h6>                          
            </div>
            <div class="mid-2">
                <p ><em class="item_price">Rp <?php echo $row->harga;?></em></p><br/>
                <div class="block">
                  <div class="starbox small ghosting"> </div>
              </div>
              <div class="clearfix"></div>
          </div>

          <div class="add">
             <?php echo anchor(site_url('Ordercontroller/tambah/'.$row->id),'<i class="fa fa-paper-plane" aria-hidden="true"></i>',
           'class="btn btn-warning"');?>
         </div>
     </div>
 </div>
</div>
<?php } }?>
<div class="clearfix"></div>
</div>
</div>
</div>
<?php $this->load->view('templates/footer');?>