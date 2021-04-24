<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
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
            <a href="<?php echo base_url(); ?>pages/reg/post" class="nav-link active">
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
    
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Add
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>pages/reg/stud" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Students</p>
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
              <i class="nav-icon fas fa-heart"></i>
              <p>
                Instructors Information
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
            <h1 class="m-0" style="color:white;">Dashboard</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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


       <style type="text/css">
         .note-group-select-from-files {
            display: none;
          }
       </style>
     
            <!-- /.card -->
   		<div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Create Post</h3>
              </div>
          
              <div class="card-body">
              	<form action="<?php echo base_url(); ?>pages/upload_post" method="post" enctype="multipart/form-data">
              	<input type="hidden" name="name_post">
                <input type="hidden" name="profile">
                <input type="hidden" name="user_id">
                <input type="hidden" name="type" value="0">
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject:">
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
            	</form>
               </div>

            </div>
          </div>





<script type="text/javascript">
  $(document).ready(function () {
     ajax_names();
     function ajax_names(){
     	 var name = $("input[name='name']").val();
       var profile = $("input[name='profile']").val();
       var id = $("input[name='userid']").val();
        $('[name="name_post"]').val(name);
        $('[name="profile"]').val(profile);
        $('[name="user_id"]').val(id);
    }
  });
 </script>