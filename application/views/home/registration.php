<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Philtech Registration Forms</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/dist/css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/page/pages/plugins/sweet/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/page/pages/plugins/sweet/sweetalert.css">
  <script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery-ui/jquery-ui.min.js"></script>

</head>
<body  onload="display_ct();" style=" background-image: linear-gradient(to bottom right, #800000, #CC3300); " class="hold-transition sidebar-mini sidebar-collapse">
<div  class="wrapper">

  <nav  style=" background-image: linear-gradient(to bottom right, #800000, #CC3300); " class="main-header navbar navbar-expand navbar-white navbar-dark">
    <h3 style="color:white;">Philtech Learning Management System - Student Registration</h3>
  </nav>


  <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div style=" background-image: linear-gradient(to bottom right, #800000, orange);" class="card-header">
                <h3 class="card-title"> </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Student Name</label>
                    <input type="name" name="name" class="form-control" id="name" >
                  </div>
                  <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="name" name="student_id" class="form-control" id="student_id" >
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" >
                  </div>
                   <div class="form-group">
                    <label for="user">Username</label>
                    <input type="name" name="user" class="form-control" id="user">
                  </div>
                  <div class="form-group">
                    <label for="password1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#" data-toggle="modal" data-target="#terms">terms and Agreements</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary submit_info">Submit</button>
                </div>
              </form>
            </div>
            </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </section>
  </div>





 <div class="modal fade" id="terms">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Terms & Agreement</h4>
            </div>
            <div class="modal-body">
            
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



<script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery-validation/additional-methods.min.js"></script>

<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/page/pages/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweet/sweetalert-dev.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweet/sweetalert.min.js"></script>

<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      var name = $("input[name='name']").val();
      var id = $("input[name='student_id']").val();
      var email = $("input[name='email']").val();
      var pass = $("input[name='password']").val();
      var user = $("input[name='user']").val();
      $.ajax({
            url:"<?php echo base_url(); ?>pages/student_register",
            type: 'POST',
            data:{name:name, id:id, email:email, pass:pass, user:user},
            dataType : "JSON",
            error: function() {
              swal("Process Error!", "Check Your Student ID! and Username must be Unique!", "error");
            },
            success:function(data){
              swal("Registration Success!", "Your Registration is still subject for approval", "success");
            }
        })  
    }
  });
  $('#quickForm').validate({
    rules: {
      name: {
        required: true,
        minlength: 8,
      },
      user: {
        required: true,
        minlength: 4,
      },
      student_id: {
        required: true,
      },
      sec: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 8
      },
      password2: {
        required: true,
        minlength: 8
      },
      terms: {
        required: true
      },
    },
    messages: {
      name: {
        required: "Please enter a Complete Name",
      },
      user: {
        required: "Please enter a Username",
      },
      student_id: {
        required: "Pleae enter Student ID",
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 8 characters long"
      },
      password2: {
        required: "Please Confirm-Password",
        minlength: "Your password must be same"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });


});
</script>
