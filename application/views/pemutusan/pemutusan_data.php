    <!-- Page Heading -->
    <?php $this->view('message') ?>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Permintaan Pemutusan</h6>
            </div>
                 <div class="card-body">
                 <div class="my-2">
                    <a href="<?php echo site_url('pemutusan/add') ?>" class="btn btn-primary btn-icon-split">
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
                                <th>Alasan Pemutusan</th>
                                <th>No Telp</th>
                                <th>Tanggal Pemutusan</th>
                                <th>Teknisi</th>
                                <th>Status Pelanggan</th>
                                <th>Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result()as $key =>$data) { ?>
                    <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo $data->nama?></td>
                        <td><?php echo $data->alasan_pemutusan?></td>
                        <td><?php echo $data->no_telp?></td>
                        <td><?php echo $data->tanggal_pemutusan?></td>
                        <td><?php echo $data->nama_teknisi?></td>
                        <td>
                        <?php if($data->status == 1) {
				                echo "Tidak Aktif";
                        }elseif($data->status == 2) {
                        echo "Aktif";
                        }elseif($data->status ==3) {
                        echo "Tidak Terjangkau";
                      }elseif($data->status ==4) {
                        echo "Non Aktif";
				                 }?>

                        </td>
                        <td class="text-center" width="160px">
                            <form action="<?php echo site_url('pemutusan/del')?>"method="post">
                                <a href="<?php echo site_url('pemutusan/edit/'.$data->pemutusan_id) ?>" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-edit"></i> 
                                </a>
                            
                                <a href="<?php echo site_url('pemutusan/del/'.$data->pemutusan_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-circle btn-sm">
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