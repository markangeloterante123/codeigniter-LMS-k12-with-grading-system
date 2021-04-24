<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>pages/reg/home" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg/file" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                RESOURCES
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/stud_info" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                STUDENTS
              </p>
            </a>       
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/gal" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                BULLETIN PAGE
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg/stud" class="nav-link">
              <i class="fas fa-list nav-icon"></i>
                <p>LIST</p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/class" class="nav-link">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                ADMIN ACCOUNTS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/reg2/cal" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                CALENDAR
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a style="margin-right: 5px;padding-right: px;" data-toggle="modal" data-target="#set-sem" class="nav-link">
              <i class="far fas fa-cog nav-icon"></i>
              <p>
                SET NEW-SEM
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  

      <div class="modal fade" id="information">
        <div class="modal-dialog">
          <div class="modal-content bg-info">
            <div class="modal-body text_display">
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <div class="modal fade" id="comment">
        <div class="modal-dialog">
          <div class="modal-content bg-secondary">
            <div class="modal-header">
              <h4 class="modal-title">Send Comment</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <textarea style="height: 100px;"  class="form-control display" id="text_response" name="text_response" > 
              </textarea>
            </div>
            <div class="modal-footer justify-content-between">
              <a href="javascript:void(0)" class="btn btn-outline-light submit_comment"><i class="far fa-paper-plane"></i> Submit</a>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="solutions_taken">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Record Action Taken</h4>
            </div>
            <div class="modal-body">
              <textarea style="height: 100px;"  class="form-control display" id="text_record" name="text_record" > 
              </textarea>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="javascript:void(0)" class="btn btn-primary save_documentation"><i class="far fa-folder"></i> Save</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


<input type="hidden" name="id">


 <div style="background-image: linear-gradient(to bottom right, #FF6600, #FF9966, #FFCC99, #FFFFCC);" class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:white;" class="m-0">Dashboard</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li style="color:white;" class="breadcrumb-item">Home</li>
              <li style="color:white;" class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-danger elevation-1"><a href="javascript:void(0)" class="reports"><i class="far fa-comment"></i></a></span>

              <div class="info-box-content">
                <span class="info-box-text">Student Concerns</span>
                <span class="info-box-number ajax_reports"></span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><a href="<?php echo base_url(); ?>pages/reg/stud"><i class="fas fa-user"></i></a></span>
              <div class="info-box-content">
                <span class="info-box-text">Request For Approval</span>
                <span class="info-box-number ajax_request"></span>
              </div>
            </div>
          </div>

          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cloud-upload-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Uploaded Files</span>
                <span class="info-box-number ajax_files"></span>
              </div>
            </div>
          </div>
         <!--  <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Students</span>
                <span class="info-box-number ajax_student"></span>
              </div>
            </div>
          </div> -->
        </div>

       

       <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="ajax_display_table">
                <!--ajax display of table information-->
              </div> 
            </div>
          </div>
       </div>


       <!--copy up here-->
        <div class="row">
          <div class="col-md-12">
             <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title master_total"></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- PIE CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">STUDENTS CONCERN</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (LEFT) -->
          <div class="col-md-6">
            <!-- BAR CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">FINAL GRADES SUBMITTED</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="gradeChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- STACKED BAR CHART -->
           <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">STUDENT OVERALL PASSING RATE</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="passChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
        </div>
      </div>
    </section>
 </div>

<script src="<?php echo base_url(); ?>assets/page/pages/plugins/chart.js/Chart.min.js"></script>

