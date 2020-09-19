<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PT. Cahaya MU Vision - Daftar</title>
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">PT. Cahaya MU Vision</a>
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Pendaftaran Pelanggan</a></li>
				</ul>
			</div>
		</div>
	</nav>
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-sm-4">
			<?php
		    	if(validation_errors()){
		    		?>
		    		<div class="alert alert-info text-center">
		    			<?php echo validation_errors(); ?>
		    		</div>
		    		<?php
		    	}
 
				if($this->session->flashdata('message')){
					?>
					<div class="alert alert-info text-center">
						<?php echo $this->session->flashdata('message'); ?>
					</div>
					<?php
				}	
		    ?>
			<h3 class="text-center">Pendaftaran Pelanggan</h3>
			<form method="POST" action="<?php echo base_url().'daftar/daftarbaru'; ?>">
            
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control" name="nik" value="<?=set_value('nik')?>" placeholder="NIK KTP">
                    
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="fullname" value="<?=set_value('fullname')?>" class="form-control" placeholder="Nama Lengkap">
                    
                  </div>
                </div>
                <div class="form-group">
                  <textarea name="address" value="<?=set_value('address')?>" class="form-control" placeholder="Alamat"></textarea>
                  
                </div>
                <div class="form-group">
                <select name="kelurahan_id" id="kelurahan_id" class="form-control  selectpicker show-tick" data-live-search="true">
                <?php foreach ($kelurahan as $d){ ?>
                            <option value="<?php echo $d['kelurahan_id'] ?>"><?php echo $d['nama_kelurahan'] ?></option>
                            <?php } ?>
                </select>
                </div>
                <div class="form-group">
                  <input type="text" name="email" value="<?=set_value('email')?>" class="form-control" placeholder="Email">
                  
                </div>
                <div class="form-group">
                  <input type="text" name="username" value="<?=set_value('username')?>" class="form-control" placeholder="Username">
                  
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" value="<?=set_value('password')?>" class="form-control" placeholder="Password">
                    
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="passconf" value="<?=set_value('passconf')?>" class="form-control " placeholder="Repeat Password">
                    
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="telepon" value="<?=set_value('telepon')?>" class="form-control" placeholder="No Telepon">
                 
                </div>
				<button type="submit" class="btn btn-primary">Daftar</button>
			</form>
            <hr>
              <div class="text-center">
                <a class="small" href="<?=site_url('auth/login_pelanggan')?>">Sudah mempunyai akun? Silahkan Login!</a>
              </div>
		</div>
	
	</div>
</div>
</body>
</html>