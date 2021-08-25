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

    <canvas id="myCanvas" width="300" height="300"></canvas>
    <script>
            
              var canvas = document.getElementById('myCanvas');
              var context = canvas.getContext('2d');
              var imageObj = new Image();
              var imageObj2 = new Image();

              imageObj.onload = function() {
                context.drawImage(imageObj, 0, 0);
                context.font = "bold 8pt Segoe UI";
                context.fillStyle = "black";
                context.fillText("RS Rawat Jalan", 50, 60);
                context.font = "100pt Segoe UI";
                context.fillStyle = "black";
                context.fillText(<?php echo $query->no_antrian; ?>, 60, 180);
                context.font = "12pt Segoe UI";
                context.fillText(<?php echo  $query->id_daftar; ?>, 80, 220);

                
              };
              imageObj.src = '<?php echo base_url("/assets/img/tamplate_antrian.png"); ?>';
              
              
            </script>

  </body>
</html>