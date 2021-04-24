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
  <script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery-ui/jquery-ui.min.js"></script>
</head>

<body style="background-image: linear-gradient(to bottom , #800000, #CC3300); " class="hold-transition sidebar-collapse layout-fixed">
  <?php
    if($class_code){
      $data = $class_code;
      $field = 'class_code';
      $table = 'tbl_class';
      foreach ($this->load->model_users->data($data,$field,$table) as  $value) {
        $course = $value->course;
        $prof = $value->admin
  ?>
<div class="wrapper">
    <nav style="background-image: linear-gradient(to right, #800000, #CC3300); " class="main-header navbar navbar-expand navbar-white navbar-dark">
    <span style="color:white;">Instructor: <?php echo $prof; ?> </span>
  </nav>


  <!-- Content Wrapper. Contains page content -->
  <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color: white;"><?php echo $course; ?></h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a style="color: white;">Class Room</a></li>
              <li style="color: white;" class="breadcrumb-item active"> Students Records</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <input type="hidden" name="class_code" value="<?php echo $class_code; ?>">
<?php }} ?>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <div class="card-header buttons_btn">
                
              </div>
              <div class="card-body">
                <div class="sub_btn">
                 
                </div>
                <div class="card-body table-responsive">  
                <table id="example2" class="table table-bordered table-hover">
                  <thead class="title_table">
                 
                  </thead>
                  <tbody class="table_body">
           
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  </div>



<div class="modal fade" id="view_records">
        <div class="modal-dialog modal-xl">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title Instructor_name"> </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
             <h5 style="margin-left: 20px;" class="student_name_rec">List of Class</h5>
            <div class="modal-body">
              <table border="1" class="table table-striped projects">
                <thead>
                  <tr style="color:white; background:maroon;">
                    <th>#</th>
                    <th>Student ID</th>
                    <th>Activity Title</th>
                    <th>File Submitted</th>
                    <th>Date Submitted</th>
                    <th>Grade</th>
                  </tr>
                </thead>
                <tbody class="table_data_list">
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  
 <footer style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="main-footer">
    <strong>Copyright &copy;<a href="#">MAT</a>.</strong>
    All rights reserved.
  </footer>
</div>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sparklines/sparkline.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/jqvmap/maps/jquery.vmap.usa.js"></script><script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="<?php echo base_url(); ?>assets/page/pages/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/dist/js/adminlte.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/select2/js/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/dropzone/min/dropzone.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/filterizr/jquery.filterizr.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/toastr/toastr.min.js"></script>

<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweet/sweetalert-dev.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweet/sweetalert.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/page/chat.js"></script> -->
<script src="<?php echo base_url(); ?>assets/page/clock.js"></script>
</body>
</html>

