<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Akses Kasir</title>
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
				<a class="navbar-brand" href="#"><span>RS</span>KASIR</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div class="col-sm-15 col-sm-offset-9 col-lg-10 col-lg-offset-1 main">
		<div class="row">
			<div class="col-lg-11">
				<div class="panel panel-default">
					<div class="panel-heading">Pembayaran poli</div>
					<br><br><br>

						<form method="post" class="form-horizontal" role="form" action="<?php echo site_url('kasir/c_kasir/proses_daftar_pembayaran'); ?>">
							<div class="form-group">
								<label class="col-sm-2 control-label">id_bayar</label>
								<div class="col-sm-4">
									<input type="text" value="<?php echo $id;?>" disabled/>
									<input type="hidden" name="id_bayar" value = "<?php echo $id ?>"/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">id_daftar</label>
								<div class="col-sm-4">
									<select name="id_daftar">
									<?php
										foreach($id_daftar as $a):
											$res  = "<option ";
											$res .= "value='".$a->id_daftar."'>";
											$res .= $a->id_daftar;
											$res .='</option>';

											echo $res;
											endforeach;
											?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label"> id_petugas</label>
								<div class="col-sm-4">
									<input type="text" name="id_petugas" placeholder="id_petugas" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">jenis biaya</label>
								<div class="col-sm-4">
									<input type="text" name="jenis_biaya" value="poli" placeholder="jenis_biaya" readonly/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">biaya</label>
								<div class="col-sm-4">
									<input type="text" name="biaya" placeholder="biaya" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">waktu</label>
								<div class="col-sm-4">
									<input type="text" name="waktu" placeholder="waktu" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">no antrian</label>
								<div class="col-sm-4">
									<input type="text" name="no_antrian" placeholder="no_antrian"/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label"></label>
								<div class="col-sm-4">
									<input type="submit" name="simapn" value="klik" class="submitButton">
									<a href="<?php echo site_url ('apoteker/Apoteker/view_resep');?>"></a>
								</div>
							</div><br><br>
					</form>
				</div>
			</div>
		</div><!--/.row-->
	</div>
</body>
</html>