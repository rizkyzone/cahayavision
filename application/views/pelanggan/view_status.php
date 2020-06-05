    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data pelanggan</h6>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered" style="margin-bottom: 0;">
                    <tbody>
                      <tr>
                        <td style="width: 200px;">Nama Lengkap</td>
                        <td><?php echo $row->nama?></td>
                      </tr>
                      <tr>
                        <td style="width: 200px;">Nama Pengguna</td>
                        <td><?php echo $row->username?></td>
                      </tr>
                      <tr>
                        <td style="width: 200px;">Alamat</td>
                        <td><?php echo $row->address?></td>
                      </tr>
                      <tr>
                        <td style="width: 200px;">Kelurahan</td>
                        <td><?php echo $row->nama_kelurahan?></td>
                      </tr>
                      <tr>
                        <td style="width: 200px;">No. HP</td>
                        <td><strong><?php echo $row->no_telp?></strong></td>
                      </tr>
                      <tr>
                        <td style="width: 200px;">Tanggal Pemasangan</td>
                        <td><?php echo $row->tanggal_pemasangan?></td>
                      </tr>
                      <tr>
                        <td style="width: 200px;">Status</td>
                        <td><?php if($row->status == 1) {
				                echo "Menunggu Konfirmasi";
                        }elseif($row->status == 2) {
                        echo "Terpasang";
                        }elseif($row->status == 3) {
                        echo "Belum Terjangkau";
                      }elseif($row->status == 4) {
                        echo "Non Aktif";
				        }?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
           
    </div>
</div>
<!-- /.container-fluid -->