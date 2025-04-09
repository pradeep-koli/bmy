<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<title>Yacht Availability</title>
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
		.form-container {
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Adjust the values as per your preference */
			padding: 20px; /* Optional: Add padding to give space between the shadow and the form */
			border-radius: 10px; /* Optional: Add border radius for rounded corners */
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
									<h4 class="mb-sm-0 font-size-18">Yacht Availability</h4>

									<div class="page-title-right">
										<ol class="breadcrumb m-0">
											<li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
											<li class="breadcrumb-item active">Yacht Availability</li>
										</ol>
									</div>
								</div>
							</div>
						</div>
						<!-- end page title -->

						<div class="row">
							<div class="col-12">
								<div class="row mt-5">
									<!--calendar end col -->
									<div class="col-xl-5 col-lg-5 px-3">
										
										<div class="form-container card-header" >
											<form method="post" action="<?= base_url('YachtNA/insert')?>">
												<?= csrf_field();?>
												<input type="hidden" name="username" value="<?= session('name'); ?>">
												
												<div class="mt-3">
													<label class="form-label fw-bold">Date</label>
													<input type="date" name="date" class="form-control border border-primary" required>
												</div>
												<div class="mt-3">
													<label class="form-label fw-bold">Start time</label>
													<input type="time" name="starttime" class="form-control border border-primary" required>
												</div>
												<div class="mt-3">
													<label class="form-label fw-bold">End Time</label>
													<input type="time" name="endtime" class="form-control border border-primary" required>
												</div>

												<div class="mt-3">
													<label class="form-label fw-bold">Not Available Reason</label>
													<!--<input type="text" name="reason" placeholder="Holiday Reason" class="form-control border border-primary" required>-->
													<select name="reason" class="form-select">
                                                                <option value="Maintenance">Select Option</option>
                                                                <option value="Maintenance">Maintenance</option>
                                                                <option value="Yachts Cleaning">Yachts Cleaning</option>
                                                                <option value="Private Booking">Private Booking</option>
                                                                <option value="Other">Other</option>
                                                            </select>
												</div>
												
												<div class="mt-3">
													<label class="form-label fw-bold">Yacht Name</label>
													<input type="text" name="yachtname" class="form-control border border-primary" required>
												</div>
												
												<div class="mt-4">
													<input type="submit" name="submit" value="Submit" class="btn btn-primary fw-bold">
												</div>
											</form>
										</div>
									</div>
									<div class="col-xl-7 col-lg-7 mt-4 px-5">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>#</th>
													<?php
													    if (session('role') == "admin") {
													?>
													<th>Username</th>
													<?php 
													    }
													?>
													<th>Date</th>
													<th>Start Time</th>
													<th>End Time</th>
													<th>Reason</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$index = 1;
												foreach ($yachtNA as $holiday) {
													?>
													<?php
												
													if (session('role') == "manager" && $holiday['username'] == session('name')) {
														?>

														<tr>
															<td><?php echo $index; ?></td>
															<td><?php echo $holiday['starttime']; ?></td>
															<td><?php echo $holiday['endtime']; ?></td>
															<td><?php echo $holiday['date']; ?></td>
															<td><?php echo $holiday['reason']; ?></td>
															<td>
																<a href="<?= base_url('YachtNA/delete' . $holiday['id']) ?>" onclick="alert('Do you want to delete?')"
																	class="btn btn-danger">Delete
																</a>
															</td>
														</tr>
													<?php 
													    $index++;
													} elseif (session('role') == "admin") {
														?>

														<tr>
															<td><?php echo $index; ?></td>
															<td>@<?php echo $holiday['username']; ?></td>
															<td><?php echo $holiday['starttime']; ?></td>
															<td><?php echo $holiday['endtime']; ?></td>
															<td><?php echo $holiday['date']; ?></td>
															<td><?php echo $holiday['reason']; ?></td>
															<td>
																<a href="<?= base_url('YachtNA/delete' . $holiday['id']) ?>" onclick="alert('Do you want to delete?')"
																	class="btn btn-danger">Delete
																</a>
															</td>
														</tr>
														<?php
														$index++;
													}
												} ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div> 
						<!-- container-fluid -->
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


			<!-- Right Sidebar -->
			<div class="right-bar">
				<div data-simplebar class="h-100">
					<div class="rightbar-title d-flex align-items-center bg-dark p-3">

						<h5 class="m-0 me-2 text-white">Theme Customizer</h5>

						<a href="javascript:void(0);" class="right-bar-toggle ms-auto">
							<i class="mdi mdi-close noti-icon"></i>
						</a>
					</div>

					<!-- Settings -->
					<hr class="m-0" />

					<div class="p-4">
						<h6 class="mb-3">Layout</h6>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="layout"
							id="layout-vertical" value="vertical">
							<label class="form-check-label" for="layout-vertical">Vertical</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="layout"
							id="layout-horizontal" value="horizontal">
							<label class="form-check-label" for="layout-horizontal">Horizontal</label>
						</div>

						<h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="layout-mode"
							id="layout-mode-light" value="light">
							<label class="form-check-label" for="layout-mode-light">Light</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="layout-mode"
							id="layout-mode-dark" value="dark">
							<label class="form-check-label" for="layout-mode-dark">Dark</label>
						</div>

						<h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="layout-width"
							id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
							<label class="form-check-label" for="layout-width-fuild">Fluid</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="layout-width"
							id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed'),document.body.setAttribute('data-sidebar-size', 'sm')">
							<label class="form-check-label" for="layout-width-boxed">Boxed</label>
						</div>

						<h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="layout-position"
							id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
							<label class="form-check-label" for="layout-position-fixed">Fixed</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="layout-position"
							id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
							<label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
						</div>

						<h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="topbar-color"
							id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
							<label class="form-check-label" for="topbar-color-light">Light</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="topbar-color"
							id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
							<label class="form-check-label" for="topbar-color-dark">Dark</label>
						</div>

						<h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

						<div class="form-check sidebar-setting">
							<input class="form-check-input" type="radio" name="sidebar-size"
							id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
							<label class="form-check-label" for="sidebar-size-default">Default</label>
						</div>
						<div class="form-check sidebar-setting">
							<input class="form-check-input" type="radio" name="sidebar-size"
							id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
							<label class="form-check-label" for="sidebar-size-compact">Compact</label>
						</div>
						<div class="form-check sidebar-setting">
							<input class="form-check-input" type="radio" name="sidebar-size"
							id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
							<label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
						</div>

						<h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

						<div class="form-check sidebar-setting">
							<input class="form-check-input" type="radio" name="sidebar-color"
							id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
							<label class="form-check-label" for="sidebar-color-light">Light</label>
						</div>
						<div class="form-check sidebar-setting">
							<input class="form-check-input" type="radio" name="sidebar-color"
							id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
							<label class="form-check-label" for="sidebar-color-dark">Dark</label>
						</div>
						<div class="form-check sidebar-setting">
							<input class="form-check-input" type="radio" name="sidebar-color"
							id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
							<label class="form-check-label" for="sidebar-color-brand">Brand</label>
						</div>

						<h6 class="mt-4 mb-3 pt-2">Direction</h6>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="layout-direction"
							id="layout-direction-ltr" value="ltr">
							<label class="form-check-label" for="layout-direction-ltr">LTR</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="layout-direction"
							id="layout-direction-rtl" value="rtl">
							<label class="form-check-label" for="layout-direction-rtl">RTL</label>
						</div>

					</div>

				</div> <!-- end slimscroll-menu-->
			</div>
			<!-- /Right-bar -->

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

		<!-- Mirrored from themesdesign.in/dason-django/layouts/default/apps-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 22:11:16 GMT -->
		</html>
