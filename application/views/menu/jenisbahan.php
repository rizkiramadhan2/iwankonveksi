<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jenis Bahan</title>
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
    <div class="carousel-inner swiper-fade" role="listbox">
   
        <img class="swiper-fade2" style="opacity: 0.68" src="<?php echo base_url().'img/jenis-bahan/jenis_bahan.png' ?>" alt="Image">
        <div class="carousel-caption">
          <h2 class="swiper-fade animated slideInDown"><strong>JENIS BAHAN</strong></h2>
        </div>      
     

 
</div></div>
<br><br>
<div  class="container">
<select name="category" class="form-control" id="sel1">
              <option <?php //if(strpos(current_url(),"baju")!==false) echo 'selected' ?> value="baju">Baju & Kemeja</option>
              <option value="kaos">Kaos</option>
              <option <?php //if(strpos(current_url(),"jaket-singleside")!==false) echo 'selected' ?> value="jaket-singleside">Jaket Singleside</option>
              <option <?php //if(strpos(current_url(),"jaket-doubleside")!==false) echo 'selected' ?> value="jaket-doubleside">Jaket Doubleside</option>
            </select>
</div>
<br><br>
<div id="tabel-bahan"><?php $this->load->view('menu/tabel') ?></div>

  <?php $this->load->view('footer/footer') ?>
  <?php $this->load->view('assets-js') ?>
  <script type="text/javascript">
$(document).ready(
      function(){
        $('#sel1').on('change', function() {
          var id = $('#sel1').val();
          $.ajax({
        type: "POST",
        url: "<?php echo base_url().'jenis-bahan-' ?>"+id,
        success: function(data) {
            $("#tabel-bahan").html(data);
        }
         });
        })
          
      }
    );
</script>
</body>
</html>
