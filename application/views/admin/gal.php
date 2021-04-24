<nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/adm2/clas" class="nav-link">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
               MY CLASS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/adm2/gal" class="nav-link active">
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
  <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white;" class="m-0">LMS Gallery</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li style="color:white;" class="breadcrumb-item">Home</li>
              <li style="color:white;" class="breadcrumb-item active">Gallery</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div style="background-image: linear-gradient(to right, #800000, #CC3300); "  class="card card-primary">
              <div style="background-image: linear-gradient(to bottom right, #800000, #CC3300); " class="card-header">
                <h3 class="card-title">LMS Gallery</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mt-4">
                        <?php 
                          $table='tbl_images_landing';
                          foreach ($this->load->model_users->data2Gal($table) as $value) {
                            $file = $value->image;
                        ?>
                            <div class="col-sm-4">
                              <div class="position-relative" style="min-height: 180px;">
                                <img style="margin-bottom:5px; border:solid 1px white; height: 250px; width: 100%;" src="<?php echo base_url(); ?>assets/background/<?php echo $file; ?>" alt="Photo 3" class="img-fluid">
                              </div>
                            </div>                       
                        <?php } ?> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  </div>