<!doctype html>
<html lang="en">
  <head>
    <?php $this->load->view('new/assets-css') ?>
  </head>
  <body>
  
  <div class="js-animsition animsition" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">

    <?php $this->load->view('new/header') ?>

    <!-- END templateux-navbar -->
    <section class="templateux-hero"  data-scrollax-parent="true">
      <!-- <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="<?=base_url()?>images2/hero_2.jpg" /></div> -->

      <div class="container">
        <div class="row align-items-center justify-content-center intro">
          <div class="col-md-10" data-aos="fade-up">
            <h1>Canvas Tote Bag</h1>
            
            <a href="#next" class="go-down js-smoothscroll"></a>
            

            
            
          </div>
        </div>
      </div>
    </section>
    <!-- END templateux-hero -->
    
    
    <section class="templateux-portfolio-overlap mb-5" id="next">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row work-detail">
              <div class="col-md-4 ">
                <span class=caption>Role</span>
                <strong>Strategy & Design</strong>
              </div>
              <div class="col-md-4">
                <span class=caption>Team</span>
                <strong>John Smith, Chris Gold</strong>
              </div>
              <div class="col-md-4">
                <span class=caption>Company</span>
                <strong>Tote Bag Co.</strong>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6">
            <p class="mb-5">Nullam nec purus ut sem hendrerit scelerisque a non magna. Curabitur porttitor turpis vehicula dignissim tempus. Praesent hendrerit suscipit magna, a venenatis dui placerat nec. Suspendisse potenti. </p>
              </div>
              <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sed, quia at error minus, praesentium qui tempora beatae libero provident.</p>
              </div>
            </div>


            <p class="text-center mb-5"><img src="<?=base_url()?>images2/img_2_large.jpg" alt="Image placeholder" class="img-fluid"></p>

            <div class="row mb-5">
              <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id veniam quia distinctio temporibus delectus laborum, error qui iusto recusandae nesciunt voluptatem cupiditate, quaerat, odio ullam pariatur ipsam rerum dignissimos architecto, eos voluptatibus consectetur dicta ipsum facilis sunt. Accusantium, tenetur nam.</p>
              </div>
              <div class="col-md-6">
                <p>Ea, assumenda illum molestias omnis natus inventore odit. Totam fugiat, esse. Nostrum, aspernatur sit repellendus. Quas dolor consequuntur quidem commodi debitis possimus veniam consequatur excepturi natus aliquam molestiae, odio praesentium tenetur atque, labore harum. Possimus esse provident eius facere, doloribus!</p>
              </div>
            </div>
            

            <p class="text-center mb-5"><img src="<?=base_url()?>images2/img_1_large.jpg" alt="Image placeholder" class="img-fluid"></p>

            <p class="text-center"><a href="#" class="button button--red">Visit Website</a></p>
          </div>


          
        </div>

      </div>
    </section>

    <section class="testimony">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <blockquote class="mb-5">
              <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, quod, error laudantium suscipit eos voluptatem magni quae a perferendis possimus tenetur, consequatur incidunt sed! Iste rem suscipit quaerat. Laudantium, ipsa.&rdquo;</p>
            </blockquote>
            <p class="author">&mdash; <span>John Smith</span>, <span>Tote Bag CEO</span></p>
          </div>
        </div>
      </div>
    </section>

   
   

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
  
  </body>
</html>