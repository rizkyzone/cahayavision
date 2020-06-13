    <!-- Page Heading -->
    <?php $this->view('message') ?>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Harga</h6>
            </div>
                 <div class="card-body">
                 <div class="my-2">
                    <a href="<?php echo site_url('jumlahtv/add') ?>" class="btn btn-primary btn-icon-split">
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
                                <th>Jumlah TV</th>
                                <th>Harga</th>
                                <th>Denda Jika Terlambat Bayar</th>
                                <th>Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result()as $key =>$data) { ?>
                    <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo $data->jumlah_tv?></td>
                        <td><?php echo "Rp. " . number_format($data->harga, 0, ".", ".");  ?></td>
                        <td><?php echo "Rp. " . number_format($data->denda, 0, ".", ".");  ?></td>
                        <td class="text-center" width="160px">
                            <form action="<?php echo site_url('jumlahtv/del')?>"method="post">
                                <a href="<?php echo site_url('jumlahtv/edit/'.$data->jumlah_id) ?>" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-edit"></i> 
                                </a>
                            
                                <a href="<?php echo site_url('jumlahtv/del/'.$data->jumlah_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-circle btn-sm">
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