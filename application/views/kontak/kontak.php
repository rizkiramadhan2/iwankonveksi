<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Kontak</title>
        
    <?php $this->load->view('assets-css2') ?>
    <style type="text/css">
        
	/* Conatct start */

        .header-title
        {
          text-align: center;
        }

        #tip 
        {
            display:none;  
        }

       

        .form-control
        {
        	border-radius:0px;
        	border:1px solid #EDEDED;
        }


        .form-control:focus
        {
        	border:1px solid #00bfff;
        }

        .textarea-contact
        {
        	resize:none; 
        }

        .btn-send
        {
        	border-radius: 0px;
        	border:1px solid #00bfff;
        	background:#00bfff;
        	color:#fff; 
        }

        .btn-send:hover
        {
        	border:1px solid #00bfff;
        	background:#fff;
        	color:#00bfff;
        	transition:background 0.5s;   
        }

        .second-portion
        {
        	margin-top:50px; 
        }
        hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0; 
}    

		.box > .icon { text-align: center; position: relative; }
		.box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: #acb060; vertical-align: middle; }
		.box > .icon:hover > .image { background: #333; }
		.box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
		.box > .icon:hover > .image > i { color: white !important; }
		.box > .icon > .info { margin-top: -24px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; min-height:163px;}
		.box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
		.box > .icon > .info > h3.title {  font-size: 16px; color: #222; font-weight: 700; }
		.box > .icon > .info > p {  font-size: 13px; color: #666; line-height: 1.5em; margin: 20px;}
		.box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #222; }
		.box > .icon > .info > .more a { font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
		.box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
		.box .space { height: 30px; }

		@media only screen and (max-width: 768px)
		{
			.contact-form
			{
				margin-top:25px; 
			}

			.btn-send
			{
				width: 100%;
				padding:10px; 
			}

			.second-portion
			{
				margin-top:25px; 
			}
		}
	/* Conatct end */
    </style>
    
</head>
<body style="background:#efefe9;">
<?php $this->load->view('header/nav') ?>
<head>
</head>
<div class="container animated fadeIn">
<div class="container second-portion">
	<div class="row">
    <hr>
        <!-- Boxes de Acoes -->
    	<div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">Social Media</h3>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp ridwanadik@gmail.com
							<br>
							<br>
							<i class="fa fa-instagram" aria-hidden="true"></i> &nbsp <a href="https://www.instagram.com/iwankonveksi/">@iwankonveksi</a>
						</p>
					
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">Kontak</h3>
    					<p>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp +6281288167973
							<br>
							<br>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  +628975670652 
						</p>
						
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">Alamat</h3>
    					<p>
							 <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp Perum. Alamsari No. 02 Gentingan Merjosari, Malang
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>		    
		<!-- /Boxes de Acoes -->
		
		<!--My Portfolio  dont Copy this -->
	    
	</div><br><br><br>
  <div class="row">
    <div class="col-sm-12">
    <div class="row">
    	<h3 class="col-lg-6 col-md-6 col-sm-6 header-title"> <b>Lokasi</b> </h3>
    <h3 class="hidden-xs  col-lg-6 col-md-6 col-sm-6 header-title"> <b>Pesan</b> </h3>
    </div>
   	<hr>
    	<div class="col-sm-6">
    	<iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3951.585134682955!2d112.5836809!3d-7.9383224!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78823967567db7%3A0xc4d68a4f9634d4fd!2sPerum.+Alam+Sari!5e0!3m2!1sid!2sid!4v1503289438690" allowfullscreen></iframe>
    	</div>
    	
    		<h3 class="hidden-sm hidden-md hidden-lg header-title"> Pesan </h3>
    	<hr class="hidden-sm hidden-md hidden-lg ">
    	<div class="col-sm-6">
    		<form action="form.php" class="contact-form" method="post">
	
		        <div class="form-group">
		          <input type="text" class="form-control" id="name" name="nm" placeholder="Masukkan Nama" required="">
		        </div>
		    
		    
		        <div class="form-group form_left">
		          <input type="email" class="form-control" id="email" name="em" placeholder="Masukkan Email" required="">
		        </div>
		    
		      <div class="form-group">
		           <input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Masukkan Nomor hp" required="">
		      </div>
		      <div class="form-group">
		      <textarea  class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Masukkan isi pesan" required=""></textarea>
		      <br>
	      	  <button class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Kirim </button>
		      </div>
     		</form>
    	</div>
    </div>
  </div>

  
</div>

</div>
  <?php $this->load->view('footer/footer') ?>
  <?php $this->load->view('assets-js') ?>
</body>
</html>
