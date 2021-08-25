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
	width: 225px;
 background:#0033FF;
}

.up{
	height: 21px;
}

.panel-default{
	margin-top: 20px;
	width: 1100px;
}

.thumbnails{
	width:180px;
	height:60px;
	opacity:.750;
	cursor:pointer;
	margin-right:1px;
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
				
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="up">

		</div>
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo site_url('petugas_pendaftaran/petugas_pendaftaran/index'); ?>">Dashboard</a></li>
			<li class="active"><a href="<?php echo site_url('petugas_pendaftaran/petugas_pendaftaran/view_pasien'); ?>">kelola pasien</a></li>
			<li><a href="<?php echo site_url('petugas_pendaftaran/c_pendaftaran/view_pendaftaran'); ?>"> Data pendaftaran</a></li>
			
			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo site_url('dokter/dokter/logout'); ?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout</a></li>
		</ul>

	</div><!--/.sidebar-->

	<div class="downsidebar">

	</div>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<!--<li class="active">Iconsa</li>-->
			</ol>
		</div><!--/.row-->
		
	
		
		
		
		<div class="row">
			<div class="col-lg-11">
				<div class="panel panel-default">
					<!--<div class="panel-heading">Data Pasien</div>-->
	           <br>
              <ul class="thumbnails">
						<li class="span3">
							<a href="<?php echo site_url ('petugas_pendaftaran/c_pasien/tambah_pasien')?>" class="thumbnail">
								<img src="<?php echo base_url() ?>assets/img/addpas.png" alt="" width="100px" height="20%">
                                
							</a>
						</li>
			</ul> 
     


     <div class="panel-body">	
<!--<a button type="button" href="<?php echo site_url ('petugas_pendaftaran/c_pasien/tambah_pasien')?>" role="button">-->
<!--<button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-print"></span> Print</button></a>-->




		<form class="navbar-form navbar-right" action="<?php echo site_url('petugas_pendaftaran/c_pasien/search')?>" method="post">
		<select class="form-control" name="jeniscari">
           <option value="id_pasien"> id pasien </option>
         <option value="nama_pasien"> nama pasien </option>
         <option value="jk"> Jenis Kelamin </option>
         <option value="alamat"> alamat </option>
         <option value="tgl_lahir"> tgl_lahir </option>
         <option value="telp"> telp </option>
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
				<th id="judul">id pasien</th>
				<th id="judul">nama pasien</td>
				<th id="judul">jk</td>
				<th id="judul">alamat </th>	
				<th id="judul">tgl_lahir</th>	
				<th id="judul">telp</th>

				<th id="judul" colspan="2">Action</th>
			</tr>
		  </thead>

			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->id_pasien; ?></td>
				<td class="hd"><?php echo $a->nama_pasien; ?></td>
				<td class="hd"><?php echo $a->jk; ?></td>
				<td class="hd"><?php echo $a->alamat; ?></td>
				<td class="hd"><?php echo $a->tgl_lahir; ?></td>
				<td class="hd"><?php echo $a->telp; ?></td>

	            <td>
		<a button type="button" class="btn btn-success" href="<?php echo site_url('petugas_pendaftaran/c_pendaftaran/mulai_pendaftaran/');?>/<?php echo $a->id_pasien;?>" role="button"><span class="glyphicon glyphicon-circle-arrow-right"></span> Daftar </a><br><br>
			    </td>		
			    	            <td>
		<a button type="button" class="btn btn-info" href="<?php echo site_url('petugas_pendaftaran/c_pasien/cetak_kartu');?>/<?php echo $a->id_pasien;?>" role="button"><span class="glyphicon glyphicon-circle-arrow-right"></span> cetak kartu </a><br><br>
			    </td>			
	
			
			</tr>
			<?php } ?>
		</table>		
	</div>
	<nav>
       <?php  ?>
	</nav>
</div>	
								
		

</body>

</html>


 