<script>
  $(function () {
          $.ajax({
              url:'<?=base_url()?>index.php/pages/ajax_masterlist_search',
              type: 'POST',
              dataType : "JSON",
              success: function (data) {

                  var stud = [];
                  var noAccount = 0;
                  var active = 0;
                  var request = 0;
                  for(i=0; i<data.length; i++){
                      if(data[i].lms_acc == '0'){
                          noAccount += 1;
                      }
                      else if(data[i].lms_acc == '1'){
                        active += 1;
                      }
                      else{
                        request += 1;
                      }
                  }
                  stud.push(noAccount);
                  stud.push(active);
                  stud.push(request);
                  $('.master_total').html('STUDENT MASTERLIST: ' + '<i class="fas fa-users"></i> '+ data.length );

                 var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
                  var donutData        = {
                    labels: [
                          'NO ACCOUNTS',
                          'WITH LMS',
                          'REQUEST',
                      ],
                    datasets: [
                      {
                        data:stud,
                        backgroundColor : ['#f39c12', '#00a65a', '#00c0ef', '#3c8dbc', '#d2d6de'],
                      }
                    ]
                  }
                  var donutOptions     = {
                    maintainAspectRatio : false,
                    responsive : true,
                  }
                  var donutChart = new Chart(donutChartCanvas, {
                    type: 'pie',
                    data: donutData,
                    options: donutOptions
                  })
              }
            });
  })
</script>          


<script>
  $(function () {
          $.ajax({
              url:'<?=base_url()?>index.php/pages/student_concernGraph',
              type: 'POST',
              dataType : "JSON",
              success: function (data) {
                  var stud = [];
                  var solve = 0;
                  var notSolve = 0;
                  for(i=0; i<data.length; i++){
                      if(data[i].status == '0'){
                        solve += 1;
                      }
                      else{
                        notSolve += 1;
                      }
                  }
                  stud.push(solve);
                  stud.push(notSolve);

                 var donutChartCanvas = $('#pieChart').get(0).getContext('2d')
                  var donutData        = {
                    labels: [
                          'SOLVE',
                          'PENDING...',
                      ],
                    datasets: [
                      {
                        data:stud,
                        backgroundColor : ['green', 'red'],
                      }
                    ]
                  }
                  var donutOptions     = {
                    maintainAspectRatio : false,
                    responsive : true,
                  }
                  var donutChart = new Chart(donutChartCanvas, {
                    type: 'pie',
                    data: donutData,
                    options: donutOptions
                  })
              }
            });
  })
</script>   

<script>
  $(function () {
          $.ajax({
              url:'<?=base_url()?>index.php/pages/student_gradesGraph',
              type: 'POST',
              dataType : "JSON",
              success: function (data) {
                  var stud = [];
                  var graded = 0;
                  var not = 0;
                  for(i=0; i<data.length; i++){
                      if(data[i].f_grade >= '1'){
                        graded += 1;
                      }
                      else{
                        not += 1;
                      }
                  }
                  stud.push(graded);
                  stud.push(not);

                 var donutChartCanvas = $('#gradeChart').get(0).getContext('2d')
                  var donutData        = {
                    labels: [
                          'GRADED',
                          'NO GRADES...',
                      ],
                    datasets: [
                      {
                        data:stud,
                        backgroundColor : ['blue', 'orange'],
                      }
                    ]
                  }
                  var donutOptions     = {
                    maintainAspectRatio : false,
                    responsive : true,
                  }
                  var donutChart = new Chart(donutChartCanvas, {
                    type: 'pie',
                    data: donutData,
                    options: donutOptions
                  })
              }
            });
  })
</script> 
<script>
  $(function () {
          $.ajax({
              url:'<?=base_url()?>index.php/pages/student_gradesGraph',
              type: 'POST',
              dataType : "JSON",
              success: function (data) {
                  var stud = [];
                  var graded = 0;
                  var not = 0;
                  for(i=0; i<data.length; i++){
                      if(data[i].f_grade >= '75'){
                        graded += 1;
                      }
                      else if(data[i].f_grade >= '60'){
                        not += 1;
                      }
                  }
                  stud.push(graded);
                  stud.push(not);

                 var donutChartCanvas = $('#passChart').get(0).getContext('2d')
                  var donutData        = {
                    labels: [
                          'PASSED',
                          'FAILED',
                      ],
                    datasets: [
                      {
                        data:stud,
                        backgroundColor : ['green', 'orange'],
                      }
                    ]
                  }
                  var donutOptions     = {
                    maintainAspectRatio : false,
                    responsive : true,
                  }
                  var donutChart = new Chart(donutChartCanvas, {
                    type: 'pie',
                    data: donutData,
                    options: donutOptions
                  })
              }
            });
  })
</script> 
