
 
<?php
  $id = $this->session->all_userdata();
  if(isset($id['user_session'])){
?>


  <aside  style="background-image: linear-gradient(to bottom right, #800000, #CC3300); " class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Sidebar -->
     <?php
          $table="tbl_account";
          $field="id";
          if(isset($id['user_session'])){
          $data=$id['user_session'];
          foreach ($this->load->model_users->data($data,$field,$table) as $values) { 
           $name = $values->nickname;
           $fullname = $values->fullname;
           $profile = $values->profile;
           $id = $values->id;
           $stud_id = $values->student_id;
           $update = $values->up_date;
          ?>

    <a style="background: #800000;" href="#" class="dropdown-toggle dropdown-hover dropdown-icon brand-link" data-toggle="dropdown">
      <img  src="<?php echo base_url(); ?>assets/img/<?php echo $profile; ?>" class="brand-image img-circle elevation-3">
      <span style="color:white;"  class="brand-text font-weight-light"><?php echo $name; ?></span>
     
    </a>
    <div class="dropdown-menu" role="menu">
        <a class="dropdown-item" ><img style="width: 25vh; height: 25vh;" src="<?php echo base_url(); ?>assets/img/<?php echo $profile; ?>" class="brand-image img-circle elevation-3"></a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>pages/usr/home"><i class="nav-icon fas fa-graduation-cap"></i> MY PROFILE</a>
        <a class="dropdown-item" onclick="userout()"><i class="fas fa-power-off"></i> LOG OUT</a>
    </div>
    <div class="sidebar">
      <input type="hidden" name="update_set" value="<?php echo $update; ?>">
      <input type="hidden" name="name" value="<?php echo $name; ?>">  
      <input type="hidden" name="userid" value="<?php echo $id ?>"> 
      <input type="hidden" name="profile" value="<?php echo $profile; ?>">
      <input type="hidden" name="fullname" value="<?php echo $fullname; ?>"> 
      <input type="hidden" name="student_ids" value="<?php echo $stud_id; ?>"> 
      <input type="hidden" name="time_online" > 
      <input type="hidden" name="section_update">
    <?php } }?>
      <!-- Sidebar Menu -->
     


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

      <div class="modal fade" id="request">
        <div class="modal-dialog">
          <div class="modal-content bg-defualt">
            <div class="modal-body text_display">
              <input type="hidden" name="student_id_send">
              <p>&nbsp;&nbsp;&nbsp;&nbsp; SAMPLE REQUEST. Good day Sir/Ma'am I &nbsp;<input style="background: transparent;border:none; border-bottom: 1px solid black;" name="student_name" value=" "> would like to request  <input style="border:none; background: transparent; border-bottom: 1px black solid;" type="text" name="request_files"> thank you and Godbless.</p>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
              <a href="javascript:void(0)" class="btn btn-outline-success submit_request" > Submit Request</a>
            </div>
          </div>
        </div>
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

      
  <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

        $('.request_form').click(function(){
          var name = $('input[name="fullname"]').val();
          var stud_id = $('input[name="student_ids"]').val();
          $('input[name="student_name"]').val(name);
          $('input[name="student_id_send"]').val(stud_id);
          $('#request').modal('show');
        });

        $('.submit_request').click(function(){
          var stud_id = $('input[name="student_id_send"]').val();
          var request  = $('input[name="request_files"]').val();
          var name = $('input[name="student_name"]').val();
     
              $.ajax({
                    url:'<?=base_url()?>index.php/pages/send_request_form',
                    type: 'post',
                    data:{stud_id:stud_id, request:request, name:name},
                    dataType : "JSON",
                    success: function (data) {
                       swal("Process Success!", "Request Submitted", "success");
                    }
                }); 
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