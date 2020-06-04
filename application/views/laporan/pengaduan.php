    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan Data Pengaduan Per Tanggal</h6>
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
                        
                   <form action="<?=base_url('laporan/laporanpengaduan');?>" method="post" target="_blank">
                            <div class="form-group">
                                <label>Tanggal Awal</label>
                                <input type="date" name="tgl_awal" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Akhir</label>
                                <input type="date" name="tgl_akhir" class="form-control">
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