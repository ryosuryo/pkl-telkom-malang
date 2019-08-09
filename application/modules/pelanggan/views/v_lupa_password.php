
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Masukkan Email Pemulihan</title>

    <!-- Icons font CSS-->
     <link href="<?= base_url()?>assets2/img/login.png" rel="icon">
    <link href="<?= base_url()?>assets3/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url()?>assets3/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?= base_url()?>assets3/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url()?>assets3/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url()?>assets3/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper p-t-45 p-b-50"  style="background-color: #2eca6a;">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Lupa Password !!!</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= base_url()?>index.php/pelanggan/Login_pelanggan/forgotPassword">
                        <?= $this->session->flashdata('pesan_login');?><br>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" value="<?= set_value('email');?>">
                                    <?= form_error('email','<small style="color: red;">','</small>')?>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit">Kirim</button>
                            <a href="<?= base_url()?>index.php/pelanggan/LandController" class="btn btn--radius-2 btn--red" style="text-decoration: none;">Cancel</a>
                            
                        </div>
                         

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url()?>assets3/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?= base_url()?>assets3/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url()?>assets3/vendor/datepicker/moment.min.js"></script>
    <script src="<?= base_url()?>assets3/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url()?>assets3/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

