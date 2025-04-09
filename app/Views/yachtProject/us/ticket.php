<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Confirm</title>
	<!-- faviicon -->
	<link rel="icon" href="<?php echo site_url('yachtProject/us/'); ?>images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
		<div class="image-layer"
			style="background-image:url(<?= base_url('yachtProject/us/'); ?>images/background/ThankYouMain.jpg);"></div>

		<div class="banner-inner" style="background-color: #00000073;">
			<div class="auto-container">
				<div class="inner-container clearfix">
					<!-- <h1>Thank You</h1> -->
					<div class="page-nav">
						<ul class="bread-crumb clearfix">
							<li><a href="<?= base_url('/') ?>">Home</a></li>
							<!--<li><a>Pages</a></li>-->
							<li><a>Thank You<a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page Title End-->

	<!-- Yacht Section -->
	<section>
		<div class="container my-5">
			<div class="row">
				<div class="col-md-6">
					<div class="col-md-12">
						<img src="<?= base_url() ?>uploads/thumbnail/<?php echo $record['thumb-img'] ?>"
							class="img-fluid img-thumbnail" style="object-fit: cover">
					</div>
					<div style="padding-left: 15px; padding-right:15px;">
						<div class="col-md-12" style="background-color: #1c1c1c;">
							<h3 class="text-white text-center py-2" style="font-weight: bold">
								<?php echo $record['hname']; ?>
							</h3>
							<h4 class="text-white text-center py-1" style="font-weight: bold">Yacht Information</h4>
							<div class="d-flex justify-content-center align-items-center">
								<div class="col-md-5 mx-4" style="background-color: #151515;">
									<h3 style="color: #bf9a77; margin-left: 65px; margin-top: 15px;">
										<?php echo $record['guest']; ?>
									</h3>
									<p style="color: #bf9a77; margin-left: 55px;">Max Guest</p>
								</div>
								<div class="col-md-5 mx-3" style="background-color: #151515;">
									<h3 style="color: #bf9a77; margin-left: 65px; margin-top: 15px;">
										<?php echo $record['cabin']; ?>
									</h3>
									<p style="color: #bf9a77; margin-left: 55px;">Cabin</p>
								</div>
							</div>

							<div class="d-flex justify-content-center align-items-center mt-3">
								<div class="col-md-5 mx-4" style="background-color: #151515;">
									<h4 style="color: #bf9a77; margin-top: 15px;"><?php echo $record['yacht_type']; ?>
									</h4>
									<p style="color: #bf9a77; margin-left: 40px;">Yacht Type</p>
								</div>
								<div class="col-md-5 mx-3" style="background-color: #151515;">
									<h4 style="color: #bf9a77; margin-top: 15px; margin-left: 55px;">
										<?php echo $record['yacht_length']; ?>
									</h4>
									<p style="color: #bf9a77; margin-left: 40px;">Yacht Length</p>
								</div>
							</div>

							<div class="d-flex mt-4 py-3 mb-0 justify-content-center align-items-center"
								style="background-color: #151515;">
								<h3 class="text-white">$<?php echo $customer['price']; ?>/hours</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<h5 class="border-bottom py-2 mx-3 mt-5 text-center" style="color: #061138;">Your Details : </h5>
					<!-- customer details -->
					<div class="mt-4">
						<ul>
							<li class="d-sm-flex justify-content-between align-items-center mt-2">
								<span class="mb-0"><i class="bi bi-person fa-fw me-2"></i>&nbsp;&nbsp;Customer
									Name:</span>
								<span class="h6 fw-normal mb-0"><?php echo $customer['customer_name']; ?></span>
							</li>
							<li class="d-sm-flex justify-content-between align-items-center mt-2">
								<span class="mb-0"><i class="fas fa-cogs"></i>&nbsp;&nbsp;
									Email ID:</span>
								<span class="h6 fw-normal mb-0"><?php echo $customer['email']; ?></span>
							</li>
							<li class="d-sm-flex justify-content-between align-items-center mt-2">
								<span class="mb-0"><i class="fa fa-phone fa-fw"></i>&nbsp;&nbsp;</i>Phone
									no:</span>
								<span class="h6 fw-normal mb-0"><?php echo $customer['phone']; ?></span>
							</li>
							<li class="d-sm-flex justify-content-between align-items-center mt-2">
								<span class="mb-0"><i class="bi bi-calendar fa-fw me-2"></i>&nbsp;&nbsp;
									Booking Date:</span>
								<span class="h6 fw-normal mb-0"><?php echo $customer['booking_date']; ?></span>
							</li>
							<li class="d-sm-flex justify-content-between align-items-center mt-2">
								<span class="mb-0"><i class="fa fa-clock fa-fw"></i>&nbsp;
									Booking Time:</span>
								<span class="h6 fw-normal mb-0"><?php echo $customer['booking_time']; ?></span>
							</li>
							<li class="d-sm-flex justify-content-between align-items-center mt-2">
								<span class="mb-0"><i class="fa fa-clock fa-fw"></i>&nbsp;
									Price:</span>
								<span class="h6 fw-normal mb-0">$ <?php echo $customer['price']; ?></span>
							</li>
						</ul>
					</div>

					<!-- booking yacht details -->
					<div class="mt-4">
						<ul>
							<li class="d-sm-flex justify-content-between align-items-center mt-5">
								<span class="mb-0"><i class="bi bi-person fa-fw me-2"></i>&nbsp;&nbsp;Build Name:</span>
								<span class="h6 fw-normal mb-0"><?php echo $record['build_name']; ?></span>
							</li>
							<li class="d-sm-flex justify-content-between align-items-center mt-2">
								<span class="mb-0"> <i class="bi bi-house-fill fa-fw me-2 yacht-icon"></i> &nbsp;&nbsp;
									Size:</span>
								<span class="h6 fw-normal mb-0"><?php echo $record['size']; ?></span>
							</li>
							<li class="d-sm-flex justify-content-between align-items-center mt-2">
								<span class="mb-0"><i class="bi bi-person fa-fw me-2"></i>&nbsp;&nbsp;Builder
									Name:</span>
								<span class="h6 fw-normal mb-0"><?php echo $record['builder']; ?></span>
							</li>
							<li class="d-sm-flex justify-content-between align-items-center mt-2">
								<span class="mb-0"><i class="fa-solid fa-ruler-combined"></i>&nbsp;&nbsp;
									Maximum speed:</span>
								<span class="h6 fw-normal mb-0"><?php echo $record['max_speed']; ?> Knots</span>
							</li>
							<li class="d-sm-flex justify-content-between align-items-center mt-2">
								<span class="mb-0"><i class="fas fa-cogs"></i>&nbsp;&nbsp;
									Engine:</span>
								<span class="h6 fw-normal mb-0"><?php echo $record['engine']; ?></span>
							</li>
						</ul>
					</div>

					<div class="text-center mt-5">
						<p style="font-size: 16px; font-weight: bold">
						    Thank you for choosing Book My Yacht! We're dedicated to providing a relaxing 
						    and rejuvenating experience throughout your whole yacht vacation.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Yacht Section End -->

	<!-- MAIN End -->

	<!-- FOOTER Start -->
	<?php
	include 'footer.php';
	?>
	<!-- FOOTER End -->
</body>

</html>