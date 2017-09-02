<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Pemesanan</title>
         <?php $this->load->view('assets-css') ?>
    <style type="text/css">
        
/* written by riliwan balogun http://www.facebook.com/riliwan.rabo*/
body{
      background: #efefe9;
}
.board{
    width: 100%;
height: 350px;
background: #fff;
/*box-shadow: 10px 10px #ccc,-10px 20px #ddd;*/
}
.board .nav-tabs {
    position: relative;
    /* border-bottom: 0; */
    /* width: 80%; */
    margin: 40px auto;
    margin-bottom: 0;
    box-sizing: border-box;

}

.board > div.board-inner{
    background: #fafafa url(http://subtlepatterns.com/patterns/geometry2.png);
    background-size: 30%;
}

p.narrow{
    width: 60%;
    margin: 10px auto;
}

.liner{
    height: 2px;
    background: #ddd;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    /* background-color: #ffffff; */
    border: 0;
    border-bottom-color: transparent;
}

span.round-tabs{
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: white;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}

span.round-tabs.one{
    color: rgb(34, 194, 34);border: 2px solid rgb(34, 194, 34);
}

li.active span.round-tabs.one{
    background: #fff !important;
    border: 2px solid #ddd;
    color: rgb(34, 194, 34);
}

span.round-tabs.two{
    color: #febe29;border: 2px solid #febe29;
}

li.active span.round-tabs.two{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #febe29;
}

span.round-tabs.three{
    color: #3e5e9a;border: 2px solid #3e5e9a;
}

li.active span.round-tabs.three{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #3e5e9a;
}

span.round-tabs.four{
    color: #f1685e;border: 2px solid #f1685e;
}

li.active span.round-tabs.four{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #f1685e;
}

span.round-tabs.five{
    color: #999;border: 2px solid #999;
}

li.active span.round-tabs.five{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #999;
}

.nav-tabs > li.active > a span.round-tabs{
    background: #fafafa;
}
.nav-tabs > li {
    width: 20%;
}
/*li.active:before {
    content: " ";
    position: absolute;
    left: 45%;
    opacity:0;
    margin: 0 auto;
    bottom: -2px;
    border: 10px solid transparent;
    border-bottom-color: #fff;
    z-index: 1;
    transition:0.2s ease-in-out;
}*/
li:after {
    content: " ";
    position: absolute;
    left: 45%;
   opacity:0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #ddd;
    transition:0.1s ease-in-out;
    
}
li.active:after {
    content: " ";
    position: absolute;
    left: 45%;
   opacity:1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #22c222;
    
}
.nav-tabs > li a{
   width: 70px;
   height: 70px;
   margin: 20px auto;
   border-radius: 100%;
   padding: 0;
}

.nav-tabs > li a:hover{
    background: transparent;
}

.tab-content{

}
.tab-pane{
   position: relative;
padding-top: 50px;
}
.tab-content .head{
    font-size: 25px;
    text-transform: uppercase;
    padding-bottom: 10px;
}
.btn-outline-rounded{
    padding: 10px 40px;
    margin: 20px 0;
    border: 2px solid transparent;
    border-radius: 25px;
}

.btn.green{
    background-color:#5cb85c;
    /*border: 2px solid #5cb85c;*/
    color: #ffffff;
}



