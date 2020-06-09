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
                                    $tagihan = $row->jumlah_televisi * 50000;
                                }else{
                                    $tagihan = $row->jumlah_televisi * 50000 * $diff->m ;
                                }?>



                                
                                <?php $denda = $diff->m * 10000;?>
                                <?php $total = $row->jumlah_televisi * 50000 + $diff->m * 10000;?>
    <!-- Page Heading -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pembayaran</h6>
            </div>
                 <div class="card-body">
                 
                    <div class="container">
                    <div class="row justify-content-md-left">
                    <div class="col">
                        <?php echo form_open_multipart('pelanggandata/process')?>
                            <div class="form-group">
                                <label for="disabledTextInput">Nama Pelanggan</label>
                                <input type="hidden" name="id" value="<?php echo $row->pembayaran_id?>">
                                <input type="hidden" name="status_bayar" value="2">
                                <input type="hidden" name="denda" value="<?php echo $denda?>">
                                <input type="hidden" name="total" value="<?php echo $total?>">
                                <input type="hidden" name="metode_pembayaran" value="2">
                                <input type="hidden" name="pelanggan_id" value="<?php echo $this->fungsi->user_login2()->pelanggan_id ?>">
                                <input type="text" id="disabledTextInput" value="<?php echo $this->fungsi->user_login2()->nama ?>" readonly class="form-control block">
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
                                <input type="text" id="disabledTextInput" value="" placeholder="<?php echo "Rp. " . number_format($total, 0, ".", ".");  ?>" readonly class="form-control block">
                            </div>
                            
                            <div class="form-group">
                            <label>Tujuan Transfer</label>
                            <select name="tujuan_transfer" id="tujuan_transfer" class="form-control">
                            <option value="">- Pilih - </option>
                            <?php $tujuan_transfer = $this->input->post('tujuan_transfer') ? $this->input->post('tujuan_transfer') : $row->tujuan_transfer ?>
                            <option value="1"<?=$tujuan_transfer == 1 ? 'selected' : null?>>BCA</option>
                            <option value="2"<?=$tujuan_transfer == 2 ? 'selected' : null?>>Dana</option>
                            <option value="3"<?=$tujuan_transfer == 3 ? 'selected' : null?>>OVO</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label>Bukti Pembayaran</label>
                                <?php if($page == 'bayar'){
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
                            <a href="<?php echo site_url('pelanggandata/status_pembayaran/'.$this->fungsi->user_login2()->pelanggan_id) ?>" class="btn btn-warning btn-icon-split">
                            <span class="icon text-white-50">
                            <i class="fas fa-undo"></i>
                            </span>
                            <span class="text">Kembali</span>
                            </a>
               
                            </div>
                            <?php echo form_close()?>
                    </div>
                    <div class="col">
                    <div class="row justify-content-md-center"><h5><p> Silahkan Transfer ke Rekening dibawah ini</p></h5></p>
                    <img src="<?php echo base_url('assets') ?>/img/list-bank.png"></br>
                    </div>
                    </div>
                    
    
                </div>
                
              </div>
            </div>
    </div>
</div>
<!-- /.container-fluid -->