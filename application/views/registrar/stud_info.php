
    <style type="text/css">
      a {
        padding-left: 5px;
        padding-right: 5px;
        margin-left: 5px;
        margin-right: 5px;
      }
    </style>


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
            <a href="<?php echo base_url(); ?>pages/reg2/stud_info" class="nav-link active">
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
            <a href="<?php echo base_url(); ?>pages/reg2/class" class="nav-link">
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
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


<div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white;" class="m-0">List of Students</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li style="color:white;" class="breadcrumb-item">Home</li>
              <li style="color:white;" class="breadcrumb-item active">Students</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Students Informations</h3>
                <div class="card-tools">
                  <input type="search" class="form-control" name="search" id="search" placeholder="Search here...">
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table  class="table table-bordered table-striped ">
                  <thead>
                    <tr>
                      <th>STUDENT NAME</th>
                      <th>ID</th>
                      <th>PROFILE</th>
                      <th>YR/SEC</th>
                      <th>INFORMATION</th>
                      <th>STATUS</th>
                      <th>
                        <button type="button" class="btn btn-block btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown"> ACTIONS</button>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item allow_all" href="javascript:void(0)" title="Allow all student to login"><i class="fas fa-check"></i> Allow All</a>
                            <a class="dropdown-item dis_allow" href="javascript:void(0)" title="Halt all Student Account to login"><i class="fas fa-times"></i> Halt All</a>
                        </div>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="student_info" id="student_info"></tbody>

                  <div class="pagination pagination-sm">
                    <div class="page-item" style='margin-top: 5px; margin-bottom: 5px; margin-left: 25px;' id='pagination'></div>
                  </div>       
                </table>
              </div>
      
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="modal fade" id="view_student_class">
        <div class="modal-dialog modal-xl">
          <div class="modal-content bg-info">
            <div class="modal-header">
              <h4 class="modal-title student_name"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body ">
              <table class="table table-bordered table-striped">
                <thead class="student_info_users">
                 
                </thead>
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Subject Title</th>
                    <th>Subject Code</th>
                    <th>Class Section</th>
                    <th>Grades</th>
                    <th>Instructor</th>
                  </tr>
                </thead>
                <tbody class="student_listSub">
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


