<!DOCTYPE html>
<html>
<head>
	<title>Nota Pembayaran</title>
	<base href="<?php echo base_url() ?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body onload="print()" >
	<center>
		<table>
			<tr>
				
				<td>
					<center>
						<h3>PT. Cahaya MU Vision</h3>
                        <p>Jl.Sungai Andai No.07 RT.27</p>
					</center>
				</td>
			</tr>
		</table>
		<p><b>Nota Pembayaran</b></p>
	</center>
	<table align="center" width="529" height="337" border="0">
  <tr width="150">
    <td width="150">Nama Pelanggan</td>
    <td width="30">:</td>
    <td width="200"><?php echo $row->nama?></td>
  </tr>
  <tr>
    <td>Untuk Pembayaran</td>
    <td>:</td>
    <td> TV KABEL</td>
  </tr>
  <tr>
    <td>Tanggal</td>
    <td>:</td>
    <td><?php echo date('d-F-Y',strtotime($row->tanggal_pembayaran));?></td>
  </tr>
  <tr>
    <td>Jumlah TV</td>
    <td>:</td>
    <td> <?php echo $row->jumlah_tv?></td>
  </tr>
  <tr>
    <td>Harga</td>
    <td>:</td>
    <td><?php echo "Rp. " . number_format($row->harga, 0, ".", ".");  ?></td>
  </tr>
  
  <tr>
    <td>Keterangan</td>
    <td>:</td>
    <td><?php if($row->status_bayar == 1) {
				                echo "Belum Bayar";
                        }elseif($row->status_bayar == 2) {
                        echo "Menunggu Konfirmasi";
                        }elseif($row->status_bayar == 3) {
                        echo "Lunas";
				        }?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>______________________________________</td>
  </tr>
</table>