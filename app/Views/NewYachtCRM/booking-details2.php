<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<title>Booking Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- App favicon -->
	<link rel="shortcut icon" href="<?php echo site_url('public/'); ?>assets/images/favicon.ico">

	<link href="<?php echo site_url('public/'); ?>assets/libs/%40fullcalendar/core/main.min.css" rel="stylesheet"
		type="text/css" />
	<link href="<?php echo site_url('public/'); ?>assets/libs/%40fullcalendar/daygrid/main.min.css" rel="stylesheet"
		type="text/css" />
	<link href="<?php echo site_url('public/'); ?>assets/libs/%40fullcalendar/bootstrap/main.min.css" rel="stylesheet"
		type="text/css" />
	<link href="<?php echo site_url('public/'); ?>assets/libs/%40fullcalendar/timegrid/main.min.css" rel="stylesheet"
		type="text/css" />

	<!-- preloader css -->
	<link rel="stylesheet" href="<?php echo site_url('public/'); ?>assets/css/preloader.min.css" type="text/css" />

	<!-- Bootstrap Css -->
	<link href="<?php echo site_url('public/'); ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
		type="text/css" />
	<!-- Icons Css -->
	<link href="<?php echo site_url('public/'); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="<?php echo site_url('public/'); ?>assets/css/app.min.css" id="app-style" rel="stylesheet"
		type="text/css" />

</head>

<body data-topbar="dark">

	<!-- <body data-layout="horizontal"> -->

	<!-- Begin page -->
	<div id="layout-wrapper">

		<!-- ========== Header Start ========== -->
		<?php include('header.php') ?>
		<!-- ========== Header End ========== -->

		<!-- ========== Left Sidebar Start ========== -->
		<?php include('sidebar.php') ?>
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
								<h4 class="mb-sm-0 font-size-18">Booking Details</h4>

								<div class="page-title-right">
									<ol class="breadcrumb m-0">
										<li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
										<li class="breadcrumb-item active">Booking Details</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
					<!-- end page title -->

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">

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

												<?php $serialNumber = 1;
												foreach ($users as $user) : ?>

													<tr>
														<td><?php echo $serialNumber++; ?></td>
														<td class="nowrap"><?php echo $user['yacht_type']; ?></td>
														<td><?php echo $user['customer_name']; ?></td>
														<td><?php echo $user['ccount']; ?></td>
														<td><?php echo $user['phone']; ?></td>
														<td><?php echo $user['email']; ?></td>
														<td class="nowrap"><?php echo $user['address']; ?></td>
														<td><?php echo $user['plan_description']; ?></td>
														<td><?php echo $user['booking_date']; ?></td>
														<td><?php echo $user['booking_time']; ?></td>
														<td
															style="color: <?= ($user['status'] == 'Approve') ? 'green' : (($user['status'] == 'Denied') ? 'red' : (($user['status'] == 'Pending') ? 'orange' : '')) ?>">
															<?= $user['status'] ?>
														</td>

														<td>
															<div class="d-flex">
																<?php if ($user['status'] == 'approve' || $user['status'] == 'denied'): ?>
																	<form action="<?= base_url('/users/delete/' . $user['id']) ?>" method="post">
																		<?= csrf_field(); ?>
																		<button type="submit" class="btn btn-primary ms-2" onclick="alert('Do you want to delete?')">Delete</button>
																	</form>
																<?php else: ?>
																	<form action="<?= base_url('/users/approve/' . $user['id']) ?>" method="post">
																		<?= csrf_field(); ?>
																		<button type="submit" class="btn btn-success">Approve</button>
																	</form>
																	<form action="<?= base_url('/users/deny/' . $user['id']) ?>" method="post">
																		<?= csrf_field(); ?>
																		<button type="submit" class="btn btn-danger ms-2">Denied</button>
																	</form>
																	<form action="<?= base_url('/users/delete/' . $user['id']) ?>" method="post">
																		<?= csrf_field(); ?>
																		<button type="submit" class="btn btn-primary ms-2" onclick="alert('Do you want to delete?')">Delete</button>
																	</form>
																	<a href="yacht-booking-details<?= $user['yacht_id'] ?>" class="btn btn-info ms-2">ViewDetails</a>
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
						</div> <!-- end col -->
					</div> <!-- end row -->

				</div> <!-- container-fluid -->
			</div>
			<!-- End Page-content -->


			<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<script>
								document.write(new Date().getFullYear())
							</script> © Bookmyyacht.
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
	<script src="<?php echo site_url('public/'); ?>assets/libs/jquery/jquery.min.js"></script>
	<script src="<?php echo site_url('public/'); ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo site_url('public/'); ?>assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="<?php echo site_url('public/'); ?>assets/libs/simplebar/simplebar.min.js"></script>
	<script src="<?php echo site_url('public/'); ?>assets/libs/node-waves/waves.min.js"></script>
	<script src="<?php echo site_url('public/'); ?>assets/libs/feather-icons/feather.min.js"></script>
	<!-- pace js -->
	<script src="<?php echo site_url('public/'); ?>assets/libs/pace-js/pace.min.js"></script>

	<!-- Required datatable js -->
	<script src="<?php echo site_url('public/'); ?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
	<script
		src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<!-- Buttons examples -->
	<script
		src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script
		src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
	<script src="<?php echo site_url('public/'); ?>assets/libs/jszip/jszip.min.js"></script>
	<script src="<?php echo site_url('public/'); ?>assets/libs/pdfmake/build/pdfmake.min.js"></script>
	<script src="<?php echo site_url('public/'); ?>assets/libs/pdfmake/build/vfs_fonts.js"></script>
	<script src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

	<!-- Responsive examples -->
	<script
		src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script
		src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

	<!-- Datatable init js -->
	<script src="<?php echo site_url('public/'); ?>assets/js/pages/datatables.init.js"></script>

	<script src="<?php echo site_url('public/'); ?>assets/js/app.js"></script>
</body>

</html>