<div class="col-md-4">
          <!-- <div style="background-image: linear-gradient(to bottom right, #800000, #CC3300);" class="info-box mb-3 ">
              <div class="user-block">
              <canvas  id="my_canvas" width="310" height="300"></canvas> 
              <p class="info-box-text" id='ct' style=" font-size:13px; color: white;"></p>          
              </div>
          </div> -->   

          </div>
        </div>
      </div>
    </section>
  </div>

  



<script type="text/javascript">
  $(document).ready(function () {
      show_class();
      online_adminProf();
       function show_class(){
        var id = $("input[name='userid']").val();
        $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_show_class',
              data:{id:id},
              type: 'POST',
              dataType : "JSON",
              error: function() {
                      alert('Show info Error');
                   },
              success: function (data) {        
                var html='';
                  for(i=0; i<data.length; i++){
                      html +=
                      '<div class="col-12 col-sm-6 col-md-3">'+
                        '<a href="<?php echo base_url(); ?>pages/adm2/clas" style="color: black;">'+
                        '<div class="info-box mb-3">'+
                          '<span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>'+
                          '<div class="info-box-content">'+
                            '<span class="info-box-text">'+data[i].class_subject+' ['+data[i].section_yr+']</span>'+
                              '<span class="info-box-number ">Request:'+data[i].request+'</span>'+
                          '</div>'+
                        '</div>'+
                        '</a>'+
                      '</div>';
                  }
                  $('.displayAllClass').html(html);
              }
            });
         }

        // function online_adminProf(){
        //   var id = $('input[name="userid"]').val();
        //    $.ajax({
        //       url:'<?=base_url()?>index.php/pages/ajax_allPerson_stud',
        //       type: 'POST',
        //       data:{id:id},
        //       dataType : "JSON",
        //       success: function (data) {
        //         var time = '';
        //         var html = '';
        //         var ids = $('input[name="userid"]').val();
        //         var ol = $('input[name="time_online"]').val();
        //         var id = parseInt(ids);
        //           for(i=0; i<data.length; i++){
        //                 if(data[i].id == ids){
        //                   time = data[i].ol_status;
        //                   $('input[name="time_online"]').val(time);
        //                 }
        //                 else if(data[i].department >='2'){
        //                   if(data[i].ol_status >= ol){
        //                   html += 
        //                    '<li>'+
        //                     '<img style="height:10vh; width:10vh;" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="User Image">'+
        //                     '<a class="users-list-name" href="#">'+data[i].nickname+'</a>'+
        //                     '<span class="users-list-date"><i class="fas fa-circle text-success"></i> Online</span>'+
        //                   '</li>';
        //                   }
        //                   else{
        //                     html += 
        //                    '<li>'+
        //                     '<img style="height:10vh; width:10vh;" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="User Image">'+
        //                     '<a class="users-list-name" href="#">'+data[i].nickname+'</a>'+
        //                     '<span class="users-list-date"><i class="fas fa-circle text-danger"></i> Offline</span>'+
        //                   '</li>';
        //                   }
        //                 }   
        //             }
                  
        //         $('.onlineMem').html(html);
              
        //       }
        //     });
        // }


      setInterval(function(){
        show_class();
      }, 2000) 

});
</script> 

