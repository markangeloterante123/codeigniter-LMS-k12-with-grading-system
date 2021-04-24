

<input type="hidden" name="id">


 <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white;" class="m-0">Uploaded Files</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li style="color:white;" class="breadcrumb-item">Home</li>
              <li style="color:white;" class="breadcrumb-item active">files</li>
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


      <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title title-button"></h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead class="table_head">
                   
                    </thead>
                    <tbody class="table_files">
                   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


      <div class="modal fade" id="upload_files_view">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="title title_title"></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <div>
                <p class="body_text_info"></p>
                <hr>
              </div>
              <form action="" method="post" id="import_form" enctype="multipart/form-data">
                <div class="btn btn-info">
                    <input type="hidden" name="post_id_submit">
                    <input type="hidden" name="student_id">
                    <input type="file" id="files" name="files[]" multiple>
                    <a title="Remove File to Upload" href="javascript:void(0)" class="btn btn-warning clear_upload"><i class="fas fa-times"></i></a>
                </div>
                <input style="margin-top: 5px;" type="submit" class="btn btn-success" value="SUBMIT">
              </form>
            </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


<script type="text/javascript">
  $(document).ready(function () {
    list_files();
    btn_set1();


     $('#import_form').on('submit', function(event){
        event.preventDefault();
        var file = $('input[id="files"]').val();
          if(file==''){
              swal("Process Error!", "No Data to Process", "error");
          }
          else{
               $.ajax({
                   url:"<?php echo base_url(); ?>pages/upload_submit_files",
                   method:"POST",
                   data:new FormData(this),
                   contentType:false,
                   cache:false,
                   processData:false,
                   success:function(data){     
                    swal("Process Success!", "File Submitted", "success");
                    $('#modal-xl').modal('hide');
                    $('input[id="files"]').val('');
                    stud_records();
                   }
              })
          }
       });

    function btn_set1(){
     var button = 
      '<a href="javascript:void(0)" class="btn btn-success file_uploaded "><i class="fas fa-file"></i> Uploaded Files</a> <a href="javascript:void(0)" class="btn btn-default my_request_files"><i class="fas fa-file"></i> Request Recieve Files</a>'; 
      $('.title-button').html(button);
    }
    $('.title-button').on('click','.my_request_files',function (){
        var button = 
        '<a href="javascript:void(0)" class="btn btn-default file_uploaded "><i class="fas fa-file"></i> Uploaded Files</a> <a href="javascript:void(0)" class="btn btn-success my_request_files"><i class="fas fa-file"></i> Request Recieve Files</a>'; 
        $('.title-button').html(button);
        $('.table_head').html('');
        $('.table_files').html('');
          var table = 
              '<tr>'+
                '<th>Date:</th>'+
                '<th>File:</th>'+
                '<th>Remarks:</th>'+
              '</tr>';
          $('.table_head').html(table);
          var student_id = $('input[name="student_ids"]').val();
          $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_request_fileView',
              type: 'POST',
              data:{student_id:student_id},
              dataType : "JSON",
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                       html +=
                      '<tr>'+
                        '<td>'+data[i].date+'</td>'+
                        '<td><a href="<?php echo base_url(); ?>pages/download/'+data[i].files+'" class="btn btn-info"><i class="fas fa-download"></i> '+data[i].files+'</a></td>'+
                        '<td>'+data[i].comment+'</td>'+
                      '</tr>';
                  }
                $('.table_files').html(html);
              }
            });


    });
    $('.title-button').on('click','.file_uploaded',function (){
      $('.table_head').html('');
      $('.table_files').html('');
       btn_set1();
       table_header();
       list_files();
    });

    function table_header(){
      var table = 
          '<tr>'+
            '<th>Profile</th>'+
            '<th>Posted:</th>'+
            '<th>Title:</th>'+
            '<th>Instruction:</th>'+
            '<th>Date:</th>'+
            '<th>Files</th>'+
          '</tr>';
      $('.table_head').html(table);
    } 
    function list_files(){
      table_header();
        $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_filesDisplayUserMode',
              type: 'POST',
              dataType : "JSON",
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                    if(data[i].file_ext == 'pdf' || data[i].file_ext == 'doc' || data[i].file_ext == 'docx' || data[i].file_ext == 'xls' || data[i].file_ext == 'xlsx' || data[i].file_ext == 'pptx'){
                       html +=
                      '<tr>'+
                        '<td><img style="height:6vh; width:6vh;" class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="user image"></td>'+
                        '<td>'+data[i].fullname+'</td>'+
                        '<td>'+data[i].title+'</td>'+
                        '<td><a href="javascript:void(0)" class="btn btn-default upload_files_view" data-title="'+data[i].title+'"   data-post="'+data[i].post_id+'" data-date="'+data[i].date+'" data-body="'+data[i].body+'"><i class="fas fa-eye"></i> Instruction</a></td>'+
                        '<td>'+data[i].date+'</td>'+
                        '<td><a href="<?php echo base_url(); ?>pages/download/'+data[i].file+'" class="btn btn-info"><i class="fas fa-download"></i> File</a></td>'+
                      '</tr>';
                    }          
                  }
                $('.table_files').html(html);
              }
            });
        }
      $('.table_files').on('click','.upload_files_view',function (){
        var student_id =  $('input[name="student_ids"]').val();
        $('input[name="student_id"]').val(student_id);
        var body = $(this).data('body');
        var title = $(this).data('title');
        var post = $(this).data('post');
        var post = $(this).data('post');
        var date = $(this).data('date');
        var dates = '<h5> '+date+'</h5>'; 
        $('.title_title').html(title +" "+dates);
        $('input[name="post_id_submit"]').val(post);
        $('.body_text_info').html(body);
        $('#upload_files_view').modal('show');

      });



  });
</script>

          