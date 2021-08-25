<!DOCTYPE html>
<html lang>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dokter</title>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/datepicker3.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/styles.css" />
<style>

.container-fluid{
 background-color: #0099FF;
 }

.navbar-brand{
	width: 225px;
 background:#0033FF;
}

.up{
	height: 22px;
}

.panel-default{
	margin-top: 20px;
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
				<a class="navbar-brand" href="#"><span>RS</span>APOTEKER</a>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="up">
		</div>

		<ul class="nav menu">
		    <li role="presentation" class="divider"></li>
		    <li><a href="<?php echo site_url('apoteker/Apoteker/index'); ?>"> Dashboard </a></li>
			<li><a href="<?php echo site_url('apoteker/Apoteker/view_obat'); ?>">kelola obat</a></li>
			<li class="active"><a href="<?php echo site_url('apoteker/Apoteker/view_jenis_obat'); ?>">kelola jenis obat</a></li>
			<li><a href="<?php echo site_url('apoteker/Apoteker/view_resep'); ?>">kelola resep</a></li>

			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo site_url('c_login/logout'); ?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>

	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>

			</ol>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data resep</div>

	<div class="panel-body">
		<a button type="button" class="btn btn-success" href="<?php echo site_url ('apoteker/Apoteker/tambah_resep')?>" role="button"><span class="glyphicon glyphicon-plus"> Tambah </span> </a>

		<form class="navbar-form navbar-right" action="<?php echo site_url('admin/c_dokter/search')?>" method="post" enctype="multipart/form-data">
			<select class="form-control" name="jeniscari">
				<option value="id_dokter"> Id Dokter </option>
				<option value="id_poli"> Id Poli </option>
				<option value="nama_dokter"> Nama Dokter </option>
				<option value="jk"> JK Dokter </option>
				<option value="tgl_lahir"> Tanggal Lahir </option>
				<option value="alamat"> Alamat </option>
				<option value="no_telp"> No Telepon </option>
			</select>

			<input type="text" name="tekscari" class="form-control" placeholder="Search">

		 	<button type="submit" class="btn btn-primary"> Submit </button>
		</form>
	</div>

	<div class="table table-responsive">
		<table class="table table-hover">
			<thead>
				<tr class="success">
					<th id="judul">Id jenis</td>
					<th id="judul">Nama jenis</td>
					<th id="judul">created at</td>
					<th id="judul">updated at</th>
					<th id="judul" colspan="2">Action</th>
				</tr>
			</thead>

				<?php foreach($jenisobat as $a)	{?>
				<tr id="hd" class="hd">
					<td class="hd"><?php echo $a->id_jenis; ?></td>
					<td class="hd"><?php echo $a->nama_jenis; ?></td>
					<td class="hd"><?php echo $a->created_at; ?></td>
					<td class="hd"><?php echo $a->updated_at; ?></td>
				</tr>
				<?php } ?>
		</table>
	</div>
	</div>


</body>

</html>
