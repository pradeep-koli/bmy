<style type="text/css">
	.footer {
		background-color: #061138;
		font-size: 16px;
		padding: 30px 20px 20px 85px;
		width: 100%;
		background-color: #333;
		color: #fff;
		display: flex;
		flex-wrap: wrap;
	}

	ul li {
		list-style-type: none;
	}

	.footer-item {
		flex-grow: 1;
		flex-basis: 25%;
		box-sizing: border-box;
		text-align: justify-all;
		padding: 10px;
	}

	.copywrite {
		flex-grow: 1;
		box-sizing: border-box;
		text-align: center;
		padding: 40px 0px 0px 0px;
	}


	@media only screen and (max-width: 768px) {
		.footer-item {
			flex-basis: 50%;
		}

		.copywrite {
			margin-left: -50px;
		}
	}

	@media only screen and (max-width: 480px) {
		.footer-item {
			flex-basis: 100%;
			text-align: center;
			margin-left: -70px;
		}

		.copywrite {
			margin-left: -50px;
		}
	}


	#quick-links-list {
		display: block;
	}

	@media (max-width: 991px) {
		#quick-links-list {
			display: none;
		}
	}

	@media (max-width: 767px) {
		.footer-item {
			padding: 10px;
		}

		.footer-item h5 {
			font-size: 1.2rem;
		}
	}

	#booking-list {
		display: block;
	}

	@media (max-width: 991px) {
		#booking-list {
			display: none;
		}
	}

	@media (max-width: 767px) {
		.footer-item {
			padding: 10px;
		}

		.footer-item h5 {
			font-size: 1.2rem;
		}
	}

	/*  */
	/* Initially show the list for larger screens */
	#quick-links-list,
	#booking-list {
		display: block;
	}

	/* For tablet and smaller screens, hide the list by default */
	@media (max-width: 991px) {

		#quick-links-list,
		#booking-list {
			display: none;
			/* Hide the lists by default on tablet and smaller screens */
		}

		/* Show the dropdown icon only for mobile/tablet screens */
		#quick-links-icon,
		#booking-icon {
			display: inline-block;
			/* Show the dropdown icon only on mobile */
			margin-left: 10px;
			transition: transform 0.3s ease;
			/* Smooth transition for icon rotation */
		}
	}

	/* Hide the dropdown icon on larger screens (above 991px) */
	@media (min-width: 992px) {

		#quick-links-icon,
		#booking-icon {
			display: none;
			/* Hide the icon on larger screens */
		}
	}

	/* Adjust styling for better display on mobile */
	@media (max-width: 767px) {
		.footer-item {
			padding: 10px;
		}

		.footer-item h5 {
			font-size: 1.2rem;
			/* Adjust heading size on mobile */
		}
	}
</style>

