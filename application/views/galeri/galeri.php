<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Galeri konveksi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('assets-css') ?>
    <style type="text/css">
      .portfolio .thumbnail {
          position: relative;
      }

      .portfolio .thumbnail:hover {
          cursor: pointer;
      }

      .portfolio .caption {
          bottom: 0;
          position: absolute;
      }

      .portfolio .btn {
          opacity: 0.75;
      }
    </style>
</head>
<body>
<?php $this->load->view('header/nav') ?>
<div class="container" style="padding-top: 60px">
<h2>Galeri</h2>
<h5>Berikut beberapa produk yang sudah pernah dibuat dan didesain</h5><hr>
  <div class="row portfolio">
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/1.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/2.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/3.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/4.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/5.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/6.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/7.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/8.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/9.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/10.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/11.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/12.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/13.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/14.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/15.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/16.png' ?>">
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url().'img/galeri/17.png' ?>">
      </div>
    </div>
    <!--<div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-responsive" src="https://placehold.it/420x340?text=UKURAN 420x340" alt="The awesome description" data-toggle="modal" data-target="#myModal">
        <div class="caption">
          <p class="btn btn-default btn-xs pull-right" rel="tooltip"><i class="fa fa-heart"></i><i
            class="fa fa-heart"></i><i class="fa fa-heart-o"></i><i class="fa fa-heart-o"></i><i
            class="fa fa-heart-o"></i></p>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>-->
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel"></h4>
        </div>
        <div class="modal-body">
          <img width="100%" class="img-responsive" src="https://placehold.it/420x340?text=UKURAN 420x340" alt="image">
        </div>
      </div>
    </div>
  </div>
</div></div
  <?php $this->load->view('footer/footer') ?>
<?php $this->load->view('assets-js') ?>

</body>
</html>