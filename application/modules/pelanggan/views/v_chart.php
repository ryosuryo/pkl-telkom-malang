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
                                        <th>ID Pesanan</th>
                                        <th>ID Restoran</th>
                                        <th>Nomor Meja</th>
                                        <th>Username Pemesan</th>
                                    </tr>
                                </thead>
                                <tbody id="tm_pesanan_meja">

                              
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
                                        <th>ID Pesanan</th>
                                        <th>ID Restoran</th>
                                        <th>Nomor Meja</th>
                                        <th>Username Pemesan</th>
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
  
   $.getJSON("<?= base_url()?>index.php/pelanggan/Transaksi_pel/get_pesanan_meja",function(data){
        var tampil="";
        $.each(data,function(key,dt){
            tampil+=
           '<tr>'+
                '<td>'+dt['id_pesanan']+'</td>'+
                '<td>'+dt['id_restoran']+'</td>'+
                '<td>'+dt['no_meja']+'</td>'+
                '<td>'+dt['username']+'</td>'+
            '</tr>'

        });
        $("#tm_pesanan_meja").html(tampil);
    });


</script>