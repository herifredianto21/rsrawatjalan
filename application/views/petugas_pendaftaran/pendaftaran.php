<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Halaman Utama Pendaftaran</title>


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
	height: 21px;
}

.panel-default{
	margin-top: 20px;
	width: 1200px;
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
				<a class="navbar-brand" href="#"><span>RS</span>Pendaftaran</a>
				<!--<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>-->
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
				<div class="up">
				
			</div>
   	

		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo site_url('petugas_pendaftaran/petugas_pendaftaran/index'); ?>">Dashboard</a></li>
			<li><a href="<?php echo site_url('petugas_pendaftaran/petugas_pendaftaran/view_pasien'); ?>">kelola pasien</a></li>
			<li class="active"><a href="<?php echo site_url('petugas_pendaftaran/c_pendaftaran/view_pendaftaran'); ?>"> daftar pendaftaran</a></li>
			
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
			<div class="col-lg-11">
				<div class="panel panel-default">
					<div class="panel-heading">Data Pendaftaran</div>
	


 <div class="panel-body">
 	   <ul id="myTab" class="nav nav-tabs nav_tabs">
			<li class="active"><a href="#poli_gigi" data-toggle="tab">Poli Gigi</a></li>
		</ul>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade in active" id="poli_gigi">
			<section class="container product-info">
				<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
				    <tr>
					<th id="judul">id daftar</th>
					<th id="judul">id petugas</td>
					<th id="judul">id pasien</td>
					<th id="judul">id poli</td>
					<th id="judul">id dokter</td>
					<th id="judul">waktu</th>	
					<!--<th id="judul">no_antrian</th>-->
				</tr>
			  </thead>

				<?php foreach ($daftar as $a)	{
					if($a->id_poli == "PL-001"){
				?>
				<tr id="hd" class="hd">
					<td class="hd"><?php echo $a->id_daftar; ?></td>
					<td class="hd"><?php echo $a->id_petugas; ?></td>
					<td class="hd"><?php echo $a->id_pasien; ?></td>
					<td class="hd"><?php echo $a->id_poli; ?></td>
					<td class="hd"><?php echo $a->id_dokter; ?></td>
					<td class="hd"><?php echo $a->waktu; ?></td>
					<!--<td class="hd"><?php echo $a->no_antrian; ?></td>-->

					<!--<td class="hd">
					<a href="<?php echo site_url ('#'.$a->id_pasien)?>"><input type="submit" value="daftar" class="submitButton"></a></td>-->
					<!--<td>
					<a button type="button" class="btn btn-info" href="<?php echo base_url();?>index.php/petugas_pendaftaran/c_pendaftaran/cetak_antrian/ <?php echo($a->no_antrian)?>" role="button"><span class="glyphicon glyphicon-print"></span> Cetak</a><p><p>
				    </td>-->
				</tr>
				<?php }} ?>
			</table>		
			</div>
		</section>
		</div>


<ul id="myTab" class="nav nav-tabs nav_tabs">	
			<li class="active"><a href="#poli_mata" data-toggle="tab">Poli Mata</a></li>
		</ul>

		<div class="tab-pane fade in active" id="poli_mata">
			<section class="container product-info">
				<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
				    <tr>
					<th id="judul">id daftar</th>
					<th id="judul">id petugas</td>
					<th id="judul">id pasien</td>
					<th id="judul">id poli</td>
					<th id="judul">id dokter</td>
					<th id="judul">waktu</th>	

				</tr>
			  </thead>

			<?php foreach ($daftar as $a) {
				if($a->id_poli == "PL-002")	{
			?>
				<tr id="hd" class="hd">
					<td class="hd"><?php echo $a->id_daftar; ?></td>
					<td class="hd"><?php echo $a->id_petugas; ?></td>
					<td class="hd"><?php echo $a->id_pasien; ?></td>
					<td class="hd"><?php echo $a->id_poli; ?></td>
					<td class="hd"><?php echo $a->id_dokter; ?></td>
					<td class="hd"><?php echo $a->waktu; ?></td>

					<!--<td class="hd">
					<a href="<?php echo site_url ('#'.$a->id_pasien)?>"><input type="submit" value="daftar" class="submitButton"></a></td>-->
					<!--<td>
					<a button type="button" class="btn btn-info" href="<?php echo base_url();?>index.php/petugas_pendaftaran/c_pendaftaran/cetak_antrian/ <?php echo($a->no_antrian)?>" role="button"><span class="glyphicon glyphicon-print"></span> Cetak</a><p><p>
				    </td>-->
				</tr>
				<?php }} ?>
			</table>		
			</div>

			</section>
		</div>


		<!--<div class="tab-pane fade in active" id="poli_mata">
			<section class="container product-info">
				<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
				    <tr>
					<th id="judul">id daftar</th>
					<th id="judul">id petugas</td>
					<th id="judul">id pasien</td>
					<th id="judul">id poli</td>	
					<th id="judul">waktu</th>	
					<!--<th id="judul">no_antrian</th>-->

				<!--	<th id="judul" colspan="2">Action</th>
				</tr>
			  </thead>

				<?php foreach ($daftar as $a) {
					if($a->id_poli == "PL-003") {
					?>
				<tr id="hd" class="hd">
					<td class="hd"><?php echo $a->id_daftar; ?></td>
					<td class="hd"><?php echo $a->id_petugas; ?></td>
					<td class="hd"><?php echo $a->id_pasien; ?></td>
					<td class="hd"><?php echo $a->id_poli; ?></td>
					<td class="hd"><?php echo $a->waktu; ?></td>
					<!--<td class="hd"><?php echo $a->no_antrian; ?></td>-->

					<!--<td class="hd">
					<a href="<?php echo site_url ('#'.$a->id_pasien)?>"><input type="submit" value="daftar" class="submitButton"></a></td>-->
				<!--	<td>
					<a button type="button" class="btn btn-info" href="<?php echo base_url();?>index.php/petugas_pendaftaran/c_pendaftaran/cetak_antrian/ <?php echo($a->no_antrian)?>" role="button"><span class="glyphicon glyphicon-print"></span> Cetak</a><p><p>
				    </td>
				</tr>
				<?php }} ?>
			</table>		
			</div>

			</section>
		</div>-->
	</div>





 	<!--<a button type="button" class="btn btn-success" href="<?php echo site_url ('petugas_pendaftaran/c_pendaftaran/mulai_pendaftaran')?>" role="button"><span class="glyphicon glyphicon-plus"></span> Tambah </a><br><br>-->



	</div>	
								
		
</body>

</html>


 