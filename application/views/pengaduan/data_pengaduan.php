    <!-- Page Heading -->
    
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
            </div>
                 <div class="card-body">
                 
                    <div class="table-responsive">
                    <table class="table table-bordered" id="table1" width="100%" cellspacing="0">
                         <thead>
                         <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Keluhan</th>
                                <th>Telepon</th>
                                <th>Tanggal Pengaduan</th>
                                <th>Teknisi</th>
                                <th>Status</th>
                                <th>Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                         foreach($row as $key ){ ?>
                    <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo  $key->nama?></td>
                        <td><?php echo  $key->keluhan?></td>
                        <td><?php echo  $key->no_telp?></td>
                        <td><?php echo $key->tanggal_pengaduan?></td>
                        <td><?php echo $key->nama_teknisi?></td>
                        <td>
                        <?php if($key->status_pengaduan == 1) {
				                echo "Menunggu Validasi ";
                        }elseif($key->status_pengaduan == 2) {
                        echo "Dalam Pengerjaan";
                        }elseif($key->status_pengaduan == 3) {
                        echo "Selesai Dikerjakan";
				        }?>

                        </td>
                        
                        
                        <td class="text-center" width="160px">
                            
                        <a href="<?php echo site_url('pelanggandata/ubah/'.$key->pengaduan_id) ?>" class="btn btn-danger btn-icon-split btn-sm">
                         <span class="icon text-white-50">
                         <i class="fas fa-info-circle"></i>
                         </span>
                        <span class="text">Ubah Status</span>
                         </a>
                               
                        
                        </td>
                    </tr>
                    <?php
                    } ?>
                  </tbody>
                </table>
              </div>
            </div>
    </div>
</div>
<!-- /.container-fluid -->