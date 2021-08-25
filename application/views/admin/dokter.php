<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dokter</title>


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
   		
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo site_url('admin/Admin'); ?>"> Dashboard </a></li>
			<li  class="active"><a href="<?php echo site_url('admin/c_dokter/view_dokter'); ?>">Data Dokter</a></li>
			<li><a href="<?php echo site_url('c_pasien/view_pasien'); ?>">Data Pasien</a></li>
			<li><a href="<?php echo site_url('c_obat/view_obat'); ?>">Data Obat</a></li>
			<li><a href="<?php echo site_url('c_petugas/view_petugas'); ?>">Data Petugas</a></li>
			<li><a href="<?php echo site_url('c_resep/view_resep'); ?>">Data Resep</a></li>
			<li><a href="forms.html">Jadwal&amp;</a></li>
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
					<div class="panel-heading">Data Dokter</div>





	<div class="panel-body">
		<li class="span3">
							<a href="<?php echo site_url ('admin/c_dokter/tambah_dokter')?>">
								<img src="<?php echo base_url() ?>assets/img/plus.png" width="70px">
                                
							</a>
						


		<!--<a button type="button" class="btn btn-success" href="<?php echo site_url ('admin/c_dokter/tambah_dokter')?>" role="button"><span class="glyphicon glyphicon-plus"> Tambah </span> </a>-->

		<form class="navbar-form navbar-right" action="<?php echo site_url('admin/c_dokter/search')?>" method="post" enctype="multipart/form-data">
		<select class="form-control" name="jeniscari">
           <option value="id_dokter"> id dokter </option>
         <option value="id_poli"> id poli </option>
         <option value="nama_dokter"> nama dokter </option>
         <option value="jk"> jk dokter </option>
         <option value="tgl_lahir"> tgl lahir </option>
         <option value="alamat"> alamat </option>
         <option value="no_telp"> no telepon </option>
		 </select>

		<input type="text" name="tekscari" class="form-control" placeholder="Search">


		 <button type="submit" class="btn btn-primary"> Submit </button>
		</form>
		</li>
	</div> 

 <div class="table table-responsive">
  				<table class="table table-hover">	
  				<thead>
    				<tr class="success">

				<th id="judul">Id dokter</td>
				<th id="judul">Id poli</td>
				<th id="judul">nama dokter</td>
				<th id="judul">jk dokter</th>
				<th id="judul">tgl lahir </th>	
				<th id="judul">alamat</th>
				<th id="judul">No_telp </th>	
				<th id="judul">foto</th>
				<th id="judul" colspan="2">Action</th>
			</tr>
		</thead>

     
			<?php foreach($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->id_dokter; ?></td>
				<td class="hd"><?php echo $a->id_poli; ?></td>
				<td class="hd"><?php echo $a->nama_dokter; ?></td>
				<td class="hd"><?php echo $a->jk_dokter; ?></td>
				<td class="hd"><?php echo $a->tgl_lahir; ?></td>
				<td class="hd"><?php echo $a->alamat; ?></td>
				<td class="hd"><?php echo $a->no_telp; ?></td>
				<td class="hd"><img src="<?php echo base_url();?>image/upload/fotodokter/<?php echo $a->foto;?>" style="max-width:200px; max-height:150px;"></td>
			
				<td class="hd">
					<a class="btn btn-warning" href="<?php echo site_url ('admin/c_dokter/edit_dokter/'.$a->id_dokter)?>"title="Edit pelanggan ini" onclick="return confirm('Apakah Anda yakin akan mengedit data ini?');"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
				<td class="hd">
				    <a class="btn btn-danger" href="<?php echo site_url ('admin/c_dokter/proses_delete_dokter/'.$a->id_dokter)?>"title="Hapus pelanggan ini" onclick="return confirm('Apakah Anda yakin akan hapus data ini?');"><span class="glyphicon glyphicon-trash"></span> Hapus</a></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>

</table>
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
