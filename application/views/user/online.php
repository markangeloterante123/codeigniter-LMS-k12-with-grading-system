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
<style>
div.fixed {
  position: fixed;
  bottom: 0;
  right: 0;
  width: 150px;
  
}
</style>
<body style="background-image: linear-gradient(to bottom , #800000, #CC3300); " class="hold-transition sidebar-collapse layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    <nav style="background-image: linear-gradient(to right, #800000, #CC3300); " class="main-header navbar navbar-expand navbar-white navbar-dark">
    </ul>
    <ul class="navbar-nav ml-auto">
      <input type="hidden" name="online_code" value="<?php echo $code; ?>">
      <input type="hidden" name="online_id" value="<?php echo $id; ?>">
      <input type="hidden" name="time_start" value="<?php echo $time; ?>">
      <input type="hidden" name="total_start" value="<?php echo $total; ?>">
    </ul>
  </nav>


  <!-- Content Wrapper. Contains page content -->
  <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php
              $data = $code;
              $field = 'post_id';
              $table = 'tbl_lms_post';
              foreach($this->load->model_users->data3($data,$field,$table) as $value){
                $title = $value->title;
                $class = $value->user_id;
                $type = $value->type;

            ?>
            <h1 style="color: white;"><?php echo $title; ?></h1>
            <input type="hidden" name="title" value="<?php echo $title; ?>">
            <input type="hidden" name="class_code" value="<?php echo $class; ?>">
            <input type="hidden" name="type" value="<?php echo $type; ?>">
            <input type="hidden" name="wrong_total">
            <input type="hidden" name="right_total">
            <input type="hidden" name="total">
            <input type="hidden" name="to_chk">
            <input type="hidden" name="time_take">
            <input type="hidden" name="time_backup">
          <?php } ?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li style="margin-right: 5px;" class="attemp"></li>
              <li  class="active_btn" ></li>
            </ol>
          </div>
        </div>
      </div>
    </section>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 display_questionsA">

          </div>
          <div class="col-12 display_questionsB">

          </div>
          <div class="col-12 display_questionsC">

          </div>
          <div class="col-12 done_btn">

          </div>
          <div class="fixed">
            <h5 id='timer'></h5>
          </div>
        </div>
      </div>
    </section>  </div>


    
      <style type="text/css">
         .note-group-select-from-files {
            display: none;
            display: hide;
      }
       </style>
      <div class="modal fade" id="question_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title questions_title"></h4>
              <input type="hidden" name="raw_id">
            </div>
            <div class="modal-body">
              <div class="form-group">
                <textarea  rows="18" id="compose-textarea" name="textarea_post" class="form-control" style="height: 250px;">
                     
                </textarea>
              </div>
              <a href="javascript:void(0)" class="btn btn-success send_answer"> Save</a>
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
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/dist/js/adminlte.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweetalert2/sweetalert2.min.js"></script>

<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweet/sweetalert-dev.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweet/sweetalert.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/page/chat.js"></script> -->
<script src="<?php echo base_url(); ?>assets/page/clock.js"></script>
</body>
</html>
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
<script type="text/javascript">
  $(document).ready(function (){
    attemp();
    //generate_question();
    //--- check the student attemp to take online exam, quiz , activity
    function attemp(){
      var code = $('input[name="online_code"]').val();
      var id = $('input[name="online_id"]').val();
      var title = $('input[name="title"]').val();
      $.ajax({
        url:'<?=base_url()?>index.php/pages/ajax_attemp',
        data:{code:code, id:id},
        type: 'POST',
        dataType : "JSON",
        success: function (data) {
          if(data.length == 0){
            var time_start = $('input[name="time_start"]').val();
            $('input[name="time_take"]').val(time_start);
            $('input[name="time_backup"]').val(time_start);
            first_attemp();
          }
          else{
            $('input[name="time_take"]').val(data[0].time);
            $('input[name="time_backup"]').val(data[0].time);
            var html = '';
            for(i=0; i<data.length; i++){
              if(data[i].attemp <= '2'){
                $('.attemp').html('<a style="color: white; border:1px solid white;" class="btn btn-flat btn-info" title="ATTEMPED"> 0'+data[i].attemp+'  <a style="color: white; border:1px solid white;" title="ALLOWED ATTEMP" class="btn btn-flat btn-info"> 03</a> </a>');
                $('.active_btn').html('<a href="javascript:void(0)" class="btn btn-success next_attemp" data-attemp="'+data[i].attemp+'" data-id="'+data[i].id+'" ><i class="fas fa-edit"></i> Take '+title+'</a>');
              }
              else{
                $('.attemp').html('<a style="color: white; border:1px solid white;" class="btn btn-flat btn-info" title="ATTEMPED"> 0'+data[i].attemp+' <a style="color: white; border:1px solid white;" title="ALLOWED ATTEMP" class="btn btn-flat btn-info"> 03</a> </a>');
                $('.active_btn').html('<button type="button" class="btn btn-block btn-default disabled"><i class="fas fa-edit"></i>  Already Used 3 Attemp</button>');
              }
            }
          }
        }
      });
    }
    //--- end here
    //--- checker
    function check(){
      attemp();
    }
    //--- end here
    //--- first attemp
    function first_attemp(){
      var time = $('input[name="time_start"]').val();
      var post_id = $('input[name="online_code"]').val();
      var id = $('input[name="online_id"]').val();
      var class_code = $('input[name="class_code"]').val();
      var type = $('input[name="type"]').val();
      var total = $('input[name="total_start"]').val();
      $.ajax({
        url:'<?=base_url()?>index.php/pages/first_attemp',
        data:{post_id:post_id, id:id, class_code:class_code, type:type, time:time, total:total},
        type: 'POST',
        dataType : "JSON",
        success: function (data) {
          
          first_generate();
          var c = $('input[name="time_backup"]').val();
          $('input[name="time_take"]').val(c);
          timedCount();
        }
      });
    }
    //--- end here
    //--- attemp more than 1 lessthan 3
    $('.active_btn').on('click','.next_attemp',function(event){  
      var attemp = $(this).data('attemp');
      var id = $(this).data('id');
      var post_id = $('input[name="online_code"]').val();
      var stud = $('input[name="online_id"]').val();
      var class_code = $('input[name="class_code"]').val();

      $.ajax({
        url:'<?=base_url()?>index.php/pages/next_attemp',
        data:{attemp:attemp, id:id, post_id:post_id, stud:stud, class_code:class_code},
        type: 'POST',
        dataType : "JSON",
        success: function (data) {
         
          generate_question();
          var c = $('input[name="time_backup"]').val();
          $('input[name="time_take"]').val(c);
          timedCount();
        }
      });
    });
    //--- end here

    //--- generate the question into database
    function first_generate(){
      var post_id = $('input[name="online_code"]').val();
      var stud = $('input[name="online_id"]').val();
      var class_code = $('input[name="class_code"]').val();
      $.ajax({
        url:'<?=base_url()?>index.php/pages/first_generate',
        data:{post_id:post_id, stud:stud, class_code:class_code},
        type: 'POST',
        dataType : "JSON",
        success: function (data) {
          generate_question();
        }
      });
    }
    //--- end here
    //--- generate question
    function generate_question(){
      var post_id = $('input[name="online_code"]').val();
      var stud = $('input[name="online_id"]').val();
      var class_code = $('input[name="class_code"]').val();
      $('.active_btn').html('');
      $('.attemp').html('');
      $.ajax({
        url:'<?=base_url()?>index.php/pages/generate_question',
        type: 'POST',
        data:{post_id:post_id, stud:stud, class_code:class_code},
        dataType : "JSON",
        success: function (data) {
          var mul = '';
          var tf = '';
          var enu = '';
          for(i=0; i<data.length; i++){
            if(data[i].correct_answer == "A" || data[i].correct_answer == "a" || data[i].correct_answer == "B" || data[i].correct_answer == "b" || data[i].correct_answer == "C" || data[i].correct_answer == "c" ||  data[i].correct_answer == "D" || data[i].correct_answer == "d"){
              if(data[i].answer == 'A' || data[i].answer == 'a' ){
                mul +=
                '<div class="card">'+
                  '<table id="example" class="table table-bordered table-hover">'+
                    '<tbody class="table_body">'+
                      '<tr>'+
                        '<td colspan="4"><p style="margin-left: 20px;">'+data[i].question+'</p>'+
                          '<tr>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-info answerA"><i class="fas fa-check"></i> A. '+data[i].a+' </a></td>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerB">B. '+data[i].b+'</a></td>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerC">C. '+data[i].c+'</a></td>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerD">D. '+data[i].d+'</a></td>'+
                          '</tr>'+
                        '</td>'+
                      '</tr>'+
                    '</tbody>'+
                  '</table>'+
                '</div>';
              }
              else if(data[i].answer == 'B' || data[i].answer == 'b' ){
                mul +=
                '<div class="card">'+
                  '<table id="example" class="table table-bordered table-hover">'+
                    '<tbody class="table_body">'+
                      '<tr>'+
                        '<td colspan="4"><p style="margin-left: 20px;">'+data[i].question+'</p>'+
                          '<tr>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerA">A. '+data[i].a+' </a></td>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-info answerB"><i class="fas fa-check"></i> B. '+data[i].b+'</a></td>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerC">C. '+data[i].c+'</a></td>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerD">D. '+data[i].d+'</a></td>'+
                          '</tr>'+
                        '</td>'+
                      '</tr>'+
                    '</tbody>'+
                  '</table>'+
                '</div>';
              }
              else if(data[i].answer == 'C' || data[i].answer == 'c' ){
                mul +=
                '<div class="card">'+
                  '<table id="example" class="table table-bordered table-hover">'+
                    '<tbody class="table_body">'+
                      '<tr>'+
                        '<td colspan="4"><p style="margin-left: 20px;">'+data[i].question+'</p>'+
                          '<tr>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerA">A. '+data[i].a+' </a></td>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerB">B. '+data[i].b+'</a></td>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-info answerC"><i class="fas fa-check"></i> C. '+data[i].c+'</a></td>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerD">D. '+data[i].d+'</a></td>'+
                          '</tr>'+
                        '</td>'+
                      '</tr>'+
                    '</tbody>'+
                  '</table>'+
                '</div>';
              }
              else if(data[i].answer == 'D' || data[i].answer == 'd' ){
                mul +=
                '<div class="card">'+
                  '<table id="example" class="table table-bordered table-hover">'+
                    '<tbody class="table_body">'+
                      '<tr>'+
                        '<td colspan="4"><p style="margin-left: 20px;">'+data[i].question+'</p>'+
                          '<tr>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerA">A. '+data[i].a+' </a></td>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerB">B. '+data[i].b+'</a></td>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerC">C. '+data[i].c+'</a></td>'+
                            '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-info answerD"><i class="fas fa-check"></i> D. '+data[i].d+'</a></td>'+
                          '</tr>'+
                        '</td>'+
                      '</tr>'+
                    '</tbody>'+
                  '</table>'+
                '</div>';
              }
              else{
              mul +=
              '<div class="card">'+
                '<table id="example" class="table table-bordered table-hover">'+
                  '<tbody class="table_body">'+
                    '<tr>'+
                      '<td colspan="4"><p style="margin-left: 20px;">'+data[i].question+'</p>'+
                        '<tr>'+
                          '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerA">A. '+data[i].a+' </a></td>'+
                          '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerB">B. '+data[i].b+'</a></td>'+
                          '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerC">C. '+data[i].c+'</a></td>'+
                          '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-block btn-outline-info answerD">D. '+data[i].d+'</a></td>'+
                        '</tr>'+
                      '</td>'+
                    '</tr>'+
                  '</tbody>'+
                '</table>'+
              '</div>';
              }
            }
            //---for second condition true or false
            else if(data[i].correct_answer == "T" || data[i].correct_answer == "t" || data[i].correct_answer == "F" || data[i].correct_answer == "f"){
              if(data[i].answer == 'T' || data[i].answer == 't'){
                tf +=
              '<div class="card">'+
                '<table id="example" class="table table-bordered table-hover">'+
                  '<tbody class="table_body">'+ 
                   '<tr>'+
                      '<td colspan="4"><p style="margin-left: 20px;">'+data[i].question+'</p> <a style="margin-left: 20px;" href="javascript:void(0)"  data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-info answerT"><i class="fas fa-check"></i> TRUE</a> <a href="javascript:void(0)"  data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-outline-info answerF">FALSE</a></td>'+
                    '</tr>'+
                  '</tbody>'+
                '</table>'+
              '</div>';
              } 
              else if(data[i].answer == 'F' || data[i].answer == 'f'){
                tf +=
              '<div class="card">'+
                '<table id="example" class="table table-bordered table-hover">'+
                  '<tbody class="table_body">'+ 
                   '<tr>'+
                      '<td colspan="4"><p style="margin-left: 20px;">'+data[i].question+'</p> <a style="margin-left: 20px;" href="javascript:void(0)"  data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-outline-info answerT"> TRUE</a> <a href="javascript:void(0)"  data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-info answerF"><i class="fas fa-check"></i> FALSE</a></td>'+
                    '</tr>'+
                  '</tbody>'+
                '</table>'+
              '</div>';
              }
              else{
              tf +=
              '<div class="card">'+
                '<table id="example" class="table table-bordered table-hover">'+
                  '<tbody class="table_body">'+ 
                   '<tr>'+
                      '<td colspan="4"><p style="margin-left: 20px;">'+data[i].question+'</p> <a style="margin-left: 20px;" href="javascript:void(0)"  data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-outline-info answerT"> TRUE</a> <a href="javascript:void(0)"  data-id="'+data[i].id+'" data-answer="'+data[i].correct_answer+'" class="btn btn-outline-info answerF">FALSE</a></td>'+
                    '</tr>'+
                  '</tbody>'+
                '</table>'+
              '</div>';
              }    
            }
            //para sa mga tanung na long answer
            else{
              enu +=
              '<div class="card">'+
                '<table id="example" class="table table-bordered table-hover">'+
                  '<tbody class="table_body">'+
                    '<tr>'+
                      '<td colspan="4"><p style="margin-left: 20px;">'+data[i].question+'</p>'+
                      '<p class="form-control">'+data[i].answer+'</p>'+
                      '<a href="javascript:void(0)"  data-question="'+data[i].question+'" data-id="'+data[i].id+'" class="btn btn-success open_modal"><i class="fas fa-arrow-right"></i> Answer</a></td>'+
                    '</tr>'+
                  '</tbody>'+
                '</table>'+
              '</div>';
            }
            //--- last line
          }
          $('.display_questionsA').html(mul);
          $('.display_questionsB').html(tf);
          $('.display_questionsC').html(enu);
          $('.done_btn').html('<a style="margin-bottom:10px;" href="javascript:void(0)" class="btn btn-block btn-info save_score"><i class="fas fa-save"></i> SAVE</a>');      
        }
      }); 
    }
    //--- end here
    //--- save answer
    $('.done_btn').on('click','.save_score', function(){
      save_score();
    });
    //--- end here
    //--- for finalize score
    function save_score(){
      var code = $('input[name="online_code"]').val();
      var stud_id = $('input[name="online_id"]').val();
      $.ajax({
          url:'<?=base_url()?>index.php/pages/save_allAnswer',
          type: 'POST',
          data:{code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            var total = $('input[name="total_start"]').val();
            var wrong_total = 0;
            var right_total = 0;
            var to_chk = 0;
            for(i=0; i<data.length; i++){
              if(data[i].to_check == '1'){
                to_chk += 1;
                if(data[i].point == '0'){
                  wrong_total += 1;
                }
                else if(data[i].point == '1'){
                  right_total += 1;
                }
              }
              else{
                if(data[i].point == '0'){
                  wrong_total += 1;
                }
                else if(data[i].point == '1'){
                  right_total += 1;
                }
              }      
            }
            var ttl_wrong = wrong_total - to_chk;
            $('input[name="total"]').val(total);
            $('input[name="wrong_total"]').val(ttl_wrong);
            $('input[name="right_total"]').val(right_total);
            $('input[name="to_chk"]').val(to_chk);
            finalize_record();
          }
        });
    }
    //--- end here
    //--- save data from the activity into submit 
    function finalize_record(){
      var total = $('input[name="total"]').val();
      var wrong = $('input[name="wrong_total"]').val();
      var right = $('input[name="right_total"]').val();
      var to_chk = $('input[name="to_chk"]').val();
      var code = $('input[name="online_code"]').val();
      var stud_id = $('input[name="online_id"]').val();
      var title = $('input[name="title"]').val();
      $.ajax({
          url:'<?=base_url()?>index.php/pages/finalize_record',
          type: 'POST',
          data:{code:code, stud_id:stud_id, to_chk:to_chk, right:right, wrong:wrong, total:total},
          dataType : "JSON",
          success: function (data) {
            //finalize and display graph for the result
          $('.display_questionsA').html('');
          $('.display_questionsB').html('');
          $('.display_questionsC').html('');
          $('.done_btn').html('');
          $('input[name="time_take"]').val(0);
          swal(""+title+"","Score: "+right+" / "+total+"","success");

          }
        });
    }
    //--- end here
    //--- para sa answer na mahaba sagot
    $('.display_questionsC').on('click','.open_modal', function(event){
      var id = $(this).data('id');
      var question = $(this).data('question');
      var answer = $(this).data('answer');
      $('.questions_title').html('');
      $('.questions_title').html(question);
      $('input[name="raw_id"]').val(id);
      $('#question_modal').modal('show');
    });
    $('.send_answer').click(function(event){
      var answer = $('textarea[name="textarea_post"]').val();
      var code = $('input[name="online_code"]').val();
      var stud_id = $('input[name="online_id"]').val();
      var id = $('input[name="raw_id"]').val();
      $.ajax({
          url:'<?=base_url()?>index.php/pages/saveLong_answer',
          type: 'POST',
          data:{answer:answer, id:id, code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            generate_question();
            $('#question_modal').modal('hide');
          }
        });
    })
    //--- end here
    //--- para sa true answer
    $('.display_questionsB').on('click','.answerT', function(event){
      var answer = $(this).data('answer');
      var id = $(this).data('id');
      var code = $('input[name="online_code"]').val();
      var stud_id = $('input[name="online_id"]').val();
      var ans = 'T';
      if(answer == 'T' || answer == 't'){
        $.ajax({
          url:'<?=base_url()?>index.php/pages/answer_question',
          type: 'POST',
          data:{answer:answer, id:id, ans:ans, code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            generate_question();
          }
        });
      }
      else{
        $.ajax({
          url:'<?=base_url()?>index.php/pages/answerWrong_question',
          type: 'POST',
          data:{answer:answer, id:id, ans:ans, code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            generate_question();
          }
        });
      }
    });
    //--- end here
    //--- para sa false
    $('.display_questionsB').on('click','.answerF', function(event){
      var answer = $(this).data('answer');
      var id = $(this).data('id');
      var code = $('input[name="online_code"]').val();
      var stud_id = $('input[name="online_id"]').val();
      var ans = 'F';
      if(answer == 'F' || answer == 'f'){
        $.ajax({
          url:'<?=base_url()?>index.php/pages/answer_question',
          type: 'POST',
          data:{answer:answer, id:id, ans:ans, code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            generate_question();
          }
        });
      }
      else{
        $.ajax({
          url:'<?=base_url()?>index.php/pages/answerWrong_question',
          type: 'POST',
          data:{answer:answer, id:id, ans:ans, code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            generate_question();
          }
        });
      }
    }); 
    //--- end here
    //--- answer A
    $('.display_questionsA').on('click','.answerA', function(event){
      var answer = $(this).data('answer');
      var id = $(this).data('id');
      var code = $('input[name="online_code"]').val();
      var stud_id = $('input[name="online_id"]').val();
      var ans = 'A';
      if(answer == 'A' || answer == 'a'){
        $.ajax({
          url:'<?=base_url()?>index.php/pages/answer_question',
          type: 'POST',
          data:{answer:answer, id:id, ans:ans, code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            generate_question();
          }
        });
      }
      else{
        $.ajax({
          url:'<?=base_url()?>index.php/pages/answerWrong_question',
          type: 'POST',
          data:{answer:answer, id:id, ans:ans, code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            generate_question();
          }
        });
      }
    });
    //--- end here
     //--- answer B
    $('.display_questionsA').on('click','.answerB', function(event){
      var answer = $(this).data('answer');
      var id = $(this).data('id');
      var code = $('input[name="online_code"]').val();
      var stud_id = $('input[name="online_id"]').val();
      var ans = 'B';
      if(answer == 'B' || answer == 'b'){
        $.ajax({
          url:'<?=base_url()?>index.php/pages/answer_question',
          type: 'POST',
          data:{answer:answer, id:id, ans:ans, code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            generate_question();
          }
        });
      }
      else{
        $.ajax({
          url:'<?=base_url()?>index.php/pages/answerWrong_question',
          type: 'POST',
          data:{answer:answer, id:id, ans:ans, code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            generate_question();
          }
        });
      }
    });
    //--- end here
    //--- para sa answer C
    $('.display_questionsA').on('click','.answerC', function(event){
      var answer = $(this).data('answer');
      var id = $(this).data('id');
      var code = $('input[name="online_code"]').val();
      var stud_id = $('input[name="online_id"]').val();
      var ans = 'C';
      if(answer == 'C' || answer == 'c'){
        $.ajax({
          url:'<?=base_url()?>index.php/pages/answer_question',
          type: 'POST',
          data:{answer:answer, id:id, ans:ans, code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            generate_question();
          }
        });
      }
      else{
        $.ajax({
          url:'<?=base_url()?>index.php/pages/answerWrong_question',
          type: 'POST',
          data:{answer:answer, id:id, ans:ans, code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            generate_question();
          }
        });
      }
    });
    //--- end here
    //--- para sa answer C
    $('.display_questionsA').on('click','.answerD', function(event){
      var answer = $(this).data('answer');
      var id = $(this).data('id');
      var code = $('input[name="online_code"]').val();
      var stud_id = $('input[name="online_id"]').val();
      var ans = 'D';
      if(answer == 'D' || answer == 'd'){
        $.ajax({
          url:'<?=base_url()?>index.php/pages/answer_question',
          type: 'POST',
          data:{answer:answer, id:id, ans:ans, code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            generate_question();
          }
        });
      }
      else{
        $.ajax({
          url:'<?=base_url()?>index.php/pages/answerWrong_question',
          type: 'POST',
          data:{answer:answer, id:id, ans:ans, code:code, stud_id:stud_id},
          dataType : "JSON",
          success: function (data) {
            generate_question();
          }
        });
      }
    });
    //--- end here
    //--- exam timer
   
    
    var t;
    function timedCount(){
    
      var c = $('input[name="time_take"]').val();
          var hours = parseInt( c / 3600 ) % 24;
          var minutes = parseInt( c / 60 ) % 60;
          var seconds = c % 60;
          var result = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes) + ":" + (seconds  < 10 ? "0" + seconds : seconds);  
      $('#timer').html('<a style="border:1px solid white;" class="btn btn-info"><i class="fas fa-clock"></i> <b>'+result+'</b></a>');
            var c = $('input[name="time_take"]').val();
            c = c - 1;
            $('input[name="time_take"]').val(c);
      //--- para sa time stop
      t = setTimeout(function(){
       if(c >= 0){
        timedCount();
       }
       else{
        save_score();
        check();
        $('#timer').html('');
       }
      },
      1000);
    }
    //--- end here


//---------- end ng script here
  });
</script>

