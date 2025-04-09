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

<style>
    .services-section-three .upper-row .image-layer {
        right: 0px !important;
    }
</style>


<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="flaticon-targeting-cross"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="#">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Finance</a></li>
                <li><a href="#">Idea</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Growth</a></li>
                <li><a href="#">Plan</a></li>
            </ul>
        </div>
    </div>
</div>

<section class="page-banner">
    <div class="image-layer" style="background-image:url(<?= base_url('yachtProject/us/') ?>images/background/banner-1.jpg);"></div>

    <div class="banner-inner" style="background-color: #00000073;">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Offers</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url('/') ?>">Home</a></li>
                        <li>Offers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Services Section-->
<section class="services-section-two">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Service Block-->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image">
                        <img src="<?= base_url('yachtProject/us/') ?>../assets/bmy/offers/Ground-breaking.jpeg" alt="" title="">
                    </div>
                    <div class="lower-box">
                        <div class="title-box">
                            <div class="inner">
                                <div class="subtitle">Top landmarks & amazing</div>
                                <h4><a href="<?= base_url('us/yacht-list') ?>">Birthday Party</a></h4>
                            </div>
                        </div>
                        <div class="text">Set sail for the ultimate birthday celebration aboard our luxurious yacht. Indulge in opulence as you cruise the serene waters, creating timeless memories surrounded by stunning views and top-notch service. Elevate your special day with a touch of nautical elegance.</div>
                        <div class="link-box"><a href="<?= base_url('us/yacht-list') ?>">Start Sailings</a></div>
                    </div>
                </div>
            </div>

            <!--Service Block-->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image">
                        <img src="<?= base_url('yachtProject/us/') ?>../assets/bmy/offers/steptodown.com297262.jpg" alt="" title="">
                    </div>
                    <div class="lower-box">
                        <div class="title-box">
                            <div class="inner">
                                <div class="subtitle">Top landmarks & amazing</div>
                                <h4><a href="<?= base_url('us/yacht-list') ?>">Wedding Celebration</a></h4>
                            </div>
                        </div>
                        <div class="text">On board our magnificent boat, set out on a luxurious and romantic voyage. Say your vows under the brilliant setting of the setting sun, and then celebrate with a starry reception. Allow the soft waves and first-rate service to create the ideal setting for the start of your happily ever after.</div>
                        <div class="link-box"><a href="<?= base_url('us/yacht-list') ?>">Start Sailing</a></div>
                    </div>
                </div>
            </div>

            <!--Service Block-->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image">
                        <img src="<?= base_url('yachtProject/us/') ?>../assets/bmy/offers/steptodown.com761515.jpg" alt="" title="">
                    </div>
                    <div class="lower-box">
                        <div class="title-box">
                            <div class="inner">
                                <div class="subtitle">Top landmarks & amazing</div>
                                <h4><a href="<?= base_url('us/yacht-list') ?>">Bachelor Party</a></h4>
                            </div>
                        </div>
                        <div class="text">Chart a course for an epic bachelor bash on our swanky yacht! Cruise the waves in style, soaking in the good vibes, panoramic views, and endless laughs. Celebrate the groom's last sail before the veil with a nautical party he'll be talking about for years!</div>
                        <div class="link-box"><a href="<?= base_url('us/yacht-list') ?>">Start Sailing</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Services Section Three-->
