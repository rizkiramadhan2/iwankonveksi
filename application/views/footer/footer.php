<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        .full {
    width: 100%;    
}
.gap {
	height: 30px;
	width: 100%;
	clear: both;
	display: block;
}
.footer {
	background: #EDEFF1;
	height: auto;
	padding-bottom: 30px;
	position: relative;
	width: 100%;
	border-bottom: 1px solid #CCCCCC;
	border-top: 1px solid #DDDDDD;
}
.footer p {
	font-size: 13px;
	list-style-type: none;
	margin-left: 0;
	padding-left: 0;
	margin-top: 15px;
	color: #7F8C8D;
}
.footer img {
	max-width: 100%;
}
.footer h3 {
	border-bottom: 1px solid #BAC1C8;
	color: #54697E;
	font-size: 18px;
	font-weight: 600;
	line-height: 27px;
	padding: 40px 0 10px;
	text-transform: uppercase;
}
.footer ul {
	font-size: 13px;
	list-style-type: none;
	margin-left: 0;
	padding-left: 0;
	margin-top: 15px;
	color: #7F8C8D;
}
.footer ul li a {
	padding: 0 0 5px 0;
	display: block;
}
.footer a {
	color: #78828D
}
.supportLi h4 {
	font-size: 20px;
	font-weight: lighter;
	line-height: normal;
	margin-bottom: 0 !important;
	padding-bottom: 0;
}
.newsletter-box input#appendedInputButton {
	background: #FFFFFF;
	display: inline-block;
	float: left;
	height: 30px;
	clear: both;
	width: 100%;
}
.newsletter-box .btn {
	border: medium none;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-o-border-radius: 3px;
	-ms-border-radius: 3px;
	border-radius: 3px;
	display: inline-block;
	height: 40px;
	padding: 0;
	width: 100%;
	color: #fff;
}
.newsletter-box {
	overflow: hidden;
}
.bg-gray {
	background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
	box-shadow: 0 1px 0 #B4B3B3;
}
.social li {
	background: none repeat scroll 0 0 #B5B5B5;
	border: 2px solid #B5B5B5;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-o-border-radius: 50%;
	-ms-border-radius: 50%;
	border-radius: 50%;
	float: left;
	height: 36px;
	line-height: 36px;
	margin: 0 8px 0 0;
	padding: 0;
	text-align: center;
	width: 36px;
	transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-webkit-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
}
.social li:hover {
	transform: scale(1.15) rotate(360deg);
	-webkit-transform: scale(1.1) rotate(360deg);
	-moz-transform: scale(1.1) rotate(360deg);
	-ms-transform: scale(1.1) rotate(360deg);
	-o-transform: scale(1.1) rotate(360deg);
}
.social li a {
	color: #EDEFF1;
}
.social li:hover {
	border: 2px solid #2c3e50;
	background: #2c3e50;
}
.social li a i {
	font-size: 16px;
	margin: 0 0 0 5px;
	color: #EDEFF1 !important;
}
.footer-bottom {
	background: #E3E3E3;
	border-top: 1px solid #DDDDDD;
	padding-top: 10px;
	padding-bottom: 10px;
}
.footer-bottom p.pull-left {
	padding-top: 6px;
}
.payments {
	font-size: 1.5em;	
}
    </style>
</head>
<body>
<footer style="
    padding-left: 0px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
">
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  col-md-4 col-sm-4 col-xs-6">
                    <h3> Iwan Konveksi </h3>
                    <ul>
                        <li> <a href="#"> Desain </a> </li>
                        <li> <a href="#"> Ukuran Produk </a> </li>
                        <li> <a href="#"> Galeri </a> </li>
                        <li> <a href="#"> Cara Pemesanan </a> </li>
                    </ul>
                </div>
                <div class="col-lg-5  col-md-5 col-sm-4 col-xs-6">
                    <h3> Alamat </h3>
                    <p>Perum. Alamsari No. 02 Gentingan Merjosari, Malang. +6281288167973</p>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6 ">
                    <h3>Info lebih</h3>
                    <ul>
                    	<li>
                    		<div class="btn btn-primary"><span class="fa fa-user"></span> Visitor today : <span class="visitor"><?= $_SESSION['visitor'] ?></span> </div>
                    	</li>
                    	<br>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <button class="btn  btn-default" type="button" onclick="window.location.href='<?php echo base_url().'kontak' ?>'"> Klik Disini <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-instagram">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
            <p style="font-size: 0.78em" class="pull-left">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a> <br>Copyright © <span><a target="_blank" href="https://linkedin.com/in/rizki-ramadhan-4a3532148">Iwan Konveksi</a></span> 2017. All right reserved. </p>
  
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>
</body>
 <script type="text/javascript">
  
  
   	setInterval(function(){
       $.ajax({
        type: "POST",
        url: "<?php echo base_url().'lookup_visitor' ?>",
        success: function(data) {
            $(".visitor").html(data);
        }
         });
          
      },15000);

    
</script>
</html>
