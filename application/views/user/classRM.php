
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
<input type="hidden" name="id">
<input type="hidden" name="class_code" value="<?php echo $class_code; ?>">
      <style type="text/css">
         .note-group-select-from-files {
            display: none;
          }
       </style>
 <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white;" class="m-0"><?php echo $sub_code.'-['.$section.']'; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li style="color:white;" class="breadcrumb-item">Home</li>
              <li style="color:white;" class="breadcrumb-item active">Class Page</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  
   <section class="content">
      <div class="container-fluid">
        <!--copy up here-->
       
          <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#acadCalendar" data-toggle="tab">CLASS CALENDAR</a></li>
                  <li class="nav-item"><a class="nav-link" href="#accFiles" data-toggle="tab">RESOURCESS</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">WALL</a></li>
                  <li class="nav-item"><a class="nav-link" href="#chatbox" data-toggle="tab">CHATBOX</a></li>
                  <li class="nav-item"><a class="nav-link" href="#activity_submitted" data-toggle="tab">MY RECORDS</a></li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="acadCalendar">
                      <div class="card">
                       <!--  <div class="card-header border-transparent">
                          <h3 class="card-title">CLASS CALENDAR</h3>
                        </div> -->
                          <div class="card-body p-0">
                            <!-- THE CALENDAR -->
                            <div id="calendar"></div>
                          </div>    
                      </div>
                  </div>
                  <div class="tab-pane" id="accFiles">
                      <div class="card">
                          <div class="card-header">
                           <div class="btn-group">
                              <button type="button" class="btn btn-default btn-flat folder_open"> <i class="fas fa-file"></i> CLASS RESOURCESS</button>
                            </button>
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
                  <div class="tab-pane" id="timeline">
                    <?php 
                        $table="tbl_class";
                        $field="class_code";
                        $data=$class_code;
                        foreach ($this->load->model_users->data($data,$field,$table) as $values) { 
                           $name = $values->admin;
                           $sec = $values->section_yr;
                           $no = $values->no_student;
                           $sched=$values->class_sched;
                           $profile=$values->courseBackground;
                           $admin = $values->admin;
                           $adminProfile = $values->adminProfile;

                    ?>

                      <div style="background: maroon;" class="card card-primary card-outline">
                        <div class="card-body box-profile">
                          <div class="text-center">
                            <img style="width: 350px; height: 350px;" class="profile-user-img img-fluid img-circle"
                                 src="<?php echo base_url(); ?>assets/background/<?php echo $profile; ?>"
                                 alt="User profile picture">
                          </div>
                        </div>
                      </div>
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title"><?php echo $sub_code.'-['.$section.']'; ?></h3>
                        </div>
                        <div class="card-body">
                          <strong><i class="fas fa-user mr-1"></i> Class Administrator</strong>

                          <p class="text-muted">
                            Professor: <?php echo $name; ?>
                          </p>

                          <hr>

                          <strong><i class="fas fa-laptop mr-1"></i> Class and Section</strong>

                          <p class="text-muted"><?php echo $sec; ?></p>

                          <hr>

                          <strong><i class="fas fa-users mr-1"></i> No. of Student</strong>

                          <p class="text-muted">
                            No. <?php echo $no; ?>
                          </p>

                          <hr>
                          <strong><i class="fas fa-calendar mr-1"></i> Class Schedules</strong>

                          <p class="text-muted">
                            <?php echo $sched; ?>
                          </p>

                          <hr>

                        </div>
                      </div>

                    
                        <div class="card-header">
                          <h3 class="card-title btn btn-block btn-warning"><?php echo $sub_code.'-['.$section.']'; ?> Class Wall</h3>

                        </div>
                        <br>
                        <br>
                        <?php 
                      
                        $table="tbl_lms_post";
                        $field="user_id";
                        $data=$class_code;
                        $con ='1';
                          foreach ($this->load->model_users->data5($data,$field,$table,$con) as $value) { 
                           $profile = $value->profile;
                           $posted = $value->posted;
                           $date = $value->date;
                           $title= $value->title;
                           $body=$value->body;
                           $post_id = $value->post_id;
                           $ids = $value->id;
                           $comment = $value->comment;
                           $post_id = $value->post_id;
                         ?>

                          <div class="post">
                            <div class="user-block">
                              <!-- <img class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/img/<?php echo $profile; ?>" alt="user image">
                              <span class="username">
                                <a href="#"><?php echo $posted; ?></a>
                              </span>
                              <span class="description"><?php echo $date; ?></span> -->

                            </div>
                              <h6> <i class="fas fa-calendar-alt"></i> <?php echo $date; ?></h6>
                              <h5><?php echo $title; ?></h5>
                              <p><?php echo $body; ?></p>

                            <div class="row mb-3 " >
                              <?php 
                                $data = $post_id;
                                $field='post_id';
                                $table='tbl_lms_file';
                               
                                foreach ($this->load->model_users->data($data,$field,$table) as $value) {
                                  $file = $value->file;
                                  $file_ext = $value->file_ext;
                                  $id = $value->id;
                              ?>

                              <?php if($file_ext == 'png' || $file_ext == 'jpg'|| $file_ext == 'jpeg' || $file_ext == 'gif' ) : ?>
                                  <div style="margin-top: 10px;" class="col-sm-6">
                                   <a href="javascript:void(0)" class="view" data-id_image="<?php echo $id; ?>" ><img style="border:solid 1px black; height: 250px; width: 380px;" class="img-fluid" src="<?php echo base_url(); ?>assets/uploadPic/<?php echo $file; ?>" alt="Photo">
                                   </a>
                                  </div>
                            
                              <?php elseif($file_ext == 'avi' || $file_ext == 'mp4' ) : ?>
                                  <video class="img-responsive" muted="" controls="" width="640" height="480">
                                    <source type="video/mp4" src="<?php echo base_url();?>assets/uploadPic/<?php echo $file; ?>">
                                  </video>
                               <?php elseif($file_ext == 'pdf' || $file_ext == 'doc' || $file_ext == 'docx' || $file_ext == 'xls' || $file_ext == 'xlsx' || $file_ext == 'pptx') : ?>   
                                    <a href="<?php echo base_url(); ?>pages/download/<?php echo $file; ?>"><i class="nav-icon fas fa-book"></i> <?php echo $file; ?></a>
                                    <hr>
                              <?php endif; ?>                       
                              
                              <?php } ?> 
                            </div>
                            <!-- <p >
                              <a href="javascript:void(0)" data-id="<?php echo $post_id; ?>" class="link-black text-sm comment"><i class="far fa-comments mr-1"></i> Comments</a>
                            </p> --> 
                          </div>

                       <?php } ?>

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="chatbox">
                      <div class="card">
                          <div style="background-image: linear-gradient(to bottom, #FFCC99, #FFFFCC);" class="card direct-chat direct-chat-primary">
                          <div style="background-image: linear-gradient(to bottom, maroon, #FFFFCC); " class="card-header">
                              <button style="color:black;" type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                <i class="fas fa-comments"></i>
                                Class Chatbox
                              </button>
                          </div>
                          <div class="card-body">
                            <div style="height: 65vh;" class="direct-chat-messages message_display">

                            </div>
                          </div>
                          <div class="card-footer">
                              <div class="input-group">
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-append">
                                  <button type="button" class="btn btn-primary sent_message">Send</button>
                                </span>
                              </div>
                          </div>
                        </div>
                        </div>
                  </div>

                  <div class="tab-pane" id="activity_submitted">
                   
                        <div class="card card-info card-tabs">
                          <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">ACTIVITY</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">ASSIGNMENT</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">QUIZ</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">EXAM</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-project-tab" data-toggle="pill" href="#custom-tabs-one-project" role="tab" aria-controls="custom-tabs-one-project" aria-selected="false">PROJECT</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                               
                                  <div class="table-responsive">
                                    <table class="table m-0">
                                      <thead>
                                      <tr>
                                        <th>ACTIVITY#</th>
                                      <!--   <th>File</th> -->
                                        <th>SCORE / TOTAL</th>
                                        <th> DATE</th>
                                        <th>STATUS</th>
                                      </tr>
                                      </thead>
                                      <tbody class="activity_pages">
                                      
                                      </tbody>
                                    </table>
                                  </div>
                                
                              </div>
                              <div class="tab-pane fade table-responsive" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                 <div class="table-responsive">
                                    <table class="table m-0">
                                      <thead>
                                      <tr>
                                        <th>ASSIGNMENT#</th>
                                       <!--  <th>File</th> -->
                                        <th>SCORE / TOTAL</th>
                                        <th> DATE</th>
                                        <th>STATUS</th>
                                      </tr>
                                      </thead>
                                      <tbody class="assignment_pages">
                                      
                                      </tbody>
                                    </table>
                                  </div>
                              </div>
                              <div class="tab-pane fade table-responsive" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                                 <table class="table m-0">
                                      <thead>
                                      <tr>
                                        <th>QUIZ#</th>
                                       <!--  <th>File</th> -->
                                        <th>SCORE / TOTAL</th>
                                        <th> DATE</th>
                                        <th>STATUS</th>
                                      </tr>
                                      </thead>
                                      <tbody class="quiz_pages">
                                      
                                      </tbody>
                                    </table>
                              </div>
                              <div class="tab-pane fade table-responsive" id="custom-tabs-one-project" role="tabpanel" aria-labelledby="custom-tabs-one-project-tab">
                                  <table class="table m-0">
                                      <thead>
                                      <tr>
                                        <th>PROJECT#</th>
                                        <!--  <th>File</th> -->
                                        <th>SCORE / TOTAL</th>
                                        <th> DATE</th>
                                        <th>STATUS</th>
                                      </tr>
                                      </thead>
                                      <tbody class="project_pages">
                                      
                                      </tbody>
                                    </table>
                              </div>
                            
                              <div class="tab-pane fade table-responsive" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                                 <table class="table m-0">
                                      <thead>
                                      <tr>
                                        <th>EXAM#</th>
                                        <!--  <th>File</th> -->
                                        <th>SCORE / TOTAL</th>
                                        <th>DATE</th>
                                        <th>STATUS</th>
                                      </tr>
                                      </thead>
                                      <tbody class="exam_pages">
                                      
                                      </tbody>
                                    </table>
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
                        </div>
                   
                  </div>      
                </div>
              </div>
            </div>
          </div>

        <?php } ?>
          
      <div class="modal fade" id="image_show">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div style="color:white; background-image: linear-gradient(to bottom right, #800000, #CC3300); " class="modal-header">
              <input type="hidden" name="post_id_com">
              <h3 class="title"></h3>

              <button type="button" class="btn btn-success close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
         
            <div style="background: #f0f0f0;" class="modal-body image_display">
              
            </div>
          </div>
        </div>
      </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>


