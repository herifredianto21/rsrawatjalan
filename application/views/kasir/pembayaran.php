<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Akses Kasir</title>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/datepicker3.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/styles.css" />
<style>

.container-fluid{
 background-color: #0099FF;
 }

.navbar-brand{
	width: 227px;
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
					<span class="sr-only">Toggle navigationasdasd</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>RS</span>Kasir</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<div class="up"></div>
			<ul class="nav menu">
				<li role="presentation" class="divider"></li>
				<li><a href="">Dashboard</a></li>
				<li class="active"><a href="<?php echo site_url('kasir/c_kasir/view_pembayaran'); ?>">Data pembayaran Poli</a></li>
				<li><a href="<?php echo site_url('kasir/c_kasir/view_pembayaran_obat'); ?>">Data pembayaran obat</a></li>

				<li role="presentation" class="divider"></li>
				<li><a href="<?php echo site_url('dokter/dokter/logout'); ?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout</a></li>
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
				</div>
			</div><!--/.row-->



		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><h2>Pembayaran poli</h2></div>
						<div class="panel-body">
							<a button type="button" class="btn btn-success" href="<?php echo site_url ('kasir/c_kasir/view_pilih_pembayaran')?>" role="button"><span class="glyphicon glyphicon-plus"></span> Tambah </a><br>

							<form class="navbar-form navbar-right" action="<?php echo site_url('kasir/c_kasir/search')?>" method="post" enctype="multipart/form-data">
								<select class="form-control" name="jeniscari">
									<option value="id_bayar"> id bayar </option>
									<option value="id_daftar"> id daftar </option>
									<option value="id petugas"> id petugas </option>
									<option value="nama_poli"> nama poli </option>
								</select>
								<input type="text" name="tekscari" class="form-control" placeholder="Search">
								<button type="submit" class="btn btn-primary"> Submit </button>
							</form>
						</div>

						<div class="table table-responsive">
							<table class="table table-hover">
								<thead>
									<tr class="success">
										<th>Id bayar</th>
										<th>Id daftar</th>
										<th>id petugas</td>
										<th> jenis biaya</td>
										<th>biaya</th>
										<th>waktu</th>
										<th>no_antrian</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
									<?php foreach($daftar as $a)	{?>
										<tr>
											<td><?php echo $a->id_bayar; ?></td>
											<td><?php echo $a->id_daftar; ?></td>
											<td><?php echo $a->id_petugas; ?></td>
											<td><?php echo $a->jenis_biaya; ?></td>
											<td><?php echo $a->biaya; ?></td>
											<td><?php echo $a->waktu; ?></td>
											<td><?php echo $a->no_antrian; ?></td>
											<td>
												<a button type="button" class="btn btn-info" href="<?php echo base_url();?>index.php/kasir/c_kasir/cetak_antrian/<?php echo($a->no_antrian)?>" role="button">Cetak</a><p><p>
											</td>
											<td>
												<a button type="button" class="btn btn-info" href="<?php echo base_url();?>index.php/kasir/c_kasir/RPagepembayaran/<?php echo $a->waktu; ?>" role="button"><span class="glyphicon glyphicon-save-file"></span>print</a><p><p>
											</td>
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