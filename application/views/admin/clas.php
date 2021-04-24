<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
         <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/adm2/clas" class="nav-link active">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                MY CLASS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/adm2/gal" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                BULLETIN PAGE
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/adm/upl" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                FILES
              </p>
            </a>
          </li>
    
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/adm2/act" class="nav-link">
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

<?php
  $id = $this->session->all_userdata();
  if(isset($id['admin_session'])){
    $user = $id['admin_session'];
?>

  <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white">List of Class</h1>
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

    <section class="content">
      <a href="<?php echo base_url(); ?>pages/adm/cre" class="btn btn-success"><h3><i class="nav-icon fas fa-plus"></i> Create Class</h3></a>
      <hr>
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">


            <?php 
              $data=$user;
              $field="admin_id";
              $table="tbl_class";
              foreach ($this->load->model_users->dataClass($data,$field,$table) as $value) {
                $subject = $value->course;
                $code = $value->class_subject;
                $prof = $value->admin;
                $profile = $value->courseBackground;
                $member = $value->no_student;
                $section = $value->section_yr;
                $class_code = $value->class_code;
                $request = $value->request;
                $sched = $value->class_sched;

                $secyr = bin2hex($section);
                $class = bin2hex($class_code);
                $codes  = bin2hex($code);
            ?>
            <?php if($id != $user ): ?>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                 <?php echo $subject; ?>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo $code; ?></b></h2>
                      <p class="text-muted text-sm"><b>Professor: </b> <?php echo $prof;?></p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-desktop"></i></span> <?php echo $section; ?></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-users"></i></span>Students: <?php echo $member; ?></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user-plus"></i></span>Request:<?php echo $request; ?></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar-alt"></i></span>Schedule:<?php echo $sched; ?></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img style="border: 0.9px solid black;" src="<?php echo base_url(); ?>assets/background/<?php echo $profile; ?>" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <button type="button" class="btn btn-flat btn-default dropdown-hover dropdown-icon" data-toggle="dropdown"><i class="fas fa-arrow-right"></i> OPEN CLASS</button>
                    <div class="dropdown-menu" role="menu">
                      <a href="<?php echo base_url(); ?>pages/enterClass/<?php echo $class; ?>/<?php echo $secyr; ?>/<?php echo $codes ?>/grade" class="dropdown-item"><i class="fas fa-arrow-right"></i> ENTER CLASS</a>
                      <a href="javascript:void(0)" data-code="<?php echo $class_code; ?>" class="dropdown-item edit_class"><i class="fas fa-edit"></i> EDIT CLASS INFORMATIONS</a>
                      <a href="javascript:void(0)" data-code="<?php echo $class_code; ?>" class="dropdown-item delete_class"><i class="fas fa-times"></i> REMOVE CLASS</a>
                     </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php } ?>
          </div>
        </div>
      </div>

    </section>
  </div>
  <?php } ?>

  <div class="modal fade" id="edit_information">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url(); ?>pages/update_class" method="post">
                  <input type="hidden" name="class_code_update">
                  <div class="form-group">
                    <label for="subject">Subject Name:</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                  </div>
                  <div class="form-group">
                    <label for="subcode">Subject Code:</label>
                    <input type="text" class="form-control" name="subcode" id="subcode"  required>
                  </div>
                  <div class="form-group">
                    <label for="subcode">Subject Unit:</label>
                    <input type="text" class="form-control" name="unit" id="unit"  required>
                  </div>
                  <div class="form-group">
                    <label for="section">Class Section & Year:</label>
                    <input type="text" class="form-control" name="section" id="section" >
                  </div>
                  <div class="form-group">
                    <label for="section">K-12 / College:</label>
                    <select class="form-control" name="type_class">
                      <option value="k12-1st" > K-12 1st Semister</option>
                      <option value="k12-2nd"> K-12 2nd Semister</option>
                      <option value="col-1st"> College 1st Semister</option>
                      <option value="col-2nd"> College 2nd Semister</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="section">Written Work:</label>
                    <input type="text" class="form-control" name="ww" id="ww" >
                  </div>
                  <div class="form-group">
                    <label for="section">Performance Task:</label>
                    <input type="text" class="form-control" name="pt" id="pt" >
                  </div>
                  <div class="form-group">
                    <label for="section">Quarter Assesment:</label>
                    <input type="text" class="form-control" name="qa" id="qa" >
                  </div>
                  <div class="form-group">
                    <label for="section">Class Schedule:</label>
                    <input type="text" class="form-control" name="schedule" id="schedule" required>
                  </div>
                  <input type="submit" class="btn btn-flat btn-block btn-success" value="UPDATE">
                </form>       
            </div>
          </div>
        </div>
      </div>

  <script type="text/javascript">
  $(document).ready(function () {

    //--- display the information of class
    $('.edit_class').click(function(){
        var code = $(this).data('code');
        $('input[name="class_code_update"]').val(code);
        $('#edit_information').modal('show');
        $.ajax({
          url:'<?=base_url()?>index.php/pages/display_class_info',
          type: 'POST',
          data:{code:code},
          dataType : "JSON",
          success: function (data) {    
            for(i=0; i<data.length; i++){
              $('input[name="subject"]').val(data[i].course);
              $('input[name="subcode"]').val(data[i].class_subject);
              $('input[name="unit"]').val(data[i].unit);
              $('input[name="section"]').val(data[i].section_yr);
              $('input[name="ww"]').val(data[i].ww);
              $('input[name="pt"]').val(data[i].pt);
              $('input[name="qa"]').val(data[i].qa);
              $('input[name="schedule"]').val(data[i].class_sched);
            }
          }
      });
    });
    //--- end here
    //--- delete class
    $('.delete_class').click(function(){
      var code = $(this).data('code');
      swal({
              title:"Delete",
              text: "Are you sure you want to delete this class?",
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
                  url:'<?=base_url()?>index.php/pages/delete_class',
                  type: 'POST',
                  data:{code:code},
                  dataType : "JSON",
                  success: function (data) {   
                      window.open("<?php echo base_url(); ?>dash/admin_dash/success","_self");
                      swal("success","","success");
                    }
                  });  
              } else {
                swal("Canceled", "", "error");
              }
            });
    }); 
    //--- end here

  });
  </script>