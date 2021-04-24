<?php
  $id = $this->session->all_userdata();
  if(isset($id['user_session'])){
    $user = $id['student_id'];
?>
  
  <input type="hidden" name="student_id" value="<?php echo $user; ?>">
<?php } ?>
 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/usr2/clas" class="nav-link active">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                MY COURSE
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/usr2/gal" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                BULLETIN PAGE
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/usr2/cal" class="nav-link">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white">List of Course</h1>
          </div>
          <div class="col-sm-6">
            <ol  class="breadcrumb float-sm-right">
              <li style="color:white" class="breadcrumb-item">Home</li>
              <li style="color:white" class="breadcrumb-item active">Class</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <input type="hidden" name="set_interval" value="0">
    <section class="content">
        <div class="form-group searchBox">
          <div style="width: 30%;"  class="input-group">
            <input   type="text" name="search_text" id="search_text" placeholder="Search..." class="form-control" />
          </div>
       </div>
      <hr>
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch my_join_clas">
        
          </div>
        </div>
      </div>

    </section>
  </div>
 

  <script type="text/javascript">
  $(document).ready(function () {
       show_class();
       function show_class(){
        var id = $("input[name='student_id']").val();
        $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_student_class',
              data:{id:id},
              type: 'POST',
              dataType : "JSON",
              error: function() {
                      alert('Show info Error');
                   },
              success: function (data) {        
                var html='';
                  for(i=0; i<data.length; i++){
                      if(data[i].status == '1'){
                      html +=
                      ' <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">'+
                             '<div class="card bg-light">'+
                               '<div class="card-header text-muted border-bottom-0">'+data[i].course+
                              '</div>'+
                              '<div class="card-body pt-0">'+
                                '<div class="row">'+
                                  '<div class="col-7">'+
                                    '<h2 class="lead"><b>'+data[i].class_subject+'</b></h2>'+
                                    '<p class="text-muted text-sm"><b>Professor: </b> '+data[i].admin+'</p>'+
                                    '<ul class="ml-4 mb-0 fa-ul text-muted">'+
                                      '<li class="small"><span class="fa-li"><i class="fas fa-desktop"></i></span> '+data[i].section_yr+'</li>'+
                                      '<li class="small"><span class="fa-li"><i class="fas fa-lg fa-users"></i></span>Students: '+data[i].no_student+'</li>'+
                                      '<li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar"></i></span>Schedulre: '+data[i].class_sched+'</li>'+
                                    '</ul>'+
                                  '</div>'+
                                  '<div class="col-5 text-center">'+
                                    '<img src="<?php echo base_url(); ?>assets/background/'+data[i].courseBackground+'" alt="user-avatar" class="img-circle img-fluid">'+
                                  '</div>'+
                                '</div>'+
                              '</div>'+
                              '<div class="card-footer">'+
                                '<div class="text-right class_status">'+
                                  '<form action="<?php echo base_url(); ?>pages/enterClassStudent" method="post">'+
                                  '<input type="hidden" name="code" value="'+data[i].class_code+'">'+
                                  '<input type="hidden" name="sec" value="'+data[i].section_yr+'">'+
                                  '<input type="hidden" name="sub" value="'+data[i].class_subject+'">'+
                                  '<button onclick class="btn btn-success">'+
                                    '<i class="fas fa-users"></i> Enter Class'+
                                  '</button>'+
                                  '</form>'+
                                '</div>'+
                              '</div>'+
                            '</div>'+
                           '</div>';                              
                      }
                      else if (data[i].status == '0'){
                        html +=
                      ' <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">'+
                             '<div class="card bg-light">'+
                               '<div class="card-header text-muted border-bottom-0">'+data[i].course+
                              '</div>'+
                              '<div class="card-body pt-0">'+
                                '<div class="row">'+
                                  '<div class="col-7">'+
                                    '<h2 class="lead"><b>'+data[i].class_subject+'</b></h2>'+
                                    '<p class="text-muted text-sm"><b>Professor: </b> '+data[i].admin+'</p>'+
                                    '<ul class="ml-4 mb-0 fa-ul text-muted">'+
                                      '<li class="small"><span class="fa-li"><i class="fas fa-desktop"></i></span> '+data[i].section_yr+'</li>'+
                                      '<li class="small"><span class="fa-li"><i class="fas fa-lg fa-users"></i></span>Students: '+data[i].no_student+'</li>'+
                                      '<li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar"></i></span>Schedulre: '+data[i].class_sched+'</li>'+
                                    '</ul>'+
                                  '</div>'+
                                  '<div class="col-5 text-center">'+
                                    '<img src="<?php echo base_url(); ?>assets/background/'+data[i].courseBackground+'" alt="user-avatar" class="img-circle img-fluid">'+
                                  '</div>'+
                                '</div>'+
                              '</div>'+
                              '<div class="card-footer">'+
                                '<div class="text-right class_status">'+
                                  '<a style="color:white;" href="#" class="btn btn-sm btn-warning">'+
                                    '<i class="far fa-user "></i> Request Pending...'+
                                  '</a>'+' '+
                                  '<a href="javascript:void(0)" data-id="'+data[i].id+'" data-code="'+data[i].class_code+'" class="btn btn-sm btn-danger deleteclass">'+
                                    '<i class="fas fa-times "></i> Cancel'+
                                  '</a>'+
                                '</div>'+
                              '</div>'+
                            '</div>'+
                           '</div>'
                      }
                    }
                  $('.my_join_clas').html(html);
              }
            });
         }

        $('.my_join_clas').on('click','.join_class',function (){
          var class_code = $(this).data('class_code');
          var id = $("input[name='student_id']").val();
             $.ajax({
              url:'<?=base_url()?>index.php/pages/class_join',
              type: 'POST',
              data:{id:id, class_code:class_code},
              dataType : "JSON",
              error: function() {
                      alert('Adding Class Errors');
                   },
              success: function (data) {
                  $("input[name='search_text']").val('');
                  $('input[name="set_interval"]').val('0');
                  show_class();
                }
            });
        });
         $('.my_join_clas').on('click','.deleteclass',function (){
          var id = $(this).data('id');
          var code = $(this).data('code'); 
             $.ajax({
              url:'<?=base_url()?>index.php/pages/delete_class_join',
              type: 'POST',
              data:{id:id, code:code},
              dataType : "JSON",
              error: function() {
                      alert('Adding Class Errors');
                   },
              success: function (data) {
                  show_class();
                }
            });
        });

          function show_class_search(){
          var name = $("input[name='search_text']").val();
           $.ajax({
              url:'<?=base_url()?>index.php/pages/class_search',
              type: 'POST',
              data:{name:name},
              dataType : "JSON",
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                    if(data[i].act_sem == '0'){
                        html +=
                        ' <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">'+
                               '<div class="card bg-light">'+
                                 '<div class="card-header text-muted border-bottom-0">'+data[i].course+
                                '</div>'+
                                '<div class="card-body pt-0">'+
                                  '<div class="row">'+
                                    '<div class="col-7">'+
                                      '<h2 class="lead"><b>'+data[i].class_subject+'</b></h2>'+
                                      '<p class="text-muted text-sm"><b>Professor: </b> '+data[i].admin+'</p>'+
                                      '<ul class="ml-4 mb-0 fa-ul text-muted">'+
                                        '<li class="small"><span class="fa-li"><i class="fas fa-desktop"></i></span> '+data[i].section_yr+'</li>'+
                                        '<li class="small"><span class="fa-li"><i class="fas fa-lg fa-users"></i></span>Students: '+data[i].no_student+'</li>'+
                                        '<li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar"></i></span>Schedulre: '+data[i].class_sched+'</li>'+
                                      '</ul>'+
                                    '</div>'+
                                    '<div class="col-5 text-center">'+
                                      '<img src="<?php echo base_url(); ?>assets/background/'+data[i].courseBackground+'" alt="user-avatar" class="img-circle img-fluid">'+
                                    '</div>'+
                                  '</div>'+
                                '</div>'+
                                '<div class="card-footer">'+
                                  '<div class="text-right">'+
                                    '<a href="javascript:void(0)" data-class_code="'+data[i].class_code+'" class="btn btn-sm btn-warning join_class">'+
                                      '<i class="fas fa-user-plus"></i> Join Class'+
                                    '</a>'+
                                  '</div>'+
                                '</div>'+
                              '</div>'+
                             '</div>';
                      }
                    }
                $('.my_join_clas').html(html);
              }
            });
        }

         $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
              $('input[name="set_interval"]').val('1');
             show_class_search();
            }
            else
            {
              $('input[name="set_interval"]').val('0');
              show_class();
            }
         });

      setInterval(function(){
        var interval = $('input[name="set_interval"]').val();
        if(interval == '0'){
          show_class();
        }
      }, 2000) 


});
</script>