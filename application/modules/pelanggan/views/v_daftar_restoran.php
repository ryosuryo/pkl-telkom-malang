<div id="tampil_restoran">
	
</div>

<div class="modal fade" id="detail" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                	<div id="gambar"></div>
                                                
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
									
									'<img style="width:385px;height: 270px;" src="<?= base_url('assets/gambar/')?>'+dt['gambar']+'" alt="...">'+

									'<table class="table table-hover table-stripped">'+
						        		'<tr><td>'+dt['alamat_restoran']+'<br>'+dt['status']+'</td><td><a href="#detail" data-toggle="modal" onclick="tm_detail('+dt['id_restoran']+')" class="btn btn-success" style="text-decoration:none">Lihat Detail</a></td></tr>'+
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
			$('#gambar').html(
			'<img src="<?= base_url()?>assets/gambar/'+data['gambar']+'" style="width:100%">'
			);
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
	      		'<input type="number" id="no_item" value="1" name="nomor_meja" class="form-control">'
	      		);
	    	$('#btn').html(
	        	'<button id="beli" onclick="beli('+data['id_restoran']+')" class="btn btn-default">PESAN</button>'
	        	
	      		);
		});
	}
	//proses pesan meja
	function pesan(id_restoran){
		var no_meja=$('no_item').val();

		$.getJSON("<?= base_url()?>index.php/pelanggan/Transaksi_pel/tambah_cart/"+id_restoran+"/"+no_meja,function(hasil){
			//$('#cart').html(hasil['total_cart']);
			$('#pesan').html("item anda ditambahkan ke cart");
			$('#pesan').addClass('alert alert-success');
			$('#pesan').show('animate');
			setTimeout(function(){
				$('#pesan').hide('fade');
			}, 3000);
		});
	}
</script>