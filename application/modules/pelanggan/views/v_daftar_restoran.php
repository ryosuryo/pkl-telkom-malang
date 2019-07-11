


        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        
                        <div class="row">
                            <form action="#" method="post">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" name="tanggal" class="form-control" placeholder="Cari Bersarkan Nama Restoran">
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<br><br><br>


		<div id="tampil_restoran">
			
		</div>
	



<div class="modal fade" id="detail" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                	
                                                
                                                	<div id="deskripsi"></div>
                                                	<div id="nomor_meja"></div><br><br>
                                                	
                                                	<div id="pesan"></div>
                                               
                                            </div>
                                            <div class="modal-footer">
                                            	<div id="btn"></div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>



<div class="modal fade" id="detail_masakan" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4>List Menu</h4>
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
	//menampilkan pilihan daftar restoran
	$.getJSON("<?= base_url()?>index.php/pelanggan/Get_restoran",function(data){
		var tampil="";
		$.each(data,function(key,dt){
			tampil+=
			'<div class="col-md-4">'+
							'<div class="panel">'+
								'<div class="panel-heading">'+
									'<h3 class="panel-title" style="text-align: center; font-size: 30px;">'+dt['nama_restoran']+'</h3>'+
								'</div>'+
								'<div class="panel-body">'+
									'<p>'+
									
									'<img style="width:100%;" src="<?= base_url('assets/gambar/')?>'+dt['gambar']+'" alt="...">'+

									'<table class="table table-hover table-stripped">'+
						        		'<tr><td>'+dt['alamat_restoran']+'<br>'+dt['status']+'</td><td><a href="#detail" data-toggle="modal" onclick="tm_detail('+dt['id_restoran']+')" class="btn btn-success" style="text-decoration:none">Detail</a> <a href="#detail_masakan" data-toggle="modal" onclick="mas_detail('+dt['id_restoran']+')" class="btn btn-info" style="text-decoration:none">List Makanan</a></td></tr>'+
						      		'</table>'+
											
									'</p>'+
								'</div>'+
							'</div>'+
						'</div>'

		});
		$("#tampil_restoran").html(tampil);
	});

	//menampilkan detail restoran
	function tm_detail(id_restoran){
		$.getJSON("<?= base_url()?>index.php/pelanggan/Get_restoran/detail/"+id_restoran,function(data){
			
			$('#deskripsi').html(
				'<table class="table table-hover table-stripped">'+
	        		'<tr><td>Nama Restoran</td><td>'+data['nama_restoran']+'</td></tr>'+
	        		'<tr><td>Alamat</td><td>'+data['alamat_restoran']+'</td></tr>'+
	        		'<tr><td>Deskripsi</td><td></td></tr>'+
	        		'<tr><td>Jam Buka</td><td>'+data['jam_buka']+'</td></tr>'+
	      		'</table>'
	      		);
			$('#nomor_meja').html(
	      		'<label>Pesan Meja Nomor ?</label>'+
	      		'<input type="number" id="no_item" value="1" name="no_meja" class="form-control"><br>'+
	      		'<div class="btn-toolbar" role="toolbar">'+
					'<div class="btn-group notika-tl-btn">'+
			              '<button type="button" class="btn btn-primary notika-gp-primary" disabled="disabled">1</button>'+
			              '<button type="button" class="btn btn-primary notika-gp-primary">2</button>'+
			              '<button type="button" class="btn btn-primary notika-gp-primary">3</button>'+
			              '<button type="button" class="btn btn-primary notika-gp-primary">4</button>'+
			              '<button type="button" class="btn btn-primary notika-gp-primary">5</button>'+
			              '<button type="button" class="btn btn-primary notika-gp-primary">6</button>'+
			              '<button type="button" class="btn btn-primary notika-gp-primary">7</button>'+
			              '<button type="button" class="btn btn-primary notika-gp-primary">8</button>'+
			              '<button type="button" class="btn btn-primary notika-gp-primary">9</button>'+
			              '<button type="button" class="btn btn-primary notika-gp-primary">10</button>'+
			         '</div>'+
				'</div>' 
	      		);
	    	$('#btn').html(
	    		'<a href="<?= base_url()?>index.php/pelanggan/Get_masakan/tm_pesan_masakan/'+data['id_restoran']+'" class="btn btn-primary">PESAN MAKANAN</a>'+
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
</script>