<?php
   $page='home';require_once('inc/top.php');
?>
<!-- //header -->

<!-- banner -->
<!-- <section class="banner_w3lspvt" id="home">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1" />
		<input type="radio" name="slides" id="slides_2" />
		<input type="radio" name="slides" id="slides_3" />
		<input type="radio" name="slides" id="slides_4" />
		<ul>
			<li>
				<div class="banner-top">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">We make your hair <span>look <span class="clr">perfect</span></span></h3>
								<h4 class="text-wh">We make your hair <span>look Great, perfect!</span></h4>
								<a href="about.html" class="button-style mt-4 mr-2">Read More</a>
								<a href="#about" class="button-style mt-4">Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top1">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">Skilled Barbers Make<span>Great <span class="clr">Beards</span></span></h3>
								<h4 class="text-wh">We make your hair <span>look Great, perfect!</span></h4>
								<a href="about.html" class="button-style mt-4 mr-2">Read More</a>
								<a href="#about" class="button-style mt-4">Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top2">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">We make your hair <span>look <span class="clr">perfect</span></span></h3>
								<h4 class="text-wh">We make your hair <span>look Great, perfect!</span></h4>
								<a href="about.html" class="button-style mt-4 mr-2">Read More</a>
								<a href="#about" class="button-style mt-4">Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top3">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">Skilled Barbers Make<span>Great <span class="clr">Beards</span></span></h3>
								<h4 class="text-wh">We make your hair <span>look Great, perfect!</span></h4>
								<a href="about.html" class="button-style mt-4 mr-2">Read More</a>
								<a href="#about" class="button-style mt-4">Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="arrows">
			<label for="slides_1"></label>
			<label for="slides_2"></label>
			<label for="slides_3"></label>
			<label for="slides_4"></label>
		</div>
	</div>
</section> -->

<div class="">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?= base_url()?>images/banner3.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <!-- <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p> -->
        </div>
      </div>

      <div class="item">
        <img src="<?= base_url()?>images/banner2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <!-- <h3>Chicago</h3>
          <p>Thank you, Chicago!</p> -->
        </div>
      </div>
    
      <div class="item">
        <img src="<?= base_url()?>images/banner1.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <!-- <h3>New York</h3>
          <p>We love the Big Apple!</p> -->
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- //banner -->

<!-- about -->
<section class="about py-5" id="about">
	<div class="container py-lg-5">
		<div class="row about-grids">
			<div class="col-lg-8">
				<h2 class="mt-lg-3">Welcome to BGLOOKS salon</h2>
				<h5 class="plane mt-md-4 mt-3">We make your hair <span>look Great, perfect!</span></h5>
				<p class="">Sed ut perspiciatis unde omnis iste natus error ipsum voluptatem ut accusa ntium dolor remque laudantium, totam rem
				aperiam, eaque ipsa quae abse illo quasi sed architecto beatae vitae dicta sut dolor etr explicabo. Morbi a luctus magna, eut rutrum
				turpis. Sed perspiciatis unde omnis iste natus error ipsum voluptatem ut accusantium dolor.</p>
				<p class="mt-3">Eaque ipsa quae abse illo quasi sed architecto beatae vitae dicta sut dolor etr explicabo. Morbi a luctus magna, eu rutrum
				turpis. Sed perspiciatis unde omnis iste natus error et ipsum voluptatem ut accusantium dolor voluptatem ut accusa ntium dolor.</p>
			</div>
			<div class="col-lg-4 col-md-8 mt-lg-0 mt-5">
				<div class="padding">
					<img src="images/mustache.png" class="img-fluid" alt="" />
					<div>
						<h4>Quick Appointment </h4>
						<br>
					</div>
					<form action="<?=base_url('Website/Add')?>" method="post">
						<div class="form-style-agile">
							<input placeholder="Your Name" name="name" type="text" required="">
							<input placeholder="Contact Number" name="mobile" type="text" required="">
							<input placeholder="Email" type="text" name="email" required="">
							<input placeholder="Timing" type="text" name="timing" required="">
							<select name="city" style="margin-bottom: 10px;">
								<option value="">Select City</option>
								<option value="1">Pune</option>
								<option value="2">Aurangabad</option>
							</select>
					
							<select name="branch_id" style="margin-bottom: 10px;">
								<option value="">Select Branch</option>
								<?php foreach ($all_branch as $key => $value) { ?>
									<option value="<?= $value->id?>"><?= $value->name ?></option>
								<?php } ?>
								
							</select>
							
							<!-- <button class="book-btn btn">Quick Appointment </button> -->
							<button class=" btn btn-primary" type="Submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- about bottom -->
<section class="bottom-banner-w3layouts">
	<div class="d-lg-flex">
		<div class="col-lg-7 p-lg-0 text-lg-right text-center mt-lg-0 mt-4 bottom-left">
		</div>
		<div class="col-lg-5 banner-about text-center">
			<span class="fa fa-scissors"></span>
				<h4 class="mt-sm-4 mt-2">making hair style</h4>
				<h5 class="bottom mt-m-4 mt-3">For man growing beards!</h5>
				<p class="">Sed ut perspiciatis unde omnis iste natus error ipsum voluptatem ut accusa ntium dolor remque laudantium, totam rem
				aperiam, eaque ipsa quae abse illo quasi sed architecto beatae vitae dicta sut dolor etr explicabo. Morbi a luctus magna, eu rutrum
				turpis. Sed perspiciatis unde.</p>
		</div>
	</div>
