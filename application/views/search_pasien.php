<html>
	<head>
		<title> Details</title>
		<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
		 
	</head>
	<body>


    
			<legend><h3>Add New Pasien</h3></legend>
			<hr>
			<form method="POST" action="<?php echo site_url('c_pasien/proses_tambah_pasien'); ?>">
				<input type="text" size="50px" name="id_pasien" placeholder="id_pasien"/> <br><br>
				<input type="text" size="50px" name="nama_pasien" placeholder="nama_pasien"/> <br> <br>	
				<select name="jk">
						<option>Jenis Kelamin</option>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
			    </select> <br> <br>
			     <input type="text" size="50px" name="alamat" placeholder="alamat"/> <br> <br>
			    <input type="text" size="50px" name="tgl_lahir" placeholder="tgl_lahir"/> <br> <br>
				<input type="text" size="50px" name="telp" placeholder="telp"/> <br> <br>

				<input type="submit" name="simapn" value="Simpan" class="submitButton"> 
				<a href="<?php echo site_url ('c_rumah');?>">[ Home ]</a>
			</form>
		


		<form class="navbar-form navbar-left" action="<?php echo site_url('c_pasien/search')?>" method="post">
		<input type="text" name="tekscari" class="form-control" placeholder="Search">
		<select class="form-control" name="jeniscari">
           <option value="id_pasien"> id pasien </option>
         <option value="nama_pasien"> nama pasien </option>
         <option value="jk"> Jenis Kelamin </option>
         <option value="alamat"> alamat </option>
         <option value="tgl_lahir"> tgl_lahir </option>
         <option value="telp"> telp </option>
		 </select>

		 <button type="submit" class="btn-success"> Submit </button>




		<table  cellpadding="5" cellspacing="5" width="90%" align="center" style="font-weight:bold;font-size:13px;">
			    <tr>
				<th id="judul">id pasien</th>
				<th id="judul">nama pasien</td>
				<th id="judul">jk</td>
				<th id="judul">alamat </th>	
				<th id="judul">tgl_lahir</th>	
				<th id="judul">telp</td>

				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($cari->result() as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->id_pasien; ?></td>
				<td class="hd"><?php echo $a->nama_pasien; ?></td>
				<td class="hd"><?php echo $a->jk; ?></td>
				<td class="hd"><?php echo $a->alamat; ?></td>
				<td class="hd"><?php echo $a->tgl_lahir; ?></td>
				<td class="hd"><?php echo $a->telp; ?></td>

				<td class="hd"><a href="<?php echo site_url ('c_pasien/edit_pasien/'.$a->id_pasien)?>">edit</a></td><td class="hd">
				<a href="<?php echo site_url ('c_pasien/proses_delete_pasien/'.$a->id_pasien)?>"><input type="submit" value="Delete" class="submitButton"></a></td>
			</tr>
			<?php } ?>
		</table>
		<hr>
		<p>
			Rumah Sakit Rawat Jalan
	</body>
</html>
