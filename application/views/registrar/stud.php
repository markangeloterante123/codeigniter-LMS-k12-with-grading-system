<style type="text/css">
      a {
        padding-left: 3px;
        padding-right: 3px;
        margin-left: 3px;
        margin-right: 3px;
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
            <a href="<?php echo base_url(); ?>pages/reg/stud" class="nav-link active">
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

<input type="hidden" name="id">
<div class="modal fade" id="information">
        <div class="modal-dialog">
          <div class="modal-content bg-info">
            <div class="modal-body text_display">
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <div class="modal fade" id="comment">
        <div class="modal-dialog">
          <div class="modal-content bg-secondary">
            <div class="modal-header">
              <h4 class="modal-title">Send Comment</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <textarea style="height: 100px;"  class="form-control display" id="text_response" name="text_response" > 
              </textarea>
            </div>
            <div class="modal-footer justify-content-between">
              <a href="javascript:void(0)" class="btn btn-outline-light submit_comment"><i class="far fa-paper-plane"></i> Submit</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

       <div class="modal fade" id="report_history">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">History records</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body ">
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Case No.</th>
                      <th>Name</th>
                      <th>Concern</th>
                      <th>Date</th>
                      <th>Solve By</th>
                      <th>Action Taken</th>
                    </tr>
                    </thead>
                    <tbody  class="text_history">
                          
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


      <div class="modal fade" id="solutions_taken">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Record Action Taken</h4>
            </div>
            <div class="modal-body">
              <textarea style="height: 100px;"  class="form-control display" id="text_record" name="text_record" > 
              </textarea>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="javascript:void(0)" class="btn btn-primary save_documentation"><i class="far fa-folder"></i> Save</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


 <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color:white;">Students</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li style="color:white;" class="breadcrumb-item"><a>Home</a></li>
              <li style="color:white;" class="breadcrumb-item active">Students</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-danger elevation-1"><a href="javascript:void(0)" class="reports"><i class="far fa-comment"></i></a></span>

              <div class="info-box-content">
                <span class="info-box-text">Student Concerns</span>
                <span class="info-box-number ajax_reports"></span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><a href="<?php echo base_url(); ?>pages/reg/stud"><i class="fas fa-user"></i></a></span>
              <div class="info-box-content">
                <span class="info-box-text">Request For Approval</span>
                <span class="info-box-number ajax_request"></span>
              </div>
            </div>
          </div>

          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cloud-upload-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Uploaded Files</span>
                <span class="info-box-number ajax_files"></span>
              </div>
            </div>
          </div>
        <!--   <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Students</span>
                <span class="info-box-number ajax_student"></span>
              </div>
            </div>
          </div> -->
        </div>

       

       <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="ajax_display_table">
                <!--ajax display of table information-->
              </div> 
            </div>
          </div>
       </div>

       
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <a data-toggle="modal" data-target="#modal-sm" class="btn btn-info card-title"><i class="fas fa-users"></i> Add List</a>
                <a href="javascript:void(0)" class="btn btn-success class_section" style=" color:white"><i class="fas fa-university"></i></a>
                <a href="javascript:void(0)" style="margin-left: 0px;" class="btn btn-warning view_list" title="View List Student" ><i class="fas fa-copy"></i></a>
                <a class="btn btn-danger dropdown-toggle dropdown-hover dropdown-icon" style="margin-left: 0px; color:white"  title="Masterlist Setting" data-toggle="dropdown"><i class="fas fa-cogs"></i> </a>
                <div class="dropdown-menu" role="menu">
                  <a href="<?php echo base_url(); ?>pages/download_masterlist/Philtech_LMS.xlsx" class="dropdown-item"><i class="fas fa-download"></i> Download Excel Form</a>
                  <a data-toggle="modal" data-target="#delete_masterlist" class="dropdown-item "><i class="fas fa-times"></i> Delete Masterlist</a>
                </div>
                <div class="card-tools">
                  <input type="search" class="form-control" name="search" id="search" placeholder="Search here...">
                </div>
              </div>
              <div class="card-body p-0 display_pages">
                
              </div>
              <div class="card-footer clearfix">
                <div class="pagination pagination-sm">
                    <div class="page-item" style='margin-top: 5px; margin-bottom: 5px;' id='pagination'>
                    </div>
                </div>     
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->


    <div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Upload Students</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="post" id="import_form" enctype="multipart/form-data">
            <div class="modal-body">
              <label>Upload Excel Files</label>
              <input type="file" class="form-control" name="file" id="file" required accept=".xls, .xlsx">
              <div  class="row align-items-center">
                <div class="col">
                  <div class="progress">
                    <div  id="file-progress-bar" class="progress-bar"></div>
                  </div>
                </div>
                </div>
                <div class="row align-items-center">  
                  <div class="col">
                    <div id="uploaded_file"></div>
                  </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-info" name="import" value="Import">
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

        <div class="modal fade" id="confirmation_approval">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Subject For Approval</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <input type="hidden" name="student_id">
              <input type="hidden" name="student_sec">
            </div>
            <div class="modal-body student_for_approval">

            </div>
            <div class="modal-footer justify-content-between">
              <a href="javascript:void(0)" class="btn btn-block btn-success approve_student" title="Notification VIA Email"><i class="fas fa-user-plus"></i> Accept Student</a>
              <a href="javascript:void(0)" class="btn btn-block btn-danger cancel_application" title="Notification VIA Email"><i class="fas fa-trash"></i> Reject Student</a>
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <div class="modal fade" id="master_setting">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Master List Setting</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="post" id="import_form" enctype="multipart/form-data">
            <div class="modal-body">
              <a href="javascript:void(0)" class="btn btn-block btn-danger delete_all"><i class="fas fa-trash"></i> Delete All Account</a>
              <a href="javascript:void(0)" style="color: white;" class="btn btn-block btn-warning delete_select"><i class="fas fa-trash"></i> Delete Student No Account</a>
              <a href="<?php echo base_url(); ?>pages/download_masterlist/Philtech_LMS.xlsx" style="color:white;" class="btn btn-block btn-success" title="Send Via Email Notification"><i class="fas fa-download"></i> Download Excel Form</a>
            </div>
           
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="delete_masterlist">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="post" id="import_form" enctype="multipart/form-data">
            <div class="modal-body">
              <label>MASTERLIST E.Y</label>
              <div class="form-group">
                <input type="text" class="form-control" name="name_delete">
              </div> 
              <div class="form-group"> 
                <button style="color:white;" class="btn btn-block btn-warning delete_all"><i class="fas fa-times"></i> Delete Masterlist</button>
              </div>
            </div> 
            </form>
          </div>
        </div>
      </div>
    

      <script>
$(document).ready(function(){ 
    section();

    $('.view_list').click(function(){
      table();
      // item_display();
      item_display(0);
    });

    //--- display section
    function section (){
      $('#pagination').html('');
       $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_section',
              type: 'POST',
              dataType : "JSON",
              success: function (data) {
                var html = '<div class="row mt-4">';
                  for(i=0; i<data.length; i++){
                      html+=
                        '<div class="col-sm-4">'+
                          '<div class="position-relative" style="min-height: 180px;">'+
                          '<p style="text-align:center;">Adviser: <b>'+data[i].instructor+'</b></p>'+
                          '<img style="margin-left:5px; background:none; margin-bottom:5px;height: 90%; width: 90%;" src="<?php echo base_url(); ?>assets/files/classroom2.jpg" alt="Photo 3" class="img-fluid">'+
                          '</div>'+
                          '<label class="btn btn-block btn-flat btn-default" style="margin:5px; width:98%; font-size:22px;">'+data[i].sec_year+' <a style="border:solid 1px black;" href="javascript:void(0)" class="btn btn-info view_section" data-section="'+data[i].sec_year+'" title="View List of Student of '+data[i].sec_year+'"><i class="fas fa-eye"></i> View</a>'+
                          '</label>'+
                        '</div>'
                      ;                                       
                    }
                    html +='</div>';
                $('.display_pages').html(html);
              }
            });
    }
    //--- end here

    function table(){
      var html = 
        '<div class="table-responsive ">'+
        '<table class="table m-0"><thead>'+
          '<tr>'+
            '<th>STUDENT NAME</th>'+
            '<th>STUDENT ID</th>'+
            '<th>YR / SECTION</th>'+
            '<th>ADVISER</th>'+
            '<th>STATUS</th>'+
          '</tr>'+
          '</thead>'+
            '<tbody class="tbl_student_info">'+  
            '</tbody>'+
          '</table>'+
          '</div>';
      $('.display_pages').html(html);
    }
        function item_display_search(){
          var name = $("input[name='search']").val();
           $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_masterlist_search',
              type: 'POST',
              data:{name:name},
              dataType : "JSON",
              error: function() {
                      alert('Error Cart No.');
                   },
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){   
                        if(data[i].lms_acc == '0'){
                          html +=
                          '<tr>'+
                            '<td>'+data[i].student_name+'</td>'+
                            '<td>'+data[i].student_id+'</td>'+
                            '<td>'+data[i].sec_year+'</td>'+
                            '<td>'+data[i].instructor+'</td>'+
                            '<td><a class="btn btn-warning" style="color:white;">No Account</a></td>'+
                          '</tr>'
                          ;
                        } 
                        else if(data[i].lms_acc == '1'){
                          html +=
                          '<tr>'+
                            '<td>'+data[i].student_name+'</td>'+
                            '<td>'+data[i].student_id+'</td>'+
                            '<td>'+data[i].sec_year+'</td>'+
                            '<td>'+data[i].instructor+'</td>'+
                            '<td><a class="btn btn-success" >Account Active</a></td>'+
                          '</tr>'
                          ;
                        }
                        else if(data[i].lms_acc == '2'){
                           html +=
                          '<tr>'+
                            '<td>'+data[i].student_name+'</td>'+
                            '<td>'+data[i].student_id+'</td>'+
                            '<td>'+data[i].sec_year+'</td>'+
                            '<td>'+data[i].instructor+'</td>'+
                            '<td><a class="btn btn-info" >For Approval</a> <a href="javascript:void(0)" data-id="'+data[i].student_id+'" data-sec="'+data[i].sec_year+'" class="btn btn-warning subect_approval"><i class="fas fa-cog"></i></a> </td>'+
                          '</tr>'
                          ;
                        }                         
                    }
                $('.tbl_student_info').html(html);
              }
            });
        }

  $('.display_pages').on('click','.view_section',function (){
      var section = $(this).data('section');
      table();
      $.ajax({
            url:'<?=base_url()?>index.php/pages/ajax_student_list',
            type: 'POST',
            data:{section:section},
            dataType : "JSON",
            error: function() {
              alert('Error  Process');
            },
            success:function(data){
              var html = '';
                  for(i=0; i<data.length; i++){   
                        if(data[i].lms_acc == '0'){
                          html +=
                          '<tr>'+
                            '<td>'+data[i].student_name+'</td>'+
                            '<td>'+data[i].student_id+'</td>'+
                            '<td>'+data[i].sec_year+'</td>'+
                            '<td>'+data[i].instructor+'</td>'+
                            '<td><a class="btn btn-warning" style="color:white;">No Account</a></td>'+
                          '</tr>'
                          ;
                        } 
                        else if(data[i].lms_acc == '1'){
                          html +=
                          '<tr>'+
                            '<td>'+data[i].student_name+'</td>'+
                            '<td>'+data[i].student_id+'</td>'+
                            '<td>'+data[i].sec_year+'</td>'+
                            '<td>'+data[i].instructor+'</td>'+
                            '<td><a class="btn btn-success" >Account Active</a></td>'+
                          '</tr>'
                          ;
                        }
                        else if(data[i].lms_acc == '2'){
                           html +=
                          '<tr>'+
                            '<td>'+data[i].student_name+'</td>'+
                            '<td>'+data[i].student_id+'</td>'+
                            '<td>'+data[i].sec_year+'</td>'+
                            '<td>'+data[i].instructor+'</td>'+
                            '<td><a class="btn btn-info" >For Approval</a> <a href="javascript:void(0)" data-id="'+data[i].student_id+'" data-sec="'+data[i].sec_year+'" class="btn btn-warning subect_approval"><i class="fas fa-cog"></i></a> </td>'+
                          '</tr>'
                          ;
                        }                         
                    }
                $('.tbl_student_info').html(html);
            }
        })
  });

  $('.display_pages').on('click','.subect_approval',function (){
      var id = $(this).data('id');
      var sec = $(this).data('sec');
      $('input[name="student_id"]').val(id);
      $('input[name="student_sec"]').val(sec);
      $('#confirmation_approval').modal('show');
      $.ajax({
            url:'<?=base_url()?>index.php/pages/ajax_subject_approve',
            type: 'POST',
            data:{id:id},
            dataType : "JSON",
            error: function() {
              alert('Error Cart No.');
            },
            success:function(data){
              var html = '';
              for(i=0; i<data.length; i++){   
                html +=
                '<label>Student Name</label>'+
                '<p>'+data[i].fullname+'</p>'+
                '<label>Student ID</label>'+
                '<p>'+data[i].student_id+'</p>'+
                '<label>Student Email</label>'+
                '<p>'+data[i].email+'</p>';
              }
              $('.student_for_approval').html(html);
            }
        })
      
  });

  //--- insert masterlist
   $('#import_form').on('submit', function(event){
    event.preventDefault();
        $.ajax({
             xhr: function() {
                    var xhr = new window.XMLHttpRequest();         
                    xhr.upload.addEventListener("progress", function(element) {
                        if (element.lengthComputable) {
                            var percentComplete = ((element.loaded / element.total) * 100);
                            $("#file-progress-bar").width(percentComplete + '%');
                            $("#file-progress-bar").html(percentComplete+'%');
                        }
                    }, false);
                    return xhr;
                },
             url:"<?php echo base_url(); ?>pages/excel_pages",
             method:"POST",
             data:new FormData(this),
             contentType:false,
             cache:false,
             processData:false,
             beforeSend: function(){
                $("#file-progress-bar").width('0%');
              },
             error: function() {
                $('#uploaded_file').html('<p style="color:red;">Error un-successfully upload</p>');
              },
             success:function(data){
              $('#uploaded_file').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');
              section();
             }
        })
   });
   //--- end here
   
   //--- delete all masterlist records
   $('.delete_all').click(function(){
      var name = $('input[name="name_delete"]').val();
      $.ajax({
        url:"<?php echo base_url(); ?>pages/delete_masterlist",
        data:{name:name},
        type: 'POST',
        dataType : "JSON",
        success:function(data){
          swal("Process Success!", "Delete Master List", "success");
          item_display();
        }
      })  
   });
   //--- end here

     $('.delete_select').click(function(){
      swal({
              title:"Delete",
              text: "Are you sure you want to all Account",
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
                      url:"<?php echo base_url(); ?>pages/delete_master_sel",
                      type: 'POST',
                      dataType : "JSON",
                      error: function() {
                          swal("Process Error!", "Process Halt", "error");
                      },
                      success:function(data){
                        $('#master_setting').modal('hide');
                        swal("Process Success!", "Delete Master List", "success");
                        item_display();
                       }
                  })  
              } else {
                swal("Cancelled", "", "error");
              }
            });
   });
      $('.approve_student').click(function(){
        var student_id = $('input[name="student_id"]').val();
        var section = $('input[name="student_sec"]').val();

          $.ajax({
                url:"<?php echo base_url(); ?>pages/ajax_student_app",
                type: 'POST',
                data:{student_id:student_id, section:section},
                dataType : "JSON",
                error: function() {
                    swal("Process Error!", "Process Halt", "error");
                },
                success:function(data){
                  $('#confirmation_approval').modal('hide');
                  swal("Process Success!", "Student Registration Approve", "success");
                  item_display();
            }
        })
   });

       $('.cancel_application').click(function(){
        var student_id = $('input[name="student_id"]').val();
        var section = $('input[name="student_sec"]').val();

          $.ajax({
                url:"<?php echo base_url(); ?>pages/ajax_student_cancel",
                type: 'POST',
                data:{student_id:student_id, section:section},
                dataType : "JSON",
                error: function() {
                    swal("Process Error!", "Process Halt", "error");
                },
                success:function(data){
                  $('#confirmation_approval').modal('hide');
                  swal("Process Success!", "Student Registration Reject", "success");
                  item_display();
            }
        })
   });

  $('.class_section').click(function(){
      section();
   });


    $('#search').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
              table();
              item_display_search();
            }
            else
            {
              section();
            }
         });


    //page pagination
    $('#pagination').on('click','a',function(e){
             e.preventDefault(); 
             var pageno = $(this).attr('data-ci-pagination-page');
             item_display(pageno);
           });

           
           function item_display(pagno){
             $.ajax({
               url: '<?=base_url()?>index.php/pages/loadRecord2/'+pagno,
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
             $('.tbl_student_info').empty();
             for(index in result){
                var student_name = result[index].student_name;
                var student_id = result[index].student_id;
                var sec_year = result[index].sec_year; 
                var instructor = result[index].instructor;      
                sno+=1;

                if(result[index].lms_acc == '0'){
                    var tr = "<tr>";
                    tr += "<td>"+ student_name +"</td>";
                    tr += "<td>"+ student_id +"</td>";
                    tr += "<td>"+ sec_year +"</td>";
                    tr += "<td>"+ instructor + "</td>";
                    tr += "<td><a class='btn btn-warning' style='color:white;'>No Account</a></td>";
                     $('.tbl_student_info').append(tr);
                }
                else if(result[index].lms_acc == '1'){
                    var tr = "<tr>";
                    tr += "<td>"+ student_name +"</td>";
                    tr += "<td>"+ student_id +"</td>";
                    tr += "<td>"+ sec_year +"</td>";
                    tr += "<td>"+ instructor + "</td>";
                    tr += "<td><a class='btn btn-success' style='color:white;'>Account Active</a></td>";
                     $('.tbl_student_info').append(tr);
                }
                else if(result[index].lms_acc == '2'){
                    var tr = "<tr>";
                    tr += "<td>"+ student_name +"</td>";
                    tr += "<td>"+ student_id +"</td>";
                    tr += "<td>"+ sec_year +"</td>";
                    tr += "<td>"+ instructor + "</td>";
                    tr += "<td><a class='btn btn-info' >For Approval</a> <a href='javascript:void(0)' data-id="+student_id+" data-sec="+sec_year+" class='btn btn-warning subect_approval'><i class='fas fa-cog'></i></a></td>";
                     $('.tbl_student_info').append(tr);
                }
              } 
            }

});
</script>
          