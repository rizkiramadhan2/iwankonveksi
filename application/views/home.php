<!DOCTYPE html>
<html lang="en">
<head>
  <title>Iwan Konveksi</title>
  <?php $this->load->view('assets-css') ?>
  <style>
   
  </style>
</head>
<body>
<!-- header -->
<?php $this->load->view('header/nav') ?>
<div id="myCarousel" class="carousel slide header-container animated fadeIn" data-ride="carousel">
    <!-- Indicators -->
    <ol class="hidden-xs carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner " role="listbox">
      <div  class="item active">
      <!--<div class="dim"></div>-->
        <img class="swiper-fade2" style="opacity: 0.55"  src="<?php echo base_url().'img/banner/1.jpg' ?>" alt="Image">
        <div class="carousel-caption animated slideInDown">
          <div class="hidden-sm hidden-md hidden-lg">
             <h4>Ayo Pesan dan Desain pakaianmu!</h4>
          </div>
          <div class="hidden-xs">
          <h3>Ayo Pesan dan Desain pakaianmu!</h3>
          <p>Cepat, Tepat, Harga bersahabat</p></div>
          <a class='btn btn-lg btn-default' href="<?php echo base_url().'pemesanan' ?>">Pesan Sekarang</a>
        </div>      
      </div>

      <div class="item">
        <img class="swiper-fade2" style="opacity: 0.90" src="<?php echo base_url().'img/banner/2.png' ?>"  alt="Image">
        <div class="carousel-caption animated slideInDown">
          <div class="hidden-sm hidden-md hidden-lg">
             <h4>Menggunakan Teknologi Terbaru!</h4>
             <p style="font-size: 0.79em">Mampu mengerjakan ratusan pcs setiap harinya</p>
          </div>
          <div class="hidden-xs">
          <h3>Menggunakan Teknologi Terbaru!</h3>
          <p>Mampu mengerjakan ratusan pcs setiap harinya</p></div>
        </div>  
      </div>

     <div class="item">
        <img class="swiper-fade2" style="opacity: 0.75" src="<?php echo base_url().'img/banner/3.png' ?>"  alt="Image">
        <div class="carousel-caption animated slideInDown">
          <div class="hidden-sm hidden-md hidden-lg">
             <h4>Menerima Pesanan dari Seluruh Wilayah Indonesia </h4>
             <p style="font-size: 0.79em">Bekerja Sama dengan Ekspedisi Jasa Pengiriman</p>
          </div>
          <div class="hidden-xs">
          <h3>Menerima Pesanan dari Seluruh Wilayah Indonesia </h3>
          <p>Bekerja Sama dengan Ekspedisi Jasa Pengiriman</p></div>
        </div>  
      </div>      
    </div>



    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>Desain terbaru</h3><br>
<div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4" >
      <div class="panel panel-primary">
        <a data-toggle="modal" data-target=".myModal4" href="#"><img src="<?php echo base_url().'img/desain/3.jpg' ?>" class="img-responsive" style="width:100%" alt="Image">
        </a>
      </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4" >
      <div class="panel panel-primary">
        <a data-toggle="modal" data-target=".myModal5" href="#"><img src="<?php echo base_url().'img/desain/4.jpg' ?>" class="img-responsive" style="width:100%" alt="Image">
        </a>
      </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4" >
      <div class="panel panel-primary">
        <a data-toggle="modal" data-target=".myModal10" href="#"><img src="<?php echo base_url().'img/desain/9.jpg' ?>" class="img-responsive" style="width:100%" alt="Image">
        </a>
      </div>
      </div>
      <!--<div class="col-sm-4 col-md-4 col-lg-4">
      <div class="panel panel-primary">
        <a href="#"><img src="<?php //echo base_url().'img/6.jpg' ?>" class="img-responsive" style="width:100%" alt="Image">
        </a>
        <div class="panel-body">
          <a href="#">Nama desain</a><br>
        </div>
       
      </div>
      </div>-->
     
    </div>
</div><br>
<div class="modal fade myModal" role="dialog"><!--login-->
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="text-center">Nama desain </h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6"><img src="<?php echo base_url().'img/6.jpg' ?>" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="col-sm-6">
            <h4>Keterangan : </h4>
            <p>1. Warna mengikuti desain</p>
            <p>2. Menggunakan bahan bla bla</p>
            <p>3. Menggunakan kancing</p>
            <p>4. ........</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade myModal1" role="dialog"><!--login-->
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="text-center">Nama desain </h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6"><img src="https://placehold.it/420x340?text=UKURAN 420x340" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="col-sm-6">
            <h4>Keterangan : </h4>
            <p>1. Warna mengikuti desain</p>
            <p>2. Menggunakan bahan bla bla</p>
            <p>3. Menggunakan kancing</p>
            <p>4. ........</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <?php $this->load->view('footer/footer') ?>

  <?php $this->load->view('assets-js') ?>
</body>
</html>