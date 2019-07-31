<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Daftar akun anda agar mendapat pelayanan terbaik dari Boogja</h1>
            <span class="color-text-a"><img src="<?= base_url()?>assets2/img/speaker.png" style="width: 4%"></span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

<section class="contact">
    <div class="container">
      <div class="row">
        
        <div class="col-sm-12 section-t4">
          <div class="row">
            <div class="col-md-7">
              <form class="form-a contactForm" action="<?= base_url()?>index.php/pelanggan/Login_pelanggan/proses_daftar" method="post">
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="nama" class="form-control form-control-lg form-control-a" placeholder="Your Name" >
                      
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email">
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="telp" class="form-control form-control-lg form-control-a" placeholder="Your Telephone">
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea name="alamat" class="form-control" name="alamat" cols="45" rows="5" data-rule="required" placeholder="Address"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-lg form-control-a" placeholder="Username">
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-lg form-control-a" placeholder="password">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-a">Sign Up</button>
                    <a href="<?= base_url()?>index.php/pelanggan/LandController" type="button" class="btn btn-a">Cancel</a>
                  </div>
                </div><br><br>
                <?php
                                $pesan = $this->session->flashdata('pesan');
                                if($pesan != NULL){
                                    echo ' <div class="alert alert-danger">'.$pesan.'</div>';
                                }

                            ?>
              </form>
            </div>
            <div class="col-md-5 section-md-t3">

            <img src="<?= base_url()?>assets2/img/DAFTAR.png" alt="" width="70%">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>