<?php
   $page='contact';require_once('inc/top.php');
?>
<!-- //header -->

<!-- banner -->
<div class="inner-banner" id="home">
	<div class="inner-banner-overlay">
		<div class="container">
			
		</div>
	</div>
</div>
<!-- //banner -->

<!-- page details -->
<div class="breadcrumb-agile">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Contat Us</li>
		</ol>
	</div>
</div>
<!-- //page details -->

<!-- contact -->
<section class="contact py-sm-5 py-4">
	<div class="container py-md-3">
		<h2 class="heading text-capitalize text-center mb-lg-5 mb-sm-4 mb-3"> Create a new account</h2>
		<p>It's free and always will be.</p>
		<div class="contact-form">
			<form action="#" method="post">
				<div class="row main-w3layouts-sectns">
					<div class="col-lg-3 col-md-6 w3-btm-spc form-text1">
						<label><span class="fa fa-user"></span> Your Name:</label>
						<input type="text" name="Name" placeholder="John Watson" required="">
					</div>
					<div class="col-lg-3 col-md-6 w3-btm-spc form-text2">
						<label><span class="fa fa-phone"></span> Phone Number:</label>
						<input type="text" name="Phone no" placeholder="xxxxxxxxxx" required="">
					</div>
					<div class="col-lg-3 col-md-6 w3-btm-spc form-text1">
						<label><span class="fa fa-envelope-open"></span> Email Address:</label>
						<input type="email" name="email" placeholder="example@mail.com" required="">
					</div>
					<div class="col-lg-3 col-md-6 w3-btm-spc form-text2">
						<label><span class="fa fa-pencil"></span> City</label>
						<input type="text" name="City" placeholder="City" required="">
					</div>
				</div>
				<div class="main-w3layouts-sectns ">
					<div class="w3-btm-spc form-text2 p-0">
						<label><span class="fa fa-pencil"></span> Message</label>
						<textarea placeholder="Enter Your Message Here"></textarea>
					</div>
				</div>
				<button class="btn"> Sign Up</button>
			</form>
		</div>
	</div>
</section>
<!-- //contact -->



<!-- footer top-->
<?php
   $page='contact';require_once('inc/footer.php');
?>
	
</body>
</html>