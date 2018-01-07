<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <title>Selamat datang admin!</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="mbr-section form1" id="form1-1" data-rv-view="0" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">LOGIN</h3>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                    <?php if(isset($data)): ?>
                       <div class='alert alert-danger text-center'> <?= $data?></div>
                    <?php endif ?>
                    <form action="<?php echo base_url('auth'); ?>" method="post">
                        <div class="row row-sm-offset">
                            <div >
                                <div class="form-group">
                                    <label class="form-control-label">Username</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                            </div>
                         </div>
                         <div class="row row-sm-offset">
                            <div >
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                         </div>
                      


                        <div><button type="submit" name="submit" class="btn btn-primary ">LOGIN</button></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>