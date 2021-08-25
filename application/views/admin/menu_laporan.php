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
 background-color: #76b4ff;;
 }
 
.navbar-brand{
 background:blue;
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
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
   		</form>
		<ul class="nav menu">
			<li class="active"><a href=""> Dashboard </a></li>
			<li><a href="<?php echo site_url('admin/c_dokter/view_dokter'); ?>">Data Dokter</a></li>
			<li><a href="<?php echo site_url('c_pasien/view_pasien'); ?>">Data Pasien</a></li>
			<li><a href="<?php echo site_url('c_obat/view_obat'); ?>">Data Obat</a></li>
			<li><a href="<?php echo site_url('c_petugas/view_petugas'); ?>">Data petugas</a></li>
			<li><a href="forms.html">Jadwal&amp;</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo site_url('c_login/logout'); ?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Iconsa</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
		
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
	

     
<div class="panel-body">             
		<div class="table-responsive">

	<form action="<?php echo site_url('laporankunjungan_view')?>" method="post">
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
		<!-- sampai sini -->
		
</div>		
		
			</td>
		</tr>
		
		</tbody>
		</table>
		</div>
		
		</div>
		</div>

  </div>



 		
			
</body>

</html>

