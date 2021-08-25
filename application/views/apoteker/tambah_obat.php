<!DOCTYPE html>
<htm lang>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Input resep obat</title>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" />
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
	width: 1189px;
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
				<a class="navbar-brand" href="#"><span>RS</span>APOTEKER</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div class="col-sm-15 col-sm-offset-9 col-lg-10 col-lg-offset-1 main">
		<div class="row">
			<div class="col-lg-11">
				<div class="panel panel-default">
					<div class="panel-heading">Input Resep</div>
					<br><br><br>

						<form method="post" class="form-horizontal" role="form" action="<?php echo site_url('apoteker/Apoteker/proses_tambah_resep'); ?>">
							<div class="form-group">
								<label class="col-sm-2 control-label">id_obat</label>
								<div class="col-sm-4">
								<input type="text" value="<?php echo $id;?>" disabled/>
								<input type="hidden" name="id_obat" value = "<?php echo $id; ?>"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">id_rekam</label>
								<div class="col-sm-4">
									<select name="id_rekam">
									<?php
										foreach($id_rekam as $row):
										$a = "<option ";
										$a .=  "value='".$row->id_rekam."'>";
										$a .= $row->id_rekam;
										$a .= '</option>';

										echo $a;
										endforeach;
									?>
								</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label"> id_petugas</label>
								<div class="col-sm-4">
								<select name="id_petugas">
									<?php
										foreach($id_petugas as $row):
										$a = "<option ";
										$a .=  "value='".$row->id_petugas."'>";
										$a .= $row->nama_petugas;
										$a .= '</option>';

										echo $a;
										endforeach;
									?>
								</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">waktu</label>
								<div class="col-sm-4">
								<input type="text" name="waktu" placeholder="waktu" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">keterangan</label>
								<div class="col-sm-4">
								<input type="text" name="keterangan" placeholder="keterangan" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label"></label>
								<div class="col-sm-4">
									<input type="submit" name="simapn" value="klik" class="submitButton">
								<a href="<?php echo site_url ('apoteker/Apoteker');?>">[ Home ]</a></td>
								</div>
							</div><br><br>

						</form>
					</div>
				</div>
			</div><!--/.row-->
		</div>
</body>
</html>