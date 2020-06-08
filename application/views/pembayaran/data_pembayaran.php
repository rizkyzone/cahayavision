    <!-- Page Heading -->
    <?php $this->view('message') ?>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
            </div>
                 <div class="card-body">
                 
                    <div class="table-responsive">
                    <table class="table table-bordered" id="table1" width="100%" cellspacing="0">
                         <thead>
                         <tr>
                                <th>NO</th>
                                <th>Nama</th>                              
                                <th>Tanggal Pembayaran</th>
                                <th>Bukti Pembayaran</th>
                                <th>Status</th>
                                <th>Total Pembayaran</th>
                                <th>Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row as $key )  { ?>
                    <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo  $key->nama?></td>
                        <td><?php echo $key->tanggal_pembayaran?></td>
                        <td><img src="<?= base_url('uploads/'.$key->image) ?>"width="64"></td>
                        <td>
                        <?php if($key->status_bayar == 1) {
				                echo "Belum Bayar";
                        }elseif($key->status_bayar == 2) {
                        echo "Menunggu Konfirmasi";
                        }elseif($key->status_bayar == 3) {
                        echo "Lunas";
				        }?>

                        </td>
                        <td><?php echo $key->total_pembayaran?></td>
                        <td class="text-center" width="160px">
                            
                        <a href="<?php echo site_url('pelanggandata/bayar/'.$key->pembayaran_id) ?>" class="btn btn-danger btn-icon-split btn-sm
                        <?php if($key->status_bayar == 3) {
				                echo "disabled";  }?>
                        ">
                         <span class="icon text-white-50">
                         <i class="fas fa-info-circle"></i>
                         </span>
                        <span class="text">Bayar Tagihan</span>
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