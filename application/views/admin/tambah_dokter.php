<html>
	<head>
	<title>Tambah Dokter</title>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" />
<!--<link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet" />-->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/datepicker3.css" />
	
<link rel="stylesheet" href="<?php echo base_url() ?>css/styles.css" />

<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #4CAF50;
}

.container {
  max-width: 600px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}



#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 0px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}


fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}






</style>
	</head>
	<body>
	

<div class="container">  
  <form id="contact" action="" method="post">  
  
	<form method="POST" enctype="multipart/form-data" action="<?php echo site_url('admin/c_dokter/proses_tambah_dokter'); ?>">
		

    <div>
        <span><label>ID DOKTER</label></span>
        <span><input type="text" value="<?php echo $id;?>" disabled/>         
          <input type="hidden" name="id_dokter" value = "<?php echo $id; ?>"/></span>
    </div>
			
    <div>
        <span><label>ID POLI</label></span>
        <span><input type="text" class="form-control" name="id_poli"/></span>
    </div>

    <div>
        <span><label>NAMA DOKTER</label></span>
        <span><input type="text" class="form-control" name="nama_dokter"/></span>
    </div>
					
     <div>
        <span><label>JENIS KELAMIN</label></span>
        <span> <input type="text" class="form-control" name="jk_dokter"/></span>
    </div> 
         
    <div>
        <span><label>TANGGAL LAHIR</label></span>
        <span> <input type="text" class="form-control" name="tgl_lahir"/></span>
    </div>     			
       
		 <div>
        <span><label>ALAMAT</label></span>
        <span><input type="text" class="form-control" name="alamat"/></span>
    </div>  		
				
    <div>
        <span><label>NO TELEPON</label></span>
        <span><input type="text" class="form-control" name="no_telp"/></span>
    </div>     
				
     <div>
        <span><label>FOTO</label></span>
        <span><input type="file" class="form-control" name="foto"</span>
    </div>         
		
       <div>
				 <span><input type="submit" name="simapn" value="Simpan" class="submitButton"></span>
       </div>

				<a href="<?php echo site_url ('admin/c_dokter');?>">[ Home ]</a>
			</form>
    </form>
  </div>
		</fieldset>

		<p>
			Cek My Info : Demo CRUD - Codeigniter | 2014
		</p>

		<script src="<?= base_url()?>js/jquery-1.11.1.min.js"></script>
	<script src="<?= base_url()?>js/bootstrap.min.js"></script>
	
	</body>
</html>



<!--<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Colorlib Contact Form</h3>
    <h4>Contact us for custom quote</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
  </form>
</div>-->
