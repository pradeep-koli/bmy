<!DOCTYPE html>
<html lang="en">

<head>

	<title><?= $title ?? "Book My Yacht"; ?></title>

	<!-- Meta Tags -->

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="bookmyyacht.us">
	<meta name="description" content="We provide trusted services that are truly professional and of quality.">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="<?php echo site_url('yachtProject/'); ?>assets/fav/favicon.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


	<!-- Dark mode -->
	<script type="text/javascript">
		var theme = localStorage.getItem('data-theme');
		var root = document.documentElement;
		if (theme === 'dark' && theme !== undefined) {
			root.classList.add('dark-mode');
		} else {
			root.classList.remove('dark-mode');
		}
	</script>

	<style>
		.h-40px {
			height: 100px !important;
		}

		.navbar-expand-xl .navbar-brand .navbar-brand-item {
			height: 60px !important;
		}

		.back-top {
			background-color: #061138 !important;
		}

		.navbar-nav {

			--bs-nav-link-hover-color: #e8c02c !important;
		}

		ul.dropdown-menu {
			max-height: 200px;
			overflow-y: auto;
		}
	</style>
	<!-- Pinterest Tag -->
	<script>
		! function(e) {
			if (!window.pintrk) {
				window.pintrk = function() {
					window.pintrk.queue.push(Array.prototype.slice.call(arguments))
				};
				var
					n = window.pintrk;
				n.queue = [], n.version = "3.0";
				var
					t = document.createElement("script");
				t.async = !0, t.src = e;
				var
					r = document.getElementsByTagName("script")[0];
				r.parentNode.insertBefore(t, r)
			}
		}("https://s.pinimg.com/ct/core.js");
		pintrk('load', '2613037804331', {
			em: '<user_email_address>'
		});
		pintrk('page');
	</script>
	<noscript>
		<img height="1" width="1" style="display:none;" alt=""
			src="https://ct.pinterest.com/v3/?event=init&tid=2613037804331&pd[em]=<hashed_email_address>&noscript=1" />
	</noscript>
	<!-- end Pinterest Tag -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('yachtProject/') ?>assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('yachtProject/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('yachtProject/') ?>assets/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('yachtProject/') ?>assets/vendor/choices/css/choices.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('yachtProject/') ?>assets/vendor/flatpickr/css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('yachtProject/') ?>assets/vendor/glightbox/css/glightbox.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('yachtProject/') ?>assets/css/style.css">

</head>

<body>

	<!-- Header START -->
	<header class="header-transparent">
		<!-- Logo Nav START -->
		<nav class="navbar navbar-dark-static navbar-expand-xl">
			<div class="container-fluid px-md-5">
				<!-- Logo START -->
				<a class="navbar-brand" href="<?= base_url('/') ?>">
					<img class="navbar-brand-item" alt="Book My Yacht Logo"
						src="<?php echo site_url('yachtProject/'); ?>assets/images/bmy-logo.png" alt="logo">
				</a>
				<!-- Logo END -->

				<!-- Responsive navbar toggler -->
				<button class="navbar-toggler ms-auto me-3 p-0" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
					aria-label="Toggle navigation">
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
								Rent</a>
						</li>

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

			</div>
		</nav>
	</header>
	<!-- Header END -->