<!-- footer start -->
<footer class="footer" style="background-color: #061138;">
	<div class="footer-item">
		<a href="<?= base_url('/'); ?>">
			<img src="<?php echo site_url('yachtProject/'); ?>assets/images/bmy-logo.png" alt="logo" width="170px"
				style="margin-top: 5px;">
		</a>
		<h5 class="text-white mt-3 mb-md-3">Book My Yacht</h5>
		<p class="mb-2">
			<a href="https://wa.me/17862977769" class="text-muted text-primary-hover"><i class="bi bi-telephone me-2"></i>&nbsp;+1(786)-297-7769</a>

		</p>
		<p class="mb-2"><a href="mailto:booking@bookmyyacht.us" class="text-muted text-primary-hover"><i
					class="bi bi-envelope me-2"></i>&nbsp;booking@bookmyyacht.us</a></p>

		<p class="mb-2"><a href="https://bookmyyacht.us/us/contact" class="text-muted text-primary-hover"><i
					class="bi bi-map me-2"></i>&nbsp;4910 8th Green St, Dover, DE 19901</a></p>
	</div>
	<div class="footer-item">
		<h5 class="text-white mb-2 mb-md-4 my-4" id="quick-links-heading">
			Quick Links
			<i class="fas fa-chevron-down" id="quick-links-icon"></i>
		</h5>
		<ul class="nav flex-column text-primary-hover" id="quick-links-list">
			<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('admin'); ?>">Partner Login</a></li>
			<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/contact'); ?>">Post Free Listing</a></li>
			<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/yacht-list') ?>">Find Yachts</a></li>
			<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/gallery'); ?>">Gallery</a></li>
			<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/contact'); ?>">Contact</a></li>
		</ul>
	</div>

	<div class="footer-item">
		<h5 class="text-white mb-2 mb-md-4 my-4" id="booking-heading">
			Booking
			<i class="fas fa-chevron-down" id="booking-icon"></i>
		</h5>
		<ul class="nav flex-column text-primary-hover" id="booking-list">
			<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/about'); ?>">About Us</a></li>
			<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('terms') ?>">Terms &amp; Conditions</a></li>
			<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('privacy') ?>">Privacy Policy</a></li>
			<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('refund') ?>">Refund Policy</a></li>
			<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('support') ?>">Support</a></li>
		</ul>
	</div>

	<div class="footer-item">
		<h5 class="text-white mb-2 mb-md-4 my-4">Follow us on</h5>
		<ul class="list-inline mt-2">
			<li class="list-inline-item"> <a class="btn btn-sm px-2 bg-facebook mb-0"
					href="https://www.facebook.com/people/Book-My-Yacht/100083596328997/?mibextid=ZbWKwL"><i
						class="fab fa-fw fa-facebook-f"></i></a> </li>
			<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-instagram mb-0"
					href="https://www.instagram.com/bookmyyachtt/"><i class="fab fa-fw fa-instagram"></i></a> </li>
			<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-twitter mb-0"
					href="https://twitter.com/bookmyyachts?s=08"><i class="fab fa-fw fa-twitter"></i></a> </li>
			<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-linkedin mb-0"
					href="https://www.linkedin.com/company/book-my-yacht/"><i
						class="fab fa-fw fa-linkedin-in"></i></a> </li>
			<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-youtube mb-0"
					href="https://pin.it/6DpYROV"><i class="fab fa-fw fa-pinterest"></i></a> </li>
		</ul>

		<h5 class="text-white mb-2">Payment &amp; Security</h5>
		<ul class="list-inline mb-0 mt-3">
			<li class="list-inline-item"> <a href="#"><img
						src="<?php echo site_url('yachtProject/'); ?>assets/images/element/visa.svg" width="50px"
						alt="Book My Yacht"></a></li>
			<li class="list-inline-item"> <a href="#"><img
						src="<?php echo site_url('yachtProject/'); ?>assets/images/element/mastercard.svg"
						width="50px" alt="Book My Yacht"></a></li>
		</ul>
	</div>
	<div class="copywrite"> Copyrights©2024 BMY - Book My Yacht . All rights reserved.
	</div>
</footer>

<script>
	$(document).ready(function() {
		// Toggle the visibility of the "Quick Links" list when the heading is clicked
		$('#quick-links-heading').click(function() {
			if ($(window).width() <= 991) {
				$('#quick-links-list').toggle(); // Toggle the list visibility
				$('#quick-links-icon').toggleClass('fa-chevron-down fa-chevron-up'); // Toggle the icon
			}
		});

		// Toggle the visibility of the "Booking" list when the heading is clicked
		$('#booking-heading').click(function() {
			if ($(window).width() <= 991) {
				$('#booking-list').toggle(); // Toggle the list visibility
				$('#booking-icon').toggleClass('fa-chevron-down fa-chevron-up'); // Toggle the icon
			}
		});
	});
</script>
<!-- footer end -->
<!-- =======================
	Footer END -->
<script src="<?= base_url('yachtProject/') ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('yachtProject/') ?>assets/vendor/choices/js/choices.min.js"></script>
<script src="<?= base_url('yachtProject/') ?>assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="<?= base_url('yachtProject/') ?>assets/vendor/flatpickr/js/flatpickr.min.js"></script>
<script src="<?= base_url('yachtProject/') ?>assets/vendor/glightbox/js/glightbox.js"></script>

<script src="<?= base_url('yachtProject/') ?>assets/js/functions.js"></script>