<script>
    $(document).ready(function(){
        var id = $('input[name="class_code"]').val();
        var calendar = $('#calendar').fullCalendar({
            editable:true,
            header:{
                left:'prev,next',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:"<?php echo base_url(); ?>pages/class_calendar/"+id+"",
        });
    });
             
    </script>


  <script type="text/javascript">
    $(document).ready(function (){
     stud_records();

    
      function stud_records(){
            var id = $("input[name='class_code']").val();
            var stud =$('input[name="user_id"]').val();
            $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_stud_actRec',
              data:{id:id, stud:stud },
              type: 'POST',
              dataType : "JSON",
              success: function (data) {
                var act = '';
                var ass = '';
                var qui = '';
                var pro = '';
                var exa = '';
                  for(i=0; i<data.length; i++){
                      if(data[i].type == '2'){
                          act+=
                          '<tr>'+
                              '<td>'+data[i].title+'</td>'+
                              '<td>'+data[i].raw_score+' / '+data[i].total+'</td>'+
                              '<td>'+data[i].encoded_date+'</td>'+
                              '<td><a class="btn btn-info">Submitted</a></td>'+
                            '</tr>';
                      }
                      else if(data[i].type == '4'){
                          ass+=
                          '<tr>'+
                              '<td>'+data[i].title+'</td>'+
                              '<td>'+data[i].raw_score+' / '+data[i].total+'</td>'+
                              '<td>'+data[i].encoded_date+'</td>'+
                              '<td><a class="btn btn-info">Submitted</a></td>'+
                            '</tr>';
                      }
                       else if(data[i].type == '5'){
                          qui+=
                          '<tr>'+
                              '<td>'+data[i].title+'</td>'+
                              '<td>'+data[i].raw_score+' / '+data[i].total+'</td>'+
                              '<td>'+data[i].encoded_date+'</td>'+
                              '<td><a class="btn btn-info">Submitted</a></td>'+
                            '</tr>';
                      }
                      else if(data[i].type == '6'){
                          exa+=
                          '<tr>'+
                              '<td>'+data[i].title+'</td>'+
                              '<td>'+data[i].raw_score+' / '+data[i].total+'</td>'+
                              '<td>'+data[i].encoded_date+'</td>'+
                              '<td><a class="btn btn-info">Submitted</a></td>'+
                            '</tr>';
                      }
                      else if(data[i].type == '7'){
                          pro+=
                          '<tr>'+
                              '<td>'+data[i].title+'</td>'+
                              '<td>'+data[i].raw_score+' / '+data[i].total+'</td>'+
                              '<td>'+data[i].encoded_date+'</td>'+
                              '<td><a class="btn btn-info">Submitted</a></td>'+
                            '</tr>';
                      }

                    }
                $('.activity_pages').html(act);
                $('.assignment_pages').html(ass);
                $('.quiz_pages').html(qui);
                $('.project_pages').html(pro);
                $('.exam_pages').html(exa);
              }
            });
        }

    $('.activity_pages').on('click','.delete_send',function (){
        var id = $(this).data('id');
        var stud = $(this).data('stud');
        $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_del_send',
              data:{id:id,stud:stud},
              type: 'POST',
              dataType : "JSON",
              success: function (data) {
                stud_records();
              }
            });

       });
    $('.exam_pages').on('click','.delete_send',function (){
        var id = $(this).data('id');
        var stud = $(this).data('stud');
        $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_del_send',
              data:{id:id,stud:stud},
              type: 'POST',
              dataType : "JSON",
              success: function (data) {
                stud_records();
              }
            });

       });
      $('.assignment_pages').on('click','.delete_send',function (){
        var id = $(this).data('id');
        var stud = $(this).data('stud');
        $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_del_send',
              data:{id:id,stud:stud},
              type: 'POST',
              dataType : "JSON",
              success: function (data) {
                stud_records();
              }
            });

       });
       $('.quiz_pages').on('click','.delete_send',function (){
        var id = $(this).data('id');
        var stud = $(this).data('stud');
        $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_del_send',
              data:{id:id,stud:stud},
              type: 'POST',
              dataType : "JSON",
              success: function (data) {
                stud_records();
              }
            });

       });
       $('.project_pages').on('click','.delete_send',function (){
        var id = $(this).data('id');
        var stud = $(this).data('stud');
        $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_del_send',
              data:{id:id,stud:stud},
              type: 'POST',
              dataType : "JSON",
              success: function (data) {
                stud_records();
              }
            });

       });

      $('.comment').click(function(){
            var id = $(this).data('id');
            $('[name="post_id_com"]').val(id);
            $('#image_show').modal('show'); 
            var html = '<i class="far fa-comments mr-1"></i> Comments';
            $('.title').html(html);
            ajax_comment_post();
            var pages=''
              pages +=
              '<div  class="box box-success">'+
                  '<div class="box-header">'+
                    '<i class="fa fa-comments-o"></i>'+
                  '</div>'+
                  '<div class="box-body chat" id="chat-box">'+
                      '<div class="ajax_comment">'+
                      
                      '</div>'+
                      '<a class="text-danger"><hr></a>'+
                  '</div>'+
                  '<br>'+
                  '<br>'+
                  
                  '<div class="box-footer">'+
                    '<div class="input-group">'+
                      '<input class="form-control" name="message_post" id="message" placeholder="Type message...">'+
                      '<div class="input-group-btn">'+
                        '<a  style=" background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);"  href="javascript:void(0)" class="btn btn-warning sent_comment">Send Comment</a>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                '</div>';
              $('.image_display').html(pages); 

        });

      function ajax_comment_post(){
            var id = $("input[name='post_id_com']").val();
            $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_comment_load',
              data:{id:id},
              type: 'POST',
              dataType : "JSON",
              error: function() {
                      alert('Report Error Trace!');
                   },
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                      html +=
                      '<br>'+
                      '<div  class="user-block">'+
                        '<img class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="user image">'+
                        '<span class="username">'+
                          '<a >'+data[i].name+'</a>'+
                        '</span>'+
                        '<span style=" font-size:16px;" class="description"><a class="text-success">'+data[i].date+'</a>: '+data[i].comment+'</span>'+
                      '</div>'+
                      '<br>'+
                      '<br>'
                      ;
                    }

                $('.ajax_comment').html(html);

              }
            });
        }

        $('.image_display').on('click','.sent_comment',function (){
          var id = $("input[name='post_id_com']").val();
          var message = $("input[name='message_post']").val();
          var name = $("input[name='name']").val();
          var profile = $("input[name='profile']").val();
          var user_id = $("input[name='user_id']").val();
          // alert(user_id);
            $.ajax({
                    url:'<?=base_url()?>index.php/pages/ajax_sent_comment',
                    type: 'post',
                    data:{id:id, message:message, name:name, profile:profile, user_id:user_id},
                    dataType : "JSON",
                    error: function() {
                            alert('Comment errror');
                         },
                    success: function (data) {
                      $('[name="message_post"]').val("");
                      ajax_comment_post();
                    }
              }); 
        }); 


     $('.view').click(function(){
            var id = $(this).data('id_image');
            $('#image_show').modal('show'); 
            $('.title').html("");
              $.ajax({
                    url:'<?=base_url()?>index.php/pages/ajax_image',
                    type: 'post',
                    data:{id:id},
                    dataType : "JSON",
                    error: function() {
                            alert('Image Load Failed');
                         },
                    success: function (data) {
                        var html = '';
                        for(i=0; i<data.length; i++){
                              html += 
                              '<img style="border:solid 1px black; height: 450px; width: 100%;" class="img-fluid" src="<?php echo base_url(); ?>assets/uploadPic/'+data[i].file+'" alt="Photo">'
                               ;
                            }
                        $('.image_display').html(html);
                    }
              }); 
        });
      $('.update_profile').click(function(){
            var id = $(this).data('id');
            $('[name="id_user_profile"]').val(id);
            $('#updatePic').modal('show'); 
        });
      function chat_display(){
        var class_id = $('input[name="class_code"]').val();
        var user_id = $('input[name="userid"]').val();
            $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_chat_display',
              type: 'POST',
              data:{class_id:class_id, user_id:user_id},
              dataType : "JSON",
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                      if(data[i].sent_id == user_id){
                          html+=
                            '<div class="direct-chat-msg right">'+
                                '<div class="direct-chat-infos clearfix">'+
                                  '<span class="direct-chat-name float-right">'+data[i].nickname+'</span>'+
                                  '<span class="direct-chat-timestamp float-left">'+data[i].date+'</span>'+
                                '</div>'+
                                '<img class="direct-chat-img" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="message user image">'+
                                '<div class="direct-chat-text">'+data[i].message+'</div>'+
                              '</div>';
                        }
                      else{
                          html+=
                              '<div class="direct-chat-msg">'+
                                '<div class="direct-chat-infos clearfix">'+
                                  '<span class="direct-chat-name float-left">'+data[i].nickname+'</span>'+
                                  '<span class="direct-chat-timestamp float-right">'+data[i].date+'</span>'+
                                '</div>'+
                                '<img class="direct-chat-img" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="message user image">'+
                                '<div class="direct-chat-text">'+data[i].message+'</div>'+
                              '</div>';
                        }
                  }
                $('.message_display').html(html);
                
              }
            });
      }
      $('.sent_message').click(function(){
        var class_id = $('input[name="class_code"]').val();
        var user_id = $('input[name="userid"]').val();
        var message = $('input[name="message"]').val();
          $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_sent_msg',
              type: 'POST',
              data:{class_id:class_id, user_id:user_id, message:message},
              dataType : "JSON",
              success: function (data) {
                $('input[name="message"]').val('');
                $(".message_display").stop().animate({ scrollTop: $(".message_display")[0].scrollHeight}, 1000);
              }
            });
      });


     setInterval(function(){
        ajax_comment_post();
         chat_display();
         stud_records();
      }, 2000) 

  });
</script>


<!-- para sa folder to lahat -->
<!--para sa Folder Functions po-->
<script type="text/javascript">
  $(document).ready(function () {
      user_id();
      //--- user id geneates
      function user_id(){
        $('.list_of_files').html('');
        var id = $('input[name="class_code"]').val();
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
                        '<a class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown"></a>'+
                          '<div class="dropdown-menu" role="menu">'+
                            '<a class="dropdown-item folder_open" href="javascript:void(0)" data-back="'+data[i].location_code+'" data-names="'+data[i].folder_name+'" data-folder="'+data[i].folder_code+'" ><i class="fas fa-folder-open"></i> Open '+data[i].folder_name+'</a>'+
                          '</div>'+
                        '</div> ';
                    }
                  $('.list_of_folder').html(html);
                }
          });
      }
      //--- end here
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
      //--- folder_open back nag subra ang back
      $('.folder_open').click(function(){
        user_id();
      });
      //--- end here
  });
</script>



      