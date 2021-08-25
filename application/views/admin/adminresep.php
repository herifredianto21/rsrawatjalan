<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>


<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" />
<!--<link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet" />-->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/datepicker3.css" />
	
<link rel="stylesheet" href="<?php echo base_url() ?>css/styles.css" />


	
<style>
 
.container-fluid{
 background-color: #0099FF;
 }
 
.navbar-brand{
	width: 228px;
 background:#0033FF;
}

.up{
	height: 22px;
}

.panel-default{
	margin-top: 25px;
}


</style>


</head>

<body>
 


	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>RS</span>ADMIN</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="up">

		</div>

		
		<ul class="nav menu">
			<li class="active"><a href=""> Dashboard </a></li>
			<li><a href="<?php echo site_url('admin/c_dokter/view_dokter'); ?>">Data Dokter</a></li>
			<li><a href="<?php echo site_url('c_pasien/view_pasien'); ?>">Data Pasien</a></li>
			<li><a href="<?php echo site_url('c_obat/view_obat'); ?>">Data Obat</a></li>
			<li><a href="<?php echo site_url('c_petugas/view_petugas'); ?>">Data Petugas</a></li>
			<li><a href="<?php echo site_url('c_resep/view_resep'); ?>">Data Resep</a></li>
			
			
			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo site_url('c_login/logout'); ?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Iconsa</li>
			</ol>
		</div><!--/.row-->
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data resep</div>





	<div class="panel-body">
		<li class="span3">
							<a href="<?php echo site_url ('admin/tambah_resep')?>">
								<img src="<?php echo base_url() ?>assets/img/plus.png" width="70px">
                                
							</a>

		<form class="navbar-form navbar-right" action="<?php echo site_url('admin/c_dokter/search')?>" method="post" enctype="multipart/form-data">
		<select class="form-control" name="jeniscari">
           <option value="id_dokter"> id dokter </option>
         <option value="id_poli"> id poli </option>
         <option value="nama_dokter"> nama dokter </option>
         <option value="jk"> jk dokter </option>
         <option value="tgl_lahir"> tgl lahir </option>
         <option value="alamat"> alamat </option>
         <option value="no_telp"> no telepon </option>
		 </select>

		<input type="text" name="tekscari" class="form-control" placeholder="Search">


		 <button type="submit" class="btn btn-primary"> Submit </button>
		</form>
	</li>
	</div> 

 <div class="table table-responsive">
  				<table class="table table-hover">	
  				<thead>
    				<tr class="success">

				<th id="judul">Id resep</td>
				<th id="judul">Id rekam</td>
				<th id="judul">id petugas</td>
				<th id="judul">waktu</th>	
				<th id="judul">keterangan</th>
				<th id="judul" colspan="2">Action</th>
			</tr>
		</thead>

     
			<?php foreach($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->id_resep; ?></td>
				<td class="hd"><?php echo $a->id_rekam; ?></td>
				<td class="hd"><?php echo $a->id_petugas; ?></td>
				<td class="hd"><?php echo $a->waktu; ?></td>
				<td class="hd"><?php echo $a->keterangan; ?></td>

						
				<td class="hd">
					<a class="btn btn-warning" href="<?php echo site_url ('apoteker/Apoteker/edit_dokter/'.$a->id_resep)?>"><span class="glyphicon glyphicon-edit"></span> Tambah Obat</a>

					<a class="btn btn-warning" href="<?php echo site_url ('apoteker/Apoteker/edit_dokter/'.$a->id_resep)?>"><span class="glyphicon glyphicon-edit"></span> Lihat resep</a></td>
				<!--<td class="hd">
				    <a class="btn btn-danger" href="<?php echo site_url ('admin/c_dokter/proses_delete_dokter/'.$a->id_dokter)?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a></td>-->
			</tr>
			<?php } ?>
		</table>
	</div>
	<hr>
</div>

	
</body>

</html>
