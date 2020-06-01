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
                        
                   <form action="<?=base_url('laporan/laporanpenambahan');?>" method="post" target="_blank">
                            
                            <div class="form-group">
                            <label class="control-label"><small>Kelurahan : </small></label>
                            <select name="tahun" class="form-control selectpicker show-tick" data-live-search="true">
                           
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
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