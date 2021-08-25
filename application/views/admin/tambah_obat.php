<html>
  <head>
  <title>Tambah Obat</title>

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
<form id="contact" method="post"  enctype="multipart/form-data" action="<?php echo site_url('c_obat/proses_tambah_obat'); ?>">
   

    <div>
        <span><label>ID OBAT</label></span>
        <span><input type="text" class="form-control" name="id_pasien"/></span>
    </div>
      
    <div>
        <span><label>ID JENIS</label></span>
        <select name="id_jenis" />
            <?php
              foreach($id_jenis as $row):
              $a = "<option ";
              $a .=  "value='".$row->id_jenis."'>";
              $a .= $row->nama_jenis;
              $a .= '</option>';

              echo $a;
              endforeach;
            ?>
          </select>
    </div>

    <div>
        <span><label>NAMA OBAT</label></span>
        <span><input type="text" class="form-control" name="nama_obat"/></span>
    </div>
          
     <div>
        <span><label>KEGUNAAN</label></span>
        <span> <input type="text" class="form-control" name="kegunaan"/></span>
    </div>           
       
     <div>
        <span><label>HARGA</label></span>
        <span><input type="text" class="form-control" name="harga"/></span>
    </div>      
        
    <div>
        <span><label>SATUAN</label></span>
        <span><input type="text" class="form-control" name="satuan"/></span>
    </div>     
        
  
       <div>
         <span><input type="submit" name="simapn" value="Simpan" class="submitButton"></span>
       </div>

        <a href="<?php echo site_url ('admin/c_pasien');?>">[ Home ]</a>
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

