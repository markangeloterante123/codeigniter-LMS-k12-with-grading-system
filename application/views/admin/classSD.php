
 
<?php
  $id = $this->session->all_userdata();
  if(isset($id['admin_session'])){
?>


  <aside  style="background-image: linear-gradient(to bottom right, #800000, #CC3300); " class="main-sidebar sidebar-dark-primary elevation-4">
     <?php
          $table="tbl_account";
          $field="id";
          if(isset($id['admin_session'])){
          $data=$id['admin_session'];
          foreach ($this->load->model_users->data($data,$field,$table) as $values) { 
           $name = $values->nickname;
           $fullname = $values->fullname;
           $profile = $values->profile;
           $id = $values->id;
          ?>
    <a style="background: #800000;" href="#" class="dropdown-toggle dropdown-hover dropdown-icon brand-link" data-toggle="dropdown">
      <img  style="height: 6.5vh; width: 6.5vh;" src="<?php echo base_url(); ?>assets/img/<?php echo $profile; ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span  class="brand-text font-weight-light"><?php echo $name; ?></span>
    </a>
   <div class="dropdown-menu" role="menu">
        <a href="<?php echo base_url(); ?>pages/adm2/clas" class="dropdown-item " ><i class="nav-icon fas fa-reply"></i> EXIT MY CLASS</a>
    </div>
          
    <div class="sidebar">
         
      <input type="hidden" name="name" value="<?php echo $name; ?>">  
      <input type="hidden" name="userid" value="<?php echo $id ?>"> 
      <input type="hidden" name="profile" value="<?php echo $profile; ?>">
      <input type="hidden" name="fullname" value="<?php echo $fullname; ?>">
      <input type="hidden" name="class_code_link" value="<?php echo $class_code ?>">
      <input type="hidden" name="time_online" >  
          <?php } }?>
  <?php } ?>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-university"></i>
              <p>
                OVERVIEW
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                CLASS ACTIVITY
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="nav nav-treeview class_activity_shortcut">     
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                CLASS ASSIGNMENT
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="nav nav-treeview class_assignment_shortcut">     
            </ul>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                CLASS QUIZ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="nav nav-treeview class_quiz_shortcut">
             
            </ul>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                CLASS EXAM-PROJECT
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="nav nav-treeview class_exam_shortcut">
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                JOINING CLASS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="nav nav-treeview request_join">
             
            </ul>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/enterGrades/<?php echo $class_code ?>/<?php echo $section; ?>/<?php echo $sub_code;?>/grade" target="_blank" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                STUDENTS OUTPUT   
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/enterGrades/<?php echo $class_code ?>/<?php echo $section; ?>/<?php echo $sub_code;?>/grade_record" target="_blank" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                STUDENTS GRADES   
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link upl_modal_question">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                UPLOAD QUESTIONNAIRE
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a data-toggle="modal" data-target="#add_link" class="nav-link ">
              <i class="nav-icon fas fa-video"></i>
              <p>
                CLASS VIDEO LINK
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

      <div class="modal fade" id="add_link">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header default_link_btn"><!--ajax--></div>
            <div class="modal-body"> 
              <div class="form-group add_link_display"> <!--ajax--></div>
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th style="width: 3%;">#</th>
                    <th style="width: 90%;">LINK</th>
                    <th style="width: 7%;">ACTION</th>
                  </tr>
                </thead>
                <tbody class="table_link">
                  <!--ajax link-->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title activity_title"></h4>
              <input type="hidden" name="post_id">
              <input type="hidden" name="acept">
             <div class="form-group toggle_checkbox">
                <!-- toggle buttons ajax format-->  
            </div> 
            </div>
            <div class="modal-body">
              <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Student ID</th>
                      <th>Student Name</th>
                      <th>Section</th>
                      <th>File</th>
                      <th>Status</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody class="sumitted_works">
                          
                    </tbody>
                  </table>
                </div><div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              
            </div>

          </div>
        </div>
      </div>



      <div class="modal fade" id="approve_option">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title student_name"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <input type="hidden" name="student_id_app">
            <input type="hidden" name="code_app">
            <div class="modal-body">
              <a href="javascript:void(0)" class="btn btn-block btn-success accept_request"><i class="fas fa-plus"></i> Accept Join Class</a>
              <a href="javascript:void(0)" class="btn btn-block btn-danger"><i class="fas fa-trash"></i> Cancel Request</a>
            </div>
          </div>
        </div>
      </div>

      

    <div class="modal fade" id="upload_question">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title student_name">UPLOAD</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post" id="import_question" enctype="multipart/form-data">
                <input type="hidden" name="class_question" value="<?php echo $class_code; ?>">
                <input type="hidden" name="profile_quiz">
                <label><i class="fas fa-edit"></i> Title:</label>
                <input type="text" class="form-control" name="title_name" required>
                <label><i class="fas fa-edit"></i> Total: </label>
                <input type="text" class="form-control" name="total_score" required>
                <label><i class="fas fa-file"></i> Type:</label>
                <select class="form-control" name="option">
                  <option value='4'>Assignment</option>
                  <option value="2">Activity</option>
                  <option value="5">Quiz</option>
                  <option value="6">Exam</option>
                  <option value="7">Project</option>
                </select>
                <label><i class="fas fa-clock"></i> Time:</label>
                <select class="form-control" name="timer">
                  <option value='7200'>2 hr</option>
                  <option value="5400">1 hr 30 min.</option>
                  <option value="3600">1 hr</option>
                  <option value="2700">45 min</option>
                  <option value="1800">30 min</option>
                  <option value="900">15 min</option>
                </select>
                  <label><i class="fas fa-calendar-alt"></i> DeadLine:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" name="reservationdate" id="reservationdate"  data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                <label><i class="fas fa-file-excel"></i> File:</label>
                  <input type="file" class="form-control" name="file" id="file"  accept=".xls, .xlsx">
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
                <input type="submit" class="btn btn-info" name="import" value="Upload">
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript">
  $(function () {
    $('#reservationdate').datetimepicker({
          format: 'MMMM - DD - YYYY'
      });
  })
