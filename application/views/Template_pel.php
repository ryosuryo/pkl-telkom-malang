<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Boogja</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= base_url()?>assets2/img/speaker.png" rel="icon">
  <link href="<?= base_url()?>assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url()?>assets2/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url()?>assets2/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets2/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets2/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets2/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url()?>assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

  <script src="<?= base_url()?>assets2/lib/jquery/jquery.min.js"></script>
</head>

<body>

  
 
  
  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="#">Boo<span class="color-b">gja</span></a>
      
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <div>
    <?php
        $this->load->view($konten_pel);
    ?>
  </div>

  <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 ">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Boogja Agency</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duis
                sed aute irure.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> contact@example.com</li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> +54 356 945234</li>
              </ul>
            </div>
          </div>
        </div>
       
       
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Booking Saja</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
            Designed by <a href="https://bootstrapmade.com/">--------</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="<?= base_url()?>assets2/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url()?>assets2/lib/popper/popper.min.js"></script>
  <script src="<?= base_url()?>assets2/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>assets2/lib/easing/easing.min.js"></script>
  <script src="<?= base_url()?>assets2/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url()?>assets2/lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url()?>assets2/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url()?>assets2/js/main.js"></script>

</body>
</html>
