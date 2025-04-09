<!DOCTYPE html>
<html lang="en">

<head>
	<title>Book My Yacht</title>
	<meta charset="utf-8">
	<meta name="description"
		content="Embark on an unforgettable journey on the seas with Book My Yacht, your premier destination for chartering luxury yachts worldwide. Explore our extensive fleet of yachts, tailored to suit every occasion and preference.">
	<meta name="keywords"
		content="book my yacht, luxury yacht charter, yacht rental, yacht charter company, yacht vacation, yacht experience, yacht rental prices, yacht destinations, yacht booking, yacht rental online, yacht charter for special occasions">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="bookmyyacht.us">

	<link rel="shortcut icon" href="<?php echo site_url('yachtProject/'); ?>assets/fav/favicon.ico">
	<link rel="stylesheet" href="<?php echo site_url('yachtProject/'); ?>index2.css">

	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">
	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css"
		href="<?php echo site_url('yachtProject/'); ?>assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo site_url('yachtProject/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo site_url('yachtProject/'); ?>assets/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo site_url('yachtProject/'); ?>assets/vendor/choices/css/choices.min.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo site_url('yachtProject/'); ?>assets/vendor/flatpickr/css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo site_url('yachtProject/'); ?>assets/vendor/glightbox/css/glightbox.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('yachtProject/'); ?>assets/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>

	<style>
        ul.dropdown-menu {
            overflow-y: auto;
            max-height: 400px;
        }
        
		#Fv .row>* {

			-ms-flex-negative: 0;
			flex-shrink: 0;
			width: 100% !important;
		}

		.text-primary {
			--bs-text-opacity: 1;
			color: #e8c02c !important;
		}

		i.fa-solid {
			color: #e8c02c !important;

		}

		i.icon-color {
			color: #0e2884 !important;

		}

		div#banner-text {
			padding-top: 100px;
		}

		.form-control-bg-light .form-control {
			border-color: grey;
			background-color: #e5e5e5 !important;
		}

		.form-control-bg-light .form-control:focus {
			border-color: grey !important;
		}

		label.form-label.mb-0 {
			color: Black;
		}

		.btn-dark {
			background: #e8c02c !important;
		}

		@media only screen and (max-width: 991px) {
			.row.desktop {
				display: none;
			}
		}

		.card-body.bg-mode.rounded.p-3.p-md-5.m-2.m-lg-6 {
			box-shadow: 0px 0px 22px black;
		}

		/*.choices_list {
			background-color: orange !important;
		}*/
	</style>

	<style>
		.h-40px {
			height: 100px !important;
		}

		.navbar-expand-xl .navbar-brand .navbar-brand-item {
			height: 60px !important;
		}

		.back-top {
			background-color: #061138 !important;
		}

		.navbar-nav {

			--bs-nav-link-hover-color: #e8c02c !important;
		}
	</style>

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
			}

			.copywrite {
				margin-left: -50px;
			}
		}
	</style>

	<style type="text/css">
		.dollar-input-group {
			position: relative;
		}

		.input-wrapper {
			position: relative;
		}

		.dollar-sign {
			position: absolute;
			top: 50%;
			left: 10px;
			transform: translateY(-50%);
			pointer-events: none;
			text-transform: uppercase;
		}

		.dropdown-item:hover {
			color: #e6bf2d;
		}
	</style>


	<!-- Dark mode -->
	<script type="text/javascript">
		var theme = localStorage.getItem('data-theme');
		var root = document.documentElement;
		if (theme === 'dark' && theme !== undefined) {
			root.classList.add('dark-mode');
		} else {
			root.classList.remove('dark-mode');
		}
	</script>

	<script>
		$(document).ready(function () {
			$(".full-landing-image").ripples({
				resolution: 600,
				perturbance: 0.02,
			});
		});  
	</script>


</head>