</script>
  <script type="text/javascript">
    $(document).ready(function () {
      ajax_act_ass();
      request_join();
      btn_default_link();

      //--- adding link default btn 
      function btn_default_link(){
        var html =
        '<a href="javascript:void(0)" style="border-radius: 50%;" class="btn btn-success add_linkClass" title="ADD LINK"><i class="fas fa-plus"></i></a>'+
        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        $('.default_link_btn').html(html);
        $('.add_link_display').html('');
        open_link();
      }
      //--- end here
      //--- back to the default btn link
      $('.default_link_btn').on('click','.cancel_addLink',function(){
        btn_default_link();
      });
      //--- end here
      //--- display the adding link 
      $('.default_link_btn').on('click','.add_linkClass', function(event){
        var html =
        '<a href="javascript:void(0)" style="border-radius: 50%;" class="btn btn-danger cancel_addLink" title="CLOSE ADD LINK"><i class="fas fa-times"></i></a>'+
        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        $('.default_link_btn').html(html);
        var link = 
          '<label>SCHEDULE DATE:</label>'+
            '<input type="text" class="form-control" name="date_link">'+
            '<label>LINK:</label>'+
            '<input type="text" class="form-control" name="link">'+
            '<a style="margin-top:5px;" href="javascript:void(0)" class="btn btn-success saving_link"><i class="fas fa-video"></i> SAVE</a>';
        $('.add_link_display').html(link);
      });
      //--- end here
      //--- save the link
      $('.add_link_display').on('click','.saving_link', function(event){
        var code = $('input[name="class_code_link"]').val();
        var sched = $('input[name="date_link"]').val();
        var link = $('input[name="link"]').val();
         $.ajax({
            url:'<?=base_url()?>index.php/pages/add_link',
            data:{code:code, sched:sched, link:link},
            type: 'POST',
            dataType : "JSON",
            success: function (data) {    
              btn_default_link();
              swal("Success","Added link successfully","success");
            }
          });
      });
      //--- end here
      //--- loading link
      function open_link(){
        var code = $('input[name="class_code_link"]').val();
        $.ajax({
            url:'<?=base_url()?>index.php/pages/view_links',
            data:{code:code},
            type: 'POST',
            dataType : "JSON",
            success: function (data) {    
              var html = ''
                for(i=0; i<data.length; i++){
                  html +=
                  '<tr>'+
                    '<td>'+(i+1)+'</td>'+
                    '<td><a href="'+data[i].link+'" target="_blank" class="btn btn-block btn-default"><i class="fas fa-arrow-right"></i> '+data[i].title+'</a></td>'+
                    '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" class="btn btn-block btn-danger delete_link"><i class="fas fa-times"></i></a></td>'+
                  '</tr>';
                } 
              $('.table_link').html(html);
            }
          });
      }
      //--- end here
      //--- delete the link
      $('.table_link').on('click','.delete_link',function(){
        var id = $(this).data('id');
        swal({
              title:"Delete",
              text: "Are you sure you want to delete this link?",
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
                      url:'<?=base_url()?>index.php/pages/delete_link',
                      data:{id:id},
                      type: 'POST',
                      dataType : "JSON",
                      success: function (data) { 
                        swal("Success","Delete Link","success");
                        open_link();
                      }
                  });
              } else {
                swal("Cancelled", "", "error");
              }
            }); 
      });
      //--- end here


      function request_join(){
        var id = $("input[name='class_code']").val();
        $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_request_join',
              data:{id:id},
              type: 'POST',
              dataType : "JSON",
              error: function() {
                      alert('Error Trace activity');
                   },
              success: function (data) {    
                var html = '';
                  for(i=0; i<data.length; i++){
                      html+=
                      '<li class="nav-item">'+
                          '<a style="color:black; font-size:14px;" href="javascript:void(0)" data-id="'+data[i].student_id+'" data-name="'+data[i].fullname+'" data-class="'+data[i].class_code+'" class="nav-link option_accept">'+
                            '<i class="fas fa-plus nav-icon"></i>'+
                            '<p>'+data[i].fullname+' ['+data[i].cor_sec+']</p>'+
                          '</a>'+
                      '</li>'
                    }
                $('.request_join').html(html);
              }
            });
      }

      
       $('.request_join').on('click','.option_accept',function (){
          var student_id = $(this).data('id');
          var code = $(this).data('class');
          var name = $(this).data('name');
          
          $('input[name="student_id_app"]').val(student_id);
          $('input[name="code_app"]').val(code);
          $('.student_name').html(name);
          $('#approve_option').modal('show');
       });

      function ajax_act_ass(){
            var id = $("input[name='class_code']").val();
            $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_ass_actAdmin',
              data:{id:id},
              type: 'POST',
              dataType : "JSON",
              error: function() {
                      alert('Error Trace activity');
                   },
              success: function (data) {
                var ass = '';
                var html = '';
                var quiz = '';
                var exam = '';
                var mod = '';
                  for(i=0; i<data.length; i++){
                    if(data[i].acept == '2'){
                    }
                    else{  
                      if(data[i].type == '2'){
                        html +=
                        '<li class="nav-item">'+
                          '<a style="color:black; font-size:14px;" href="javascript:void(0)" data-post_id="'+data[i].post_id+'" data-type="'+data[i].type+'" data-acept="'+data[i].acept+'" data-date="'+data[i].date+'" data-title="'+data[i].title+'" data-class_code="'+data[i].user_id+'" data-post_id="'+data[i].post_id+'" class="nav-link open_act">'+
                            '<i class="fas fa-folder-open nav-icon"></i>'+
                            '<p>'+data[i].title+'</p>'+
                          '</a>'+
                        '</li>'
                        ;
                      }
                      // if(data[i].type == '3'){
                      //   mod +=
                      //   '<li class="nav-item">'+
                      //     '<a style="color:black; font-size:14px;" href="#" class="nav-link">'+
                      //       '<i class="fas fa-book nav-icon"></i>'+
                      //       '<p>'+data[i].title+'</p>'+
                      //     '</a>'+
                      //   '</li>'
                      //   ;
                      // }
                      else if(data[i].type == '4'){
                        ass +=
                        '<li class="nav-item">'+
                          '<a style="color:black; font-size:14px;" href="javascript:void(0)" data-post_id="'+data[i].post_id+'" data-type="'+data[i].type+'" data-acept="'+data[i].acept+'" data-date="'+data[i].date+'" data-title="'+data[i].title+'" data-class_code="'+data[i].user_id+'" data-post_id="'+data[i].post_id+'" class="nav-link open_act">'+
                            '<i class="fas fa-folder-open nav-icon"></i>'+
                            '<p>'+data[i].title+'</p>'+
                          '</a>'+
                        '</li>'
                        ;
                      }
                      else if(data[i].type == '5'){
                        quiz +=
                        '<li class="nav-item">'+
                          '<a style="color:black; font-size:14px;" href="javascript:void(0)" data-post_id="'+data[i].post_id+'" data-type="'+data[i].type+'" data-acept="'+data[i].acept+'"  data-date="'+data[i].date+'" data-title="'+data[i].title+'" data-class_code="'+data[i].user_id+'" data-post_id="'+data[i].post_id+'" class="nav-link open_act">'+
                            '<i class="fas fa-folder-open nav-icon"></i>'+
                            '<p>'+data[i].title+'</p>'+
                          '</a>'+
                        '</li>'
                        ;
                      }
                      else if(data[i].type == '6'){
                        exam +=
                        '<li class="nav-item">'+
                          '<a style="color:black; font-size:14px;" href="javascript:void(0)" data-post_id="'+data[i].post_id+'" data-type="'+data[i].type+'" data-acept="'+data[i].acept+'" data-date="'+data[i].date+'" data-title="'+data[i].title+'" data-class_code="'+data[i].user_id+'" data-post_id="'+data[i].post_id+'" class="nav-link open_act">'+
                            '<i class="fas fa-folder-open nav-icon"></i>'+
                            '<p>'+data[i].title+'</p>'+
                          '</a>'+
                        '</li>'
                        ;
                      }
                      else if(data[i].type == '7'){
                        exam +=
                        '<li class="nav-item">'+
                          '<a style="color:black; font-size:14px;" href="javascript:void(0)" data-post_id="'+data[i].post_id+'" data-type="'+data[i].type+'" data-acept="'+data[i].acept+'" data-date="'+data[i].date+'" data-title="'+data[i].title+'" data-class_code="'+data[i].user_id+'" data-post_id="'+data[i].post_id+'" class="nav-link open_act">'+
                            '<i class="fas fa-folder-open nav-icon"></i>'+
                            '<p>'+data[i].title+'</p>'+
                          '</a>'+
                        '</li>'
                        ;
                      }
                     }
                    }
                 $('.class_activity_shortcut').html(html);
                $('.class_quiz_shortcut').html(quiz);
                $('.class_exam_shortcut').html(exam);
                $('.class_assignment_shortcut').html(ass);
                // $('.class_mod').html(mod);
              }
            });
        }

      
      $('.class_assignment_shortcut').on('click','.open_act',function (){
          var id = $(this).data('post_id');
          var class_code = $("input[name='class_code']").val();
          var acept = $(this).data('acept');
          $('input[name="acept"]').val(acept);
          $('[name="post_id"]').val(id);
          var html = $(this).data('title');
          $('.activity_title').html(html); 
          $('#modal-xl').modal('show');
          checker_sub_stat(); 
            $.ajax({
                    url:'<?=base_url()?>index.php/pages/ajax_class_submitFile',
                    type: 'post',
                    data:{id:id, class_code:class_code},
                    dataType : "JSON",
                    success: function (data) {
                       var html = '';
                       var sub='';
                        for(i=0; i<data.length; i++){
                            if(data[i].student_grades == '0'){
                                 html +=
                                  '<tr>'+
                                    '<td>'+data[i].student_id+'</td>'+
                                    '<td>'+data[i].fullname+'</td>'+
                                    '<td>'+data[i].cor_sec+'</td>'+
                                    '<td><a title="Click Here to Download" href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" class="btn btn-default"><i class="fas fa-download"></i> '+data[i].file+'</a></td>'+
                                    '<td><a class="btn btn-info">For Checking</a></td>'+
                                    '<td>'+data[i].encoded_date+'</td>'+
                                  '</tr>'
                                ;
                              }
                              else{
                                 html +=
                                  '<tr>'+
                                    '<td>'+data[i].student_id+'</td>'+
                                    '<td>'+data[i].fullname+'</td>'+
                                    '<td>'+data[i].cor_sec+'</td>'+
                                    '<td><a title="Click Here to Download" href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" class="btn btn-default"><i class="fas fa-download"></i> '+data[i].file+'</a></td>'+
                                    '<td><a class="btn btn-success">Graded</a></td>'+
                                    '<td>'+data[i].encoded_date+'</td>'+
                                  '</tr>'
                                ;
                              } 
                          }
                       html += 
                        '<tr style="color:white; border:none; background-image: linear-gradient(to right, #800000, #CC3300); text-align:center;"><td colspan="4">Nothing to Follow!...</td><td colspan="2">Files Submitted: '+data.length+'</td></tr>';
                      $('.sumitted_works').html(html);
                    }
              }); 

        }); 
      $('.class_exam_shortcut').on('click','.open_act',function (){
          var id = $(this).data('post_id');
          var class_code = $("input[name='class_code']").val();
          var acept = $(this).data('acept');
          $('input[name="acept"]').val(acept);
          $('[name="post_id"]').val(id);
          var html = $(this).data('title');
          $('.activity_title').html(html); 
          $('#modal-xl').modal('show');
          checker_sub_stat(); 
            $.ajax({
                    url:'<?=base_url()?>index.php/pages/ajax_class_submitFile',
                    type: 'post',
                    data:{id:id, class_code:class_code},
                    dataType : "JSON",
                    success: function (data) {
                       var html = '';
                       var sub='';
                        for(i=0; i<data.length; i++){
                            if(data[i].student_grades == '0'){
                                 html +=
                                  '<tr>'+
                                    '<td>'+data[i].student_id+'</td>'+
                                    '<td>'+data[i].fullname+'</td>'+
                                    '<td>'+data[i].cor_sec+'</td>'+
                                    '<td><a title="Click Here to Download" href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" class="btn btn-default"><i class="fas fa-download"></i> '+data[i].file+'</a></td>'+
                                    '<td><a class="btn btn-info">For Checking</a></td>'+
                                    '<td>'+data[i].encoded_date+'</td>'+
                                  '</tr>'
                                ;
                              }
                              else{
                                 html +=
                                  '<tr>'+
                                    '<td>'+data[i].student_id+'</td>'+
                                    '<td>'+data[i].fullname+'</td>'+
                                    '<td>'+data[i].cor_sec+'</td>'+
                                    '<td><a title="Click Here to Download" href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" class="btn btn-default"><i class="fas fa-download"></i> '+data[i].file+'</a></td>'+
                                    '<td><a class="btn btn-success">Graded</a></td>'+
                                    '<td>'+data[i].encoded_date+'</td>'+
                                  '</tr>'
                                ;
                              } 
                          }
                       html += 
                        '<tr style="color:white; border:none; background-image: linear-gradient(to right, #800000, #CC3300); text-align:center;"><td colspan="4">Nothing to Follow!...</td><td colspan="2">Files Submitted: '+data.length+'</td></tr>';
                      $('.sumitted_works').html(html);
                    }
              }); 

        }); 
      $('.class_quiz_shortcut').on('click','.open_act',function (){
          var id = $(this).data('post_id');
          var class_code = $("input[name='class_code']").val();
          var acept = $(this).data('acept');
          $('input[name="acept"]').val(acept);
          $('[name="post_id"]').val(id);
          var html = $(this).data('title');
          $('.activity_title').html(html); 
          $('#modal-xl').modal('show');
          checker_sub_stat(); 

            $.ajax({
                    url:'<?=base_url()?>index.php/pages/ajax_class_submitFile',
                    type: 'post',
                    data:{id:id, class_code:class_code},
                    dataType : "JSON",
                    success: function (data) {
                       var html = '';
                       var sub='';
                        for(i=0; i<data.length; i++){
                             
                             if(data[i].student_grades == '0'){
                                 html +=
                                  '<tr>'+
                                    '<td>'+data[i].student_id+'</td>'+
                                    '<td>'+data[i].fullname+'</td>'+
                                    '<td>'+data[i].cor_sec+'</td>'+
                                    '<td><a title="Click Here to Download" href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" class="btn btn-default"><i class="fas fa-download"></i> '+data[i].file+'</a></td>'+
                                    '<td><a class="btn btn-info">For Checking</a></td>'+
                                    '<td>'+data[i].encoded_date+'</td>'+
                                  '</tr>'
                                ;
                              }
                              else{
                                 html +=
                                  '<tr>'+
                                    '<td>'+data[i].student_id+'</td>'+
                                    '<td>'+data[i].fullname+'</td>'+
                                    '<td>'+data[i].cor_sec+'</td>'+
                                    '<td><a title="Click Here to Download" href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" class="btn btn-default"><i class="fas fa-download"></i> '+data[i].file+'</a></td>'+
                                    '<td><a class="btn btn-success">Graded</a></td>'+
                                    '<td>'+data[i].encoded_date+'</td>'+
                                  '</tr>'
                                ;
                              } 
                        
                          }
                       html += 
                        '<tr style="color:white; border:none; background-image: linear-gradient(to right, #800000, #CC3300); text-align:center;"><td colspan="4">Nothing to Follow!...</td><td colspan="2">Files Submitted: '+data.length+'</td></tr>';
                      $('.sumitted_works').html(html);
                    }
              }); 

        }); 


      $('.class_activity_shortcut').on('click','.open_act',function (){
          var id = $(this).data('post_id');
          var class_code = $("input[name='class_code']").val();
          var acept = $(this).data('acept');
          $('input[name="acept"]').val(acept);
          $('[name="post_id"]').val(id);
          var html = $(this).data('title');
          $('.activity_title').html(html); 
          $('#modal-xl').modal('show');
          checker_sub_stat(); 

            $.ajax({
                    url:'<?=base_url()?>index.php/pages/ajax_class_submitFile',
                    type: 'post',
                    data:{id:id, class_code:class_code},
                    dataType : "JSON",
                    success: function (data) {
                       var html = '';
                       var sub='';
                        for(i=0; i<data.length; i++){
                             if(data[i].student_grades == '0'){
                                 html +=
                                  '<tr>'+
                                    '<td>'+data[i].student_id+'</td>'+
                                    '<td>'+data[i].fullname+'</td>'+
                                    '<td>'+data[i].cor_sec+'</td>'+
                                    '<td><a title="Click Here to Download" href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" class="btn btn-default"><i class="fas fa-download"></i> '+data[i].file+'</a></td>'+
                                    '<td><a class="btn btn-info">For Checking</a></td>'+
                                    '<td>'+data[i].encoded_date+'</td>'+
                                  '</tr>'
                                ;
                              }
                              else{
                                 html +=
                                  '<tr>'+
                                    '<td>'+data[i].student_id+'</td>'+
                                    '<td>'+data[i].fullname+'</td>'+
                                    '<td>'+data[i].cor_sec+'</td>'+
                                    '<td><a title="Click Here to Download" href="<?php echo base_url(); ?>pages/download_file_submit/'+data[i].file+'" class="btn btn-default"><i class="fas fa-download"></i> '+data[i].file+'</a></td>'+
                                    '<td><a class="btn btn-success">Graded</a></td>'+
                                    '<td>'+data[i].encoded_date+'</td>'+
                                  '</tr>'
                                ;
                              }      
                          }
                       html += 
                        '<tr style="color:white; border:none; background-image: linear-gradient(to right, #800000, #CC3300); text-align:center;"><td colspan="4">Nothing to Follow!...</td><td colspan="2">Files Submitted: '+data.length+'</td></tr>';
                      $('.sumitted_works').html(html);
                    }
              }); 

        }); 

          function checker_sub_stat(){
            var acept = $('input[name="acept"]').val();
            //  var title='';
            //       if(acept == '0'){
            //           title =    
            //             '<a href="javascript:void(0)" class="btn btn-info changeDeactive" title="Click Here to Close Submittion"><i class="fas fa-check"></i> Accepting Submit</a> ';
            //       }
            //       else{      
            //           title =     
            //              '<a href="javascript:void(0)" class="btn btn-danger changeActive" title="Click Here to Open Submittion"><i class="fas fa-times"></i> Submittion Closed</a> ';
            //       }
            // title +=
            //   '<a href="javascript:void(0)" class="btn btn-danger hideFromeMe" title="Hide from my shortcut display"><i class="fas fa-times"></i> Hide</a>';
            // $('.toggle_checkbox').html(title);    
          }

          $('.toggle_checkbox').on('click','.hideFromeMe',function (){
          var id = $("input[name='post_id']").val();
            $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_toggle_hide',
              type: 'post',
              data:{id:id},
              dataType : "JSON",
              success: function (data) {
                 ajax_act_ass();
                  $('#modal-xl').modal('hide'); 
              }
            }); 
          }); 

        //  $('.toggle_checkbox').on('click','.changeDeactive',function (){
        //   var id = $("input[name='post_id']").val();
        //     $.ajax({
        //       url:'<?=base_url()?>index.php/pages/ajax_toggle_off',
        //       type: 'post',
        //       data:{id:id},
        //       dataType : "JSON",
        //       success: function (data) {
        //          $('input[name="acept"]').val('1');
        //          checker_sub_stat();
        //          ajax_act_ass(); 
        //       }
        //     }); 
        // }); 
          
        //   $('.toggle_checkbox').on('click','.changeActive',function (){
        //   var id = $("input[name='post_id']").val();
        //   var acept = $('input[name="acept"]').val();
        //     $.ajax({
        //       url:'<?=base_url()?>index.php/pages/ajax_toggle_on',
        //       type: 'post',
        //       data:{id:id},
        //       dataType : "JSON",
        //       success: function (data) {
        //         $('input[name="acept"]').val('0');
        //         checker_sub_stat();
        //         ajax_act_ass(); 
        //       }
        //     }); 
        // }); 
    

        $('.accept_request').click(function(){
          var id = $('[name="student_id_app"]').val();
          var code = $('[name="code_app"]').val(); 
            $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_request_approve',
              type: 'post',
              data:{id:id,code:code},
              dataType : "JSON",
              error: function() {
                alert('Toggle Button Error');
              },
              success: function (data) { 
                swal("Process Success!", "Student Request Approve!", "success");
                $('#approve_option').modal('hide');
                request_join();
              }
            });
        });

      //--- upload qustionnaire
      $('#import_question').on('submit', function(event){
        event.preventDefault();
        $.ajax({
             xhr: function() {
                    var xhr = new window.XMLHttpRequest();         
                    xhr.upload.addEventListener("progress", function(element) {
                        if (element.lengthComputable) {
                            var percentComplete = ((element.loaded / element.total) * 100);
                            $("#file-progress-bar").width(percentComplete + '%');
                            $("#file-progress-bar").html(percentComplete+'%');
                            $('#uploaded_file').html('<p style="color:red;">Uploading...<i class="fa fa-spin fa-refresh"></i></p>');
                        }
                    }, false);
                    return xhr;
                },
             url:"<?php echo base_url(); ?>pages/qustionnaire_upload",
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
                $('#uploaded_file').html('<p style="color:#28A74B;">Questionnaire uploaded successfully!</p>');
                ajax_act_ass();
             }
        })  
      });  
      //--- end here
    //--- open modal
    $('.upl_modal_question').click(function(event){
      var profile = $('input[name="profile"]').val();
      $('input[name="profile_quiz"]').val(profile);
      $('#uploaded_file').html('');
      $("#file-progress-bar").width(0);
      $("#file-progress-bar").html('');
      $("input[name='title_name']").val('');
      $("input[name='reservationdate']").val('');
      $('input[name="file"]').val('');
      $('#upload_question').modal('show');
    });
    //--- end here

    });
  </script>





