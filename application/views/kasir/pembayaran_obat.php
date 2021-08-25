<html>
	<head>
	<title>Pembayaran obat</title>
		<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
	</head>
	<body>
		<hr>
		<fieldset>
			<legend></legend>
			<form method="post" action="<?php echo site_url('kasir/c_kasir/proses_pembayaran_obat'); ?>">
					<input type="text" value="<?php echo $id;?>" disabled/>
					<input type="hidden" name="id_bayar" value = "<?php echo $id ?>"/>

					<select name="id_daftar"/>
					 <?php
					      foreach($id_daftar as $a):
					      	$res  = "<option ";
					        $res .= "value='".$a->id_daftar."'>";
					        $res .= $a->id_daftar;
					        $res .='</option>';

					        echo $res;
					        endforeach;
					        ?>
					 </select>

					 <select name="id_petugas"/>
					 <?php
					      foreach($id_petugas as $a):
					      	$res  = "<option ";
					        $res .= "value='".$a->id_petugas."'>";
					        $res .= $a->nama_petugas;
					        $res .='</option>';

					        echo $res;
					        endforeach;
					        ?>
					 </select>
                    <input type="text" name="jenis_biaya" placeholder="jenis_biaya" />
					<input type="text" name="biaya" placeholder="biaya" />
					<input type="text" name="waktu" placeholder="waktu"/>
					<input type="submit" name="simapn" value="Daftar" class="submitButton">
					<a href="<?php echo site_url ('kasir/c_kasir');?>">[ Home ]</a></td>
			</form>
		</fieldset>
		<hr>

	</body>
</html>
