

<!-- <div id="body"> 
  
<div style="background: maroon;" id="chat-circle" class="btn btn-raised">
        <div id="chat-overlay"></div>
        <h5><i class="nav-icon far fa-comments"></i></h5>
  </div>
  
  <div style="border:solid 2px black;"  class="chat-box">

    <div style="background-image: linear-gradient(to bottom right, #800000, #CC3300); " class="chat-box-header">
      <span href="javascript:void(0)" class="chat-box-toggle cancelbtn"><span aria-hidden="true">&times;</span></span>
      <div class="titleBox"></div>
    </div>


    <div class="form-group searchBox">
    <div  class="input-group">
      <input  type="text" name="search_text" id="search_text" placeholder="Search Students/Admin here!" class="form-control" />
    </div>
   </div>
  

   <div  class="chat-box-body">
      <input type="hidden" name="chat_id">
      <input type="hidden" name="chat_code">
      <input type="hidden" name="chat_mode">
      <div class="chat-box-overlay">
      <div class="chat-logs" id="result">
     
      </div>
   </div>
   </div>

    <div class="chat-input">      
        
    </div>
  </div> 
</div> -->



 <footer style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC); color:white;" class="main-footer">
    <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script><a href="#"> M.A.T</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- <script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery/jquery.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery-ui/jquery-ui.min.js"></script> -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sparklines/sparkline.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/jqvmap/maps/jquery.vmap.usa.js"></script><script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="<?php echo base_url(); ?>assets/page/pages/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/dist/js/adminlte.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/select2/js/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/dropzone/min/dropzone.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/filterizr/jquery.filterizr.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/toastr/toastr.min.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/dropzone.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweet/sweetalert-dev.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweet/sweetalert.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/page/chat.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/page/clock.js"></script>
 --><!-- <script src="<?php echo base_url(); ?>assets/page/function.js"></script>   -->  



<script>
  $(document).ready(function () {
    function online(){
      var id = $('input[name="userid"]').val();
       $.ajax({
              url:'<?=base_url()?>index.php/pages/time_ol',
              type: 'POST',
              data:{id:id},
              dataType : "JSON"
          });
    }
    setInterval(function(){
        online();
    }, 2000) 

  });
</script>

<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>

<script>
  $(document).ready(function () {


    function online(){
      var id = $('input[name="userid"]').val();
       $.ajax({
              url:'<?=base_url()?>index.php/pages/time_ol',
              type: 'POST',
              data:{id:id},
              dataType : "JSON"
          });
    }

    setInterval(function(){
        online();
    }, 5000) 

  });
</script>


</body>
</html>


 