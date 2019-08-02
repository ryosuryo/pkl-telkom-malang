
<form method="post" action="<?= base_url()?>index.php/pelanggan/LandController/forgot_password">
<h1>Forgot Password?</h1>
	<div class="field-group">
		<div><label>Email</label></div>
		<div><input type="email" name="email" id="email" value="<?= set_value('email')?>">
	</div>
	<div class="field-group">
		<div><input type="submit" value="Reset Password"></div>
	</div>	
	<?php
                                $pesan = $this->session->flashdata('pesan');
                                if($pesan != NULL){
                                    echo ' <div class="alert alert-danger">'.$pesan.'</div>';
                                }

                            ?>
</form>

