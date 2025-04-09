<!DOCTYPE html>
<html lang="en">

<head>
	<title>booking page</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="bookmyyacht.us">
	<meta name="description" content="Booking - Multipurpose Online Booking Theme">

	<!-- faviicon -->
	<link rel="icon" href="<?php echo site_url('yachtProject/us/');?>images/favicon.ico" type="image/x-icon">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="<?= site_url('YACHTBookingPages/'); ?>assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= site_url('YACHTBookingPages/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= site_url('YACHTBookingPages/'); ?>assets/vendor/flatpickr/css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="<?= site_url('YACHTBookingPages/'); ?>assets/vendor/choices/css/choices.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="<?= site_url('YACHTBookingPages/'); ?>assets/css/style.css">

	<!-- Custom links Date -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</head>

<body>

	<!-- Header START -->
	<?php
	include 'header.php';
	?>
	<!-- Header END -->

	<!-- **************** MAIN CONTENT START **************** -->
	<main>

<!-- =======================
	Main Content START -->


<!-- =======================
	Page banner START -->
	<section class="">
		<div class="container">
			<!-- Card START -->
			<div class="card bg-light overflow-hidden px-sm-5">
				<div class="row align-items-center g-4">

					<!-- Content -->
					<div class="col-sm-9">
						<div class="card-body">
							<!-- Breadcrumb -->
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb breadcrumb-dots mb-0">
									<li class="breadcrumb-item">
										<a href="<?= base_url('/'); ?>"><i class="bi bi-house me-1"></i> Home</a>
									</li>
									<li class="breadcrumb-item">Yacht Details</li>
									<li class="breadcrumb-item active">Yacht List</li>
								</ol>
							</nav>
							<!-- Title -->
							<h1 class="m-0 h2 card-title">Booking Your Yacht</h1>
						</div>
					</div>	

					<!-- Image -->
					<div class="col-sm-3 text-end d-none d-sm-block">
						<img src="<?= site_url('YACHTBookingPages/'); ?>assets/images/element/17.svg" class="mb-n4" alt="bookingImage">
					</div>
				</div>
			</div>
			<!-- Card END -->
			<!-- Card header -->
			<div class="card-header p-4 border-bottom">
				<!-- Title -->
				<h3 class="mb-0"><i class="fa-solid fa-sailboat me-2"></i>Yacht Information</h3>
				<!-- <h3 class="mb-0"><i class='fas fa-anchor me-2'></i>Yacht Information</h3> -->
			</div>
		</div>
	</section>
