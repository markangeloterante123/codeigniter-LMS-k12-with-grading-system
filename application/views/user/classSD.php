
 
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
           $userid = $values->student_id;
           $update = $values->up_date;
          ?>
    <a style="background: #800000;" href="#" class="dropdown-toggle dropdown-hover dropdown-icon brand-link" data-toggle="dropdown">
      <img  src="<?php echo base_url(); ?>assets/img/<?php echo $profile; ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span  class="brand-text font-weight-light"><?php echo $name; ?></span>
    </a>
    <div class="dropdown-menu" role="menu">
        <a href="<?php echo base_url(); ?>pages/usr2/clas" class="dropdown-item" ><i class="nav-icon fas fa-reply"></i> EXIT CLASS</a>
        <a href="javascript:void" class="dropdown-item remove_class"><i class="fas fa-user-times"></i> REMOVE CLASS</a>
    </div>
    
    <div class="sidebar">
       <input type="hidden" name="update_set" value="<?php echo $update; ?>">
      <input type="hidden" name="name" value="<?php echo $name; ?>">  
      <input type="hidden" name="userid" value="<?php echo $id ?>">
      <input type="hidden" name="user_id" value="<?php echo $userid ?>">  
      <input type="hidden" name="profile" value="<?php echo $profile; ?>">
      <input type="hidden" name="fullname" value="<?php echo $fullname; ?>"> 
    <?php } }?>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-university "></i>
              <p>
                OVERVIEW
              </p>
            </a>
          </li>
        
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                ASSIGNMENT
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="nav nav-treeview class_assignment_shortcut">
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                ACTIVITIES
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="nav nav-treeview class_activity_shortcut">
             
            </ul>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                QUIZ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="nav nav-treeview class_quiz_shortcut">
             
            </ul>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                EXAM-PROJECT
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="nav nav-treeview class_exam_shortcut">
             
            </ul>
          </li>
          <li class="nav-item">
            <a data-toggle="modal" data-target="#add_link" class="nav-link ">
              <i class="nav-icon fas fa-video"></i>
              <p>
                CLASS VIDEO LINK
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="modal fade" id="add_link">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body"> 
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th style="width: 3%;">#</th>
                    <th style="width: 90%;">LINK</th>
                  </tr>
                </thead>
                <tbody class="table_link">
                  <!--ajax link-->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

  <style>
    .contentss{
      width: 90%;
      padding: 5px;
      margin: 0 auto;
    }
    .contentss span{
      width: 250px;
    }
    .dz-message{
      text-align: center;
      font-size: 28px;
    }
    </style>

    <script>
    // Add restrictions
    Dropzone.options.fileupload = {
      maxFilesize: 1 // MB
    };
    </script>

    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title activity_title"></h4>          
            </div>
            <div class="modal-body">
              <h6 class="modal-title activity_date"></h6>
              <input type="hidden" name="post_id">
              <p class="detail"></p>
              <hr>
              <div class="Online_link">
              
              </div>
                <div class='contentss'>
                  <form action="<?php echo base_url(); ?>pages/fileUpload?>" enctype="multipart/form-data" class="dropzone" id="fileupload">
                    <input type="hidden" class="activity_id" name="activity_id">
                    <input type="hidden" class="class_code_sub" name="class_code_sub">
                    <input type="hidden" class="stud" name="stud">
                    <input type="hidden" class="type" name="type_up">
                    <input type="hidden" class="total_score" name="total_score">
                  </form>
                </div> 
              <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title activity_title"></h4>          
            </div>
            <div class="modal-body">
              <h6 class="modal-title activity_date"></h6>
              <input type="hidden" name="post_id">
              <p class="detail"></p>
              <hr>
              <h6><i class="fas fa-link"> Online Link</i></h6>
              <div class="Online_link">
              
              </div>
              <div class="form-group">
                <form action="" method="post" id="import_form" enctype="multipart/form-data">
                <div class="btn btn-info">
                    <input type="file" id="files" name="files[]" multiple>
                    <a title="Remove File to Upload" href="javascript:void(0)" class="btn btn-warning clear_upload"><i class="fas fa-times"></i></a>
                </div>
                      <input type="hidden" class="activity_id" name="activity_id">
                      <input type="hidden" class="class_code_sub" name="class_code_sub">
                      <input type="hidden" class="stud" name="stud">
                      <input type="hidden" class="type" name="type_up">
                      <input style="margin-top: 5px;" type="submit" class="btn btn-success" value="SUBMIT">
                  </form>
              </div>
              <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div> -->

