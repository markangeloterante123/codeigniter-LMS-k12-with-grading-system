<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Philtech LMS</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/fontawesome-free/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/bs-stepper/css/bs-stepper.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/dropzone/min/dropzone.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/ekko-lightbox/ekko-lightbox.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/page/pages/plugins/sweet/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/page/chat.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/page/pages/dropzone.css">
  <script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery-ui/jquery-ui.min.js"></script>
  

</head>
<!-- <body onload="display_ct();" class="hold-transition sidebar-mini layout-fixed"> -->
  <body class="hold-transition sidebar-mini sidebar-collapse  layout-fixed layout-navbar-fixed">  
<div  class="wrapper">

  <nav  style=" background-image: linear-gradient(to bottom right, #800000, #CC3300); " class="main-header navbar navbar-expand navbar-white navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <span style="color:white;" class="update_span"></span>
  </nav>

 <script type="text/javascript">
   $(document).ready(function(){ 
    update();
      //--- displaying if there is a update 
      function update(){
        var update = $('input[name="update_set"]').val();
        if(update == 0){
          var html = 'Philtech Learning Management System';
          $('.update_span').html(html);
        }
        else{
          var html = '<a href="javascript:void(0)" class="btn btn-flat btn-default click_update"> Click Update</a>';
          $('.update_span').html(html);
        }
      }
      //--- end here
      //--- update the account
      $('.update_span').on('click','.click_update',function(){
        var stud = $('input[name="student_ids"]').val();
        $.ajax({
            url:'<?=base_url()?>index.php/pages/updating_stud',
            type: 'post',
            data:{stud:stud},
            dataType : "JSON",
            success: function (data) {
              var section = data[0].sec_year;
              $('input[name="section_update"]').val(section);
              update_Account();
            }
        }); 
      });
      //--- end here
      //--- updating the student account
      function update_Account(){
        var sect = $('input[name="section_update"]').val();
        var stud = $('input[name="student_ids"]').val();
        $.ajax({
            url:'<?=base_url()?>index.php/pages/updating_studAccount',
            type: 'post',
            data:{stud:stud, sect:sect},
            dataType : "JSON",
            success: function (data) {
              window.open("<?php echo base_url(); ?>dash/user_dash/success","_self");
            }
        }); 
      }
      //--- end here

   });
 </script>
