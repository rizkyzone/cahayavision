    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pemasangan</h6>
            </div>
                 <div class="card-body">
                 <div class="my-2">
                    <a href="<?php echo site_url('pemasangan/') ?>" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-undo"></i>
                    </span>
                    <span class="text">Kembali</span>
                    </a>
                </div>
                    <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="ol col-lg-6">
                        
                   <form action="<?php echo site_url('pemasangan/process')?>" method="post">
                            
                            <div class="form-group">
                            <label class="control-label"><small>Nama Pelanggan : </small></label>
                            <input type="hidden" name="pemasangan_id" value="<?php echo $row->pemasangan_id?>">
                            <select name="pelanggan_id" id="pelanggan_id" class="form-control selectpicker show-tick" data-live-search="true">
                            <?php foreach ($pelanggan as $d){ ?>
                               <?php if($d['pelanggan_id'] == ( $this->input->post('pelanggan_id') ?? $row->pelanggan_id)){ ?>
                               <option value="<?php echo $d['pelanggan_id'] ?>" selected ><?php echo $d['nama'] ?> - <?php echo $d['no_telp'] ?></option>
                               <?php }else{ ?>
                            <option value="<?php echo $d['pelanggan_id'] ?>"><?php echo $d['nama'] ?> - <?php echo $d['no_telp'] ?></option>
                            <?php }} ?>
                            </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pemasangan</label>
                                <input type="date" name="tgl" value="<?=$this->input->post('tgl') ?? $row->tanggal_pemasangan?>" class="form-control">
                            </div>
                            <div class="form-group">
                            <label class="control-label"><small>Jumlah TV : </small></label>
                            <select name="jumlah_id" id="jumlah_id" class="form-control show-tick" >
                            <option value="">- Pilih -</option>
                            <?php foreach ($harga as $d){ ?>
                               <?php if($d['jumlah_id'] == ( $this->input->post('jumlah_id') ?? $row->jumlah_id)){ ?>
                                
                               <option value="<?php echo $d['jumlah_id'] ?>" selected ><?php echo $d['jumlah_tv'] ?></option>
                               <?php }else{ ?>
                            <option value="<?php echo $d['jumlah_id'] ?>"><?php echo $d['jumlah_tv'] ?></option>
                            <?php }} ?>
                            </select>
                            </div>
                            <div class="form-group">
                            <label class="control-label"><small>Nama Teknisi : </small></label>
                            <select name="teknisi_id" id="teknisi_id" class="form-control show-tick" >
                            <option value="">- Pilih -</option>
                            <?php foreach ($teknisi as $d){ ?>
                               <?php if($d['teknisi_id'] == ( $this->input->post('teknisi_id') ?? $row->teknisi_id)){ ?>
                                
                               <option value="<?php echo $d['teknisi_id'] ?>" selected ><?php echo $d['nama_teknisi'] ?></option>
                               <?php }else{ ?>
                            <option value="<?php echo $d['teknisi_id'] ?>"><?php echo $d['nama_teknisi'] ?></option>
                            <?php }} ?>
                            </select>
                            </div>
        
                            <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control">
                            <?php $status = $this->input->post('status') ? $this->input->post('status') : $row->status ?>
                            <option value="1"<?=$status == 1 ? 'selected' : null?>>Belum Terpasang</option>
                            <option value="2"<?=$status == 2 ? 'selected' : null?>>Terpasang</option>
                            <option value="3"<?=$status == 3 ? 'selected' : null?>>Belum Terjangkau</option>
                            <option value="3"<?=$status == 4 ? 'selected' : null?>>Non Aktif</option>
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