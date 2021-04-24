
 
<?php
  $id = $this->session->all_userdata();
  if(isset($id['super_session'])){
?>


  <aside  style="background-image: linear-gradient(to bottom right, #800000, #CC3300); " class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Sidebar -->
          <?php
          $table="tbl_account";
          $field="id";
          if(isset($id['super_session'])){
          $data=$id['super_session'];
          foreach ($this->load->model_users->data($data,$field,$table) as $values) { 
           $name = $values->nickname;
           $profile = $values->profile;
           $id = $values->id;
          ?>
      
      <a style="background: #800000;" href="#" class="dropdown-toggle dropdown-hover dropdown-icon brand-link" data-toggle="dropdown">
        <img  style="height: 6.5vh; width: 6.5vh;" src="<?php echo base_url(); ?>assets/img/<?php echo $profile; ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span  class="brand-text font-weight-light"><?php echo $name; ?></span>
      </a>
     <div class="dropdown-menu" role="menu">
          <a class="dropdown-item" ><img style="width: 25vh; height: 25vh;" src="<?php echo base_url(); ?>assets/img/<?php echo $profile; ?>" class="brand-image img-circle elevation-3"></a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>pages/reg/wall"><i class="nav-icon fas fa-graduation-cap"></i> MY PROFILE</a>
          <a class="dropdown-item" onclick="userout()"><i class="fas fa-power-off"></i> LOG OUT</a>
      </div>

      <div class="sidebar">
      <input type="hidden" name="name" value="<?php echo $name; ?>">  
      <input type="hidden" name="userid" value="<?php echo $id ?>"> 
      <input type="hidden" name="profile" value="<?php echo $profile; ?>">
      <input type="hidden" name="time_online" >  

      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img style="height: 6.5vh; width: 6.5vh;" src="<?php echo base_url(); ?>assets/img/<?php echo $profile; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info active">

          <h5 style="color:white;" class="d-block"><?php echo $name; ?></h5>
        </div>
      </div>
 -->          <?php } }?>
      <!-- Sidebar Menu -->
     


<?php
  }
  ?>

  <!--modals here-->
 
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