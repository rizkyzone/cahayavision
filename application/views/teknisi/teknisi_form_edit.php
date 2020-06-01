    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Data Pelanggan</h6>
            </div>
                 <div class="card-body">
                 <div class="my-2">
                    <a href="<?php echo site_url('pelanggan/') ?>" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-undo"></i>
                    </span>
                    <span class="text">Kembali</span>
                    </a>
                </div>
                    <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="ol col-lg-6">
                        
                   <form action="" method="post">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="hidden" name="teknisi_id" value="<?= $row->teknisi_id?>">
                                <input type="text" name="fullname" value="<?=$this->input->post('fullname') ?? $row->nama_teknisi?>" class="form-control <?=form_error('fullname')? 'is-invalid' : null?>">
                                <?=form_error('fullname')?>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" class="form-control"><?=$this->input->post('address') ?? $row->alamat?></textarea>
                                <?=form_error('address')?>
                            </div>
                            
                            <div class="form-group ">
                                <label>Telepon *</label>
                                <input type="text" name="telepon" value="<?=$this->input->post('telepon') ?? $row->no_telp?>"class="form-control <?=form_error('telepon')? 'is-invalid' : null?>">
                                <?=form_error('telepon')?>
                            </div>
            
                            
                            
                            <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">
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