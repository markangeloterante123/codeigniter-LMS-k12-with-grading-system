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
            <h1 style="color: white;"><?php echo $section; ?> GRADING SYSTEM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a style="color: white;" href="<?php echo base_url(); ?>pages/enterClass/<?php echo $class_codebin; ?>/<?php echo $sectionbin; ?>/<?php echo $sub_codebin; ?>">Class Room</a></li>
              <li style="color: white;" class="breadcrumb-item active"><?php echo $section; ?> GRADING SYSTEM</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    
    <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="card-body table-responsive"> 

                <div class="btn-group quarter_sem">
                  
                </div> 
                <input type="hidden" name="class_code" value="<?php echo $class_code ?>">
                <input type="hidden" name="class_sect" value="<?php echo $section ?>">
                <input type="hidden" name="quarter">
                <input type="hidden" name="ww_val">
                <input type="hidden" name="pt_val">
                <input type="hidden" name="qa_val">
                <input type="hidden" name="quarter_val">
                <input type="hidden" name="quar">
                <input type="hidden" name="stud">
                <input type="hidden" name="total">
                <input type="hidden" name="type_val">
                <input type="hidden" name="raw_score">
                <input type="hidden" name="total_score">
                <table id="example2" style="border: 1px solid black;" class="table table-bordered table-hover">
                  <thead class="table_head">
                    
                  </thead>
                  <tbody style="text-align:center;" class="table_body">
                    
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
    load_sem();
    //---loading the selector
    function load_sem(){
      var code = $('input[name="class_code"]').val();
      var quarter = $('input[name="quarter"]').val();
      $.ajax({
        url:'<?=base_url()?>index.php/pages/display_gradeTitle',
        type: 'post',
        data:{code:code},
        dataType : "JSON",
        success: function (data) {
          $('input[name="ww_val"]').val('0.'+data[0].ww);
          $('input[name="pt_val"]').val('0.'+data[0].pt);
          $('input[name="qa_val"]').val('0.'+data[0].qa); 
         var sem = '';
          for(i=0; i<data.length; i++){
              sem = data[i].sem;
            }
           if(sem == 'k12-1st'){
              $('input[name="quarter"]').val(' -1st QUARTER');
              $('input[name="quarter_val"]').val('1');
              $('input[name="quar"]').val('1st');
              first_sem();
              student_grades();
            }
            else if(sem == 'k12-2nd'){
              $('input[name="quarter"]').val(' -2nd QUARTER');
              $('input[name="quarter_val"]').val('1');
              $('input[name="quar"]').val('3rd');
              second_sem();
              student_grades();
            }
        }
      });
    }
    function first_sem(){
      var html =
        '<button type="button" class="btn btn-default btn-flat title_btn"> <i class="fas fa-copy"></i> 1st QUARTER</button>'+
        '<button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown"></button>'+
        '<div class="dropdown-menu" role="menu">'+
          '<a href="javascript:void(0)" data-quarter="1" class="dropdown-item view_grade"><i class="fas fa-eye"></i> 1ST QUARTER</a>'+
          '<a href="javascript:void(0)" data-quarter="2" class="dropdown-item view_grade"><i class="fas fa-eye"></i> 2ND QUARTER</a>'+
          '<a href="javascript:void(0)" data-quarter="f" class="dropdown-item view_grade"><i class="fas fa-eye"></i> FINAL GRADES</a>'+
        '</div>';
      $('.quarter_sem').html(html);
      title_load();
    }
    function second_sem(){
      var html =
        '<button type="button" class="btn btn-default btn-flat title_btn"> <i class="fas fa-copy"></i> 2nd QUARTER</button>'+
        '<button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown"></button>'+
        '<div class="dropdown-menu" role="menu">'+
          '<a href="javascript:void(0)" data-quarter="3" class="dropdown-item view_grade"><i class="fas fa-eye"></i> 3RD QUARTER</a>'+
          '<a href="javascript:void(0)" data-quarter="4" class="dropdown-item view_grade"><i class="fas fa-eye"></i> 4TH QUARTER</a>'+
          '<a href="javascript:void(0)" data-quarter="f" class="dropdown-item view_grade"><i class="fas fa-eye"></i> FINAL GRADES</a>'+
        '</div>';
      $('.quarter_sem').html(html);
      title_load();
    }
    //--- end here
    //--- loading the student grades
    function student_grades(){
      var ww = $('input[name="ww_val"]').val();
      var pt = $('input[name="pt_val"]').val();
      var qa = $('input[name="qa_val"]').val();
      var quarter = $('input[name="quarter_val"]').val();
      var code = $('input[name="class_code"]').val();
       $.ajax({
        url:'<?=base_url()?>index.php/pages/studentGrades',
        type: 'post',
        data:{code:code},
        dataType : "JSON",
        success: function (data) {
          var html = '';
          for(i=0; i<data.length; i++){
            if(qa >= '0.01'){
                if(quarter == '1'){
                  var tww = data[i].ww1 * ww;
                  var tpt = data[i].pt1 * pt;
                  var tqa = data[i].a1 * qa;
                  var total = Number((tww+tpt+tqa).toFixed(1));
                  html +=
                  '<tr>'+
                    '<td><img  style="margin:0px; hight:7vh; width:7vh;" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" class="img-circle elevation-2" alt="User Image"> '+data[i].fullname+'</td>'+
                    '<td>'+data[i].ww1+' %</td>'+
                    '<td><a href="javascript:void(0)" data-id="'+data[i].student_id+'" data-type="WW" class="compute" title="COMPUTE GRADES"> '+Number((data[i].ww1 * ww).toFixed(1))+' %</a></td>'+
                    '<td>'+data[i].pt1+' %</td>'+
                    '<td><a href="javascript:void(0)" data-id="'+data[i].student_id+'" data-type="PT" class="compute" title="COMPUTE GRADES"> '+Number((data[i].pt1 * pt).toFixed(1))+' %</a></td>'+
                    '<td>'+data[i].a1+' %</td>'+
                    '<td><a href="javascript:void(0)" data-id="'+data[i].student_id+'" data-type="QA" class="compute" title="COMPUTE GRADES"> '+Number((data[i].a1 * qa).toFixed(1))+' %</a></td>'+
                    '<td>'+total+' %</td>'+
                    '<td><a href="javascript:void(0)" data-quarter="q1" data-id="'+data[i].student_id+'" data-code="'+data[i].class_code+'" data-total="'+total+'" class="transmuted" title="GET TRANSMUTED"><i class="fas fa-check"></i> '+data[i].q1+' %</a></td>'+
                  '</tr>';  
                }
                else if(quarter == '2'){
                  var tww = data[i].ww2 * ww;
                  var tpt = data[i].pt2 * pt;
                  var tqa = data[i].a2 * qa;
                  var total = Number((tww+tpt+tqa).toFixed(1));
                  html +=
                  '<tr>'+
                    '<td><img  style="margin:0px; hight:7vh; width:7vh;" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" class="img-circle elevation-2" alt="User Image"> '+data[i].fullname+'</td>'+
                    '<td>'+data[i].ww2+' %</td>'+
                    '<td><a href="javascript:void(0)"data-id="'+data[i].student_id+'" data-type="WW" class="compute"  title="COMPUTE GRADES"> '+Number((data[i].ww2 * ww).toFixed(1))+' %</a></td>'+
                    '<td>'+data[i].pt2+' %</td>'+
                    '<td><a href="javascript:void(0)" data-id="'+data[i].student_id+'" data-type="PT" class="compute" title="COMPUTE GRADES"> '+Number((data[i].pt2 * pt).toFixed(1))+' %</a></td>'+
                    '<td>'+data[i].a2+' %</td>'+
                    '<td><a href="javascript:void(0)" data-id="'+data[i].student_id+'" data-type="QA" class="compute" title="COMPUTE GRADES"> '+Number((data[i].a2 * qa).toFixed(1))+' %</a></td>'+
                    '<td>'+total+' %</td>'+
                    '<td><a href="javascript:void(0)" data-quarter="q2" data-id="'+data[i].student_id+'" data-code="'+data[i].class_code+'" data-total="'+total+'" class="transmuted" title="GET TRANSMUTED"><i class="fas fa-check"></i> '+data[i].q2+' %</a></td>'+
                  '</tr>';  
                }
              }
              else{
                 if(quarter == '1'){
                  var tww = data[i].ww1 * ww;
                  var tpt = data[i].pt1 * pt;
                  var tqa = data[i].a1 * qa;
                  var total = Number((tww+tpt+tqa).toFixed(1));
                  html +=
                  '<tr>'+
                    '<td><img  style="margin:0px; hight:7vh; width:7vh;" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" class="img-circle elevation-2" alt="User Image"> '+data[i].fullname+' </td>'+
                    '<td>'+data[i].ww1+' %</td>'+
                    '<td><a href="javascript:void(0)" data-id="'+data[i].student_id+'" data-type="WW" class="compute" title="COMPUTE GRADES"> '+Number((data[i].ww1 * ww).toFixed(1))+' %</a></td>'+
                    '<td>'+data[i].pt1+' %</td>'+
                    '<td><a href="javascript:void(0)" data-id="'+data[i].student_id+'" data-type="PT" class="compute" title="COMPUTE GRADES"> '+Number((data[i].pt1 * pt).toFixed(1))+' %</a></td>'+
                    '<td>'+total+' %</td>'+
                    '<td><a href="javascript:void(0)" data-quarter="q1" data-id="'+data[i].student_id+'" data-code="'+data[i].class_code+'" data-total="'+total+'" class="transmuted" title="GET TRANSMUTED"><i class="fas fa-check"></i> '+data[i].q1+' %</a></td>'+
                  '</tr>';  
                }
                else if(quarter == '2'){
                  var tww = data[i].ww2 * ww;
                  var tpt = data[i].pt2 * pt;
                  var tqa = data[i].a2 * qa;
                  var total = Number((tww+tpt+tqa).toFixed(1));
                  html +=
                  '<tr>'+
                    '<td><img  style="margin:0px; hight:7vh; width:7vh;" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" class="img-circle elevation-2" alt="User Image"> '+data[i].fullname+' </td>'+
                    '<td>'+data[i].ww2+' %</td>'+
                    '<td><a href="javascript:void(0)"data-id="'+data[i].student_id+'" data-type="WW" class="compute"  title="COMPUTE GRADES"> '+Number((data[i].ww2 * ww).toFixed(1))+' %</a></td>'+
                    '<td>'+data[i].pt2+' %</td>'+
                    '<td><a href="javascript:void(0)" data-id="'+data[i].student_id+'" data-type="PT" class="compute" title="COMPUTE GRADES"> '+Number((data[i].pt2 * pt).toFixed(1))+' %</a></td>'+
                    '<td>'+total+' %</td>'+
                    '<td><a href="javascript:void(0)" data-quarter="q2" data-id="'+data[i].student_id+'" data-code="'+data[i].class_code+'" data-total="'+total+'" class="transmuted" title="GET TRANSMUTED"><i class="fas fa-check"></i> '+data[i].q2+' %</a></td>'+
                  '</tr>';  
                }
              }
          }
          $('.table_body').html(html);
        }
      });
    }
    //--- end here
    $('.table_body').on('click','.transmuted',function(event){
      var stud = $(this).data('id');
      var quarter = $(this).data('quarter');
      var code = $(this).data('code');
      var total = $(this).data('total');
      var trans = 0;
      // alert(stud + '|' + quarter + '|' + code + '|' + total);
      if(total == 100){ trans = 100; }
      else if(total >= 98.40){ trans = 99;}
      else if(total >= 96.80){ trans = 98;}
      else if(total >= 95.20){ trans = 97;}
      else if(total >= 93.60){ trans = 96;}
      else if(total >= 92.00){ trans = 95;}
      else if(total >= 90.40){ trans = 94;}
      else if(total >= 88.80){ trans = 93;}
      else if(total >= 87.20){ trans = 92;}
      else if(total >= 85.60){ trans = 91;}
      else if(total >= 84.00){ trans = 90;}
      else if(total >= 82.40){ trans = 89;}
      else if(total >= 80.80){ trans = 88;}
      else if(total >= 79.20){ trans = 87;}
      else if(total >= 77.60){ trans = 86;}
      else if(total >= 76.00){ trans = 85;}
      else if(total >= 74.40){ trans = 84;}
      else if(total >= 72.80){ trans = 83;}
      else if(total >= 71.20){ trans = 82;}
      else if(total >= 69.60){ trans = 81;}
      else if(total >= 68.00){ trans = 80;}
      else if(total >= 66.40){ trans = 79;}
      else if(total >= 64.80){ trans = 78;}
      else if(total >= 63.20){ trans = 77;}
      else if(total >= 61.60){ trans = 76;}
      else if(total >= 60.00){ trans = 75;}
      else if(total >= 56.00){ trans = 74;}
      else if(total >= 52.00){ trans = 73;}
      else if(total >= 48.00){ trans = 72;}
      else if(total >= 44.00){ trans = 71;}
      else if(total >= 40.00){ trans = 70;}
      else if(total >= 36.00){ trans = 69;}
      else if(total >= 32.00){ trans = 68;}
      else if(total >= 28.00){ trans = 67;}
      else if(total >= 24.00){ trans = 66;}
      else if(total >= 20.00){ trans = 65;}
      else if(total >= 16.00){ trans = 64;}
      else if(total >= 12.00){ trans = 63;}
      else if(total >= 8.00){ trans = 62;}
      else if(total >= 4.00){ trans = 61;}
      else if(total >= 0){ trans = 60;}
      $.ajax({
        url:'<?=base_url()?>index.php/pages/transmuted_grades',
        type: 'post',
        data:{stud:stud, quarter:quarter, code:code, trans:trans},
        dataType : "JSON",
        success: function (data) {
          student_grades();
        }
      });
    })
    //--- end here
    //--- compute the grades 
    $('.table_body').on('click','.compute',function(){
      var type = $(this).data('type');
      var id = $(this).data('id');
      var quar = $('input[name="quar"]').val();
      var code = $('input[name="class_code"]').val();
      $('input[name="stud"]').val(id);
      $('input[name="type_val"]').val(type);
      $.ajax({
        url:'<?=base_url()?>index.php/pages/load_totalScore',
        type: 'post',
        data:{code:code, type:type, quar:quar},
        dataType : "JSON",
        success: function (data) {
          var total = 0;
          for(i=0; i<data.length; i++){
            total += parseInt(data[i].total);
          }
          $('input[name="total"]').val(total);
          loading_studgrades();
        }
      });
    });
    //--- end here
    //--- load the student grades
    function loading_studgrades(){
      var stud = $('input[name="stud"]').val();
      var quar = $('input[name="quar"]').val();
      var code = $('input[name="class_code"]').val();
      var type = $('input[name="type_val"]').val();
      $.ajax({
        url:'<?=base_url()?>index.php/pages/load_totalStud',
        type: 'post',
        data:{code:code, type:type, quar:quar, stud:stud},
        dataType : "JSON",
        success: function (data) {
          var total = 0;
          for(i=0; i<data.length; i++){
            total += parseInt(data[i].raw_score);
          }
          $('input[name="raw_score"]').val(total);
          saving_grades();
        }
      });
    }
    //--- end here
    //--- saving the refresh the students grades
    function saving_grades(){
      var stud = $('input[name="stud"]').val();//student id
      var quar = $('input[name="quar"]').val();//quarter
      var code = $('input[name="class_code"]').val();//class code
      var type = $('input[name="type_val"]').val();// type of grades
      var total = $('input[name="total"]').val();
      var raw_score = $('input[name="raw_score"]').val();
      var score_raw = (raw_score / total) * 100; //save into database
      var score = Number((score_raw).toFixed(1))
      $.ajax({
        url:'<?=base_url()?>index.php/pages/saving_grades',
        type: 'post',
        data:{stud:stud, quar:quar, code:code, type:type, score:score},
        dataType : "JSON",
        success: function (data) {
          student_grades();//displaying the result
        }
      });
    }
    //--- end here
    //--- view the grading system
    $('.quarter_sem').on('click','.view_grade',function(event){
      var view = $(this).data('quarter');
      var quar = $('input[name="quar"]').val();
      if(view == '1'){
        $('input[name="quarter"]').val(' -1st QUARTER');
        $('.title_btn').html('<i class="fas fa-copy"></i> 1st QUARTER');
        $('input[name="quarter_val"]').val('1');
        $('input[name="quar"]').val('1st');
        title_load();
        student_grades();
      }
      else if(view == '2'){
        $('input[name="quarter"]').val(' -2nd QUARTER');
        $('.title_btn').html('<i class="fas fa-copy"></i> 2nd QUARTER');
        $('input[name="quarter_val"]').val('2');
        $('input[name="quar"]').val('2nd');
        title_load();
        student_grades();
      }
      else if(view == '3'){
        $('input[name="quarter"]').val(' -3rd QUARTER');
        $('.title_btn').html('<i class="fas fa-copy"></i> 3rd QUARTER');
        $('input[name="quarter_val"]').val('1');
        $('input[name="quar"]').val('3rd');
        title_load();
        student_grades();
      }
      else if(view == '4'){
        $('input[name="quarter"]').val(' -4th QUARTER');
        $('.title_btn').html('<i class="fas fa-copy"></i> 4th QUARTER');
        $('input[name="quarter_val"]').val('2');
        $('input[name="quar"]').val('4th');
        title_load();
        student_grades();
      }
      else{
        if(quar  == '1st' || quar  =='2nd' ){
          $('input[name="quarter"]').val(' -FINAL');
          $('.title_btn').html('<i class="fas fa-copy"></i> FINAL QUARTER');
          
          var html =
          '<tr style="text-align:center;">'+
            '<th rowspan="2">LEARNERS NAME</th>'+
            '<th colspan="8">FIRST SEMISTER FINAL GRADES</th>'+
          '</tr>'+
          '<tr style="text-align:center;">'+
            '<td>1st QUARTER </td>'+
            '<td>2nd QUARTER </td>'+
            '<td colspan="2">FINAL GRADES</td>'+
          '</tr>';
          $('.table_head').html(html);
          loading_finalGrades();
        }
        else{
          $('input[name="quarter"]').val(' -FINAL');
          $('.title_btn').html('<i class="fas fa-copy"></i> FINAL QUARTER');
          
          var html =
          '<tr style="text-align:center;">'+
            '<th rowspan="2">LEARNERS NAME</th>'+
            '<th colspan="8">SECOND SEMISTER FINAL GRADES</th>'+
          '</tr>'+
          '<tr style="text-align:center;">'+
            '<td>3rd QUARTER </td>'+
            '<td>4th QUARTER </td>'+
            '<td>FINAL GRADES</td>'+
          '</tr>';
          $('.table_head').html(html);
          loading_finalGrades();
        }
      }
    });
    //--- end here
    //--- loading the student final grades
    function loading_finalGrades(){
     var code = $('input[name="class_code"]').val();
       $.ajax({
        url:'<?=base_url()?>index.php/pages/studentGrades',
        type: 'post',
        data:{code:code},
        dataType : "JSON",
        success: function (data) {
          var html = '';
          for(i=0; i<data.length; i++){
            if(data[i].FN1 <= 74){
              html +=
              '<tr>'+
                '<td><img  style="margin:0px; hight:7vh; width:7vh;" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" class="img-circle elevation-2" alt="User Image"> '+data[i].fullname+'</td>'+
                '<td>'+data[i].q1+' %</td>'+
                '<td>'+data[i].q2+' %</td>'+
                '<td><a href="javascript:void(0)" data-q1="'+data[i].q1+'" data-q2="'+data[i].q2+'" data-code="'+code+'" data-stud="'+data[i].student_id+'" style="color:red;" class="final_compute" title="COMPUTE FINAL GRADES"><b>'+data[i].FN1+' %</b></a></td>';
                if(data[i].f_grade == 0){
                  html +=
                      '<td style="width:15%;"><a href="javascript:void(0)" data-stud="'+data[i].student_id+'" data-code="'+data[i].class_code+'" data-grade="'+data[i].FN1+'" class="btn btn-flat btn-danger send_to_reg">NOT SUBMITTED</a></td>'+
                  '</tr>';
                }
                else{
                  html +=
                      '<td style="width:15%;"><a href="javascript:void(0)" data-stud="'+data[i].student_id+'" data-code="'+data[i].class_code+'" data-grade="0" class="btn btn-flat btn-danger send_to_reg" title="CANCEL THE SUBMITTION OF GRADES"><i class="fas fa-check"></i> SUBMITTED</a></td>'+
                  '</tr>';
                }
            }
            else{
              html +=
              '<tr>'+
                '<td><img style="margin:0px; hight:7vh; width:7vh;" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" class="img-circle elevation-2" alt="User Image"> '+data[i].fullname+'</td>'+
                '<td>'+data[i].q1+' %</td>'+
                '<td>'+data[i].q2+' %</td>'+
                '<td><a href="javascript:void(0)" data-q1="'+data[i].q1+'" data-q2="'+data[i].q2+'" data-code="'+code+'" data-stud="'+data[i].student_id+'" class="final_compute" title="COMPUTE FINAL GRADES"><b>'+data[i].FN1+' %</b></a></td>';
                if(data[i].f_grade == 0){
                  html +=
                      '<td style="width:15%;"><a href="javascript:void(0)" data-stud="'+data[i].student_id+'" data-code="'+data[i].class_code+'" data-grade="'+data[i].FN1+'" class="btn btn-flat btn-success send_to_reg">NOT SUBMITTED</a></td>'+
                  '</tr>';
                }
                else{
                  html +=
                      '<td style="width:15%;"><a href="javascript:void(0)" data-stud="'+data[i].student_id+'" data-code="'+data[i].class_code+'" data-grade="0" class="btn btn-flat btn-success send_to_reg" title="CANCEL THE SUBMITTION OF GRADES"><i class="fas fa-check"></i> SUBMITTED</a></td>'+
                  '</tr>';
                } 
            }
          }
          $('.table_body').html(html);
        }
      }); 
    }
    //--- end here
    //--- submit the student grades to the registrar
    $('.table_body').on('click','.send_to_reg',function(){
      var stud = $(this).data('stud');
      var code = $(this).data('code');
      var grade = $(this).data('grade');
      $.ajax({
        url:'<?=base_url()?>index.php/pages/send_registrar',
        type: 'post',
        data:{code:code, stud:stud, grade:grade},
        dataType : "JSON",
        success: function (data) {
          loading_finalGrades();
        }
      }); 
      });
    //--- end here
    //--- uodating the student grades in FN1
    $('.table_body').on('click', '.final_compute',function(event){
      var q1 = $(this).data('q1');
      var q2 = $(this).data('q2');
      var code = $(this).data('code');
      var stud = $(this).data('stud');
      var grade = (q1 + q2) / 2;
      // alert(code +" | "+ stud +" | "+grade);
       $.ajax({
        url:'<?=base_url()?>index.php/pages/input_fn_grades',
        type: 'post',
        data:{code:code, stud:stud, grade:grade},
        dataType : "JSON",
        success: function (data) {
          //alert('success');
          loading_finalGrades();
        }
      }); 
    });
    //--- END here
    //---loading the title
    function title_load(){
      var code = $('input[name="class_code"]').val();
      var quarter = $('input[name="quarter"]').val();
      $.ajax({
        url:'<?=base_url()?>index.php/pages/display_gradeTitle',
        type: 'post',
        data:{code:code},
        dataType : "JSON",
        success: function (data) {
         var html = '';
          for(i=0; i<data.length; i++){
              if(data[i].qa == '0'){
                 html +=
                  '<tr style="text-align:center;">'+
                    '<th rowspan="2">LEARNER NAMES</th>'+
                    '<th colspan="6"> GRADING SYSTEM '+quarter+'</th>'+
                  '</tr>'+
                  '<tr style="text-align:center;">'+
                    '<th title="WRITTEN WORKS"> WW (PS 100%)</th>'+
                    '<th title="WEIGHTED SCORE"> WS ('+data[i].ww+'%) </th>'+
                    '<th title="PERFORMANCE TASKS"> PT (PS 100%)</th>'+
                    '<th title="WEIGHTED SCORE" > WS ('+data[i].pt+'%)</th>'+
                    '<th title="INITITAL GRADES"> IG (PS 100%)</th>'+
                    '<th title="QUARTER GRADES"> QG (PS 100%)</th>'+
                  '</tr>';
                }
              else{
                 html +=
                  '<tr style="text-align:center;">'+
                    '<th rowspan="2">LEARNER NAMES</th>'+
                    '<th colspan="8"> GRADING SYSTEM '+quarter+'</th>'+
                  '</tr>'+
                  '<tr style="text-align:center;">'+
                    '<th title="WRITTEN WORKS"> WW (PS 100%)</th>'+
                    '<th title="WEIGHTED SCORE"> WS ('+data[i].ww+'%) </th>'+
                    '<th title="PERFORMANCE TASKS"> PT (PS 100%)</th>'+
                    '<th title="WEIGHTED SCORE" > WS ('+data[i].pt+'%)</th>'+
                    '<th title="QUARTERLY ASSESSMENTS"> QA (PS 100%)</th>'+
                    '<th title="WEIGHTED SCORE"> WS ('+data[i].qa+'%)</th>'+
                    '<th title="INITITAL GRADES"> IG (PS 100%)</th>'+
                    '<th title="TRANSMUTED GRADES"> QUARTER GRADES (PS 100%)</th>'+
                  '</tr>';
              }
            }
          $('.table_head').html(html);
        }
      });
    }
    //--- end here

  });
</script>