



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
            <a href="<?php echo base_url(); ?>pages/reg/file" class="nav-link active">
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
        </div>
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


<input type="hidden" name="id">


 <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white;" class="m-0">Files</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li style="color:white;" class="breadcrumb-item">Home</li>
              <li style="color:white;" class="breadcrumb-item active">Files</li>
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
         <!--  <div class="col-12 col-sm-6 col-md-3">
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


       <!--copy up here-->
        <div class="row">
          <div class="col-md-12">
             <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                         <div class="btn-group">
                            <button type="button" class="btn btn-default btn-flat folder_open"> <i class="fas fa-file"></i> FILES</button>
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                          </button>
                          <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" data-toggle="modal" data-target="#add_folder"><i class="fas fa-folder-plus"></i> Create New Folder</a>
                            <a class="dropdown-item" data-toggle="modal" data-target="#add_link"><i class="fas fa-link"></i> Add Link</a>
                            <a class="dropdown-item upload_files" href="javascript:void(0)"><i class="fas fa-plus"></i> Add File</a>
                          </div>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-default back_folder"><i class="fas fa-reply"></i> Back</a>
                        
                        <input type="hidden" name="folder_id">
                        <input type="hidden" name="back_folder">
                      </div>
                      <div class="card-body list_of_folder">
                         
                      </div>
                      <div class="card-body">
                        <section class="content">
                          <div class="row list_of_files">
                             
                          </div>
                        </section>                 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>


<!-- all modals pababa--> 
     <div class="modal fade" id="add_link">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <label>Name</label>
              <input type="text" class="form-control" name="name_link">
              <label>Link</label>
              <input type="text" class="form-control" name="link">
              <hr>   
              <span class="input-group-append">
                <button type="button" class="btn btn-info btn-block save_link"><i class="fas fa-save"></i> Save</button>
              </span>
            </div>
          </div>
        </div>
      </div>

    <div class="modal fade" id="add_folder">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="input-group input-group-sm">
                  <input type="text" class="form-control" name="folder_name">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat folder_create"><i class="fas fa-folder-plus"></i> Create</button>
                  </span>
                </div>
            </div>
          </div>
        </div>
      </div>
<!--modal sa pag upload ng file--->
       <div class="modal fade" id="upload_files">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action=" " id="upload" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="file" id="files" name="files[]" multiple accept=".pdf, .doc, .docx, .xls, .xlsx, .pptx, .txt">
                <input type="hidden" name="folder">
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
                <hr>   
                <input type="submit" class="btn btn-block btn-success" value="Upload" >
            </div>
            </form>
          </div>
        </div>
      </div>

      <!---pag share ng folder or files na modal--->
      <div class="modal fade" id="share_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="name_share">
              <input type="hidden" name="folder_share">
              <input type="hidden" name="post_id_share">
              <input type="hidden" name="file_share">
              <input type="hidden" name="link_share">
              <input type="hidden" name="ext_share">
              <input type="hidden" name="opt">
              <div class="card-tools">
                <input type="search" class="form-control" name="search" id="search" placeholder="Search here...">
              </div>
              <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">#</th>
                      <th>NAME</th>
                      <th>PROFILE</th>
                      <th>DEPARTMENT</th>
                      <th>ACTION</th>
                  </tr>
              </thead>
              <tbody class="share_person">
                  
              </tbody>
          </table>
            </div>
          </div>
        </div>
      </div>

