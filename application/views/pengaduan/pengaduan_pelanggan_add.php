    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pengaduan</h6>
            </div>
                 <div class="card-body">
                 <div class="my-2">
                    <a href="<?php echo site_url('pengaduan/') ?>" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-undo"></i>
                    </span>
                    <span class="text">Kembali</span>
                    </a>
                </div>
                    <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="ol col-lg-6">
                        
                   `   <form action="<?php echo site_url('pelanggandata/process2')?>" method="post">
                   <div class="form-group">
                                <label for="disabledTextInput">Nama Pelanggan</label>
                                <input type="hidden" name="pengaduan_id" value="<?php echo $row->pengaduan_id?>">
                                <input type="hidden" name="pelanggan_id" value="<?php echo $this->fungsi->user_login2()->pelanggan_id ?>">
                                <input type="hidden" name="status_pengaduan" value="1">
                                <input type="text" value="<?php echo $this->fungsi->user_login2()->nama ?>" readonly class="form-control block">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pengaduan</label>
                                <input type="date" name="tgl" value="<?=set_value('tgl')?>" class="form-control">
                            </div>
                            <div class="form-group ">
                                <label>Keluhan *</label>
                                <input type="text" name="keluhan" value="<?=set_value('keluhan')?>"class="form-control ">
                               
                            </div>
                            
                            
                            <div class="form-group">
                            <button type="submit" name="<?php echo $page?>"class="btn btn-success btn-flat">
                            <i class="fa fa-paper-plane"></i> Save
                            </button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
    </div>
</div>
<!-- /.container-fluid -->