@media( max-width : 585px ){
    
    .board {
width: 90%;
}
    span.round-tabs {
        font-size:16px;
width: 50px;
height: 50px;
line-height: 50px;
    }
    .tab-content .head{
        font-size:20px;
        }
    .nav-tabs > li a {
width: 50px;
height: 50px;
line-height:50px;
}

li.active:after {
content: " ";
position: absolute;
left: 35%;
}

.btn-outline-rounded {
    padding:12px 20px;
    }
}

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php $this->load->view('header/nav') ?>
<section style="background:#efefe9;">
        <div class="container">
            <div class="row">
                <div style="margin-left: 18px;" class="board animated fadeIn">
                    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="negosiasi">
                      <span class="round-tabs one">
                              <i class="fa fa-handshake-o"></i>
                      </span> 
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="persyaratan">
                     <span class="round-tabs two">
                         <i class="fa fa-file-text-o"></i>
                     </span> 
           </a>
                 </li>
                 <li><a href="#messages" data-toggle="tab" title="desain">
                     <span class="round-tabs three">
                          <i class="fa fa-file-image-o"></i>
                     </span> </a>
                     </li>

                     <li><a href="#settings" data-toggle="tab" title="proses">
                         <span class="round-tabs four">
                              <i class="fa fa-hourglass-start"></i>
                         </span> 
                     </a></li>

                     <li><a href="#doner" data-toggle="tab" title="selesai">
                         <span class="round-tabs five">
                              <i class="glyphicon glyphicon-ok"></i>
                         </span> </a>
                     </li>
                     
                     </ul></div>

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="home">

                          <h3 class=" text-center">1. Pemesanan & Negosiasi</h3>
                          <p class="narrow text-center">
                              Penentuan Model <br>
                              Penentuan Lama Produksi
                          </p>
                          
                      </div>
                      <div class="tab-pane fade" id="profile">
                          <h3 class="text-center">2. Penuhi Persyaratannya</h3>
                          <p class="narrow text-center">
                              Desain sudah fix<br>
                              Data ukuran dan bahan sudah fix<br>
                              Bayar DP 50%<br>
                          </p>  
                      </div>
                      <div class="tab-pane fade" id="messages">
                          <h3 class="text-center">3. Kirim Desain & Data Ukuran</h3>
                          <p class="narrow text-center">
                              Desain serta data ukuran dikirim ke email <br><span><a href="#">ridwanadik@gmail.com</a></span>
                          </p>
                      </div>
                      <div class="tab-pane fade" id="settings">
                          <h3 class="text-center">4. Tunggu Prosesnya</h3>
                          <p class="narrow text-center">
                              Pesanan akan segera kami proses dan akan <br>selesai sesuai waktu yang telah disetujui
                          </p>
                      </div>
                      <div class="tab-pane fade" id="doner">
                      <h3 class="text-center">5. Pendistribusian Barang</h3>
                      <p class="narrow text-center">
                        Bayar Pelunasan<br>
                        Pesanan telah selesai diproses dan siap didistribusikan
                      </p>
                      </div>

</div>
</div>

</div>
</div>
</section>

<section style="background:#efefe9;">
  <div class="container">
      <div class="row">
          <div style="margin-left: 18px;" class="board animated fadeIn">
              <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
              <div class="container text-center" style=" background: #fafafa url(http://subtlepatterns.com/patterns/geometry2.png);
                background-size: 30%;"><h3>Catatan</h3>
              </div>

               <div class="tab-content">
               <div>
                 <ul>
                   <li><h5>Ukuran dan Model ditetapkan terlebih dahulu</h5></li>
                   <li><h5 >DP dan pelunasan dalam bentuk cash atau transfer ke: 5331-01-000825-50-5 (BRI) atau 7085961866 (BSM), a.n Ridwan Adi Kurniawan</h5></li>
                   <li><h5 >Proses produksi hanya dapat berlangsung saat semua syarat telah terpenuhi</h5></li>
                   <li> <h5 >Lama produksi disesuaikan dengan jumlah pesanan dan model desain yang disepakati</h5></li>
                   <li><h5 >Pelunasan 100%. Kesalahan & cacat barang akan diganti < 3 hari (hubungi narahubung!).Keterlambatan penyelesaian produksi akan dikenakan cashback Rp.3000/barang/hari </h5></li>
                 </ul>
               </div>
               
              </div>
          </div>

        </div>
    </div>
</section>        
<script type="text/javascript">
$(function(){
$('a[title]').tooltip();
});

</script>
  <?php $this->load->view('footer/footer') ?>

</body>
</html>