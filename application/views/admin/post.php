 

<input type="hidden" name="id">


 <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white;" class="m-0">Dashboard</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li style="color:white;" class="breadcrumb-item">Home</li>
              <li style="color:white;" class="breadcrumb-item active">Dashboard</li>
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
                  <input class="form-control" name="subject" placeholder="Subject:">
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