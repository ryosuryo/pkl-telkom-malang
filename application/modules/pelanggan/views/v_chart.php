<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cart</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/img/boogja.png">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/notika-custom-icon.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/wave/waves.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>assets/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="<?= base_url()?>assets/js/vendor/jquery-1.12.4.min.js"></script>
</head>
<body>

  <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Data Pemesanan Meja</h2>
                            
                        </div>
                        <div class="bsc-tbl-st">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID Pesanan</th>
                                        <th>ID Restoran</th>
                                        <th>Nomor Meja</th>
                                        <th>Username Pemesan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=0;
                                    foreach ($data_m as $d) 
                                    {
                                        $no++;
                                        echo '<tr>
                                                <td>'.$no.'</td>
                                                <td>'.$d->id_pesanan.'</td>
                                                <td>'.$d->id_restoran.'</td>
                                                <td>'.$d->no_meja.'</td>
                                                <td>'.$d->username.'</td>
                                            </tr>';

                                        echo '<tr>
                                          <a href="Get_masakan/pesan_lagi/'.$d->id_restoran.'" class="btn btn-danger">Pesan masakan Lagi</a>
                                        </tr>';
                                    }
                                    ?>
                              
                                </tbody>
                            </table>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Data Pemesanan Makanan</h2>
                            
                        </div>
                        <div class="bsc-tbl-st">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID Makanan</th>
                                        <th>Nama Masakan</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="tm_pesanan">

                              
                                </tbody>
                            </table>
                            <form>
                                <div id="tampil_status">
          
                                </div>
                             </form>
                            <br>
                            <a href="#bayar" onclick="simpan_list_db()" class="btn btn-warning" data-toggle="modal">Bayar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="bayar" role="dialog">
                                    <div class="modal-dialog modals-default nk-light-blue">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Terima Kasih.....</h2>
                                                <p>Silahkan upload bukti transfer pembayaran sebesar Rp.<span id="totalnya">0</span>,- ke rekeninig berikut:</p>
                                                <p>BANK BRI : 096898612371324</p>
                                                <form enctype="multipart/form-data" method="post" id="upload_bukti">
                                                    <input type="file" name="bukti" class="form-control"><br>
                                                    <input type="hidden" name="id_order" id="id_order">
                                                    <button type="submit" name="submit" value="kirim" class="btn btn-default btn-icon-notika waves-effect">
                                                        <i class="notika-icon notika-next"></i>
                                                    </button>
                                                    <span id="pesan_kirim"></span>
                                                </form>
                                                <span id="pesan"></span>
                                            </div>
                                            <div class="modal-footer">
  
                                            </div>
                                        </div>
                                    </div>
                                </div>
    <!-- jquery
        ============================================ -->
  
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?= base_url()?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?= base_url()?>assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?= base_url()?>assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url()?>assets/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url()?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/flot/jquery.flot.js"></script>
    <script src="<?= base_url()?>assets/js/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url()?>assets/js/flot/curvedLines.js"></script>
    <script src="<?= base_url()?>assets/js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/knob/jquery.knob.js"></script>
    <script src="<?= base_url()?>assets/js/knob/jquery.appear.js"></script>
    <script src="<?= base_url()?>assets/js/knob/knob-active.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/wave/waves.min.js"></script>
    <script src="<?= base_url()?>assets/js/wave/wave-active.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/plugins.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/chat/moment.min.js"></script>
    <script src="<?= base_url()?>assets/js/chat/jquery.chat.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="<?= base_url()?>assets/js/tawk-chat.js"></script>
    <script type="text/javascript">
  

    //menampilkan chart makanan enak//

    function load_cart() {
    $('#tm_pesanan').html('');
    $.getJSON("<?= base_url()?>index.php/pelanggan/Transaksi_pel/tm_pesanan",function(hasil){
      var no=0;

        $.each(hasil['data_cart'],function(key,obj){
        no++;
        $("#tm_pesanan").append(
          '<tr>'+
            '<td>'+no+'</td>'+
            '<td>'+obj['id']+'</td>'+
            '<td>'+obj['name']+'</td>'+
            '<td>'+obj['qty']+'</td>'+
            '<td align="left">'+obj['subtotal']+'</td>'+
            '<td><a href="#" class="btn btn-danger btn-sm" onclick="if(confirm(\'Apakah Yakin?\')){ hapus_cart(\''+obj['rowid']+'\')}">delete</a></td>'+
          '</tr>'
          );
        });
        $("#tm_pesanan").append(
        '<tr>'+
          '<td colspan="4">Total Keseluruhan</td>'+
          '<td align="left">'+hasil['total_seluruh']+'</td>'+
          '<td></td>'+
        '</tr>'
        );

    });
  }
  load_cart();

  // pesan lagi
  //proses bayar
   function simpan_list_db(){
    $.getJSON("<?= base_url()?>index.php/pelanggan/Transaksi_pel/simpan_bayar",function(hasil){
    if (hasil['status']==1) {
      $("#pesan").html('Pesanan sudah terkirim');
      $("#pesan").show('animate');
      $("#pesan").addClass("alert alert-success");
      setTimeout(function(){
          $("#pesan").hide('animate');
          $("#pesan").removeClass("alert alert-success");
          setTimeout(function(){
            $("#totalnya").html(hasil['total']);
            $("#bayar").modal("show");
            $("#id_order").val(hasil['id_order']);
            load_total_cart();
            load_cart();
          }, 500);
        }, 3000);
      }
    });
  }

  //hapus chart

  function hapus_cart(id)
  {
      $.getJSON('<?= base_url()?>index.php/pelanggan/Transaksi_pel/hapus_cart/'+id, function(hasil){
      if(hasil['status']==1){
          load_cart();
          load_total_cart();
          $("#pesan").html("sukses menghapus cart");
          $("#pesan").slow('animate');
          $("#pesan").addClass("alert alert-success");

      }

      else{
          $("#pesan").html("gagal menghapus cart");
          $("#pesan").slow('animate');
          $("#pesan").addClass("alert alert-danger");
      }

      setTimeout(function(){
          $("#pesan").hide('animate');
          $("#pesan").removeClass("alert alert-danger");
      },3000);
      }
      );
  }

  //upload bukti
  $('#upload_bukti').submit(function(event){
    event.preventDefault();
    var url = "<?= base_url()?>index.php/pelanggan/Transaksi_pel/upload_bukti";
    var formData = new FormData($("#upload_bukti")[0]);
        $.ajax({
            url:url,
            type:"post",
            data:formData,
            contentType: false,
            processData: false,
            dataType:"json",
            beforeSend:function()
            {
                $("#loading").css("display","block");
            },
            success:function(hasil)
            {
                if(hasil['status']==1)
                {
                    $("#loading").css("display","none");
                    $("#pesan_kirim").html("Bukti telah terupload");
                    $("#pesan_kirim").show("fade");
                    $("#pesan_kirim").addClass("alert alert-success");
                    setTimeout(function()
                    {
                        $("#pesan_kirim").hide("fade");
                        setTimeout(function() 
                        {
                            $("#bayar").modal("hide");
                            $("#pesan_kirim").removeClass("alert alert-success");    
                        }, 500);
                    }, 2000);
                }
                else
                {
                    $("#loading").css("display","none");
                    $("#pesan_kirim").html("Bukti gagal terupload");
                    $("#pesan_kirim").show("fade");
                    $("#pesan_kirim").addClass("alert alert-danger");
                    setTimeout(function()
                    {
                        $("#pesan_kirim").hide("fade");
                        setTimeout(function() 
                        {
                            $("#pesan_kirim").removeClass("alert alert-success");    
                        }, 500);
                    }, 2000);
                }
            }
        });
  });
</script>
</body>
</html>

                              
