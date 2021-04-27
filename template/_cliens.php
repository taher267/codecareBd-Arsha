<?php $clients = $Table->GetTable('clients');?>
<section id="cliens" class="cliens section-bg">
  <div class="container">
    <div class="row" data-aos="zoom-in">
      <?php 
      array_map(function($clint){?>
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="<?php echo $clint['client_logo']; ?>" class="img-fluid" alt="">
      </div>
      <?php }, $clients);?>
    </div>
  </div>
</section>