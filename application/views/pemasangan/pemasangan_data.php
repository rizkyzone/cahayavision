    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data pemasangan</h6>
            </div>
                 <div class="card-body">
                 <div class="my-2">
                    <a href="<?php echo site_url('pemasangan/add') ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                    </a>
                </div>
                    <div class="table-responsive">
                    <table class="table table-bordered" id="table1" width="100%" cellspacing="0">
                         <thead>
                         <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
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
                        <td><?php echo $data->no_telp?></td>
                        <td><?php echo $data->tanggal_pemasangan?></td>
                        <td><?php if($data->jumlah_televisi == 1) {
				                echo "1 TV";
                        }elseif($data->jumlah_televisi == 2) {
                        echo "2 TV";
                        }elseif($data->jumlah_televisi ==3) {
                        echo "3 TV";
				                 }?></td>
                        <td><?php echo $data->nama_teknisi?></td>
                        <td>
                        <?php if($data->status == 1) {
				                echo "Belum Terpasang";
                        }elseif($data->status == 2) {
                        echo "Terpasang";
                        }elseif($data->status ==3) {
                        echo "Tidak Terjangkau";
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