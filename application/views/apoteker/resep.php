<!DOCTYPE html>
<html lang>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Akses APOTEKER</title>
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
			<li><a href="<?php echo site_url('apoteker/Apoteker/view_jenis_obat'); ?>">kelola jenis obat</a></li>
			<li class="active"><a href="<?php echo site_url('apoteker/Apoteker/view_resep'); ?>">kelola resep</a></li>

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
				<div class="panel panel-default">
					<div class="panel-heading">Data resep</div>
						<div class="panel-body">
							<a button type="button" class="btn btn-success" href="<?php echo site_url ('apoteker/Apoteker/tambah_resep')?>" role="button"><span class="glyphicon glyphicon-plus"> Tambah </span> </a>
							<form class="navbar-form navbar-right" action="<?php echo site_url('admin/c_dokter/search')?>" method="post" enctype="multipart/form-data">
								<select class="form-control" name="jeniscari">
									<option value="id_dokter"> id resep </option>
									<option value="id_poli"> id rekam </option>
									<option value="nama_dokter"> id petugas </option>
									<option value="jk"> waktu </option>
									<option value="tgl_lahir">  keterangan </option>
								</select>
								<input type="text" name="tekscari" class="form-control" placeholder="Search">
								<button type="submit" class="btn btn-info"> Submit </button>
							</form>
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
								<tr>
									<td><?php echo $a->id_resep; ?></td>
									<td><?php echo $a->id_rekam; ?></td>
									<td><?php echo $a->id_petugas; ?></td>
									<td><?php echo $a->waktu; ?></td>
									<td><?php echo $a->keterangan; ?></td>
									<td>
										<a class="btn btn-warning" href="<?php echo site_url ('apoteker/Apoteker/view_obat/'.$a->id_resep)?>"><span class="glyphicon glyphicon-edit"></span> Ambil Obat</a>
										<a class="btn btn-info active" href="<?php echo site_url ('apoteker/Apoteker/view/'.$a->id_resep)?>"><span class="glyphicon glyphicon-eye-open"></span> Lihat resep</a>
									</td>
								</tr>
								<?php } ?>
							</table>
						</div>
						<hr>
					</div>
				</div>
			</div>
		</div>
</body>
</html>