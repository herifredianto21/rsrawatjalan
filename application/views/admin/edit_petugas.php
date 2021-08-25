<html>
	<head>
	<title>Edit</title>
		<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
	</head>
	<body>
		
		<hr>
		<fieldset>  
			<legend><h3>Update petugas</h3></legend>
			<form method="post" enctype="multipart/form-data" action="<?php echo site_url('c_petugas/proses_edit_petugas'); ?>">
				<?php foreach($daftar->result() as $a):?>
					<input type="text" name="id_petugas" value="<?php echo $a->id_petugas;?>"/>
					<input type="text" name="nama_petugas" value="<?php echo $a->nama_petugas;?>"/>
					<input type="text" name="jk" value="<?php echo $a->jk;?>"/>
					<input type="text" name="jabatan" value="<?php echo $a->jabatan;?>"/>
					<input type="text" name="tgl_lahir" value="<?php echo $a->tgl_lahir;?>"/>
					<input type="text" name="alamat" value="<?php echo $a->alamat;?>"/>
					<input type="text" name="created_at" value="<?php echo $a->created_at;?>"/>
					<input type="text" name="updated_at" value="<?php echo $a->updated_at;?>"/>
					
					<input type="submit" name="simapn" value="Update" class="submitButton">
					<a href="<?php echo site_url ('c_petugas');?>">[ Home ]</a></td>
				<?php endforeach; ?>
			</form>
		</fieldset>
		<hr>
		
	</body>
</html>
