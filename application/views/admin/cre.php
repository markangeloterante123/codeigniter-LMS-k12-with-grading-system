 

<input type="hidden" name="id">
<nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/adm2/clas" class="nav-link active">
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

 <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white;" class="m-0">Create Class</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li style="color:white;" class="breadcrumb-item">Home</li>
              <li style="color:white;" class="breadcrumb-item active">Create Class</li>
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
        

     
            <!-- /.card -->
   		<div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div style="background-image: linear-gradient(to bottom right, #800000, #CC3300);" class="card-header">
                <h3 class="card-title">Create Class</h3>
              </div>
              
              <form action="<?php echo base_url(); ?>pages/createClass" method="post" enctype="multipart/form-data" id="upload_form">
                <input type="hidden" name="admin_profile">
                <input type="hidden" name="admin_name">
                <input type="hidden" name="admin_fullname">
                <input type="hidden" name="admin_id">
                <div class="card-body">
                  <div class="form-group">
                    <label for="subject">Subject Name:</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                  </div>
                  <div class="form-group">
                    <label for="subcode">Subject Code:</label>
                    <input type="text" class="form-control" name="subcode" id="subcode"  required>
                  </div>
                  <div class="form-group">
                    <label for="subcode">Subject Unit:</label>
                    <input type="text" class="form-control" name="unit" id="unit"  required>
                  </div>
                  <div class="form-group">
                    <label for="section">Class Section & Year:</label>
                    <input type="text" class="form-control" name="section" id="section" >
                  </div>
                  <div class="form-group">
                    <label for="section">Semester:</label>
                    <select class="form-control" name="type_class">
                      <option value="k12-1st" > K-12 1st Semister</option>
                      <option value="k12-2nd"> K-12 2nd Semister</option>
                      <option value="col-1st"> College 1st Semister</option>
                      <option value="col-2nd"> College 2nd Semister</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="section">Written Work:</label>
                    <input type="text" class="form-control" name="ww" id="ww" >
                  </div>
                  <div class="form-group">
                    <label for="section">Performance Task:</label>
                    <input type="text" class="form-control" name="pt" id="pt" >
                  </div>
                  <div class="form-group">
                    <label for="section">Quarter Assesment:</label>
                    <input type="text" class="form-control" name="qa" id="qa" >
                  </div>
                  <div class="form-group">
                    <label for="section">Class Schedule:</label>
                    <input type="text" class="form-control" name="schedule" id="schedule" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Course Background</label>
                    <input style="font-size: 11px" type="file" id="image_file" class="form-control" name="image_file"/>
                  </div>
              <!--     <div class="form-group">
                    <label for="exampleInputFile">Course Background</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image_file" id="image_file">
                        <label class="custom-file-label" for="image_file"></label>
                      </div>
                    </div>
                  </div> -->
                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-success" value="Create New Class">
                </div>
              </form>
            </div>
          </div>





<script type="text/javascript">
  $(document).ready(function () {
     ajax_names();
     function ajax_names(){
      var full = $("input[name='fullname']").val();
     	 var name = $("input[name='name']").val();
       var profile = $("input[name='profile']").val();
       var id = $("input[name='userid']").val();
        $('[name="admin_profile"]').val(profile);
        $('[name="admin_fullname"]').val(full);
        $('[name="admin_name"]').val(name);
        $('[name="admin_id"]').val(id);
    }
  });
 </script>