<body>
	<!-- Offcanvas menu START -->
	<div class="offcanvas offcanvas-w-500px offcanvas-end" tabindex="-1" id="offcanvasBookstay"
		aria-labelledby="offcanvasBookstayLabel">
		<div class="offcanvas-header border-bottom px-3">
			<h5 class="offcanvas-title" id="offcanvasBookstayLabel">Book a Yacht</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body form-control-bg-light d-flex flex-column px-3">
			<!-- Form START -->
			<form method="post" id="myForm" onsubmit="return validateForm()" action="<?= base_url('enquiryForm') ?>">
				<?= csrf_field() ?>
				<div class="mb-3">
					<label class="form-label mb-0">Name</label>
					<input type="text" class="form-control" data-search-enabled="true" aria-label=".form-select-sm"
						id="userValid" name="name" oninput="userValidation()" required>
					<span id="userError" class="text-danger"></span>
				</div>

				<div class="mb-3">
					<label class="form-label mb-0">Email</label>
					<input type="text" id="emailInput" name="email" class="form-control" required>
					<span id="emailError" class="text-danger"></span>
				</div>

				<div class="mb-3">
					<label class="form-label mb-0">Phone</label>
					<input type="tel" id="phone" name="phone" class="form-control" data-search-enabled="true"
						aria-label=".form-select-sm" oninput="checkNumber3(this)" required>
					<span id="error3" class="text-danger"></span>
				</div>

				<div class="mb-3">
					<label class="form-label mb-0">Preferred Location</label>
					<input type="text" name="location" class="form-control" data-search-enabled="true"
						aria-label=".form-select-sm" required>
				</div>

				<div class="mb-3 dollar-input-group">
					<label class="form-label mb-0">Budget</label>
					<div class="input-wrapper">
						<input type="text" name="budget" class="form-control" data-search-enabled="true"
							aria-label=".form-select-sm" id="numberInput" name="budget" oninput="checkNumber2(this)"
							required>
						<span class="dollar-sign">$</span>
					</div>
					<span id="error2" class="text-danger"></span>
				</div>

				<div class="mb-3">
					<label class="form-label mb-0">Number of People</label>
					<input type="text" class="form-control" data-search-enabled="true" aria-label=".form-select-sm"
						id="numberInput" name="people" oninput="checkNumber1(this)" / required>
					<span id="error1" class="text-danger"></span>
				</div>

				<script type="text/javascript">
					document.getElementById('numberInput').addEventListener('input', function (event) {
						var input = event.target;
						input.type = "text";
						input.style.cssText = 'padding-left: 22px';
						input.value = input.value.toUpperCase();
						var dollarSign = input.nextElementSibling;
						if (input.value.trim() !== '') {
							dollarSign.style.display = 'block';
						} else {
							dollarSign.style.display = 'inline-block';
						}
					});
				</script>

				<div class="mb-3">
					<label class="form-label mb-0">Enquiry</label>
					<textarea class="form-control" id="inquiry" name="enquiry" rows="4" cols="50" required></textarea>
					<span id="error" class="text-danger"></span>
				</div>

				<script>
					document.addEventListener('DOMContentLoaded', function () {
						var textarea = document.getElementById('inquiry');
						var error = document.getElementById('error');
						var submitBtn = document.querySelector('input[type="submit"]');

						textarea.addEventListener('input', function () {
							if (textarea.value.length > 400) {
								error.textContent = "Error: Inquiry cannot exceed 400 characters";
								submitBtn.disabled = true;
							} else {
								error.textContent = "";
								submitBtn.disabled = false;
							}
						});

						document.getElementById('myForm').addEventListener('submit', function (event) {
							if (textarea.value.length > 400) {
								event.preventDefault();
								error.textContent = "Error: Inquiry cannot exceed 400 characters";
							}
						});
					});
				</script>

				<div class="text-center">
					<input type="submit" name="submit" id="submitBtn" class="btn btn-dark w-100"
						value="Raise an Enquiry">
				</div>
			</form>

			<div class="bg-light p-3 rounded mt-auto">
				<h6>Our booking benefits?</h6>
				<ul class="small ps-3">
					<li class="mb-2">24/7 customer support</li>
					<li class="mb-2">Best price guaranteed</li>
					<li class="mb-2">Early check-in and late check-out</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- phone css & js -->
	<style>
		#phone {
			width: 100%;
			padding-right: 250px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
			margin-bottom: 10px;
			border-color: grey;
		}
	</style>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
	<script>
		var input = document.querySelector("#phone");
		var iti = window.intlTelInput(input, {
			utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
		});

		function validateForm() {
			var phone = iti.getNumber();
			var name = document.getElementById("userValid").value;
			var isValid = true;

			document.getElementById("phoneError").innerHTML = "";
			document.getElementById("userError").innerHTML = "";

			if (!phone) {
				document.getElementById("phoneError").innerHTML = "Phone number is required";
				isValid = false;
			}

			var userDigit = /\d/.test(name);
			var userSpecialChar = /[@$!*]/.test(name);

			if (userDigit || userSpecialChar || name.trim() === "") {
				document.getElementById("userError").innerHTML = "Please enter a valid username";
				isValid = false;
			}
		}

		function userValidation() {
			var name = document.getElementById('userValid').value;
			var userError = document.getElementById('userError');

			var userDigit = /\d/.test(name);
			var userSpecialChar = /[@$!*]/.test(name);

			if (userDigit || userSpecialChar || name.trim() === "") {
				userError.textContent = "Please enter a valid username";
				document.getElementById("myForm").querySelector('input[type="submit"]').disabled = true;
			} else {
				userError.textContent = "";
				document.getElementById("myForm").querySelector('input[type="submit"]').disabled = false;
			}
		}
	</script>

	<script type="text/javascript">
		function isValidEmail(email) {
			if (email.indexOf('@') === -1 || email.indexOf('.') === -1) {
				return false;
			}
			var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@.]+$/;
			return emailRegex.test(email) && email.split('.').length === 2;
		}

		document.getElementById("emailInput").addEventListener("input", function () {
			var email = this.value.trim();
			var emailError = document.getElementById("emailError");
			var submitButton = document.getElementById("submitButton");

			if (email === "") {
				emailError.textContent = "Email is required";
				submitButton.disabled = true;
			} else if (!isValidEmail(email)) {
				emailError.textContent = "Please enter a valid email address";
				submitButton.disabled = true;
			} else {
				emailError.textContent = "";
				submitButton.disabled = false;
			}
		});

		document.getElementById("myForm").addEventListener("submit", function (event) {
			var email = document.getElementById("emailInput").value.trim();
			if (!isValidEmail(email)) {
				event.preventDefault();
				document.getElementById("emailError").textContent = "Invalid email address";
			}
		});
	</script>

	<script type="text/javascript">
		function checkNumber1(input) {
			var isValid = /^\d+$/.test(input.value);
			if (!isValid) {
				document.getElementById("error1").innerText = "Please enter numbers only.";
				input.value = '';
				document.getElementById("submitBtn").disabled = true;
			} else {
				document.getElementById("error1").innerText = "";
				document.getElementById("submitBtn").disabled = false;
			}
		}

		function checkNumber2(input) {
			var isValid = /^\d+$/.test(input.value);
			if (!isValid) {
				document.getElementById("error2").innerText = "Please enter numbers only.";
				input.value = '';
				document.getElementById("submitBtn").disabled = true;
			} else {
				document.getElementById("error2").innerText = "";
				document.getElementById("submitBtn").disabled = false;
			}
		}

		function checkNumber3(input) {
			var isValid = /^\d+$/.test(input.value);
			if (!isValid) {
				document.getElementById("error3").innerText = "Please enter numbers only.";
				input.value = '';
				document.getElementById("submitBtn").disabled = true;
			} else if (input.value.length < 10 || input.value.length > 15) {
				document.getElementById("error3").innerText = "Please enter a number between 10 and 15 digits.";
				document.getElementById("submitBtn").disabled = true;
			} else {
				document.getElementById("error3").innerText = "";
				document.getElementById("submitBtn").disabled = false;
			}
		}

	</script>
	<!-- Offcanvas menu END -->

	<!-- Header START -->
	<header class="header-transparent">
		<!-- Logo Nav START -->
		<nav class="navbar navbar-dark-static navbar-expand-xl">
			<div class="container-fluid px-md-5">
				<!-- Logo START -->
				<a class="navbar-brand" href="<?= base_url('/') ?>">
					<img class="navbar-brand-item" alt="Book My Yacht Logo"
						src="<?php echo site_url('yachtProject/'); ?>assets/images/bmy-logo.png" alt="logo">
				</a>
				<!-- Logo END -->

				<!-- Responsive navbar toggler -->
				<button class="navbar-toggler ms-auto me-3 p-0" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-animation">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</button>

				<!-- Main navbar START -->
				<div class="navbar-collapse collapse" id="navbarCollapse">
					<ul class="navbar-nav navbar-nav-scroll mx-auto">

						<!-- Nav item Link -->
						<li class="nav-item ">
							<a class="nav-link " href="<?= base_url('us/contact'); ?>">Post Free Listing</a>
						</li>
						<!-- Nav item Link -->
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('us/yacht-list'); ?>">Yacht
								Rent</a> </li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="listingMenu" data-bs-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Yacht Types</a>
							<ul class="dropdown-menu" aria-labelledby="listingMenu">
								<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Motor Yachts</a>
								</li>
								<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Sailing
										Yachts</a></li>
								<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Catamarans</a>
								</li>
								<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Trimarans</a>
								</li>
								<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Explorer
										Yachts</a></li>
								<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Sports Yachts</a>
								</li>
								<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Luxury Yachts</a>
								</li>
								<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Trawler
										Yachts</a></li>
								<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Classic
										Yachts</a></li>
								<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Day Sailors</a>
								</li>
								<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Performance
										Yachts</a></li>
								<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Fishing
										Yachts</a></li>
								<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Charter
										Yachts</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">See More </a>
								</li>
							</ul>
						</li>

						<!-- Nav item Link -->
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('us/services'); ?>">Offers</a>
						</li>

						<!-- Nav item Link -->
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('us/gallery'); ?>">Gallery</a>
						</li>
						<!-- Nav item Link -->
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('us/about'); ?>">About</a> </li>

						<!-- Nav item Link -->
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('us/contact'); ?>">Contact</a>
						</li>

					</ul>
				</div>
				<div class="nav flex-row ms-xl-auto">
					<button class="btn btn-sm mb-0 enquiry-top border border-white text-white" type="button"
						data-bs-toggle="offcanvas" data-bs-target="#offcanvasBookstay"
						aria-controls="offcanvasBookstay"><i class="bi bi-calendar-week me-2"></i>Enquiry</button>
				</div>
			</div>
		</nav>
	</header>
	<style>
		.enquiry-top:hover {
			background-color: #E8c02c !important;
			color: black !important;
			border: none !important;
		}
	</style>
	<!-- Header END -->
	<main>
		<section class="full-landing-image mid" id="mouseyatch" class="position-relative py-8 py-sm-9">
			<div class="cont1">
				<h2 class="glow"> Go <br> Find <br> & Sail. </h2>
				<h2 class="glow"> Go <br> Find <br> & Sail. </h2>
			</div>
		</section>

		<div class="filter">
			<div class="row">
				<div class="col-xl-12 position-relative mt-n3 mt-xl-n9 mx-xl-4">
					<form class="card shadow rounded-3 position-relative p-4 pe-md-5 pb-5 pb-md-4" method="GET" action="<?= base_url('filter') ?>">
						<?= csrf_field(); ?>

						<div class="row">
							<div class="col-sm-2">
								<div class="form-control-border form-control-transparent form-fs-md  ">
									<div class="flex-grow-1">
										<label class="form-label">Location</label>
										<select name="location" class="form-select js-choice">
											<option value="">Select</option>
											<option>Alabama</option>
											<option>Alaska</option>
											<option>Arizona</option>
											<option>Arkansas</option>
											<option>California</option>
											<option>Colorado</option>
											<option>Connecticut</option>
											<option>Delaware</option>
											<option>Florida</option>
											<option>Georgia</option>
											<option>Hawaii</option>
											<option>Idaho</option>
											<option>Illinois</option>
											<option>Indiana</option>
											<option>Iowa</option>
											<option>Kansas</option>
											<option>Kentucky</option>
											<option>Louisiana</option>
											<option>Maine</option>
											<option>Maryland</option>
											<option>Massachusetts</option>
											<option>Michigan</option>
											<option>Minnesota</option>
											<option>Mississippi</option>
											<option>Missouri</option>
											<option>Montana</option>
											<option>Nebraska</option>
											<option>Nevada</option>
											<option>New Hampshire</option>
											<option>New Jersey</option>
											<option>New Mexico</option>
											<option>New York</option>
											<option>North Carolina</option>
											<option>North Dakota</option>
											<option>Ohio</option>
											<option>Oklahoma</option>
											<option>Oregon</option>
											<option>Pennsylvania</option>
											<option>Rhode Island</option>
											<option>South Carolina</option>
											<option>South Dakota</option>
											<option>Tennessee</option>
											<option>Texas</option>
											<option>Utah</option>
											<option>Vermont</option>
											<option>Virginia</option>
											<option>Washington</option>
											<option>West Virginia</option>
											<option>Wisconsin</option>
											<option>Wyoming</option>

										</select>
									</div>
								</div>
							</div>

							<div class="col-sm-2">
								<div class="form-control-border form-control-transparent form-fs-md ">
									<div class="flex-grow-1">
										<label class="form-label">Date</label>
										<input type="text" name="booking_date" id="datepicker" class="form-control"
											placeholder="Booking Date" style="padding: 15px 10px; margin-top: -20px;">
									</div>
								</div>
							</div>

							<script>
								$(function () {
									var today = new Date();
									$('#datepicker').datepicker({
										minDate: today,
										maxDate: '+2y',
										dateFormat: 'yy-mm-dd',
										beforeShow: function (input, inst) {
											setTimeout(function () {
												inst.dpDiv.find('.ui-datepicker-current').trigger('click');
											}, 0);
										},
										beforeShowDay: function (date) {
											var endDate = new Date();
											endDate.setFullYear(date.getFullYear(), date.getMonth() + 1, 0);
											return [true, '', date <= endDate ? '' : 'ui-datepicker-unselectable'];
										}
									});
								});
							</script>

							<div class="col-sm-2">
								<div class="form-control-border form-control-transparent form-fs-md">
									<div class="flex-grow-1">
										<label class="form-label" style="margin-top: -7px;">Guests</label>
										<div id="Guests">
											<div id="guestSection1" style="margin-top: -20px;">
												<select name="guest" class="form-select js-choice"
													onchange="convertIfSelectedguest(this, 'guestSection1')"
													style="padding-bottom: 15px; padding-top: 15px;">
													<option value="">Select</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5<sup>+</sup></option>
													<option value="convert">Custom</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>

							<script>
								function convertIfSelectedguest(selectElement, containerId) {
									if (selectElement.value === "convert") {
										var container = document.getElementById(containerId);
										var input = document.createElement("input");
										input.type = "text";
										input.name = "guest";
										input.style.cssText = 'background-color: transparent; width:100%;  border-radius: 5px; padding: 16px 16px 12.8px; border: 1px solid #857be4; outline:none';
										input.addEventListener('input', function (event) {
											this.value = this.value.replace(/[^0-9]/g, '');
										});
										container.innerHTML = '';
										container.appendChild(input);
									}
								}
								function convertIfSelectedcabin(selectElement, containerId) {
									if (selectElement.value === "convert") {
										var container = document.getElementById(containerId);
										var input = document.createElement("input");
										input.type = "text";
										input.name = "cabin";
										input.style.cssText = 'background-color: transparent; width:100%;  border-radius: 5px; padding: 16px 16px 12.8px; border: 1px solid #857be4; outline:none';
										input.addEventListener('input', function (event) {
											this.value = this.value.replace(/[^0-9]/g, '');
										});
										container.innerHTML = '';
										container.appendChild(input);
									}
								}
							</script>

							<div class="col-sm-2">
								<div class="form-control-border form-control-transparent form-fs-md ">
									<div class="flex-grow-1">
										<label class="form-label">Cabins</label>
										<div id="Cabins">
											<div id="guestSection2" style="margin-top: -20px;">
												<select name="cabin" class="form-select js-choice"
													onchange="convertIfSelectedcabin(this, 'guestSection2')"
													style="padding-bottom: 15px; padding-top: 15px;">
													<option value="">Select</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5+</option>
													<option value="convert">Custom</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!--  -->
							<div class="col-sm-2">
								<div class="form-control-border form-control-transparent form-fs-md ">
									<div class="flex-grow-1">
										<label class="form-label">Size</label>
										<select class="form-select js-choice" name="yacht_length">
											<option value="">Select</option>
											<option value="40">30 - 40 ft</option>
											<option value="50">40 - 50 ft</option>
											<option value="60">50 - 60 ft</option>
											<option value="70">60 - 70 ft</option>
											<option value="80">70 - 80 ft</option>
											<option value="90">80 - 90 ft</option>
											<option value="100">90 - 100 ft</option>
											<option value="1000">Above 100 ft</option>
										</select>
									</div>
								</div>
							</div>

							<div class="col-sm-2">
								<input type="submit" class="btn search-top text-white rounded-pill" value='Search'>

							</div>
							<style>
								.search-top {
									background-color: #061138;
									padding-top: 13px;
								}

								.search-top:hover {
									background-color: #E8c02c !important;
									color: black !important;
									border: none !important;
									box-shadow: 4px 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
								}
							</style>
						</div>
					</form>
				</div>
			</div>
		</div>

		<section class="pt-5 pt-md-8 pb-0">
			<div class="container-fluid px-lg-5">
				<!-- Title -->
				<div class="row mb-4">
					<div class="col-12 text-center">
						<h2>Our Favorite Yachts</h2>
					</div>
				</div>

				<div class="tiny-slider arrow-round arrow-blur rounded-3 overflow-hidden">
					<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false"
						data-items-xl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">

						<!-- to fetch record from database and set a limit -->

						<!-- Card item START -->
						<div>
							<div class="card card-metro overflow-hidden">
								<img alt="38 Cruiser" src="<?= base_url() ?>uploads/thumbnail/GuletYachtMain.jpg"
									alt="Book My Yacht" class="img-fluid" style="object-fit: cover; height: 400px;">
								<div class="card-img-overlay d-flex">
									<!-- Info -->
									<div class="card-text mt-auto">
										<h4><a href="<?= base_url() ?>us/gulet-yacht"
												class="text-white stretched-link">Gulet Yacht</a>
										</h4>
										<a href="<?= base_url('us/gulet-yacht') ?>"
											class="btn btn-link text-white p-0 mb-0">Explore More <i
												class="fa-solid fa-arrow-right-long fa-fw"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div>
							<div class="card card-metro overflow-hidden">
								<img alt="38 Cruiser" src="<?= base_url() ?>uploads/thumbnail/catamaranYacht.avif"
									alt="Book My Yacht" class="img-fluid" style="object-fit: cover; height: 400px;">
								<div class="card-img-overlay d-flex">
									<!-- Info -->
									<div class="card-text mt-auto">
										<h4><a href="<?= base_url() ?>us/catamaranYacht"
												class="text-white stretched-link">Catamarans</a>
										</h4>
										<a href="<?= base_url('us/catamaranYacht') ?>"
											class="btn btn-link text-white p-0 mb-0">Explore More <i
												class="fa-solid fa-arrow-right-long fa-fw"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div>
							<div class="card card-metro overflow-hidden">
								<img alt="38 Cruiser" src="<?= base_url() ?>uploads/thumbnail/MotorYachtMain.jpg"
									alt="Book My Yacht" class="img-fluid" style="object-fit: cover; height: 400px;">
								<div class="card-img-overlay d-flex">
									<!-- Info -->
									<div class="card-text mt-auto">
										<h4><a href="<?= base_url() ?>us/MotorYachts"
												class="text-white stretched-link">Motor Yachts</a>
										</h4>
										<a href="<?= base_url('us/MotorYachts') ?>"
											class="btn btn-link text-white p-0 mb-0">Explore More <i
												class="fa-solid fa-arrow-right-long fa-fw"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->
						<!-- Card item START -->
						<div>
							<div class="card card-metro overflow-hidden">
								<img alt="38 Cruiser" src="<?= base_url() ?>uploads/thumbnail/LuxuryYachtMain.jpg"
									alt="Book My Yacht" class="img-fluid" style="object-fit: cover; height: 400px;">
								<div class="card-img-overlay d-flex">
									<!-- Info -->
									<div class="card-text mt-auto">
										<h4><a href="<?= base_url() ?>us/LuxuryYachts"
												class="text-white stretched-link">Luxury Yachts</a>
										</h4>
										<a href="<?= base_url('us/yacht-list') ?>"
											class="btn btn-link text-white p-0 mb-0">Explore More <i
												class="fa-solid fa-arrow-right-long fa-fw"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->

					</div>
					<div class="row mb-4">
						<div class="col-12 text-center">
							<a href="<?= base_url('us/yacht-list'); ?>" class="btn btn-dark mt-5">Explore More</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="pt-0 pt-lg-5" style="background-color:#061138; margin:50px 0px;">
			<div class="container" id="bestfacilities">
				<div class="row g-4 align-items-center">
					<div class="col-lg-6">
						<!-- Title -->
						<h2>We Provide Our Best Facilities For You</h2>
						<p>We provide the best yachts that will make your time spent a memorable one. The yachts are
							quality and well-maintained.
						</p>
						<!-- Button -->
						<a href="<?= base_url('us/yacht-list'); ?>" class="btn btn-dark mb-4">Bookings Open</a>
						<!-- Services -->
						<div class="row g-sm-4">
							<div class="col-sm-6">
								<ul class="list-group list-group-borderless mt-2 mb-0">
									<li class="list-group-item">
										<h6 class="fw-normal mb-0"><i
												class="fa-solid fa-wifi fa-fw text-primary me-2"></i>Free Wifi</h6>
									</li>

									<li class="list-group-item">
										<h6 class="fw-normal mb-0">
											<i class="fa-solid fa-person-swimming fa-fw text-primary me-2"></i>Swimming
											Pool
										</h6>
									</li>

									<li class="list-group-item">
										<h6 class="fw-normal mb-0"><i
												class="fa-solid fa-person-shelter fa-fw text-primary me-2"></i> Private
											Space
										</h6>
									</li>

									<li class="list-group-item">
										<h6 class="fw-normal mb-0"><i
												class="fa-solid fa-utensils fa-fw text-primary me-2"></i>Food &
											Refreshment</h6>
									</li>
								</ul>
							</div>

							<div class="col-sm-6">
								<ul class="list-group list-group-borderless" style="margin-top: 10px;">
									<li class="list-group-item">
										<h6 class="fw-normal mb-0"><i
												class="fa-solid fa-bolt fa-fw text-primary me-2"></i>Free Electricity
										</h6>
									</li>

									<li class="list-group-item">
										<h6 class="fw-normal mb-0"><i
												class="fa-solid fa-dumbbell fa-fw text-primary me-2"></i>Gym Space</h6>
									</li>

									<li class="list-group-item">
										<h6 class="fw-normal mb-0"><i
												class="fa-solid fa-spa fa-fw text-primary me-2"></i>SPA</h6>
									</li>

									<li class="list-group-item">
										<h6 class="fw-normal mb-0">
											<!--<i class="fa-solid fa-shield-halved"></i>-->
											<i class="fa-solid fa-shield-halved fa-fw text-primary me-2"></i>Safety
											Equipment
										</h6>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="bg-light rounded-3 h-100 p-4">
							<!-- Slider START -->
							<div class="tiny-slider arrow-round arrow-blur">
								<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="2"
									data-dots="false" data-items-xl="1" data-items-md="1">

									<!-- Card START -->
									<div class="card bg-transparent">
										<div class="row g-4 align-items-center">

											<div class="col-sm-6">
												<img src="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/creatememories.png"
													class="img-fluid card-img" alt="...">
											</div>
											<div class="col-sm-6">
												<div class="card-body p-0">
													<h6 class="fw-normal mb-3" style="color:#061138">Create Memories
													</h6>
													<h4 class="card-title mb-3"><a
															href="<?= base_url('us/yacht-list') ?>"
															class="stretched-link">Premium Yacht Services</a></h4>
													<a href="<?= base_url('us/yacht-list') ?>"
														class="btn btn-link p-0">Explore Now <i
															class="bi bi-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>

									<div class="card bg-transparent">
										<div class="row g-4 align-items-center">
											<div class="col-sm-6">
												<img src="<?php echo site_url('yachtProject/'); ?>assets/images/gif/21.jpg"
													class="img-fluid card-img" alt="...">

											</div>
											<div class="col-sm-6">
												<div class="card-body p-0">
													<h6 class="fw-normal mb-3" style="color:#061138">Bachelor Party</h6>
													<h4 class="card-title mb-3"><a href="<?= base_url('us/contact'); ?>"
															class="stretched-link">Hassle Free Booking </a></h4>
													<a href="<?= base_url('us/contact') ?>"
														class="btn btn-link p-0">Explore Now <i
															class="bi bi-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>

									<div class="card bg-transparent">
										<div class="row g-4 align-items-center">
											<div class="col-sm-6">
												<img src="<?php echo site_url('yachtProject/'); ?>assets/images/gif/22.jpg"
													class="img-fluid card-img" alt="...">

											</div>
											<div class="col-sm-6">
												<div class="card-body p-0">
													<h6 class="fw-normal mb-3" style="color:#061138">Aqua Adventure</h6>
													<h4 class="card-title mb-3"><a href="<?= base_url('us/contact') ?>"
															class="stretched-link">
															Sailing
															& Spa Services </a></h4>
													<a href="<?= base_url('us/contact'); ?>"
														class="btn btn-link p-0">Explore Now <i
															class="bi bi-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- Card END -->
								</div>
							</div>
							<!-- Slider END -->
						</div>
					</div>
				</div> <!-- Row END -->
			</div>
		</section>

		<!-- =======================
			Rooms START -->
		<section class="pt-5 pt-md-8 pb-0" id="FavoriteYatchs">
			<div class="container-fluid px-lg-5">

				<!-- Title -->
				<div id="Fv">
					<div class="row mb-4">
						<div class="col-xxl-12 mx-auto">
							<div class="d-sm-flex justify-content-between align-items-center ">
								<h2 class="mb-0">Yacht's &nbsp;Spotlight</h2>
								<a href="<?= base_url('us/yacht-list'); ?>" class="btn btn-dark mb-0 d-grid">See all
									yacht</a>
							</div>
						</div>
					</div>
				</div>
				<div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
					<div class="tiny-slider-inner" data-gutter="0" data-arrow="true" data-dots="false" data-items="1">
						<!-- Card item START -->
						<div>
							<div class="card overflow-hidden rounded-0 h-600px"
								style="background-image:url(<?php echo site_url('yachtProject/'); ?>assets/images/yatch/mywayYacht.jpg); background-position: center left; background-size: cover;">
								<div class="bg-overlay bg-dark opacity-3"></div>

								<!-- Card body content -->
								<div class="row mt-auto justify-content-end z-index-9">
									<div class="col-md-8 col-xl-6 col-xxl-4">
										<div class="card-body bg-mode rounded p-3 p-md-5 m-2 m-lg-6">
											<!-- Title -->
											<h4>Myway Yacht</h4>

											<!-- Content -->
											<ul class="nav h6 fw-light nav-divider mb-2 mb-sm-3">
												<li class="nav-item">36 m (118'1" )</li>
											</ul>

											<p class="mb-3">The motor yacht Myway has an overall length of 36 meters.
												The Netherlands-based Mulder Shipyard built the boat, which they debuted
												as Myway in 2021.</p>

											<!-- List -->
											<ul class="list-inline hstack flex-wrap gap-2 mb-3">
												<li class="list-inline-item h6 fw-normal mb-0">
													<i class="bi bi-check-lg text-success me-1"></i>2 x Sea-Scooters
												</li>
												<li class="list-inline-item h6 fw-normal mb-0">
													<i class="bi bi-check-lg text-success me-1"></i>1 x Jet-Ski
												</li>
											</ul>

											<!-- Buttons -->
											<a href="<?= base_url('us/yacht-detail'); ?>1"
												class="btn btn-light mb-0">Reserve <i
													class="fa-solid fa-arrow-right-long"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->

						<!-- Card item START -->
						<div>
							<div class="card overflow-hidden rounded-0 h-600px"
								style="background-image:url(<?php echo site_url('yachtProject/'); ?>assets/images/yatch/eternityYacht.jpg); background-position: center left; background-size: cover;">

								<!-- Background dark overlay -->
								<div class="bg-overlay bg-dark opacity-3"></div>

								<!-- Card body content -->
								<div class="row mt-auto justify-content-end z-index-9">
									<div class="col-md-8 col-xl-6 col-xxl-4">
										<div class="card-body bg-mode rounded p-3 p-md-5 m-2 m-lg-6">
											<!-- Title -->
											<h4>Eternity Yacht</h4>

											<!-- Content -->
											<ul class="nav h6 fw-light nav-divider mb-2 mb-sm-3">
												<li class="nav-item">36 m (118'1" )</li>
											</ul>

											<p class="mb-3">Having an overall length of 36 meters, the motor yacht
												Eternity With a 7.2 m beam, 2.25 m draught, and 146 GT of space, the
												superyacht is quite large. </p>

											<!-- List -->
											<ul class="list-inline hstack flex-wrap gap-2 mb-3">
												<li class="list-inline-item h6 fw-normal mb-0">
													<i class="bi bi-check-lg text-success me-1"></i>Ocean View
												</li>
												<li class="list-inline-item h6 fw-normal mb-0">
													<i class="bi bi-check-lg text-success me-1"></i>Private Deck
												</li>
												<li class="list-inline-item h6 fw-normal mb-0">
													<i class="bi bi-check-lg text-success me-1"></i>Living Roof
												</li>
											</ul>

											<!-- Buttons -->
											<a href="<?= base_url('us/yacht-detail'); ?>2"
												class="btn btn-light mb-0">Reserve <i
													class="fa-solid fa-arrow-right-long"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->

						<!-- Card item START -->
						<div>
							<div class="card overflow-hidden rounded-0 h-600px"
								style="background-image:url(<?php echo site_url('yachtProject/'); ?>assets/images/yatch/illusionYacht.jpg); background-position: center left; background-size: cover;">
								<!-- Background dark overlay -->
								<div class="bg-overlay bg-dark opacity-3"></div>

								<!-- Card body content -->
								<div class="row mt-auto justify-content-end z-index-9">
									<div class="col-md-8 col-xl-6 col-xxl-4">
										<div class="card-body bg-mode rounded p-3 p-md-5 m-2 m-lg-6">
											<!-- Title -->
											<h4>Illusions Yacht</h4>

											<!-- Content -->
											<ul class="nav h6 fw-light nav-divider mb-2 mb-sm-3">
												<li class="nav-item">31.7 m (104'0" )</li>
											</ul>

											<p class="mb-3">A motor yacht with a 31.7 m overall length is called
												Illusions. The superyacht has a volume of 143 GT, a beam of 6.12 m, and
												a draught of 2.36 m.</p>

											<!-- List -->
											<ul class="list-inline hstack flex-wrap gap-2 mb-3">
												<li class="list-inline-item h6 fw-normal mb-0">
													<i class="bi bi-check-lg text-success me-1"></i>3 x Helm Chairs
												</li>
												<li class="list-inline-item h6 fw-normal mb-0">
													<i class="bi bi-check-lg text-success me-1"></i>Wet Bar and BBQ
													grill
												</li>
											</ul>

											<!-- Buttons -->
											<a href="<?= base_url('us/yacht-detail') ?>3"
												class="btn btn-light mb-0">Reserve <i
													class="fa-solid fa-arrow-right-long"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->
					</div>
				</div>
				<!-- Slider END -->
			</div>
		</section>
		<!-- ======================= 
			Rooms END -->
		<section class="pt-5 pt-md-8 pb-0"
			style="background-image: url('<?php echo site_url('yachtProject/'); ?>assets/images/gallery/500.jpg'); margin-top: 20px;">
			<div class="container-fluid px-lg-5">
				<div class="row mb-4" id="happyMoments">
					<div class="col-12 text-center">
						<h2 class="mb-0">Some Of Our Happy Moments</h2>
					</div>
				</div>

				<div class="row g-4">
					<div class="col-xl-6" id="happyMoments2">
						<div class="card overflow-hidden h-600px" style="background-image:url(<?php echo site_url('yachtProject/'); ?>assets/images/yatch/yatchcouple.png); 
						background-repeat: no-repeat;
						background-size: contain;
						margin-top:80px">
						</div>
					</div>

					<div class="col-xl-6 m-xxl-auto">
						<div class="card card-body bg-transparent p-xxl-6">
							<h3>We make your yacht booking better than others! Here's how.....</h3>
							<p>We provide you with the best options available when it comes to booking a yacht as per
								your interest which makes your time spent worth one.</p>
							<div class="row g-4">
								<div class="col-12">
									<div class="d-flex">
										<div
											class="icon-lg bg-primary bg-opacity-10 flex-shrink-0 text-danger rounded-circle">
											<!--<i class="fa-regular fa-thumbs-up"></i>-->
											<i class="fa-solid fa-calendar-days icon-color"
												style="padding-top :15px; color: #061138;"></i>
										</div>
										<div class="ps-3">
											<h5 class="mt-2">Booking Made Easy</h5>
											<p class="mb-0">Explore your maritime dreams effortlessly through our vast
												selection. We make your bookings much easier with plenty of options
												available, ensuring your journey on the water is tailored to perfection.
											</p>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="d-flex">
										<div
											class="icon-lg bg-primary bg-opacity-10 flex-shrink-0 text-danger rounded-circle">
											<i class="fa-solid fa-shield icon-color"
												style="padding-top :15px; color: #061138;"></i>
										</div>
										<div class="ps-3">
											<h5 class="mt-2">Secure Payments</h5>
											<p class="mb-0">Rest assured, your payments are securely handled for a
												seamless experience. Our priority is to ensure the security of our
												customers' transactions, making the process effortless and worry-free.
											</p>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="d-flex">
										<div class="icon-lg bg-primary bg-opacity-10 flex-shrink-0 rounded-circle">
											<i class="fas fa-headset" style="color: #0e2884;"></i>
										</div>
										<div class="ps-3">
											<h5 class="mt-2">24/7 Supports</h5>
											<p class="mb-0">Count on us for comprehensive support in every possible way.
												We are dedicated to assisting you in every aspect, ensuring a seamless
												experience at every step.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="parallax">
			<div class="banner__overlay"></div>
			<div class="wrap-center">
				<div class="banner-centered" id="banner-text">
					<h3 style="color: #fff;">Reasons to Choose Us </h3>
				</div>
				<div class="row" style="margin-top:20px;">
					<div class="col-sm-4">
						<center>
							<div class="flip-box">
								<div class="flip-box-inner">
									<div class="flip-box-front">
										<img src="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/yacht2.png"
											alt="Paris" width="100">
									</div>
									<div class="flip-box-back">
										<img src="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/yacht2.png"
											alt="Paris" width="100">
									</div>
								</div>
							</div>
							<h5>Luxury and Quality <br> Yacht</h5>
							<div class="vl"></div>
							<a href="<?= base_url('us/yacht-list'); ?>" class="btn">CHOOSE YACHT</a>
							<button class="btn btn-dark" class="btn-hide">CHOOSE YACHT</button>
						</center>
					</div>

					<div class="col-sm-4">
						<center>
							<div class="flip-box">
								<div class="flip-box-inner">
									<div class="flip-box-front">
										<img src="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/boatrace.png"
											alt="Book My Yacht" width="50">
									</div>
									<div class="flip-box-back">
										<img src="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/boatrace.png"
											alt="Book My Yacht" width="50">
									</div>
								</div>
							</div>

							<h5 style="color:whitesmoke;">Professional and Expert <br> Crews</h5>
							<div class="vl"></div>
							<a href="<?= base_url('us/yacht-list'); ?>" class="btn">CHOOSE YACHT</a>
							<button class="btn btn-dark" class="btn-hide">CHOOSE YACHT</button>
						</center>
					</div>
					<div class="col-sm-4">
						<center>
							<div class="flip-box">
								<div class="flip-box-inner">
									<div class="flip-box-front">
										<img src="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/mbag.png"
											alt="Book My Yacht" width="50">
									</div>
									<div class="flip-box-back">
										<img src="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/mbag.png"
											alt="Book My Yacht" width="50">
									</div>
								</div>
							</div>
							<h5 style="color:whitesmoke;">Value for Spending <br> Money</h5>
							<div class="vl"></div>
							<a href="<?= base_url('us/yacht-list'); ?>" class="btn">CHOOSE YACHT</a>
							<button class="btn btn-dark" class="btn-hide">CHOOSE YACHT</button>
						</center>
					</div>
				</div>
			</div>
		</div>
		<section>
			<div class="container-fluid">
				<div class="row mb-md-4">
					<div class="col-12 mx-auto text-center mb-4">
						<h2 class="mb-0">Our Yacht Precious Moments</h2>
					</div>
				</div>

				<div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
					<div class="tiny-slider-inner d-flex align-items-end" data-autoplay="true" data-edge="2"
						data-arrow="true" data-dots="false" data-items="6" data-items-lg="4" data-items-sm="2">
						<div>
							<a data-glightbox="" data-gallery="gallery"
								href="<?php echo site_url('yachtProject/'); ?>assets/images/yatch/05.jpg">
								<div class="card card-element-hover card-overlay-hover overflow-hidden">
									<img src="<?php echo site_url('yachtProject/'); ?>assets/images/yatch/05.jpg"
										class="rounded-3" alt="Book My Yacht">
									<div class="hover-element w-100 h-100">
										<i
											class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
									</div>
								</div>
							</a>
						</div>
						<div>
							<a data-glightbox="" data-gallery="gallery"
								href="<?php echo site_url('yachtProject/'); ?>assets/images/yatch/02.jpg">
								<div class="card card-element-hover card-overlay-hover overflow-hidden">
									<img src="<?php echo site_url('yachtProject/'); ?>assets/images/yatch/02.jpg"
										class="rounded-3" alt="Book My Yacht">
									<div class="hover-element w-100 h-100">
										<i
											class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
									</div>
								</div>
							</a>
						</div>
						<div>
							<a data-glightbox="" data-gallery="gallery"
								href="<?php echo site_url('yachtProject/'); ?>assets/images/yatch/08.jpg">
								<div class="card card-element-hover card-overlay-hover overflow-hidden">
									<!-- Image -->
									<img src="<?php echo site_url('yachtProject/'); ?>assets/images/yatch/08.jpg"
										class="rounded-3" alt="Book My Yacht">
									<!-- Full screen button -->
									<div class="hover-element w-100 h-100">
										<i
											class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
									</div>
								</div>
							</a>
						</div>
						<div>
							<a data-glightbox="" data-gallery="gallery"
								href="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/y25.jpg">
								<div class="card card-element-hover card-overlay-hover overflow-hidden">
									<img src="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/y25.jpg"
										class="rounded-3" alt="Book My Yacht">
									<div class="hover-element w-100 h-100">
										<i
											class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
									</div>
								</div>
							</a>
						</div>
						<div>
							<a data-glightbox="" data-gallery="gallery"
								href="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/06yatch.jpeg">
								<div class="card card-element-hover card-overlay-hover overflow-hidden">
									<!-- Image -->
									<img src="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/06yatch.jpeg"
										class="rounded-3" alt="Book My Yacht">
									<!-- Full screen button -->
									<div class="hover-element w-100 h-100">
										<i
											class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
									</div>
								</div>
							</a>
						</div>
						<!-- Slider item -->
						<!-- Slider item -->
						<div>
							<a data-glightbox="" data-gallery="gallery"
								href="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/05yatch.jpeg">
								<div class="card card-element-hover card-overlay-hover overflow-hidden">
									<!-- Image -->
									<img src="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/05yatch.jpeg"
										class="rounded-3" alt="Book My Yacht">
									<!-- Full screen button -->
									<div class="hover-element w-100 h-100">
										<i
											class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
									</div>
								</div>
							</a>
						</div>

						<!-- Slider item -->
						<div>
							<a data-glightbox="" data-gallery="gallery"
								href="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/eMOTION-81.jpg">
								<div class="card card-element-hover card-overlay-hover overflow-hidden">
									<!-- Image -->
									<img src="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/eMOTION-81.jpg"
										class="rounded-3" alt="Book My Yacht">
									<!-- Full screen button -->
									<div class="hover-element w-100 h-100">
										<i
											class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
									</div>
								</div>
							</a>
						</div>
						<div>
							<a data-glightbox="" data-gallery="gallery"
								href="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/09yatch.jpeg">
								<div class="card card-element-hover card-overlay-hover overflow-hidden">
									<!-- Image -->
									<img src="<?php echo site_url('yachtProject/'); ?>assets/images/gallery/09yatch.jpeg"
										class="rounded-3" alt="Book My Yacht">
									<!-- Full screen button -->
									<div class="hover-element w-100 h-100">
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- Slider END	 -->
			</div>
		</section>
	</main>
	<footer class="footer" style="background-color: red;">
		<div class="footer-item">
			<a href="<?= base_url('/'); ?>">
				<img src="<?php echo site_url('yachtProject/'); ?>assets/images/bmy-logo.png" alt="logo" width="170px"
					style="margin-top: 5px;">
			</a>
			<h5 class="text-white mt-3 mb-md-3">Book My Yacht</h5>
			<p class="mb-2">
				<a href="wa.me/17862977769" class="text-muted text-primary-hover"><i class="bi bi-telephone me-2"></i>&nbsp;+1(786)-297-7769</a>
			</p>
			<p class="mb-0"><a href="mailto:booking@bookmyyacht.us" class="text-muted text-primary-hover"><i
						class="bi bi-envelope me-2"></i>&nbsp;booking@bookmyyacht.us</a></p>
			<p class="mb-0"><a href="mailto:booking@bookmyyacht.us" class="text-muted text-primary-hover"><i
						class="bi bi-map me-2"></i>&nbsp;4910 8th Green St, Dover, DE 19901</a></p>
		</div>
		<div class="footer-item">
			<h5 class="text-white mb-2 mb-md-4 my-4">Quick Links</h5>
			<ul class="nav flex-column text-primary-hover">
				<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/contact'); ?>">Post Free
						Listing</a></li>
				<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/yacht-list') ?>">Find
						Yachts</a></li>
				<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/services'); ?>">Offers</a>
				</li>
				<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/gallery'); ?>">Gallery</a>
				</li>
				<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/contact'); ?>">Contact</a>
				</li>
			</ul>
		</div>
		<div class="footer-item">
			<h5 class="text-white mb-2 mb-md-4 my-4">Booking</h5>
			<ul class="nav flex-column text-primary-hover">
				<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/about'); ?>">About Us</a>
				</li>
				<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('terms') ?>">Terms &amp;
						Conditions</a></li>
				<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('privacy') ?>">Privacy Policy</a>
				</li>
				<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('refund') ?>">Refund Policy</a>
				</li>
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
</body>
<!-- =======================
	Footer END -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="<?php echo site_url('yachtProject/'); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="<?php echo site_url('yachtProject/'); ?>assets/vendor/choices/js/choices.min.js"></script>
<script src="<?php echo site_url('yachtProject/'); ?>assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="<?php echo site_url('yachtProject/'); ?>assets/vendor/flatpickr/js/flatpickr.min.js"></script>
<script src="<?php echo site_url('yachtProject/'); ?>assets/vendor/glightbox/js/glightbox.js"></script>

<!-- ThemeFunctions -->
<script src="<?php echo site_url('yachtProject/'); ?>assets/js/functions.js"></script>

</html>