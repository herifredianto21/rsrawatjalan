<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>


<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" />
<!--<link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet" />-->
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
.container{
	width: 900px;
}

.panel{
	width : 1000px;
	height : 500px;
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
				<a class="navbar-brand" href="#"><span>RS</span>Admin</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<div class="up">
				
			</div>
		<ul class="nav menu">
			<li class="active"><a href=""> Dashboard </a></li>
			<li><a href="<?php echo site_url('admin/c_dokter/view_dokter'); ?>">Data Dokter</a></li>
			<li><a href="<?php echo site_url('c_pasien/view_pasien'); ?>">Data Pasien</a></li>
			<li><a href="<?php echo site_url('c_obat/view_obat'); ?>">Data Obat</a></li>
			<li><a href="<?php echo site_url('c_petugas/view_petugas'); ?>">Data Petugas</a></li>
			<li><a href="<?php echo site_url('c_resep/view_resep'); ?>">Data Resep</a></li>
			
			
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
				<h1 class="page-header">Laporan</h1>
			</div>
		</div><!--/.row-->
		
		
		
		<div class="row">
			<div class="col-lg-9">
				<div class="panel panel-default">
					<div class="panel-heading">

                    	 <form action="<?php echo site_url('admin/Admin/cetakkunjungan')?>" method="post">
   <div class="container">
   <div class="row">
   <div class="col-md-12">
     <h3> Laporan Pasien Mendaftar</h3>

        <div class="form-group">
			<div class="row">
			<div class="col-md-2">
			<label for="InputId">Tanggal Awal</label>
			</div>
			<div class="col-md-10">
						<input type="text" class="form-control" id="tgl_awal" placeholder="Tanggal Awal" name="tgl_awal">
			</div>
			</div>
			</div>
   
			<div class="form-group">
			<div class="row">
			<div class="col-md-2">
			<label for="InputId">Tanggal Akhir</label>
			</div>
			<div class="col-md-10">
						<input type="text" class="form-control" id="tgl_akhir" placeholder="Tanggal Akhir" name="tgl_akhir">
			</div>
			</div>
			</div>
   
			<div class="form-group">
			<div class="row">
			<div class="col-md-2">
			<label for="InputId">ID Dokter</label>
			</div>
			<div class="col-md-10">
						<input type="text" class="form-control" id="id_dokter" placeholder="ID Dokter" name="id_dokter">
			</div>
			</div>
			</div>
   
		
            <button type="submit" class="btn btn-primary">Simpan</button>
		<button type="reset" class="btn btn-default">Reset</button>
			</div>



                    </div>


				</div>
			</div>
		</div><!--/.row-->
		
		

</body>

</html>


