<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css"/>
</head>
	<body>
		<center>
    <canvas id="myCanvas" width="600" height="400"></canvas>
    <script>
            
              var canvas = document.getElementById('myCanvas');
              var context = canvas.getContext('2d');
              var imageObj = new Image();
              var imageObj2 = new Image();

              imageObj.onload = function() {
                context.drawImage(imageObj, 0, 0);
                context.font = "bold 17pt Segoe UI";
                context.fillStyle = "aqua";
                context.fillText("RUMAH SAKIT RAWAT JALAN", 70, 60);
                context.font = "14pt Segoe UI";
                context.fillStyle = "white";
                context.fillText("ID PASIEN          : <?php echo $query->id_pasien; ?>", 190, 155);
                context.font = "14pt Segoe UI";
                context.fillText("NAMA                : <?php echo $query->nama_pasien;?>", 190, 180);
				context.font = "14pt Segoe UI";
                context.fillText("Tgl LAHIR           : <?php echo $query->tgl_lahir;?>", 190, 200);
				context.font = "14pt Segoe UI";
                context.fillText("JENIS KELAMIN : <?php echo $query->jk;?>", 190, 220);
				context.font = "14pt Segoe UI";
                context.fillText("ALAMAT             : <?php echo $query->alamat;?>", 190, 240);
				context.font = "14pt Segoe UI";
                context.fillText("NO TELP             : <?php echo $query->telp;?>", 190, 260);


                
              };
              imageObj.src = '<?php echo base_url("/assets/img/template_kartu2.png"); ?>';
              
              
            </script>

  </body>
</html>


