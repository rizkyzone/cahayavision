    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pemutusan</h6>
            </div>
                 <div class="card-body">
                 <div class="my-2">
                    <a href="<?php echo site_url('pemutusan/') ?>" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-undo"></i>
                    </span>
                    <span class="text">Kembali</span>
                    </a>
                </div>
                    <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="ol col-lg-6">
                        <?php echo form_open_multipart('pemutusan/process')?>
                            <div class="form-group">
                            <label class="control-label"><small>Nama Pelanggan : </small></label>
                            <input type="hidden" name="pemutusan_id" value="<?php echo $row->pemutusan_id?>">
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
                                <label>Tanggal Pemutusan</label>
                                <input type="date" name="tgl" value="<?=$this->input->post('tgl') ?? $row->tanggal_pemutusan?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Alasan Pemutusan</label>
                                <textarea name="alasan_pemutusan" class="form-control" required><?=$this->input->post('alasan_pemutusan') ?? $row->alasan_pemutusan?></textarea>
                                
                            </div>
                            <div class="form-group">
                            <label class="control-label"><small>Nama Teknisi : </small></label>
                            <select name="teknisi_id" id="teknisi_id" class="form-control show-tick" required>
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