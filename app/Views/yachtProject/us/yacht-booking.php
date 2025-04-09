<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Yacht Booking</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- faviicon -->
	<link rel="icon" href="<?php echo site_url('yachtProject/us/');?>images/favicon.ico" type="image/x-icon">

	<!-- Date link -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	<!-- Custom CSS -->
	<style>
		.form-group label {
			font-weight: bold;
		}

		.custom-input {
			width: 100%;
			padding: 10px 20px;
			font-size: 1rem;
			line-height: 1.5;
			color: #495057;
			background-color: #fff;
			background-clip: padding-box;
			border: 1px solid #ced4da;
			transition: border-color 0.3s ease;
			border-radius: 15px;
		}

		.custom-input:focus {
			border-color: blue;
			outline: 0;
		}

		.custom-input1{
			width: 100%;
			border: 1px solid lightgray;
			padding: 10px 20px;
		}

		.form-group .ui-selectmenu-button.ui-button {
			width: 100%;
			font-size: 15px;
			font-style: normal;
			height: 52px;
			padding: 10px 25px;
			line-height: 30px;
			font-family: 'Poppins', sans-serif;
			color: white !important;
			border-radius: 0px;
			background-color: #d5ae82 !important;
			border: 1px solid #e5e5e5;
		}
	</style>
