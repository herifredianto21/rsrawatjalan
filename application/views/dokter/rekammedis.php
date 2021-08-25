<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Akses dokter</title>
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
				<a class="navbar-brand" href="#"><span>RS</span>DOKTER</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		 <div class="up">
		 </div>
			<ul class="nav menu">
				<li></li>
				<li role="presentation" class="divider"></li>
				<li><a href="<?php echo site_url('dokter/c_dokter/view_dokterperpasien'); ?>">Data pasien perdokter</a></li>
				<li class="active"><a href="<?php echo site_url('dokter/c_rmedis/view_rekammedis'); ?>">Rekam Medis</a></li>
				<li role="presentation" class="divider"></li>
				<li><a href="<?php echo site_url('dokter/dokter/logout'); ?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout </a></li>
			</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"></li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">REKAM MEDIS</div>
    					<div class="panel-body">
    						<li class="span3">
								<a href="<?php echo site_url ('dokter/c_rmedis/tambah_rmedis')?>">
									<img src="<?php echo base_url() ?>assets/img/plus.png" width="70px">
								</a>
								<form class="navbar-form navbar-right" action="<?php echo site_url('dokter/c_rmedis/search')?>" method="post">
									<select class="form-control" name="jeniscari">
										<option value="id_rekam"> id rekam </option>
										<option value="id_dokter"> id dokter </option>
										<option value="id_daftar"> id daftar </option>
										<option value="id_pasien"> id pasien </option>
									</select>
									<input type="text" name="tekscari" class="form-control" placeholder="Search">
									<button type="submit" class="btn btn-info"> Submit </button>
								</form>
							</li>
						</div>

						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<td id="judul">Id rekam</td>
											<td id="judul">Id dokter</td>
											<td id="judul">id daftar</td>
											<td id="judul">id pasien</td>
											<td id="judul">waktu</td>
											<th id="judul" colspan="2">Action</th>
										</tr>
									</thead>
									<?php foreach ($daftar as $a)	{?>
									<tr id="hd" class="hd">
										<td class="hd"><?php echo $a->id_rekam; ?></td>
										<td class="hd"><?php echo $a->id_dokter; ?></td>
										<td class="hd"><?php echo $a->id_daftar; ?></td>
										<td class="hd"><?php echo $a->id_pasien; ?></td>
										<td class="hd"><?php echo $a->waktu; ?></td>
										<td>
											<a button type="button" class="btn btn-info active" href="<?php echo site_url ('dokter/c_rmedis/view_rekammedis_detail')?>/<?php echo $a->id_rekam;?>" role="button"><span class="glyphicon glyphicon-eye-open"></span> view </a><br><br>
										</td>
									</tr>
									<?php } ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->

</body>
</html>
