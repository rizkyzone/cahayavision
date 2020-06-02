    <!-- Page Heading -->
    <?php $this->view('message') ?>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pemutusan</h6>
            </div>
            <div class="card-body">
                 <div class="my-2">
                    <a href="<?php echo site_url('pelanggandata/tambah_pemutusan') ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                    </span>
                    <span class="text">Ajukan Pemutusan</span>
                   
                    </a>
                 <div class="card-body">
                 
                    <div class="table-responsive">
                    <table class="table table-bordered" id="table1" width="100%" cellspacing="0">
                         <thead>
                         <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Telepon</th>
                                <th>Alasan Pemutusan</th>
                                <th>Tanggal Pemutusan</th>
                                <th>Status</th>
                                
                         </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                         foreach($row as $key ){ ?>
                    <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo  $key->nama?></td>
                        <td><?php echo  $key->no_telp?></td>
                        <td><?php echo  $key->alasan_pemutusan?></td>
                        <td><?php echo  $key->tanggal_pemutusan?></td>
                        
                       
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