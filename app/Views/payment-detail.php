<!doctype html>
<html lang="en">


<head>

	<meta charset="utf-8" />
	<title>Banking Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?php echo site_url('public/');?>assets/images/favicon.ico">

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
			<?php include ('header.php') ?>
			<!-- ========== Header End ========== -->

			<!-- ========== Left Sidebar Start ========== -->
			<?php include ('sidebar.php') ?>
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
									<h4 class="mb-sm-0 font-size-18">Banking Details</h4>

									<div class="page-title-right">
										<ol class="breadcrumb m-0">
											<li class="breadcrumb-item"><a href="<?= base_url('payment') ?>">Payment</a></li>
											<li class="breadcrumb-item active">Banking Details</li>
										</ol>
									</div>

								</div>
							</div>
						</div>
						<!-- end page title -->
						 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    if ($('table tr').length >= 4) {
        $('.btn.btn-primary.mb-4').remove();
    }
});
</script>
						<div class="text-sm-end px-4 py-2">
							<?php
							
    						$index = 1;
    						if( $index >= 3){
    							echo "You can only add 3 Bank Accounts";
    						}else{
    						?>
    							<a href="<?= base_url('payment') ?>" class='btn btn-primary mb-4'>Add Bank</a>    
    						<?php 
    							}
							?>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="row mb-2">

										</div>

										<div class="table-responsive">
											<table class="table align-middle table-nowrap table-check">
												<thead class="table-light">
													<tr>
														<!-- <th class="align-middle">ID</th> -->
														<th class="align-middle">Sr.</th>
														
														<?php if (session('role') != 'manager'): ?>
															<th>Username</th>
														<?php endif; ?>

														<th class="align-middle">Bank Name</th>
														<th class="align-middle">Bank Address</th>
														<th class="align-middle">ABA</th>
														<th class="align-middle">Swift Code</th>
														<th class="align-middle">IBAN</th>
														<th class="align-middle">Account Number</th>
														<th class="align-middle">Account Type</th>
														<th class="align-middle">Beneficiary Name</th>
														<th class="align-middle">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
													
													foreach ($payment as $value) {
														?>
														<?php if (session('role') == "manager" && $value['username'] == session('name')) {
															?>
															<tr>
																<!-- <td>Id</td> -->
																<!-- <td>username</td> -->
																	<td><?= $index; ?></td>
																<td><?= $value['bankName']; ?></td>
																<td><?= $value['bankAddress']; ?></td>
																<td><?= $value['ABA']; ?></td>
																<td><?= $value['swiftCode']; ?></td>
																<td><?= $value['IBAN']; ?></td>
																<td><?= $value['accountNumber']; ?></td>
																<td><?= $value['accountType']; ?></td>
																<td><?= $value['beneficiaryName']; ?></td>
																<td>
																	<div class="d-flex gap-3">
																		<!--<a href="<?= base_url('payment/edit' .$value['id']) ?>" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>-->
																		<a href="<?= base_url('payment/delete' .$value['id'] ); ?>" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
																	</div>
																</td>
															</tr>
														<?php
														$index++;
														} elseif (session('role') == "admin") {
															?>
															<tr>
																<td><?= $index; ?></td>
																<td>@<?= $value['username']; ?></td>
																<td><?= $value['bankName']; ?></td>
																<td><?= $value['bankAddress']; ?></td>
																<td><?= $value['ABA']; ?></td>
																<td><?= $value['swiftCode']; ?></td>
																<td><?= $value['IBAN']; ?></td>
																<td><?= $value['accountNumber']; ?></td>
																<td><?= $value['accountType']; ?></td>
																<td><?= $value['beneficiaryName']; ?></td>
																<td>
																	<div class="d-flex gap-3">
																		<a href="<?= base_url('payment/edit' .$value['id']) ?>" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
																		<a href="<?= base_url('payment/delete' .$value['id'] ); ?>" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
																	</div>
																</td>
															</tr>
															<?php
															$index++;
														}
													}
													
												
													?>

												</tbody>
											</table>
										</div>
									
									</div>
								</div>
							</div>
						</div>
						<!-- end row -->

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
									<!-- Design & Develop by <a class="text-decoration-underline">Book My Yacht</a> -->
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

		<script src="<?php echo site_url('public/'); ?>assets/js/app.js"></script>

	</body>

	<!-- Mirrored from themesdesign.in/dason-django/layouts/default/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 22:11:09 GMT -->
	</html>
