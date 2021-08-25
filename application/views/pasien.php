<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" />

    <title>Simple Login | dokter</title>
 <style>
 .header {
 	background-color: blue;
 	height:110px;
 }

 </style>

</head>
<body>

 <div class="header">
 	<ul> Rumah sakit Rawat Jalan </ul>
 </div>



		<a button type="button" class="btn btn-info" href="#" role="button"> Dokter </a>
		<a button type="button" class="btn btn-info" href="<?php echo site_url ('c_pasien/view_pasien')?>" role="button"> pasien </a>
		<a button type="button" class="btn btn-info" href="<?php echo site_url ('dokter/dokter/logout')?>" role="button"> logout </a>


       <hr>


         <table align="center">
		<form class="navbar-form navbar-right" action="<?php echo site_url('c_pasien/search')?>" method="post">
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
		</table>





		<table class="table table-bordered">
			    <tr>
				<th id="judul">id pasien</th>
				<th id="judul">nama pasien</td>
				<th id="judul">jk</td>
				<th id="judul">alamat </th>
				<th id="judul">tgl_lahir</th>
				<th id="judul">telp</td>

				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->id_pasien; ?></td>
				<td class="hd"><?php echo $a->nama_pasien; ?></td>
				<td class="hd"><?php echo $a->jk; ?></td>
				<td class="hd"><?php echo $a->alamat; ?></td>
				<td class="hd"><?php echo $a->tgl_lahir; ?></td>
				<td class="hd"><?php echo $a->telp; ?></td>


				<td>
				<a href="<?php echo site_url ('c_pasien/periksa_pasien/'.$a->id_pasien)?>"><input type="submit" value="periksa" class="submitButton"></a></td>
				<td>
				<a href="<?php echo site_url ('c_pasien/edit_pasien/'.$a->id_pasien)?>"><input type="submit" value="edit" class="submitButton"></a></td>
				<td>
				<a href="<?php echo site_url ('c_pasien/proses_delete_pasien/'.$a->id_pasien)?>"><input type="submit" value="Delete" class="submitButton"></a></td>
			</tr>
			<?php } ?>
		</table>
		<hr>
		<p>
			Rumah Sakit Rawat Jalan
	</body>
</html>