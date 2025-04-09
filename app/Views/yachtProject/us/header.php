<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title ?? "Book My Yacht"; ?></title>

    <!-- Stylesheets -->
    <link href="<?php echo site_url('yachtProject/us/'); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo site_url('yachtProject/us/'); ?>css/style.css" rel="stylesheet">

    <!-- Responsive File -->
    <link href="<?php echo site_url('yachtProject/us/'); ?>css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo site_url('yachtProject/us/'); ?>images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo site_url('yachtProject/us/'); ?>images/favicon.ico" type="image/x-icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="bookmyyacht.us">
    <meta name="description" content="We provide trusted services that are truly professional and of quality.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="<?= base_url('yachtProject/us/') ?>images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url() ?>yachtProject/assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</head>
<style>
    * {
        font-family: 'Poppins', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {

        font-family: 'Poppins', sans-serif;
    }

    .contact-form .form-group input,
    .contact-form .form-group textarea,
    .contact-form .form-group .ui-selectmenu-button.ui-button {
        font-family: 'Poppins', sans-serif;
    }

    .subscribe-form-two form .form-group input {
        font-family: 'Poppins', sans-serif;
        font-style: italic;

    }

    .navbar-expand-xl .navbar-brand .navbar-brand-item {
        height: 60px !important;
    }
</style>

<!-- Responsive File -->
<link href="<?php echo site_url('yachtProject/us/'); ?>css/responsive.css" rel="stylesheet">
<header class="main-header header-style-three py-lg-3">
    <!-- Header Top -->
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container-fluid px-lg-5 px-3 py-lg-0 py-1">
            <div class="inner clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo">
                        <a class="navbar-brand" href="<?= base_url('/') ?>">
                            <img class="navbar-brand-item" alt="Book My Yacht Logo"
                                src="<?php echo site_url('yachtProject/'); ?>assets/images/bmy-logo.png" alt="logo"
                                style="height: 60px;">
                        </a>
                    </div>
                </div>
                <div class="nav-content clearfix mt-2">
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="<?= base_url('us/contact'); ?>">Post Free Listing</a>
                                    </li>
                                    <li><a href="<?= base_url('us/yacht-list'); ?>">Yacht Rent</a>
                                    </li>
                                    <li><a href="<?= base_url('us/services'); ?>">Offers</a></li>
                                    <li><a href="<?= base_url('us/gallery'); ?>">Gallery</a>
                                    <li><a href="<?= base_url('us/about'); ?>">About Us</a></li>
                                    <li><a href="<?= base_url('us/contact'); ?>">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!--Link Box-->
                    <div class="link-box">
                        <a href="<?= base_url('us/yacht-list') ?>" class="theme-btn btn-style-one">
                            <div class="btn-title rounded">Start Sail</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header py-lg-3">
        <!-- <div class="auto-container clearfix"> -->
        <div class="auto-container-fluid clearfix px-lg-5 px-3 py-lg-0 py-1">
            <!--Logo-->
            <div class="logo pull-left">
                <a class="navbar-brand" href="<?= base_url('/') ?>">
                    <img class="navbar-brand-item" alt="Book My Yacht Logo"
                        src="<?php echo site_url('yachtProject/'); ?>assets/images/bmy-logo.png" alt="logo"
                        style="height: 60px;">
                </a>
            </div>
            <!--Right Col-->
            <div class="pull-right clearfix mt-2">
                <!-- Main Menu -->
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

                <!--Book Btn-->
                <div class="booking-link">
                    <a href="<?= base_url('us/yacht-list') ?>" class="theme-btn btn-style-one">
                        <div class="btn-title rounded">Start Sail</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="<?= base_url('/') ?>"><img
                        src="<?= base_url('yachtProject/us/') ?>../assets/images/bmy-logo.png" alt="" title=""></a>
            </div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>
<!-- End Main Header -->