<script>
$(document).ready(function(){
    default_btn();

  function table_display(){
      var table_head =
        '<tr style="color:white; background:maroon;">'+
          '<th>#</th>'+
          '<th>Title Name</th>'+
          '<th>File</th>'+
          '<th>Date Posted</th>'+
          '<th>Action</th>'+
        '</tr>';
        $('.title_table').html(table_head);
  }
  function default_btn(){
    var btn = 
      '<a href="javascript:void(0)" class="btn btn-success student"><i class="fas fa-folder"></i> Student List</a> '+
      '<a href="javascript:void(0)" class="btn btn-default module"><i class="fas fa-book"></i> Uploaded Module</a> '+
      '<a href="javascript:void(0)" class="btn btn-default activity"><i class="fas fa-folder-open"></i> Uploaded Activity</a> '+
      '<a href="javascript:void(0)" class="btn btn-default assignment"><i class="fas fa-folder-open"></i> Uploaded Assignment</a> '+
      '<a href="javascript:void(0)" class="btn btn-default quiz"><i class="fas fa-folder-open"></i> Uploaded Quiz</a> '+
      '<a href="javascript:void(0)" class="btn btn-default project"><i class="fas fa-folder-open"></i> Uploaded Project</a> '+
      '<a href="javascript:void(0)" class="btn btn-default exam"><i class="fas fa-folder-open"></i> Uploaded Exam</a>';
    $('.buttons_btn').html(btn);
    var table_head =
    '<tr style="color:white; background:maroon;">'+
      '<th>#</th>'+
      '<th>Student Name</th>'+
      '<th>Student ID</th>'+
      '<th>Section</th>'+
      '<th>Activity</th>'+
      '<th>Assignment</th>'+
      '<th>Quiz</th>'+
      '<th>Project</th>'+
      '<th>Exam</th>'+
    '</tr>';
    $('.title_table').html(table_head);
    var class_code = $('input[name="class_code"]').val();
        $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_classStudent',
              type: 'POST',
              data:{class_code:class_code},
              dataType : "JSON",
              success: function (data) {  
                var html ="";        
                  for(i=0; i<data.length; i++){
                    html +=
                    '<tr>'+
                      '<td>'+(i+1)+'</td>'+
                      '<td>'+data[i].fullname+'</td>'+
                      '<td>'+data[i].student_id+'</td>'+
                      '<td>'+data[i].cor_sec+'</td>'+
                      '<td><a href="javascript:void(0)" data-type="2" data-name="'+data[i].fullname+'" data-stud_id="'+data[i].student_id+'" class="btn btn-info record_stud"><i class="fas fa-folder-open"></i> Records</a></td>'+
                      '<td><a href="javascript:void(0)" data-type="4" data-name="'+data[i].fullname+'" data-stud_id="'+data[i].student_id+'" class="btn btn-info record_stud"><i class="fas fa-folder-open"></i> Records</a></td>'+
                      '<td><a href="javascript:void(0)" data-type="5" data-name="'+data[i].fullname+'" data-stud_id="'+data[i].student_id+'" class="btn btn-info record_stud"><i class="fas fa-folder-open"></i> Records</a></td>'+
                      '<td><a href="javascript:void(0)" data-type="7" data-name="'+data[i].fullname+'" data-stud_id="'+data[i].student_id+'" class="btn btn-info record_stud"><i class="fas fa-folder-open"></i> Records</a></td>'+
                      '<td><a href="javascript:void(0)" data-type="6" data-name="'+data[i].fullname+'" data-stud_id="'+data[i].student_id+'" class="btn btn-info record_stud"><i class="fas fa-folder-open"></i> Records</a></td>'+
                    '</tr>';
                  }
                if(data.length == '0'){
                  html +=
                '<tr><td colspan="9"></tr><tr></td><td colspan="8"></td></tr><tr><td colspan="8"></td></tr>'+
                '<tr><td colspan="9" style="color:white; background:red; text-align:center;"> No Class Records</td></tr>';
                }
                else{
                  html +=
                '<tr><td colspan="9" style="color:white; background:maroon; text-align:center;"> Nothing to Follow!!!</td></tr>';
                }
                $('.table_body').html(html);
              }
            });
  }
  $('.table_body').on('click','.record_stud',function (){
    var type = $(this).data('type');
    var name = $(this).data('name');
    var id = $(this).data('stud_id');
    var class_code = $('input[name="class_code"]').val();

    var sub = '';
    var act = '';
    if(type == '2'){
      sub ='Records of Submitted Activity';
      act ='Activity';
    }
    else if(type == '4'){
      sub ='Records of Submitted Assignment';
      act ='Assignment';
    }
    else if(type == '5'){
      sub ='Records of Submitted Quiz';
      act ='Quiz';
    }
    else if(type == '6'){
      sub ='Records of Submitted Exam';
      act ='Exam';
    }
    else if(type == '7'){
      sub ='Records of Submitted Project';
      act ='Project';
    }
    $('.student_name_rec').html(name+" "+sub);
    $('#view_records').modal('show');

     $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_display_submitted',
              type: 'POST',
              data:{class_code:class_code, type:type,id:id},
              dataType : "JSON",
              success: function (data) {  
                var html =""; 
                var submitted =0;      
                  for(i=0; i<data.length; i++){
                    if(data[i].student_id == id){
                       submitted += 1;
                      if(data[i].student_grades == '0'){
                        html +=
                        '<tr>'+
                          '<td>'+(i+1)+'</td>'+
                          '<td>'+data[i].student_id+'</td>'+
                          '<td>'+data[i].title+'</td>'+
                          '<td><a href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" class="btn  btn-block btn-default"><i class="fas fa-download"></i> Download File</a></td>'+
                          '<td>'+data[i].encoded_date+'</td>'+
                          '<td><a class="btn btn-warning"><i class="fas fa-check"></i></a> To Check by Instructor</td>'+
                        '</tr>';  
                      }
                      else if(data[i].student_grades >= 90){
                        html +=
                        '<tr>'+
                          '<td>'+(i+1)+'</td>'+
                          '<td>'+data[i].student_id+'</td>'+
                          '<td>'+data[i].title+'</td>'+
                          '<td><a href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" class="btn  btn-block btn-default"><i class="fas fa-download"></i> Download File</a></td>'+
                          '<td>'+data[i].encoded_date+'</td>'+
                          '<td><a class="btn btn-success"><i class="fas fa-file"></i></a> '+data[i].student_grades+'%  Grade</td>'+
                        '</tr>';  
                      }
                      else if(data[i].student_grades >= 80){
                        html +=
                        '<tr>'+
                          '<td>'+(i+1)+'</td>'+
                          '<td>'+data[i].student_id+'</td>'+
                          '<td>'+data[i].title+'</td>'+
                          '<td><a href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" class="btn  btn-block btn-default"><i class="fas fa-download"></i> Download File</a></td>'+
                          '<td>'+data[i].encoded_date+'</td>'+
                          '<td><a class="btn btn-info"><i class="fas fa-file"></i></a> '+data[i].student_grades+'%  Grade</td>'+
                        '</tr>';  
                      }
                      else if(data[i].student_grades >= 75){
                        html +=
                        '<tr>'+
                          '<td>'+(i+1)+'</td>'+
                          '<td>'+data[i].student_id+'</td>'+
                          '<td>'+data[i].title+'</td>'+
                          '<td><a href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" class="btn  btn-block btn-default"><i class="fas fa-download"></i> Download File</a></td>'+
                          '<td>'+data[i].encoded_date+'</td>'+
                          '<td><a class="btn btn-warning"><i class="fas fa-file"></i></a> '+data[i].student_grades+'%  Grade</td>'+
                        '</tr>';  
                      }
                    } 
                    else{
                      html +=
                      '<tr>'+
                        '<td>'+(i+1)+'</td>'+
                        '<td><a class="btn btn-block btn-danger"><i class="fas fa-minus"></i></a></td>'+
                        '<td>'+data[i].title+'</td>'+
                        '<td><a class="btn btn-block btn-danger"><i class="fas fa-minus"></i></a></td>'+
                        '<td><a class="btn btn-block btn-danger"><i class="fas fa-minus"></i></a></td>'+
                        '<td><a class="btn btn-danger"><i class="fas fa-times"></i></a> No Grade</td>'+
                      '</tr>';  
                    }     
                  }
                  html +=
                '<tr><td colspan="2" style="color:white; background:maroon; text-align:center;">No. of Submitted '+act+': '+submitted+' out of: '+data.length+'</td><td colspan="4" style="color:white; background:maroon; text-align:center;"> Nothing to Follow!!!</td></tr>';
                $('.table_data_list').html(html);
              }
            });
  });

  $('.buttons_btn').on('click','.student',function (){
    default_btn();
    $('.table_body').html('');
  });

   $('.buttons_btn').on('click','.module',function (){
    $('.table_body').html('');
    $('.title_table').html('');
    var btn = 
      '<a href="javascript:void(0)" class="btn btn-default student"><i class="fas fa-folder"></i> Student List</a> '+
      '<a href="javascript:void(0)" class="btn btn-success module"><i class="fas fa-book"></i> Uploaded Module</a> '+
      '<a href="javascript:void(0)" class="btn btn-default activity"><i class="fas fa-folder-open"></i> Uploaded Activity</a> '+
      '<a href="javascript:void(0)" class="btn btn-default assignment"><i class="fas fa-folder-open"></i> Uploaded Assignment</a> '+
      '<a href="javascript:void(0)" class="btn btn-default quiz"><i class="fas fa-folder-open"></i> Uploaded Quiz</a> '+
      '<a href="javascript:void(0)" class="btn btn-default project"><i class="fas fa-folder-open"></i> Uploaded Project</a> '+
      '<a href="javascript:void(0)" class="btn btn-default exam"><i class="fas fa-folder-open"></i> Uploaded Exam</a>';
    $('.buttons_btn').html(btn);
    table_display();  
    module_view();
  });

  function module_view(){
    var type = 3;
     var class_code = $('input[name="class_code"]').val();
      $.ajax({
        url:'<?=base_url()?>index.php/pages/ajax_views_recs',
        type: 'POST',
        data:{class_code:class_code, type:type},
        dataType : "JSON",
        success: function (data) {  
        var html ='';        
          for(i=0; i<data.length; i++){
            if(data[i].file){
              html +=
              '<tr>'+
                '<td>'+(i+1)+'</td>'+
                '<td>'+data[i].title+'</td>'+
                '<td><a href="<?php echo base_url(); ?>pages/download/'+data[i].file+'" class="btn  btn-block btn-info"><i class="fas fa-download"></i> Download File</a></td>'+
                '<td>'+data[i].date+'</td>'+
                '<td><a href="javascript:void(0);" data-post_id="'+data[i].post_id+'" class="btn btn-danger delete_mod"><i class="fas fa-times"></i> Remove</a></td>'+
              '</tr>';
            }
            else{
              html +=
              '<tr>'+
                '<td>'+(i+1)+'</td>'+
                '<td>'+data[i].title+'</td>'+
                '<td><a class="btn  btn-block btn-default"><i class="fas fa-download"></i> No Uploaded File</a></td>'+
                '<td>'+data[i].date+'</td>'+
                '<td><a href="javascript:void(0);" data-post_id="'+data[i].post_id+'" class="btn btn-danger delete_mod"><i class="fas fa-times"></i> Remove</a></td>'+
              '</tr>';
            } 
            
          }
          $('.table_body').html(html);
        }
      });
  }
  $('.table_body').on('click','.delete_mod',function (){
    var post_id = $(this).data('post_id');
     $.ajax({
        url:'<?=base_url()?>index.php/pages/ajax_delete_mod',
        type: 'POST',
        data:{post_id:post_id},
        dataType : "JSON",
        success: function (data) {  
          module_view();
          swal("Process Success!", "Success", "success");
        }
      });
  });


   $('.buttons_btn').on('click','.activity',function (){
    $('.table_body').html('');
    var btn = 
      '<a href="javascript:void(0)" class="btn btn-default student"><i class="fas fa-folder"></i> Student List</a> '+
      '<a href="javascript:void(0)" class="btn btn-default module"><i class="fas fa-book"></i> Uploaded Module</a> '+
      '<a href="javascript:void(0)" class="btn btn-success activity"><i class="fas fa-folder-open"></i> Uploaded Activity</a> '+
      '<a href="javascript:void(0)" class="btn btn-default assignment"><i class="fas fa-folder-open"></i> Uploaded Assignment</a> '+
      '<a href="javascript:void(0)" class="btn btn-default quiz"><i class="fas fa-folder-open"></i> Uploaded Quiz</a> '+
      '<a href="javascript:void(0)" class="btn btn-default project"><i class="fas fa-folder-open"></i> Uploaded Project</a> '+
      '<a href="javascript:void(0)" class="btn btn-default exam"><i class="fas fa-folder-open"></i> Uploaded Exam</a>';
    $('.buttons_btn').html(btn);
        table_display();  
         var type = 2;
         var class_code = $('input[name="class_code"]').val();
          $.ajax({
            url:'<?=base_url()?>index.php/pages/ajax_views_recs',
            type: 'POST',
            data:{class_code:class_code, type:type},
            dataType : "JSON",
            success: function (data) {  
            var html ='';        
              for(i=0; i<data.length; i++){
               if(data[i].file){
                  html +=
                  '<tr>'+
                    '<td>'+(i+1)+'</td>'+
                    '<td>'+data[i].title+'</td>'+
                    '<td><a href="<?php echo base_url(); ?>pages/download/'+data[i].file+'" class="btn  btn-block btn-info"><i class="fas fa-download"></i> Download File</a></td>'+
                    '<td>'+data[i].date+'</td>'+
                    '<td><a href="javascript:void(0);" class="btn btn-info"><i class="fas fa-eye"></i> View</a></td>'+
                  '</tr>';
                }
                else{
                  html +=
                  '<tr>'+
                    '<td>'+(i+1)+'</td>'+
                    '<td>'+data[i].title+'</td>'+
                    '<td><a class="btn  btn-block btn-default"><i class="fas fa-download"></i> No Uploaded File</a></td>'+
                    '<td>'+data[i].date+'</td>'+
                    '<td><a href="javascript:void(0);" class="btn btn-info"><i class="fas fa-eye"></i> View</a></td>'+
                  '</tr>';
                } 
              }
              $('.table_body').html(html);
            }
          });
  });

   $('.buttons_btn').on('click','.assignment',function (){
    $('.table_body').html('');
    var btn = 
      '<a href="javascript:void(0)" class="btn btn-default student"><i class="fas fa-folder"></i> Student List</a> '+
      '<a href="javascript:void(0)" class="btn btn-default module"><i class="fas fa-book"></i> Uploaded Module</a> '+
      '<a href="javascript:void(0)" class="btn btn-default activity"><i class="fas fa-folder-open"></i> Uploaded Activity</a> '+
      '<a href="javascript:void(0)" class="btn btn-success assignment"><i class="fas fa-folder-open"></i> Uploaded Assignment</a> '+
      '<a href="javascript:void(0)" class="btn btn-default quiz"><i class="fas fa-folder-open"></i> Uploaded Quiz</a> '+
      '<a href="javascript:void(0)" class="btn btn-default project"><i class="fas fa-folder-open"></i> Uploaded Project</a> '+
      '<a href="javascript:void(0)" class="btn btn-default exam"><i class="fas fa-folder-open"></i> Uploaded Exam</a>';
    $('.buttons_btn').html(btn);
      table_display();  
         var type = 4;
         var class_code = $('input[name="class_code"]').val();
          $.ajax({
            url:'<?=base_url()?>index.php/pages/ajax_views_recs',
            type: 'POST',
            data:{class_code:class_code, type:type},
            dataType : "JSON",
            success: function (data) {  
            var html ='';        
              for(i=0; i<data.length; i++){
               if(data[i].file){
                  html +=
                  '<tr>'+
                    '<td>'+(i+1)+'</td>'+
                    '<td>'+data[i].title+'</td>'+
                    '<td><a href="<?php echo base_url(); ?>pages/download/'+data[i].file+'" class="btn  btn-block btn-info"><i class="fas fa-download"></i> Download File</a></td>'+
                    '<td>'+data[i].date+'</td>'+
                    '<td><a href="javascript:void(0);" class="btn btn-info"><i class="fas fa-eye"></i> View</a></td>'+
                  '</tr>';
                }
                else{
                  html +=
                  '<tr>'+
                    '<td>'+(i+1)+'</td>'+
                    '<td>'+data[i].title+'</td>'+
                    '<td><a class="btn  btn-block btn-default"><i class="fas fa-download"></i> No Uploaded File</a></td>'+
                    '<td>'+data[i].date+'</td>'+
                    '<td><a href="javascript:void(0);" class="btn btn-info"><i class="fas fa-eye"></i> View</a></td>'+
                  '</tr>';
                } 
              }
              $('.table_body').html(html);
            }
          });

  });

   $('.buttons_btn').on('click','.quiz',function (){
    $('.table_body').html('');
    var btn = 
      '<a href="javascript:void(0)" class="btn btn-default student"><i class="fas fa-folder"></i> Student List</a> '+
      '<a href="javascript:void(0)" class="btn btn-default module"><i class="fas fa-book"></i> Uploaded Module</a> '+
      '<a href="javascript:void(0)" class="btn btn-default activity"><i class="fas fa-folder-open"></i> Uploaded Activity</a> '+
      '<a href="javascript:void(0)" class="btn btn-default assignment"><i class="fas fa-folder-open"></i> Uploaded Assignment</a> '+
      '<a href="javascript:void(0)" class="btn btn-success quiz"><i class="fas fa-folder-open"></i> Uploaded Quiz</a> '+
      '<a href="javascript:void(0)" class="btn btn-default project"><i class="fas fa-folder-open"></i> Uploaded Project</a> '+
      '<a href="javascript:void(0)" class="btn btn-default exam"><i class="fas fa-folder-open"></i> Uploaded Exam</a>';
    $('.buttons_btn').html(btn);
      table_display();  
         var type = 5;
         var class_code = $('input[name="class_code"]').val();
          $.ajax({
            url:'<?=base_url()?>index.php/pages/ajax_views_recs',
            type: 'POST',
            data:{class_code:class_code, type:type},
            dataType : "JSON",
            success: function (data) {  
            var html ='';        
              for(i=0; i<data.length; i++){
               if(data[i].file){
                  html +=
                  '<tr>'+
                    '<td>'+(i+1)+'</td>'+
                    '<td>'+data[i].title+'</td>'+
                    '<td><a href="<?php echo base_url(); ?>pages/download/'+data[i].file+'" class="btn  btn-block btn-info"><i class="fas fa-download"></i> Download File</a></td>'+
                    '<td>'+data[i].date+'</td>'+
                    '<td><a href="javascript:void(0);" class="btn btn-info"><i class="fas fa-eye"></i> View</a></td>'+
                  '</tr>';
                }
                else{
                  html +=
                  '<tr>'+
                    '<td>'+(i+1)+'</td>'+
                    '<td>'+data[i].title+'</td>'+
                    '<td><a class="btn  btn-block btn-default"><i class="fas fa-download"></i> No Uploaded File</a></td>'+
                    '<td>'+data[i].date+'</td>'+
                    '<td><a href="javascript:void(0);" class="btn btn-info"><i class="fas fa-eye"></i> View</a></td>'+
                  '</tr>';
                } 
              }
              $('.table_body').html(html);
            }
          });
  });

   $('.buttons_btn').on('click','.project',function (){
    $('.table_body').html('');
    var btn = 
      '<a href="javascript:void(0)" class="btn btn-default student"><i class="fas fa-folder"></i> Student List</a> '+
      '<a href="javascript:void(0)" class="btn btn-default module"><i class="fas fa-book"></i> Uploaded Module</a> '+
      '<a href="javascript:void(0)" class="btn btn-default activity"><i class="fas fa-folder-open"></i> Uploaded Activity</a> '+
      '<a href="javascript:void(0)" class="btn btn-default assignment"><i class="fas fa-folder-open"></i> Uploaded Assignment</a> '+
      '<a href="javascript:void(0)" class="btn btn-default quiz"><i class="fas fa-folder-open"></i> Uploaded Quiz</a> '+
      '<a href="javascript:void(0)" class="btn btn-success project"><i class="fas fa-folder-open"></i> Uploaded Project</a> '+
      '<a href="javascript:void(0)" class="btn btn-default exam"><i class="fas fa-folder-open"></i> Uploaded Exam</a>';
    $('.buttons_btn').html(btn);
      table_display();  
         var type = 7;
         var class_code = $('input[name="class_code"]').val();
          $.ajax({
            url:'<?=base_url()?>index.php/pages/ajax_views_recs',
            type: 'POST',
            data:{class_code:class_code, type:type},
            dataType : "JSON",
            success: function (data) {  
            var html ='';        
              for(i=0; i<data.length; i++){
                if(data[i].file){
                  html +=
                  '<tr>'+
                    '<td>'+(i+1)+'</td>'+
                    '<td>'+data[i].title+'</td>'+
                    '<td><a href="<?php echo base_url(); ?>pages/download/'+data[i].file+'" class="btn  btn-block btn-info"><i class="fas fa-download"></i> Download File</a></td>'+
                    '<td>'+data[i].date+'</td>'+
                    '<td><a href="javascript:void(0);" class="btn btn-info"><i class="fas fa-eye"></i> View</a></td>'+
                  '</tr>';
                }
                else{
                  html +=
                  '<tr>'+
                    '<td>'+(i+1)+'</td>'+
                    '<td>'+data[i].title+'</td>'+
                    '<td><a class="btn  btn-block btn-default"><i class="fas fa-download"></i> No Uploaded File</a></td>'+
                    '<td>'+data[i].date+'</td>'+
                    '<td><a href="javascript:void(0);" class="btn btn-info"><i class="fas fa-eye"></i> View</a></td>'+
                  '</tr>';
                } 
              }
              $('.table_body').html(html);
            }
          });
  });

     $('.buttons_btn').on('click','.exam',function (){
      $('.table_body').html('');
    var btn = 
      '<a href="javascript:void(0)" class="btn btn-default student"><i class="fas fa-folder"></i> Student List</a> '+
      '<a href="javascript:void(0)" class="btn btn-default module"><i class="fas fa-book"></i> Uploaded Module</a> '+
      '<a href="javascript:void(0)" class="btn btn-default activity"><i class="fas fa-folder-open"></i> Uploaded Activity</a> '+
      '<a href="javascript:void(0)" class="btn btn-default assignment"><i class="fas fa-folder-open"></i> Uploaded Assignment</a> '+
      '<a href="javascript:void(0)" class="btn btn-default quiz"><i class="fas fa-folder-open"></i> Uploaded Quiz</a> '+
      '<a href="javascript:void(0)" class="btn btn-default project"><i class="fas fa-folder-open"></i> Uploaded Project</a> '+
      '<a href="javascript:void(0)" class="btn btn-success exam"><i class="fas fa-folder-open"></i> Uploaded Exam</a>';
    $('.buttons_btn').html(btn);
      table_display();  
         var type = 6;
         var class_code = $('input[name="class_code"]').val();
          $.ajax({
            url:'<?=base_url()?>index.php/pages/ajax_views_recs',
            type: 'POST',
            data:{class_code:class_code, type:type},
            dataType : "JSON",
            success: function (data) {  
            var html ='';        
              for(i=0; i<data.length; i++){
                if(data[i].file){
                  html +=
                  '<tr>'+
                    '<td>'+(i+1)+'</td>'+
                    '<td>'+data[i].title+'</td>'+
                    '<td><a href="<?php echo base_url(); ?>pages/download/'+data[i].file+'" class="btn  btn-block btn-info"><i class="fas fa-download"></i> Download File</a></td>'+
                    '<td>'+data[i].date+'</td>'+
                    '<td><a href="javascript:void(0);" class="btn btn-info"><i class="fas fa-eye"></i> View</a></td>'+
                  '</tr>';
                }
                else{
                  html +=
                  '<tr>'+
                    '<td>'+(i+1)+'</td>'+
                    '<td>'+data[i].title+'</td>'+
                    '<td><a class="btn  btn-block btn-default"><i class="fas fa-download"></i> No Uploaded File</a></td>'+
                    '<td>'+data[i].date+'</td>'+
                    '<td><a href="javascript:void(0);" class="btn btn-info"><i class="fas fa-eye"></i> View</a></td>'+
                  '</tr>';
                } 
              }
              $('.table_body').html(html);
            }
          });
  });


});
</script>
