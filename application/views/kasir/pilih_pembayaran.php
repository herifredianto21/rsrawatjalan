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

.col-lg-11{

	width: 1230px;

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
				<a class="navbar-brand" href="#"><span>RS</span>KASIR</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div class="col-sm-15 col-sm-offset-9 col-lg-10 col-lg-offset-1 main">
		<div class="row">
			<div class="col-lg-11">
				<div class="panel panel-default">
	              <br><br>
				     <a button type="button" class="btn btn-success" href="<?php echo site_url ('kasir/c_kasir/mulai_pembayaran')?>" role="button"><span class="glyphicon glyphicon-plus"></span> Pembayaran poli </a><br>
				     <br><br><br>
					<a button type="button" class="btn btn-success" href="<?php echo site_url ('kasir/c_kasir/vpembayaran_obat')?>" role="button"><span class="glyphicon glyphicon-plus"></span> Pembayaran obat </a><br>
				</div>
			</div>
		</div><!--/.row-->
	</div>
</body>
</html>