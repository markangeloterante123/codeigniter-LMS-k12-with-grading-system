<div class="col-md-4">
        
            
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="modal fade" id="send_request_files">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Request Filess</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post" id="import_form" enctype="multipart/form-data">
              <textarea style="height: 100px;"  class="form-control display" id="text_response" name="text_response" > 
              </textarea>
              <hr>
                <div class="btn btn-info">
                    <input type="hidden" name="post_id_submit">
                    <!-- <input type="text" name="student_id"> -->
                    <input type="file" id="files" name="files[]" multiple>
                    <a title="Remove File to Upload" href="javascript:void(0)" class="btn btn-warning clear_upload"><i class="fas fa-times"></i></a>
                </div>
                <input style="margin-top: 5px;" type="submit" class="btn btn-success" value="SUBMIT">
              </form>
            </div>
           <!--  <div class="modal-footer justify-content-between">
              <a href="javascript:void(0)" class="btn btn-outline-light submit_comment"><i class="far fa-paper-plane"></i> Submit</a>
            </div> -->
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



<script type="text/javascript">
  $(document).ready(function () {
      ajax_no_reports();
      count_allFiles();
    $('.clear_upload').click(function(){
      $('input[id="files"]').val('');
    });

    //--- all the records
     function ajax_no_reports(){
            $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_reports',
              type: 'POST',
              dataType : "JSON",
              success: function (data) {
                var report = '';
                var request = '';
                // var files = '';
                var students = '';
                  for(i=0; i<data.length; i++){
                      report +='<h4>'+data[i].concern+'</h4>';
                      request +='<h4>'+data[i].request+'</h4>';
                      // files += '<h4>'+data[i].sent_file+'</h4>';
                      students += '<h4>'+data[i].student+'</h4>';
                    }
                $('.ajax_reports').html(report);
                $('.ajax_student').html(students);
               
                $('.ajax_request').html(request);
              }
            });
        }
    //--- end here
    //--- count all files inside the LMS
     function count_allFiles(){
            $.ajax({
              url:'<?=base_url()?>index.php/pages/count_allFiles',
              type: 'POST',
              dataType : "JSON",
              success: function (data) {
                $('.ajax_files').html(data.length);
              }

            });
        }

    //--- end here
        
      function ajax_table_pages(){
          var pages=''
          pages +=
            '<div class="card-header border-transparent">'+
                '<h3 class="card-title title"></h3>'+
                 '<div class="card-tools">'+
                  '<a href="javascript:void(0)" class="btn btn-success history"><i class="fas  fa-database"></i></a>'+' '+
                  '<a href="javascript:void(0)" class="btn btn-danger close_table"><i class="fas fa-times"></i></a>'+
                  // '<button type="button" class="btn btn-danger" data-card-widget="remove">'+
                  //   '<i class="fas fa-times"></i>'+
                  // '</button>'+
                '</div>'+
              '</div>'+
          
              '<div class="card-body p-0">'+
                '<div class="table-responsive">'+
                  '<table class="table m-0">'+
                    '<thead>'+
                    '<tr>'+
                      '<th>STUDENTS</th>'+
                      '<th>CONCERNS</th>'+
                      '<th>DETAIL</th>'+
                      '<th>DATE</th>'+
                      '<th>ACTION</th>'+
                    '</tr>'+
                    '</thead>'+
                    '<tbody class="ajax_table">'+

                    '</tbody>'+
                  '</table>'+
                '</div>'+
              '</div>';
          $('.ajax_display_table').html(pages);  
        }

        function ajax_history_reports(){
          var pages=''
          pages +=
            '<div class="card-header border-transparent">'+
                '<h3 class="card-title title">History Reports</h3>'+
                 '<div class="card-tools">'+
                  '<a href="javascript:void(0)" class="btn btn-success history"><i class="fas  fa-database"></i></a>'+' '+
                  '<a href="javascript:void(0)" class="btn btn-danger close_table"><i class="fas fa-times"></i></a>'+
                '</div>'+
              '</div>'+
          
              '<div class="card-body p-0">'+
                '<div class="table-responsive">'+
                  '<table class="table m-0">'+
                    '<thead>'+
                    '<tr>'+
                      '<th>#</th>'+
                      '<th>STUDENT NAMES</th>'+
                      '<th>CONCERN</th>'+
                      '<th>DATE</th>'+
                      '<th>PROCESS BY:</th>'+
                      '<th>DETAIL</th>'+
                    '</tr>'+
                    '</thead>'+
                    '<tbody class="text_history">'+

                    '</tbody>'+
                  '</table>'+
                '</div>'+
              '</div>';
          $('.ajax_display_table').html(pages);  
        }

      function ajax_report_detail(){
           $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_report_detail',
              type: 'POST',
              dataType : "JSON",
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                      html += 
                       '<tr>'+
                         '<td>'+data[i].name+'</td>'+
                         '<td>'+data[i].title+'</td>'+
                         '<td>'+'<a href="javascript:void(0)" class="btn btn-default details" data-id="'+data[i].id+'"><i class="fas  fa-info"></i> Details</a>'+
                         '</td>'+
                         '<td>'+data[i].date+'</td>'+
                         '<td>'+
                           '<a href="javascript:void(0)"  data-id="'+data[i].student_id+'" class="btn btn-info action"><i class="far fa-comment"></i> Send Files</a>'+' '+
                           '<a href="javascript:void(0)" style="color:white;" data-id="'+data[i].id+'" class="btn btn-warning solution"><i class="fas fa-cogs"></i> Solution Report</a>'+' '+
                           '<a href="javascript:void(0)" data-id="'+data[i].id+'" class="btn btn-success solved"><i class="fas fa-check"></i> Solved</a>'+
                         '</td>'+
                       '</tr>';
                    }
                $('.ajax_table').html(html);
              }
            });
        }

         $('.ajax_display_table').on('click','.solved',function (){
          var id =$(this).data('id');
             $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_report_ok',
              data:{id:id},
              type: 'POST',
              dataType : "JSON",
              error: function() {
                      alert('Reports Errors History');
                   },
              success: function (data) {
                swal("Process Success!", "Process save in History", "success");
                ajax_report_detail();
                ajax_no_reports();
              }
            });
        });

        function text_history(){
           $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_history_reports',
              type: 'POST',
              dataType : "JSON",
              error: function() {
                      alert('Reports Errors History');
                   },
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                    if(i <= 10){
                       html += 
                        '<tr>'+
                        '<td>'+data[i].id+'</td>'+
                        '<td>'+data[i].name+'</td>'+
                        '<td>'+data[i].title+'</td>'+
                        '<td>'+data[i].date+'</td>'+
                        '<td>'+data[i].responded_by+'</td>'+
                        '<td><a href="javascript:void(0)" data-id="'+data[i].id+'" class="btn btn-info history_detail">Information</a></td>'+
                        '</tr>'
                       ;
                    }
                    }
                $('.text_history').html(html);
              }
            });
        }

        $('.ajax_display_table').on('click','.close_table',function (){
           $('.ajax_display_table').html('');    
        });

        $('.ajax_display_table').on('click','.history_detail',function (){
          var id = $(this).data('id');
          $('#information').modal('show');  
           $.ajax({
                    url:'<?=base_url()?>index.php/pages/ajax_detail',
                    type: 'post',
                    data:{id:id},
                    dataType : "JSON",
                    error: function() {
                            alert('Something is wrongs');
                         },
                    success: function (data) {
                      var html = '';
                        for(i=0; i<data.length; i++){
                              html += 
                               '<p>'+data[i].solution+'</p>';
                            }
                        $('.text_display').html(html);
                    }
              }); 
        });
       $('.ajax_display_table').on('click','.details',function (){
          var id = $(this).data('id');
          $('#information').modal('show');  
           $.ajax({
                    url:'<?=base_url()?>index.php/pages/ajax_detail',
                    type: 'post',
                    data:{id:id},
                    dataType : "JSON",
                    error: function() {
                            alert('Something is wrongs');
                         },
                    success: function (data) {
                      var html = '';
                        for(i=0; i<data.length; i++){
                              html += 
                               '<p>'+data[i].concern+'</p>';
                            }
                        $('.text_display').html(html);
                    }
              }); 
        }); 


       $('.ajax_display_table').on('click','.action',function (){
          var id = $(this).data('id');
          $('input[name="post_id_submit"]').val(id);
          $('#send_request_files').modal('show'); 
            $.ajax({
                    url:'<?=base_url()?>index.php/pages/ajax_detail',
                    type: 'post',
                    data:{id:id},
                    dataType : "JSON",
                    success: function (data) {
                      var html = '';
                        for(i=0; i<data.length; i++){
                              html += data[i].response;
                            }
                        $('.display').html(html);
                    }
              }); 
        }); 
       $('.ajax_display_table').on('click','.solution',function (){
          var id = $(this).data('id');
          $('[name="id"]').val(id);
          $('#solutions_taken').modal('show');  
        });

        $('.ajax_display_table').on('click','.history',function (){
           ajax_history_reports();
           text_history();
        });
       $('.save_documentation').click(function(){
            var id = $("input[name='id']").val();
            var text = $("textarea[name='text_record']").val();
              $.ajax({
                    url:'<?=base_url()?>index.php/pages/ajax_save_solution',
                    type: 'post',
                    data:{id:id, text:text},
                    dataType : "JSON",
                    error: function() {
                            alert('Failed to send');
                         },
                    success: function (data) {
                        $('[name="text_record"]').val("");
                        swal("Process Success!", "", "success");
                        $('#solutions_taken').modal('hide'); 
                    }
              }); 
        });

       // $('#import_form').on('submit', function(event){
       //  event.preventDefault();
       //  var file = $('input[id="files"]').val();
       //    if(file==''){
       //        swal("Process Error!", "No Data to Process", "error");
       //    }
       //    else{
       //         $.ajax({
       //             url:"<?php echo base_url(); ?>pages/send_registrar_files",
       //             method:"POST",
       //             data:new FormData(this),
       //             contentType:false,
       //             cache:false,
       //             processData:false,
       //             error: function() {
       //              swal("Process Error!", "Submitted Cancel", "error");
       //             },
       //             success:function(data){     
       //              swal("Process Success!", "File Submitted", "success");
       //              $('input[name="text_response"]').val('');
       //             }
       //        })
       //    }
       // });


      $('.reports').click(function(){
         ajax_table_pages();
         var title='';
             title='Student Reports';
         $('.title').html(title);
         ajax_report_detail();
      });    
      setInterval(function(){
        ajax_no_reports();
      }, 2000) 

});
</script> 

