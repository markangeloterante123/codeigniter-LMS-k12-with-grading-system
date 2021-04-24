<footer class="footer-area">
        <!-- Top Footer Area -->
        <div style="background: maroon;" class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <p style="color:white;"><a style="color:white;" href="#">
Copyright &copy; All rights reserved | This Backend is made by: <a href="#"  style="color:white;">M.A.T</a>
                        </p>
                        <p style="color:white;"><a style="color:white;" href="#">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"  style="color:white;">Colorlib</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo base_url(); ?>assets/home/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/bootstrap/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/plugins/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/active.js"></script>
</body>

</html>


<script type="text/javascript">
    $(document).ready(function (){
        
       $('.view_images').click(function(){  
         $('.display_images').html('');
          $('#images_big').modal("show");
          var id = $(this).data('id');
          $.ajax({
                url:'<?=base_url()?>index.php/pages/ajax_display_click',
                type: 'POST',
                data:{id:id},
                dataType : "JSON",
                error: function() {
                        alert('Show info Error');
                     },
                success: function (data) {   
                    var html = '';       
                    for(i=0; i<data.length; i++){
                        html += 
                        '<button style="background-image: linear-gradient(to bottom right,maroon, #fffdd0);" type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                            '<span aria-hidden="true">Closed</span>'+
                          '</button>'+
                          '<div class="bg-img d-flex align-items-center justify-content-center" style="height:650px; ">'+
                            '<img style="height:100%; width:100%;" src="<?php echo base_url(); ?>/assets/background/'+data[i].image+'">'
                            '</div>';
                      }
                  $('.display_images').html(html);
                }
              });
      });      

  });
</script>