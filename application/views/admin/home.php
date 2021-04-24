<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/adm/home" class="nav-link active">
              <i class="nav-icon fas fa-graduation-cap"></i> 
              <p>
                MY PROFILE
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/adm2/clas" class="nav-link">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                MY CLASS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/adm2/gal" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                BULLETIN PAGE
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/adm/upl" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                FILES
              </p>
            </a>
          </li>
    
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/adm2/act" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                CALENDAR
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<input type="hidden" name="id">


 <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white;" class="m-0">Profile</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li style="color:white;" class="breadcrumb-item">Home</li>
              <li style="color:white;" class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  
   <section class="content">
      <div class="container-fluid">
        <div class="row displayAllClass">

          <!--lis of my class--->
        </div>
       <!--copy up here-->
       
          <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update Profile</a></li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                <?php
                  $id = $this->session->all_userdata();
                  if(isset($id['admin_session'])){
                    $user_id = $id['admin_session'];
                ?>
                  <div class="active tab-pane" id="timeline">
                    <?php 
                      
                        $table="tbl_account";
                        $field="id";
                        if(isset($id['admin_session'])){
                          $data=$id['admin_session'];
                          foreach ($this->load->model_users->data($data,$field,$table) as $values) { 
                           $name = $values->fullname;
                           $profile = $values->profile;
                           $nickname = $values->nickname;
                           $email = $values->email;
                           $phone = $values->contact;
                           $nick = $values->nickname;
                        
                    ?>

                      <div style="background: maroon;" class="card card-primary card-outline">
                        <div class="card-body box-profile">
                          <div class="text-center">
                            <img style="width: 350px; height: 350px;" class="profile-user-img img-fluid img-circle"
                                 src="<?php echo base_url(); ?>assets/img/<?php echo $profile; ?>"
                                 alt="User profile picture">
                          </div>

                          <h3 style="color:white;" class=" text-center"><?php echo $name; ?></h3>
                          <p style="color:white;" class=" text-center"><a href="javascript:void(0)" data-id="<?php echo $user_id; ?>" class="btn btn-info update_profile">Update Profile</a></p>
                        </div>
                      </div>
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">About Me</h3>
                        </div>
                        <div class="card-body">
                          <strong><i class="fas fa-fax"></i> Email Contact</strong>

                          <p class="text-muted">
                            <?php echo $email; ?>
                          </p>

                          <hr>

                          <strong><i class="fas fa-phone-square mr-1"></i> Contact No.</strong>

                          <p class="text-muted"><?php echo $phone; ?></p>

                          <hr>

                          <strong><i class="fas fa-user mr-1"></i> Nickname</strong>

                          <p class="text-muted">
                            <?php echo $nick; ?>
                          </p>

                          <hr>

                          <!-- <strong><i class="far fa-image"></i> My Schedule</strong>

                          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p> -->
                        </div>
                      </div>
                    <?php }} ?>

                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form action="<?php echo base_url(); ?>pages/update" method="post" class="form-horizontal">
                      <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name_update" id="name" placeholder="Name" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email_update" id="email" placeholder="Email" required>
                        </div>
                      </div>
                       <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Contact No.</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="contact_update"  placeholder="Contact No." required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Nick Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nick_update"  id="nick" placeholder="Name" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="user_update"  id="nick" placeholder="Name" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="pass_update" id="password" placeholder="New Password" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <input type="submit" class="btn btn-info" value="Update">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>>
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

      <div  class="modal fade bd-example-modal-sm" id="updatePic" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="modal-content">
                <div class="modal-header">            
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <form class="profile-username text-center" method="post" action="<?php echo base_url(); ?>pages/uploadProfile" enctype="multipart/form-data" id="upload_form">  
                      <input type="hidden" name="id_user_profile">
                      <div class="modal-body">
                            <img style="border-radius: 50%; border:solid 2px white;  height: 90%; width: 100%;" id="blah" src="#" alt="Upload New Profile" />
                            <input style="font-size: 11px" type="file" id="image_file" class="profile-username text-center" name="image_file"/>
                      </div>
                      <div class="modal-footer">
                        <input type="submit" class="btn btn-info" id="upload" name="upload" value="Update">
                      </div> 
                    </form>   
            </div>
          </div>
        </div>
      
  <script type="text/javascript">
  $(document).ready(function () { 
    //load ng pic
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }
    $("#image_file").change(function() {
      readURL(this);
    });
  //load ng data ng student sa grades
  });
</script>

  <script type="text/javascript">
    $(document).ready(function (){
      show_info();

      function show_info(){
            var id = $("input[name='user_id']").val();
            $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_info_load',
              data:{id:id},
              type: 'POST',
              dataType : "JSON",
              error: function() {
                      alert('Show info Error');
                   },
              success: function (data) {          
                  for(i=0; i<data.length; i++){
                      $('[name="name_update"]').val(data[i].fullname);
                      $('[name="email_update"]').val(data[i].email);
                      $('[name="nick_update"]').val(data[i].nickname);
                      $('[name="user_update"]').val(data[i].username);
                      $('[name="contact_update"]').val(data[i].contact);
                      $('[name="pass_update"]').val(data[i].password);
                    }
              }
            });
        }
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
     
      }, 2000) 

  });
</script>


          



      