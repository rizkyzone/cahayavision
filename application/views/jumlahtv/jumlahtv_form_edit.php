    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Data Harga</h6>
            </div>
                 <div class="card-body">
                 <div class="my-2">
                    <a href="<?php echo site_url('jumlahtv/') ?>" class="btn btn-warning btn-icon-split">
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
                                <label>Jumlah TV *</label>
                                <input type="hidden" name="jumlah_id" value="<?= $row->jumlah_id?>">
                                <input type="text" name="jumlah_tv" value="<?=$this->input->post('jumlah_tv') ?? $row->jumlah_tv?>" class="form-control <?=form_error('jumlah_tv')? 'is-invalid' : null?>">
                                <?=form_error('jumlah_tv')?>
                            </div>
                            <div class="form-group ">
                                <label>Harga *</label>
                                <input type="text" name="harga" value="<?=$this->input->post('harga') ?? $row->harga?>"class="form-control <?=form_error('harga')? 'is-invalid' : null?>">
                                <?=form_error('harga')?>
                            </div>
                            
                            <div class="form-group ">
                                <label>Denda *</label>
                                <input type="text" name="denda" value="<?=$this->input->post('denda') ?? $row->denda?>"class="form-control <?=form_error('denda')? 'is-invalid' : null?>">
                                <?=form_error('denda')?>
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