<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg/home" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg/wall" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                LMS Wall
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/stud_info" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Student Information
              </p>
            </a>
            
          </li>
     
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg/post" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Create Post
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/gal" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg/upl" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Uploaded Files
              </p>
            </a>
          </li>
    
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Add
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="<?php echo base_url(); ?>pages/reg/stud" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>pages/reg2/adpro" class="nav-link active">
                  <i class="far fa-heart nav-icon"></i>
                  <p>Professor/Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Add Link</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/class" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>
                LMS List of Class
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
          <li class="nav-item">
            <a onclick="userout()" style="color:white;" class="nav-link  btn-danger">
              <i class="icon fas  fa-power-off nav-icon"></i>
                <p>
                Log-Out
               </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<?php
  $id = $this->session->all_userdata();
  if(isset($id['super_session'])){
    $user = $id['super_session'];
?>
 


  <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white">Professors and Admin Informations</h1>
          </div>
          <div class="col-sm-6">
            <ol  class="breadcrumb float-sm-right">
              <li style="color:white" class="breadcrumb-item">Home</li>
              <li style="color:white" class="breadcrumb-item active">Personels</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">

      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            <?php 
              foreach ($this->load->model_users->data4() as $value) {
                $department = $value->department;
                $name = $value->fullname;
                $nickname = $value->nickname;
                $profile = $value->profile;
                $email = $value->email;
                $contact = $value->contact;
                $id = $value->id;
            ?>
               
            <?php if($id != $user ): ?>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                 <?php 
                    if($department == '1'){
                      echo "<h4>Professor</h4>";
                    }
                    else{
                      echo "<h4>Admin</h4>";
                    }
                 ?>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo $name; ?></b></h2>
                      <p class="text-muted text-sm"><b>Nickname: </b> <?php echo $nickname;?></p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-fax"></i></span> <?php echo $email; ?></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone/Celphone #: <?php echo $contact; ?></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="<?php echo base_url(); ?>assets/img/<?php echo $profile; ?>" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php } ?>
          </div>
        </div>
      </div>

    </section>
  </div>
  <?php } ?>