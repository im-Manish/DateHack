<?php include_once 'View/header.php';   ?>

	<!-- Section -->
	<section class="body-section">
		<div class="body-main"></div>
		<div class="body-color"></div>
		<div class="main-text">Meet new and intersting people.</div>
		<div class="main-sm-text">Some default text to fell the space</div>
		<div class="main-buttons d-flex">
			<div class="hm-btn">Get Start</div>
			<div class="hm-btn">Know More</div>
		</div>
	</section>
	<!-- End of section -->
	<!-- About Us -->
	<div id="about-us">
		<div class="upper-line"></div>
		<div class="ab-text">How Datemandu Works</div>

		<div class="ab-card">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="<?= base_url?>images/background.jpg" alt="Card image cap">
				<div class="card-body">
    				<h5 class="card-title">Card title</h5>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  				</div>
			</div>

			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="<?= base_url?>images/background.svg" alt="Card image cap">
				<div class="card-body">
    				<h5 class="card-title">Card title</h5>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  				</div>
			</div>


			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="<?= base_url?>images/background.svg" alt="Card image cap">
				<div class="card-body">
    				<h5 class="card-title">Card title</h5>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  				</div>
			</div>
		</div>
	</div>
	<!-- End  -->
	<!-- Services -->
	<div id="services">
		<div class="upper-line"></div>
		<div class="ab-text">Our Happy Users</div>
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					"Nice app developed by the Team CodexOrient. Really good and where is the place where i meet my soulmate love of my life" :- Saswat Tripathi
				</div>
				<div class="carousel-item">
					"Glad to take part in Datehack Hackthon. It was really fun coding whole 24 hours and also finding potentials that coding for 24 hour is possible." :- Manish Thapa
				</div>
				<div class="carousel-item">
					hello
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
	<!-- End of services -->

	<!-- download app  -->
	<div id="download">
		<div class="download-main"></div>
		<div class="download-coentent">
			<div class="">
				<div class="dwn-img"><img src="<?= base_url?>images/playstore.png" alt="Mobile App versions"></div>
				<div class="ios-img"><img src="<?= base_url?>images/ios.png" alt="Mobile IoS App versions"></div>
			</div>
			<div class="download-img"><img src="<?= base_url?>images/mobile.png" alt="Mobile App versions"></div>
		</div>
	</div>
	<!-- End Downlaod app -->

	<!-- Footer -->
	<?php include_once 'view/footer.php'; ?>
	<!-- End  -->
	<!-- script -->
	<script type="text/javascript" src="<?= base_url?>assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- end script -->
</body>
</html>