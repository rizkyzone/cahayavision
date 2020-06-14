<?php
                                if (empty($row->tanggal_tagihan)){
                                    $waktuawal  = date_create($row->tanggal_pemasangan);
                                }else{
                                   $waktuawal  = date_create($row->tanggal_tagihan);
                                } 

                                 //waktu di setting
                                $waktuakhir = date_create(); // waktu sekarang

                                $diff  = date_diff($waktuawal, $waktuakhir);?>
                                <?php if ($diff->m == 0){
                                    $tagihan = $row->harga;
                                }else{
                                    $tagihan = $row->harga * $diff->m ;
                                }?>



                                
                                <?php $denda = $diff->m * $row->denda;?>
                                <?php if ($diff->m == 0){
                                    $total = $row->harga;
                                }else{
                                    $total = ($row->harga * $diff->m)+( $diff->m * $row->denda);
                                }?>
                                
                                <?php if ($diff->m == 0){
                                    $status_pembayaran = 1;
                                }else{
                                    $status_pembayaran = 2;
                                }?>
    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pembayaran</h6>
            </div>
                 <div class="card-body">
                 <div class="my-2">
                    <a href="<?php echo site_url('pembayaran/') ?>" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-undo"></i>
                    </span>
                    <span class="text">Kembali</span>
                    </a>
                </div>
                    <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="ol col-lg-6">
                        <?php echo form_open_multipart('pembayaran/process')?>
                            <div class="form-group">
                            <label class="control-label"><small>Nama Pelanggan : </small></label>
                            <input type="hidden" name="id" value="<?php echo $row->pembayaran_id?>">
                            <input type="hidden" name="status_pembayaran" value="<?php echo $status_pembayaran?>">
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
                                <label for="disabledTextInput">Tagihan</label>
                                <input type="text" id="disabledTextInput" value="<?php echo "Rp. " . number_format($tagihan, 0, ".", ".");  ?>" readonly class="form-control block">
                            </div>
                            
                            <div class="form-group">
                                <label for="disabledTextInput">Denda</label>
                                <input type="text" id="disabledTextInput" value="<?php echo "Rp. " . number_format($denda, 0, ".", ".");  ?>" readonly class="form-control block">
                            </div>
                            
                            <div class="form-group">
                                <label for="disabledTextInput">Total Tagihan</label>
                                <input type="text" name="total_pembayaran" id="disabledTextInput" value="<?php echo "Rp. " . number_format($total, 0, ".", ".");  ?>" placeholder="<?php echo "Rp. " . number_format($total, 0, ".", ".");  ?>" readonly class="form-control block">
                            </div>
                            <div class="form-group">
                            <label>Status</label>
                            <select name="status_bayar" id="status_bayar" class="form-control">
                            <?php $status_bayar = $this->input->post('status_bayar') ? $this->input->post('status_bayar') : $row->status_bayar ?>
                            <option value="1"<?=$status_bayar == 1 ? 'selected' : null?>>Belum Bayar</option>
                            <option value="2"<?=$status_bayar == 2 ? 'selected' : null?>>Belum Diverifikasi</option>
                            <option value="3"<?=$status_bayar == 3 ? 'selected' : null?>>Lunas</option>
                            </select>
                            </div>
                            <div class="form-group">
                            <label>Metode Pembayaran</label>
                            <select name="metode_pembayaran" id="metode_pembayaran" class="form-control">
                            <?php $metode_pembayaran = $this->input->post('metode_pembayaran') ? $this->input->post('metode_pembayaran') : $row->status_bayar ?>
                            <option value="1"<?=$metode_pembayaran == 1 ? 'selected' : null?>>Kasir</option>
                            <option value="2"<?=$metode_pembayaran == 2 ? 'selected' : null?>>Transfer</option>
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