<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>pages/reg/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg/file" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                RESOURCES
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/stud_info" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                STUDENTS
              </p>
            </a>       
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/gal" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                BULLETIN PAGE
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg/stud" class="nav-link">
              <i class="fas fa-list nav-icon"></i>
                <p>LIST</p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/class" class="nav-link active">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                ADMIN ACCOUNTS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/cal" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                CALENDAR
              </p>
            </a>
          </li>
             <li class="nav-item">
            <a style="margin-right: 5px;padding-right: px;" data-toggle="modal" data-target="#set-sem" class="nav-link">
              <i class="far fas fa-cog nav-icon"></i>
              <p>
                SET NEW-SEM
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>  </aside>

<div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white;" class="m-0">Admin / Registrar Inforation</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li style="color:white;" class="breadcrumb-item">Home</li>
              <li style="color:white;" class="breadcrumb-item active">Informations</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
      <section class="content">      <!-- Default box -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><a href="#" data-toggle="modal" data-target="#add_personel" class="btn btn-info"><i class="fas fa-user-plus"></i> Add Account</a></h3>
                  </div>

                  <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">#</th>
                                <th>NAME</th>
                                <th>ID#</th>
                                <th>PROFILE</th>
                                <th>CONTACT #</th>
                                <th>EMAIL</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody class="table_display">
                            
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
  </div>

  <div class="modal fade" id="add_personel">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Account</h4>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="quickForm">
              <div class="modal-body">
                <div class="form-group">
                  <label for="last_name_add">Last Name:</label>
                  <input type="text" class="form-control" name="last_name_add" id="last_name_add" >
                </div>
                <div class="form-group">
                  <label for="first_name_add">First Name:</label>
                  <input type="text" class="form-control" name="first_name_add" id="first_name_add" >
                </div>
                <div class="form-group">
                  <label for="m_i_add">M.I:</label>
                  <input type="text" class="form-control" name="m_i_add" id="m_i_add">
                </div>
                <div class="form-group">
                  <label for="id_add">Employee ID#:</label>
                  <input type="text" class="form-control" name="id_add" id="id_add">
                </div>
                <div class="form-group">
                <label for="post_add">Position:</label>
                  <select class="form-control" name="post_add" id="post_add">
                    <option value=""> SELECT OPTIONS</option>
                    <option value="2"> INSTRUCTOR</option>
                    <option value="3"> REGISTRAR</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-default Add_account" ><i class="fas fa-user-plus"></i> Confirm</button>
               <!--  <a href="javascript:void(0)" class="btn btn-outline-light confirm_information"> Submit</a> -->
              </div>
            </form>
          </div>
        </div>
      </div>


  <div class="modal fade" id="view_class_list">
        <div class="modal-dialog modal-xl">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title Instructor_name"> </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
             <h5 style="margin-left: 20px;">List of Class</h5>
            <div class="modal-body">
              <table border="1" class="table table-striped projects">
                <thead>
                  <tr style="color:white; background:maroon;">
                    <th>#</th>
                    <th>COURSE NAME</th>
                    <th>COURSE CODE</th>
                    <th>UNIT</th>
                    <th>SCHEDULE</th>
                    <th>SECTION</th>
                    <th>NO. OF STUDENTS</th>
                  </tr>
                </thead>
                <tbody class="table_data_list">
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

