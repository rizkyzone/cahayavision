    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <!-- Content Row -->
    <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pelanggan Aktif</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$this->fungsi->count_pelanggan()?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pemasangan Pending</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$this->fungsi->count_pemasangan()?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengaduan</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$this->fungsi->count_pengaduan()?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

     

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pengajuan Putus</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$this->fungsi->count_pemutusan()?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="card card-warning">
              <div class="card-header"><h6 class="m-0 font-weight-bold text-primary">Kelurahan Terbanyak</h6>
                  
    </div> 
    
      <div class="card-body">
      <table class="table table-hover table-bordered">
          <tbody>
              <tr>
                <th>No</th>
                <th>Nama Kelurahan</th>
                <th>Jumlah Pelanggan</th>
              </tr> 
              <?php $no = 1;
                    foreach($p as $x) { ?>
                    <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo $x['nama_kelurahan']?></td>
                        <td><?php echo $x['num']?></td>
                        
                    </tr>
                    <?php
                    } ?>
          </tbody>
      </table>
      </div></div></div> 
      <div class="col-lg-6 col-md-6 col-12">
      <div class="card card-warning">
              <div class="card-header"><h6 class="m-0 font-weight-bold text-primary">Pembayaran Terakhir</h6>
                 
    </div> 
    
      <div class="card-body">
      <table class="table table-hover table-bordered">
          <tbody>
              <tr>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>&nbsp &nbsp Nominal &nbsp &nbsp</th>
              </tr> 
              <?php $no = 1;
                    foreach($lastpembayaran as $z) { ?>
                    <tr>
                        <td><?php echo $z['nama']?></td>
                        <td><?php echo $z['tanggal_pembayaran']?></td>
                        <td><?php echo "Rp. " . number_format($z['total_pembayaran'], 0, ".", ".");  ?></td>
                        
                    </tr>
                    <?php
                    } ?>
          </tbody>
      </table>
      </div></div></div>

       <!-- Area Chart -->
       <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Kelurahan Terbanyak</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                  <canvas id="myChart"></canvas>
    <?php
    //Inisialisasi nilai variabel awal
    $nama_kelurahan= "";
    $jumlah=null;
    foreach ($hasil as $item)
    {
        $jur=$item->nama_kelurahan;
        $nama_kelurahan .= "'$jur'". ", ";
        $jum=$item->total;
        $jumlah .= "$jum". ", ";
    }
    ?>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $nama_kelurahan; ?>],
            datasets: [{
                label:'Data Kelurahan',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
                  </div>
                </div>
              </div>
            </div> 
            

    <!-- Content Row -->
    </div>
    <!-- /.container-fluid -->