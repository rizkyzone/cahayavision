<!DOCTYPE html>
<html>
<head>
	<title><?php echo strtoupper($title); ?></title>
	<base href="<?php echo base_url() ?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .tandatangan {
            text-align: center;
            margin-left: 600px;
            line-height: 5em;
        }
    </style>
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
        <?php $tahun = $this->input->post('tahun');?>
		<h4><?php echo strtoupper($title); ?> <?php echo $tahun?></h4>
	</center>
    <table style="width: 70%; margin-left:auto; margin-right:auto;" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Bulan</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($p as $x) { ?>
                    <tr>
                        <td><?php echo $no++?>.</td>
                        <td><?php echo $x['bulan']?></td>
                        <td><?php echo $x['num']?></td>
                        

                      
                    </tr>
                    <?php
                    } ?>
                </tbody>
    </table>
    <div class="tandatangan">
        Pimpinan
    </div>
    <div class="tandatangan">
        <?php echo $this->fungsi->pimpinan()->name ?>
    </div>