<script>
$(document).ready(function(){
    //--- allow all account
      $('.allow_all').click(function(){
        swal({
              title:"Allow",
              text: "Are you sure you want to all account to login in PLMS",
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
                  url:'<?=base_url()?>index.php/pages/ajax_allow_all',
                  type: 'POST',
                  dataType : "JSON",
                  success: function (data) {   
                    swal("Success", "", "success");
                    item_display(0);
                    }
                  });  
              } else {
                swal("Cancelled", "", "error");
              }
            });
      });
    //--- end here
    //--- dis-allowed all account
    $('.dis_allow').click(function(){
        swal({
              title:"No Student can Login",
              text: "Are you sure you want to all student not to Login",
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
                  url:'<?=base_url()?>index.php/pages/ajax_disallow_all',
                  type: 'POST',
                  dataType : "JSON",
                  success: function (data) {   
                    swal("Success", "", "success");
                    item_display(0);
                    }
                  });  
              } else {
                swal("Cancelled", "", "error");
              }
        });
    });
    //--- end here
     function item_display_search(){
      var name = $("input[name='search']").val();
         $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_lms_search',
              type: 'POST',
              data:{name:name},
              dataType : "JSON",
              error: function() {
                      alert('Error Cart No.');
                   },
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                      if(i <= '59'){
                        if(data[i].department == '1'){
                            if(data[i].status == '1'){
                              html +=
                                '<tr>'+
                                  '<td>'+data[i].fullname+'</td>'+
                                  '<td>'+data[i].student_id+'</td>'+
                                  '<td><img style="height: 8vh; width: 8vh;" class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="user image"></td>'+
                                  '<td>'+data[i].cor_sec+'</td>'+
                                  '<td><a href="javascript:void(0)" class="btn btn-block btn-info view_subject" data-stud="'+data[i].student_id+'" data-profile="'+data[i].profile+'" data-name="'+data[i].fullname+'" data-sec="'+data[i].cor_sec+'"><i class="fas fa-eye"></i> Informations</a></td>'+
                                  '<td><a class="btn btn-block btn-success"><i class="fas fa-user"></i> Allowed...</a></td>'+
                                  '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-student_id="'+data[i].student_id+'" class="btn btn-info change_pass" title="Forgot Password"><i class="fas fa-retweet"></i></a> '+
                                  '<a href="javascript:void(0)" data-id="'+data[i].id+'" data-student_id="'+data[i].student_id+'" class="btn btn-warning not_allowed" title="Not Allowed to Login"><i class="fas fa-power-off"></i></a></td>'+
                                '<tr>';
                              ;
                            } 
                            else if (data[i].status == '0'){
                               html +=
                                '<tr>'+
                                  '<td>'+data[i].fullname+'</td>'+
                                  '<td>'+data[i].student_id+'</td>'+
                                  '<td><img style="height: 8vh; width: 8vh;" class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="user image"></td>'+
                                  '<td>'+data[i].cor_sec+'</td>'+
                                  '<td><a href="javascript:void(0)" class="btn btn-block btn-info view_subject" data-stud="'+data[i].student_id+'" data-profile="'+data[i].profile+'" data-name="'+data[i].fullname+'" data-sec="'+data[i].cor_sec+'"><i class="fas fa-eye"></i> Informations</a></td>'+
                                  '<td><a style="color:white;" class="btn btn-block btn-warning"><i class="fas fa-user"></i> Pending...</a></td>'+
                                  '<td>'+
                                  '<a href="javascript:void(0)" data-id="'+data[i].id+'" data-student_id="'+data[i].student_id+'" class="btn btn-success alowed_student" title="Allowed"><i class="fas fa-plus"></i></a> '+
                                  '<a href="javascript:void(0)" data-id="'+data[i].id+'" data-student_id="'+data[i].student_id+'" class="btn btn-danger delete_user" title="Remove Account"><i class="fas fa-trash"></i></a></td>'+
                                '<tr>';
                            }
                          }
                      }                         
                    }
                $('.student_info').html(html);
              }
            });
    }
 

    $('.student_info').on('click','.view_subject',function (){
      var id = $(this).data('stud');
      var profile = $(this).data('profile');
      var name = $(this).data('name');
      var sec = $(this).data('sec');
      $('#view_student_class').modal('show');

      var html = 
        '<tr>'+
          '<td rowspan="2" style="margin:0px; padding:0px; hight:15vh; width:15vh;" ><img style="hight:100%; width:100%;" src="<?php echo base_url(); ?>assets/img/'+profile+'" class="img-square elevation-2" alt="User Image" ></td>'+
          '<td colspan="5">Name: '+name+'</td>'+
        '</tr>'+
        '<tr>'+
          '<td colspan="2">ID: '+id+'<input type="hidden" name="student_id_process" value="'+id+'"></td>'+
          '<td colspan="3">Section: '+sec+'</td>'+
        '</tr>';
      $('.student_info_users').html(html);
        $('.student_listSub').html('');
        display_grades();
  }); 
