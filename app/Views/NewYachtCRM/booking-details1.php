<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<title>Booking Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?php echo site_url('public/');?>assets/images/favicon.ico">

	<link href="<?php echo site_url('public/');?>assets/libs/%40fullcalendar/core/main.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo site_url('public/');?>assets/libs/%40fullcalendar/daygrid/main.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo site_url('public/');?>assets/libs/%40fullcalendar/bootstrap/main.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo site_url('public/');?>assets/libs/%40fullcalendar/timegrid/main.min.css" rel="stylesheet" type="text/css" />

	<!-- preloader css -->
	<link rel="stylesheet" href="<?php echo site_url('public/');?>assets/css/preloader.min.css" type="text/css" />

	<!-- Bootstrap Css -->
	<link href="<?php echo site_url('public/');?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<!-- Icons Css -->
	<link href="<?php echo site_url('public/');?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="<?php echo site_url('public/');?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

	<style>
		.nowrap {
			white-space: nowrap;
		}
	</style>

</head>

<body data-topbar="dark">

	<!-- <body data-layout="horizontal"> -->

		<!-- Begin page -->
		<div id="layout-wrapper">

			<!-- ========== Header Start ========== -->
			<?php include('header.php')?>
			<!-- ========== Header End ========== -->

			<!-- ========== Left Sidebar Start ========== -->
			<?php include('sidebar.php')?>
			<!-- ========== Left Sidebar End ========== -->

			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="main-content">

				<div class="page-content">
					<div class="container-fluid">

						<!-- start page title -->
						<div class="row">
							<div class="col-12">
								<div class="page-title-box d-sm-flex align-items-center justify-content-between">
									<h4 class="mb-sm-0 font-size-18">Tour Booking</h4>

									<div class="page-title-right">
										<ol class="breadcrumb m-0">
											<li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
											<li class="breadcrumb-item active">Tour Booking</li>
										</ol>
									</div>
								</div>
							</div>
						</div>
						<!-- end page title -->

						<div class="row">
							<div class="col-12">

								<div class="row">

									<!--calendar end col -->

									<div class="col-xl-12 col-lg-12">
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr>
														<th>#</th>
														<th class="nowrap">Yacht Type</th>
														<th class="nowrap">Customer Name</th>
														<th>Passenger</th>
														<th>Phone</th>
														<th>Email</th>
														<th>Address</th>
														<th class="nowrap">Plan Description</th>
														<th class="nowrap">Booking Date</th>
														<th class="nowrap">Booking Time</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody>

													<?php foreach ($users as $user) : ?>
														
														<tr>
															<td><?php echo $user['id']; ?></td>
															<td class="nowrap"><?php echo $user['yacht_type']; ?></td>
															<td><?php echo $user['customer_name']; ?></td>
															<td><?php echo $user['ccount']; ?></td>
															<td><?php echo $user['phone']; ?></td>
															<td><?php echo $user['email']; ?></td>
															<td class="nowrap"><?php echo $user['address']; ?></td>
															<td><?php echo $user['plan_description']; ?></td>
															<td><?php echo $user['booking_date']; ?></td>
															<td><?php echo $user['booking_time']; ?></td>
															<td style="color: <?= ($user['status'] == 'approve') ? 'green' :  (($user['status'] == 'denied') ? 'red' : (($user['status'] == 'pending') ? 'orange' : '')) ?>"><?= $user['status'] ?>
														</td>

														<td>
															<div class="d-flex">
																<?php if ($user['status'] == 'approve' || $user['status'] == 'denied'): ?>
																	<form action="<?= base_url('/users/delete/'.$user['id']) ?>" method="post">
																		<?= csrf_field(); ?>
																		<button type="submit" class="btn btn-primary me-1" onclick="alert('Do you want to delete?')">Delete</button>
																	</form>
																<?php else: ?>
																	<form action="<?= base_url('/users/approve/'.$user['id']) ?>" method="post" class="me-1">
																		<?= csrf_field(); ?>

																		<button type="submit" class="btn btn-success">Approve</button>
																	</form>
																	<form action="<?= base_url('/users/deny/'.$user['id']) ?>" method="post" class="me-1">
																		<?= csrf_field(); ?>

																		<button type="submit" class="btn btn-danger">Denied</button>
																	</form>
																	<form action="<?= base_url('/users/delete/'.$user['id']) ?>" method="post">
																		<?= csrf_field(); ?>
																		
																		<button type="submit" class="btn btn-primary" onclick="alert('Do you want to delete?')">Delete</button>
																	</form>
																<?php endif; ?>
															</div>
														</td>
													</tr>
												<?php endforeach; ?>
											</tbody>


										</table>
									</div>

								</div>


							</div>
						</div>



					</div> <!-- container-fluid -->
				</div>
				<!-- End Page-content -->


				<footer class="footer">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6">
								<script>document.write(new Date().getFullYear())</script> © Bookmyyacht.
							</div>
							<div class="col-sm-6">
								<div class="text-sm-end d-none d-sm-block">
									<!-- Design & Develop by <a class="text-decoration-underline">Themesdesign</a> -->
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
			<!-- end main content-->

		</div>
		<!-- END layout-wrapper -->


		<!-- Right bar overlay-->
		<div class="rightbar-overlay"></div>

		<!-- JAVASCRIPT -->
		<script src="<?php echo site_url('public/');?>assets/libs/jquery/jquery.min.js"></script>
		<script src="<?php echo site_url('public/');?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo site_url('public/');?>assets/libs/metismenu/metisMenu.min.js"></script>
		<script src="<?php echo site_url('public/');?>assets/libs/simplebar/simplebar.min.js"></script>
		<script src="<?php echo site_url('public/');?>assets/libs/node-waves/waves.min.js"></script>
		<script src="<?php echo site_url('public/');?>assets/libs/feather-icons/feather.min.js"></script>
		<!-- pace js -->
		<script src="<?php echo site_url('public/');?>assets/libs/pace-js/pace.min.js"></script>

		<script src="<?php echo site_url('public/');?>assets/libs/%40fullcalendar/core/main.min.js"></script>
		<script src="<?php echo site_url('public/');?>assets/libs/%40fullcalendar/bootstrap/main.min.js"></script>
		<script src="<?php echo site_url('public/');?>assets/libs/%40fullcalendar/daygrid/main.min.js"></script>
		<script src="<?php echo site_url('public/');?>assets/libs/%40fullcalendar/timegrid/main.min.js"></script>
		<script src="<?php echo site_url('public/');?>assets/libs/%40fullcalendar/interaction/main.min.js"></script>

		<!-- Calendar init -->
		<script src="<?php echo site_url('public/');?>assets/js/pages/calendar.init.js"></script>

		<!-- App js -->
		<script src="<?php echo site_url('public/');?>assets/js/app.js"></script>

	</body>

	</html>
