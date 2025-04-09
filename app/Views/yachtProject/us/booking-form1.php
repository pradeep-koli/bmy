<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>booking form</title>

	<!-- faviicon -->
	<link rel="icon" href="<?php echo site_url('yachtProject/us/');?>images/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- data links -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	<style type="text/css">
		body{
			font-family: merriweather, serif;
		}

		.title {
			font-size: 2.0rem;
			text-shadow: 1px 0 2px #333333;
			font-family: merriweather, serif;
			text-align: center;
		}

		.yacht-price-hero {
			color: #3993c6;
			font-weight: 700;
			font-size: 27px;
			text-align: center;
/*			font-family: merriweather, serif;*/
}

.block-title {
	font-size: 1.8rem;
	text-shadow: 1px 0 2px #0000005c;
}

.form-group label {
	font-weight: bold;
	color: black;
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
	border-radius: 5px;
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

h1,h2,h3,h4,h5,h6{
	color: black;
}


</style>

</head>
<body>

	<header>
		<?php
		include 'header.php';
		?>
	</header>

	<main>
		<div class="container">
			<h1 class="title"><span><?php echo $record['yacht_length']; ?></span> <?php echo $record['hname']; ?> - Book Yachts</h1>
			<h3 class="yacht-price-hero"><?php echo $record['price'];?> / hour</h3>
		</div>

		<div class="container">
			<div class="row py-3">
				<div class="col-6">
					<img src="<?= base_url('uploads/thumbnail/'.$record['thumb-img']) ?>" width="" height="" class="img-thumbnail" style="object-fit: cover;">
				</div>
				<div class="col-5">
					<table class="table table-hover table-bordered table-striped">
					<!-- <thead>
						<tr>
							<th scope="col">First</th>
							<th scope="col">Last</th>
						</tr>
					</thead> -->
					<tbody>
						<tr>
							<td>Yacht Type</td>
							<td><?php echo $record['yacht_type']; ?></td>
						</tr>
						<tr>
							<td>Yacht Name</td>
							<td><?php echo $record['hname']; ?></td>
						</tr>
<!-- 						<tr>
							<td>Build Name</td>
							<td><?php echo $record['build_name']; ?></td>
						</tr> -->
						<tr>
							<td>Yacht Length</td>
							<td><?php echo $record['yacht_length']; ?></td>
						</tr>
<!-- 						<tr>
							<td>Size</td>
							<td><?php echo $record['size']; ?></td>
						</tr> -->
<!-- 						<tr>
							<td>Engine</td>
							<td><?php echo $record['engine']; ?></td>
						</tr> -->
						<tr>
							<td>Guest</td>
							<td><?php echo $record['guest']; ?></td>
						</tr>
						<tr>
							<td>Cabin</td>
							<td><?php echo $record['cabin']; ?></td>
						</tr>

<!-- 						<tr>
							<td>Year</td>
							<td><?php echo $record['year_of_build']; ?></td>
						</tr> -->

<!-- 						<tr>
							<td>Builder</td>
							<td><?php echo $record['builder']; ?></td>
						</tr> -->
						<tr>
							<td>Maximum Speed</td>
							<td><?php echo $record['max_speed']; ?></td>
						</tr>
						<tr>
							<td style="color: #17a2b8; font-size: 20px;">Price</td>
							<td style="color: #17a2b8; font-size: 20px;"><?php echo $record['price']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="">
			<h2 class="block-title text-center mt-5">Book <?php echo $record['yacht_length']; ?> <?php echo $record['yacht_type']; ?></h2>
			<p class="text-center text-dark my-4" style="font-size:17px;">The 45 FT <?php echo $record['hname']; ?> Yacht is irresistibly beautiful inside & out, making it the first choice of cruisers. Recommended to guests for a number of chartering options that are customised to suit the desired charter yacht experience for each guest. Cruise the Arabian waters, enjoy the stunning Dubai Skyline and all whilst attending a business meeting, a romantic dinner under the stars, a day out with the family, or just relaxing with friends and soaking up the afternoon sun. Marvelous panoramic views from its deck and flybridge will serve as the best backdrops providing you another reason to smile big in those summer selfies.</p>
		</div>
	</div>

	<section class="form-page">
		<div class="container p-5">
			<div class="row">
				<div class="col">
					<!-- Form START -->
					<div class="card-body card" style="border-color: #d5a96f; background-color: #ececec;">
						<h2 class="block-title">Booking Form</h2>
					</div>
					<div class="card-body card mt-2" style="border-color: #d5a96f; background-color: #ececec;">
						<form method="post" id="myForm" onsubmit="return validateForm()" class="" action="<?= base_url('us/yacht-booked')?>">
							<?= csrf_field(); ?>

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
									<input type="text" name="customer_name" class="custom-input" id="userValid" oninput="userValidation()" placeholder="Your Name" required>
									<span id="userError" class="error text-danger"></span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Address</label>
								<div class="col-sm-9">
									<input type="text" id="address1" name="address" class="custom-input" placeholder="Your Address" required>
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
									id="name" placeholder="No of people" oninput="checkNumber1(this)" required>
									<span id="error1" class="text-danger"></span>
								</div>
							</div>

							<div class="my-3" style="margin-left: 270px;">
								<input type="submit" name="submit" value="Submit" class="btn btn-primary fw-bold">
							</div>

						</form>
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
</main>

<footer>
	<?php
	include 'footer.php';
	?>
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>