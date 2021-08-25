<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" />
    <title>Login</title>
    <style>

.login {
  width: 380px;
  margin-top: 0px;
  margin-left: 60px;
  padding-top: 10px;
  padding-left: 90px;

}


.bg{
 background-image: url(../assets/img/medical2.jpg);
 filter: alpha(opacity=70);
   -moz-opacity: 0.6;
   opacity: 0.6;
   position: fixed;

 }

.dokter{
  width: 380px;
  margin-top: 20px;
  margin-left: 50px;
  padding-top: 210px;
  padding-left: 150px;
 }



  cover {
    position: fixed;
    opacity: 1;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 1;
}



container{
  background-color: #6666FF;
}


    </style>
</head>
<body class="bg">
<div class="dokter"><img src="<?php echo base_url() ?>assets/img/doctor.png" alt="" class="col-lg-10"></div>

 <div class="container">
      <div class="row">
 <div class="login">
      <div class="panel panel-default">
       <div class="panel-body">
          <div class="page-header">

      </div>


      <form action="<?php echo site_url("login/login_process");?>" method="post" accept-charset="utf-8" role="form">

         <div class="form-group">
            <label for="username">Username</label>
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           <input type="text" class="form-control" name="username" placeholder="Enter username" required />
        </div>
         </div>


         <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
           <input type="password" class="form-control" name="password" placeholder="Password" required />
        </div>
         </div>
         <hr/>




         <a href="#" class="col-sm-1"></a>
         <button type="submit" width="100px" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-lock"></span> Login</button>

      </form>

       </div>
    </div>

     </div>
  </div>

  </div>





</div>
<script type="text/javascript" src="<?= base_url()?>assets/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/jquery/boostrap.min.js"></script>


</body>
</html>