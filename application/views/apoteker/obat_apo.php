<!DOCTYPE html>
<html lang>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Obat</title>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" />
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
				<a class="navbar-brand" href="#"><span>RS</span>Apoteker</a>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="up">
		</div>

		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
		    <li><a href="<?php echo site_url('apoteker/Apoteker/index'); ?>"> Dashboard </a></li>
			<li class="active"><a href="<?php echo site_url('apoteker/Apoteker/view_obat'); ?>">kelola obat</a></li>
			<li><a href="<?php echo site_url('apoteker/Apoteker/view_jenis_obat'); ?>">kelola jenis obat</a></li>
			<li><a href="<?php echo site_url('apoteker/Apoteker/view_resep'); ?>">kelola resep</a></li>

			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo site_url('c_login/logout'); ?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout</a></li>
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
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->



		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Obat</div>


     <div class="panel-body">
     	<a button type="button" class="btn btn-success" href="<?php echo site_url ('apoteker/Apoteker/tambah_obat')?>" role="button"> Tambah </a>

		<form class="navbar-form navbar-right" action="<?php echo site_url('apoteker/Apoteker/search')?>" method="post">
			<select class="form-control" name="jeniscari">
				<option value="id_obat">Id Obat </option>
				<option value="id_jenis"> Id Jenis </option>
				<option value="nama_obat"> Nama Obat </option>
				<option value="kegunaan"> Kegunaan </option>
				<option value="harga"> Harga </option>
				<option value="satuan"> Satuan </option>
			</select>

			<input type="text" name="tekscari" class="form-control" placeholder="Search">
			<button type="submit" class="btn btn-primary"> Submit </button>
		</form>
	</div>


 <div class="panel-body">
	<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
			<tr>
				<th>id Obat</td>
				<th>id jenis</td>
				<th>Nama Obat</td>
				<th>kegunaan</td>
				<th>harga</th>
				<th>satuan </th>

				<th colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr>
				<td><?php echo $a->id_obat; ?></td>
				<td><?php echo $a->id_jenis; ?></td>
				<td><?php echo $a->nama_obat; ?></td>
				<td><?php echo $a->kegunaan; ?></td>
				<td><?php echo $a->harga; ?></td>
				<td><?php echo $a->satuan; ?></td>

				<td>
					<a class="btn btn-warning" href="<?php echo site_url ('apoteker/Apoteker/edit_obat/'.$a->id_obat)?>"> <span class="glyphicon glyphicon-edit"></span> Edit </a></td>
				<td>
					<a class="btn btn-warning" href="<?php echo site_url ('apoteker/Apoteker/tambah_dresep/'.$a->id_obat)?>"> <span class="glyphicon glyphicon-edit"></span> Ambil </a></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>

</body>

</html>

