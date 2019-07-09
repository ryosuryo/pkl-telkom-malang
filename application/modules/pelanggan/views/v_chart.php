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
                            <a href="#" class="btn btn-primary">Pesan Lagi</a>
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
                                                <h2>Terima Kasih telah memilih restoran kami.</h2>
                                                <p>Silahkan menuju kasir untuk melakukan pembayaran sebesar Rp.<span id="totalnya">0</span>,- </p>
                                                <span id="pesan"></span>
                                            </div>
                                            <div class="modal-footer">
  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
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
</script>