<html>
 <head>
  <title> Halaman utama </title>
  <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" />
 </head>
 <style>
 
 .header {
 	width: 100%;
 	height: 65px;
 	background-color: red;
 }

 .btn-info{
    float: center;
 }

 </style>

<body>

<div class="header">
<p> Halman utama </p>

<a button type="button" class="btn btn-info" href="<?php echo site_url ('c_pendaftaran')?>" role="button"> Tambah </a>
<a button type="button" class="btn btn-info" href="<?php echo site_url ('Login')?>" role="button"> Login </a>
</div>


<div class="menu"> 
<a href="<?php echo site_url('c_pasien/view_pasien'); ?>"> Pasien </a>  <br>
<a href="<?php echo site_url('c_laboratorium/view_laboratorium'); ?>"> Laboratorium </a>  <br>
<a href="<?php echo site_url('c_daftar_detail/view_daftar_detail'); ?>"> Detail </a>  <br>
<a href="<?php echo site_url('c_dokter/view_dokter'); ?>"> Dokter </a>  <br>
<a href="<?php echo site_url('c_hasil_lab/view_hasil_lab'); ?>"> Hasil Laboratorium </a>  <br>
<a href="<?php echo site_url('c_kunjungan/view_kunjungan'); ?>"> Kunjungan </a>  <br>
<a href="<?php echo site_url('c_obat/view_obat'); ?>"> Obat-obatan </a> <br>
<a href="<?php echo site_url('c_pembayaran/view_pembayaran'); ?>"> Pembayaran </a> <br>
<a href="<?php echo site_url('c_petugas/view_petugas'); ?>"> Petugas </a> <br>
<a href="<?php echo site_url('c_poliklinik/view_poliklinik'); ?>"> Poliklinik </a> <br>
<a href="<?php echo site_url('c_rekammedis/view_rekammedis'); ?>"> Rekam Medis </a> <br>
<a href="<?php echo site_url('c_resep/view_resep'); ?>"> Resep </a> <br>
<a href="<?php echo site_url('c_tindakan/view_tindakan'); ?>"> Tindakan </a> <br>
</div>


<script type="text/javascript" src="<?php echo base_url() ?> assets/bootstrap/js/jquery.min.js"> </script>
	<script type="text/javascript" src="<?php echo base_url() ?> assets/bootstrap/js/bootstrap.min.js"> </script>
</body>
</html>