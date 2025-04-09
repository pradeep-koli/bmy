<!DOCTYPE html>
<html lang="en">

<head>
	<title>Yacht Booking</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="bookmyyacht.us">
	<meta name="description" content="Book My Yachy yacht booking page">

	<!-- faviicon -->
	<link rel="icon" href="<?php echo site_url('yachtProject/us/'); ?>images/favicon.ico" type="image/x-icon">

	<!-- Google Font -->

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="<?= site_url('YACHTBookingPages/'); ?>assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= site_url('YACHTBookingPages/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= site_url('YACHTBookingPages/'); ?>assets/vendor/flatpickr/css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="<?= site_url('YACHTBookingPages/'); ?>assets/vendor/choices/css/choices.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="<?= site_url('YACHTBookingPages/'); ?>assets/css/style.css">

	<!-- Custom links Date -->

	<style type="text/css">
		.custom-input {
			width: 100%;
			padding: 8px 20px;
			font-size: 1rem;
			line-height: 1.5;
			color: #495057;
			background-color: #fff;
			background-clip: padding-box;
			border: 1px solid #ced4da;
			transition: border-color 0.3s ease;
			border-radius: 8px;
		}

		.custom-input:focus {
			border-color: #857be4;
			outline: 0;
		}

		.card.card-body.bg-light {
			background-color: #ffffff !important;
		}
	</style>

</head>

