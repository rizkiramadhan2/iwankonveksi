<!DOCTYPE html>
<html lang="en">
<head>
<?php foreach($data as $row): ?>
  <title>Iwan Konveksi - <?= $row['nama'] ?></title>
  <?php $this->load->view('assets-css') ?>
  <style>
   
  </style>
</head>
<body>

<!-- header -->
<?php $this->load->view('header/nav') ?>

<!--<div class="header-container">
    

 
        <img class="swiper-fade" width="100%" src="https://placehold.it/1200x250?text=IMAGE" alt="Image">

</div>-->
<div id="myCarousel" class="carousel header-container animated fadeIn" data-ride="carousel">
    <!-- Indicators -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner " role="listbox">
   
        <img class="swiper-fade2" style="opacity: 0.55" src="<?= $row['path_banner'] ?>" alt="Image">
        <div class="carousel-caption">
          <h2 class="swiper-fade animated slideInDown">
          <strong><?= strtoupper($row['nama']);?></strong>
        
          </h2>
        </div>      
     

 
</div></div>
<div class="container " >
<h3 class="text-center"><b>SIZE <?= strtoupper($row['nama']) ?></b> </h3>
  <div class="col-xs-12">
      <div class="">
        <img class="img-responsive" src="<?= $row['path'] ?>" alt="image">
        
      </div>
    </div> 

</div>
<br><br>
  <?php endforeach ?>
<?php $this->load->view('footer/footer') ?>
   <?php $this->load->view('assets-js') ?>
</body>
</html>