</head>
<body>
	<header>
		<?php
		include 'header.php';
		?>
	</header>
	
	<div class="container mt-5">
		<div class="row">
			<div class="col-8">
				<h2>Yacht Information</h2>
				<hr>
				<div class="d-flex py-3">
					<div class="">
						<img src="<?= base_url('uploads/thumbnail/'.$record['thumb-img']) ?>" width="300px" height="250px" class="img-thumbnail" style="object-fit: cover;">
					</div>
					<div class="mx-3">
						<h3 class="mb-3"><?php echo $record['yacht_type'];?></h3>
						<ul>
							<li><b>PRICE : </b><?php echo $record['price'];?></li>
							<li><b>ENGINE : </b><?php echo $record['engine'];?></li>
							<li><b>Max Speed : </b><?php echo $record['max_speed'];?></li>
							<li><b>Builder : </b><?php echo $record['builder'];?></li>
							<li><b>Year Of Build : </b><?php echo $record['year_of_build'];?></li>
							<li><b>Yacht Length : </b><?php echo $record['yacht_length'];?></li>
							<li><b>Guest : </b><?php echo $record['guest'];?></li>
							<li><b>Cabin : </b><?php echo $record['cabin'];?></li>
						</ul>
					</div>
				</div>

				<div class="card-body mt-3" style="margin-left: -20px;">
					<div class="card d-flex p-3">
						<div class="d-flex justify-content-between align-items-center">
							<div><h4>Deluxe Pool View with Breakfast</h4></div>
							<p style="color: orange;">View Cancellation Policy</p>
						</div>
					</div>
					<div class="card p-3">
						<ul>
							<h6>Price Included</h6>
							<li style="margin-left: -10px; margin-top: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success mx-2" viewBox="0 0 16 16" >
								<path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
							</svg>Luxury Dubai Experience.</li>

							<li style="margin-left: -10px; margin-top: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success mx-2" viewBox="0 0 16 16">
								<path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
							</svg>Emergency Helpline Services</li>
							<li style="margin-left: -10px; margin-top: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success mx-2" viewBox="0 0 16 16">
								<path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
							</svg>Free Stay For Kids Below The Age Of 3 years.</li>
							<li style="margin-left: -10px; margin-top: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success mx-2" viewBox="0 0 16 16">
								<path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
							</svg>On Cancellation, You Will Get Refund Only If It Comes Under Our Term & &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Conditions</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-4 px-5">
				<h4>Price Summary</h4>
				<hr>
				<div class="d-flex justify-content-between">
					<h5>Payable Now</h5>
					<h5><?php echo $record['price'];?> Rs.</h5>
				</div>
				<!--<div class="mt-5">-->
				<!--	<h4>Why Sign up or Log in</h4>-->
				<!--	<hr>-->
				<!--	<ul>-->
				<!--		<li><i class="fa fa-check text-success mx-2" aria-hidden="true" style="margin-top: 20px;"></i>Get Access to Secret Deal</li>-->
				<!--		<li><i class="fa fa-check text-success mx-2" aria-hidden="true" style="margin-top: 20px;"></i>Book Faster</li>-->
				<!--		<li><i class="fa fa-check text-success mx-2" aria-hidden="true" style="margin-top: 20px;"></i>Manage Your Booking</li>-->
				<!--	</ul>-->
				<!--</div>-->
			</div>
		</div>
	</div>

	<section class="form-page">
		<div class="container">
			<div class="row mt-5">
				<h2 class=""><i class="fa fa-user px-2" style="font-size:36px;"></i>Booking Details</h2>
			</div>

			<div class="row">
				<div class="col-md-8">
					<hr>
					<!-- Form START -->
					<form method="post" id="myForm" onsubmit="return validateForm()" class="py-5" action="<?= base_url('us/yacht-booked')?>">
						<?= csrf_field ()?>

						<input type="hidden" name="id" value="<?php echo $record['id']?>">

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Yacht Type</label>
							<div class="col-sm-9">
								<input type="text" name="yacht_type" value="<?php echo $record['yacht_type']; ?>" class="custom-input" readonly>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Customer Name</label>
							<div class="col-sm-9">
								<input type="text" name="customer_name" class="custom-input" id="userValid" oninput="userValidation()" placeholder="Customer Name" required>
								<span id="userError" class="error text-danger"></span>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Address</label>
							<div class="col-sm-9">
								<input type="text" id="address1" name="address" class="custom-input" placeholder="Address" required>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Phone</label>
							<div class="col-sm-9">
								<input type="tel" id="phone" name="phone" class="custom-input"  oninput="checkNumber2(this)" required><br>
								<span id="error2" class="text-danger"></span>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Email</label>
							<div class="col-sm-9">
								<input type="text" id="emailInput" name="email" class="custom-input" placeholder="Your Email" required>
								<span id="emailError" class="text-danger"></span>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Booking Date</label>
							<div class="col-sm-9">
								<input type="text" name="booking_date" id="datepicker" class="custom-input" placeholder="Booking date" required>
							</div>
						</div>

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

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Booking Time</label>
							<div class="col-sm-9">
								<input type="time" name="booking_time" class="custom-input"
								id="booking_time" placeholder="regervation time" required>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Duration</label>
							<div class="col-sm-9">
								<select class="custom-select-box" name="plan_description" required>
									<option value="">select hour</option>
									<option value="1 hour">1 hour</option>
									<option value="2 hour">2 hour</option>
									<option value="3 hour">3 hour</option>
									<option value="4 hour">4 hour</option>
									<option value="5 hour">5 hour</option>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">No of Peaple</label>
							<div class="col-sm-9">
								<input type="text" name="ccount" class="custom-input"
								id="name" placeholder="no of people" oninput="checkNumber1(this)" required>
								<span id="error1" class="text-danger"></span>
							</div>
						</div>

						<div class="text-center my-3">
							<input type="submit" name="submit" value="Submit" class="btn btn-primary w-100 fw-bold">
						</div>

					</form>
					<!-- phone css & js -->
					<style>
						#phone {
							width: 100%;
							padding-right: 250px;
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
							} else if (input.value.length < 10 || input.value.length > 15)  {
								document.getElementById("error2").innerText = "Please enter a number between 10 and 15 digits.";
								document.getElementById("submitBtn").disabled = true;
							} else {
								document.getElementById("error2").innerText = "";
								document.getElementById("submitBtn").disabled = false;
							}
						}
					</script>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<?php
		include 'footer.php';
		?>
	</footer>
</body>
</html>
