    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
            </div>
                 <div class="card-body">
                 <div class="my-2">
                    <a href="<?php echo site_url('pengaduan/add') ?>" class="btn btn-primary btn-icon-split">
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
                        foreach($row->result()as $key =>$data) { ?>
                    <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo $data->nama?></td>
                        <td><?php echo $data->keluhan?></td>
                        <td><?php echo $data->no_telp?></td>
                        <td><?php echo $data->tanggal_pengaduan?></td>
                        
                        <td><?php echo $data->nama_teknisi?></td>
                        <td>
                        <?php if($data->status_pengaduan == 1) {
				                echo "Menunggu Validasi";
                        }elseif($data->status_pengaduan == 2) {
                        echo "Dalam Pengerjaan";
                        }elseif($data->status_pengaduan == 3) {
                        echo "Sudah Dikerjakan";
				        }?>

                        </td>

                        
                        <td class="text-center" width="160px">
                            <form action="<?php echo site_url('pengaduan/del')?>"method="post">
                                <a href="<?php echo site_url('pengaduan/edit/'.$data->pengaduan_id) ?>" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-edit"></i> 
                                </a>
                            
                                <a href="<?php echo site_url('pengaduan/del/'.$data->pengaduan_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-circle btn-sm">
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