<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking confirm</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="bookmyyacht.us">
	<meta name="description" content="Booking Confirm Page">

	<!-- faviicon -->
	<link rel="icon" href="<?php echo site_url('yachtProject/us/');?>images/favicon.ico" type="image/x-icon">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="<?= site_url('YACHTBookingPages/') ?>assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= site_url('YACHTBookingPages/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= site_url('YACHTBookingPages/') ?>assets/vendor/glightbox/css/glightbox.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="<?= site_url('YACHTBookingPages/') ?>assets/css/style.css">

</head>

<body>

	<!-- Header START -->
	
	<!-- Header END -->

	<!-- **************** MAIN CONTENT START **************** -->
	<main>
<!-- =======================
	Main content START -->

	<section class="pt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-xl-10 mx-auto">
					<div class="card shadow">
						<!-- Image -->
						<img src="<?= base_url()?>uploads/thumbnail/<?php echo $record['thumb-img']?>" class="img-fluid img-thumbnail" style="height: 350px; width: 100%; object-fit: contain;">

						<!-- Card body -->
						<div class="card-body text-center p-4">
							<!-- Title -->
							<h1 class="card-title fs-3">🎊 Thank You! 🎊</h1>
							<p class="lead mb-3">Your contact will be soon</p>

							<!-- Second title -->
							<h5 class="text-primary mb-4">Beautiful <?php echo $record['yacht_type']; ?></h5>

							<!-- List -->
							<div class="row justify-content-between text-start mb-4">
								<div class="col-lg-5">
									<ul class="list-group list-group-borderless">

										<li class="list-group-item d-sm-flex justify-content-between align-items-center">
											<span class="mb-0"><i class="bi bi-vr fa-fw me-2"></i>Booking ID:</span>
											<span class="h6 fw-normal mb-0"><?php echo $record['id']; ?></span>
										</li>

										<li class="list-group-item d-sm-flex justify-content-between align-items-center">
											<span class="mb-0"><i class="bi bi-person fa-fw me-2"></i>Build Name:</span>
											<span class="h6 fw-normal mb-0"><?php echo $record['build_name']; ?></span>
										</li>

										<li class="list-group-item d-sm-flex justify-content-between align-items-center">
											<span class="mb-0">
												<i class="fa-solid fa-sailboat me-2"></i>Yacht Type:</span>
												<span class="h6 fw-normal mb-0"><?php echo $record['yacht_type']; ?></span>
											</li>

											<li class="list-group-item d-sm-flex justify-content-between align-items-center">
												<span class="mb-0"><i class="fa-solid fa-sailboat me-2"></i></i>Yacht Name:</span>
												<span class="h6 fw-normal mb-0"><?php echo $record['hname']; ?></span>
											</li>

											<li class="list-group-item d-sm-flex justify-content-between align-items-center">
												<span class="mb-0"><i class="bi bi-person fa-fw me-2"></i>Builder Name:</span>
												<span class="h6 fw-normal mb-0"><?php echo $record['builder']; ?></span>
											</li>

											<li class="list-group-item d-sm-flex justify-content-between align-items-center">
												<span class="mb-0">
													<i class="fa-solid fa-gauge me-2"></i>Maximum Speed:</span>
													<span class="h6 fw-normal mb-0"><?php echo $record['max_speed']; ?></span>
												</li>

												<li class="list-group-item d-sm-flex justify-content-between align-items-center">
													<span class="mb-0"><i class="fa-solid fa-ruler-horizontal me-2"></i>Yacht Length</span>
													<span class="h6 fw-normal mb-0"><?php echo $record['yacht_length']; ?></span>
												</li>
											</ul>
										</div>

										<div class="col-lg-5">
											<ul class="list-group list-group-borderless">

												<li class="list-group-item d-sm-flex justify-content-between align-items-center">
													<span class="mb-0"><i class="bi bi-currency-dollar fa-fw me-2"></i>Price:</span>
													<span class="h6 fw-normal mb-0"><?php echo $record['price']; ?></span>
												</li>

												<li class="list-group-item d-sm-flex justify-content-between align-items-center">
													<span class="mb-0"><i class="fas fa-cogs"></i>
													Engine:</span>
													<span class="h6 fw-normal mb-0"><?php echo $record['engine']; ?></span>
												</li>

												<li class="list-group-item d-sm-flex justify-content-between align-items-center">
													<span class="mb-0"><i class="fa-solid fa-expand me-2"></i></i>Size:</span>
													<span class="h6 fw-normal mb-0"><?php echo $record['size']; ?></span>
												</li>

												<li class="list-group-item d-sm-flex justify-content-between align-items-center">
													<span class="mb-0"><i class="fa-solid fa-calendar-days me-2"></i></i>Year of build:</span>
													<span class="h6 fw-normal mb-0"><?php echo $record['year_of_build']; ?></span>
												</li>

												<li class="list-group-item d-sm-flex justify-content-between align-items-center">
													<span class="mb-0"><i class="bi bi-house-fill fa-fw me-2"></i>
													Cabin:</span>
													<span class="h6 fw-normal mb-0"><?php echo $record['cabin']; ?></span>
												</li>

												<li class="list-group-item d-sm-flex justify-content-between align-items-center">
													<span class="mb-0"><i class="bi bi-people fa-fw me-2"></i>Guests:</span>
													<span class="h6 fw-normal mb-0"><?php echo $record['guest']; ?></span>
												</li>
											</ul>
										</div>
									</div>

									<!-- Button -->

								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
<!-- =======================
	Main content START -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
	Footer START -->
	
<!-- =======================
	Footer END -->

	<!-- Back to top -->
	<div class="back-top"></div>

	<!-- Bootstrap JS -->
	<script src="<?= site_url('YACHTBookingPages/') ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Vendors -->
	<script src="<?= site_url('YACHTBookingPages/') ?>assets/vendor/glightbox/js/glightbox.js"></script>

	<!-- ThemeFunctions -->
	<script src="<?= site_url('YACHTBookingPages/') ?>assets/js/functions.js"></script>

</body>

</html>