</section>
<!-- //about bottom -->

<!-- services -->
<section class="services py-5" id="services">
	<div class="container py-lg-5 py-3">
		<div class="row service-grid-grids text-center">
			<div class="col-lg-4 col-md-6 service-grid service-grid1">
				<div class="service-icon">
					<span class="fa fa-puzzle-piece"></span>
				</div>
				<h4 class="mt-3">Skilled Barbers</h4>
				<p class="mt-3">Perspiciatis unde omnis iste natus doloret ipsum volupte ut accusal ntium dolor remque laudantium, totam dolor.</p>
			</div>
			<div class="col-lg-4 col-md-6 service-grid service-grid2 mt-md-0 mt-5">
				<div class="service-icon">
					<span class="fa fa-scissors"></span>
				</div>
				<h4 class="mt-3">Hair stylists</h4>
				<p class="mt-3">Perspiciatis unde omnis iste natus doloret ipsum volupte ut accusal ntium dolor remque laudantium, totam dolor.</p>
			</div>
			
			<div class="col-lg-4 col-md-6 service-grid service-grid3 mt-lg-0 mt-5">
				<div class="service-icon">
					<span class="fa fa-sliders"></span>
				</div>
				<h4 class="mt-3">Beard Grooming</h4>
				<p class="mt-3">Perspiciatis unde omnis iste natus doloret ipsum volupte ut accusal ntium dolor remque laudantium, totam dolor.</p>
			</div>
		</div>
		<!-- <div class="row mt-5">
			<div class="col-md-6 p-md-0">
				<div class="bg-image-left">	
					<h4>skilled barbers</h4>
				</div>
			</div>
			<div class="col-md-6 p-md-0">
				<div class="bg-image-right">
					<h4>skilled barbers</h4>
				</div>
				<div class="row">
					<div class="col-md-6 pr-md-0">
						<div class="bg-image-bottom1">
							<h4>Trimming</h4>
						</div>
					</div>
					<div class="col-md-6 pl-md-0">
						<div class="bg-image-bottom2">
							<h4>Shaving</h4>
						</div>
					</div>
				</div>	
			</div>	
		</div> -->		
	</div>		
</section>


<!-- //services -->

<!-- facts -->
<section class="facts" id="facts">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 py-5">
				<div class="row inner-heading">
					<h2 class="heading text-capitalize my-md-4"> Why Choose Us</h2>
					<p class="mt-md-0 mt-2">Donec cursus congue risus, quis varius velit accumsan aliquam. Morbi semper nunc. Perspiciatis unde omnis iste
					natus doloret ipsum volupte ut accusal ntium dolor remque laudantium, totam dolor</p>
				</div>
				<div class="row mt-5 fact-grid-main">
					<div class="col-sm-4 stats-grid">
						<span class="fa fa-trophy"></span>
						<span>250</span>
						<h4>Experienced Barbers</h4>
					</div>
					<div class="col-sm-4 stats-grid">
						<span class="fa fa-scissors"></span>
						<span>50+</span>
						<h4>Amazing Hairstyles</h4>
					</div>
					<div class="col-sm-4 stats-grid">
						<span class="fa fa-smile-o"></span>
						<span>2000+</span>
						<h4>Satisfied clients</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-5 p-lg-0 text-lg-right text-center">
				<img src="<?= base_url()?>images/facts.png" class="img-fluid" alt="">
			</div>
		</div>
	</div>
</section>
<!-- //facts -->

<!-- team -->
<section class="team py-5" id="team">
	<div class="container py-md-4">
		<div class="title-desc text-center">
			<h3 class="heading text-capitalize mb-md-5 mb-4">our expert stylists</h3>
		</div>
		<div class="row team-grid">
			<div class="col-lg-3 col-sm-6">
				<div class="box13">
					<img src="<?= base_url()?>images/team1.jpg" class="img-fluid img-thumbnail" alt="" />
					<div class="box-content">
						<h3 class="title">Williamson</h3>
						<span class="post">role in detail</span>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
				<div class="box13">
					<img src="<?= base_url()?>images/team2.jpg" class="img-fluid img-thumbnail" alt="" />
					<div class="box-content">
						<h3 class="title">Kristiana</h3>
						<span class="post">role in detail</span>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="box13">
					<img src="<?= base_url()?>images/team3.jpg" class="img-fluid img-thumbnail" alt="" />
					<div class="box-content">
						<h3 class="title">Thomson</h3>
						<span class="post">role in detail</span>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="box13">
					<img src="<?= base_url()?>images/team4.jpg" class="img-fluid img-thumbnail" alt="" />
					<div class="box-content">
						<h3 class="title">Watson</h3>
						<span class="post">role in detail</span>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //team -->

<!-- footer top-->

<?php
   $page='contact';require_once('inc/footer.php');
?>	
</body>
</html>