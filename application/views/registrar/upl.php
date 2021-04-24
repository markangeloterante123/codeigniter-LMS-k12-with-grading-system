

<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>pages/reg/home" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg/wall" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                LMS Wall
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/stud_info" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Student Information
              </p>
            </a>
            
          </li>
     
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg/post" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Create Post
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/gal" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg/upl" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Uploaded Files
              </p>
            </a>
          </li>
    
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Add
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>pages/reg/stud" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Add Link</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/class" class="nav-link">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                Instructors Information
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a style="margin-right: 5px;padding-right: px;" href="#" class="nav-link">
              <i class="far fas fa-cog nav-icon"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a onclick="userout()" style="color:white;" class="nav-link  btn-danger">
              <i class="icon fas  fa-power-off nav-icon"></i>
                <p>
                Log-Out
               </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
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
              </div>
              
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
        </div>
      </div>

     
<input type="hidden" name="id">


 <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white;" class="m-0">Uploaded Files</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Files</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-danger elevation-1"><a href="javascript:void(0)" class="reports"><i class="far fa-comment"></i></a></span>

              <div class="info-box-content">
                <span class="info-box-text">Student Concerns</span>
                <span class="info-box-number ajax_reports"></span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><a href="<?php echo base_url(); ?>pages/reg/stud"><i class="fas fa-user"></i></a></span>
              <div class="info-box-content">
                <span class="info-box-text">Request For Approval</span>
                <span class="info-box-number ajax_request"></span>
              </div>
            </div>
          </div>

          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cloud-upload-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Student Submitted Files</span>
                <span class="info-box-number ajax_files"></span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Students</span>
                <span class="info-box-number ajax_student"></span>
              </div>
            </div>
          </div>
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


        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title btn-back"></h3>
                <input type="hidden" name="post_id">
              </div>
              <div class="card-body p-0 display_pages">
                
              </div>
            </div>
          </div>



