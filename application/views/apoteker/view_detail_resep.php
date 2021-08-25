<!DOCTYPE html>
<html lang>
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
		<ul class="nav menu">
		<li role="presentation" class="divider"></li>
		    <li><a href="<?php echo site_url('apoteker/Apoteker/index'); ?>"> Dashboard </a></li>
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
					<div class="panel-body">
						<div class="table-responsive">
								<?php foreach ($daftar as $a)	{?>
									<tr>
										Id resep :<td><?php echo $a->id_resep; ?></td><br>
										id rekam :<td><?php echo $a->id_rekam; ?></td> <br>
										id petugas :<td><?php echo $a->id_petugas; ?></td> <br>
										waktu :<td><?php echo $a->waktu; ?></td><br>
										keterangan :<td><?php echo $a->keterangan; ?></td> <hr>
									</tr>
								<?php } ?>
						</div>
					</div>

					<div class="panel-body">
						<div class="table-responsive">
							<?php foreach ($detailresep as $a)	{?>
								<tr>
									Id resep :<td><?php echo $a->id_resep; ?></td><br>
									id obat :<td><?php echo $a->id_obat; ?></td> <br>
									dosis :<td><?php echo $a->dosis; ?></td> <br>
									satuan :<td><?php echo $a->satuan; ?></td><br>
									Jumlah :<td><?php echo $a->jumlah; ?></td><br>
									Aturan Pakai :<td><?php echo $a->aturan_pakai; ?></td><br>
								</tr>
								<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
</body>
</html>
