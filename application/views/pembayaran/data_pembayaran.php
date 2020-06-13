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
                                <th>Tagihan Bulan</th>                              
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
                        <td><?php if($key->tanggal_tagihan == null) {
				                echo  date('M',strtotime($key->tanggal_pemasangan));
                        }elseif($key->tanggal_tagihan != null) {
                                
                
                              
                                $waktuawal  = date_create($key->tanggal_tagihan);
                                

                                 //waktu di setting
                                $waktuakhir = date_create(); // waktu sekarang

                                $diff  = date_diff($waktuawal, $waktuakhir);
                                if ($diff->m == 0){
                                 echo date('M',strtotime($key->tanggal_tagihan));
                              }else{
                                  $diff = $diff->m ;
                                  $bs = date('M',strtotime('+'.$diff. ' months' ,strtotime($key->tanggal_tagihan)));       
                                  $bt = date('M',strtotime($key->tanggal_tagihan));
                          
                                  echo $bt.'-'.$bs;
                              }
                    
				        }?></td>


                        
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
                        <?php
                                if (empty($key->tanggal_tagihan)){
                                    $waktuawal  = date_create($key->tanggal_pemasangan);
                                }else{
                                   $waktuawal  = date_create($key->tanggal_tagihan);
                                } 

                                 //waktu di setting
                                $waktuakhir = date_create(); // waktu sekarang

                                $diff  = date_diff($waktuawal, $waktuakhir);?>
                                <?php if ($diff->m == 0){
                                    $total = $key->jumlah_televisi * 50000;
                                }else{
                                    $total = ($key->jumlah_televisi * 50000 * $diff->m)+( $diff->m * 10000);
                                }?>
                        <td>
                        
                        <?php echo "Rp. " . number_format($total, 0, ".", ".");  ?>
                        </td>
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