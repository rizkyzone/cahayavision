    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pembayaran</h6>
            </div>
                 <div class="card-body">
                 <div class="my-2">
                    <a href="<?php echo site_url('pelanggandata/status_pembayaran/'.$this->fungsi->user_login2()->pelanggan_id) ?>" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-undo"></i>
                    </span>
                    <span class="text">Kembali</span>
                    </a>
                </div>
                    <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="ol col-lg-6">
                        <?php echo form_open_multipart('pelanggandata/process')?>
                            <div class="form-group">
                                <label for="disabledTextInput">Nama Pelanggan</label>
                                <input type="hidden" name="id" value="<?php echo $row->pengaduan_id?>">
                                <input type="text" id="disabledTextInput" value="<?php echo $this->fungsi->user_login2()->nama ?>" readonly class="form-control block">
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput">keluhan</label>
                                <input type="text" id="disabledTextInput" value="<?php echo $row->keluhan ?>"  class="form-control block">
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput">No_telp</label>
                                <input type="text" id="disabledTextInput" value="<?php echo $row->no_telp ?>" class="form-control block">
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput">Tanggal Pengaduan</label>
                                <input type="text" id="disabledTextInput" value="<?php echo $row->tanggal_pengaduan ?>" class="form-control block">
                            </div>
                            
                            
                            
                            <div class="form-group">
                            <button type="submit" name="<?php echo $page?>"class="btn btn-success btn-flat">
                            <i class="fa fa-paper-plane"></i> Save
                            </button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                            </div>
                            <?php echo form_close()?>
                    </div>
                </div>
              </div>
            </div>
    </div>
</div>
<!-- /.container-fluid -->[]