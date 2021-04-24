
 
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
        <a class="dropdown-item" ><img style="width: 25vh; height: 25vh;" src="<?php echo base_url(); ?>assets/img/<?php echo $profile; ?>" class="brand-image img-circle elevation-3"></a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>pages/adm/home"><i class="nav-icon fas fa-graduation-cap"></i> MY PROFILE</a>
        <a class="dropdown-item" onclick="userout()"><i class="fas fa-power-off"></i> LOG OUT</a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">

      <input type="hidden" name="name" value="<?php echo $name; ?>">  
      <input type="hidden" name="userid" value="<?php echo $id ?>"> 
      <input type="hidden" name="profile" value="<?php echo $profile; ?>">
      <input type="hidden" name="fullname" value="<?php echo $fullname; ?>">
      <input type="hidden" name="time_online" >  

      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img style="height: 6.5vh; width: 6.5vh;" src="<?php echo base_url(); ?>assets/img/<?php echo $profile; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info active">
          <h5 style="color:white;" class="d-block"><?php echo $name; ?></h5>
        </div>
      </div> -->
          <?php } }?>
          
<?php
  }
  ?>

  <!--modals here-->


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



  <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
        
        function userout(){
            swal({
              title: "Log-Out",
              text: "Are you sure you want to end up your session?",
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
                swal({
                      title: "Logging Out!",
                      text: "User signing out!",
                      type: "success",
                      showCancelButton: false,
                      confirmButtonColor: "#8abb6f",
                      confirmButtonText: "Ok",
                      closeOnConfirm: false
                    },
                    function(){
                      window.location.href="<?php echo base_url(); ?>pages/logout";
                    });
              } else {
                swal("Cancelled", "Continue your session User!", "error");
              }
            }); 
        }
</script>