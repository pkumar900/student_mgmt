
<!DOCTYPE html>
<html lang="en">
<head>
<title>bglooks</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel=icon href=<?= base_url()?>images/fevicon.png sizes="16x16" type="image/png">
<meta name="keywords" content="Men's Salon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="<?= base_url()?>css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="<?= base_url()?>css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="<?= base_url()?>css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<link href="<?= base_url()?>css/css_slider.css" type="text/css" rel="stylesheet" media="all">

	<!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<img src="<?=base_url()?>images/bglook.jpg" width="80px" height="80px">
				<!-- <h1> <a href="index.php"><span class="fa fa-scissors"></span> BGLOOKS <br>
					<span style="font-size: 14px;">unisex salon</span></a></h1> -->
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-lg-4 ml-auto">
				<li class="<?php if($page=='home'){echo 'active';} ?>"><a href="<?=base_url()?>">Home</a></li>
				<li class="<?php if($page=='about'){echo 'active';} ?>"><a href="<?=base_url()?>About">About Us</a></li>
				<li class="<?php if($page=='services'){echo 'active';} ?>"><a href="<?=base_url()?>Services">Services</a></li>
				<li class="<?php if($page=='gallery'){echo 'active';} ?>"><a href="<?=base_url()?>Gallery">Gallery</a></li>
				<li class="<?php if($page=='tranning'){echo 'active';} ?>"><a href="<?=base_url()?>Trainning">Trainning</a></li>
				<li class="mr-2"><a href="#" data-toggle="modal" data-target="#customerAppointment">Appointment</a></li>				
				<li class="<?php if($page=='contact'){echo 'active';} ?>"><a href="<?=base_url()?>Contact">Contact</a></li>
				<li class="mr-2"><a href="#" data-toggle="modal" data-target="#Enquiry">Enquiry</a></li>

				<li class="mr-2"><a href="#" data-toggle="modal" data-target="#customerLogin">Login</a></li>
				</li>
				 <li class="mr-2"><a href="#" data-toggle="modal" data-target="#customerSignin">Singin</a>
				 </li> 
				<!-- <li class=""><span><span class="fa fa-phone"></span> +12 34 3456 7890</span></li> -->
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>




<!--customer Appointment Modal -->
<div id="customerAppointment" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('login/checklogin')?>" method="post">
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="pwd">
		  </div>
		  <div class="checkbox">
		    <p><a href="signin.php">Singin </a> Create a new account</p>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- enq model -->
 <div class="modal fade" id="Enquiry" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('Website/Add_enquiry')?>" method="post">
		  <div class="form-group">
		    <label for="nam">  Name:</label>
		    <input type="text" class="form-control" id="name" name="name">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Mobile:</label>
		    <input type="text" class="form-control" id="mobile" name="mobile">
		  </div>
		 
		  <div class="form-group">
		    <label for="em">Email:</label>
		    <input type="email" class="form-control" id="em" name="email">
		  </div>
		  <div class="form-group">
		  	<select name="city" style="margin-bottom: 10px;">
								<option value="">Select City</option>
								<option value="1">Pune</option>
								<option value="2">Aurangabad</option>
							</select>
		  	
		  </div>
		  
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- end  enq model -->



<!--customer Login Modal -->
<div id="customerLogin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('login/checklogin')?>" method="post"">
        	<div>
        		<h3>Login</h3>	
        	</div>
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="username">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="pwd" name="password">
		  </div>
		  <div class="checkbox">
		    <p><a href="signin.php">Singin </a> Create a new account</p>	
		  </div>
		  <button type="submit" class="btn btn-default">Login</button>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