<?php
  }
  ?>

  <script type="text/javascript">
    $(document).ready(function () {
      ajax_act_ass();
      open_link();
      //--- view link
        function open_link(){
          var code = $('input[name="class_code"]').val();
          $.ajax({
              url:'<?=base_url()?>index.php/pages/view_links',
              data:{code:code},
              type: 'POST',
              dataType : "JSON",
              success: function (data) {    
                var html = ''
                  for(i=0; i<data.length; i++){
                    html +=
                    '<tr>'+
                      '<td>'+(i+1)+'</td>'+
                      '<td><a href="'+data[i].link+'" target="_blank" class="btn btn-block btn-default"><i class="fas fa-arrow-right"></i> '+data[i].title+'</a></td>'+
                    '</tr>';
                  } 
                $('.table_link').html(html);
              }
            });
        }
      //--- end here
    $('.clear_upload').click(function(){
      $('input[id="files"]').val('');
    });
      //--- quit the class
      $('.remove_class').click(function(){
        var stud = $('input[name="user_id"]').val();
        var clas = $('input[name="class_code"]').val();
         swal({
              title: "Remove class from my list",
              text: "Are you sure you want to remove these subject?",
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
                $.ajax({
                  url:'<?=base_url()?>index.php/pages/ajax_quitSub',
                  type: 'POST',
                  data:{stud:stud, clas:clas},
                  dataType : "JSON",
                  success: function (data) {   
                    swal("Success", "", "success");
                    window.open("<?php echo base_url(); ?>pages/usr2/clas","_self");
                    }
                  });  
              } else {
                swal("Canceled", "", "error");
              }
            }); 
      });
      //--- end here
      function ajax_act_ass(){
            var id = $("input[name='class_code']").val();
            $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_ass_act',
              data:{id:id, },
              type: 'POST',
              dataType : "JSON",
              error: function() {
                      alert('Error Trace activity');
                   },
              success: function (data) {
                var html = '';
                var ass = '';
                var quiz = '';
                var exam = '';
                var mod = '';
                  for(i=0; i<data.length; i++){
                      if(data[i].type == '2'){
                        html +=
                        '<li class="nav-item">'+
                          '<a style="color:black; font-size:14px;" href="javascript:void(0)" data-post_id="'+data[i].post_id+'" data-type="'+data[i].type+'" data-acept="'+data[i].acept+'" data-date="'+data[i].d_line+'" data-title="'+data[i].title+'" data-time="'+data[i].time+'" data-total="'+data[i].total+'" data-class_code="'+data[i].user_id+'" data-post_id="'+data[i].post_id+'" data-ol="'+data[i].online+'" class="nav-link open_act">'+
                            '<i class="fas fa-minus nav-icon"></i>'+
                            '<p>'+data[i].title+'</p>'+
                          '</a>'+
                        '</li>'
                        ;
                      }
                      // if(data[i].type == '3'){
                      //   mod +=
                      //   '<li class="nav-item">'+
                      //     '<a style="color:black; font-size:14px;" href="#" class="nav-link">'+
                      //       '<i class="fas fa-book nav-icon"></i>'+
                      //       '<p>'+data[i].title+'</p>'+
                      //     '</a>'+
                      //   '</li>'
                      //   ;
                      // }
                      else if(data[i].type == '4'){
                        ass +=
                        '<li class="nav-item">'+
                          '<a style="color:black; font-size:14px;" href="javascript:void(0)" data-post_id="'+data[i].post_id+'" data-type="'+data[i].type+'" data-acept="'+data[i].acept+'" data-date="'+data[i].d_line+'" data-title="'+data[i].title+'" data-class_code="'+data[i].user_id+'" data-time="'+data[i].time+'" data-total="'+data[i].total+'" data-post_id="'+data[i].post_id+'" data-ol="'+data[i].online+'" class="nav-link open_act">'+
                            '<i class="fas fa-minus nav-icon"></i>'+
                            '<p>'+data[i].title+'</p>'+
                          '</a>'+
                        '</li>'
                        ;
                      }
                      else if(data[i].type == '5'){
                        quiz +=
                        '<li class="nav-item">'+
                          '<a style="color:black; font-size:14px;" href="javascript:void(0)" data-post_id="'+data[i].post_id+'" data-type="'+data[i].type+'" data-acept="'+data[i].acept+'"  data-date="'+data[i].d_line+'" data-title="'+data[i].title+'" data-time="'+data[i].time+'" data-total="'+data[i].total+'" data-class_code="'+data[i].user_id+'" data-post_id="'+data[i].post_id+'" data-ol="'+data[i].online+'" class="nav-link open_act">'+
                            '<i class="fas fa-minus nav-icon"></i>'+
                            '<p>'+data[i].title+'</p>'+
                          '</a>'+
                        '</li>'
                        ;
                      }
                      else if(data[i].type == '6'){
                        exam +=
                        '<li class="nav-item">'+
                          '<a style="color:black; font-size:14px;" href="javascript:void(0)" data-post_id="'+data[i].post_id+'" data-type="'+data[i].type+'" data-acept="'+data[i].acept+'" data-date="'+data[i].d_line+'" data-title="'+data[i].title+'" data-time="'+data[i].time+'" data-ol="'+data[i].online+'" data-class_code="'+data[i].user_id+'" data-post_id="'+data[i].post_id+'" class="nav-link open_act">'+
                            '<i class="fas fa-minus nav-icon"></i>'+
                            '<p>'+data[i].title+'</p>'+
                          '</a>'+
                        '</li>'
                        ;
                      }
                      else if(data[i].type == '7'){
                        exam +=
                        '<li class="nav-item">'+
                          '<a style="color:black; font-size:14px;" href="javascript:void(0)" data-post_id="'+data[i].post_id+'" data-type="'+data[i].type+'" data-acept="'+data[i].acept+'" data-date="'+data[i].d_line+'" data-title="'+data[i].title+'" data-time="'+data[i].time+'" data-time="'+data[i].time+'" data-ol="'+data[i].online+'" data-total="'+data[i].total+'" data-class_code="'+data[i].user_id+'" data-post_id="'+data[i].post_id+'" class="nav-link open_act">'+
                            '<i class="fas fa-minus nav-icon"></i>'+
                            '<p>'+data[i].title+'</p>'+
                          '</a>'+
                        '</li>'
                        ;
                      }
                    }
                $('.class_activity_shortcut').html(html);
                $('.class_quiz_shortcut').html(quiz);
                $('.class_exam_shortcut').html(exam);
                $('.class_assignment_shortcut').html(ass);
                // $('.class_mod').html(mod);
              }
            });
        }

         function show_instructions(){
           var post_id = $('input[name="activity_id"]').val();
          $.ajax({
              url:'<?=base_url()?>index.php/pages/activity_display_inst',
              type: 'POST',
              data:{post_id:post_id},
              dataType : "JSON",
              success: function (data) {
                var detail = '';
                  for(i=0; i<data.length; i++){
                      detail += data[i].body;
                    }
                   
                $('.detail').html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+detail);
              }
            });    
          }

      $('.class_assignment_shortcut').on('click','.open_act',function (){
          var type = $(this).data('type');
          var time = $(this).data('time');
          var total = $(this).data('total');
          $('input[name="type_up"]').val(type);
          $('input[name="total_score"]').val(total);
          var stud = $('input[name="user_id"]').val();
          var id = $(this).data('post_id');
          var cls_code = $(this).data('class_code');
          $('input[name="stud"]').val(stud);
          $('input[name="class_code_sub"]').val(cls_code);
          $('[name="post_id"]').val(id);
          var html = $(this).data('title');
          var date = $(this).data('date');
          var activity_id = $(this).data('post_id');
          $('input[name="activity_id"]').val(activity_id);
          $('.activity_title').html(html);
          $('.activity_date').html('<b>Due Date:</b> '+date);

          var ol = $(this).data('ol');
          if(ol == 1 ){
            $('.Online_link').html('<a style="margin:10px;" href="<?php echo base_url(); ?>pages/online_take/'+id+'/'+stud+'/'+time+'/'+total+'" class="btn btn-block btn-default" target="_blank"><i class="fas fa-edit"></i> Take online</a>');
          }

          show_instructions();
          $('#modal-xl').modal('show');

          $.ajax({
              url:'<?=base_url()?>index.php/pages/activity_display',
              type: 'POST',
              data:{activity_id:activity_id},
              dataType : "JSON",
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                      html +=
                        '<a style="margin-top:5px;" href="<?php echo base_url(); ?>pages/download/'+data[i].file+'" class="btn btn-default"><i class="fas fa-download"></i> Download File: '+data[i].file+'.</a>';
                    }
                    if(data.length == 0){
                      html +=
                      '<a style="margin-left:20px;">No Files Uploaded</a>';
                    }
                  html +='<hr>';
                $('.files_activity_upload').html(html);
                
              }
            });
        });    

      $('.class_exam_shortcut').on('click','.open_act',function (){
          var type = $(this).data('type');
          var time = $(this).data('time');
          var total = $(this).data('total');
          $('input[name="type_up"]').val(type);
          $('input[name="total_score"]').val(total);
          var stud = $('input[name="user_id"]').val();
          var id = $(this).data('post_id');
          var cls_code = $(this).data('class_code');
          $('input[name="stud"]').val(stud);
          $('input[name="class_code_sub"]').val(cls_code);
          $('[name="post_id"]').val(id);
          var html = $(this).data('title');
          var date = $(this).data('date');
          var activity_id = $(this).data('post_id');
          $('input[name="activity_id"]').val(activity_id);
          $('.activity_title').html(html);
          $('.activity_date').html('<b>Due Date:</b> '+date); 

          var ol = $(this).data('ol');
          if(ol == 1 ){
            $('.Online_link').html('<a style="margin:10px;" href="<?php echo base_url(); ?>pages/online_take/'+id+'/'+stud+'/'+time+'/'+total+'" class="btn btn-block btn-default" target="_blank"><i class="fas fa-edit"></i> Take online</a>');
          }
          show_instructions();
          $('#modal-xl').modal('show');

          $.ajax({
              url:'<?=base_url()?>index.php/pages/activity_display',
              type: 'POST',
              data:{activity_id:activity_id},
              dataType : "JSON",
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                      html +=
                        '<a style="margin-top:5px;" href="<?php echo base_url(); ?>pages/download/'+data[i].file+'" class="btn btn-default"><i class="fas fa-download"></i> Download File: '+data[i].file+'.</a>';
                    }
                    if(data.length == 0){
                      html +=
                      '<a style="margin-left:20px;">No Files Uploaded</a>';
                    }
                  html +='<hr>';
                $('.files_activity_upload').html(html);
                
              }
            });
        });

      $('.class_quiz_shortcut').on('click','.open_act',function (){
          var time = $(this).data('time');
          var type = $(this).data('type');
          var total = $(this).data('total');
          $('input[name="type_up"]').val(type);
          $('input[name="total_score"]').val(total);
          var stud = $('input[name="user_id"]').val();
          var id = $(this).data('post_id');
          var cls_code = $(this).data('class_code');
          $('input[name="stud"]').val(stud);
          $('input[name="class_code_sub"]').val(cls_code);
          $('[name="post_id"]').val(id);
          var html = $(this).data('title');
          var date = $(this).data('date');
          var activity_id = $(this).data('post_id');
          $('input[name="activity_id"]').val(activity_id);
          $('.activity_title').html(html);
          $('.activity_date').html('<b>Due Date :</b> '+date); 

          var ol = $(this).data('ol');
          if(ol == 1 ){
            $('.Online_link').html('<a style="margin:10px;" href="<?php echo base_url(); ?>pages/online_take/'+id+'/'+stud+'/'+time+'/'+total+'" class="btn btn-block btn-default" target="_blank"><i class="fas fa-edit"></i> Take online</a>');
          }
          show_instructions();
          $('#modal-xl').modal('show');

          $.ajax({
              url:'<?=base_url()?>index.php/pages/activity_display',
              type: 'POST',
              data:{activity_id:activity_id},
              dataType : "JSON",
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                      html +=
                        '<a style="margin-top:5px;" href="<?php echo base_url(); ?>pages/download/'+data[i].file+'" class="btn btn-default"><i class="fas fa-download"></i> Download File: '+data[i].file+'.</a>';
                    }
                    if(data.length == 0){
                      html +=
                      '<a>No Files Uploaded</a>';
                    }
                  html +='<hr>';
                $('.files_activity_upload').html(html);
                
              }
            });
        });

      $('.class_activity_shortcut').on('click','.open_act',function (){
          var time = $(this).data('time');
          var type = $(this).data('type');
          var total = $(this).data('total');
          $('input[name="type_up"]').val(type);
          $('input[name="total_score"]').val(total);
          var stud = $('input[name="user_id"]').val();
          var id = $(this).data('post_id');
          var cls_code = $(this).data('class_code');
          $('input[name="stud"]').val(stud);
          $('input[name="class_code_sub"]').val(cls_code);
          $('[name="post_id"]').val(id);
          var html = $(this).data('title');
          var date = $(this).data('date');
          var activity_id = $(this).data('post_id');
          $('input[name="activity_id"]').val(activity_id);
          $('.activity_title').html(html);
          $('.activity_date').html('<b>Due Date: </b> '+date);
         
          var ol = $(this).data('ol');
          if(ol == 1 ){
            $('.Online_link').html('<a style="margin:10px;" href="<?php echo base_url(); ?>pages/online_take/'+id+'/'+stud+'/'+time+'/'+total+'" class="btn btn-block btn-default" target="_blank"><i class="fas fa-edit"></i> Take online</a>');
          }
          show_instructions();
          $('#modal-xl').modal('show');

          $.ajax({
              url:'<?=base_url()?>index.php/pages/activity_display',
              type: 'POST',
              data:{activity_id:activity_id},
              dataType : "JSON",
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                      html +=
                        '<a style="margin-top:5px;" href="<?php echo base_url(); ?>pages/download/'+data[i].file+'" class="btn btn-default"><i class="fas fa-download"></i> Download File: '+data[i].file+'.</a>';
                    }
                    if(data.length == 0){
                      html +=
                      '<a>No Files Uploaded</a>';
                    }
                  html +='<hr>';
                $('.files_activity_upload').html(html);
                
              }
            });
        });

        
      setInterval(function(){
        ajax_act_ass();
      }, 2000) 


    });
  </script>





