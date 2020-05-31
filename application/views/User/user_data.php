    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
                 <div class="card-body">
                 <div class="my-2">
                    <a href="<?php echo site_url('user/add') ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                    </a>
                </div>
                    <div class="table-responsive">
                         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                         <thead>
                         <tr>
                                <th>NO</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Level</th>
                                <th>Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result()as $key =>$data) { ?>
                    <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo $data->username?></td>
                        <td><?php echo $data->name?></td>
                        <td><?php echo $data->address?></td>
                        <td>
                        <?php if($data->level == 1) {
				        echo "admin";
                        }elseif($data->level == 2) {
                        echo "teknisi";
                        }elseif($data->level ==3) {
                        echo "pimpinan";
				        }?>

                        </td>
                        <td class="text-center" width="160px">
                            <form action="<?php echo site_url('user/del')?>"method="post">
                                <a href="<?php echo site_url('user/edit/'.$data->user_id) ?>" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-edit"></i> 
                                </a>
                            
                                <input type="hidden" name="user_id" value="<?php echo $data->user_id?>">
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