<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
--> 
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>svjc</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url() ?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>/dist/css/skins/skin-blue.min.css">

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SCJC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Svjc </b>College</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
                   
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?= base_url() ?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?= $this->session->name.' '.$this->session->last_name?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?= base_url() ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Chaitanya Pote - Admin
                  <small>Date: 22-Sep-2019</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li> -->
                <!-- /.row -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a href="<?= base_url('Login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
 Admission Form         </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url() ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $this->session->name.' '.$this->session->last_name?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Main Navigation</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?= base_url('Dashboard')?>"><i class="fa fa-circle-o text-red"></i> <span>Student Fees</span></a></li>
        <li><a href="<?= base_url('Daily_expenses')?>"><i class="fa fa-circle-o text-aqua"></i> <span>Daily Expenses</span></a></li>
      <!--   <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Report</span></a></li> -->
        <!-- <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="starter.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Class Name 
        <small>Address: Pune</small>
      </h1>
      <br>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>
    <div class="row">
      <div class="col-md-12">
        <div class="">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><b>11th Student</b></span>
                  <span class="info-box-number"><?= !empty($el)?count($el):'0'?><small></small></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><b>12th Student</b></span>
                  <span class="info-box-number"><?= !empty($tw)?count($tw):'0'?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><b>Total Student</b></span>
                  <span class="info-box-number"><?= !empty($all_stuednt)?count($all_stuednt):'0'?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><b>Collection (₹)</b></span>
                  <span class="info-box-number"><?= !empty($total_coll)?$total_coll[0]->total:'0'?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
      </div>
    </div>
  
      <div class="">
          <div class="col-md-12">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">Add Student</button>
          </div>
      </div>
      <br><br>
      <?= $this->session->flashdata('msg')?>
    <!-- Main content -->
    <section class="content" style="display: flex;">

<div class="table-responsive" style="background-color: #fff; padding: 10px;">
	<div>
		<h3><b>Student List</b></h3>
	</div>
 
<hr>    
<br>     
 <?= form_open('Dashboard'); ?>  
 <div class="row">
   <div class="form-group col-md-3">
      <label for="sel1">Student Class:</label>
      <select class="form-control" name="class" id="class">
        <option value="">Select Class</option>
        <option value="11" <?= (set_value('class')=='11')?'selected':''?>>11th (Sci)</option>
        <option value="12" <?= (set_value('class')=='12')?'selected':''?>>12th (Sci)</option>
        <!-- <option>11th & 12th (Sci)</option> -->
      </select>
    </div>
     <div class="form-group col-md-3">
     <span><b>Start Date:</b> <input type="date" class="form-control" name="start_date" value="<?= set_value('start_date')?>"> </span>
    </div>
     <div class="form-group col-md-3">
      <span> <b> End Date:</b> <input type="date" class="form-control" name="end_date" value="<?= set_value('end_date')?>"></span>
    </div>
    <div class="form-group col-md-2">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
 </div> 

   </form>
<br>
  <table id="myTable" class="table-bordered">
    <thead>
      <tr>
      	<th>Roll No:</th>
        <th>Student Full Name</th>
        <th>Student Class</th>
        <th>Date of Birth</th>
        <th>Admission Stream</th>
        <th>Admission Date</th>
        <th>College Name</th>
        <th>Contact Number</th>
        <th>Parent Contact Number</th>
        <th>Address</th>
        <th>Total Paid</th>
        <th>Balance</th>
        <th>View & Edit Detail</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($all_stuednt as $key => $value) { ?>
         <tr>
        <td><?= $value->id ?></td>
        <td><?= $value->student_name ?></td>
        <td><?= $value->class.'th' ?></td>
        <td><?= $value->dob ?></td>
        <td><?= $value->c_adm_yaer ?></td>
        <td><?= $value->added_date ?></td>
        <td><?= $value->p_college_name ?></td>
        <td><?= $value->contact_number ?></td>
        <td><?= $value->p_contact_number ?></td>
        <td><?= $value->p_address ?></td>
        <td>5000</td>
        <td>20000</td>
        <td>
        
          <button type="button" class="btn btn-primary" onclick="student_details('<?= $value->id ?>')" data-toggle="modal" data-target="#viewStudentModal"><i class="fa fa-eye" aria-hidden="true"></i></button> 
          <button type="button" onclick="view_studentby_id('<?= $value->id ?>')" class="btn btn-primary pull-right" data-toggle="modal" data-target="#editStudentModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
      </tr>
       <?php } ?>
     
   
    </tbody>
  </table>
