<div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Data Keranjang Pemesanan</h2>
                            
                        </div>
                        <div class="bsc-tbl-st">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID Masakan</th>
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
                            <a href="<?= base_url()?>index.php/Dashboard_pelanggan/index" class="btn btn-primary">Pesan Lagi</a>
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
   


</script>