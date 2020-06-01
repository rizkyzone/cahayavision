<?php $this->view('message') ?>
    <!-- Page Heading -->
    <div class="card shadow mb-4">
    <?=$this->session->flashdata('success');?>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
            </div>
                 <div class="card-body">
                 <div class="my-2">
                    <a href="<?php echo site_url('pelanggan/add') ?>" class="btn btn-primary btn-icon-split disabled">
                    <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                    </a>
                </div>
                    <div class="table-responsive">
                         <table class="table table-bordered" id="table1" width="100%" cellspacing="1">
                         <thead>
                         <tr>
                                <th>NO</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kelurahan</th>
                                <th>Telepon</th>
                                <th>Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result()as $key =>$data) { ?>
                    <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo $data->nik?></td>
                        <td><?php echo $data->nama?></td>
                        <td><?php echo $data->address?></td>
                        <td><?php echo $data->nama_kelurahan?></td>
                        <td><?php echo $data->no_telp?></td>

                        
                        <td class="text-center" width="160px">
                            <form action="<?php echo site_url('pelanggan/del')?>"method="post">
                                <a href="<?php echo site_url('pelanggan/edit/'.$data->pelanggan_id) ?>" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-edit"></i> 
                                </a>
                            
                                <input type="hidden" name="pelanggan_id" value="<?php echo $data->pelanggan_id?>">
                                <button onclick="return confirm('Apakah anda Yakin')" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i> 
                                </button>
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