<body>

	<!-- HEADER Start -->
	<?php
	include 'header.php';
	?>
	<!-- HEADER End -->

	<!-- MAIN Start -->
	<!--Page Title-->
	<section class="page-banner">
		<div class="image-layer" style="background-image:url(<?= base_url('yachtProject/us/'); ?>images/background/banner-1.jpg);"></div>

		<div class="banner-inner" style="background-color: #00000073;">
			<div class="auto-container">
				<div class="inner-container clearfix">
					<h1>Booking</h1>
					<div class="page-nav">
						<ul class="bread-crumb clearfix">
							<li><a href="<?= base_url('/') ?>">Home</a></li>
							<li><a href="#">Pages</a></li>
							<li>Booking Page</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<main>
		<section>
			<div class="container position-relative" data-sticky-container>
				<div class="row g-4">
					<!-- Left Content START -->
					<div class="col-xl-9">
						<div class="vstack">

							<!-- Main Yacht section START -->

							<!-- Card START -->
							<div class="card border">
								<!-- Card body START -->
								<div class="card-body">
									<div class="row align-items-center">
										<!-- Image -->
										<div class="col-md-6">
											<!--<h3 class=""></h3>-->
											<h4 class="text-center card-title mb-0" style="font-weight: bolder;"><?php echo $record['hname']; ?></h4>
											<img src="<?= base_url('uploads/thumbnail/' . $record['thumb-img']) ?>" class="img-thumbnail" style="object-fit: cover;">
										</div>

										<!-- card body -->
										<div class="col-md-6">
											<!-- Title and rating -->
											<table class="table table-hover table-bordered table-striped">
												<tbody>
													<tr>
														<td>Yacht Type</td>
														<td><?php echo $record['yacht_type']; ?></td>
													</tr>

													<tr>
														<td>Yacht Name</td>
														<td><?php echo $record['hname']; ?></td>
													</tr>

													<tr>
														<td>Yacht Length</td>
														<td><?php echo $record['yacht_length']; ?></td>
													</tr>

													<tr>
														<td>Guest</td>
														<td><?php echo $record['guest']; ?></td>
													</tr>

													<tr>
														<td>Cabin</td>
														<td><?php echo $record['cabin']; ?></td>
													</tr>

													<tr>
														<td>Maximum Speed</td>
														<td><?php echo $record['max_speed']; ?> knots</td>
													</tr>

													<tr>
														<td>Price</td>
														<td>$<?php echo $price['rent']; ?></td>
													</tr>

												</tbody>
											</table>

										</div>

									</div>
								</div>
								<!-- Card body END -->
							</div>
							<!-- Card END -->


							<!-- Main Yacht section END -->
							<style>
								div.solid {
									border-style: solid;
								}
							</style>

							<!-- Booking form START -->
							<section>
								<div class="card border">
									<!-- Card header -->
									<div class="card-header border-bottom px-4">
										<h3 class="card-title mb-0" style="font-weight: bolder;">Customer Details</h3>
									</div>

									<!-- Card body START -->
									<div class="card-body py-4">
										<div class="card  rounded-2">
											<!-- card header -->
											<div class="card-header border-bottom bg-light" style="background-color: #ffffff !important;">
												<h5 class="card-title mb-0">Important Note:</h5>
											</div>

											<!-- Card body -->
											<div class="card-body">
												<h4>
													<p style="font-family: sans-serif;"><?= $record['other']; ?></p>
												</h4>
											</div>

											<!-- Card footer -->

										</div>
										<!-- Accordion START -->
										<div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
											<!-- Item -->
											<div class="accordion-item mb-3">

												<!-- Accordion Body START -->
												<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
													<div class="accordion-body mt-3">

														<!-- Form START -->
														<form method="post" id="myForm" onsubmit="return validateForm()" class="py-3" action="<?= base_url('booking-ticket') ?>">

															<?= csrf_field() ?>

															<input type="hidden" name="id" value="<?php echo $record['id']; ?>">
															<input type="hidden" name="yacht_id" value="<?php echo $record['id']; ?>">
															<input type="hidden" name="username" value="<?= $record['username']; ?>">
															<input type="hidden" name="hname" value="<?= $record['hname']; ?>">

															<div class="row g-4">
																<!-- Input item -->
																<div class="col-md-12">
																	<label class="form-label">Yacht Type</label>
																	<input type="text" name="yacht_type" value="<?php echo $record['yacht_type']; ?>" class="custom-input" readonly>
																</div>

																<!-- Select item -->
																<div class="col-md-3">
																	<label class="form-label">Title</label>
																	<select class="form-select js-choice">
																		<option>Mr</option>
																		<option>Mrs</option>
																	</select>
																</div>

																<!-- Input item -->
																<div class="col-md-9">
																	<label class="form-label">Customer Name</label>
																	<input type="text" name="customer_name" class="custom-input" placeholder="Customer Name" id="userValid" oninput="userValidation()" required>
																	<span id="userError" class="error text-danger"></span>
																</div>

																<!-- Input item -->
																<div class="col-md-6">
																	<label class="form-label">Email</label>
																	<input type="email" name="email" class="custom-input" placeholder="Enter email" id="emailInput" required>
																	<span id="emailError" class="text-danger"></span>
																</div>

																<!-- Input item -->
																<div class="col-md-6">
																	<label class="form-label">Phone Number</label>
																	<input type="tel" id="phone" name="phone" class="custom-input" oninput="checkNumber2(this)" required><br>
																	<span id="error2" class="text-danger"></span>
																</div>

																<!-- Input item -->
																<div class="col-md-6">
																	<label class="form-label">Address</label>
																	<input type="text" name="address" class="custom-input" placeholder="Enter address" required>
																</div>

																<input type="hidden" name="mintime" id="mintime" value="<?= $record['mintime']; ?>">

																<div class="col-md-6">
																	<label class="form-label">Duration(hours)</label>
																	<input type="text" name="plan_description" class="custom-input" value="<?= $price['hours']; ?>" required readonly>
																</div>

																<!-- <div class="col-md-6">
																	<label class="form-label">Duration</label>
																	<select id="hours" onchange="calculatePrice()" name="plan_description" class="form-select">
																		<option value="">Select Hour</option>
																		<option value="1 hour">1 hour</option>
																		<option value="2 hour">2 hour</option>
																		<option value="3 hour">3 hour</option>
																		<option value="4 hour">4 hour</option>
																		<option value="5 hour">5 hour</option>
																		<option value="6 hour">6 hour</option>
																		<option value="7 hour">7 hour</option>
																		<option value="8 hour">8 hour</option>
																	</select>
																</div> -->

																<script>
																	document.addEventListener('DOMContentLoaded', function() {
																		var mintime = parseInt(document.getElementById('mintime').value);
																		if (isNaN(mintime)) {
																			console.error('Invalid mintime value');
																			return;
																		}

																		var maxHours = 12;
																		var hoursSelect = document.getElementById('hours');
																		console.log("Hours select element: ", hoursSelect);

																		for (var i = mintime; i <= maxHours; i++) {
																			var option = document.createElement('option');
																			option.value = i;
																			option.textContent = i + ' hour' + (i > 1 ? 's' : '');
																			hoursSelect.appendChild(option);
																			console.log("Added option: ", option);
																		}
																	});

																	function calculatePrice() {
																		// Add your calculate price logic here
																	}
																</script>

																<script>
																	function calculatePrice() {
																		const basePrice = parseFloat(document.getElementById("basePrice").innerText);
																		const selectElement = document.getElementById("hours");
																		const selectedValue = selectElement.value;
																		const hours = selectedValue ? parseInt(selectedValue.split(" ")[0]) : 0;
																		const newPrice = basePrice * hours;
																		document.getElementById("result1").innerText = "$" + newPrice;
																		document.getElementById("result2").value = newPrice.toFixed();
																	}
																</script>
																<!-- Select group -->
																<div class="col-md-6">
																	<label class="form-label">Booking Date</label>
																	<input type="text" name="booking_date" class="custom-input" id="datepicker" placeholder="Enter booking date" data-date-format="y m d">
																</div>

																<!-- Input item -->
																<div class="col-md-6">
																	<label class="form-label">Booking Time</label>
																	<input type="time" name="booking_time" class="custom-input" placeholder="Enter passport number">
																</div>

																<!-- Input item -->
																<div class="col-md-6">
																	<label class="form-label">Number Of People</label>
																	<input type="hidden" id="maxguest" value="<?php echo $record['guest']; ?>">
																	<input type="text" name="ccount" class="custom-input" id="name" placeholder="Number Of People" oninput="checkNumber1(this)" required>
																	<span id="error1" class="text-danger"></span>
																</div>

																<!-- Input item -->
																<div class="col-md-6">
																	<label class="form-label">Price($)</label>
																	<input type="text" name="price" class="custom-input" id="result2" value="<?= $price['rent']; ?>" readonly>
																</div>

																<div class="d-grid mt-4">
																	<input type="submit" name="submit" value="Submit" class="btn btn-primary mb-0">
																</div>
														</form>
														<!-- Form END -->

													</div>
												</div>
												<!-- Accordion Body END -->
											</div>

										</div>
										<!-- Accordion END -->
										<!-- Number and email START -->

										<!-- Button -->

									</div>
									<!-- Card body END -->
								</div>
							</section>
							<!-- Booking form END -->

							<!-- START form script -->
							<!-- phone css & js -->
							<style>
								#phone {
									width: 100%;
									padding-right: 180px;
									border: 1px solid #ccc;
									border-radius: 5px;
									box-sizing: border-box;
									margin-bottom: 10px;
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
										userError.textContent = "Please enter a valid name";
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

								document.getElementById("emailInput").addEventListener("input", function() {
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

								document.getElementById("myForm").addEventListener("submit", function(event) {
									var email = document.getElementById("emailInput").value.trim();
									if (!isValidEmail(email)) {
										event.preventDefault();
										document.getElementById("emailError").textContent = "Invalid email address";
									}
								});
							</script>

							<script type="text/javascript">
								function checkNumber1(input) {
									var maxGuest = parseInt(document.getElementById("maxguest").value, 10);
									var isValidNumber = /^\d+$/.test(input.value);
									var inputNumber = parseInt(input.value, 10);

									if (!isValidNumber) {
										document.getElementById("error1").innerText = "Please enter numbers only.";
										input.value = '';
										document.getElementById("submitBtn").disabled = true;
									} else if (inputNumber > maxGuest) {
										document.getElementById("error1").innerText = "The number of people exceeds the maximum allowed of " + maxGuest + ".";
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
									} else if (input.value.length < 10 || input.value.length > 15) {
										document.getElementById("error2").innerText = "Please enter a number between 10 and 15 digits.";
										document.getElementById("submitBtn").disabled = true;
									} else {
										document.getElementById("error2").innerText = "";
										document.getElementById("submitBtn").disabled = false;
									}
								}
							</script>
							<!-- END form script -->

							<!-- Card START -->
							<div class="card border mt-2">
								<!-- Card header -->
								<div class="card-header border-bottom d-md-flex justify-content-md-between">
									<h5 class="card-title mb-0">Yacht Charter Experience</h5>
									<a href="https://bookmyyacht.us/refund" class="btn btn-link p-0 mb-0">View Cancellation Policy</a>
								</div>

								<!-- Card body -->
								<div class="card-body">
									<!--<h6>Included in Price</h6>-->
									<!-- List -->
									<ul class="list-group list-group-borderless mb-0">

										<?php
										// Generate a random number between 1 and 10
										$randomNumber = rand(1, 10);
										// Use switch case to handle different cases based on the random number
										switch ($randomNumber) {
											case 1:
												echo "
											<li class='list-group-item h6 fw-light d-flex mb-0'><i class='fas fa-award text-success me-2'></i>Luxury Yacht Charter Experience With Professional Captain.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'><i class='fas fa-award text-success me-2'></i>Enjoy Soft Drinks.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'><i class='fas fa-award text-success me-2'></i>Add On Jet-ski services on call.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'><i class='fas fa-award text-success me-2'></i>Music System On Yacht to enjoy vibes.</li>
											";
												break;
											case 2:
												echo "
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Exclusive Yacht Adventure With Experienced Captain.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Indulge In Complimentary Refreshments.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Jet-ski Rentals Available Upon Request.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Premium Sound System For Ultimate Relaxation.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Personalized Yacht Excursion With Skilled Crew.</li>
											";
												break;
											case 3:
												echo "
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Savor Unlimited Soft Drinks On Board.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> On-Demand Water Sports Equipment Rental.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> High-Quality Audio System For Your Enjoyment.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Luxurious Yacht Journey With Professional Guidance.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Refresh With A Selection Of Beverages.</li>

											";
												break;
											case 4:
												echo "
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Jet-ski Fun Accessible Anytime You Want.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> State-of-the-Art Music System On Deck.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> VIP Yacht Cruise With Expert Captain.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Enjoy An Assortment Of Soft Drinks.</li>

											";
												break;
											case 5:
												echo "
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Top-notch Sound System For Your Entertainment.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Elite Yacht Charter With Seasoned Crew.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Relax With Refreshing Drinks On Board.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Jet-ski Adventures Available On Call.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Immerse In Music With Our Yacht Sound System.</li>
											";
												break;
											case 6:
												echo "
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Opulent Yacht Experience With Trained Captain.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Quench Your Thirst With A Variety Of Beverages.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Convenient Jet-ski Rental For Thrilling Rides.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> High-Fidelity Music System For Great Ambiance.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Custom Yacht Tour With Knowledgeable Captain.</li>
											";
												break;
											case 7:
												echo "
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Stay Refreshed With Complimentary Soft Drinks.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Request Jet-ski Services For Extra Excitement.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Enjoy Music Through Our Advanced Sound System.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Prestigious Yacht Excursion With Qualified Crew.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Sip On An Array Of Refreshing Drinks.</li>
											";
												break;
											case 8:
												echo "
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Add-On Jet-ski Fun Available Anytime.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Listen To Your Favorite Tunes On Board.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Sumptuous Yacht Ride With Professional Captain.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Hydrate With A Selection Of Soft Beverages.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Jet-ski Rentals Available For On-Demand Fun.</li>
											";
												break;
											case 9:
												echo "
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Superior Sound System To Enhance Your Experience.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Bespoke Yacht Charter With Skilled Captain.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Enjoy Unlimited Soft Drinks During Your Trip.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Call For Jet-ski Services For Added Thrills.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Top-Quality Music System For A Great Vibe.</li>
											";
												break;
											case 10:
												echo "
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Premium Yacht Journey With Experienced Crew.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Jet-ski Adventures Available At Your Convenience.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> High-End Audio System For Your Enjoyment.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Lavish Yacht Tour With Professional Guidance.</li>
											<li class='list-group-item h6 fw-light d-flex mb-0'> <i class='fas fa-award text-success me-2'></i> Stay Hydrated With Free Soft Drinks On Board.</li>
											";
												break;
											default:
												echo "This should never be reached.";
												break;
										}
										?>

									</ul>
								</div>
							</div>
							<!-- Card END -->
						</div>
					</div>
					<!-- Left Content END -->

					<!-- Right content START -->
					<aside class="col-xl-3">
						<div data-sticky data-margin-top="80" data-sticky-for="1199">
							<div class="row g-4">
								<!-- Fare summary START -->
								<div class="col-md-6 col-xl-12">
									<div class="card  rounded-2">
										<!-- card header -->
										<div class="card-header border-bottom bg-light" style="background-color: #ffffff !important;">
											<h5 class="card-title mb-0">Price Summary</h5>
										</div>

										<!-- Card body -->
										<div class="card-body">
											<ul class="list-group list-group-borderless">
												<li class="list-group-item d-flex justify-content-between align-items-center">
													<span class="h6 fw-normal mb-0">Discount</span>
													<span class="fs-6 text-success">+$00</span>
												</li>
												<li class="list-group-item d-flex justify-content-between align-items-center">
													<span class="h6 fw-normal mb-0">Other Services</span>
													<span class="fs-5">$00</span>
												</li>
											</ul>
										</div>

										<!-- Card footer -->
										<div class="card-footer border-top " style="background-color: #ffffff !important;">
											<div class="d-flex justify-content-between align-items-center">
												<span class="h5 fw-normal mb-0">Total Price</span>
												<span class="h5 fw-normal mb-0" id="result1">$<?= $price['rent']; ?></span>
												<p id="basePrice" hidden><?php echo $price['rent']; ?></p>
											</div>
										</div>
									</div>
								</div>
								<!-- Fare summary END -->

								<!-- Coupon START -->
								<div class="col-md-6 col-xl-12">
									<div class="card card-body bg-light">
										<div class="cardt-title">
											<h5>Offer & Discount</h5>
										</div>
										<!-- Input group -->
										<div class="input-group mt-2">
											<input class="form-control form-control" placeholder="Coupon code">
											<button type="button" class="btn btn-primary">Apply</button>
										</div>
									</div>
								</div>
								<!-- Coupon END -->

								<!-- Information START -->
								<!--<div class="col-md-6 col-xl-12">-->
								<!--	<div class="card shadow">-->
								<!-- Card header -->
								<!--		<div class="card-header border-bottom">-->
								<!--			<h5 class="card-title mb-0">Why Sign up or Log in</h5>-->
								<!--		</div>-->

								<!-- Card body -->
								<!--		<div class="card-body">-->
								<!-- List -->
								<!--			<ul class="list-group list-group-borderless">-->
								<!--				<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-check text-success me-2"></i>-->
								<!--					<span class="h6 fw-normal">Get Access to Secret Deal</span>-->
								<!--				</li>-->

								<!--				<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-check text-success me-2"></i>-->
								<!--					<span class="h6 fw-normal">Book Faster</span>-->
								<!--				</li>-->

								<!--				<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-check text-success me-2"></i>-->
								<!--					<span class="h6 fw-normal">Manage Your Booking</span>-->
								<!--				</li>-->
								<!--			</ul>-->
								<!--		</div>-->
								<!--	</div>-->
								<!--</div>-->
								<!-- Information END -->

								<!-- Help item START -->
								<div class="col-md-6 col-xl-12">
									<div class="card card-body bg-light p-4">
										<!-- Title -->
										<h4 class="card-title">Need Help?</h4>

										<!-- List -->
										<ul class="list-group list-group-borderless">
											<li class="list-group-item py-3">
												<a href="https://wa.me/17862977769" class="h6 mb-0">
													<i class="bi fa-fw bi-telephone-forward text-primary fs-5 me-2"></i>
													<span class="fw-light me-1">Call us on:<br>+1 (786)-297-7769</span>
												</a>
											</li>

											<li class="list-group-item py-0">
												<hr class="my-0">
											</li>
											<!-- Divider -->

											<li class="list-group-item py-3">
												<h6 class="mb-0">
													<i class="bi fa-fw bi-alarm text-primary fs-5 me-2"></i>
													<span class="h6 fw-light me-1 mb-0">Timing: 10AM to 7PM</span>
												</h6>
											</li>

											<li class="list-group-item py-0">
												<hr class="my-0">
											</li>
											<!-- Divider -->

											<li class="list-group-item py-3">
												<a href="<?= base_url('/us/contact') ?>" class="h6 mb-0">
													<i class="bi fa-fw bi-headset text-primary fs-5 me-2"></i><span class="h6 fw-light me-1 mb-0">Let Us Call You</span>
												</a>
											</li>

											<li class="list-group-item py-0">
												<hr class="my-0">
											</li>
											<!-- Divider -->

											<li class="list-group-item pt-3 pb-0">
												<a href="<?= base_url('/us/contact') ?>" class="h6 mb-0">
													<i class="bi fa-fw bi-calendar-check text-primary fs-5 me-2"></i><span class="h6 fw-light me-1 mb-0">Book Appointments</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- Help item END -->
							</div>
						</div>
					</aside>
					<!-- Right content END -->

				</div>
			</div>
		</section>
		<!-- =======================
	Main Content END -->
	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	<!-- Cancellation modal START -->
	<div class="modal fade" id="cancellation" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<!-- Title -->
				<div class="modal-header">
					<h5 class="modal-title" id="cancellationlabel">Cancellation & Date Change Charges</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<!-- Body -->
				<div class="modal-body p-3">

					<ul class="nav nav-pills nav-justified nav-responsive bg-primary bg-opacity-10 rounded p-2 mb-3" id="tour-pills-tab" role="tablist">
						<!-- Tab item -->
						<li class="nav-item" role="presentation">
							<button class="nav-link rounded-start active mb-0" id="tour-pills-tab-1" data-bs-toggle="pill" data-bs-target="#tour-pills-tab1" type="button" role="tab" aria-controls="tour-pills-tab1" aria-selected="true">Cancellation Charge</button>
						</li>
						<!-- Tab item -->
						<li class="nav-item" role="presentation">
							<button class="nav-link rounded-end mb-0" id="tour-pills-tab-2" data-bs-toggle="pill" data-bs-target="#tour-pills-tab2" type="button" role="tab" aria-controls="tour-pills-tab2" aria-selected="false">Date Change Charge</button>
						</li>
					</ul>

					<!-- Tab content START -->
					<div class="tab-content mb-0" id="tour-pills-tabContent">

						<!-- Content item START -->
						<div class="tab-pane fade show active" id="tour-pills-tab1" role="tabpanel" aria-labelledby="tour-pills-tab-1">

							<div class="card border">
								<!-- Card header -->
								<div class="card-header border-bottom">
									<!-- Title -->
									<h5 class="card-title mb-0">
										<img src="<?= site_url('YACHTBookingPages/'); ?>assets/images/element/09.svg" class="h-50px" alt="">
										BOM - CDG
									</h5>
								</div>

								<!-- Card body -->
								<div class="card-body">
									<!-- Table START -->
									<div class="table-responsive-lg">
										<table class="table table-bordered rounded caption-bottom overflow-hidden mb-0">
											<!-- Caption -->
											<caption class="pb-0">*From The Date Of Departure</caption>
											<!-- Table head -->
											<thead class="table-dark border-light">
												<tr>
													<th scope="col">Time Frame</th>
													<th scope="col">Air Free + MMT Free</th>
												</tr>
											</thead>
											<!-- Table body -->
											<tbody class="border-top-0">
												<tr>
													<td>0 hours to 24 hours</td>
													<td>Non Refundable</td>
												</tr>
												<tr>
													<td>24 hours to 365 days</td>
													<td>$16,325 + $250</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- Table END -->
								</div>
							</div>
						</div>
						<!-- Content item END -->

						<!-- Content item START -->
						<div class="tab-pane fade" id="tour-pills-tab2" role="tabpanel" aria-labelledby="tour-pills-tab-2">
							<div class="card border">
								<!-- Card header -->
								<div class="card-header border-bottom">
									<!-- Title -->
									<h5 class="card-title mb-0">
										<img src="<?= site_url('YACHTBookingPages/'); ?>assets/images/element/09.svg" class="h-50px" alt="">
										JFK - BOM
									</h5>
								</div>

								<!-- Card body -->
								<div class="card-body">
									<!-- Table START -->
									<div class="table-responsive-lg">
										<table class="table table-bordered rounded caption-bottom overflow-hidden mb-0">
											<!-- Caption -->
											<caption class="pb-0">*From The Date Of Departure</caption>
											<!-- Table head -->
											<thead class="table-dark border-light">
												<tr>
													<th scope="col">Time Frame</th>
													<th scope="col">Air Free + MMT Free + Fare Difference</th>
												</tr>
											</thead>
											<!-- Table body -->
											<tbody class="border-top-0">
												<tr>
													<td>0 hours to 24 hours</td>
													<td>Non Refundable</td>
												</tr>
												<tr>
													<td>24 hours to 365 days</td>
													<td>$16,325 + $250 + Fare Difference</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- Table END -->
								</div>
							</div>
						</div>
						<!-- Content item END -->

					</div>
					<!-- Tab content END -->
				</div>
			</div>
		</div>
	</div>
	<!-- Cancellation modal END -->

	<!-- Baggage and fare START -->
	<div class="modal fade" id="baggageFare" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<!-- Title -->
				<div class="modal-header">
					<h5 class="modal-title" id="baggageFarelabel">Baggage & Fare Rules</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<!-- Body -->
				<div class="modal-body p-3">
					<!-- Card START -->
					<div class="card border">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<!-- Title -->
							<h5 class="card-title mb-0">
								<img src="<?= site_url('YACHTBookingPages/'); ?>assets/images/element/09.svg" class="h-80px" alt="">
								BOM - CDG
							</h5>
						</div>

						<!-- Card body -->
						<div class="card-body">
							<!-- Table START -->
							<div class="table-responsive-lg">
								<table class="table table-bordered rounded caption-bottom overflow-hidden mb-0">
									<!-- Table head -->
									<thead class="table-dark border-light">
										<tr>
											<th scope="col">Baggage Type</th>
											<th scope="col">Check In</th>
											<th scope="col">Cabin</th>
										</tr>
									</thead>
									<!-- Table body -->
									<tbody class="border-top-0">
										<tr>
											<td>Adult</td>
											<td>2 PC</td>
											<td>7 Kg</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- Table END -->
						</div>

						<!-- Card footer -->
						<div class="card-footer d-flex justify-content-between align-items-center pt-0 px-sm-4">
							<span>*1PC = 23KG</span>
							<a href="#" class="btn btn-sm btn-primary-soft mb-0">Add luggage</a>
						</div>
					</div>
					<!-- Card END -->

					<!-- Content START -->
					<div class="mt-4 px-2">
						<span class="badge bg-light text-success mb-2"><i class="bi bi-star-fill me-2"></i>Travel Hack</span>
						<h5 class="mb-2">This itinerary includes a self-transfer</h5>
						<p class="mb-0">Please note, that it is the sole responsibility of the passenger to ensure his or her eligibility to enter the destination or transit countries (as applicable). We accept no liability in this regard. Please check the travel rules of all regulatory websites before to booking as well as commencing.</p>
					</div>
					<!-- Content END -->
				</div>
			</div>
		</div>
	</div>
	<!-- Baggage and fare END -->


	<!-- Back to top -->
	<div class="back-top"></div>

	<!-- =======================
	Footer START -->
	<?php
	include 'footer.php';
	?>
	<!-- =======================
	Footer END -->

	<!-- Custom JS Script Date-->
	<script>
		$(function() {
			var today = new Date();
			$('#datepicker').datepicker({
				minDate: today,
				maxDate: '+2y',
				dateFormat: 'yy-mm-dd',
				beforeShow: function(input, inst) {
					setTimeout(function() {
						inst.dpDiv.find('.ui-datepicker-current').trigger('click');
					}, 0);
				},
				beforeShowDay: function(date) {
					var endDate = new Date();
					endDate.setFullYear(date.getFullYear(), date.getMonth() + 1, 0);
					return [true, '', date <= endDate ? '' : 'ui-datepicker-unselectable'];
				}
			});
		});
	</script>
	<!-- Bootstrap JS -->
	<script src="<?= site_url('YACHTBookingPages/'); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Vendors -->
	<script src="<?= site_url('YACHTBookingPages/'); ?>assets/vendor/sticky-js/sticky.min.js"></script>
	<script src="<?= site_url('YACHTBookingPages/'); ?>assets/vendor/flatpickr/js/flatpickr.min.js"></script>
	<script src="<?= site_url('YACHTBookingPages/'); ?>assets/vendor/choices/js/choices.min.js"></script>

	<!-- ThemeFunctions -->
	<script src="<?= site_url('YACHTBookingPages/'); ?>assets/js/functions.js"></script>
</body>

</html>