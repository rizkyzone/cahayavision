    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data pemasangan</h6>
            </div>
                 <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered" id="table1" width="100%" cellspacing="0">
                         <thead>
                         <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kelurahan</th>
                                <th>Tanggal Pemasangan</th>
                                <th>Jumlah TV</th>
                                <th>Teknisi</th>
                                <th>Status</th>
                                <th>Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result()as $key =>$data) { ?>
                    <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo $data->nama?></td>
                        <td><?php echo $data->address?></td>
                        <td><?php echo $data->nama_kelurahan?></td>
                        <td><?php echo date('d-F-Y',strtotime($data->tanggal_pemasangan));?></td>
                        <td><?php if ($data->jumlah_tv != null){
                          echo $data->jumlah_tv;  echo " TV";
                          }else{
                            echo "";
                          }
                          ?></td>
                        <td><?php echo $data->nama_teknisi?></td>
                        <td>
                        <?php if($data->status == 1) {
				                echo "Belum Terpasang";
                        }elseif($data->status == 2) {
                        echo "Terpasang";
                        }elseif($data->status ==3) {
                        echo "Tidak Terjangkau";
                        }elseif($data->status ==4) {
                        echo "Non aktif";
				                 }?>

                        </td>

                        
                        <td class="text-center" width="160px">
                            <form action="<?php echo site_url('pemasangan/del')?>"method="post">
                                <a href="<?php echo site_url('pemasangan/edit/'.$data->pemasangan_id) ?>" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-edit"></i> 
                                </a>
                            
                                <a href="<?php echo site_url('pemasangan/del/'.$data->pemasangan_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                                </a>
                            </form>
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