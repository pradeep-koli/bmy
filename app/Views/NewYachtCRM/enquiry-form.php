<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<title>Enquiry Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Themesbrand" name="author" />
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
									<h4 class="mb-sm-0 font-size-18">Enquiry Form</h4>

									<div class="page-title-right">
										<ol class="breadcrumb m-0">
											<li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
											<li class="breadcrumb-item active">Enquiry Form</li>
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
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Email</th>
													<th>Phone</th>
													<th>Location</th>
													<th>Budget</th>
													<th>People</th>
													<th>Enquiry</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($enquiryData as $enquiry) : ?>
													<tr>
														<td><?php echo $enquiry['id']; ?></td>
														<td><?php echo $enquiry['name']; ?></td>
														<td><?php echo $enquiry['email']; ?></td>
														<td><?php echo $enquiry['phone']; ?></td>
														<td><?php echo $enquiry['location']; ?></td>
														<td>$<?php echo $enquiry['budget']; ?></td>
														<td><?php echo $enquiry['people']; ?></td>
														<td><?php echo $enquiry['enquiry']; ?></td>
														<td><a href="<?= base_url('enquiry/delete'.$enquiry['id']) ?>" class="btn btn-danger" onclick="alert('Do you want to delete?')">Delete</a></td>
													</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
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
										<!-- Design & Develop by <a href="#!" class="text-decoration-underline">Themesdesign</a> -->
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
