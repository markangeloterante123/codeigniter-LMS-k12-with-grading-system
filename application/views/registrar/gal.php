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
                STUDENTS
              </p>
            </a>       
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/gal" class="nav-link active">
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
            <a style="margin-right: 5px;padding-right: px;" data-toggle="modal" data-target="#set-sem" class="nav-link">
              <i class="far fas fa-cog nav-icon"></i>
              <p>
                SET NEW-SEM
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
            <h1 style="color:white;" class="m-0  title_gal">Images</h1>
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li style="color:white;" class="breadcrumb-item">Home</li>
              <li style="color:white;" class="breadcrumb-item active">Images</li>
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
                <div class="def_btn">
                  
                </div>
                <div class="card-tools button_upl">
                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mt-4 images_display">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  </div>

  <div class="modal fade" id="uploadPic">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Images</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action=" " id="upload" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="file" id="files" name="files[]" multiple accept=".jpg, .jpeg, .png, .gif">

                <div  class="row align-items-center">
                  <div class="col">
                    <div class="progress">
                      <div  id="file-progress-bar" class="progress-bar"></div>
                   </div>
                 </div>
                </div>
                <div class="row align-items-center">  
                  <div class="col">
                    <div id="uploaded_file"></div>
                  </div>
                </div>  
                <hr>   
                <input type="submit" class="btn btn-block btn-success" value="Upload" >
            </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="delete_landing_img">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <input type="hidden" name="image_id">
            <div class="modal-body display_image">
                
            </div>
            <div class="modal-footer">
            <a href="javascript:void(0)" class="btn btn-block btn-danger delete_landing"><i class="fas fa-trash"></i> Delete Images</a>
            </div>
          </div>
        </div>
      </div>

 <script type="text/javascript">
    $(document).ready(function (){
      display();

      function display(){  
        var button = '<a data-toggle="modal" data-target="#uploadPic" style="color:white;" class="btn btn-warning"><i class="fas fa-image"></i> Add Images</a>';
        $.ajax({
                url:'<?=base_url()?>index.php/pages/ajax_background',
                type: 'POST',
                dataType : "JSON",
                error: function() {
                        alert('Show info Error');
                     },
                success: function (data) {   
                    var html = '';       
                    for(i=0; i<data.length; i++){
                        html += 
                          '<div class="col-sm-4">'+
                            '<div class="position-relative" style="min-height: 180px;">'+
                              '<a href="javascript:void(0)" data-id="'+data[i].id+'" data-img="'+data[i].image+'" class="delete_landing"><img style="margin-bottom:5px; border:solid 1px black; height: 180px; width: 380px;" src="<?php echo base_url(); ?>assets/background/'+data[i].image+'" alt="Photo 3" class="img-fluid"></a>'+
                            '</div>'+
                          '</div>';
                      }
                  $('.images_display').html(html);
                  $('.button_upl').html(button);
                  $('.title_gal').html('Images');
                }
              });
        }
    
    $('.images_display').on('click','.delete_landing', function(event){
        var image = $(this).data('img');
        var id = $(this).data('id');
        $('#delete_landing_img').modal('show');
        html =
          '<img style="margin-bottom:5px; border:solid 4px black; height: 100%; width: 50vh;" src="<?php echo base_url(); ?>assets/background/'+image+'" alt="Photo 3" class="img-fluid">';
        $('.display_image').html(html);
        $('input[name="image_id"]').val(id);
    });

     $('#upload').on('submit', function(event){
        event.preventDefault();
          $.ajax({
               xhr: function() {
                    var xhr = new window.XMLHttpRequest();         
                    xhr.upload.addEventListener("progress", function(element) {
                        if (element.lengthComputable) {
                            var percentComplete = ((element.loaded / element.total) * 100);
                            $("#file-progress-bar").width(percentComplete + '%');
                            $("#file-progress-bar").html(percentComplete+'%');
                        }
                    }, false);
                    return xhr;
                },
               url:"<?php echo base_url(); ?>pages/upload_landing",
               method:"POST",
               data:new FormData(this),
               contentType:false,
               cache:false,
               processData:false,
                beforeSend: function(){
                    $("#file-progress-bar").width('0%');
                },
                error: function() {
                  $('#uploaded_file').html('<p style="color:red;">Error un-successfully upload</p>');
                     },
               success:function(data){
                  $('#uploaded_file').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');
                  landing_img(); 
               }
          })
     });

     $('.def_btn').on('click','.gallery_item', function(event){  
        display();
      });

      $('.delete_landing').click(function(){
        var id = $('input[name="image_id"]').val();
        $.ajax({
                url:'<?=base_url()?>index.php/pages/ajax_delete_landing',
                type: 'POST',
                data:{id:id},
                dataType : "JSON",
                error: function() {
                        alert('Show info Error');
                     },
                success: function (data) {   
                    swal("Process Success!", "Delete landing images", "success");
                    landing_img();
                    $('#delete_landing_img').modal('hide');
                }
          });
      });



  });
</script>
 