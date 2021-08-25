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
 background-color: #76b4ff;;
 }

.navbar-brand{
 width: 190px;
 background:blue;
}

#sidebar-collapse{
	width: 190px;
}

.row{
	float: right;
	width: 1189px;
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
		<ul class="nav menu">
			<li><a href="<?php echo site_url('dokter/c_dokter/view_dokterperpasien'); ?>">Data pasien perDokter</a></li>
			<li><a href="<?php echo site_url('dokter/c_rmedis/view_rekammedis'); ?>">Rekam Medis</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo site_url('dokter/dokter/logout'); ?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout </a></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"><!--........--></li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<br><br><br>
					<div class="panel-body">
						<div class="table-responsive">
							<?php foreach ($daftar as $a)	{?>
								<tr>
									id_dokter : <td><?php echo $a->id_dokter; ?></td> <br>
									Keluhan :<td><?php echo $a->keluhan; ?></td> <br>
									Gejala :<td><?php echo $a->gejala; ?></td> <br>
									Diagnosa :<td><?php echo $a->diagnosa; ?></td><br>
									Penanganan :<td><?php echo $a->penanganan; ?></td><br>
									Id resep :<td><?php echo $a->id_resep; ?></td><hr>
								</tr>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
</body>
</html>