<section class="services-section-three">
    <div class="main-image-layer" style="background-image:url(<?= base_url('yachtProject/us/') ?>images/background/image-13.jpg);"></div>

    <div class="upper-row">
        <div class="image-layer" style="background-image: url(<?= base_url('yachtProject/us/') ?>images/background/image-14.jpg); height: auto; width:auto;"> </div>
        <div class="auto-container">
            <div class="row clearfix">

                <!--Left Column-->
                <div class="left-col col-xl-5 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>Special Offers</h2>
                            <div class="lower-text">OUR GOAL IS TO PROVIDE 100% SATISFACTION OFFERS.</div>
                        </div>
                        <div class="text">Our yacht offers, anchored in luxury, enrich your sailing experience. Take advantage of exclusive offers on everything from weekend getaways to sunset cruises, making sure that every trip is an extravagant celebration of the boundless seas. Discover your inner sailor with our alluring yacht deals.</div>
                        <div class="info">
                            <h5>For Best Yachting Services, Call Us</h5>
                            <div class="phone"><a href="tel:888505-0123">888 505-0123</a></div>
                        </div>
                    </div>
                </div>

                <!--Right Column-->
                <div class="right-col col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="featured-column-carousel owl-theme owl-carousel">
                            <!--Featured Block-->
                            <div class="featured-block">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-guitar"></span></div>
                                    <h4>Party <br>Celebrations</h4>
                                    <div class="text">Give you a complete account of the system, and expound the actual teachings the some great explorer.</div>
                                    <div class="link-box"><a href="<?= base_url('us/yacht-list') ?>">Book For Parties</a></div>
                                </div>
                            </div>
                            <!--Featured Block-->
                            <div class="featured-block">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-meeting"></span></div>
                                    <h4>Corporate <br>Meetings & Events</h4>
                                    <div class="text"> Elevate your business gatherings on the high seas with our tailored yacht meeting offers.</div>
                                    <div class="link-box"><a href="<?= base_url('us/yacht-list') ?>">Book For Meetings</a></div>
                                </div>
                            </div>
                            <!--Featured Block-->
                            <div class="featured-block">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-guitar"></span></div>
                                    <h4>Countdown To <br>The New Year</h4>
                                    <div class="text">As the clock ticks down to the New Year, sail into luxury with our exquisite yachts.</div>
                                    <div class="link-box"><a href="<?= base_url('us/yacht-list') ?>">Book For Parties</a></div>
                                </div>
                            </div>
                            <!--Featured Block-->
                            <div class="featured-block">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-meeting"></span></div>
                                    <h4>Baby<br> Shower</h4>
                                    <div class="text">Float into parenthood with a touch of elegance. Host a dreamy baby shower aboard our cozy yachts.</div>
                                    <div class="link-box"><a href="<?= base_url('us/yacht-list') ?>">Book For Celebration</a></div>
                                </div>
                            </div>
                            <!--Featured Block-->
                            <div class="featured-block">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-guitar"></span></div>
                                    <h4>Product launch <br>or Media PR</h4>
                                    <div class="text"> Launch your product or media campaign in style. Elevate your event on our luxurious yachts.</div>
                                    <div class="link-box"><a href="<?= base_url('us/yacht-list') ?>">Book For PArties</a></div>
                                </div>
                            </div>
                            <!--Featured Block-->
                            <div class="featured-block">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-meeting"></span></div>
                                    <h4>Anniversaries <br> Parties</h4>
                                    <div class="text">Mark your anniversary with us –where love meets the sea. Sail into another year of joy.</div>
                                    <div class="link-box"><a href="<?= base_url('us/yacht-list') ?>">Book For Parties</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lower-row">
        <div class="auto-container">
            <div class="process-container">
                <div class="row clearfix">
                    <!--Block-->
                    <div class="process-block col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="count"><span>01</span></div>
                                <div class="title-box">
                                    <div class="link"><a>Start Here</a></div>
                                    <h4>Choose Your Yacht</h4>
                                </div>
                                <div class="text"> Select Your Seafaring Elegance With Confidence.</div>
                            </div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="process-block col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="count"><span>02</span></div>
                                <div class="title-box">
                                    <div class="link"><a>Start Here</a></div>
                                    <h4>Choose Your Crew</h4>
                                </div>
                                <div class="text"> Craft Your Journey with Expert Crew</div>
                            </div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="process-block col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="count"><span>03</span></div>
                                <div class="title-box">
                                    <div class="link"><a>Start Here</a></div>
                                    <h4>Pay & Start Sail</h4>
                                </div>
                                <div class="text"> Complete Payment, Set Sail on Your Journey.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Services Section Four-->
<section class="services-section-four">
    <div class="auto-container">
        <div class="inner-container">
            <div class="title-box">
                <h2>Best Service <br>Is What We Aim To Offer Our Clients</h2>
            </div>
            <div class="service-list">
                <ul class="clearfix">
                    <li><span class="icon flaticon-interface-1"></span> Private Excursions</li>
                    <li><span class="icon flaticon-interface-1"></span> Top Destinations</li>
                    <li><span class="icon flaticon-interface-1"></span> Luxury Yacht Offers</li>
                </ul>
            </div>
            <div class="text">
                Choosing yacht serenity over mundane pleasures a system designed for ultimate luxury on the high seas.
            </div>
            <div class="link-box">
                <a href="<?= base_url('us/yacht-list') ?>" class="theme-btn btn-style-five">
                    <div class="btn-title">Start Today</div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Main Footer -->
<?php include('footer.php') ?>
</div>
<!--End pagewrapper-->
<script src="<?= base_url('yachtProject/us/') ?>js/owl.js"></script>
<script src="<?= base_url('yachtProject/us/') ?>js/custom-script.js"></script>

</body>

</html>