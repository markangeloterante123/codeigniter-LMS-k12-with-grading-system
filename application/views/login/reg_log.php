
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrar Login</title>

  <!-- Font Awesome -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/toastr/toastr.min.css">
</head>
<!-- <body class="hold-transition login-page" 
  style="
  background-image: url(<?php echo base_url(); ?>/assets/img/home.jpg);   
  width: 100%;
  height: 400px;
  background-size: 100% 100%;
  
  "> -->
<body  style="background-image: linear-gradient(to bottom right, #800000, #FF0000, #FF9933);" class="hold-transition login-page" >  
<div  class="login-box">

  <div class="card" >
    <div class="card-body login-card-body">
      
      <p class="login-box-msg warning">Registrar Login</p>
      <form action="<?php echo base_url(); ?>reg/login" method="post">    
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="user" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user text-info"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock text-info"></span>
            </div>
          </div>
        </div>
            <input  style="background-image: linear-gradient(to right, #990000, #FF5050); color:white;" type="submit" class="btn  btn-block"  value="LogIn">
      </form>
      <p class="mb-1">
        <a href="#">I forgot my password</a> <!-- gagamitin ko ng modals para sa registration-->
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/page/pages/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/page/pages/dist/js/demo.js"></script>
</body>
</html>

