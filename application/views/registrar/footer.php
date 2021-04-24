  <div class="modal fade" id="set-sem">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body ">
                <div class="form-group">
                  <label>SEMESTER</label>
                  <input type="text" class="form-control" name="sem" placeholder="SEM-E.Y">
                </div>
            </div>
            <div class="modal-footer">
            <a href="javascript:void(0)" class="btn btn-flat btn-block btn-info update_sem"><i class="fas fa-university"></i> NEW SEMESTER</a>
            </div>
          </div>
        </div>
      </div>




 <footer style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC); color:white;" class="main-footer">
    <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script><a href="#"> M.A.T</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>
</div>
<!-- <script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery/jquery.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/page/pages/plugins/jquery-ui/jquery-ui.min.js"></script> -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

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

<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweet/sweetalert-dev.js"></script>
<script src="<?php echo base_url(); ?>assets/page/pages/plugins/sweet/sweetalert.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/page/chat.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/page/clock.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/page/function.js"></script>   -->  


<script>
  $(document).ready(function () {

    //--- updating the semester
    $('.update_sem').click(function(){
      var sem = $('input[name="sem"]').val();
      swal({
              title:"NEW SEMESTER",
              text: "Are you sure you want to the school semester into "+sem+"?",
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
                    url:'<?=base_url()?>index.php/pages/newSem',
                    type:'post',
                    data:{sem:sem},
                    dataType:"JSON",
                    success: function (data) { 
                      swal("SUCCESS","Welcome to "+sem+"","success");
                      $('#set-sem').modal('hide');
                    }
                  });
              } else {
                swal("Cancelled", "", "error");
              }
            }); 
      
    });
    //--- end here

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
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
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


</body>
</html>


 