<script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function (){
        philtech_personal();

      //--- LIST OF INSTRUCTOR
      function philtech_personal(){
        var id = $('input[name="userid"]').val();
        $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_philtech_personal',
              type: 'POST',
              dataType : "JSON",
              error: function() {
                      alert('Show info Error');
                   },
              success: function (data) {  
              var html ="";        
                for(i=0; i<data.length; i++){
                    if(data[i].id == id){
                    }
                    else{
                      if(data[i].department == '2'){
                        html +=
                        '<tr>'+
                          '<td>'+(i+1)+'</td>'+
                          '<td>'+data[i].fullname+'</td>'+
                          '<td>'+data[i].student_id+'</td>'+
                          '<td><img style="height: 10vh; width: 10vh;" class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="user image"></td>'+
                          '<td>'+data[i].contact+'</td>'+
                          '<td>'+data[i].email+'</td>'+
                          '<td><a class="btn btn-flat btn-default"><i class="fas fa-user"></i> Instructor</a><a class="btn btn-flat btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown"></a>'+
                            '<div class="dropdown-menu" role="menu">'+
                              '<a href="javascript:void(0)" data-name="'+data[i].fullname+'" data-id="'+data[i].id+'" class="dropdown-item view_list_class"><i class="fas fa-folder-open"></i> List of Class</a>'+
                              '<a href="javascript:void(0)" data-id="'+data[i].id+'" data-acc_id="'+data[i].student_id+'" class="dropdown-item changepass"><i class="fas fa-retweet"></i> Reset Password</a>'+
                              '<a href="javascript:void(0)" data-id="'+data[i].id+'" data-name="'+data[i].fullname+'" class="dropdown-item changepass removeaccount"><i class="fas fa-times"></i> Remove Account</a>'+
                            '</div>'+
                          '</td>'+
                        '</tr>';
                      }
                      else{
                        html +=
                        '<tr>'+
                          '<td>'+(i+1)+'</td>'+
                          '<td>'+data[i].fullname+'</td>'+
                          '<td>'+data[i].student_id+'</td>'+
                          '<td><img style="height: 10vh; width: 10vh;" class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="user image"></td>'+
                          '<td>'+data[i].contact+'</td>'+
                          '<td>'+data[i].email+'</td>'+
                          '<td><a class="btn btn-flat btn-default"><i class="fas fa-user"></i> Registrar</a>'+
                           '<a class="btn btn-flat btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown"></a>'+
                            '<div class="dropdown-menu" role="menu">'+
                              '<a href="javascript:void(0)" data-id="'+data[i].id+'" data-acc_id="'+data[i].student_id+'" class="dropdown-item changepass"><i class="fas fa-retweet"></i> Reset Password</a>'+
                              '<a href="javascript:void(0)" data-id="'+data[i].id+'" data-name="'+data[i].fullname+'" class="dropdown-item removeaccount"><i class="fas fa-times"></i> Remove Account</a>'+
                            '</div>'+ 
                          '</td>'+
                        '</tr>';
                      }
                    }
                }
                $('.table_display').html(html);
              }
            });
      }
      //--- END HERE
      //--- CHANGE PASSWORD
      $('.table_display').on('click','.changepass',function (){
        var id =  $(this).data('id');
        var stud_id =  $(this).data('acc_id');
        swal({
              title:"Reset Password",
              text: "Are you sure you want reset password?",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#FF4500",
              confirmButtonText: "Yes",
              cancelButtonColor: "#00FFFF",
              cancelButtonText: "No",
              closeOnConfirm: false,
              closeOnCancel: false
            },
            function(isConfirm){
              if (isConfirm) {
                $.ajax({
                  url:'<?=base_url()?>index.php/pages/adminChanagePass',
                  type: 'POST',
                  data:{id:id, stud_id:stud_id},
                  dataType : "JSON",
                  success: function (data) {   
                    swal("Success", "Used the Employee ID as password", "success");
                    philtech_personal();
                    }
                  });  
              } else {
                swal("Cancelled", "", "error");
              }
            });
      });
      //--- END HERE
      //--- REMOVE ACCOUNT
      $('.table_display').on('click','.removeaccount',function (){
        var id = $(this).data('id');
        var name = $(this).data('name');
          swal({
              title:"Delete Account",
              text: "Are you sure you want to delete  "+name+" account?",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#FF4500",
              confirmButtonText: "Yes",
              cancelButtonColor: "#00FFFF",
              cancelButtonText: "No",
              closeOnConfirm: false,
              closeOnCancel: false
            },
            function(isConfirm){
              if (isConfirm) {
                $.ajax({
                  url:'<?=base_url()?>index.php/pages/ajax_accountDelete',
                  type: 'POST',
                  data:{id:id},
                  dataType : "JSON",
                  success: function (data) {   
                    swal("Success", "Deleted Account", "success");
                    philtech_personal();
                    }
                  });  
              } else {
                swal("Cancelled", "", "error");
              }
            });
      });
      //--- END HERE
      //--- DISPLAY CLASS INFORMATION
      $('.table_display').on('click','.view_list_class',function (){
        var id = $(this).data('id');
        var name = $(this).data('name');
        $('#view_class_list').modal('show');
        $('.Instructor_name').html( "<i class='fas fa-user'></i> Instructor Name: "+name);
        $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_class_list',
              type: 'POST',
              data:{id:id},
              dataType : "JSON",
              success: function (data) {  
                var html ="";        
                for(i=0; i<data.length; i++){
                  html +=
                  '<tr>'+
                    '<td>'+(i+1)+'</td>'+
                    '<td>'+data[i].course+'</td>'+
                    '<td>'+data[i].class_subject+'</td>'+
                    '<td>'+data[i].unit+'</td>'+
                    '<td><i class="fas fa-calendar"></i> '+data[i].class_sched+'</td>'+
                    '<td>'+data[i].section_yr+'</td>'+
                    '<td><i class="fas fa-users"></i> '+data[i].no_student+ '</td>'+
                  '</tr>';
                }
                
                if(data.length == '0'){
                  html +=
                '<tr><td colspan="8"></tr><tr></td><td colspan="8"></td></tr><tr><td colspan="8"></td></tr>'+
                '<tr><td colspan="8" style="color:white; background:red; text-align:center;"> No Class Records</td></tr>';
                }
                else{
                  html +=
                '<tr><td colspan="8" style="color:white; background:maroon; text-align:center;"> Nothing to Follow!!!</td></tr>';
                }
                $('.table_data_list').html(html);
              }
            });
      });
      //--- end here
       //--- for creating account
      $.validator.setDefaults({
        submitHandler: function () {       
          var last = $('input[name="last_name_add"]').val();
          var name = $('input[name="first_name_add"]').val();
          var mi = $('input[name="m_i_add"]').val();
          var id = $('input[name="id_add"]').val();
          var post = $('select[name="post_add"]').val();
            $.ajax({
                url:'<?=base_url()?>index.php/pages/add_admin_instructor',
                type: 'POST',
                data:{last:last, name:name, mi:mi, id:id, post:post},
                dataType : "JSON",
                error: function() {
                  swal("Process Error!", "Check the Input ID", "warning");
                   },
                success: function (data) {  
                  $('#add_personel').modal('hide');
                  swal("Process Success!", "Personel Added to LMS", "success");
                  philtech_personal();
                }
            });
        }
      });
      //--- end here
      //--- to validate 
      $('#quickForm').validate({
          rules: {
            last_name_add: {
              required: true,
            },
            first_name_add: {
              required: true,
            },
            id_add: {
              required: true,
            },
            post_add: {
              required: true,
              minlength: 1
            },
          },
          messages: {
            last_name_add: {
              required: "Please enter a Last Name",
            },
            first_name_add: {
              required: "Please enter a First Name",
            },
            id_add: {
              required: "Please enter a ID",
            },
            post_add: {
              required: "Please select from the option",
            },
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
      //--- end  here    

    });
  </script>

  
  <script type="text/javascript">
    $(function () {
         });
  </script>