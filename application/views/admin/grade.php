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
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    <nav style="background-image: linear-gradient(to right, #800000, #CC3300); " class="main-header navbar navbar-expand navbar-white navbar-dark">
    <!-- Left navbar links -->
   <!--  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul> -->
    <span style="color:white;">Subject: <?php echo $sub_code; ?> </span>
    <ul class="navbar-nav ml-auto">
    
    </ul>
  </nav>


  <!-- Content Wrapper. Contains page content -->
  <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color: white;"><?php echo $section; ?> RECORDS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a style="color: white;" href="<?php echo base_url(); ?>pages/enterClass/<?php echo $class_codebin; ?>/<?php echo $sectionbin; ?>/<?php echo $sub_codebin; ?>">Class Room</a></li>
              <li style="color: white;" class="breadcrumb-item active"><?php echo $section; ?> RECORDS</li>
            </ol>
          </div>
        </div>
      </div>
    </section>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <input type="hidden" name="class_code" value="<?php echo $class_code ?>">
                <input type="hidden" name="class_sect" value="<?php echo $section ?>">
                <input type="hidden" name="view_mode">
                <input type="hidden" name="type_mode">
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
    </section>  
  </div>

    <div class="modal fade" id="check_answer">
        <div  class="modal-dialog modal-lg">
          <div  style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="modal-content">
            <div class="modal-header">
              <input type="hidden" name="activity_code_chk">
              <input type="hidden" name="student_id_chk">
              <input type="hidden" name="wrong_total">
              <input type="hidden" name="right_total">
              <input type="hidden" name="total">
              <input type="hidden" name="to_chk">
            </div>
            <div class="modal-body">
              <div class="col-12 display_check">

              </div>
              <div class="col-12 confirm_btn">

              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="modal fade" id="set_quarter">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title title_display"></h4>
                <input type="hidden" name="post_id_quarter">          
            </div>
            <div class="modal-body">
              <label>Quarter:</label>
                <select class="form-control" name="quarter_selector">
                  <option value="">Option...</option>
                  <option value="1st"> 1st Quarter</option>
                  <option value="2nd"> 2nd Quarter</option>
                  <option value="3rd"> 3rd Quarter</option>
                  <option value="4th"> Final Quarter</option>
                </select>
              <label>Type:</label>
                 <select class="form-control" name="record_type">
                  <option value="">Option...</option>
                  <option value="WW"> Written Work (WW)</option>
                  <option value="PT"> Performance Task (PT)</option>
                  <option value="QA"> Assesment (QA)</option>
                </select>

              <a style="margin-top: 10px;" href="javascript:void(0)" class="btn btn-block btn-success confirm_quarter"><i class="fas fa-check"></i> Confirm</a>
            </div>
          </div>
        </div>
      </div>
 <footer style="color:white; background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="main-footer">
    <strong style="color:white;">Copyright &copy;<a href="#">MAT</a>.</strong>
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

