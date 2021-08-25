<html>
	<head>
	<title>Edit obat</title>
		<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
	</head>
	<body>
		
		<hr>
		<fieldset>  
			<legend><h3>Update obat</h3></legend>
			<form method="post" enctype="multipart/form-data" action="<?php echo site_url('c_obat/proses_edit_obat'); ?>">
				<?php foreach($daftar->result() as $a):?>
					<input type="text" name="id_obat" value="<?php echo $a->id_obat;?>"/>
					<input type="text" name="id_jenis" value="<?php echo $a->id_jenis;?>"/>
					<input type="text" name="nama_obat" value="<?php echo $a->nama_obat;?>"/>
					<input type="text" name="kegunaan" value="<?php echo $a->kegunaan;?>"/>
					<input type="text" name="harga" value="<?php echo $a->harga;?>"/>
					<input type="text" name="satua" value="<?php echo $a->satuan;?>"/>
					
					<input type="submit" name="simapn" value="Update" class="submitButton">
					<a href="<?php echo site_url ('c_obat');?>">[ Home ]</a></td>
				<?php endforeach; ?>
			</form>
		</fieldset>
		<hr>
		
	</body>
</html>
