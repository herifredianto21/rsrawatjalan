
<!DOCTYPE html>
<?php 
       foreach($id_pasien as $rows):
       $id_pasien = $rows->id_pasien;
       $nama_pasien = $rows->nama_pasien;
       endforeach;
       ?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>input rekam medis</title>


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
				<a class="navbar-brand" href="#"><span>RS</span>PENDAFTARAN</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
		
	<div class="col-sm-15 col-sm-offset-9 col-lg-10 col-lg-offset-1 main">			
		
		<div class="row">
			<div class="col-lg-11">
				<div class="panel panel-default">
					<div class="panel-heading">Tambah Pasien</div>
					<br><br><br>

			     <form method="post" class="form-horizontal" role="form" action="<?php echo site_url('petugas_pendaftaran/c_pasien/proses_tambah_pasien');?>">
					 
                  <div class="form-group">
                  	<label class="col-sm-2 control-label">Id Pasien</label>
                  	 <div class="col-sm-4">
 					<input type="text" value="<?php echo $id;?>" disabled/>         
                    <input type="hidden" name="id_pasien" value = "<?php echo $id; ?>"/>
					 </div>
				   </div>

					<div class="form-group">
                  	<label class="col-sm-2 control-label">nama pasien</label>
                  	 <div class="col-sm-4">
                  	    <input type="text" name="nama_pasien" placeholder="" />
					  </div>
				  </div>	

				   <div class="form-grup">
		              <label class="col-sm-2 control-label" for="gender">Jenis kelamin</label>
		                      <div>
		                           <div class="radio">
										<label>
											&nbsp;&nbsp;<input type="radio" name="jk" value="P" /> perempuan
										<br>
											&nbsp;&nbsp;<input type="radio" name="jk" value="L" /> laki-laki
										</label>
									</div>
		                     </div>
		         </div>	
		         <br>		  


		         <div class="form-group">
                  	<label class="col-sm-2 control-label">Alamat</label>
                  	 <div class="col-sm-4">
                  	    <input type="text" name="alamat" />
					  </div>
				  </div>
   

				  <div class="form-group">
                  	<label class="col-sm-2 control-label">Tanggal Lahir</label>
                  	 <div class="col-sm-4">
                  	    <input type="date" name="tgl_lahir" />
					  </div>
				  </div>

				   <div class="form-group">
                  	<label class="col-sm-2 control-label">No Telepon</label>
                  	 <div class="col-sm-4">
                  	    <input type="text" name="telp" />
					  </div>
				  </div>



             


			     <div class="form-group">
                  	<label class="col-sm-2 control-label"></label>
                  	 <div class="col-sm-4">
						<input type="submit" name="simapn" value="Simpan" class="submitButton">
				<a href="<?php echo site_url ('petugas_pendaftaran/petugas_pendaftaran/view_pasien');?>">Kembali</a>
                      </div>
                 </div><br><br>			

			</form>



       

				</div>
			</div>
		</div><!--/.row-->
	</div>
		
			
</body>

</html>










<!--<!DOCTYPE html>
<?php 
       foreach($id_pasien as $rows):
       	$id_pasien = $rows->id_pasien;
       $nama_pasien = $rows->nama_pasien;
       endforeach;
       ?>
<html>
	<head>
	<title>daftar</title>
		<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<h1>Pendaftaran pasien</h1>	
		<hr>
		<fieldset>  
			<legend><h3>Update daftar Pasien</h3></legend>
			<form method="post" action="<?php echo site_url('petugas_pendaftaran/c_pendaftaran/proses_daftar_pasien'); ?>">
					<input type="text" value="<?php echo $id;?>" disabled/>					
					<input type="hidden" name="id_daftar" value = "<?php echo $id; ?>"/>

					<input type="text" name="id_petugas" placeholder="id petugas" />
					<!--<input type="hidden" name="id_petugas" value="<?= $id_petugas?>">-->
			<!--		<input type="text" value="<?php echo $id_pasien; ?>" name="id_pasien" readonly>

                     <input type="radio" id="tipe_pasien_baru" name="type_pasien" value="1" checked> Pasien baru
                     <input type="radio" id="tipe_pasien_lama" name="type_pasien" value="0"> Pasien lama <br>

						
					<select name="id_poli" />
						<?php
							foreach($id_poli as $row):
							$a = "<option ";
							$a .=  "value='".$row->id_poli."'>";
							$a .= $row->nama_poli;
							$a .= '</option>';

							echo $a;
							endforeach;
						?>
					</select>



                    <input type="text" name="id_dokter" placeholder="id_dokter" />
					<input type="text"  name="waktu" placeholder="waktu" />
					
					
						<input type="submit" name="simapn" value="Daftar" class="submitButton">
					<a href="<?php echo site_url ('petugas_pendaftaran/c_pendaftaran');?>">[ Home ]</a></td>
			</form>
		</fieldset>
		<hr>
	</body>
</html>-->













<!--<html>
	<head>
	<title>Tambah Pasien</title>
<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--<link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet" />-->
<!--<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/datepicker3.css" />
	
<link rel="stylesheet" href="<?php echo base_url() ?>css/styles.css" />
<style>

body {
  color: #ffff;
  background: #0099FF;
}

.container {
  max-width: 400px;
  width: 500%;
  margin: 0 auto;
  position: relative;
}

</style>
	</head>
	<body>	
    <h1>Tambah pasien</h1> 
		<hr> 
<div class="container">    
	<form method="post" action="<?php echo site_url('petugas_pendaftaran/c_pasien/proses_tambah_pasien');?>">
			
        <input type="text" value="<?php echo $id;?>" disabled/>         
          <input type="hidden" name="id_pasien" value = "<?php echo $id; ?>"/>

          <div>
		      <span><label> Nama pasien</label></span>
			  <span><input type="text" class="form-control" tabindex="2" required autofocus name="nama_pasien" placeholder="nama_pasien"/></span>
		 </div>
				
		<div>
			  <span><label>tanggal lahir</label></span>
			  <span><input type="date" class="form-control" name="tgl_lahir" /></span>
		</div>
				
		<div class="form-grup">
		 <label for="gender">Jenis kelamin</label>
		 <div>
		   <div class="radio">
		     <label>
			  <input type="radio" name="jk" value="P" /> perempuan
			  </label>
		  </div>
		  <div class="radio">
		     <label>
			  <input type="radio" name="jk" value="L" /> laki-laki
			  </label>
		  </div>
		 </div>
		</div>
	
	<br>	
		<div>
				<span><label>Alamat</label></span>
				<span><input type="text" class="form-control" name="alamat" placeholder="alamat"/></span>
		</div>		
		
		<div>
				<span><label>No telepon</label></span><input type="text" class="form-control" name="telp" placeholder="telp"/></span>
		</div>
				
				<input type="submit" name="simapn" value="Simpan" class="submitButton">
				<a href="<?php echo site_url ('petugas_pendaftaran/c_pasien');?>">[ Home ]</a>
			</form>
			</div>
		</fieldset>
		<hr>
	
	</body>
</html>

