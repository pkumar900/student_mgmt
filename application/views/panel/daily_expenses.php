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
              <img src="<?= base_url()?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs"><?= $this->session->name.' '.$this->session->last_name?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?= base_url()?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

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
          </li>
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
          <img src="<?= base_url()?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
       <!--  <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Report</span></a></li> -->
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
        Daily Expenses 
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
                  <span class="info-box-text"><b>Last Month Expenses</b></span>
                  <span class="info-box-number"><?= !empty($l_month[0]->total)?$l_month[0]->total:0?><small></small></span>
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
                  <span class="info-box-text"><b>Current Month Expenses</b></span>
                  <span class="info-box-number"><?= !empty($c_month[0]->total)?$c_month[0]->total:0?></span>
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
                  <span class="info-box-text"><b>Total Expenses</b></span>
                  <span class="info-box-number"><?= !empty($total_exp[0]->total)?$total_exp[0]->total:0?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            
            <!-- /.col -->
          </div>
      </div>
    </div>
  
      <div class="">
          <div class="col-md-12">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">Add New Item</button>
          </div>
      </div>
      <br><br>
      <?= $this->session->flashdata('msg')?>
    <!-- Main content -->
    <section class="content" style="display: flex;">

<div class="table-responsive" style="background-color: #fff; padding: 10px;">
	<div>
		<h3><b>Daily Expenses List</b></h3>
	</div>
 
<hr>    
<br>  
 <?= form_open('Daily_expenses'); ?>   
<p><span><b>Start Date:</b> <input type="date" name="start_date" value="<?= set_value('start_date')?>"> </span> 
  <span> <b> End Date:</b> <input type="date" name="end_date" value="<?= set_value('end_date')?>"></span>
  <!-- <span><button>Get Report</button></span> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</p>
   </form>
<br>
  <table id="myTable" class="table-bordered">
    <thead>
      <tr>
      	<th>Sr No:</th>
        <th>Date</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Amount/per</th>
        <th>Total Amount</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $count=0; foreach ($all_data as $key => $value) { ?>
      <tr id="row<?= $value->id ?>">
        <td><?php $count++;echo $count;?></td>
        <td><?= $value->added_date ?></td>
        <td><?= $value->product ?></td>
        <td><?= $value->qty ?></td>
        <td><?= $value->p_price ?></td>
        <td><?= $value->t_price ?></td>
        <td>
         <!--  <i class="fa fa-plus" aria-hidden="true" style="font-size:17px;"></i> &nbsp; -->
          <a href="#" onclick="delete_data('<?= $value->id ?>')"><i class="fa fa-trash" aria-hidden="true" style="font-size:17px;"></i></a> &nbsp;
          
          <a href="#" data-toggle="modal" data-target="#editStudentModal" onclick="view_expenssby_id('<?= $value->id ?>')"><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:17px;"></i></a>
          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#"><i class="fa fa-plus" aria-hidden="true"></i></button>          
          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#"><i class="fa fa-trash" aria-hidden="true"></i></button>
          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> -->

        </td>
      </tr>
  <?php  } ?>
     
      
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
    <strong>Copyright &copy; 2019-2020 <a href="#">Chaitanya Pote </a>.</strong> All rights reserved.
  </footer>

  <!-- addStudentModal -->
<div id="addStudentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Product Detail</h4>
      </div>
      <div class="modal-body">
        <div>
          <?= form_open('Daily_expenses/Add',array('class' => 'form')); ?>
            <div class="row">
              <div class="form-group col-md-3">
                <label for="pname">Product Name</label>
                <input type="text" class="form-control" name="product" required="" id="pname" placeholder="Add Product">
              </div>
              <div class="form-group col-md-3">
                <label for="name">Quantity</label>
                <input type="number" class="form-control" required name="qty" id="qty" placeholder="Enter Quantity">
              </div>
              <div class="form-group col-md-3">
                <label for="name">Amount/per</label>
                <input type="text" class="form-control" required name="p_price" onkeyup="set_tamount()" id="p_price" placeholder="Enter Quantity">
              </div>
              <div class="form-group col-md-3">
                <label for="name">Total Amount</label>
                <input type="text" class="form-control" required name="t_price" id="t_price" readonly placeholder="Enter Quantity">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>

<div id="editStudentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Product Detail</h4>
      </div>
      <div class="modal-body" id="editexp_data">
        
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

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="<?= base_url()?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url()?>/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>/dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?= base_url()?>/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/jquery.dataTables.css">
  
  <script type="text/javascript">
    // $('#myTable').DataTable();
    $(document).ready(function() {
    $('#myTable').DataTable(
      
      );
} );

    function set_tamount()
    {
     var total= $('#qty').val()  * $('#p_price').val()
     alert(total)
     $('#t_price').val(total);
    }

     function edit_set_tamount()
    {
     var total= $('#qty1').val()  * $('#p_price1').val()
     
     $('#t_price1').val(total);
    }
    function view_expenssby_id(id){
          if(id!='') {
       
                  jQuery.ajax({
                  type: 'POST',
                      url:'<?= base_url()?>/Daily_expenses/view_expenssby_id',
                      data: {id: id},
                      success: function (data) { 
                        // $('#student_id').val(id)
                       $('#editexp_data').html(data);     
                      },

                  });
                }
              }

  function delete_data(id)
  {
      var prom;
      
      prom = "Are you sure you want to Delete this product?";
      
      if (confirm(prom))
      {
          setTimeout(function ()
          {
              //=========ajax==========//
              jQuery.ajax({
              type: 'POST',
                  url: '<?= base_url('Daily_expenses/delete')?>',
                  data: {id: id},
                  beforeSend: function () {
//                                $("#loading").show();
                  },
                  success: function (data) {
                    alert(data.trim());
                      $("#row" + id).remove();
                      
                      
                  },
                  error: function (e) {
//                                $("#loading").hide();
                      // Error
                  }
              });
              //=========End of ajax====//
          }, 1000);
      }
  }
  </script>
</body>
</html>
