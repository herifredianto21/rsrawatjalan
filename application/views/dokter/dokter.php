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
			<li class="active"></li>
			<li><a href="<?php echo site_url('dokter/c_rmedis/view_rekammedis'); ?>">Rekam Medis</a></li>

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
					<div class="panel-heading">Data dokter</div>
					<br><br><br>
						<div class="panel-body">
							<form class="navbar-form navbar-right" action="<?php echo site_url('dokter/c_dokter/search')?>" method="post">
								<select class="form-control" name="jeniscari">
									<option value="id_dokter"> id dokter </option>
									<option value="id_poli"> id poli </option>
									<option value="tgl_lahir"> tgl lahir </option>
									<option value="nama_dokter"> nama dokter </option>
									<option value="jk"> jk dokter </option>
									<option value="alamat"> alamat </option>
									<option value="no_telp"> no telepon </option>
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
											<td>No</td>
											<td>Id dokter</td>
											<td>Id poli</td>
											<td>tgl_lahir</td>
											<td>nama dokter</th>
											<td>Jenis kelamin </th>
											<td>alamat</th>
											<td>No_telp </th>
											<td>Action</td>
										</tr>
									</thead>

										<?php
										$no =1;
										foreach ($daftar as $a)	{
										?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $a->id_dokter; ?></td>
											<td><?php echo $a->id_poli; ?></td>
											<td><?php echo $a->tgl_lahir; ?></td>
											<td><?php echo $a->nama_dokter; ?></td>
											<td><?php echo $a->jk_dokter; ?></td>
											<td><?php echo $a->alamat; ?></td>
											<td><?php echo $a->no_telp; ?></td>
										</tr>
										<?php } ?>
								</table>
							</div>
						</div>
				</div>
			</div>
		</div><!--/.row-->

	<script src="<?= base_url()?>js/jquery-1.11.1.min.js"></script>
	<script src="<?= base_url()?>js/bootstrap.min.js"></script>
	<script src="<?= base_url()?>js/chart.min.js"></script>
	<script src="<?= base_url()?>js/chart-data.js"></script>
	<script src="<?= base_url()?>js/easypiechart.js"></script>
	<script src="<?= base_url()?>js/easypiechart-data.js"></script>
	<script src="<?= base_url()?>js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){
		        $(this).find('em:first').toggleClass("glyphicon-minus");
		    });
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>
