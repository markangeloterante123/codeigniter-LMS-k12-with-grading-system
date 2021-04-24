<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Copy of Grades</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/dist/css/adminlte.min.css">
  <script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery-ui/jquery-ui.min.js"></script>
</head>
<body>
<div style="position: relative; text-align: center;" class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12" >
          <div class="widget-user-image">
            <img style=" width: 100%;" src="<?php echo base_url(); ?>assets/files/back.png" alt="Visa"> 
          </div> 
      </div>
    </div>
    <input type="hidden" name="stud_id" value="<?php echo $stud_id;?>">
    <div style="margin-bottom: 0px; padding-bottom: 0px;" class="row invoice-info">
      <div  style="margin-bottom: 0px; padding-bottom: 0px;" class="col-sm-4 invoice-col text-left">
        <address>
          <strong style="font-size: 18px;" class="name_stud"> </strong><br>
          <strong style="font-size: 18px;">Student No.: <?php echo $stud_id?></strong><br>
          <strong style="font-size: 18px;" class="section"> </strong><br>
          <strong style="font-size: 18px;" class="semester"> </strong><br>
        </address>
      </div>
    </div>
    <div style="margin-top: 0px;" class="row"> 
      <div style="margin-top: 0px;" class="col-12 table-responsive" >
            <table style="margin-top: 0px;  border:2px solid black; position: absolute; top: 37%; left: 50%; transform: translate(-50%, -50%);" class="table table-striped">
              <thead>
              <tr>
                <th style="color:maroon; font-size: 18px;">Subject Code</th>
                <th style="color:maroon; font-size: 18px;">Subject Discription</th>
                <th style="color:maroon; font-size: 18px;">Units</th>
                <th style="color:maroon; font-size: 18px;">Semestral Grades</th>
                <th style="color:maroon; font-size: 18px;">Remarks</th>
              </tr>
              <!-- <img style=" width: 100%;" src="<?php echo base_url(); ?>assets/files/background.png" alt="Visa"> -->
              </thead>
              <tbody class="subject_table">
            
              </tbody>
            </table>

      
         <img style="margin-bottom: 0px; padding-top: 0px; opacity: 0.1; position: relative; background-position: center; background-repeat: no-repeat; background-size: cover;"  src="<?php echo base_url(); ?>assets/files/logo2.jpg">
        <div class="row">

          <div class="col-6">
              <div  class="col-sm-6 invoice-col text-left">
                <address>
                  <strong style="font-size: 14px;">Verified by: </strong><br>
                  <strong style="font-size: 14px;"></strong><br>
                  <strong style="font-size: 16px;">ROSELYN F. RAVANAL </strong><br>
                  <strong style="font-size: 14px;">Registrar </strong><br>
                </address>
              </div>
          </div>
          <div class="col-6">
              <div  class="col-sm-6 invoice-col text-left">
                <address>
                  <strong style="font-size: 14px;">Noted By: </strong><br>
                  <strong style="font-size: 14px;"></strong><br>
                  <strong style="font-size: 16px;">LEONORA M. GORDON</strong><br>
                  <strong style="font-size: 14px;">Administrator</strong><br>
                </address>
              </div>
          </div>
      <!-- /.col -->
    </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12" >
          <div class="widget-user-image">
            <img style=" width: 100%;" src="<?php echo base_url(); ?>assets/files/background.png" alt="Visa"> 
          </div> 
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script type="text/javascript">
  $(document).ready(function () { 
    loadinfo(); 
   
    function loadinfo(){
       var id = $("input[name='stud_id']").val();
            $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_studPrintInfo',
              data:{id:id},
              type: 'POST',
              dataType : "JSON",
              success: function (data) {          
                  for(i=0; i<data.length; i++){
                      $('.name_stud').html('Student Name: '+data[i].fullname);
                      $('.section').html('Section: '+data[i].cor_sec);
                    }
                    semister();
              }
            });
    }
    function semister(){
            $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_reports',
              type: 'POST',
              dataType : "JSON",
              success: function (data) {          
                  for(i=0; i<data.length; i++){
                      $('.semester').html('Semester: '+data[i].semester);
                    }
                    subject();
              }
            });
    }
    function subject(){
      var id = $("input[name='stud_id']").val();
            $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_studPrintSub',
              data:{id:id},
              type: 'POST',
              dataType : "JSON",
              success: function (data) { 
                var html = '';
                var unit = 0;
                var totalGrade = 0;
                  for(i=0; i<data.length; i++){
                    var num = parseFloat(data[i].unit);
                    var grade = parseFloat(data[i].f_grade);
                    unit += num;
                    totalGrade += grade;
                    if(data[i].f_grade >= '75'){
                      html +=
                     '<tr>'+
                        '<td>'+data[i].class_subject+'</td>'+
                        '<td>'+data[i].course+'</td>'+
                        '<td>'+data[i].unit+'</td>'+
                        '<td>'+data[i].f_grade+'</td>'+
                        '<td>PASSED</td>'+
                      '</tr>';
                    }
                    else{
                        html +=
                     '<tr>'+
                        '<td>'+data[i].class_subject+'</td>'+
                        '<td>'+data[i].course+'</td>'+
                        '<td>'+data[i].unit+'</td>'+
                        '<td>'+data[i].f_grade+'</td>'+
                        '<td>FAILED</td>'+
                      '</tr>';
                    }
                  }
                var average = totalGrade / data.length;
                var dis = Number((average).toFixed(1));
                if(average >= '75'){
                   html +=
                    '<tr>'+
                      '<td colspan="2" style="color:maroon; font-size: 18px;" class="text-right"><strong> General Wiegthed Average:</strong></td>'+
                      '<td style="color:maroon; font-size: 18px;"><strong>'+unit+'</strong></td>'+
                      '<td style="color:maroon; font-size: 18px;"><strong>'+dis+'%</strong></td>'+
                      '<td style="color:maroon; font-size: 18px;"><strong>PASSED</strong></td>'+
                    '</tr>';
                }
                else{
                   html +=
                    '<tr>'+
                      '<td colspan="2" style="color:maroon; font-size: 18px;" class="text-right"><strong> General Wiegthed Average:</strong></td>'+
                      '<td style="color:maroon; font-size: 18px;"><strong>'+unit+'</strong></td>'+
                      '<td style="color:maroon; font-size: 18px;"><strong>'+dis+'%</strong></td>'+
                      '<td style="color:maroon; font-size: 18px;"><strong>FAILED</strong></td>'+
                    '</tr>';
                }
               
                $('.subject_table').html(html);
                 window.addEventListener("load", window.print());
              }
            })
    }

  });  
</script>
</body>
</html>