</div>
      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->

  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019-2020 <a href="#"><?= $this->session->name.' '.$this->session->last_name ?> </a>.</strong> All rights reserved.
  </footer>

  <!-- addStudentModal -->
<div id="addStudentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Admission Form</h4>
      </div>
      <div class="modal-body">
        <div> 
          <?= form_open('Dashboard/Add',array('class' => 'form')); ?>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Privious College Name</label>
                <input type="text" class="form-control" name="p_college_name" id="p_colleg_name" required="" placeholder="Enter Privious College Name">
              </div>
              <div class="form-group col-md-6">
                <label for="name">Privious Year & Class</label>
                <input type="text" class="form-control" name="p_year_class" id="p_year_class" required="" placeholder="Enter Privious Year & Class">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Privious Admission Year</label>
                <input type="text" required="" class="form-control" name="p_adm_year" id="p_adm_year" placeholder="Enter Privious Admission Year">
              </div>
              <div class="form-group col-md-6">
                <label for="name">Current Admission Year</label>
                <input type="text" class="form-control" name="c_adm_year" id="c_adm_year" required="" placeholder="Enter Current Admission Year">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Father Full Name</label>
                <input type="text" class="form-control" required="" name="father" id="father" placeholder="Father Full Name">
              </div>
              <div class="form-group col-md-6">
                <label for="name">Mother Full Name</label>
                <input type="text" required="" class="form-control" name="mother" id="mother" placeholder="Mother Full Name">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Student Full Name (Sirname First)</label>
                <input type="text" class="form-control" required="" name="student" id="student" placeholder="Enter Student Full Name">
              </div>
              <div class="form-group col-md-6">
                <label for="sel1">Student Class</label>
                <select class="form-control" name="class" id="class">
                  <option>Select Class</option>
                  <option value="11">11th (Sci)</option>
                  <option value="12">12th (Sci)</option>
                  <!-- <option>11th & 12th (Sci)</option> -->
                </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Date of Birth</label>
                <input type="text" class="form-control" required="" name="dob" id="dob" placeholder="Date of Birth">
              </div>
              <div class="form-group col-md-6">
                <label for="p_address">Permanent Address</label>
                <input type="text" class="form-control" required="" name="p_address" id="p_address" placeholder="Permonth Address">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Religion & Cast</label>
                <input type="text" class="form-control" name="religion" id="religion" placeholder="Relision & Cast">
              </div>
              <div class="form-group col-md-6">
                <label for="sel1">Student Gender</label>
                <select class="form-control" name="gender" required="" id="gender">
                  <option>Select Gender</option>
                  <option value="1">Female</option>
                  <option value="2">Male</option>
                  <option value="3">Other</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Contact Number</label>
                <input type="text" class="form-control" name="contact" id="contact" placeholder="Student Contact Number">
              </div>
              <div class="form-group col-md-6">
                <label for="p_contact_number">Parent Contact Number</label>
                <input type="text" class="form-control" name="p_contact_number" id="p_contact_number" placeholder="Parent Contact Number">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="p_occuaption">Parent Occupation</label>
                <input type="text" class="form-control" name="p_occuaption" id="p_occuaption" placeholder="Parent Occupation">
              </div>
              <div class="form-group col-md-6">
                <label for="name">Aadhar Number</label>
                <input type="text" class="form-control" name="aadhar" required="" id="aadhar" placeholder="Aadhar Number">
              </div>
            </div>
                 <div class="row">
              <div class="form-group col-md-6">
                <label for="fees">Student Fess</label>
                <input type="Number" class="form-control" name="fees" id="fees" placeholder="Fees" required="">
              </div>
             
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label for="name">Select Subject</label><br>
               
                  <label class="checkbox-inline">
                    <input type="checkbox" value="1" name="marathi" id="marathi">Marathi
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" value="1" name="hindi" id="hindi">Hindi
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" value="1" name="eng" id="eng">English
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" value="1" name="physics" id="phiysics">Phiysics
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" value="1" name="chemistry" id="chemistry">Chemistry
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" value="1" name="bio" id="bio">Biology
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" value="1" name="math" id="math">Math
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" value="1" name="geaomatry" id="geaomatry">Geaomatry
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" value="1" name="history" id="history">History
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" value="1" name="p_science" id="p_science">Political Science
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" value="1" name="e_science" id="e_science">Environmental Science
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" value="1" name="as_shikshan" id="as_shikshan">Arogya Sharirik Shikshan
                  </label>
           
               </div> 
            </div>
            <button type="submit"  class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- Edit student model      -->
