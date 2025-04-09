<!DOCTYPE html>
<html lang="en">

<head>
	<title>Yacht Detail</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="bookmyyacht.us">
	<meta name="description"
		content="Embark on an unforgettable journey on the seas with Book My Yacht, your premier destination for chartering luxury yachts worldwide. Explore our extensive fleet of yachts, tailored to suit every occasion and preference.">
	<meta name="keywords"
		content="book my yacht, luxury yacht charter, yacht rental, yacht charter company, yacht vacation, yacht experience, yacht rental prices, yacht destinations, yacht booking, yacht rental online, yacht charter for special occasions">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo site_url('yachtProject/'); ?>assets/fav/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>yachtProject/assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>yachtProject/assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>yachtProject/assets/vendor/glightbox/css/glightbox.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>yachtProject/assets/vendor/flatpickr/css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>yachtProject/assets/vendor/choices/css/choices.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>yachtProject/assets/vendor/tiny-slider/tiny-slider.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>yachtProject/assets/css/style.css">

	<style type="text/css">
		.navbar-expand-xl .navbar-brand .navbar-brand-item {
			height: 60px !important;
		}

		.original-price {
			text-decoration: line-through;
			color: #888;
			margin-right: 10px;
			font-size: 16px;
		}
	</style>

</head>

