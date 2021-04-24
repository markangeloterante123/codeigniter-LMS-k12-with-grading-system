<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />


<input type="hidden" name="class_code" value="<?php echo $class_code; ?>">

 <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white;" class="m-0"><?php echo $sub_code.'-'.$section.''; ?> Class</h1>
           
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
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">WALL</a></li>
                  <li class="nav-item"><a class="nav-link" href="#accFiles" data-toggle="tab">RESOURCESS</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">ANNOUNCEMENT</a></li>
                  <li class="nav-item"><a class="nav-link show_id" href="#chatbox" data-toggle="tab">CHATBOX</a></li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                   
                  <div class="active tab-pane" id="acadCalendar">
                      <div class="card">
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
                          <strong><i class="fas fa-user mr-1"></i> Class Instructor</strong>

                          <p class="text-muted">
                            Instructor: <?php echo $name; ?>
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
                          <h3 class="card-title btn btn-block btn-info"><?php echo $sub_code.'-['.$section.']'; ?> Class Wall</h3>

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
                            <div class="card-header">
                              <!-- <img style="height: 8vh; width: 8vh;" class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/img/<?php echo $profile; ?>" alt="user image">
                              <span class="username">
                                <a href="#"><?php echo $posted; ?></a>
                              </span> -->
                              <span class="description"><i class="fas fa-calendar-alt"></i> Posted: <?php echo $date; ?></span>
                             <!--  <div class="card-tools">
                                  <a href="<?php echo base_url(); ?>pages/delete_post/<?php echo $post_id; ?>" class="btn btn-danger"><i class="fas fa-times"></i></a>
                              </div> -->
                            <h5 style="margin-top: 50px;"><?php echo $title; ?></h5>
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
                                 
                              <?php endif; ?>                       
                              
                              <?php } ?> 
                            </div>
                           <!--  <p >
                              <a href="javascript:void(0)" data-id="<?php echo $post_id; ?>" class="link-black text-sm comment"><i class="far fa-comments mr-1"></i> Comments</a>
                            </p> -->
                          
                           </div>
                         </div>

                       <?php } ?>

                  </div>
                  <!-- /.tab-pane -->

                   <style type="text/css">
                       .note-group-select-from-files {
                          display: none;
                        }
                    </style>
                  <div class="tab-pane" id="settings">
                      <div class="card">
                        <div class="card-header border-transparent">
                          <h3 class="card-title">Create Post</h3>
                        </div>
                    
                        <div class="card-body">
                          <form action="<?php echo base_url(); ?>pages/upload_post" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="name_post" value="<?php echo $admin; ?>">
                          <input type="hidden" name="profile" value="<?php echo $adminProfile;?>">
                          <input type="hidden" name="user_id" value="<?php echo $class_code;?>">
                          <div class="form-group">
                            <input class="form-control" name="subject" placeholder="Subject:">
                          </div>
                          <div class="form-group">
                            <select name="type" class="form-control">
                              <option value='1'>Post Class Announcement</option>
                              <option value='2'>Class Activity</option>
                              <option value='3'>Modules / Resources</option>
                              <option value='4'>Class Assignment</option>
                              <option value='5'>Quizzes</option>
                              <option value='6'>Exam</option>
                              <option value='7'>Project</option>
                            </select>
                          </div>
                          <div class="form-group">
                              <textarea  rows="18" id="compose-textarea" name="textarea_post" class="form-control" style="height: 250px;">
                               
                              </textarea>
                          </div>
                            <div class="form-group">
                              <div class="btn btn-default">
                                <input type="file" id="files" name="files[]" multiple>
                              </div>
                            </div>
                        
                        </div>

                        <div class="card-footer">
                          <div class="float-right">
                            <input type="submit" class="btn btn-success" name="submit" value="Upload">
                          </div>
                        </div>
                        </form>
                      </div>

                  </div>

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
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

        
         

       
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
                      <div  id="file-progress-bars" class="progress-bar"></div>
                   </div>
                 </div>
                </div>
                <div class="row align-items-center">  
                  <div class="col">
                    <div id="uploaded_files"></div>
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
              <div class="btn-group">
                <a class="btn btn-flat btn-default dropdown-toggle dropdown-hover" data-toggle="dropdown"><i class="fas fa-share-alt"></i> Share To</a>
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item share_all"  href="javascript:void(0)"><i class="fas fa-share"></i> All</a>
                  <a class="dropdown-item share_class"  href="javascript:void(0)"><i class="fas fa-share"></i> My Class</a>  
                </div>
              </div>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

<script>
    $(document).ready(function(){
        var id = $('input[name="user_id"]').val();
        var calendar = $('#calendar').fullCalendar({
            editable:true,
            header:{
                left:'prev,next',
                center:'title',
                right:'month,agendaWeek'
            },
            events:"<?php echo base_url(); ?>pages/class_calendar/"+id+"",
            selectable:true,
            selectHelper:true,
            select:function(start, end, allDay)
            {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                var id = $('input[name="user_id"]').val();
                var title = prompt("Enter Event Title From:" + start );
                if(title)
                {
                    
                    $.ajax({
                        url:"<?php echo base_url(); ?>pages/event_insert",
                        type:"POST",
                        data:{id:id, title:title, start:start, end:end},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            swal("Success","Added Successfully","success");
                        }
                    })
                }
            },
            editable:true,
            eventResize:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

                var title = event.title;

                var id = event.id;

                $.ajax({
                    url:"<?php echo base_url(); ?>pages/event_update",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        swal("Success","Event Update","success");
                    }
                })
            },
            eventDrop:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                //alert(start);
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                //alert(end);
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"<?php echo base_url(); ?>pages/event_update",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        swal("Success","Event Updated","success");
                    }
                })
            },
            eventClick:function(event)
            {
                if(confirm("Are you sure you want to remove it?"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"<?php echo base_url(); ?>pages/event_delete",
                        type:"POST",
                        data:{id:id},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            swal("Success","Event Removed","success");
                        }
                    })
                }
            }
        });
    });
             
    </script>
      


<script type="text/javascript">
    $(document).ready(function (){

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

     setInterval(function(){
        ajax_comment_post();
         chat_display();
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
        var id = $('input[name="user_id"]').val();
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
                            $("#file-progress-bars").width(percentComplete + '%');
                            $("#file-progress-bars").html(percentComplete+'%');
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
                  $('#uploaded_files').html('<p style="color:red;">Error un-successfully upload</p>');
                     },
               success:function(data){
                  $('#uploaded_files').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');
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
     //--- share to my class
     $('.share_class').click(function(){
        var id = $('input[name="userid"]').val();
        $.ajax({
          url:'<?=base_url()?>index.php/pages/ajax_share_class',
          type:'post',
          data:{id:id},
          dataType:"JSON",
          success: function(data){
            var html ='';
            for(i=0; i<data.length; i++){
              html +=
              '<tr>'+
              '<td>'+(i+1)+'</td>'+
              '<td>'+data[i].class_subject+'</td>'+
              '<td><img style="height: 10vh; width: 10vh;" class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/background/'+data[i].courseBackground+'" alt="user image"></td>'+
              '<td>'+data[i].section_yr+'</td>'+
              '<td><a href="javascript:void(0)" class="btn btn-info confirm_share_folder" data-id="'+data[i].class_code+'"><i class="fas fa-share"></i> Share File</a></td>'+
              '</tr>';
            }
            $('.share_person').html(html);
          }
        });
     });
     //--- end here
     //--- share all click
     $('.share_all').click(function(){
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
      share_users();
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
          



      