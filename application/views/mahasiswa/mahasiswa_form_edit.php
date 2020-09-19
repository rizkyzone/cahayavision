    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Data Pengaduan</h6>
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
                        
                   <form action="<?php echo site_url('mahasiswa/process')?>" method="post">
                            
                            <div class="form-group ">
                            <input type="hidden" name="npm" value="<?php echo $row->npm?>">
                                <label>Nama *</label>
                                <input type="text" name="nama" value="<?=$this->input->post('nama') ?? $row->nama?>"class="form-control " >
                            </div>
                            <div class="form-group ">
                                <label>NPM *</label>
                                <input type="text" name="npm" value="<?=$this->input->post('npm') ?? $row->npm?>"class="form-control " >
                            </div>
                            <div class="form-group">
                                <label>Tanggal lahir</label>
                                <input type="date" name="tgl_lahir" value="<?=$this->input->post('tgl_lahir') ?? $row->tgl_lahir?>" class="form-control">
                            </div>
                            
            
                            <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control">
                            <option value="aktif">Aktif</option>
                            <option value="non aktif">Non Aktif</option>
                            </select>
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