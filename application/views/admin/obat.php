<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Obat</title>


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
			<li><a href="<?php echo site_url('c_pasien/view_pasien'); ?>">Data Pasien</a></li>
			<li class="active"><a href="<?php echo site_url('c_obat/view_obat'); ?>">Data Obat</a></li>
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
					<div class="panel-heading">Data Obat</div>
	

     <div class="panel-body">

		<li class="span3">
							<a href="<?php echo site_url ('c_obat/tambah_obat')?>">
								<img src="<?php echo base_url() ?>assets/img/plus.png" width="70px">   
							</a>

		
	<form class="navbar-form navbar-right" action="<?php echo site_url('c_obat/search')?>" method="post">
		<select class="form-control" name="jeniscari">
           <option value="id_obat"> id obat </option>
           <option value="id_jenis"> id jenis </option>
           <option value="nama_obat"> nama obat </option>
           <option value="kegunaan"> kegunaan </option>
           <option value="harga"> harga </option>
           <option value="satuan"> satuan </option>
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
				<th id="judul">id Obat</td>
				<th id="judul">id jenis</td>
				<th id="judul">Nama Obat</td>
				<th id="judul">kegunaan</td>
				<th id="judul">harga</th>
				<th id="judul">satuan </th>	
			
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->id_obat; ?></td>
				<td class="hd"><?php echo $a->id_jenis; ?></td>
				<td class="hd"><?php echo $a->nama_obat; ?></td>
				<td class="hd"><?php echo $a->kegunaan; ?></td>
				<td class="hd"><?php echo $a->harga; ?></td>
				<td class="hd"><?php echo $a->satuan; ?></td>
				
				<td>
					<a class="btn btn-warning" href="<?php echo site_url ('c_obat/edit_obat/'.$a->id_obat)?>"> <span class="glyphicon glyphicon-edit"></span> Edit </a></td>
				<td>
				<a class="btn btn-danger" href="<?php echo site_url ('c_obat/proses_delete_obat/'.$a->id_obat)?>"><span class="glyphicon glyphicon-trash"></span> Hapus </a></td>
			</tr>
			<?php } ?>
		</table>		
	</div>
</div>	
								
		
			
			 
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