<!--para sa Folder Functions po-->
<script type="text/javascript">
  $(document).ready(function () {
      user_id();
      //--- user id geneates
      function user_id(){
        $('.list_of_files').html('');
        var id = $('input[name="userid"]').val();
        $('input[name="folder_id"]').val(id);
        view_folder();
        view_file();
      }
      //--end here
      //--- pang view ng mga files
    function view_file(){
        var location = $('input[name="folder_id"]').val();
                 $.ajax({
                url:'<?=base_url()?>index.php/pages/ajax_files_view',
                type: 'POST',
                data:{location:location},
                dataType : "JSON",
                success: function (data) {   
                   var html = '';       
                    for(i=0; i<data.length; i++){
                      if(data[i].file_ext == 'pdf'){
                        html +=
                          '<div class="col-lg-3 col-xs-6">'+
                            '<div class="small-box bg-default">'+
                              '<div class="inner">'+
                                '<i style="height:11vh; width:15vh;" class="fas fa-file-pdf"> .'+data[i].file_ext+'</i>'+
                              '</div>'+
                              '<div class="icon ">'+
                                '<i class="fas fa-file-pdf bg-warning"></i>'+
                              '</div>'+
                              '<a href="javascript:void(0)"  style="color:white;" class="small-box-footer dropdown-toggle dropdown-hover dropdown-icon bg-warning users-list-name " data-toggle="dropdown" > '+data[i].file+'</a>'+
                              '<div class="dropdown-menu" role="menu">'+
                                '<a class="dropdown-item" href="<?php echo base_url(); ?>pages/downloadResources/'+data[i].file+'"><i class="fas fa-download"></i> Download</a>'+
                                '<a class="dropdown-item share_files" data-post="'+data[i].post_id+'" data-file="'+data[i].file+'" data-link="'+data[i].link+'" data-ext="'+data[i].file_ext+'" href="javascript:void(0)"><i class="fas fa-share-alt"></i> Share</a>'+
                                '<a class="dropdown-item delete_file" href="javascript:void(0)" data-id="'+data[i].id+'"><i class="fas fa-times"></i> Remove File</a>'+
                              '</div>'+
                            '</div>'+
                          '</div>';
                      }
                      else if(data[i].file_ext == 'pptx'){
                        html +=
                          '<div class="col-lg-3 col-xs-6">'+
                            '<div class="small-box bg-default">'+
                              '<div class="inner">'+
                                '<i style="height:11vh; width:15vh;" class="fas fa-file-powerpoint"> .'+data[i].file_ext+'</i>'+
                              '</div>'+
                              '<div class="icon ">'+
                                '<i class="fas fa-file-powerpoint bg-danger"></i>'+
                              '</div>'+
                              '<a href="#" class="small-box-footer dropdown-toggle dropdown-hover dropdown-icon bg-danger users-list-name" data-toggle="dropdown" > '+data[i].file+'</a>'+
                              '<div class="dropdown-menu" role="menu">'+
                                '<a class="dropdown-item" href="<?php echo base_url(); ?>pages/downloadResources/'+data[i].file+'"><i class="fas fa-download"></i> Download</a>'+
                                '<a class="dropdown-item share_files" data-post="'+data[i].post_id+'" data-file="'+data[i].file+'" data-link="'+data[i].link+'" data-ext="'+data[i].file_ext+'" href="javascript:void(0)"><i class="fas fa-share-alt"></i> Share</a>'+
                                '<a class="dropdown-item delete_file" href="javascript:void(0)" data-id="'+data[i].id+'"><i class="fas fa-times"></i> Remove File</a>'+
                              '</div>'+
                            '</div>'+
                          '</div>';
                      }
                       else if(data[i].file_ext == 'doc' || data[i].file_ext == 'txt' || data[i].file_ext == 'docx'){
                        html +=
                          '<div class="col-lg-3 col-xs-6">'+
                            '<div class="small-box bg-default">'+
                              '<div class="inner">'+
                                '<i style="height:11vh; width:15vh;" class="fas fa-file-word"> .'+data[i].file_ext+'</i>'+
                              '</div>'+
                              '<div class="icon ">'+
                                '<i class="fas fa-file-word bg-info"></i>'+
                              '</div>'+
                              '<a href="#" class="small-box-footer dropdown-toggle dropdown-hover dropdown-icon bg-info users-list-name" data-toggle="dropdown" > '+data[i].file+'</a>'+
                              '<div class="dropdown-menu" role="menu">'+
                                '<a class="dropdown-item" href="<?php echo base_url(); ?>pages/downloadResources/'+data[i].file+'"><i class="fas fa-download"></i> Download</a>'+
                                '<a class="dropdown-item share_files" data-post="'+data[i].post_id+'" data-file="'+data[i].file+'" data-link="'+data[i].link+'" data-ext="'+data[i].file_ext+'" href="javascript:void(0)"><i class="fas fa-share-alt"></i> Share</a>'+
                                '<a class="dropdown-item delete_file" href="javascript:void(0)" data-id="'+data[i].id+'"><i class="fas fa-times"></i> Remove File</a>'+
                              '</div>'+
                            '</div>'+
                          '</div>';
                      }
                      else if(data[i].file_ext == 'link'){
                        html +=
                          '<div class="col-lg-3 col-xs-6">'+
                            '<div class="small-box bg-default">'+
                              '<div class="inner">'+
                                '<i style="height:11vh; width:15vh;" class="fas fa-link"> '+data[i].file_ext+'</i>'+
                              '</div>'+
                              '<div class="icon ">'+
                                '<i class="fa fa-fw fa-link text-success"></i>'+
                              '</div>'+
                              '<a href="#" class="small-box-footer dropdown-toggle dropdown-hover dropdown-icon bg-maroon users-list-name" data-toggle="dropdown" > '+data[i].file+'</a>'+
                              '<div class="dropdown-menu" role="menu">'+
                                '<a class="dropdown-item" href="'+data[i].link+'" target="_blank"><i class="fas fa-link"></i> Open Link </a>'+
                                '<a class="dropdown-item share_files" data-post="'+data[i].post_id+'" data-file="'+data[i].file+'" data-link="'+data[i].link+'" data-ext="'+data[i].file_ext+'" href="javascript:void(0)"><i class="fas fa-share-alt"></i> Share</a>'+
                                '<a class="dropdown-item delete_file" href="javascript:void(0)" data-id="'+data[i].id+'"><i class="fas fa-times"></i> Remove Link</a>'+
                              '</div>'+
                            '</div>'+
                          '</div>';
                      }
                      else if(data[i].file_ext == 'xlsx' || data[i].file_ext == 'xls'){
                        html +=
                          '<div class="col-lg-3 col-xs-6">'+
                            '<div class="small-box bg-default">'+
                              '<div class="inner">'+
                                '<i style="height:11vh; width:15vh;" class="fas fa-file-excel "> .'+data[i].file_ext+'</i>'+
                              '</div>'+
                              '<div class="icon ">'+
                                '<i class="fas fa-file-excel bg-success"></i>'+
                              '</div>'+
                              '<a href="#" class="small-box-footer dropdown-toggle dropdown-hover dropdown-icon bg-success users-list-name" data-toggle="dropdown" > '+data[i].file+'</a>'+
                              '<div class="dropdown-menu" role="menu">'+
                                '<a class="dropdown-item" href="<?php echo base_url(); ?>pages/downloadResources/'+data[i].file+'"><i class="fas fa-download"></i> Download</a>'+
                                '<a class="dropdown-item share_files" data-post="'+data[i].post_id+'" data-file="'+data[i].file+'" data-link="'+data[i].link+'" data-ext="'+data[i].file_ext+'" href="javascript:void(0)"><i class="fas fa-share-alt"></i> Share</a>'+
                                '<a class="dropdown-item delete_file" href="javascript:void(0)" data-id="'+data[i].id+'"><i class="fas fa-times"></i> Remove File</a>'+
                              '</div>'+
                            '</div>'+
                          '</div>';
                          }
                      
                    }
                  $('.list_of_files').html(html);
                }
          });
      }
    //--- end here
      //--- view folder
      function view_folder(){
        var location = $('input[name="folder_id"]').val();
                 $.ajax({
                url:'<?=base_url()?>index.php/pages/ajax_folder_view',
                type: 'POST',
                data:{location:location},
                dataType : "JSON",
                success: function (data) {   
                   var html = '';       
                    for(i=0; i<data.length; i++){
                      html +=
                      '<div style="margin-top:5px;" class="btn-group">'+
                        '<button type="button" class="btn btn-default btn-flat folder_open" data-back="'+data[i].location_code+'" data-names="'+data[i].folder_name+'"  data-folder="'+data[i].folder_code+'"> <i class="fas fa-folder-open"></i> '+data[i].folder_name+'</button>'+
                        '<a class="btn btn-info dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown"></a>'+
                          '<div class="dropdown-menu" role="menu">'+
                            '<a class="dropdown-item folder_open" href="javascript:void(0)" data-back="'+data[i].location_code+'" data-names="'+data[i].folder_name+'" data-folder="'+data[i].folder_code+'" ><i class="fas fa-folder-open"></i> Open '+data[i].folder_name+'</a>'+
                            // '<a class="dropdown-item share_folder" data-folder="'+data[i].folder_code+'" data-name="'+data[i].folder_name+'" href="javascript:void(0)"><i class="fas fa-share-alt"></i> Share</a>'+
                            '<a class="dropdown-item folder_delete" href="javascript:void(0)" data-id="'+data[i].id+'"><i class="fas fa-times"></i> Remove Folder</a>'+
                          '</div>'+
                        '</div> ';
                    }
                  $('.list_of_folder').html(html);
                }
          });
      }
      //--- end here
      //--- creating folder
      $('.folder_create').click(function(){
        var name = $('input[name="folder_name"]').val();
        var location = $('input[name="folder_id"]').val();
        $.ajax({
                url:'<?=base_url()?>index.php/pages/ajax_create_folder',
                type: 'POST',
                data:{name:name, location:location},
                dataType : "JSON",
                success: function (data) {   
                    swal("Process Success!", "", "success");
                    $('input[name="folder_name"]').val();
                    $('#add_folder').modal('hide');
                    view_folder();
                }
          });
      });
      //---end here
      //--- open folder
        $('.list_of_folder').on('click','.folder_open', function(event){
          var name = $(this).data('names');
          var id = $(this).data('folder');
          $('input[name="folder_id"]').val(id);
          view_folder();
          view_file();
        });
      //--- end here
      //--- back folder
      $('.back_folder').click(function(){
        var id = $('input[name="folder_id"]').val();
        $.ajax({
                url:'<?=base_url()?>index.php/pages/ajax_back_folder',
                type: 'POST',
                data:{id:id},
                dataType : "JSON",
                success: function (data) {   
                  var back ='';
                  for(i=0; i<data.length; i++){
                    back = data[i].location_code;
                  }
                  $('input[name="folder_id"]').val(back);
                  view_folder();
                  view_file();
                }
          });
      });
      //--- end here
      //--- delete folder
      $('.list_of_folder').on('click','.folder_delete', function(event){
        var id = $(this).data('id');
        swal({
              title: "Delete Folder",
              text: "Are you sure you want to delete the folder?",
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
                  url:'<?=base_url()?>index.php/pages/ajax_folder_del',
                  type: 'POST',
                  data:{id:id},
                  dataType : "JSON",
                  success: function (data) {   
                    swal("Success", "", "success");
                    view_folder();
                    }
                  });  
              } else {
                swal("Cancelled", "", "error");
              }
            }); 
      });
      //--- end here
      //--- folder_open back nag subra ang back
      $('.folder_open').click(function(){
        user_id();
      });
      //--- end here
         //--- uploading files inside
    $('#upload').on('submit', function(event){
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
               url:"<?php echo base_url(); ?>pages/folder_upload",
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
                  view_file(); 
               }
          })
     });
    //--- end here
    //-- save link
     $('.save_link').click(function(){
        var name = $('input[name="name_link"]').val();
        var link = $('input[name="link"]').val();
        var id = $('input[name="folder_id"]').val();
        
          $.ajax({
                url:'<?=base_url()?>index.php/pages/ajax_save_link',
                type: 'POST',
                data:{id:id, name:name, link:link},
                dataType : "JSON",
                success: function (data) {   
                  view_file();
                  $('input[name="name_link"]').val('');
                  $('input[name="link"]').val('');
                  $('#add_link').modal('hide');
                }
          });
      });
     //--- end here
     //--- remove file of link 
     $('.list_of_files').on('click', '.delete_file', function(event){
        var id = $(this).data('id');
        swal({
              title: "Delete",
              text: "Are you sure you want to delete?",
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
                  url:'<?=base_url()?>index.php/pages/ajax_file_del',
                  type: 'POST',
                  data:{id:id},
                  dataType : "JSON",
                  success: function (data) {   
                    swal("Success", "", "success");
                    view_file();
                    }
                  });  
              } else {
                swal("Canceled", "", "error");
              }
            }); 
     });
     //--- end here
     //--- share folder to other user
     $('.list_of_folder').on('click', '.share_folder',  function(event){
       var folder =  $(this).data('folder');
       var name = $(this).data('name');
       $('input[name="name_share"]').val(name);
       $('input[name="folder_share"]').val(folder);
       $('input[name="opt"]').val('0');
       $('#share_modal').modal('show');
       share_users();
     });
     //--- end here
     //--- share list users
     function share_users(){
      var names = $('input[name="name_share"]').val();
      var name = $("input[name='search']").val();
      $.ajax({
                url:'<?=base_url()?>index.php/pages/ajax_allshareUser',
                type: 'POST',
                data:{name:name},
                dataType : "JSON",
                success: function (data) {   
                  var html ='';
                  for(i=0; i<data.length; i++){
                    if(data[i].department == '1'){
                      html +=
                    '<tr>'+
                      '<td>'+(i+1)+'</td>'+
                      '<td>'+data[i].fullname+'</td>'+
                      '<td><img style="height: 10vh; width: 10vh;" class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="user image"></td>'+
                      '<td>'+data[i].cor_sec+'</td>'+
                      '<td><a href="javascript:void(0)" class="btn btn-info confirm_share_folder" data-id="'+data[i].id+'"><i class="fas fa-share"></i> Share <b>'+names+'</b> File</a></td>'+
                    '</tr>';
                    }
                    else if(data[i].department == '1'){
                      html +=
                    '<tr>'+
                      '<td>'+(i+1)+'</td>'+
                      '<td>'+data[i].fullname+'</td>'+
                      '<td><img style="height: 10vh; width: 10vh;" class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="user image"></td>'+
                      '<td>ADMIN</td>'+
                      '<td><a href="javascript:void(0)" class="btn btn-info confirm_share_folder" data-id="'+data[i].id+'"><i class="fas fa-share"></i> Share <b>'+names+'</b> Filer</a></td>'+
                    '</tr>';
                    }
                    else{
                      html +=
                    '<tr>'+
                      '<td>'+(i+1)+'</td>'+
                      '<td>'+data[i].fullname+'</td>'+
                      '<td><img style="height: 10vh; width: 10vh;" class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="user image"></td>'+
                      '<td>REGISTRAR</td>'+
                      '<td><a href="javascript:void(0)" class="btn btn-info confirm_share_folder" data-id="'+data[i].id+'"><i class="fas fa-share"></i> Share <b>'+names+'</b> File</a></td>'+
                    '</tr>';
                    }
                  }
                  $('.share_person').html(html);                
              }
          });
     }
     //--- end here
     //--- search users
     $('#search').keyup(function(){    
        share_users();
      });
     //--- end here
     //--- share folder
     $('.share_person').on('click', '.confirm_share_folder', function(event){
      var opt = $('input[name="opt"]').val();
      if(opt == '0'){
        var folder = $('input[name="folder_share"]').val();
        var name = $('input[name="name_share"]').val(); 
        var id = $(this).data('id');
        $.ajax({
                url:'<?=base_url()?>index.php/pages/ajax_share_confirm',
                type: 'POST',
                data:{name:name, opt:opt, folder:folder, id:id},
                dataType : "JSON",
                success: function (data) {   
                  swal("Success Folder Shared", "", "success");
                  $('input[name="name_share"]').val('');
               }
          });
      }
      else{
        var post = $('input[name="post_id_share"]').val();
        var file = $('input[name="file_share"]').val();
        var link = $('input[name="link_share"]').val();
        var ext = $('input[name="ext_share"]').val();
        var id = $(this).data('id');
        $.ajax({
                url:'<?=base_url()?>index.php/pages/ajax_share_confirm',
                type: 'POST',
                data:{id:id, post:post, file:file, link:link, ext:ext},
                dataType : "JSON",
                success: function (data) {   
                  swal("Success File Shared", "", "success");
                  $('input[name="name_share"]').val('');
               }
          });
      }
     });
     //--- end here
     //--- share files
     $('.list_of_files').on('click','.share_files', function(event){
      var post = $(this).data('post');
      var file = $(this).data('file');
      var link = $(this).data('link');
      var ext = $(this).data('ext');
      $('input[name="post_id_share"]').val(post);
      $('input[name="file_share"]').val(file);
      $('input[name="link_share"]').val(link);
      $('input[name="ext_share"]').val(ext);
      $('input[name="opt"]').val('1');
      $('#share_modal').modal('show');
     });

     //--- end here
  });
</script>
<!---para sa pag upload ng mga files--->
<script type="text/javascript">
  $(document).ready(function () {
    //--- pang upload ng files
      $('.upload_files').click(function(){
        var folder = $('input[name="folder_id"]').val();
        $('input[name="folder"]').val(folder);
        $('#uploaded_file').html('');
        $("#file-progress-bar").width(0);
        $("#file-progress-bar").html('');
        $("#files").val('');
        $('#upload_files').modal('show');
      });
    //--- end here
  });
</script>