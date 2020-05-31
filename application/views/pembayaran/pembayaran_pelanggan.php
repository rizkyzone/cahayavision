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
                                <input type="hidden" name="id" value="<?php echo $row->pembayaran_id?>">
                                <input type="hidden" name="status_bayar" value="2">
                                <input type="hidden" name="metode_pembayaran" value="2">
                                <input type="hidden" name="pelanggan_id" value="<?php echo $this->fungsi->user_login2()->pelanggan_id ?>">
                                <input type="text" id="disabledTextInput" value="<?php echo $this->fungsi->user_login2()->nama ?>" readonly class="form-control block">
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput">Tagihan</label>
                                <input type="text" id="disabledTextInput" value="<?php echo $row->jumlah_televisi * 50000; ?>" readonly class="form-control block">
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput">Denda</label>
                                <input type="text" id="disabledTextInput" value="" readonly class="form-control block">
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput">Total Tagihan</label>
                                <input type="text" id="disabledTextInput" value="" readonly class="form-control block">
                            </div>
                            
                            <div class="form-group">
                            <label>Tujuan Transfer</label>
                            <select name="tujuan_transfer" id="tujuan_transfer" class="form-control">
                            <option value="">- Pilih - </option>
                            <?php $tujuan_transfer = $this->input->post('tujuan_transfer') ? $this->input->post('tujuan_transfer') : $row->tujuan_transfer ?>
                            <option value="1"<?=$tujuan_transfer == 1 ? 'selected' : null?>>BCA</option>
                            <option value="2"<?=$tujuan_transfer == 2 ? 'selected' : null?>>BRI</option>
                            <option value="3"<?=$tujuan_transfer == 3 ? 'selected' : null?>>Dana</option>
                            <option value="4"<?=$tujuan_transfer == 4 ? 'selected' : null?>>OVO</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label>Bukti Pembayaran</label>
                                <?php if($page == 'edit'){
                                      if($row->image != null) { ?>
                                    <div style="margin-bottom:4px"><img src="<?= base_url('uploads/'.$row->image) ?>"width="60%">
                                    </div>
                                <?php
                                      }      
                                } ?>
                               
                                <input type="file" name="image" class="form-control">
                                <small>(biarkan kosong jika tidak <?=$page == 'edit' ? 'diganti' : 'ada'?>)</small>
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