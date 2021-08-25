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

<link rel="stylesheet" href="<?php echo base_url() ?>petugas_pendaftaran/grafik.css" />


<style>
 
.thumbnails{
	width:180px;
	height:250px;
	opacity:.750;
	cursor:pointer;
	margin:5px;
}

.fotos:hover{
	opacity:.999;
}


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

.alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; }





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
				<a class="navbar-brand" href="#"><span>RS</span>Pendaftaran</a>
				
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="up">
		</div>

		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="<?php echo site_url('petugas_pendaftaran/petugas_pendaftaran/index'); ?>">Dashboard</a></li>		
			<li><a href="<?php echo site_url('petugas_pendaftaran/petugas_pendaftaran/view_pasien'); ?>">Data pasien</a></li>
			<li><a href="<?php echo site_url('petugas_pendaftaran/c_pendaftaran/view_pendaftaran'); ?>">data pendaftaran</a></li>
			
			
			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo site_url('dokter/dokter/logout'); ?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				
			</ol>
		</div><!--/.row-->
		
		<div class="row"><br>
			
	
        
    </div>



		<div class="item">

		</div><!--/.row-->
		
		<div class="alert alert-info-alt alert-dismissable">
                <span class="glyphicon glyphicon-certificate"></span>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button><strong>Selamat datang</strong></div>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">



					
				
         	
					<!--<ul class="thumbnails">
						<li class="span3">
							<a href="<?php echo site_url ('petugas_pendaftaran/c_pasien/tambah_pasien')?>" class="thumbnail">
								<img src="<?php echo base_url() ?>assets/img/addpas.png" alt="">
                                
							</a>
						</li>
						
						
						<li class="span3">
							<a href="<?php echo site_url ('petugas_pendaftaran/c_pasien/tambah_pasien')?>" class="thumbnail">
								<img src="<?php echo base_url() ?>assets/img/addtang.png" alt="">
                                
							</a>
						</li>
					
					</ul>-->	

				</div>
			</div>
		</div><!--/.row-->
		
		
								
			
</body>

</html>

