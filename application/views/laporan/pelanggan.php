    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan Data Pelanggan PerKelurahan</h6>
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
                        
                      <form action="<?=base_url('laporan/laporankelurahan');?>" method="post">
                            
                            <div class="form-group">
                            <label class="control-label"><small>Kelurahan : </small></label>
                            <select name="kelurahan_id" id="kelurahan_id" class="form-control selectpicker show-tick" data-live-search="true">
                            <?php foreach ($kelurahan as $d){ ?>
                            <option value="<?php echo $d['kelurahan_id'] ?>"><?php echo $d['nama_kelurahan'] ?></option>
                            <?php } ?>
                            </select>
                            </div>
                        
                            
                            <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">
                            <i class="fa fa-paper-plane"></i> Proses
                            </button>
                            
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
    </div>
</div>
<!-- /.container-fluid -->