<body>

	<!-- Header START -->
	<header class="navbar-light header-sticky">
		<!-- Logo Nav START -->
		<nav class="navbar navbar-expand-xl">
			<div class="container">
				<!-- Logo START -->
				<a class="navbar-brand" href="<?= base_url('/') ?>">
					<img class="navbar-brand-item" alt="Book My Yacht Logo"
						src="<?php echo site_url('yachtProject/'); ?>assets/images/bmy-logo.png" alt="logo">
				</a>
				<!-- Logo END -->

				<!-- Responsive navbar toggler -->
				<button class="navbar-toggler ms-auto mx-3 p-0 p-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
						<!--<li class="nav-item dropdown">-->
						<!--	<a class="nav-link dropdown-toggle" href="#" id="listingMenu" data-bs-toggle="dropdown"-->
						<!--	aria-haspopup="true" aria-expanded="false">Yacht Types</a>-->
						<!--	<ul class="dropdown-menu" aria-labelledby="listingMenu">-->
						<!--		<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Motor Yachts</a>-->
						<!--		</li>-->
						<!--		<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Sailing-->
						<!--		Yachts</a></li>-->
						<!--		<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Catamarans</a>-->
						<!--		</li>-->
						<!--		<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Trimarans</a>-->
						<!--		</li>-->
						<!--		<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Explorer-->
						<!--		Yachts</a></li>-->
						<!--		<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Sports Yachts</a>-->
						<!--		</li>-->
						<!--		<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Luxury Yachts</a>-->
						<!--		</li>-->
						<!--		<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Trawler-->
						<!--		Yachts</a></li>-->
						<!--		<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Classic-->
						<!--		Yachts</a></li>-->
						<!--		<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Day Sailors</a>-->
						<!--		</li>-->
						<!--		<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Performance-->
						<!--		Yachts</a></li>-->
						<!--		<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Fishing-->
						<!--		Yachts</a></li>-->
						<!--		<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">Charter-->
						<!--		Yachts</a></li>-->
						<!--		<li>-->
						<!--			<hr class="dropdown-divider">-->
						<!--		</li>-->
						<!--		<li> <a class="dropdown-item" href="<?= base_url('us/yacht-list'); ?>">See More </a>-->
						<!--		</li>-->
						<!--	</ul>-->
						<!--</li>-->

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
				<!-- Main navbar END -->

				<div class="nav flex-row ms-xl-auto">
					<button class="btn btn-sm mb-0 enquiry-top border border-white text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBookstay" aria-controls="offcanvasBookstay"><i class="bi bi-calendar-week me-2"></i>Enquiry</button>
				</div>
			</div>
		</nav>
		<!-- Logo Nav END -->
	</header>
	<!-- Header END -->

	<!-- **************** MAIN CONTENT START **************** -->
	<main>

		<!-- =======================
		Main Title START -->
		<section class="py-0 pt-sm-5">
			<div class="container position-relative">
				<!-- Title and button START -->
				<div class="row mb-3">
					<div class="col-12">
						<!-- Meta -->
						<div class="d-lg-flex justify-content-lg-between mb-1">
							<!-- Title -->
							<div class="mb-2 mb-lg-0">
								<h1 class="fs-2"><?php echo $record['hname']; ?></h1>
								<!-- Location -->
								<p class="fw-bold mb-0"><i class="bi bi-geo-alt me-2"></i><?php echo $record['address']; ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
		Main Title END -->

		<!-- =======================


		Image gallery START -->
		<section class="card-grid pt-0">
			<div class="container">
				<div class="row g-2">
					<!-- Image -->
					<div class="col-md-6">
						<a data-glightbox data-gallery="gallery" href="<?= base_url('uploads/thumbnail/' . $record['thumb-img']) ?>">
							<!-- image 0 -->
							<div class="card card-grid-lg card-element-hover card-overlay-hover overflow-hidden"
								style="object-fit: content; background-position: center; background-size:cover; background-image: url('<?= base_url('uploads/thumbnail/' . $record['thumb-img']) ?>')">

								<!-- Card hover element -->
								<div class="hover-element position-absolute w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>
					</div>

					<div class="col-md-6">
						<!-- Card item START -->
						<div class="row g-2">
							<!-- Image -->
							<div class="col-12">
								<a data-glightbox data-gallery="gallery" href="<?= base_url('uploads/mainContent/' . $img1) ?>">
									<!-- image 1 -->
									<div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden"
										style="background-position: center left; background-size: cover; background-image: url('<?= base_url('uploads/mainContent/' . $img1) ?>')">
										<!-- Card hover element -->
										<div class="hover-element position-absolute w-100 h-100">
											<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
										</div>
									</div>
								</a>
							</div>

							<!-- Image -->
							<div class="col-md-6">
								<a data-glightbox data-gallery="gallery" href="<?= base_url('uploads/mainContent/' . $img2) ?>">
									<!--image 2  -->
									<div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden"
										style="object-fit: content;background-position: center; background-size:cover; background-image: url('<?= base_url('uploads/mainContent/' . $img2) ?>')">
										<!-- Card hover element -->
										<div class="hover-element position-absolute w-100 h-100">
											<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
										</div>
									</div>
								</a>
							</div>

							<!-- Images -->
							<div class="col-md-6">
								<!-- image 3 -->
								<div class="card card-grid-sm overflow-hidden card-element-hover card-overlay-hover"
									style="object-fit: content; background-position:center; background-size:cover; background-image: url('<?= base_url('uploads/mainContent/' . $img3) ?>')">
									<!-- Background overlay -->
									<div class="bg-overlay bg-dark opacity-7"></div>

									<!-- Overlay text -->
									<div class="card-img-overlay d-flex h-100 w-100">
										<h6 class="card-title m-auto fw-light text-decoration">
											<a data-glightbox data-gallery="gallery" href="<?= base_url('uploads/mainContent/' . $img3) ?>" class="text-white">
												View all
											</a>
										</h6>
									</div>
									<?php if (!empty($images)): ?>
										<?php foreach ($images as $image): ?>
											<div class="col-md-4">
												<a data-glightbox="" data-gallery="gallery" href="<?= base_url('uploads/mainContent/' . $image) ?>" class="stretched-link z-index-9"></a>
											</div>
										<?php endforeach; ?>
									<?php endif; ?>
								</div>
							</div>

						</div>
						<!-- Card item END -->
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
		Image gallery END -->

		<!-- =======================
		About hotel START -->
		<section class="pt-0">
			<div class="container" data-sticky-container>

				<div class="row g-4 g-xl-5">
					<!-- Content START -->
					<div class="col-xl-7 order-1">
						<div class="vstack gap-5">

							<!-- About hotel START -->
							<div class="card bg-transparent">
								<!-- Card header -->
								<div class="card-header border-bottom bg-transparent px-0 pt-0">
									<h3 class="mb-4">About This Yacht</h3>
									<p><?= $record['about']; ?></p>
								</div>

								<h5 class="fw-light mb-4 mt-4">Yacht Detail</h5>

								<table class="table table-bordered">
									<tbody>
										<tr>
											<td><i class="fas fa-ship me-2"></i>Yacht Type</td>
											<td><?= $record['yacht_type']; ?></td>
										</tr>
										<tr>
											<td><i class="fas fa-cogs me-2"></i>Engine Type</td>
											<td><?= $record['engine']; ?></td>
										</tr>
										<tr>
											<td><i class="fas fa-tachometer-alt me-2"></i>Speed</td>
											<td><?= $record['max_speed']; ?> Knots</td>
										</tr>
										<tr>
											<td><i class="fas fa-user me-2"></i>Builder</td>
											<td><?= $record['builder']; ?></td>
										</tr>
										<tr>
											<td><i class="fas fa-calendar-alt me-2"></i>Year Of Build</td>
											<td><?= $record['year_of_build']; ?></td>
										</tr>
										<tr>
											<td><i class="fas fa-ruler-horizontal me-2"></i>Yacht Length</td>
											<td><?= $record['yacht_length']; ?> FT</td>
										</tr>
										<tr>
											<td><i class="fas fa-users me-2"></i>Guest</td>
											<td><?= $record['guest']; ?> Max Capacity</td>
										</tr>
										<tr>
											<td><i class="fas fa-door-closed me-2"></i>Cabin</td>
											<td><?= $record['cabin']; ?></td>
										</tr>
									</tbody>
								</table>

								<!-- Card body START -->
								<div class="card-body pt-4 p-0">
									<!-- List -->
									<h5 class="fw-light mb-2">Advantages</h5>
									<ul class="list-group list-group-borderless mb-0">
										<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Exceptional craftsmanship combining advanced technology.</li>
										<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Superior quality ensuring top performance.</li>
										<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Custom cruise plans tailored to individual preferences.</li>
										<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Commitment to pampering guests with plush linens, real dishware and food served on silver platters.</li>
									</ul>
								</div>
								<!-- Card body END -->
							</div>
							<!-- About hotel START -->

							<!-- Amenities START -->
							<div class="card bg-transparent">
								<!-- Card header -->
								<div class="card-header border-bottom bg-transparent px-0 pt-0">
									<h3 class="card-title mb-0">Amenities</h3>
								</div>

								<!-- Card body START -->
								<div class="card-body pt-4 p-0">
									<div class="row g-4">
										<!-- Payment Method -->
										<div class="col-sm-6">
											<h6><i class="fa-solid fa-credit-card me-2"></i>Payment Method</h6>
											<!-- List -->
											<ul class="list-group list-group-borderless mt-2 mb-0">
												<li class="list-group-item pb-0">
													<i class="fa-solid fa-check-circle text-success me-2"></i>Credit Card (Visa, Master Card)
												</li>
												<li class="list-group-item pb-0">
													<i class="fa-solid fa-check-circle text-success me-2"></i>Cash
												</li>
												<li class="list-group-item pb-0">
													<i class="fa-solid fa-check-circle text-success me-2"></i>Debit Card
												</li>
											</ul>

											<h6><i class="fa-solid fa-volume-up me-2 mt-4"></i>Staff Language</h6>
											<!-- List -->
											<ul class="list-group list-group-borderless mt-2 mb-0">
												<li class="list-group-item pb-0">
													<i class="fa-solid fa-check-circle text-success me-2"></i>English
												</li>
											</ul>
										</div>

										<!-- Safety & Security -->
										<div class="col-sm-6" <?= empty($YachtService) ? 'style="display:none;"' : ''; ?>>
											<h6><i class="fa-solid fa-cogs me-2"></i>Facilities</h6>
											<!-- List -->
											<ul class="list-group list-group-borderless mt-2 mb-0">
												<?php foreach ($YachtService as $abc) : ?>
													<li class="list-group-item pb-0">
														<i class="fa-solid fa-check-circle text-success me-2"></i>
														<?= $abc['service_name']; ?>
													</li>
												<?php endforeach; ?>
											</ul>
										</div>

									</div>
								</div>
								<!-- Card body END -->
							</div>
							<!-- Amenities END -->

							<!-- Hotel Policies START -->
							<div class="card bg-transparent">
								<!-- Card header -->
								<div class="card-header border-bottom bg-transparent px-0 pt-0">
									<!-- <h3 class="mb-0">Yacht Facilities</h3> -->
									<h3 class="mb-0">Yacht Policies</h3>
								</div>

								<!-- Card body START -->
								<div class="card-body pt-4 p-0">
									<!-- List -->
									<ul class="list-group list-group-borderless mb-2">
										<li class="list-group-item d-flex">
											<i class="bi bi-check-circle-fill me-2"></i>
											The yacht's modern kitchen boasts cutting-edge appliances.
										</li>
										<!--<li class="list-group-item d-flex">-->
										<!--	<i class="bi bi-check-circle-fill me-2"></i>-->
										<!--	The yacht's swimming pool provides refreshing relaxation with stunning ocean views and comfort.-->
										<!--</li>-->
										<!--<li class="list-group-item d-flex">-->
										<!--	<i class="bi bi-check-circle-fill me-2"></i>The yacht's gymnasium features modern equipment for a complete workout.-->
										<!--</li>-->
										<!--<li class="list-group-item d-flex">-->
										<!--	<i class="bi bi-check-circle-fill me-2"></i>The yacht's private cinemas offer a luxurious movie experience with ultimate comfort and privacy.-->
										<!--</li>-->
										<li class="list-group-item d-flex">
											<i class="bi bi-check-circle-fill me-2"></i>Drinking and vaping tobacco within controlled limits are permitted on the yacht, but please refrain from creating a disturbance or causing any disruption onboard.
										</li>
										<li class="list-group-item d-flex">
											<i class="bi bi-check-circle-fill me-2"></i>
											Stay connected with high-speed internet and communication facilities.
										</li>
										<li class="list-group-item d-flex">
											<i class="bi bi-check-circle-fill me-2"></i>
											A yacht offers luxurious facilities that redefine maritime indulgence.
										</li>
										<li class="list-group-item d-flex">
											<i class="bi bi-x-circle-fill text-danger me-2"></i>Drugs and illegal substances are strictly prohibited aboard the yacht and must not be brought onboard or consumed.
										</li>
										<li class="list-group-item d-flex">
											<i class="bi bi-x-circle-fill text-danger me-2"></i>Bringing extra guests beyond the agreed number is expressly not allowed, per U.S. Coast Guard Regulations.
										</li>
									</ul>
								</div>
								<!-- Card body END -->
							</div>
							<!-- Hotel Policies START -->

							<!-- Room START -->
							<?php
							// Check if any of the values are missing
							if (
								(!$img11 || !$yachtName11 || !$price11 || !$YachtID11) &&
								(!$img22 || !$yachtName22 || !$price22 || !$YachtID22)
							):
							?>
								<!-- Display message if no yacht data is available -->

							<?php else: ?>
								<!-- Room START -->
								<div class="card bg-transparent" id="room-options">
									<!-- Card header -->
									<div class="card-header border-bottom bg-transparent px-0 pt-0">
										<div class="d-sm-flex justify-content-sm-between align-items-center">
											<h3 class="mb-2 mb-sm-0">Yacht Options</h3>
										</div>
									</div>

									<!-- Card body START -->
									<div class="card-body pt-4 p-0">
										<div class="vstack gap-4">

											<!-- Room item 1 START -->
											<?php if ($img11 && $yachtName11 && $price11 && $YachtID11): ?>
												<div class="card shadow p-3">
													<div class="row g-4">
														<!-- Card img -->
														<div class="col-md-5 position-relative">
															<div class="tiny-slider arrow-round arrow-xs arrow-dark overflow-hidden rounded-2">
																<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items="1">
																	<div><img src="<?= base_url('uploads/thumbnail/' . $img11) ?>" style="width: 100%; height: 100%; object-fit: contain;"></div>
																</div>
															</div>
														</div>

														<!-- Card body -->
														<div class="col-md-7">
															<div class="card-body d-flex flex-column h-100 p-0">
																<h5 class="card-title"><a href="<?= base_url('yacht-detail' . $YachtID11) ?>"><?= $yachtName11; ?></a></h5>
																<ul class="nav nav-divider mb-2">
																	<li class="nav-item">Air Conditioning</li>
																	<li class="nav-item">Wifi</li>
																	<li class="nav-item">Kitchen</li>
																	<li class="nav-item"><a href="#" class="mb-0 text-primary">More+</a></li>
																</ul>
																<p class="text-success mb-0">Free Cancellation before 24 Hours</p>
																<div class="d-sm-flex justify-content-sm-between align-items-center mt-auto">
																	<div class="d-flex align-items-center">
																		<h5 class="fw-bold mb-0 me-1">$<?= $price11; ?></h5>
																		<span class="mb-0 me-2">/ Hour</span>
																	</div>
																	<div class="mt-3 mt-sm-0">
																		<a href="<?= base_url('yacht-detail' . $YachtID11) ?>" class="btn btn-sm mb-0" style="background-color: #d5ae82; color: white;">View Detail</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											<?php endif; ?>
											<!-- Room item 1 END -->

											<!-- Room item 2 START -->
											<?php if ($img22 && $yachtName22 && $price22 && $YachtID22): ?>
												<div class="card shadow p-3">
													<div class="row g-4">
														<!-- Card img -->
														<div class="col-md-5 position-relative">
															<div class="tiny-slider arrow-round arrow-xs arrow-dark overflow-hidden rounded-2">
																<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items="1">
																	<div><img src="<?= base_url('uploads/thumbnail/' . $img22) ?>" style="width: 100%; height: 100%; object-fit: contain;"></div>
																</div>
															</div>
														</div>

														<!-- Card body -->
														<div class="col-md-7">
															<div class="card-body d-flex flex-column h-100 p-0">
																<h5 class="card-title"><a href="<?= base_url('yacht-detail' . $YachtID22) ?>"><?= $yachtName22; ?></a></h5>
																<ul class="nav nav-divider mb-2">
																	<li class="nav-item">Air Conditioning</li>
																	<li class="nav-item">Wifi</li>
																	<li class="nav-item">Kitchen</li>
																	<li class="nav-item"><a href="#" class="mb-0 text-primary">More+</a></li>
																</ul>
																<p class="text-success mb-0">Free Cancellation before 24 Hours</p>
																<div class="d-sm-flex justify-content-sm-between align-items-center mt-auto">
																	<div class="d-flex align-items-center">
																		<h5 class="fw-bold mb-0 me-1">$<?= $price22; ?></h5>
																		<span class="mb-0 me-2">/ Hour</span>
																	</div>
																	<div class="mt-3 mt-sm-0">
																		<a href="<?= base_url('yacht-detail' . $YachtID22) ?>" class="btn btn-sm mb-0" style="background-color: #d5ae82; color: white;">View Detail</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											<?php endif; ?>
											<!-- Room item 2 END -->

										</div>
									</div>
									<!-- Card body END -->
								</div>
								<!-- Room END -->
							<?php endif; ?>



						</div>
					</div>
					<!-- Content END -->

					<!-- Right side content START -->
					<aside class="col-xl-5 order-xl-2">
						<div data-sticky data-margin-top="100" data-sticky-for="1199">
							<!-- Book now START -->
							<?php foreach ($price as $abc) : ?>
								<div class="card card-body border mt-4">
									<!-- Title -->
									<div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
										<div>
											<span><?= $abc['day']; ?> Yacht Plan</span>
											<h4 class="card-title mb-0">
												<span class="original-price">$<?= $abc['mrp_price']; ?></span>
												<span class="">$<?= $abc['rent']; ?></span>
											</h4>
										</div>

										<div>
											<h6 class="fw-normal mb-0">
											    
											<!-- <?= $abc['packs']; ?>  Pax / -->
											<?= $abc['hours']; ?> Hour</h6>
											<!-- <small>+ $285 taxes & fees</small> -->
										</div>
									</div>
									<!-- Title  End -->
									<div class="d-grid">
										<!--<a href="<?= base_url('us/booking-page' . $record['id']) ?>" class="btn btn-lg btn-primary-soft mb-0" style="background-color: #d5ae82; color: white; border: none;">Book Yacht</a>-->
										<form action="<?= base_url() ?>goto-booking" method="get">
											<input type="hidden" name="price_id" value="<?= $abc['id']; ?>">
											<input type="hidden" name="id" value="<?= $record['id']; ?>">
											<input type="submit" class="btn btn-lg btn-primary-soft mb-0" style="background-color: #d5ae82; color: white; border: none;width: -webkit-fill-available;" value="Book Yacht">
										</form>
									</div>
								</div>
							<?php endforeach; ?>

							<div class="card card-body bg-light mt-5">
								<!-- Title -->
								<h4 class="card-title">Need Help?</h4>

								<!-- List -->
								<ul class="list-group list-group-borderless">
									<li class="list-group-item py-3">
										<a href="https://api.whatsapp.com/send/?phone=17862977769&text&type=phone_number&app_absent=0" class="h6 mb-0">
											<i class="bi fa-fw bi-telephone-forward text-primary fs-5 me-2"></i>
											<span class="fw-light me-1">Call us on:<br>+1 786 297 7769</span>
										</a>
									</li>

									<li class="list-group-item py-0">
										<hr class="my-0">
									</li>
									<!-- Divider -->

									<li class="list-group-item py-3">
										<h6 class="mb-0">
											<i class="bi fa-fw bi-alarm text-primary fs-5 me-2"></i>
											<span class="h6 fw-light me-1 mb-0">Timing: 9.00am to 6.00pm</span>
										</h6>
									</li>

									<li class="list-group-item py-0">
										<hr class="my-0">
									</li>
									<!-- Divider -->

									<li class="list-group-item py-3">
										<a href="https://bookmyyacht.us/us/contact" class="h6 mb-0">
											<i class="bi fa-fw bi-headset text-primary fs-5 me-2"></i><span class="h6 fw-light me-1 mb-0">Let Us Call You</span>
										</a>
									</li>

									<li class="list-group-item py-0">
										<hr class="my-0">
									</li>
									<!-- Divider -->

									<li class="list-group-item pt-3 pb-0">
										<a href="https://bookmyyacht.us/us/contact" class="h6 mb-0">
											<i class="bi fa-fw bi-calendar-check text-primary fs-5 me-2"></i><span class="h6 fw-light me-1 mb-0">Book Appointments</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</section>
	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	<!-- =======================
		Footer START -->
	<footer class="bg-dark pt-4" style="background-color: #061138;">
		<div class="container">
			<div class="row g-8">
				<div class="col-lg-12 mb-4">
					<div class="row g-4 mb-2">
						<div class="col-3">
							<a href="<?= base_url('/'); ?>">
								<img src="<?php echo site_url('yachtProject/'); ?>assets/images/bmy-logo.png" alt="logo" width="170px"
									style="margin-top: 5px;">
							</a>
							<h5 class="text-white mt-3 mb-md-3">Books My Yacht</h5>
							<p class="mb-2">
								<a href="https://wa.me/17862977769" class="text-muted text-primary-hover"><i class="bi bi-telephone me-2"></i>&nbsp;+1(786)-297-7769</a>
							</p>
							<p class="mb-2"><a href="mailto:booking@bookmyyacht.us" class="text-muted text-primary-hover"><i class="bi bi-envelope me-2"></i>&nbsp;booking@bookmyyacht.us</a></p>


							<p class="mb-2">
								<a href="https://bookmyyacht.us/us/contact" class="text-muted text-primary-hover">
									<i class="bi bi-map me-2"></i>
									&nbsp;&nbsp;4910 8th Green St, Dover, DE 19901</a>
							</p>
						</div>

						<div class="col-3">
							<h5 class="text-white mb-2 mb-md-4 my-4">Quick Links</h5>
							<ul class="nav flex-column text-primary-hover">
								<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('manager-login'); ?>">Partner Login</a></li>
								<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/contact'); ?>">Post Free Listing</a></li>
								<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/yacht-list') ?>">Find Yachts</a></li>
								<!-- <li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/services'); ?>">Offers</a></li> -->
								<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/gallery'); ?>">Gallery</a></li>
								<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/contact'); ?>">Contact</a></li>
							</ul>
						</div>
						<div class="col-3 ">
							<h5 class="text-white mb-2 mb-md-4 my-4">Booking</h5>
							<ul class="nav flex-column text-primary-hover">
								<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('us/about'); ?>">About Us</a></li>
								<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('terms') ?>">Terms &amp; Conditions</a></li>
								<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('privacy') ?>">Privacy Policy</a></li>
								<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('refund') ?>">Refund Policy</a></li>
								<li class="nav-item"><a class="nav-link text-muted" href="<?= base_url('support') ?>">Support</a></li>
							</ul>
						</div>
						<div class="col-3">
							<h5 class="text-white mb-2 my-4">Follow us on</h5>
							<ul class="list-inline mb-0 mt-3">
								<li class="list-inline-item"> <a class="btn btn-sm px-2 bg-facebook mb-0" href="https://www.facebook.com/people/Book-My-Yacht/100083596328997/?mibextid=ZbWKwL"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
								<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-instagram mb-0" href="https://www.instagram.com/bookmyyachtt/"><i class="fab fa-fw fa-instagram"></i></a> </li>
								<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-twitter mb-0" href="https://twitter.com/bookmyyachts?s=08"><i class="fab fa-fw fa-twitter"></i></a> </li>
								<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-linkedin mb-0" href="https://www.linkedin.com/company/book-my-yacht/"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
								<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-youtube mb-0" href="https://pin.it/6DpYROV"><i class="fab fa-fw fa-pinterest"></i></a> </li>
							</ul>
							<h5 class="text-white mb-2" style="margin-top:10px;">Payment &amp; Security</h5>
							<ul class="list-inline mb-0 mt-3">

								<li class="list-inline-item"> <a href="#"><img src="<?php echo site_url('yachtProject/'); ?>assets/images/element/visa.svg" class="h-30px" alt="Book My Yacht"></a></li>
								<li class="list-inline-item"> <a href="#"><img src="<?php echo site_url('yachtProject/'); ?>assets/images/element/mastercard.svg" class="h-30px" alt="Book My Yacht"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

		<!-- copywrite section start -->
		<div class="row">
			<div class="container">
				<div class="text-muted text-primary-hover text-center mt-4 mb-4"> Copyrights©2024 BMY - Book My Yacht . All rights reserved.
				</div>
			</div>
		</div>
		</div>
		<script src="<?= base_url() ?>/yachtProject/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

		<!-- Vendors -->
		<script src="<?= base_url() ?>/yachtProject/assets/vendor/glightbox/js/glightbox.js"></script>
		<script src="<?= base_url() ?>/yachtProject/assets/vendor/flatpickr/js/flatpickr.min.js"></script>
		<script src="<?= base_url() ?>/yachtProject/assets/vendor/choices/js/choices.min.js"></script>
		<script src="<?= base_url() ?>/yachtProject/assets/vendor/tiny-slider/tiny-slider.js"></script>
		<script src="<?= base_url() ?>/yachtProject/assets/vendor/sticky-js/sticky.min.js"></script>

		<!-- ThemeFunctions -->
		<script src="<?= base_url() ?>/yachtProject/assets/js/functions.js"></script>
	</footer>
	<!-- =======================
	Footer END -->