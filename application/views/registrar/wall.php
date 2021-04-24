<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>pages/reg/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg/file" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                RESOURCES
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/stud_info" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                STUDENDTS
              </p>
            </a>       
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/gal" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                BULLETIN PAGE
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg/stud" class="nav-link">
              <i class="fas fa-list nav-icon"></i>
                <p>LIST</p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/class" class="nav-link">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                ADMIN ACCOUNTS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/cal" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                CALENDAR
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
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
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
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
                <!-- /.table-responsive -->
              </div>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
       
        

<input type="hidden" name="id">


 <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white;" class="m-0">Account Profile</h1>
            
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update Informations</a></li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                 
                <?php
                  $id = $this->session->all_userdata();
                  if(isset($id['super_session'])){
                    $user_id = $id['super_session'];
                ?>
                  <div class="active tab-pane" id="timeline">
                    <?php 
                      
                        $table="tbl_account";
                        $field="id";
                        if(isset($id['super_session'])){
                          $data=$id['super_session'];
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
            </div>
          </div>

        <?php } ?>
         

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
                    }
              }
            });
        }
      

      $('.update_profile').click(function(){
            var id = $(this).data('id');
            $('[name="id_user_profile"]').val(id);
            $('#updatePic').modal('show'); 
        });
    
  });
</script>