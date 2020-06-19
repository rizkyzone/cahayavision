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
                                <th>Total Tagihan</th>
                                <th>Actions</th>
                         </tr>
                    </thead>
                    <tbody>

                    <?php foreach($rok as $data )  {
                                if($data->tanggal_tagihan == null){
                                $waktu = date('F',strtotime($data->tanggal_pemasangan));
                                }else{
                                $waktu = date('F',strtotime($data->tanggal_tagihan));
                                }
                                $now = date('F',strtotime('now'));
                    }?>



                       
                        <?php 
                        $no=0;
                        $no++;
                        if($waktu == $now) {
                            foreach($rom as $key )  { ?>
                            
                            <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo  $key->nama?></td>
                        <td><?php if($key->tanggal_tagihan == null) {
				                echo  date('F',strtotime($key->tanggal_pemasangan));
                        }elseif($key->tanggal_tagihan != null) {
                                
                
                              
                                $waktuawal  = date_create($key->tanggal_tagihan);
                                

                                 //waktu di setting
                                $waktuakhir = date_create(); // waktu sekarang

                                $diff  = date_diff($waktuawal, $waktuakhir);
                                if ($diff->m == 0){
                                 echo date('F',strtotime($key->tanggal_tagihan));
                              }else{
                                  $diff = $diff->m ;
                                  $bs = date('F',strtotime('+'.$diff. ' months' ,strtotime($key->tanggal_tagihan)));       
                                  $bt = date('F',strtotime($key->tanggal_tagihan));
                          
                                  echo $bt.'-'.$bs;
                                  
                              }
                              
                    
				        }?></td>


                        
                        <td><?php echo date('d-F-Y',strtotime($key->tanggal_pembayaran));?></td>
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
                                    $total = $key->harga;
                                }else{
                                    $total = ($key->harga * $diff->m)+( $diff->m * $key->denda);
                                }?>
                        <td>
                        
                        <?php if($key->status_bayar == 3){
                            echo "Rp. " . number_format($key->total_pembayaran, 0, ".", ".");
                        }else{
                            echo "Rp. " . number_format($total, 0, ".", ".");
                        }?>
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
                            <?php }?>



                        <?php
                        }else {
                            foreach($row as $mey )  {?>
                            
                            <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo  $mey->nama?></td>
                        <td><?php if($mey->tanggal_tagihan == null) {
				                echo  date('F',strtotime($mey->tanggal_pemasangan));
                        }elseif($mey->tanggal_tagihan != null) {
                                
                
                              
                                $waktuawal  = date_create($mey->tanggal_tagihan);
                                

                                 //waktu di setting
                                $waktuakhir = date_create(); // waktu sekarang

                                $diff  = date_diff($waktuawal, $waktuakhir);
                                if ($diff->m == 0){
                                 echo date('F',strtotime($mey->tanggal_tagihan));
                              }else{
                                  $diff = $diff->m ;
                                  $bs = date('F',strtotime('+'.$diff. ' months' ,strtotime($mey->tanggal_tagihan)));       
                                  $bt = date('F',strtotime($mey->tanggal_tagihan));
                          
                                  echo $bt.'-'.$bs;
                              }
                    
				        }?></td>


                        
                        <td><?php echo date('d-F-Y',strtotime($mey->tanggal_pembayaran));?></td>
                        <td><img src="<?= base_url('uploads/'.$mey->image) ?>"width="64"></td>
                        <td>
                        <?php if($mey->status_bayar == 1) {
				                echo "Belum Bayar";
                        }elseif($mey->status_bayar == 2) {
                        echo "Menunggu Konfirmasi";
                        }elseif($mey->status_bayar == 3) {
                        echo "Lunas";
				        }?>

                        </td>
                        <?php
                                if (empty($mey->tanggal_tagihan)){
                                    $waktuawal  = date_create($mey->tanggal_pemasangan);
                                }else{
                                   $waktuawal  = date_create($mey->tanggal_tagihan);
                                } 

                                 //waktu di setting
                                $waktuakhir = date_create(); // waktu sekarang

                                $diff  = date_diff($waktuawal, $waktuakhir);?>
                                <?php if ($diff->m == 0){
                                    $total = $mey->jumlah_tv * 50000;
                                }else{
                                    $total = ($mey->jumlah_tv * 50000 * $diff->m)+( $diff->m * $mey->denda);
                                }?>
                        <td>
                        
                        <?php if($mey->status_bayar == 3){
                            echo "Rp. " . number_format($mey->total_pembayaran, 0, ".", ".");
                        }else{
                            echo "Rp. " . number_format($total, 0, ".", ".");
                        }?>
                        </td>
                       
                        <td class="text-center" width="160px">
                            
                        <a href="<?php echo site_url('pelanggandata/bayar/'.$mey->pembayaran_id) ?>" class="btn btn-danger btn-icon-split btn-sm
                        <?php if($mey->status_bayar == 3) {
				                echo "disabled";  }?>
                        ">
                         <span class="icon text-white-50">
                         <i class="fas fa-info-circle"></i>
                         </span>
                        <span class="text">Bayar Tagihan</span>
                         </a>
                               
                        
                        </td>
                    </tr>
                            <?php}?>
                          <?php  }
                        }?>
                   
                  </tbody>
                </table>
              </div>
            </div>
    </div>
</div>
<!-- /.container-fluid -->