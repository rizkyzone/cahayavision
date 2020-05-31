
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

 <!-- Custom fonts for this template-->
 <link href="<?=base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap-select.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row justify-content-md-center">
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form action="" method="post" class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control  <?=form_error('nik')? 'is-invalid' : null?>" name="nik" value="<?=set_value('nik')?>" placeholder="NIK KTP">
                    <?=form_error('nik')?>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="fullname" value="<?=set_value('fullname')?>" class="form-control  <?=form_error('fullname')? 'is-invalid' : null?>" placeholder="Nama Lengkap">
                    <?=form_error('fullname')?>
                  </div>
                </div>
                <div class="form-group">
                  <textarea name="address" value="<?=set_value('address')?>" class="form-control  <?=form_error('address')? 'is-invalid' : null?>" placeholder="Alamat"></textarea>
                  <?=form_error('address')?>
                </div>
                <div class="form-group">
                <select name="kelurahan_id" id="kelurahan_id" class="form-control  selectpicker show-tick" data-live-search="true">
                <?php foreach ($kelurahan as $d){ ?>
                            <option value="<?php echo $d['kelurahan_id'] ?>"><?php echo $d['nama_kelurahan'] ?></option>
                            <?php } ?>
                </select>
                </div>
                <div class="form-group">
                  <input type="text" name="username" value="<?=set_value('username')?>" class="form-control  <?=form_error('username')? 'is-invalid' : null?>" placeholder="Username">
                  <?=form_error('username')?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" value="<?=set_value('password')?>" class="form-control  <?=form_error('password')? 'is-invalid' : null?>" placeholder="Password">
                    <?=form_error('password')?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="passconf" value="<?=set_value('passconf')?>" class="form-control  <?=form_error('passconf')? 'is-invalid' : null?>" placeholder="Repeat Password">
                    <?=form_error('passconf')?>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="telepon" value="<?=set_value('telepon')?>" class="form-control  <?=form_error('telepon')? 'is-invalid' : null?>" placeholder="No Telepon">
                  <?=form_error('telepon')?>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                            <i class="fa fa-paper-plane"></i> Register
                            </button>
            
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?=site_url('auth/login_pelanggan')?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap-select.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url()?>assets/js/sb-admin-2.min.js"></script>
</body>

</html>