<script type="text/javascript">
  $(document).ready(function () {

    activity_btn();
    function activity_btn(){
      var btn = 
        '<a href="javascript:void(0)" class="btn btn-info activity_btn"><i class="fas fa-file"></i> Activity</a> '+
        '<a href="javascript:void(0)" class="btn btn-default assign_btn"><i class="fas fa-file"></i> Assignment</a> '+
        '<a href="javascript:void(0)" class="btn btn-default quiz_btn"><i class="fas fa-file"></i> Quizzes</a> '+
        '<a href="javascript:void(0)" class="btn btn-default project_btn"><i class="fas fa-file"></i> Project</a> '+
        '<a href="javascript:void(0)" class="btn btn-default exam_btn"><i class="fas fa-file"></i> Exam</a> ';
        // '<a href="javascript:void(0)" class="btn btn-default final_btn"><i class="fas fa-file"></i> Final Grades</a>';
      $('.buttons_btn').html(btn);
      $('input[name="view_mode"]').val('0');
      $('input[name="type_mode"]').val('2');
      sub_btn_actStud(); 
    }
     function assign_btn(){
      var btn = 
        '<a href="javascript:void(0)" class="btn btn-default activity_btn"><i class="fas fa-file"></i> Activity</a> '+
        '<a href="javascript:void(0)" class="btn btn-info assign_btn"><i class="fas fa-file"></i> Assignment</a> '+
        '<a href="javascript:void(0)" class="btn btn-default quiz_btn"><i class="fas fa-file"></i> Quizzes</a> '+
        '<a href="javascript:void(0)" class="btn btn-default project_btn"><i class="fas fa-file"></i> Project</a> '+
        '<a href="javascript:void(0)" class="btn btn-default exam_btn"><i class="fas fa-file"></i> Exam</a> ';
        // '<a href="javascript:void(0)" class="btn btn-default final_btn"><i class="fas fa-file"></i> Final Grades</a>';
      $('.buttons_btn').html(btn);
      $('input[name="view_mode"]').val('0');
      $('input[name="type_mode"]').val('4');
      sub_btn_actStud();
    }
     function quiz_btn(){
      var btn = 
        '<a href="javascript:void(0)" class="btn btn-default activity_btn"><i class="fas fa-file"></i> Activity</a> '+
        '<a href="javascript:void(0)" class="btn btn-default assign_btn"><i class="fas fa-file"></i> Assignment</a> '+
        '<a href="javascript:void(0)" class="btn btn-info quiz_btn"><i class="fas fa-file"></i> Quizzes</a> '+
        '<a href="javascript:void(0)" class="btn btn-default project_btn"><i class="fas fa-file"></i> Project</a> '+
        '<a href="javascript:void(0)" class="btn btn-default exam_btn"><i class="fas fa-file"></i> Exam</a> ';
        // '<a href="javascript:void(0)" class="btn btn-default final_btn"><i class="fas fa-file"></i> Final Grades</a>';
      $('.buttons_btn').html(btn);
      $('input[name="view_mode"]').val('0');
      $('input[name="type_mode"]').val('5');
      sub_btn_actStud();
    }
     function project_btn(){
      var btn = 
        '<a href="javascript:void(0)" class="btn btn-default activity_btn"><i class="fas fa-file"></i> Activity</a> '+
        '<a href="javascript:void(0)" class="btn btn-default assign_btn"><i class="fas fa-file"></i> Assignment</a> '+
        '<a href="javascript:void(0)" class="btn btn-default quiz_btn"><i class="fas fa-file"></i> Quizzes</a> '+
        '<a href="javascript:void(0)" class="btn btn-info project_btn"><i class="fas fa-file"></i> Project</a> '+
        '<a href="javascript:void(0)" class="btn btn-default exam_btn"><i class="fas fa-file"></i> Exam</a> ';
        // '<a href="javascript:void(0)" class="btn btn-default final_btn"><i class="fas fa-file"></i> Final Grades</a>';
      $('.buttons_btn').html(btn);
      $('input[name="view_mode"]').val('0');
      $('input[name="type_mode"]').val('7');
      sub_btn_actStud();
    }
     function exam_btn(){
      var btn = 
        '<a href="javascript:void(0)" class="btn btn-default activity_btn"><i class="fas fa-file"></i> Activity</a> '+
        '<a href="javascript:void(0)" class="btn btn-default assign_btn"><i class="fas fa-file"></i> Assignment</a> '+
        '<a href="javascript:void(0)" class="btn btn-default quiz_btn"><i class="fas fa-file"></i> Quizzes</a> '+
        '<a href="javascript:void(0)" class="btn btn-default project_btn"><i class="fas fa-file"></i> Project</a> '+
        '<a href="javascript:void(0)" class="btn btn-info exam_btn"><i class="fas fa-file"></i> Exam</a> ';
        // '<a href="javascript:void(0)" class="btn btn-default final_btn"><i class="fas fa-file"></i> Final Grades</a>';
      $('.buttons_btn').html(btn);
      $('input[name="view_mode"]').val('0');
      $('input[name="type_mode"]').val('6');
      sub_btn_actStud();
    }
    //  function final_btn(){
    //   var btn = 
    //     '<a href="javascript:void(0)" class="btn btn-default activity_btn"><i class="fas fa-file"></i> Activity</a> '+
    //     '<a href="javascript:void(0)" class="btn btn-default assign_btn"><i class="fas fa-file"></i> Assignment</a> '+
    //     '<a href="javascript:void(0)" class="btn btn-default quiz_btn"><i class="fas fa-file"></i> Quizzes</a> '+
    //     '<a href="javascript:void(0)" class="btn btn-default project_btn"><i class="fas fa-file"></i> Project</a> '+
    //     '<a href="javascript:void(0)" class="btn btn-default exam_btn"><i class="fas fa-file"></i> Exam</a> '+
    //     '<a href="javascript:void(0)" class="btn btn-info final_btn"><i class="fas fa-file"></i> Final Grades</a>';
    //   $('.buttons_btn').html(btn);
    //   $('input[name="view_mode"]').val('0');
    //   $('input[name="type_mode"]').val('fin');
    //   sub_btn_actStud();
    // }

    $('.buttons_btn').on('click','.activity_btn',function (){
         activity_btn();
    });
    $('.buttons_btn').on('click','.assign_btn',function (){
         assign_btn();
    });
    $('.buttons_btn').on('click','.quiz_btn',function (){
         quiz_btn();
    });
    $('.buttons_btn').on('click','.project_btn',function (){
         project_btn();
    });
    $('.buttons_btn').on('click','.exam_btn',function (){
         exam_btn();
    });
    $('.buttons_btn').on('click','.final_btn',function (){
         final_btn();
    });
    $('.sub_btn').on('click','.studentView',function (){
         sub_btn_actStud();
    });
    $('.sub_btn').on('click','.activityView',function (){
         sub_btn_actAct();
    });

    function sub_btn_actStud(){
      $('.title_table').html('');
      var btn =
        '<a href="javascript:void(0)" class="btn btn-success studentView"><i class="fas fa-users"></i> Students</a> '+
        '<a href="javascript:void(0)" class="btn btn-default activityView"><i class="fas fa-cogs"></i> Records</a>';
      $('.sub_btn').html(btn);
      $('input[name="view_mode"]').val('0');
      var table_head =
                  '<tr>'+
                    '<th>STUDENTS NAME:</th>'+
                    '<th>PROFILE</th>'+
                    '<th>ID</th>'+
                    '<th>SECTION</th>'+
                    '<th>ACTION</th>'+
                  '</tr>';
      $('.title_table').html(table_head);
      act_opt();
    }
    function sub_btn_actAct(){
      $('.title_table').html('');
      var btn =
        '<a href="javascript:void(0)" class="btn btn-default studentView"><i class="fas fa-users"></i> Students</a> '+
        '<a href="javascript:void(0)" class="btn btn-success activityView"><i class="fas fa-cogs"></i> Records</a>';
      $('.sub_btn').html(btn);
      $('input[name="view_mode"]').val('1');
      var table_head =
                  '<tr>'+
                    '<th>#</th>'+
                    '<th>RECORDS</th>'+
                    '<th>STATUS</th>'+
                    '<th>QUARTER-TYPE</th>'+
                    '<th>DATE-START</th>'+
                    '<th>DATE-END</th>'+
                    '<th>RECORDS</th>'+
                    '<th>SETTING</th>'+
                  '</tr>';
      $('.title_table').html(table_head);
      act_opt();
    }

    function act_opt(){
      var op = $('input[name="view_mode"]').val();
      var typ = $('input[name="type_mode"]').val();
        if(op == '0'){
            act_student();
        }
        else{
            act_records();
        }
    }

    //--- displaying students 
    function act_student(){
      var class_code = $('input[name="class_code"]').val();
      var type_mode =  $('input[name="type_mode"]').val();
      
      $('.table_body').html('');

        $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_student_activity',
              type: 'post',
              data:{class_code:class_code},
              dataType : "JSON",
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                    html +=
                      '<tr>'+
                        '<td>'+data[i].fullname+'</td>'+
                        '<td> <img style="hight:7vh; width:7vh;" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" class="img-circle elevation-2" alt="User Image"></td>'+
                        '<td>'+data[i].student_id+'</td>'+
                        '<td>'+data[i].cor_sec+'</td>'+
                        '<td style="width:20%;">'+
                          '<a href="javascript:void(0)" data-stud_id="'+data[i].student_id+'" data-name="'+data[i].fullname+'" data-section="'+data[i].cor_sec+'" data-email="'+data[i].email+'" data-contact="'+data[i].contact+'" data-profile="'+data[i].profile+'" data-type="'+type_mode+'" data-stud="'+data[i].student_id+'" class="btn btn-info view_stud_rec"><i class="fas fa-arrow-right"></i> <img style="hight:4vh; width:4vh;" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" class="img-circle elevation-2" alt="User Image"> View Records</a>'+
                        '</td>'+
                      '</tr>';
                  }
                $('.table_body').html(html);
              }
            }); 
    }
    //--- end here
    //--- to view the  activity records and set up the activty
    function act_records(){
      var class_code = $('input[name="class_code"]').val();
      var type_mode =  $('input[name="type_mode"]').val();
      $('.table_body').html('');
        $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_files_rec',
              type: 'post',
              data:{class_code:class_code,type_mode:type_mode},
              dataType : "JSON",
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                    if(data[i].acept == '0'){
                      html +=
                      '<tr>'+
                        '<td style="width:5%;">'+(i+1)+'</td>'+
                        '<td style="width:15%;">'+data[i].title+'</td>'+
                        '<td style="width:15%;"><a class="btn btn-block btn-success"><i class="fas fa-check"></i> ACCEPTING</a></td>'+
                        '<td>'+data[i].quarter+' QUARTER ('+data[i].record_type+')</td>'+
                        '<td style="width:15%;"><i class="fas fa-calendar-alt"></i> '+data[i].date+'</td>'+
                        '<td><i class="fas fa-calendar-alt"></i> '+data[i].d_line+'</td>'+
                        '<td style="width:20%;"><a href="javascript:void(0)" data-total="'+data[i].total+'" data-code="'+data[i].post_id+'" data-title="'+data[i].title+'" class="btn  btn-info view_records"><i class="fas fa-copy"></i> VIEW</a></td>'+
                        '<td>'+
                            '<div class="btn-group">'+
                              '<button type="button" class="btn btn-default btn-flat folder_open"> <i class="fas fa-cogs"></i></button>'+
                              '<button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon"data-toggle="dropdown">'+
                            '</button>'+
                            '<div class="dropdown-menu" role="menu">'+
                              '<a href="javascript:void(0)" data-post_id="'+data[i].post_id+'" class="dropdown-item changeActive" ><i class="fas fa-check"></i> Accepting</a>'+
                              '<a href="javascript:void(0)" data-post_id="'+data[i].post_id+'" class="dropdown-item changeDeactive" ><i class="fas fa-eye-slash"></i> Closed</a>'+
                              '<a href="javascript:void(0)" class="dropdown-item quarter_set" data-title="'+data[i].title+'" data-post_id="'+data[i].post_id+'" ><i class="fas fa-list"></i> More</a>'+
                              '<a href="javascript:void(0)" data-post_id="'+data[i].post_id+'"  class="dropdown-item delete_activity"><i class="fas fa-times"></i> Delete</a>'+
                            '</div>'+
                          '</div>'+
                        '</td>'+
                      '</tr>';
                    }
                    else if(data[i].acept >= '1'){
                      html +=
                      '<tr>'+
                        '<td style="width:5%;">'+(i+1)+'</td>'+
                        '<td style="width:15%;">'+data[i].title+'</td>'+
                        '<td style="width:15%;"><a class="btn btn-block btn-warning"><i class="fas fa-times"></i> CLOSED</a></td>'+
                        '<td>'+data[i].quarter+' QUARTER ('+data[i].record_type+')</td>'+
                        '<td style="width:15%;">'+data[i].date+'</td>'+
                        '<td><i class="fas fa-calendar-alt"></i> '+data[i].d_line+'</td>'+
                        '<td style="width:20%;"><a href="javascript:void(0)"data-total="'+data[i].total+'" data-code="'+data[i].post_id+'" data-title="'+data[i].title+'" class="btn  btn-info view_records"><i class="fas fa-copy"></i> VIEW</a></td>'+
                        '<td>'+
                            '<div class="btn-group">'+
                              '<button type="button" class="btn btn-default btn-flat folder_open"> <i class="fas fa-cogs"></i></button>'+
                              '<button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon"data-toggle="dropdown">'+
                            '</button>'+
                            '<div class="dropdown-menu" role="menu">'+
                              '<a href="javascript:void(0)" data-post_id="'+data[i].post_id+'" class="dropdown-item changeActive" ><i class="fas fa-check"></i> Accepting</a>'+
                              '<a href="javascript:void(0)" data-post_id="'+data[i].post_id+'" class="dropdown-item changeDeactive" ><i class="fas fa-eye-slash"></i> Closed</a>'+
                              '<a href="javascript:void(0)" class="dropdown-item quarter_set"  data-title="'+data[i].title+'" data-post_id="'+data[i].post_id+'" ><i class="fas fa-list"></i> More</a>'+
                              '<a href="javascript:void(0)" data-post_id="'+data[i].post_id+'"  class="dropdown-item delete_activity" ><i class="fas fa-times"></i> Delete</a>'+
                            '</div>'+
                          '</div>'+
                        '</td>'+
                      '</tr>';
                    }
                  }
                $('.table_body').html(html);
              }
            }); 
         }
         //--- end here
        //--- open modals for the quarter setup
        $('.table_body').on('click','.quarter_set',function(event){
          var post_id = $(this).data('post_id');
          var title = $(this).data('title');
          $('.title_display').html(title);
          $('input[name="post_id_quarter"]').val(post_id);
          
          $('#set_quarter').modal('show');
        })
        //--- end here
        //--- save the quarter
        $('.confirm_quarter').click(function(event){
          var quarter = $('select[name="quarter_selector"]').val();
          var post_id = $('input[name="post_id_quarter"]').val();
          var type = $('select[name="record_type"]').val();
          if(quarter == ''){
            swal("Error","Please Select from the option","warning");
          }
          else if(type == ''){
            swal("Error","Please Select from the option","warning");
          }
          else{
            $.ajax({
              url:'<?=base_url()?>index.php/pages/save_quarter',
              type: 'post',
              data:{quarter:quarter, post_id:post_id, type:type},
              dataType : "JSON",
              success: function (data) {
                act_records();
                $('#set_quarter').modal('hide');
              }
            });
          }
        })
        //--- end here
        //--- to closed the submittion
          $('.table_body').on('click','.changeDeactive',function (){
          var id = $(this).data('post_id');
            $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_toggle_off',
              type: 'post',
              data:{id:id},
              dataType : "JSON",
              success: function (data) {
                act_records();
              }
            }); 
        }); 
         //--- end here
         //--- accepting submittions
        $('.table_body').on('click','.changeActive',function (){
          var id = $(this).data('post_id');
            $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_toggle_on',
              type: 'post',
              data:{id:id},
              dataType : "JSON",
              success: function (data) {
                act_records();
              }
            }); 
          }); 
         //--- end here
      //--- deleting the all the records acivity and the activity it self
      $('.table_body').on('click','.delete_activity',function(event){
        var id = $(this).data('post_id');
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
                  url:'<?=base_url()?>index.php/pages/delete_activity',
                  type: 'POST',
                  data:{id:id},
                  dataType : "JSON",
                  success: function (data) {   
                    act_records();
                    swal("Success", "", "success");
                    }
                  });  
              } else {
                swal("Cancelled", "", "error");
              }
            }); 
      });
      //--- end here

    $('.table_body').on('click','.view_records',function (){
          var title=$(this).data('title');
          var code = $(this).data('code');
          var class_code = $('input[name="class_code"]').val();
          var total = $(this).data('total');
          $('.table_body').html('');
             var table_head =
                  '<tr>'+
                    '<th colspan="7">Title: '+title+'<input type="hidden" name="code_act" value="'+code+'"><input type="hidden" name="total" value="'+total+'"> <input type="hidden" name="class_code" value="'+class_code+'"></th>'+
                  '</tr>';
              $('.title_table').html(table_head);
         view_act_mode();
      });
    //--- view act mode 
    function view_act_mode(){
      var code = $('input[name="code_act"]').val();
      var class_code = $('input[name="class_code"]').val();
      $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_view_actMode',
              type: 'post',
              data:{class_code:class_code, code:code},
              dataType : "JSON",
              success: function (data) {
                 var html = '';
                  for(i=0; i<data.length; i++){
                    if(data[i].activity_code == code){
                        if(data[i].raw_score == '0'){
                          html +=
                          '<tr>'+
                            '<td>'+(i+1)+'</td>'+
                            '<td><img style="hight:7vh; width:7vh;" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" class="img-circle elevation-2" alt="User Image"> '+data[i].fullname+'</td>'+
                            '<td>'+data[i].student_id+'</td>'+
                            '<td>'+data[i].cor_sec+'</td>'+
                            '<td><i class="fas fa-calendar-alt"></i> '+data[i].encoded_date+'</td>'+
                            '<td><i class="fas fa-check"></i>'+data[i].raw_score+' Out of '+data[i].total+'</td>'+
                            '<td><a class="btn btn-block btn-warning"><i class="fas fa-times"></i> NOT RECORDED </a></td>'+
                          '</tr>';
                        }
                        else{
                          html +=
                          '<tr>'+
                            '<td>'+(i+1)+'</td>'+
                            '<td><img style="hight:7vh; width:7vh;" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" class="img-circle elevation-2" alt="User Image"> '+data[i].fullname+'</td>'+
                            '<td>'+data[i].student_id+'</td>'+
                            '<td>'+data[i].cor_sec+'</td>'+
                            '<td><i class="fas fa-calendar-alt"></i> '+data[i].encoded_date+'</td>'+
                            '<td><i class="fas fa-check"></i>'+data[i].raw_score+' Out of '+data[i].total+'</td>'+
                            '<td><i class="fas fa-check"></i> RECORDED</td>'+
                          '</tr>';
                        }
                    }
                  }
                if(data.length == '0'){
                  html += '<tr><td style="background:orange; text-align:center; color:white;" colspan="5"><i class="fas fa-file"></i> No Records that Student submitted</td></tr>';
                }
                html += '<tr><td style="background-image: linear-gradient(to bottom right, #800000, #CC3300); text-align:center; color:white;" colspan="7"> Nothing To Follow</td></tr>';
                $('.table_body').html(html);
              }
            });
      }
      //--- end here 

     $('.table_body').on('click','.view_stud_rec',function (){
          var profile = $(this).data('profile');
          var stud_id = $(this).data('stud_id');
          var stud_name = $(this).data('name');
          var section = $(this).data('section');
          var email = $(this).data('email');
          var contact = $(this).data('contact');
          $('.table_body').html('');
             var table_head =
                    '<tr>'+
                      '<td rowspan="2" style="margin:0px; padding:0px; hight:25vh; width:25vh;" ><img style="hight:100%; width:100%;" src="<?php echo base_url(); ?>assets/img/'+profile+'" class="img-square elevation-2" alt="User Image" ></td>'+
                      '<th colspan="2">NAME: '+stud_name+'</th>'+
                      '<th colspan="2">ID: '+stud_id+' <input type="hidden" name="stud_id_view" value="'+stud_id+'"></th>'+
                    '</tr>'+
                      '<th>SECTION: '+section+'</th>'+
                      '<th>EMAIL: '+email+'</th>'+
                      '<th colspan="2">CONTACT#: '+contact+'</th>'+
                    '</tr>';
              $('.title_table').html(table_head);
          stud_view_rec();
      });

     // function stud_view_rec(){
     //  var stud_id = $('input[name="stud_id_view"]').val();
     //  var class_code = $('input[name="class_code"]').val();
     //  var type_mode =  $('input[name="type_mode"]').val();

     //  $.ajax({
     //          url:'<?=base_url()?>index.php/pages/ajax_stud_submitRec',
     //          type: 'post',
     //          data:{class_code:class_code, type_mode:type_mode, stud_id:stud_id},
     //          dataType : "JSON",
     //          success: function (data) {
     //             var html = '';
     //              for(i=0; i<data.length; i++){
     //                if(data[i].student_grades == '0'){
     //                  html +=
     //                  '<tr>'+
     //                    // '<td>'+(i+1)+'</td>'+
     //                    '<td>'+data[i].title+'</td>'+
     //                    '<td>  <a href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" title="Click To Download" class="btn btn-block btn-info">File: <i class="fas fa-download"></i> '+data[i].file+'</a></td>'+
     //                    '<td>Date Submitted: '+data[i].encoded_date+'</td>'+
     //                    '<td><input type="text" class="form-control" name="grades_input" placeholder="Grade"></td>'+
     //                    '<td><a href="javascript:void(0)" data-code="'+data[i].activity_code+'" class="btn btn-success grades_input"><i class="fas fa-check"><i></a></td>'+
     //                  '</tr>';
     //                }
     //                else{
     //                  html +=
     //                  '<tr>'+
     //                    // '<td>'+(i+1)+'</td>'+
     //                    '<td>'+data[i].title+'</td>'+
     //                    '<td>  <a href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" title="Click To Download" class="btn btn-block btn-success">File: <i class="fas fa-download"></i> '+data[i].file+'</a></td>'+
     //                    '<td>Date Submitted: '+data[i].encoded_date+'</td>'+
     //                    '<td>Given Grade: '+data[i].student_grades+'</td>'+
     //                    '<td><a href="javascript:void(0)" data-code="'+data[i].activity_code+'" class="btn btn-danger grades_ref"><i class="fas fa-times"><i></a></td>'+
     //                  '</tr>';
     //                }
                    
     //              }
                
     //            if(data.length == '0'){
     //              html += '<tr><td style="background:orange; text-align:center; color:white;" colspan="5"><i class="fas fa-file"></i> No Records</td></tr>';
     //            }
     //            html += '<tr><td style="background-image: linear-gradient(to bottom right, #800000, #CC3300); text-align:center; color:white;" colspan="5"> Nothing To Follow</td></tr>';
     //            $('.table_body').html(html);
     //            load_not_submitted();
     //          }
     //        }); 
     // }

     //--- view student grades and information
     function stud_view_rec(){
        var id = $('input[name="stud_id_view"]').val();
        var class_code = $('input[name="class_code"]').val();
        var type =  $('input[name="type_mode"]').val();
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
                       if(data[i].raw_score >= '0'){
                          if(data[i].online == '1'){
                            if(data[i].to_chk >= 1){
                               html +=
                              '<tr style="text-align:center;">'+
                                '<td>'+data[i].title+'</td>'+
                                '<td><a class="btn btn-block btn-default"><i class="fas fa-edit"></i> '+data[i].file+'</a></td>'+
                                '<td><a class="btn btn-block btn-default"><i class="fas fa-calendar"></i> '+data[i].encoded_date+'</a></td>'+
                                '<td><i class="fas fa-check"> : <b>'+data[i].raw_score+'</b> </i> Out of: '+data[i].total+' <a href="javascript:void(0)" data-stud="'+data[i].student_id+'" data-act="'+data[i].activity_code+'" class="btn btn-warning to_chk"><i class="fas fa-edit"></i> '+data[i].to_chk+' Need to check</a></td>'+
                                '<td><a href="javascript:void(0)" class="btn btn-success add_attemp" data-id="'+data[i].student_id+'" data-act="'+data[i].activity_code+'" title="Give 2x attemp chance"><i class="fas fa-times"></i> '+(3 - data[i].attemp)+' </a></td>'+
                              '</tr>'; 
                            }
                            else{
                               html +=
                              '<tr style="text-align:center;">'+
                                '<td>'+data[i].title+'</td>'+
                                '<td><a class="btn btn-block btn-default"><i class="fas fa-edit"></i> '+data[i].file+'</a></td>'+
                                '<td><a class="btn btn-block btn-default"><i class="fas fa-calendar"></i> '+data[i].encoded_date+'</a></td>'+
                                '<td><i class="fas fa-check"> : <b>'+data[i].raw_score+'</b> </i> Out of: '+data[i].total+'</td>'+         
                                '<td><a href="javascript:void(0)" class="btn btn-success add_attemp" data-id="'+data[i].student_id+'" data-act="'+data[i].activity_code+'" title="Give 2x attemp chance"><i class="fas fa-times"></i> '+(3 - data[i].attemp)+' </a></td>'+
                                '</tr>'; 
                            }
                          }
                          else{
                             if(data[i].raw_score >= 1){
                              html +=
                              '<tr style="text-align:center;">'+
                                '<td>'+data[i].title+'</td>'+
                                '<td><a  class="btn btn-block btn-success"><i class="fas fa-check"></i> '+data[i].file+'</a></td>'+
                                '<td><i class="fas fa-calendar-alt"></i> '+data[i].encoded_date+'</td>'+
                                '<td><i class="fas fa-check"> : <b>'+data[i].raw_score+'</b> </i> Out of: '+data[i].total+'</td>'+
                                '<td><a href="javascript:void(0)" data-code="'+data[i].activity_code+'" class="btn btn-danger grades_ref"><i class="fas fa-times"><i></a></td>'+
                              '</tr>';
                            }
                            else{
                             html +=
                            '<tr style="text-align:center;">'+
                              '<td>'+data[i].title+'</td>'+
                              '<td>  <a href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" title="Click To Download" class="btn btn-block btn-default">File: <i class="fas fa-download"></i> '+data[i].file+'</a></td>'+
                              '<td><i class="fas fa-calendar-alt"></i> '+data[i].encoded_date+' </td>'+
                              '<td><input type="text" class="form-control" name="grades_input" placeholder="Total: 0 / '+data[i].total+'"></td>'+
                              '<td><a href="javascript:void(0)" data-code="'+data[i].activity_code+'" class="btn btn-success grades_input"><i class="fas fa-check"><i></a></td>'+
                            '</tr>';  
                            }
                          }
                        }       
                    } 
                    else{
                          html +=
                          '<tr style="text-align:center;">'+
                            '<td>'+data[i].title+'</td>'+
                            '<td><i class="fas fa-minus"></i></td>'+
                            '<td><i class="fas fa-minus"></i></td>'+
                            '<td>No File Submitted</td>'+
                            '<td><i class="fas fa-times"></i> No Grade</td>'+
                          '</tr>';  
                        } 
                      
                  }
                html +=
                '<tr><td colspan="2" style="color:white; background:maroon; text-align:center;">No. of Submitted '+act+': '+submitted+' out of: '+data.length+'</td><td colspan="4" style="color:white; background:maroon; text-align:center;"> Nothing to Follow!!!</td></tr>';
                $('.table_body').html(html);
              }
            });
     }
     //--- end here
     //--- student attemp add
     $('.table_body').on('click','.add_attemp',function(event){
      var stud = $(this).data('id');
      var act = $(this).data('act');
        $.ajax({
          url:'<?=base_url()?>index.php/pages/add_attemp',
          type: 'POST',
          data:{stud:stud, act:act},
          dataType : "JSON",
          success: function (data) {
            swal("Success","","success");
            stud_view_rec();
          }
        });

     });
     //--- end here
     //--- check the student submitted that are not recorded
     $('.table_body').on('click','.to_chk', function(event){
        var stud = $(this).data('stud');
        var act = $(this).data('act');
        $('input[name="activity_code_chk"]').val(act);
        $('input[name="student_id_chk"]').val(stud);
        $('#check_answer').modal('show');
        check_answer();
     });
     //--- end here
     //--- function method of grading
     function check_answer(){
      var act =  $('input[name="activity_code_chk"]').val();
      var stud =  $('input[name="student_id_chk"]').val();
      $.ajax({
              url:'<?=base_url()?>index.php/pages/check_student',
              type: 'post',
              data:{stud:stud, act:act},
              dataType : "JSON",
              success: function (data) {
                var html = '';
                for(i=0; i<data.length; i++){
                  html +=
                  '<div class="card">'+
                  '<table id="example" class="table table-bordered table-hover">'+
                    '<tbody class="table_body">'+
                      '<tr>'+
                        '<td colspan="4"><p style="margin-left: 20px;"> <b>'+(i+1)+'.</b> '+data[i].question+'</p>'+
                        '<p class="form-control">'+data[i].answer+'</p>'+
                        '<p class="form-control">Points: '+data[i].point+'</p>'+
                        '<div class="btn-group">'+
                            '<button type="button" class="btn btn-default btn-flat folder_open"> <i class="fas fa-check"></i> POINTS</button>'+
                            '<button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">'+
                          '</button>'+
                          '<div class="dropdown-menu" role="menu">'+
                            '<a href="javascript:void(0)" data-point="10" data-stud="'+data[i].student_id+'" data-act="'+data[i].question_id+'" data-raw="'+data[i].raw_id+'" class="dropdown-item student_point" ><i class="fas fa-plus"></i> 10 Points</a>'+
                            '<a href="javascript:void(0)" data-point="9" data-stud="'+data[i].student_id+'" data-act="'+data[i].question_id+'" data-raw="'+data[i].raw_id+'" class="dropdown-item student_point" ><i class="fas fa-plus"></i> 9 Points</a>'+
                            '<a href="javascript:void(0)" data-point="8" data-stud="'+data[i].student_id+'" data-act="'+data[i].question_id+'" data-raw="'+data[i].raw_id+'" class="dropdown-item student_point" ><i class="fas fa-plus"></i> 8 Points</a>'+
                            '<a href="javascript:void(0)" data-point="7" data-stud="'+data[i].student_id+'" data-act="'+data[i].question_id+'" data-raw="'+data[i].raw_id+'" class="dropdown-item student_point" ><i class="fas fa-plus"></i> 7 Points</a>'+
                            '<a href="javascript:void(0)" data-point="6" data-stud="'+data[i].student_id+'" data-act="'+data[i].question_id+'" data-raw="'+data[i].raw_id+'" class="dropdown-item student_point" ><i class="fas fa-plus"></i> 6 Points</a>'+
                            '<a href="javascript:void(0)" data-point="5" data-stud="'+data[i].student_id+'" data-act="'+data[i].question_id+'" data-raw="'+data[i].raw_id+'" class="dropdown-item student_point" ><i class="fas fa-plus"></i> 5 Points</a>'+
                            '<a href="javascript:void(0)" data-point="4" data-stud="'+data[i].student_id+'" data-act="'+data[i].question_id+'" data-raw="'+data[i].raw_id+'" class="dropdown-item student_point" ><i class="fas fa-plus"></i> 4 Points</a>'+
                            '<a href="javascript:void(0)" data-point="3" data-stud="'+data[i].student_id+'" data-act="'+data[i].question_id+'" data-raw="'+data[i].raw_id+'" class="dropdown-item student_point" ><i class="fas fa-plus"></i> 3 Points</a>'+
                            '<a href="javascript:void(0)" data-point="2" data-stud="'+data[i].student_id+'" data-act="'+data[i].question_id+'" data-raw="'+data[i].raw_id+'" class="dropdown-item student_point" ><i class="fas fa-plus"></i> 2 Points</a>'+
                            '<a href="javascript:void(0)" data-point="1" data-stud="'+data[i].student_id+'" data-act="'+data[i].question_id+'" data-raw="'+data[i].raw_id+'" class="dropdown-item student_point" ><i class="fas fa-plus"></i> 1 Points</a>'+
                            '<a href="javascript:void(0)" data-point="0" data-stud="'+data[i].student_id+'" data-act="'+data[i].question_id+'" data-raw="'+data[i].raw_id+'" class="dropdown-item student_point" ><i class="fas fa-plus"></i> 0 Points</a>'+
                          '</div>'+
                        '</div>'+
                      '</tr>'+
                    '</tbody>'+
                  '</table>'+
                '</div>';
                }
                $('.confirm_btn').html('<a style="margin-bottom:10px;" href="javascript:void(0)" class="btn btn-block btn-info save_score"><i class="fas fa-save"></i> CONFIRM</a>');  
                $('.display_check').html(html);
              }
            }); 
     }
     //--- end here
     //--- input the student points
     $('.display_check').on('click','.student_point', function(event){
      var point = $(this).data('point');
      var stud = $(this).data('stud');
      var act = $(this).data('act');
      var raw = $(this).data('raw');
      $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_point_score',
              type: 'post',
              data:{point:point, stud:stud, act:act, raw:raw},
              dataType : "JSON",
              success: function (data) {
                check_answer();
              }
            }); 
     });
     //--- end here
     //--- save answer
    $('.confirm_btn').on('click','.save_score', function(){
      save_score();
    });
    //--- end here
    //--- for finalize score
    function save_score(){
      var code = $('input[name="activity_code_chk"]').val();
      var stud_id = $('input[name="student_id_chk"]').val();
      $.ajax({
          url:'<?=base_url()?>index.php/pages/save_allAnswer',
          type: 'POST',
          data:{code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            var wrong_total = 0;
            var right_total = 0;
            var to_chk = 0;
            for(i=0; i<data.length; i++){
                if(data[i].point == '0'){
                  wrong_total += 1;
                }
                else if(data[i].point >= 1){
                  right_total += parseInt(data[i].point);
                }
            }
            var ttl_wrong = wrong_total - to_chk;
            var total = wrong_total + right_total;
            $('input[name="total"]').val(total);
            $('input[name="wrong_total"]').val(ttl_wrong);
            $('input[name="right_total"]').val(right_total);
            $('input[name="to_chk"]').val(to_chk);
            finalize_record();
          }
        });
    }
    //--- end here
    //--- finalize the result
    function finalize_record(){
      var total = $('input[name="total"]').val();
      var wrong = $('input[name="wrong_total"]').val();
      var right = $('input[name="right_total"]').val();
      var to_chk = 0;
      var code = $('input[name="activity_code_chk"]').val();
      var stud_id = $('input[name="student_id_chk"]').val();
      $.ajax({
          url:'<?=base_url()?>index.php/pages/finalize_record',
          type: 'POST',
          data:{code:code, stud_id:stud_id, to_chk:to_chk, right:right, wrong:wrong, total:total},
          dataType : "JSON",
          success: function (data) {
            //finalize and display graph for the result
            $('#check_answer').modal('hide');
            stud_view_rec();
          }
        });
    }
    //--- end here
      $('.table_body').on('click','.grades_input_act',function (){
         var code = $(this).data('code');
         var stud_id = $(this).data('stud'); 
         var grades = $('input[name="grades_input"]').val(); 
           $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_input_grades',
              type: 'post',
              data:{code:code, stud_id:stud_id, grades:grades},
              dataType : "JSON",
              success: function (data) {
                swal("Process Success!", "Grades Input", "success");
                view_act_mode();
              }
            }); 
      });
      $('.table_body').on('click','.grades_ref_act',function (){
         var code = $(this).data('code');
         var stud_id = $(this).data('stud'); 
         var grades = '0';
           $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_input_grades',
              type: 'post',
              data:{code:code, stud_id:stud_id, grades:grades},
              dataType : "JSON",
              success: function (data) {
                swal("Process Success!", "Grades Refresh", "success");
                view_act_mode();
              }
            }); 
      });

     $('.table_body').on('click','.grades_input',function (){
         var code = $(this).data('code');
         var stud_id = $('input[name="stud_id_view"]').val(); 
         var grades = $('input[name="grades_input"]').val(); 
           $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_input_grades',
              type: 'post',
              data:{code:code, stud_id:stud_id, grades:grades},
              dataType : "JSON",
              success: function (data) {
                swal("Process Success!", "Grades Input", "success");
                stud_view_rec();
              }
            }); 
      });
     $('.table_body').on('click','.grades_ref',function (){
         var code = $(this).data('code');
         var stud_id = $('input[name="stud_id_view"]').val(); 
         var grades = '0';
           $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_input_grades',
              type: 'post',
              data:{code:code, stud_id:stud_id, grades:grades},
              dataType : "JSON",
              success: function (data) {
                swal("Process Success!", "Grades Refresh", "success");
                stud_view_rec();
              }
            }); 
      });

     $('.table_body').on('click','.allowed',function (){
         var id = $(this).data('id');
           $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_allow_actShrt',
              type: 'post',
              data:{id:id},
              dataType : "JSON",
              success: function (data) {
                swal("Process Success!", "Visible in Shortcuts", "success");
                act_records();
              }
            }); 
      });


  });
</script>