<!-- =======================
	Page banner END -->
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
										<h4 class="text-center">Classic Yacht</h4>

										<div class="">
											<img src="<?= site_url('YACHTBookingPages/'); ?>assets\images\Yacht Images\Classic Yachts\classicYacht-transformed.jpeg" class="img-fluid img-thumbnail" alt="yacht images">
										</div>
									</div>

									<!-- card body -->
									<div class="col-md-6">
										<!-- Title and rating -->
										<table class="table table-hover table-bordered table-striped">
											<tbody>
												<tr>
													<td>Yacht Type</td>
													<td>Classi Yacht</td>
												</tr>

												<tr>
													<td>Yacht Name</td>
													<td>Sea Breeze</td>
												</tr>

												<tr>
													<td>Yacht Length</td>
													<td>60 feet</td>
												</tr>

												<tr>
													<td>Guest</td>
													<td>10</td>
												</tr>

												<tr>
													<td>Cabin</td>
													<td>5</td>
												</tr>

												<tr>
													<td>Maximum Speed</td>
													<td>20 knots</td>
												</tr>

												<tr>
													<td>Price</td>
													<td>$36,500</td>
												</tr>
											</tbody>
										</table>


									</div>
								</div>
							</div>	
							<!-- Card body END -->
						</div>
						<!-- Card END -->

						<!-- Card START -->
						<div class="card border mt-4">
							<!-- Card header -->
							<div class="card-header border-bottom d-md-flex justify-content-md-between">
								<h5 class="card-title mb-0">Yacht Charter Experience</h5>
								<a href="#" class="btn btn-link p-0 mb-0">View Cancellation Policy</a>
							</div>

							<!-- Card body -->
							<div class="card-body">
								<h6>Included in Price</h6>
								<!-- List -->
								<ul class="list-group list-group-borderless mb-0">
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-yacht text-success me-2"></i>Luxury Yacht Charter Experience.</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-swimmer text-success me-2"></i>Access to onboard facilities like swimming, sunbathing, and relaxation areas.</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-utensils text-success me-2"></i>Complimentary gourmet meals and beverages.</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-wifi text-success me-2"></i>Free Wi-Fi and entertainment services.</li>
								</ul>
							</div>
						</div>
						<!-- Card END -->

						<!-- Main Yacht section END -->
						

						<!-- Booking form START -->
						<section>
							<form class="card border mt-5">
								<!-- Card header -->
								<div class="card-header border-bottom px-4">
									<h3 class="card-title mb-0">Customer Details</h3>
								</div>

								<!-- Card body START -->
								<div class="card-body py-4">

									<!-- Accordion START -->
									<div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
										<!-- Item -->
										<div class="accordion-item mb-3">

											<!-- Accordion Body START -->
											<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
												<div class="accordion-body mt-3">

													<!-- Form START -->
													<div class="row g-4">
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
															<div class="input-group">
																<input type="text" class="form-control" placeholder="First name">
																<input type="text" class="form-control" placeholder="Last name">
															</div>
														</div>

														<!-- Input item -->
														<div class="col-md-6">
															<label class="form-label">Email</label>
															<input type="email" class="form-control" placeholder="Enter email">
														</div>

														<!-- Input item -->
														<div class="col-md-6">
															<label class="form-label">Phone Number</label>
															<input type="text" class="form-control" placeholder="Enter phone number">
														</div>

														<!-- Input item -->
														<div class="col-md-6">
															<label class="form-label">Address</label>
															<input type="text" class="form-control" placeholder="Enter address">
														</div>

														<!-- Select item -->
														<div class="col-md-6">
															<label class="form-label">Duration</label>
															<select class="form-select js-choice">
																<option value="">Select Hour</option>
																<option value="1 hour">1 hour</option>
																<option value="2 hour">2 hour</option>
																<option value="3 hour">3 hour</option>
																<option value="4 hour">4 hour</option>
																<option value="5 hour">5 hour</option>
															</select>
														</div>


														<!-- Select item -->
														<div class="col-md-6">
															<label class="form-label">Country</label>
															<select class="form-select js-choice">
																<option value="">Select Country</option>
																<option>India</option>
																<option>USA</option>
																<option>Canada</option>
																<option>Japan</option>
																<option>China</option>
															</select>
														</div>

														<!-- Select group -->
														<div class="col-md-6">
															<label class="form-label">Booking Date</label>
															<input type="text" class="form-control" id="datepicker" placeholder="Enter booking date" data-date-format="y m d">
														</div>

														<!-- Input item -->
														<div class="col-md-6">
															<label class="form-label">Booking Time</label>
															<input type="time" class="form-control" placeholder="Enter passport number">
														</div>

														<!-- Input item -->
														<div class="col-md-6">
															<label class="form-label">Number of people</label>
															<input type="number" class="form-control" placeholder="Enter passport number">
														</div>
													</div>
													<!-- Form END -->

												</div>
											</div>
											<!-- Accordion Body END -->
										</div>

									</div>
									<!-- Accordion END -->
									<!-- Number and email START -->

									<!-- Button -->
									<div class="d-grid mt-4">
										<a href="flight-booking.html" class="btn btn-primary mb-0">Submit</a>
									</div>
								</div>
								<!-- Card body END -->
							</form>
						</section>
						<!-- Booking form END -->
					</div>
				</div>
				<!-- Left Content END -->

				<!-- Right content START -->
				<aside class="col-xl-3">
					<div data-sticky data-margin-top="80" data-sticky-for="1199">
						<div class="row g-4">
							<!-- Fare summary START -->
							<div class="col-md-6 col-xl-12">
								<div class="card bg-light rounded-2">
									<!-- card header -->
									<div class="card-header border-bottom bg-light">
										<h5 class="card-title mb-0">Fare Summary</h5>
									</div>

									<!-- Card body -->
									<div class="card-body">
										<ul class="list-group list-group-borderless">
											<li class="list-group-item d-flex justify-content-between align-items-center">
												<span class="h6 fw-normal mb-0">Base Fare
													<a href="#" tabindex="0" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-content="COVID-19 test required Vaccinated travelers can visit">
														<i class="bi bi-info-circle"></i>
													</a>
												</span>
												<span class="fs-5">$38,660</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center">
												<span class="h6 fw-normal mb-0">Discount</span>
												<span class="fs-6 text-success">+$2,560</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center">
												<span class="h6 fw-normal mb-0">Other Services</span>
												<span class="fs-5">$20</span>
											</li>
										</ul>
									</div>

									<!-- Card footer -->
									<div class="card-footer border-top bg-light">
										<div class="d-flex justify-content-between align-items-center">
											<span class="h5 fw-normal mb-0">Total Fare</span>
											<span class="h5 fw-normal mb-0">$36,500</span>
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
							<div class="col-md-6 col-xl-12">
								<div class="card shadow">
									<!-- Card header -->
									<div class="card-header border-bottom">
										<h5 class="card-title mb-0">Why Sign up or Log in</h5>
									</div>

									<!-- Card body -->
									<div class="card-body">
										<!-- List -->
										<ul class="list-group list-group-borderless">
											<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-check text-success me-2"></i>
												<span class="h6 fw-normal">Get Access to Secret Deal</span>
											</li>

											<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-check text-success me-2"></i>
												<span class="h6 fw-normal">Book Faster</span>
											</li>

											<li class="list-group-item d-flex mb-0"><i class="fa-solid fa-check text-success me-2"></i>
												<span class="h6 fw-normal">Manage Your Booking</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- Information END -->

							<!-- Help item START -->
							<div class="col-md-6 col-xl-12">
								<div class="card card-body bg-light p-4">
									<!-- Title -->
									<h4 class="card-title">Need Help?</h4>

									<!-- List -->
									<ul class="list-group list-group-borderless">
										<li class="list-group-item py-3">
											<a href="#" class="h6 mb-0">
												<i class="bi fa-fw bi-telephone-forward text-primary fs-5 me-2"></i>
												<span class="fw-light me-1">Call us on:</span>+31 123 456 789
											</a>
										</li>

										<li class="list-group-item py-0"><hr class="my-0"></li>
										<!-- Divider -->

										<li class="list-group-item py-3">
											<h6 class="mb-0">
												<i class="bi fa-fw bi-alarm text-primary fs-5 me-2"></i>
												<span class="h6 fw-light me-1 mb-0">Timing:</span>10AM to 7PM
											</h6>
										</li>

										<li class="list-group-item py-0"><hr class="my-0"></li>
										<!-- Divider -->

										<li class="list-group-item py-3">
											<a href="#" class="h6 mb-0">
												<i class="bi fa-fw bi-headset text-primary fs-5 me-2"></i>Let Us Call You
											</a>
										</li>

										<li class="list-group-item py-0"><hr class="my-0"></li>
										<!-- Divider -->

										<li class="list-group-item pt-3 pb-0">
											<a href="contact.html" class="h6 mb-0">
												<i class="bi fa-fw bi-calendar-check text-primary fs-5 me-2"></i>Book Appointments
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

<!-- =======================
	Footer START -->
	
<!-- =======================
	Footer END -->

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