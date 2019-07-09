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
                                        <th>ID Restoran</th>
                                        <th>Meja</th>
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
                              
<script type="text/javascript">
   function load_cart()
   {
    $('#tm_pesanan').html('');
    $.getJSON("<?= base_url()?>index.php/pelanggan/Transaksi_pel/tm_pesanan",function(hasil){
      var no=0;

       $.each(hasil['data_cart'],function(key,obj){
        no++;
        $("#tm_pesanan").append(
          '<tr>'+
            '<td>'+no+'</td>'+
            '<td>'+obj['id']+'</td>'+
            '<td>'+obj['number']+'</td>'+
          '</tr>'
          );
      });
    });
   }
   load_cart();


</script>