<script type="text/javascript">
  $(document).ready(function () {
    table_display();
      function table_display(){
        $('.btn-back').html('');
        $('.display_pages').html('');
        var table =
              '<div class="table-responsive">'+
                '<table class="table m-0">'+
                  '<thead class="table_title">'+    
                  '</thead>'+
                  '<tbody class="table_files">'+ 
                  '</tbody>'+
                '</table>'+
              '</div>';
        $('.display_pages').html(table);
        list_files();
      }
      function table_only(){
        var table =
              '<div class="table-responsive">'+
                '<table class="table m-0">'+
                  '<thead class="table_title">'+    
                  '</thead>'+
                  '<tbody class="table_files">'+ 
                  '</tbody>'+
                '</table>'+
              '</div>';
        $('.display_pages').html(table);
      }

    function list_files(){
      var id = $('input[name="userid"]').val();
      var title =
          '<tr>'+
            '<th>Title</th>'+
            '<th>Instruction</th>'+
            '<th>Date Posted</th>'+
            '<th>Action</th>'+
          '</tr>';
      $('.table_title').html(title);
       $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_filesDisplay',
              type: 'POST',
              data:{id:id},
              dataType : "JSON",
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                    if(data[i].file_ext == 'pdf' || data[i].file_ext == 'doc' || data[i].file_ext == 'docx' || data[i].file_ext == 'xls' || data[i].file_ext == 'xlsx' || data[i].file_ext == 'pptx'){
                       html +=
                      '<tr>'+
                        '<td>'+data[i].title+'</td>'+
                        '<td>'+data[i].body+'</td>'+
                        '<td>'+data[i].date+'</td>'+
                        '<td><a href="javascript:void(0)" title="View Submitted By Student" data-post_id="'+data[i].post_id+'" class="btn btn-info viewSubmitted"><i class="fas fa-copy"></i> </a></td>'+
                      '</tr>';
                    }          
                  }
                $('.table_files').html(html);
              }
            });
        }
    
     $('.display_pages').on('click','.viewSubmitted',function (){
      $('.display_pages').html('');
      var post_id = $(this).data('post_id');
      $('input[name="post_id"]').val(post_id);
      var btn = 
        '<a href="javascript:void(0)" class="btn btn-info backList"><i class="fas fa-arrow-left"></i> Back</a>';
      $('.btn-back').html(btn);
       $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_section',
              type: 'POST',
              dataType : "JSON",
              error: function() {
                      alert('Error Cart No.1');
                   },
              success: function (data) {
                var html = '<div class="row mt-4">';
                  for(i=0; i<data.length; i++){
                      html+=
                        '<div class="col-sm-4">'+
                          '<div class="position-relative" style="min-height: 180px;">'+
                          '<img style="margin-left:5px; background:none; margin-bottom:5px;height: 70%; width: 70%;" src="<?php echo base_url(); ?>assets/files/folder.png" alt="Photo 3" class="img-fluid">'+
                          '</div>'+
                          '<label class="btn btn-success" style="margin-left:5px; font-size:22px;">'+data[i].section+' <a style="border:solid 1px black;" href="javascript:void(0)" data-post_id="'+post_id+'" data-section="'+data[i].section+'" class="btn btn-info view_files" data-section="'+data[i].section+'" title="List of file submitted by '+data[i].section+' students"><i class="fas fa-copy"></i> Files</a></label>'+
                        '</div>'
                      ;                                       
                    }
                    html +='</div>';
                $('.display_pages').html(html);
              }
            });
        });

     $('.btn-back').on('click','.backsection',function (){
       $('.display_pages').html('');
      var post_id = $(this).data('post_id');
      $('input[name="post_id"]').val(post_id);
      var btn = 
        '<a href="javascript:void(0)" class="btn btn-info backList"><i class="fas fa-arrow-left"></i> Back</a>';
      $('.btn-back').html(btn);
       $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_section',
              type: 'POST',
              dataType : "JSON",
              error: function() {
                      alert('Error Cart No.1');
                   },
              success: function (data) {
                var html = '<div class="row mt-4">';
                  for(i=0; i<data.length; i++){
                      html+=
                        '<div class="col-sm-4">'+
                          '<div class="position-relative" style="min-height: 180px;">'+
                          '<img style="margin-left:5px; background:none; margin-bottom:5px;height: 70%; width: 70%;" src="<?php echo base_url(); ?>assets/files/folder.png" alt="Photo 3" class="img-fluid">'+
                          '</div>'+
                          '<label class="btn btn-success" style="margin-left:5px; font-size:22px;">'+data[i].section+' <a style="border:solid 1px black;" href="javascript:void(0)" data-post_id="'+post_id+'" data-section="'+data[i].section+'" class="btn btn-info view_files" data-section="'+data[i].section+'" title="List of file submitted by '+data[i].section+' students"><i class="fas fa-copy"></i> Files</a></label>'+
                        '</div>'
                      ;                                       
                    }
                    html +='</div>';
                $('.display_pages').html(html);
              }
            });
        });


     $('.display_pages').on('click','.view_files',function (){
        table_only();
        var post_id = $(this).data('post_id');
        var section = $(this).data('section');

        var btn = 
        '<a href="javascript:void(0)" class="btn btn-info backList"><i class="fas fa-arrow-left"></i> Back</a> '+
        '<a href="javascript:void(0)" data-post_id="'+post_id+'" class="btn btn-success backsection"><i class="fas fa-folder"></i> Section</a> ';
      $('.btn-back').html(btn);

        var title =
          '<tr>'+
            '<th>Student Name</th>'+
            '<th>Student ID</th>'+
            '<th>Student Section</th>'+
            '<th>File Submitted</th>'+
          '</tr>';
        $('.table_title').html(title);

        $.ajax({
              url:'<?=base_url()?>index.php/pages/view_submittedStudentFiles',
              type: 'POST',
              data:{post_id:post_id, section:section},
              dataType : "JSON",
              success: function (data) {
                 var html = '';
                  for(i=0; i<data.length; i++){
                    html +=
                    '<tr>'+
                      '<td>'+data[i].fullname+'</td>'+
                      '<td>'+data[i].student_id+'</td>'+
                      '<td>'+data[i].cor_sec+'</td>'+
                      '<td><a href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" class="btn btn-info"><i class="fas fa-download"></i> '+data[i].file+'</a></td>'+
                    '</tr>';        
                  }
                $('.table_files').html(html);
              }
            });
     });

    $('.btn-back').on('click','.backList',function (){
      table_display();
   });

      
  });
</script>