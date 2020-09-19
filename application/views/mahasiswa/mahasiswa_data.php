    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('success'); ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="my-2">
                <a href="<?php echo site_url('mahasiswa/add') ?>" class="btn btn-primary btn-icon-split">
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
                            <th>NPM</th>
                            <th>Nama</th>
                            <th>tanggal lahir</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?php echo $no++ ?>.</td>
                                <td><?php echo $data->npm ?></td>
                                <td><?php echo $data->nama ?></td>
                                <td><?php echo $data->tgl_lahir ?></td>
                                <td><?php echo $data->status ?></td>


                                <td class="text-center" width="160px">
                             <form action="<?php echo site_url('mahasiswa/del')?>"method="post">
                                <a href="<?php echo site_url('mahasiswa/edit/'.$data->npm) ?>" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-edit"></i> 
                                </a>
                            
                                <a href="<?php echo site_url('mahasiswa/del/'.$data->npm)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-circle btn-sm">
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