<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Boogja</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= base_url()?>assets2/img/login.png" rel="icon">
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
</head>

<body>

  
 
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Login Akun Kamu !!!</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" method="post" action="<?= base_url()?>index.php/pelanggan/Login_pelanggan/proses_login">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Username" name="username" style="border-radius: 12px;">
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control-lg form-control-a" placeholder="Password" name="password" style="border-radius: 12px;">
            </div>
          </div>          
          <div class="col-md-12">
            <button type="submit" class="btn btn-b" style="border-radius: 12px;">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

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
          <li class="nav-item">
            <a class="nav-link active" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">List Restoran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
     <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false" style="border-radius: 12px;">
        <span class="" aria-hidden="true">Login</span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?= base_url()?>assets2/img/1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Yogyakarta, Indonesia
                      <br> 78345</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">001 </span> Saatnya
                      <br> Booking Saja</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Daftar Sekarang</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?= base_url()?>assets2/img/2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Yogyakarta, Indonesia
                      <br> 78345</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Sekarang
                      <br> Lebih mudah !!!</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Daftar Sekarang</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?= base_url()?>assets2/img/3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Yogyakarta, Indonesia
                      <br> 78345</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">207 </span> Menjadi
                      <br> Tanpa Ribet !!!</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Daftar Sekarang</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->

                            <?php
                                $pesan = $this->session->flashdata('pesan');
                                if($pesan != NULL){
                                    echo ' <div class="alert alert-danger">'.$pesan.'</div>';
                                }

                            ?>

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Apa itu Boogja ?</h1>
            <span class="color-text-a"><img src="<?= base_url()?>assets2/img/speaker.png" style="width: 4%">  Boogja, singkatan dari "Booking Saja" adalah sebuah aplikasi berbasis web yang bertujuan untuk memudahkan para pelanggan untuk memesan meja di restoran favorit secara online, sehingga tidak ... </span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Apa itu Boogja ?
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
               <h2 class="title-a">Mengapa Menggunakan Boogja ?</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="<?= base_url()?>assets2/img/online-payment.png" style="width: 55%">
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Mudah</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Bila ingin pesan meja tidak perlu datang ke restorannya langsung, cukup pesan secara online melalui website
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="<?= base_url()?>assets2/img/time.png" style="width: 50.5%">
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Waktu</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Jika akan memesan meja datang langsung ke tempat restoran, maka akan boros waktu dan biaya untuk perjalanan bolak-balik ke restoran
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <img src="<?= base_url()?>assets2/img/food.png" style="width: 95%">
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Makanan</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Selain pesan meja, boogja juga menyediakan fitur pesan makanan sekaligus. Jadi setelah pesan meja pelanggan juga bisa pesan makanan sekaligus.
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Services End /-->

  

  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Cara Pesan Meja dan Makanan</h2>
            </div>
            <div class="title-link">
              <a href="property-grid.html">All
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="property-carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="<?= base_url()?>assets2/img/register.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <span class="">Daftar <br>Akun Boogja</span>
                  </h2>
                </div>
                <div class="card-body-a">
                  
                </div>
                <div class="card-footer-a">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="<?= base_url()?>assets2/img/login.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <span class="">Login <br>Masuk</span>
                  </h2>
                </div>
                <div class="card-body-a"></div>
                 
                <div class="card-footer-a">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="<?= base_url()?>assets2/img/pilihrestoran.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <span class="">Pilih <br>Restoran</span>
                  </h2>
                </div>
                <div class="card-body-a">
                  
                </div>
                <div class="card-footer-a">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="<?= base_url()?>assets2/img/pilihmakan.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <span class="">Pilih <br>Masakan </span>
                  </h2>
                </div>
                <div class="card-body-a">
                  
                </div>
                <div class="card-footer-a">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="<?= base_url()?>assets2/img/bayar.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <span class="">Bayar <br>Tagihan</span>
                  </h2>
                </div>
                <div class="card-body-a">
                  
                </div>
                <div class="card-footer-a">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property End /-->

  <!--/ Agents Star /-->
  
  <!--/ Agents End /-->

  <!--/ News Star /-->
  
  <!--/ News End /-->

  <!--/ Testimonials Star /-->
  <section class="section-testimonials section-t8 nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Testimonials</h2>
            </div>
          </div>
        </div>
      </div>
      <div id="testimonial-carousel" class="owl-carousel owl-arrow">
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="<?= base_url()?>assets2/img/testinomi1.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                    debitis hic ber quibusdam
                    voluptatibus officia expedita corpori.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="<?= base_url()?>assets2/img/left-arrow.png" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Lalu Fatoni</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="<?= base_url()?>assets2/img/testinomi2.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                    debitis hic ber quibusdam
                    voluptatibus officia expedita corpori.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="<?= base_url()?>assets2/img/left-arrow.png" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Dio Febrian Y.</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonials End /-->

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
          
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
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
  <script src="<?= base_url()?>assets2/lib/jquery/jquery.min.js"></script>
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
