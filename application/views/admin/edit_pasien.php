<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Pasien</title>


<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" />
<!--<link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet" />-->
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
	width: 1177px;
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
				<a class="navbar-brand" href="#"><span>RS</span>ADMIN</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
		
	<div class="col-sm-15 col-sm-offset-9 col-lg-10 col-lg-offset-1 main">			

					
		<div class="row">
			<div class="col-lg-11">
				<div class="panel panel-default">
					<div class="panel-heading">Edit Dokter</div>
					<br><br><br>

			     <form method="post" class="form-horizontal" role="form" action="<?php echo site_url('c_pasien/proses_edit_pasien'); ?>">
			
			<?php foreach($daftar->result() as $a)	{?>		 
                  <div class="form-group">
                  	<label class="col-sm-2 control-label">Id pasien</label>
                  	 <div class="col-sm-4">
 					    <input type="text" name="id_pasien" value="<?php echo $a->id_pasien;?>" placeholder="id pasien" class="form-control" />  
					 </div>
				   </div>

                  <div class="form-group">
                  	<label class="col-sm-2 control-label">Nama pasien</label>
                  	 <div class="col-sm-4">
						<input type="text" name="nama_pasien" value="<?php echo $a->nama_pasien;?>" class="form-control" />
					  </div>
				  </div>
					

                  <div class="form-group">
                  	<label class="col-sm-2 control-label"> Tanggal lahir</label>
                  	 <div class="col-sm-4">
						<input type="text" name="tgl_lahir" value="<?php echo $a->tgl_lahir;?>" class="form-control" />
					  </div>
				  </div>

                  <div class="form-group">
                  	<label class="col-sm-2 control-label">Jk pasien</label>
                  	 <div class="col-sm-4">
						<input type="radio" name="jk" value="Laki-laki"> Laki-laki
                     <input type="radio" name="jk" value="Perempuan"> Perempuan <br>
					  </div>														
				  </div>

                  <div class="form-group">
                  	<label class="col-sm-2 control-label"> Alamat</label>
                  	 <div class="col-sm-4">
					<input type="text" name="alamat" value="<?php echo $a->alamat;?>" placeholder="waktu" class="form-control" />
                     </div>
                  </div>
  

                  <div class="form-group">
                  	<label class="col-sm-2 control-label">telp</label>
                  	 <div class="col-sm-4">
					   <input type="text" name="telp" value="<?php echo $a->telp;?>" placeholder="alamat" class="form-control" />
					 </div>
				  </div>

                 

			     <div class="form-group">
                  	<label class="col-sm-2 control-label"></label>
                  	 <div class="col-sm-4">
						<input type="submit" name="simapn" value="klik" class="submitButton">
					<a href="<?php echo site_url ('c_pasien');?>"></a>
                      </div>
                 </div><br><br>			
             <?php } ?>
			</form>



       

				</div>
			</div>
		</div><!--/.row-->
	</div>
		
			
</body>

</html>










<!--<html>
	<head>
	<title><?php echo"$judul"; ?></title>
		<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
	</head>
	<body>
		<h1><?php echo"$judul";?></h1>
		<hr>
		<fieldset>  
			<legend><h3>Update dokter</h3></legend>
			<form method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/c_dokter/proses_edit_dokter'); ?>">
				<?php foreach($daftar->result() as $a):?>
					<input type="text" name="id_dokter" value="<?php echo $a->id_dokter;?>"/>
					<input type="text" name="id_poli" value="<?php echo $a->id_poli;?>"/>
					<input type="text" name="tgl_lahir" value="<?php echo $a->tgl_lahir;?>"/>
					<input type="text" name="nama_dokter" value="<?php echo $a->nama_dokter;?>"/>
					<input type="text" name="jk_dokter" value="<?php echo $a->jk_dokter;?>"/>
					<input type="text" name="alamat" value="<?php echo $a->alamat;?>"/>
					<input type="text" name="no_telp" value="<?php echo $a->no_telp;?>"/>
					<input type="file" name="foto" />
					
					<input type="submit" name="simapn" value="Update" class="submitButton">
					<a href="<?php echo site_url ('admin/c_dokter');?>">[ Home ]</a></td>
				<?php endforeach; ?>
			</form>
		</fieldset>
		<hr>
		
	</body>
</html>-->







<!--<html>
	<head>
	<title>Edit pasien</title>
		<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
	</head>
	<body>
		
		<hr>
		<fieldset>  
			<legend><h3>Update pasien</h3></legend>
			<form method="post" enctype="multipart/form-data" action="<?php echo site_url('c_pasien/proses_edit_pasien'); ?>">
				<?php foreach($daftar->result() as $a):?>
					<input type="text" name="id_pasien" value="<?php echo $a->id_pasien;?>"/>
					<input type="text" name="nama_pasien" value="<?php echo $a->nama_pasien;?>"/>
					<input type="text" name="tgl_lahir" value="<?php echo $a->tgl_lahir;?>"/>
					<input type="text" name="jk" value="<?php echo $a->jk;?>"/>
					<input type="text" name="alamat" value="<?php echo $a->alamat;?>"/>
					<input type="text" name="telp" value="<?php echo $a->telp;?>"/>
					
					<input type="submit" name="simapn" value="Update" class="submitButton">
					<a href="<?php echo site_url ('c_pasien');?>">[ Home ]</a></td>
				<?php endforeach; ?>
			</form>
		</fieldset>
		<hr>
		
	</body>
</html>-->
