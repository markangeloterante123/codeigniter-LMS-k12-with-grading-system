<div class="col-md-4">
       
          </div>
        </div>
      </div>
    </section>
  </div>



<script type="text/javascript">
  $(document).ready(function () {
      online_adminProf();
      show_class();

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

      setInterval(function(){
        show_class();
      }, 2000) 

});
</script> 

