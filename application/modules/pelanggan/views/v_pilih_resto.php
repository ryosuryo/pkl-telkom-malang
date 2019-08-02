<!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">List Restoran</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
         
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Agents Grid Star /-->
  <section class="agents-grid grid">
    <div class="container">
      <div class="row" id="tampil_restoran">
        
      </div>
    </div>
  </section>
  <!--/ Agents Grid End /-->

  <div class="modal fade" id="detail" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                  
                                                
                                                  <div id="deskripsi"></div>
                                                  <div id="nomor_meja"></div><br><br>
                                                  
                                                  
                                               
                                            </div>
                                            <div class="modal-footer">
                                              <div id="btn"></div>

                                                
                                            </div><br><br>
                                            <div id="pesan"></div>
                                        </div>
                                    </div>
                                </div>

<div class="modal fade" id="detail_masakan" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4></h4>
                                            </div>
                                            <div class="modal-body">
                                                
                                               
                                                  <table class="table table-hover table-stripped" id="deskripsi_masakan">

                                                  </table>
                                               
                                               
                                            </div>
                                            <div class="modal-footer">
                                              
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

  <script type="text/javascript">
    //menampilkan list restoran terdaftar
    $.getJSON("<?= base_url()?>index.php/pelanggan/Get_restoran",function(data){
    var tampil="";
    $.each(data,function(key,dt){
      tampil+=
      '<div class="col-md-4">'+
          '<div class="card-box-d">'+
            '<div class="card-img-d">'+
              '<img src="<?=base_url('assets/gambar/')?>'+dt['gambar']+'" alt="" class="img-d img-fluid" style="width: 600px; height: 450px;">'+
            '</div>'+
            '<div class="card-overlay card-overlay-hover">'+
              '<div class="card-header-d">'+
                '<div class="card-title-d align-self-center">'+
                  '<h3 class="title-d">'+
                    '<a href="#" class="link-two">'+dt['nama_restoran']+'</a>'+
                  '</h3>'+
                '</div>'+
              '</div>'+
              '<div class="card-body-d">'+
                '<p class="content-d color-text-a">Deskripsi</p>'+
                '<div class="info-agents color-a">'+
                  '<p>'+
                    '<strong>Alamat: </strong>'+dt['alamat_restoran']+'</p>'+
                  '<p>'+
                    '<strong>Status: </strong>'+dt['status']+'</p>'+
                    '<p>'+
                    '<strong>Jam Buka: </strong>'+dt['jam_buka']+'</p>'+
                '</div>'+
              '</div>'+
              '<div class="card-footer-d">'+
                '<div class="socials-footer d-flex justify-content-center">'+
                '<a href="#detail" data-toggle="modal" onclick="tm_detail('+dt['id_restoran']+')" class="btn btn-danger" style="text-decoration:none">PESAN MEJA</a>'+ 
                '<a href="<?= base_url()?>index.php/pelanggan/Get_masakan/tm_pesan_masakan/'+dt['id_restoran']+'" class="btn btn-primary">PESAN MAKANAN</a>'+
                '</div>'+
              '</div>'+
            '</div>'+
          '</div>'+
        '</div>'
    });
    $("#tampil_restoran").html(tampil);
  });

    //checkbox
  function selected(frm)
  {
    var selectedmeja="";
    for ( i = 0; i < frm.no_meja.length; i++) 
    {
      if(frm.no_meja[i].checked)
      {
        selectedmeja += frm.no_meja[i].value;
      }
    }
    //memunculkan input
    document.getElementById("no_item").value=selectedmeja; 
  }

//menampilka detail restoran
function tm_detail(id_restoran){
    $.getJSON("<?= base_url()?>index.php/pelanggan/Get_restoran/detail/"+id_restoran,function(data){
      
      $('#deskripsi').html(
        '<table class="table table-hover table-stripped">'+
              '<tr><td>Nama Restoran</td><td>'+data['nama_restoran']+'</td></tr>'+
              '<tr><td>Alamat</td><td>'+data['alamat_restoran']+'</td></tr>'+
              '<tr><td>Jam Buka</td><td>'+data['jam_buka']+'</td></tr>'+
            '</table>'
            );
      $('#nomor_meja').html(
        '<form>'+
            '<label>Pesan Meja Nomor ?</label>'+
            '<input type="hidden" id="no_item" class="form-control"><br>'+
          '<div class="">'+
            '<label><input type="button" onclick="selected(this.form)" name="no_meja"  value="1" class="btn btn-info"><i></i></label>'+  
            '<label><input type="button" onclick="selected(this.form)" name="no_meja"  value="2" class="btn btn-info"><i></i></label>'+  
            '<label><input type="button" onclick="selected(this.form)" name="no_meja"  value="3" class="btn btn-info"><i></i></label>'+
        '</div>'+
        
        '</form>'
            
            );

        $('#btn').html(
            '<a href="#detail_masakan" data-toggle="modal" onclick="mas_detail('+data['id_restoran']+')" class="btn btn-info" style="text-decoration:none">List Makanan</a>'+
            '<button id="beli" onclick="beli('+data['id_restoran']+')" class="btn btn-default">PESAN</button>'
            
            );
    });
  } 

  //menampilkan detail menu makanan di setiap restoran
  function mas_detail(id_restoran){

    $.getJSON("<?= base_url()?>index.php/pelanggan/Get_restoran/detail_mas/"+id_restoran,function(data){
      var tampilmas="";
      $.each(data,function(key,dt){
        tampilmas+=
        
              '<tr><td>'+dt['nama_masakan']+'</td><td> : '+dt['harga']+'</td></tr>'
            
      });
      $("#deskripsi_masakan").html(tampilmas);
      
    });
  }

  //proses pesan meja
  function beli(id_restoran){   
    var no_meja=$('#no_item').val();
    $('#pesan').hide();
    $('#pesan').removeClass("alert alert-success");
    if(no_meja=='')
    {
      $('#pesan').html("anda belum memilih meja");
          $('#pesan').addClass('alert alert-danger');
          $('#pesan').show('animate');
           setTimeout(function(){
           $('#pesan').hide('fade');
          }, 3000);
    }
    else
    {
      $.getJSON("<?= base_url()?>index.php/pelanggan/Transaksi_pel/pesan_meja/"+id_restoran+"/"+no_meja,function(hasil){
        //$('#cart').html(hasil['total_cart']);
          $('#pesan').html("meja anda ditambahkan ke pesanan");
          $('#pesan').addClass('alert alert-success');
          $('#pesan').show('animate');
           setTimeout(function(){
           $('#pesan').hide('fade');
          }, 3000);
      });
    }
        
  }
  </script>