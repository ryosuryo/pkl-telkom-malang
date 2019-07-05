<div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Data pengurus</h2>
                            
                        </div>
                        <div class="bsc-tbl-st">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID User</th>
                                        <th>Nama pengurus</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Nama Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                   <?php
                                   $no=0;
                                   foreach ($data_pengurus as $du) 
                                   {
                                       $no++;
                                       echo '<tr>
                                                <td>'.$no.'</td>
                                                <td>'.$du->id_pengurus.'</td>
                                                <td>'.$du->nama_pengurus.'</td>
                                                <td>'.$du->username.'</td>
                                                <td>'.$du->password.'</td>
                                                <td>'.$du->nama_level.'</td>
                                                <td><a href="#ubah" onclick="tm_detail('.$du->id_pengurus.')" class="btn btn-warning" data-toggle="modal">Ubah</a>
                                                     <a href='.base_url('index.php/admin/Pengurus/hapus/'.$du->id_pengurus).' onclick="return confirm(\'anda yakin menghapus item ini?\')" class="btn btn-danger">Hapus</a></td>
                                            </tr>';
                                   }
                                   ?>
                                </tbody>
                            </table>
                            <br>
                            <a href="#tambah" class="btn btn-primary" data-toggle="modal">Tambah</a><br>
                             <?php
                                $pesan = $this->session->flashdata('pesan');
                                if($pesan != NULL){
                                    echo ' <div class="alert alert-danger">'.$pesan.'</div>';
                                }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal tambah -->


<div class="modal fade" id="tambah" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                             <form action="<?= base_url('index.php/admin/Pengurus/proses_tambah')?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <h2 style="text-align: center;">Tambah Data</h2>
                                                <label>Username</label>
                                                <input type="text" name="username"  class="form-control">
                                                <label>Password</label>
                                                <input type="text" name="password"  class="form-control">
                                                <label>Nama pengurus</label>
                                                <input type="text" name="nama_pengurus"  class="form-control">
                                                <label>Level</label>
                                                <select class="form-control" name="id_level">
                                                    <?php
                                                          foreach ($level as $lv) 
                                                          {
                                                            echo '<option value="'.$lv->id_level.'">'.$lv->nama_level.'</option>';
                                                          }
                                                       ?>
                                                </select><br>
                                                  
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="simpan" value="Simpan" class="btn btn-info">Simpan</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

 <!-- /.modal ubah -->

<div class="modal fade" id="ubah" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                             <form action="<?= base_url('index.php/admin/Pengurus/proses_update')?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <h2 style="text-align: center;">Tambah Data</h2>
                                                <input type="hidden" name="id_pengurus" id="id_pengurus">
                                                <label>Username</label>
                                                <input type="text" name="username"  class="form-control" id="username">
                                                <label>Password</label>
                                                <input type="text" name="password"  class="form-control" id="password">
                                                <label>Nama pengurus</label>
                                                <input type="text" name="nama_pengurus"  class="form-control" id="nama_pengurus">
                                                <label>Level</label>
                                                <select class="form-control" name="id_level" id="id_level">
                                                    <?php
                                                          foreach ($level as $lv) 
                                                          {
                                                            echo '<option value="'.$lv->id_level.'">'.$lv->nama_level.'</option>';
                                                          }
                                                       ?>
                                                </select><br>
                                                  
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="simpan" value="Simpan" class="btn btn-info">Simpan</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

<script type="text/javascript">
    function tm_detail(id_pengurus)
    {
        $.getJSON("<?= base_url()?>index.php/admin/Pengurus/detail/"+id_pengurus,function(data){
            $('#id_pengurus').val(data['id_pengurus']);
            $('#username').val(data['username']);
            $('#password').val(data['password']);
            $('#nama_pengurus').val(data['nama_pengurus']);
            $('#id_level').val(data['id_level']);
        });
    }
</script>