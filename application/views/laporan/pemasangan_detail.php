<!DOCTYPE html>
<html>
<head>
	<title>Data Pemasangan</title>
	<base href="<?php echo base_url() ?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body >
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
		<h4>LAPORAN DATA PEMASANGAN</h4>
        <?php $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');?>
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
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($p as $x) { ?>
                    <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo $x['nama']?></td>
                        <td><?php echo $x['address']?></td>
                        <td><?php echo $x['no_telp']?></td>
                        <td><?php if($x['status'] == 1) {
				                echo "Belum Terpasang";
                        }elseif($x['status'] == 2) {
                        echo "Terpasang";
                        }elseif($x['status'] == 3) {
                        echo "Tidak Terjangkau";
                         }elseif($x['status'] == 4) {
                        echo "Non Aktif";
				        }?></td>
                    </tr>
                    <?php
                    } ?>
                </tbody>
    </table>
    <div class="float-md-right"><strong><p> Pimpinan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p></strong></div></br></br></br></br></br></br>
    <div class="float-md-right"><p><?php echo $this->fungsi->pimpinan()->name ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p></div>