<?php defined('BASEPATH') OR exit('No direct script access allowed'); ob_start();?>
<!DOCTYPE html>
<html>
<head>   
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>warning</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <!-- <link rel="icon" href="<?php echo base_url(); ?>/assets/img/logo1.png">
 -->
    
  <link rel="stylesheet" href="<?php echo base_url();?>assets/page/pages/assets_sub/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/page/pages/assets_sub/bootstrap/css/bootstrap-table.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/page/pages/assets_sub/bootstrap/css/bootstrap-theme.min.css">
  <link href="<?php echo base_url();?>assets/page/pages/assets_sub/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/page/pages/assets_sub/fontawesome/fonts/fontawesome-webfont.ttf" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/page/pages/assets_sub/sweet/sweetalert.css">
    
    
</head>
<body style="background-image: linear-gradient(to bottom right, #800000, #FF0000, #FF9933); color:white;">

<script>
        function key_code(){
             swal({
               title: "Warning!",
               text: "Unkown Account!",
               type: "warning",
               showCancelButton: false,
               confirmButtonColor: "#DD6B55",
               confirmButtonText: "Ok",
               closeOnConfirm: false
             },
             function(){
               history.back();
             });
         }
     </script>
    
    <body style="background-image: linear-gradient(to bottom right, #800000, #FF0000, #FF9933); color:white;" onload="key_code()">
    </body>

    
    </body>

<script src="<?php echo base_url();?>assets/page/pages/assets_sub/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url();?>assets/page/pages/assets_sub/tinymce/init-tinymce.js"></script>
<script src="<?php echo base_url();?>assets/page/pages/assets_sub/sweet/sweetalert-dev.js"></script>
<script src="<?php echo base_url();?>assets/page/pages/assets_sub/sweet/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/page/pages/assets_sub/jquery/jquery.js"></script>
<script src="<?php echo base_url();?>assets/page/pages/assets_sub/jquery/main.js"></script>
<script src="<?php echo base_url();?>assets/page/pages/assets_sub/bootstrap/js/bootstrap-table.js"></script>
<script src="<?php echo base_url();?>assets/page/pages/assets_sub/bootstrap/js/bootstrap.min.js"></script>

<script>
document.getElementsByTagName('meta')['viewport'].content='min-width: 980px;'; 
</script>
</html>