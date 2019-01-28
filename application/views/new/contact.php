<!doctype html>
<html lang="en">
  <head>
     <?php $this->load->view('new/assets-css') ?>
  </head>
  <body>
  
  <div class="js-animsition animsition" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">

     <?php $this->load->view('new/header') ?>

    <!-- END templateux-navbar -->
    <section class="templateux-hero mb-5"  data-scrollax-parent="true">
      <!-- <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="<?=base_url()?>images2/hero_2.jpg" /></div> -->

      <div class="container">
        <div class="row align-items-center justify-content-center intro">
          <div class="col-md-10" data-aos="fade-up">
            <h1>Get in touch</h1>
            <p class="lead">Have an amazing idea you would like to work with us on? Let us know using the form below</p>
            <a href="#next" class="go-down js-smoothscroll"></a>
          </div>
        </div>
      </div>
    </section>
    <!-- END templateux-hero -->
    
    
    <section class="templateux-portfolio-overlap mb-5" data-aos="fade-up" id="next">
      <div class="container">
        <!-- <div class="row"> -->
          <form action="#" method="post">
            <div class="row">
              <div class="col-md-4  mb-4">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="col-md-4  mb-4">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="col-md-4  mb-4">
                <input type="text" class="form-control" placeholder="Phone">
              </div>
            </div>
            <div class="row">
              <div class="col-md-4  mb-4">
                <input type="text" class="form-control" placeholder="Time Zone">
              </div>
              <div class="col-md-4  mb-4">
                <input type="email" class="form-control" placeholder="Budget">
              </div>
              <div class="col-md-4  mb-4">
                <input type="text" class="form-control" placeholder="Type of Work">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12  mb-4">
                <textarea name="" class="form-control" id="" cols="30" rows="10" placeholder="Write your message"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4  mb-4">
                <input type="submit" class="button button--red" value="Send your message">
              </div>
            </div>
          </form>
        <!-- </div> -->
      </div>
    </section>

    <section id="map"></section>

    <footer class="templateux-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 text-md-left text-center">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          </div>
          <div class="col-md-6 text-md-right text-center footer-social">
            <a href="#" class="p-3"><span class="icon-facebook2"></span></a>
            <a href="#" class="p-3"><span class="icon-twitter2"></span></a>
            <a href="#" class="p-3"><span class="icon-dribbble2"></span></a>
            <a href="#" class="p-3"><span class="icon-instagram"></span></a>
          </div>
        </div>
      </div>
    </footer>

  </div>

  
   <?php $this->load->view('new/assets-js') ?>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?=base_url()?>js2/google-map.js"></script>
  
  </body>
</html>