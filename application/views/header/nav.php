<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url()?>"><span><img class="img-circle" style="position: relative; top:-65%;" width="45" height="45" src="<?php echo base_url().'img/favicon.jpg' ?>"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url().'desain'?>"><i class=""></i>Desain</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url().'jenis-bahan'?>"><i class=""></i>Jenis Bahan</a></li>
                    
                </ul>
            </li>

        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk<b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url().'produk-kaos' ?>"><span><img width="25" height="25" src="<?php echo base_url().'svg/006-shirt.svg'?>"></span> Kaos</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url().'produk-jaket' ?>"><span><img width="25" height="25" src="<?php echo base_url().'svg/005-hooded-jacket.svg'?>"></span> Jaket</a></li>
                     <li class="divider"></li>
                    <li><a href="<?php echo base_url().'produk-kemeja' ?>"><img width="25" height="25" src="<?php echo base_url().'svg/004-shirt-1.svg'?>"></span> Kemeja</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url().'produk-polo' ?>"><img width="25" height="25" src="<?php echo base_url().'svg/003-cotton-polo-shirt.svg'?>"></span> Polo</a></li>
                    <li class="divider"></li>
                    <!--<li><a href="<?php //echo base_url().'produk-jersey' ?>"><img width="25" height="25" src="<?php// echo base_url().'svg/002-american-football-jersey.svg'?>"></span> Jersey</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php// echo base_url().'produk-topi' ?>"><img width="25" height="25" src="<?php //echo base_url().'svg/001-cap.svg'?>"></span> Topi</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php //echo base_url().'produk-lain' ?>"><img width="25" height="25" src="<?php //echo base_url().'svg/clothes.svg'?>"></span> Lain - Lain</a></li>-->
                </ul>
            </li>
        <li><a href="<?= base_url().'galeri' ?>">Galeri</a></li>
        <li><a href="<?= base_url().'pemesanan' ?>"><i class=""></i>Pemesanan</a></li>
         <li><a href="<?= base_url().'kontak' ?>">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>
