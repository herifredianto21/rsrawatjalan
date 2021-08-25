<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>input rekam medis</title>
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
				<a class="navbar-brand" href="#"><span>RS</span>DOKTER</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>


	<div class="col-sm-15 col-sm-offset-9 col-lg-10 col-lg-offset-1 main">
		<div class="row">
			<div class="col-lg-11">
				<div class="panel panel-default">
					<div class="panel-heading">Input rekam medis</div>
						<br><br><br>
						<form method="post" class="form-horizontal" role="form" action="<?php echo site_url('dokter/c_rmedis/proses_rekammedis'); ?>">
							<div class="form-group">
								<label class="col-sm-2 control-label">Id Rekam</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" value="<?php echo $id;?>" disabled/>
									<input type="hidden" name="id_rekam" value = "<?php echo $id; ?>"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Id Dokter</label>
								<div class="col-sm-4">
									<select name="id_dokter" class="form-control">
										<?php
											foreach($id_dokter as $row):
											$a = "<option ";
											$a .=  "value='".$row->id_dokter."'>";
											$a .= $row->nama_dokter;
											$a .= '</option>';

											echo $a;
											endforeach;
										?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Id Daftar</label>
								<div class="col-sm-4">
									<select name="id_daftar" class="form-control">
										<?php
											foreach($id_daftar as $row):
											$a = "<option ";
											$a .=  "value='".$row->id_daftar."'>";
											$a .= $row->id_daftar;
											$a .= '</option>';

											echo $a;
											endforeach;
										?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Id Pasien</label>
								<div class="col-sm-4">
									<select name="id_pasien" class="form-control">
										<?php
											foreach($id_pasien as $row):
											$a = "<option ";
											$a .=  "value='".$row->id_pasien."'>";
											$a .= $row->nama_pasien;
											$a .= '</option>';

											echo $a;
											endforeach;
										?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label"> waktu</label>
								<div class="col-sm-4">
								<input type="text" name="waktu" placeholder="waktu" class="form-control" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">keluhan</label>
								<div class="col-sm-4">
									<input type="text" name="keluhan" placeholder="keluhan" class="form-control" />
								</div>
							</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">gejala</label>
							<div class="col-sm-4">
								<input type="text" name="gejala" placeholder="gejala" class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Diagnosa</label>
							<div class="col-sm-4">
							<input type="text" name="diagnosa" placeholder="diagnosa" class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Penanganan</label>
							<div class="col-sm-3">
								<textarea class="form-control" name="penanganan" type="text" rows="5"> </textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label"></label>
							<div class="col-sm-4">
								<input class="btn btn-success" type="submit" name="simapn" value="klik" class="submitButton">
								<a href="<?php echo site_url ('dokter/c_rmedis');?>"></a>
							</div>
						</div><br><br>
					</form>
				</div>
			</div>
		</div><!--/.row-->
	</div>
</body>
</html>