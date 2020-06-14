<!DOCTYPE html>
<html>
<head>
	<title><?php echo strtoupper($title); ?></title>
	<base href="<?php echo base_url() ?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body onload="print()">
	<center>
		<table>
			<tr>
				<td>
					<img src="<?php echo base_url('assets/') ?>/img/logo-mu.png" style="width: 100px; height: 100px;">
				</td>
				<td>
					<center>
						<h3>PT. Cahaya MU Vision</h3>
					<h5>Jl.Sungai Andai No.07 RT.27 Telepon/Fax(0511)3301345 , (0511)6263302 Banjarmasin, 70122</h5>
					</center>
				</td>
			</tr>
		</table>
		<h4><?php echo strtoupper($title); ?></h4>
        <?php $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');?>

        <p><h6><?php if($tgl_awal == null and $tgl_akhir == null){
            echo "";
        }else{
            echo date('d-m-Y',strtotime($tgl_awal)); ?> Sampai <?php echo date('d-m-Y',strtotime($tgl_akhir)); 
        }?></h6></p>
	</center>
    <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>NO</th>
                                <th>Nama</th>
                                <th>Tagihan Bulan</th>
                                <th>Status</th>
                                <th>&nbsp&nbsp Tagihan &nbsp&nbsp&nbsp&nbsp</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($p as $x) { ?>
                    <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo $x['nama']?> - <?php echo $x['no_telp']?></td>
                        <td><?php if($x['tanggal_tagihan'] == null) {
				                echo  date('F',strtotime($x['tanggal_pemasangan']));
                        }elseif($x['tanggal_tagihan'] != null) {
                                
                
                              
                                $waktuawal  = date_create($x['tanggal_tagihan']);
                                

                                 //waktu di setting
                                $waktuakhir = date_create(); // waktu sekarang

                                $diff  = date_diff($waktuawal, $waktuakhir);
                                if ($diff->m == 0){
                                 echo date('F',strtotime($x['tanggal_tagihan']));
                              }else{
                                  $diff = $diffm ;
                                  $bs = date('F',strtotime('+'.$diff. ' months' ,strtotime($x['tanggal_tagihan'])));       
                                  $bt = date('F',strtotime($x['tanggal_tagihan']));
                          
                                  echo $bt.'-'.$bs;
                              }
                    
				        }?></td>
                        <td>
                        <?php if($x['status_bayar'] == 1) {
				                echo "Belum Bayar";
                        }elseif($x['status_bayar'] == 2) {
                        echo "Menunggu Konfirmasi";
                        }elseif($x['status_bayar'] == 3) {
                        echo "Lunas";
				        }?>

                        </td>
                        <?php
                                if (empty($x['tanggal_tagihan'])){
                                    $waktuawal  = date_create($x['tanggal_pemasangan']);
                                }else{
                                   $waktuawal  = date_create($x['tanggal_tagihan']);
                                } 

                                 //waktu di setting
                                $waktuakhir = date_create(); // waktu sekarang

                                $diff  = date_diff($waktuawal, $waktuakhir);?>
                                <?php if ($diff->m == 0){
                                    $total = $x['harga'];
                                }else{
                                    $total = ($x['harga'] * $diff->m)+( $diff->m * $x['denda']);
                                }?>
                        <td>
                        <?php echo "Rp. " . number_format($total, 0, ".", ".");  ?>
                        </td>
                    </tr>
                    
                    <?php
                    } ?>
                </tbody>
                
    </table>
    <div class="float-md-right"><strong><p> Pimpinan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p></strong></div></br></br></br></br></br></br>
    <div class="float-md-right"><p><?php echo $this->fungsi->pimpinan()->name ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p></div>