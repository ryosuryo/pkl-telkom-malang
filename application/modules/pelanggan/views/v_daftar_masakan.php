
		<?php
		foreach ($dt_mas as $mas) 
		{
			echo '
			<h2><center>Menu Di Restoran '.$mas->nama_restoran.'</center></h2><br><br>
	<div>
			<div class="col-md-4">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">'.$mas->nama_masakan.'</h3>
								</div>
								<div class="panel-body">
									<p>
									
									<img style="width:380px;height: 270px;" src='.base_url("assets/gambar_masakan/$mas->gambar_masakan").' alt="...">
									
									<span class="short-description" style="font-size: 30px;"><strong>Rp. '.$mas->harga.',-</strong></span><br><br>
										<a href="#detail" data-toggle="modal" onclick="tm_detail('.$mas->id_masakan.')" class="btn btn-warning" style="text-decoration:none">Lihat</a>
											
									</p>
								</div>
							</div>
						</div>
					</div>';
		}
	?>

		
	

								<div class="modal fade" id="detail" role="dialog">
									<div class="modal-dialog modals-default">
							    		<div class="modal-content">
						         			<div class="modal-header">
						         				 <button type="button" class="close" data-dismiss="modal">&times;</button>
						       				 </div>
						         			<div class="modal-body">
										         <div id="gambar"></div>
										         <div id="deskripsi"></div>
										         <div id="jumlah"></div><br><br>             	
										           
						          			</div>
										     <div class="modal-footer">
										       <div id="btn"></div>                         
                                            </div><br><br> 
                                            <div id="pesan"></div>
                                        </div>
                                    </div>
                                </div>


<script type="text/javascript">
	//menampilkan menu makanan
	
	//menampilkan detail masakan
	function tm_detail(id_masakan){
		$.getJSON("<?= base_url()?>index.php/pelanggan/get_masakan/detail/"+id_masakan,function(data){
		$('#gambar').html(
			'<img src="<?= base_url()?>assets/gambar_masakan/'+data['gambar_masakan']+'" style="width:100%">'
			);
		$('#deskripsi').html(
			'<table class="table table-hover table-stripped">'+
        		'<tr><td>Nama masakan</td><td>'+data['nama_masakan']+'</td></tr>'+
        		'<tr><td>Harga</td><td>Rp. '+data['harga']+',-</td></tr>'+
        		'<tr><td>Status masakan</td><td><div id="sm"></div></td></tr>'+
      		'</table>'
      		);
		$('#jumlah').html(
      		'<label>Jumlah</label>'+
      		'<input type="number" id="jumlah_item" value="1" name="jumlah[]" class="form-control">'
      		);
    	$('#btn').html(
        	'<button id="beli" onclick="beli('+data['id_masakan']+')" class="btn btn-default">PESAN</button>'
        	
      		);
    	if (data['status_masakan']=="ada") {
    		$("#sm").html(data['status_masakan']);
    		$("#sm").addClass('alert alert-success');
    		$("#sm").show('animate');
    	}
    	else
    	{
    		$("#sm").html(data['status_masakan']);
    		$("#sm").addClass('alert alert-danger');
    		$("#sm").show('animate');
    	}
	});
}
//menambah pesanan ke keranjang
function beli(id_masakan){
		var jumlah=$('#jumlah_item').val();
		
		$('#pesan').hide();
		$('#pesan').removeClass("alert alert-success");
		$.getJSON("<?= base_url()?>index.php/pelanggan/Transaksi_pel/tambah_cart/"+id_masakan+"/"+jumlah,function(hasil){
			$('#cart').html(hasil['total_cart']);
			$('#pesan').html("item anda ditambahkan ke cart");
			$('#pesan').addClass('alert alert-success');
			$('#pesan').show('animate');
			setTimeout(function(){
				$('#pesan').hide('fade');
			}, 3000);
		});
	}
</script>