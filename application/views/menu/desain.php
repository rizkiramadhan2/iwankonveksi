<!DOCTYPE html>
<html lang="en">
<head>
  <title>Desain</title>
  <?php $this->load->view('assets-css') ?>
  <style>
   
  </style>
</head>
<body>
<!-- header -->
<?php $this->load->view('header/nav') ?>
<div id="myCarousel" class="carousel header-container animated fadeIn" data-ride="carousel">
    <div class="carousel-inner swiper-fade" role="listbox">
        <img class="swiper-fade2" style="opacity: 0.55" src="<?php echo base_url().'img/desain/banner-desain.png' ?>" alt="Image">
        <div class="carousel-caption">
          <h2 class="swiper-fade animated slideInDown"><strong>DESAIN</strong></h2>
        </div>      
    </div>
</div>
<div class="">    
  <br><br>
 <div class="row">

 <!--MOBILE VERSION -->
<div class="dropdown col-xs-10 col-xs-offset-1 hidden-sm hidden-md hidden-lg">
  <button class="hidden-sm hidden-md hidden-lg btn btn-default col-xs-10 col-xs-offset-1 dropdown-toggle" type="button" data-toggle="dropdown">Kategori
  <span class="caret"></span></button>
  <ul class="dropdown-menu ">
   <li class="list-group-item"><a href="<?php echo base_url().'produk-kaos' ?>"><span><img width="25" height="25" src="<?php echo base_url().'svg/006-shirt.svg'?>"></span> Kaos</a></li>
            <li class="list-group-item"><a href="<?php echo base_url().'produk-jaket' ?>"><span><img width="25" height="25" src="<?php echo base_url().'svg/005-hooded-jacket.svg'?>"></span> Jaket</a></li>
            <li class="list-group-item"><a href="<?php echo base_url().'produk-kemeja' ?>"><img width="25" height="25" src="<?php echo base_url().'svg/004-shirt-1.svg'?>"></span> Kemeja</a></li>
            <li class="list-group-item"><a href="<?php echo base_url().'produk-polo' ?>"><img width="25" height="25" src="<?php echo base_url().'svg/003-cotton-polo-shirt.svg'?>"></span> Polo</a></li>
            <li class="list-group-item"><a href="<?php echo base_url().'produk-jersey' ?>"><img width="25" height="25" src="<?php echo base_url().'svg/002-american-football-jersey.svg'?>"></span> Jersey</a></li>
            <li class="list-group-item"><a href="<?php echo base_url().'produk-topi' ?>"><img width="25" height="25" src="<?php echo base_url().'svg/001-cap.svg'?>"></span> Topi</a></li>
            <li class="list-group-item"><a href="<?php echo base_url().'produk-lain' ?>"><img width="25" height="25" src="<?php echo base_url().'svg/clothes.svg'?>"></span> Lain - Lain</a></li>
  </ul>
</div>
<div class="hidden-sm hidden-md hidden-lg col-xs-10 col-xs-offset-1"><br><br><br><br></div> <!--MOBILE VERSION -->




<div class="col-lg-3 hidden-xs col-sm-3 col-md-3" style="margin-left:30px">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">Kategori</div>
        <div class="panel-body">
          <ul class="list-group" >
            <li class="list-group-item"><a href="#"><span><img width="25" height="25" src="<?php echo base_url().'svg/006-shirt.svg'?>"></span> Kaos</a></li>
            <li class="list-group-item"><a href="#"><span><img width="25" height="25" src="<?php echo base_url().'svg/005-hooded-jacket.svg'?>"></span> Jaket</a></li>
            <li class="list-group-item"><a href="#"><img width="25" height="25" src="<?php echo base_url().'svg/004-shirt-1.svg'?>"></span> Kemeja</a></li>
            <li class="list-group-item"><a href="#"><img width="25" height="25" src="<?php echo base_url().'svg/003-cotton-polo-shirt.svg'?>"></span> Polo</a></li>
            <li class="list-group-item"><a href="#"><img width="25" height="25" src="<?php echo base_url().'svg/002-american-football-jersey.svg'?>"></span> Jersey</a></li>
            <li class="list-group-item"><a href="#"><img width="25" height="25" src="<?php echo base_url().'svg/001-cap.svg'?>"></span> Topi</a></li>
            <li class="list-group-item"><a href="#"><img width="25" height="25" src="<?php echo base_url().'svg/clothes.svg'?>"></span> Lain - Lain</a></li>
          </ul>
        </div>
    </div>
</div>
  <div class="col-sm-8 col-lg-8 col-md-8">
   <h3>Macam-macam desain</h3><br>
     <div id="row-image">
       <div class="row">
     <?php $k=0; ?>
  <?php for ($i=0; $i <2 ; $i++):?> 
  <div class="row">
     <?php for($j=0; $j <=2 ; $j++):  ?>
            <div class="col-sm-4 col-md-4 col-lg-4" >
        <div class="panel panel-primary">
          <a class="photo" id="<?= $data[$k]['id_photo']?>"><img src="<?= $data[$k++]['path'] ?>" class="img-responsive" style="width:100%" alt="Image">
          </a>
        </div>
        </div>
    <?php if(count($data)-$k==0)break; ?>
     <?php endfor ?>
   </div>
  <?php endfor ?>
   </div>
     </div>
     <div class="text-center"><button value="6" class="more btn btn-default">Muat lagi <span class="fa fa-angle-down"></span></button></div>
  </div>
  </div>
  
</div><br>
<div class="new_modal">
  
</div>


<!--
<div class="modal fade myModal1" role="dialog">
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
</div>-->
  <?php $this->load->view('footer/footer') ?>
   <?php $this->load->view('assets-js') ?>
   <script type="text/javascript">
  
   $(document).ready(
         function(){
        $(document).on('click', '.photo', function() {
          var id = this.id;
          $.ajax({
        type: "POST",
        url: "<?php echo base_url().'desain-img/' ?>"+id,
        success: function(data) {
            $(".new_modal").html(data);
             $(".myModal1").modal();
        }
         });
        });
        $('.more').on('click', function() {
          var n = $('.more').val();
          $.ajax({
        type: "POST",
        url: "<?php echo base_url().'desain-more/' ?>"+n,
        success: function(data) {
          $('.more').val((parseInt(n)+3));
          $("#row-image").append(data);
        }
         });
        })
          
      }

    );
</script>
</body>
</html>
