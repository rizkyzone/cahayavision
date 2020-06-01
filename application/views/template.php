
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PT. Cahaya MU Vision</title>

  <!-- Custom fonts for this template-->
  <link href="<?=base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

 <!-- Bootstrap Core CSS -->
 <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap-select.min.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?=base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">
<!-- Custom styles for this page -->
<link href="<?=base_url()?>assets/vendor/datatables/datatables.min.css" rel="stylesheet">
  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-beam"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Cahaya<sup>Vision</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('dashboard')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Data Master Pelanggan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pelanggan:</h6>
            <a class="collapse-item" href="<?=site_url('pelanggan')?>">Pelanggan</a>
            <a class="collapse-item" href="<?=site_url('pemasangan')?>">Pemasangan</a>
            <a class="collapse-item" href="<?=site_url('pembayaran')?>">Pembayaran</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-fw fa-cog"></i>
          <span>Pengaduan</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pengaduan Pelanggan:</h6>
            <a class="collapse-item" href="<?=site_url('pengaduan')?>">Menunggu Validasi</a>
            <a class="collapse-item" href="<?=site_url('pengaduan/dalam_pengerjaan')?>">Dalam Pengerjaan</a>
            <a class="collapse-item" href="<?=site_url('pengaduan/sudah_dikerjakan')?>">Sudah Dikerjakan</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('teknisi')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Teknisi</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Laporan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Laporan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="<?=site_url('laporan/pelanggan')?>">Data Pelanggan</a>
            <a class="collapse-item" href="<?=site_url('laporan/pemasangan')?>">Jumlah Pemasangan</a>
            <a class="collapse-item" href="<?=site_url('laporan/pembayaran')?>">Pembayaran</a>
        </div>
      </li>

  

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <div class="sidebar-heading">
        Settings
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('user')?>">
          <i class="fas fa-fw fa-user"></i>
          <span>User</span></a>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-success" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            

            
           

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->fungsi->user_login()->name ?></span>
                <img class="img-profile rounded-circle" src="<?=base_url()?>assets/img/avatar5.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=site_url('auth/logout')?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

      <?php echo $contents ?>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; PT. Cahaya MU Vision 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?=site_url('auth/logout')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/datatables/datatables.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap-select.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?=base_url()?>assets/js/sb-admin-2.min.js"></script>

   <!-- Page level plugins -->

  <!-- Page level custom scripts -->
 
  <script>
  $(document).ready(function () {
    $('#table1').DataTable({
      
      dom: 'Bfrtip',
        buttons: [
            {
              extend : 'csv',
              text : "<i class='fa fa-pencil'></i> Export CSV",
              className: 'Btncsv'
            },
            ,{
              extend : 'excel',
              text : "<i class='fa fa-pencil'></i> Export Excel",
              className: 'Btnexcel'
            },
            {
              extend : 'pdf',
              text : "<i class='fa fa-pencil'></i> Export PDF",
              className: 'Btnpdf'
            },
              
              {
              extend : 'print',
              text : "<i class='fa fa-print'></i> Print",
              className: 'Btnprint',
              customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '12pt' )
                        .css( 'font', 'Times New Roman' )
                        .prepend(
                            '<center><table><tr><td><img src="<?php echo base_url('assets') ?>/img/logo-mu.png" style="width: 100px; height: 100px;"></td><td><center><h3>PT. Cahaya MU Vision</h3><h5>Jl.Sungai Andai No.07 RT.27 Telepon/Fax(0511)3301345 , (0511)6263302 Banjarmasin, 70122</h5></center></td></tr></table></center>'
                        );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                }
            }
        ]
    });
    
    $(".Btnprint").removeClass("dt-button").addClass("btn btn-primary btn-sm");
    $(".Btnexcel").removeClass("dt-button").addClass("btn btn-success btn-sm");
    $(".Btncopy").removeClass("dt-button").addClass("btn btn-default btn-sm");
    $(".Btnpdf").removeClass("dt-button").addClass("btn btn-danger btn-sm");
    $(".Btncsv").removeClass("dt-button").addClass("btn btn-warning btn-sm");
  });
  </script>
</body>

</html>