function display_grades(){
  var id =$('input[name="student_id_process"]').val();
  $.ajax({
            url:"<?php echo base_url(); ?>pages/ajax_displayRecords",
            type: 'POST',
            data:{id:id},
            dataType : "JSON",
            success:function(data){
                var html = '';
                  for(i=0; i<data.length; i++){
                   if(data[i].grad_final == '0'){
                      if(data[i].f_grade == '0'){
                        html +=
                        '<tr>'+
                        '<td>'+(i+1)+'</td>'+
                        '<td>'+data[i].course+'</td>'+
                        '<td>'+data[i].class_subject+'</td>'+
                        '<td>'+data[i].section_yr+'</td>'+
                        '<td><a><i class="fas fa-file"></i> No Submitted Grade</a></td>'+
                        '<td>'+data[i].admin+'</td>'+
                      '</tr>';
                      }
                      else if(data[i].f_grade <= '70'){
                        html +=
                        '<tr>'+
                        '<td>'+(i+1)+'</td>'+
                        '<td>'+data[i].course+'</td>'+
                        '<td>'+data[i].class_subject+'</td>'+
                        '<td>'+data[i].section_yr+'</td>'+
                        '<td><a href="javascript:void(0)" data-stud="'+data[i].student_id+'" data-code="'+data[i].class_code+'"  class="btn btn-block btn-danger failed_grades" title="Click To Process"><i class="fas fa-file"></i> '+data[i].f_grade+' FAILED</a></td>'+
                        '<td>'+data[i].admin+'</td>'+
                      '</tr>';
                      }
                       else if(data[i].f_grade <= '74'){
                        html +=
                        '<tr>'+
                        '<td>'+(i+1)+'</td>'+
                        '<td>'+data[i].course+'</td>'+
                        '<td>'+data[i].class_subject+'</td>'+
                        '<td>'+data[i].section_yr+'</td>'+
                        '<td><a href="javascript:void(0)" data-stud="'+data[i].student_id+'" data-code="'+data[i].class_code+'" class="btn btn-block btn-warning failed_grades" title="Click To Process"><i class="fas fa-file"></i> '+data[i].f_grade+' INCOMPLETE</a></td>'+
                        '<td>'+data[i].admin+'</td>'+
                      '</tr>';
                      }
                      else if(data[i].f_grade >= '75'){
                        html +=
                        '<tr>'+
                        '<td>'+(i+1)+'</td>'+
                        '<td>'+data[i].course+'</td>'+
                        '<td>'+data[i].class_subject+'</td>'+
                        '<td>'+data[i].section_yr+'</td>'+
                        '<td><a href="javascript:void(0)" data-stud="'+data[i].student_id+'" data-code="'+data[i].class_code+'" class="btn btn-block btn-success pass_studs" title="Click To Process"><i class="fas fa-file"></i> '+data[i].f_grade+' PASSED</a></td>'+
                        '<td>'+data[i].admin+'</td>'+
                      '</tr>';
                      } 
                   }
                   else if(data[i].grad_final == '1'){
                    if(data[i].f_grade <= '65'){
                      html +=
                      '<tr>'+
                      '<td>'+(i+1)+'</td>'+
                      '<td>'+data[i].course+'</td>'+
                      '<td>'+data[i].class_subject+'</td>'+
                      '<td>'+data[i].section_yr+'</td>'+
                      '<td><a href="javascript:void(0)" data-stud="'+data[i].student_id+'" data-code="'+data[i].class_code+'" class="btn btn-block btn-success final_pass" title="Click To Process"> PASSED</a> <a href="javascript:void(0)" data-stud="'+data[i].student_id+'" data-code="'+data[i].class_code+'" class="btn btn-block btn-danger final_failed" title="Click To Process"> FAILED</a></td>'+
                      '<td>'+data[i].admin+'</td>'+
                    '</tr>';
                    }
                     else if(data[i].f_grade <= '74'){
                      html +=
                      '<tr>'+
                      '<td>'+(i+1)+'</td>'+
                      '<td>'+data[i].course+'</td>'+
                      '<td>'+data[i].class_subject+'</td>'+
                      '<td>'+data[i].section_yr+'</td>'+
                      '<td><a href="javascript:void(0)" data-stud="'+data[i].student_id+'" data-code="'+data[i].class_code+'" class="btn btn-block btn-success final_pass" title="Click To Process"> PASSED</a> <a href="javascript:void(0)" data-stud="'+data[i].student_id+'" data-code="'+data[i].class_code+'" class="btn btn-block btn-danger final_failed" title="Click To Process"> FAILED</a></td>'+
                      '<td>'+data[i].admin+'</td>'+
                    '</tr>';
                    } 
                   }
                   else{

                      if(data[i].f_grade <= '70'){
                        html +=
                        '<tr>'+
                        '<td>'+(i+1)+'</td>'+
                        '<td>'+data[i].course+'</td>'+
                        '<td>'+data[i].class_subject+'</td>'+
                        '<td>'+data[i].section_yr+'</td>'+
                        '<td><a class="btn btn-block btn-default"><i class="fas fa-file"></i> '+data[i].f_grade+' FAILED</a></td>'+
                        '<td>'+data[i].admin+'</td>'+
                      '</tr>';
                      }
                       else if(data[i].f_grade <= '74'){
                        html +=
                        '<tr>'+
                        '<td>'+(i+1)+'</td>'+
                        '<td>'+data[i].course+'</td>'+
                        '<td>'+data[i].class_subject+'</td>'+
                        '<td>'+data[i].section_yr+'</td>'+
                        '<td><a class="btn btn-block btn-default"><i class="fas fa-file"></i> '+data[i].f_grade+' INCOMPLETE</a></td>'+
                        '<td>'+data[i].admin+'</td>'+
                      '</tr>';
                      }
                      else if(data[i].f_grade >= '75'){
                        html +=
                        '<tr>'+
                        '<td>'+(i+1)+'</td>'+
                        '<td>'+data[i].course+'</td>'+
                        '<td>'+data[i].class_subject+'</td>'+
                        '<td>'+data[i].section_yr+'</td>'+
                        '<td><a class="btn btn-block btn-default"><i class="fas fa-file"></i> '+data[i].f_grade+' PASSED</a></td>'+
                        '<td>'+data[i].admin+'</td>'+
                      '</tr>';
                      }
                   } 
                }
              if(data.length == '0'){
                  html +=
                  '<tr>'+
                  '<td colspan="6" style="background:orange; text-align:center;"><i class="fas fa-file"></i> No Subject Enrolled</td>'+
                  '</tr>';
                }
              else if(data.length >= '1'){
                   html +=
                  '<tr>'+
                  '<td colspan="4" ></td> <td colspan="2">'+
                  '<button type="button" class="btn btn-block btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown"><i class="fas fa-print"></i> Print Grades</button>'+
                    '<div class="dropdown-menu" role="menu">'+
                      '<a href="<?php echo base_url(); ?>pages/print_studInformK121st/'+id+'" target="_blank" class="dropdown-item"><i class="fas fa-print"></i> K to 12 1st Sem</a>'+
                      '<a href="<?php echo base_url(); ?>pages/print_studInformK122nd/'+id+'" target="_blank" class="dropdown-item"><i class="fas fa-print"></i> K to 12 2nd Sem</a>'+
                      '<a href="<?php echo base_url(); ?>pages/print_studInform/'+id+'" target="_blank" class="dropdown-item"><i class="fas fa-print"></i> College</a>'+
                    '</div>'+
                    '</td>'+
                  '</tr>'+
                  '<td colspan="6" style="background:green; text-align:center;"><i class="fas fa-file"></i> Nothing to Follow</td></tr>';
              }
              $('.student_listSub').html(html);
             }
        })
    } 
  $('.student_listSub').on('click','.failed_grades',function (){
    var stud =  $(this).data('stud');
    var code =  $(this).data('code'); 
      $.ajax({
            url:"<?php echo base_url(); ?>pages/ajax_editFgrades",
            type: 'POST',
            data:{stud:stud, code:code},
            dataType : "JSON",
            success:function(data){
              display_grades();
             }
      })
  });
  $('.student_listSub').on('click','.final_pass',function (){
    var stud =  $(this).data('stud');
    var code =  $(this).data('code'); 
      $.ajax({
            url:"<?php echo base_url(); ?>pages/ajax_editFgradesPassFinal",
            type: 'POST',
            data:{stud:stud, code:code},
            dataType : "JSON",
            success:function(data){
              display_grades();
            }
      })
  });

    $('.student_listSub').on('click','.final_failed',function (){
    var stud =  $(this).data('stud');
    var code =  $(this).data('code');
      $.ajax({
            url:"<?php echo base_url(); ?>pages/ajax_editFgradesFailedFinal",
            type: 'POST',
            data:{stud:stud, code:code},
            dataType : "JSON",
            success:function(data){
              display_grades();
            }
      })
  });
     $('.student_listSub').on('click','.pass_studs',function (){
    var stud =  $(this).data('stud');
    var code =  $(this).data('code');
      $.ajax({
            url:"<?php echo base_url(); ?>pages/ajax_editFgradesFailedFinal",
            type: 'POST',
            data:{stud:stud, code:code},
            dataType : "JSON",
            success:function(data){
              display_grades();
            }
      })
  });

  $('.student_info').on('click','.change_pass',function (){
      var id = $(this).data('id');
      var stud_id = $(this).data('student_id');
      swal({
              title:"Reset Account Password",
              text: "Are you sure you want student password?",
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
                    url:"<?php echo base_url(); ?>pages/ajax_forgot_pass",
                    type: 'POST',
                    data:{id:id, stud_id:stud_id},
                    dataType : "JSON",
                    error: function() {
                        swal("Process Error!", "Process Halt", "error");
                    },
                    success:function(data){
                      swal("Process Success!", "Change Student Password into Student ID", "success");
                     }
                })  
              } else {
                swal("Cancelled", "", "error");
              }
            });
  });

    $('.student_info').on('click','.not_allowed',function (){
      var id = $(this).data('id');
      var stud = $(this).data('student_id');
       swal({
              title:"Halt Account to Login",
              text: "",
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
                    url:"<?php echo base_url(); ?>pages/ajax_not_allow",
                    type: 'POST',
                    data:{id:id, stud:stud},
                    dataType : "JSON",
                    error: function() {
                        swal("Process Error!", "Process Stop", "error");
                    },
                    success:function(data){
                      swal("Process Success!", "Not Allowed to Login", "success");
                      item_display()
                     }
                })  
              } else {
                swal("Cancelled", "", "error");
              }
            });
  });

  $('.student_info').on('click','.alowed_student',function (){
      var id = $(this).data('id');
      var stud = $(this).data('student_id');
        swal({
              title:"Allow Account to Login",
              text: "",
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
                    url:"<?php echo base_url(); ?>pages/ajax_allow",
                    type: 'POST',
                    data:{id:id, stud:stud},
                    dataType : "JSON",
                    error: function() {
                        swal("Process Error!", "Process Stop", "error");
                    },
                    success:function(data){
                      swal("Process Success!", "Allowed to Login", "success");
                      item_display()
                     }
                })  
              } else {
                swal("Cancelled", "", "error");
              }
            });
  });

    $('.student_info').on('click','.delete_user',function (){
      var id = $(this).data('id');
       swal({
              title:"Delete Student Account",
              text: "",
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
                    url:"<?php echo base_url(); ?>pages/ajax_delete_student",
                    type: 'POST',
                    data:{id:id},
                    dataType : "JSON",
                    error: function() {
                        swal("Process Error!", "Process Stop", "error");
                    },
                    success:function(data){
                      swal("Process Success!", "Delete Student", "success");
                      item_display()
                     }
                })    
              } else {
                swal("Cancelled", "", "error");
              }
            });
  });

     $('#search').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
              item_display_search();
            }
            else
            {
              item_display(0);
            }
         });


          $('#pagination').on('click','a',function(e){
             e.preventDefault(); 
             var pageno = $(this).attr('data-ci-pagination-page');
             item_display(pageno);
           });

           item_display(0);
           function item_display(pagno){
             $.ajax({
               url: '<?=base_url()?>index.php/pages/loadRecord/'+pagno,
               type: 'get',
               dataType: 'json',
               success: function(response){
                  $('#pagination').html(response.pagination);
                  createTable(response.result,response.row);
               }
             });
           }
           function createTable(result,sno){
             sno = Number(sno);
             $('.student_info').empty();
             for(index in result){
                var name = result[index].fullname;
                var id = result[index].id;
                var student_id = result[index].student_id;
                var profile = result[index].profile;
                var cor_sec = result[index].cor_sec;        
                sno+=1;

                if(result[index].status == '1'){
                    var tr = "<tr>";
                    tr += "<td>"+ name +"</td>";
                    tr += "<td>"+ student_id +"</td>";
                    tr += "<td> <img style='height: 8vh; width: 8vh;' class='img-circle img-bordered-sm' src='<?php echo base_url(); ?>assets/img/"+profile+"' alt='user image'> </td>";
                    tr += "<td>"+ cor_sec +"</td>";
                    tr += "<td><a href='javascript:void(0)' class='btn btn-block btn-info view_subject' data-stud="+student_id+" data-profile="+profile+" data-name="+name+" data-sec="+cor_sec+"><i class='fas fa-eye'></i> Informations</a></td>";
                    tr += "<td><a class='btn btn-flat btn-block btn-default'><i class='fas fa-user'></i> Can Use LMS</a></td>";
                    tr += "<td><a href='javascript:void(0)' data-id="+id+" data-student_id="+student_id+" class='btn btn-info change_pass' title='Forgot Password'><i class='fas fa-retweet'></i></a> "+
                        "<a href='javascript:void(0)' data-id="+id+" data-student_id="+student_id+" class='btn btn-warning not_allowed' title='Not Allowed to Login'><i class='fas fa-power-off'></i></a></td>";
                    tr += "</tr>";
                     $('#student_info').append(tr);
                }
                else if(result[index].status == '0'){
                    var tr = "<tr>";
                    tr += "<td>"+ name +"</td>";
                    tr += "<td>"+ student_id +"</td>";
                    tr += "<td> <img style='height: 8vh; width: 8vh;' class='img-circle img-bordered-sm' src='<?php echo base_url(); ?>assets/img/"+profile+"' alt='user image'> </td>";
                    tr += "<td>"+ cor_sec +"</td>";
                    tr += "<td><a href='javascript:void(0)' class='btn btn-block btn-info view_subject' data-stud="+student_id+" data-profile="+profile+" data-name="+name+" data-sec="+cor_sec+"><i class='fas fa-eye'></i> Informations</a></td>";
                    tr += "<td><a style='color:white;' class='btn btn-block btn-warning'><i class='fas fa-user'></i> Pending...</a></td>";
                    tr += "<td><a href='javascript:void(0)' data-id="+id+" data-student_id="+student_id+" class='btn btn-success alowed_student' title='Allowed'><i class='fas fa-plus'></i></a> "+
                        "<a href='javascript:void(0)' data-id="+id+" data-student_id="+student_id+" class='btn btn-danger delete_user' title='Remove Account'><i class='fas fa-trash'></i></a></td>";
                    tr += "</tr>";
                     $('#student_info').append(tr);
                }
              }
              
            }


  });
</script>


