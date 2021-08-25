<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>
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
	height: 42px;
}

.span3{
	margin: 40px;
	width: 100px;
}

.panel-heading {
	width: 10px;
	height: 200px;
}

.alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; }


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
				<a class="navbar-brand" href="#"><span>RS</span>KEPALA RS</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="up"></div>
			<ul class="nav menu">
				<li class="active"><a href=""> Dashboard </a></li>
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
				<div class="aler">

				</div>
			</div>
		</div><!--/.row-->

		<div class="alert alert-info-alt alert-dismissable">
                <span class="glyphicon glyphicon-certificate"></span>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button><strong>Selamat datang</strong></div>

		<div class="row">
			<div class="col-lg-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<li class="span3">
								<a href="<?php echo site_url ('kepalars/c_kepalars/view_laporanpasien')?>" >
									<img src="<?php echo base_url() ?>assets/img/laporan.png" alt="">

								</a>
							</li>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>
</body>
</html>