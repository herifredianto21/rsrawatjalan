<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pasien</title>


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
				<a class="navbar-brand" href="#"><span>RS</span>Admin</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<div class="up">
				
			</div>
   		</form>
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo site_url('admin/Admin'); ?>"> Dashboard </a></li>
			<li><a href="<?php echo site_url('admin/c_dokter/view_dokter'); ?>">Data Dokter</a></li>
			<li class="active"><a href="<?php echo site_url('c_pasien/view_pasien'); ?>">Data Pasien</a></li>
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
				<div class="panel panel-default">
					<div class="panel-heading">Data Pasien</div>
	

     <div class="panel-body">
     	
		<li class="span3">
							<a href="<?php echo site_url ('c_pasien/tambah_pasien')?>">
								<img src="<?php echo base_url() ?>assets/img/plus.png" width="70px">
                                
							</a>
						

     	<!--<a button type="button" class="btn btn-success" href="<?php echo site_url ('c_pasien/tambah_pasien')?>" role="button"> Tambah </a>-->
		


		<form class="navbar-form navbar-right" action="<?php echo site_url('c_pasien/search')?>" method="post">
		<select class="form-control" name="jeniscari">
           <option value="id_pasien"> id pasien </option>
         <option value="nama_pasien"> nama pasien </option>
         <option value="jk"> Jenis Kelamin </option>
         <option value="alamat"> alamat </option>
         <option value="tgl_lahir"> tgl_lahir </option>
         <option value="telp"> telp </option>
		 </select>

		<input type="text" name="tekscari" class="form-control" placeholder="Search" />


		 <button type="submit" class="btn btn-primary"> Submit </button>
		</form>
	</li>
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
				<a class="btn btn-warning" href="<?php echo site_url ('c_pasien/edit_pasien/'.$a->id_pasien)?>"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
				<td>
				<a class="btn btn-danger" href="<?php echo site_url ('c_pasien/proses_delete_pasien/'.$a->id_pasien)?>"><span class="glyphicon glyphicon-trash"></span> Hapus </a></td>
				
			</tr>
			<?php } ?>
		</table>		
	</div>
</div>	
								
		
			
</body>

</html>