<div id="editStudentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Student</h4>
      </div>
      <div class="modal-body" id="edit_studen_data">
       
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>

  <!-- addStudentModal -->
<div id="viewStudentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">



    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Student Detail:</h4>
      </div>
      <div class="modal-body" id="student_details">
       <!--  <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary pull-right">Edit</button>
          </div>
        </div> -->
        
      </div>

      <div id="payment_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Payment</h4>
      </div>
      <div class="modal-body">
        <div>
          <form action="/action_page.php">
            <div class="row">
              <div class="form-group col-md-3">
                <label for="name">Paid By</label>
                <input type="text" class="form-control" name="paid_by" id="paid_by" placeholder="Paid By">
              </div>
              <div class="form-group col-md-3">
                <label for="name">Amount</label>
                <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Amount">
              </div>
              <div class="form-group col-md-3">
                <label for="name">Payment Mode</label>
                <input type="text" class="form-control" name="payment_mode" id="payment_mode" placeholder="Payment Mode">
              </div>
            </div>
            <input type="hidden" value="" name="student_id" id="student_id">
            <button type="button" onclick="add_payment()" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>
<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="<?= base_url() ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url() ?>/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="<?= base_url() ?>/dist/js/app.min.js"></script> -->

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
<style type="text/css">
  #viewStudentModal .modal-dialog{
    width: 968px;
  }
  .btn{
    padding: 6px 4px;
  }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/jquery.dataTables.css">
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
"></script>
 
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js
"></script>


  <script type="text/javascript">
    $(document).ready(function() {
    $('#myTable').DataTable({
       dom: 'Bfrtip', 
        buttons: [ 'copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5' ] 
      });
} );

   function student_details(id){
      if(id!='') {
   
              jQuery.ajax({
              type: 'POST',
                  url:'<?= base_url()?>/Dashboard/student_details',
                  data: {id: id},
                  success: function (data) { 
                    $('#student_id').val(id)
                   $('#student_details').html(data);     
                  },

              });
            }
          }

          function view_studentby_id(id){
          if(id!='') {
       
                  jQuery.ajax({
                  type: 'POST',
                      url:'<?= base_url()?>/Dashboard/view_studentby_id',
                      data: {id: id},
                      success: function (data) { 
                        $('#student_id').val(id)
                       $('#edit_studen_data').html(data);     
                      },

                  });
                }
              }
    function add_payment(){
          var amount=$('#amount').val();
          var paid_by=$('#paid_by').val();
          var payment_mode=$('#payment_mode').val();
          var id=$('#student_id').val();
      if(id!='' && amount!='') {
   
              jQuery.ajax({
              type: 'POST',
                  url:'<?= base_url()?>/Dashboard/add_payment',
                  data: {id: id,'paid_by':paid_by,'payment_mode':payment_mode,'amount':amount},
                  success: function (data) {
                   $('#payment_modal').modal('hide');
                   alert('Payment Added Successfully');
                    $('#viewStudentModal').modal('hide');
                   // $('#student_details').html(data);     
                  },

              });
            }
            else
            {
              alert('Please Enter Amount');
            }
          }

  </script>
</body>
</html>
