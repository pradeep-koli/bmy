<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>footer</title>
  <link rel="stylesheet">

  <style type="text/css">
    .footer {
      padding: 30px 20px 20px 85px;
      font-size: 15.5px;
      width: 100%;
      background-color: #061138;
      color: #fff;
      display: flex;
      flex-wrap: wrap;
      font-family: sans-serif;
    }

    .footer-item {
      flex-grow: 1;
      flex-basis: 25%;
      box-sizing: border-box;
      padding: 10px;
    }

    .copywrite {
      flex-grow: 1;
      box-sizing: border-box;
      text-align: center;
      padding: 40px 0px 0px 0px;
    }

    h5 {
      font-weight: bolder;
      font-size: 21px;
    }

    a {
      font-size: 15.5px;
      color: #c0c3cd;
    }

    a:hover {
      color: #d5ae82;
    }

    .footer-item ul li {
      padding: 5px 12px 4.8px 0px;
    }

    .social-icons .bg-facebook {
      background-color: #5d82d1;
    }

    .social-icons .bg-instagram {
      background-color: #ae2767;
    }

    .social-icons .bg-twitter {
      background-color: #40bef4;
    }

    .social-icons .bg-linkedin {
      background-color: #207eb3;
    }

    .social-icons .bg-pinterest {
      background-color: #e60000;
    }

    @media only screen and (max-width: 768px) {
      .footer-item {
        flex-basis: 50%;
      }

      .copywrite {
        margin-left: -50px;
      }
    }

    @media only screen and (max-width: 480px) {
      .footer-item {
        flex-basis: 100%;
        text-align: center;
        margin-left: -70px;
      }

      .copywrite {
        margin-left: -50px;
      }
    }

    #quick-links-list {
      display: block;
    }

    @media (max-width: 991px) {
      #quick-links-list {
        display: none;
      }
    }

    @media (max-width: 767px) {
      .footer-item {
        padding: 10px;
      }

      .footer-item h5 {
        font-size: 1.2rem;
      }
    }

    #booking-list {
      display: block;
    }

    @media (max-width: 991px) {
      #booking-list {
        display: none;
      }
    }

    @media (max-width: 767px) {
      .footer-item {
        padding: 10px;
      }

      .footer-item h5 {
        font-size: 1.2rem;
      }
    }

    /*  */
    /* Initially show the list for larger screens */
    #quick-links-list,
    #booking-list {
      display: block;
    }

    /* For tablet and smaller screens, hide the list by default */
    @media (max-width: 991px) {

      #quick-links-list,
      #booking-list {
        display: none;
        /* Hide the lists by default on tablet and smaller screens */
      }

      /* Show the dropdown icon only for mobile/tablet screens */
      #quick-links-icon,
      #booking-icon {
        display: inline-block;
        /* Show the dropdown icon only on mobile */
        margin-left: 10px;
        transition: transform 0.3s ease;
        /* Smooth transition for icon rotation */
      }
    }

    /* Hide the dropdown icon on larger screens (above 991px) */
    @media (min-width: 992px) {

      #quick-links-icon,
      #booking-icon {
        display: none;
        /* Hide the icon on larger screens */
      }
    }

    /* Adjust styling for better display on mobile */
    @media (max-width: 767px) {
      .footer-item {
        padding: 10px;
      }

      .footer-item h5 {
        font-size: 1.2rem;
        /* Adjust heading size on mobile */
      }
    }
  </style>

</head>

<body>

  <footer class="footer">
    <div class="footer-item">
      <a href="<?= base_url('/'); ?>">
        <img src="<?php echo site_url('yachtProject/'); ?>assets/images/bmy-logo.png" alt="logo" width="170px" style="margin-top: 5px;">
      </a>
      <h5 class="text-white mt-3 mb-md-3">Book My Yacht</h5>
      <p class="mb-2">

        <a href="https://wa.me/17862977769" style="color: #c0c3cd;"><i class="bi bi-telephone me-2"></i> +1(786)-297-7769
        </a>
      </p>
      <p class="mb-2">
        <a href="mailto:booking@bookmyyacht.us" style="color:  #c0c3cd;"><i class="bi bi-envelope me-2"></i>&nbsp;&nbsp;&nbsp;booking@bookmyyacht.us</a>
      </p>


      <p class="mb-2">
        <a href="https://bookmyyacht.us/us/contact" style="color: #c0c3cd;">
          <i class="bi bi-map me-2"></i>
          &nbsp;&nbsp;4910 8th Green St, Dover, DE 19901</a>
      </p>
    </div>


    <div class="footer-item">
      <h5 class="text-white mb-2 mb-md-4 my-4" id="quick-links-heading">
        Quick Links
        <i class="fas fa-chevron-down" id="quick-links-icon"></i>
      </h5>
      <ul class="nav flex-column text-primary-hover" id="quick-links-list">
        <li><a href="<?= base_url('admin'); ?>">Partner Login</a></li>
        <li><a href="<?= base_url('us/contact'); ?>">Post Free Listing</a></li>
        <li><a href="<?= base_url('us/yacht-list') ?>">Find Yachts</a></li>
        <!-- <li><a href="<?= base_url('us/services') ?>">Offers</a></li> -->
        <li><a href="<?= base_url('us/gallery') ?>">Gallery</a></li>
        <li><a href="<?= base_url('us/contact'); ?>">Contact</a></li>
      </ul>
    </div>

    <div class="footer-item">
      <h5 class="text-white mb-2 mb-md-4 my-4" id="booking-heading">
        Booking
        <i class="fas fa-chevron-down" id="booking-icon"></i>
      </h5>
      <ul class="nav flex-column text-primary-hover" id="booking-list">
        <li><a href="<?= base_url('us/about') ?>">About Us</a></li>
        <li><a href="<?= base_url('terms') ?>">Terms & Conditions</a></li>
        <li><a href="<?= base_url('privacy') ?>">Privacy Policy</a></li>
        <li><a href="<?= base_url('refund') ?>">Refund Policy</a></li>
        <li><a href="<?= base_url('support') ?>">Support</a></li>
      </ul>
    </div>

    <div class="footer-item social-icons">
      <h5 class="text-white mb-2 mb-md-4 my-4">Follow us on</h5>
      <ul class="list-inline mb-3 mt-2">
        <li class="list-inline-item bg-facebook" style="width: 32.25px; height: 32.28px; border-radius: 8px;">
          <a href="https://www.facebook.com/people/Book-My-Yacht/100083596328997/?mibextid=ZbWKwL" class="px-2"><i class="fab fa-fw fa-facebook-f" style="font-size: 13px;color: white;"></i></a>
        </li>
        <li class="list-inline-item bg-instagram" style="width: 32.25px; height: 32.28px; border-radius: 8px;">
          <a href="https://www.instagram.com/bookmyyachtt/" class="px-2"><i class="fab fa-fw fa-instagram" style="font-size: 13px;color: white;"></i></a>
        </li>
        <li class="list-inline-item bg-twitter" style="width: 32.25px; height: 32.28px; border-radius: 8px;">
          <a class="px-2" href="https://twitter.com/bookmyyachts?s=08"><i class="fab fa-fw fa-twitter" style="font-size: 13px;color: white;"></i></a>
        </li>

        <li class="list-inline-item bg-linkedin" style="width: 32.25px; height: 32.28px; border-radius: 8px;">
          <a href="https://www.linkedin.com/company/book-my-yacht/" class="px-2"><i class="fab fa-fw fa-linkedin-in" style="font-size: 13px;color: white;"></i></a>
        </li>

        <li class="list-inline-item bg-pinterest" style="width: 32.25px; height: 32.28px; border-radius: 8px;">
          <a href="https://pin.it/6DpYROV" class="px-2"><i class="fab fa-fw fa-pinterest" style="font-size: 13px;color: white;"></i></a>
        </li>
      </ul>

      <h5 class="text-white mb-2">Payment &amp; Security</h5>
      <ul class="list-inline" style="margin-top: 10px;">
        <li class="list-inline-item"> <a><img src="<?php echo site_url('yachtProject/'); ?>assets/images/element/visa.svg" width="50px" alt="Book My Yacht"></a></li>
        <li class="list-inline-item" style="margin-left: -12px;"> <a><img src="<?php echo site_url('yachtProject/'); ?>assets/images/element/mastercard.svg" width="50px" alt="Book My Yacht"></a></li>
      </ul>
    </div>

    <div class="copywrite">Copyrights©2024 BMY - Book My Yacht . All rights reserved.
    </div>
  </footer>

  <script>
    $(document).ready(function() {
      // Toggle the visibility of the "Quick Links" list when the heading is clicked
      $('#quick-links-heading').click(function() {
        if ($(window).width() <= 991) {
          $('#quick-links-list').toggle(); // Toggle the list visibility
          $('#quick-links-icon').toggleClass('fa-chevron-down fa-chevron-up'); // Toggle the icon
        }
      });

      // Toggle the visibility of the "Booking" list when the heading is clicked
      $('#booking-heading').click(function() {
        if ($(window).width() <= 991) {
          $('#booking-list').toggle(); // Toggle the list visibility
          $('#booking-icon').toggleClass('fa-chevron-down fa-chevron-up'); // Toggle the icon
        }
      });
    });
  </script>
</body>

</html>


<!-- this is custom footer only add below link for animation -->
<script src="<?php echo site_url('yachtProject/us/'); ?>js/jquery.js"></script>
<script src="<?php echo site_url('yachtProject/us/'); ?>js/popper.min.js"></script>
<script src="<?php echo site_url('yachtProject/us/'); ?>js/bootstrap.min.js"></script>
<script src="<?php echo site_url('yachtProject/us/'); ?>js/jquery-ui.js"></script>
<script src="<?php echo site_url('yachtProject/us/'); ?>js/jquery.fancybox.js"></script>
<script src="<?php echo site_url('yachtProject/us/'); ?>js/validate.js"></script>
<script src="<?php echo site_url('yachtProject/us/'); ?>js/appear.js"></script>
<script src="<?php echo site_url('yachtProject/us/'); ?>js/wow.js"></script>
<script src="<?php echo site_url('yachtProject/us/'); ?>js/scrollbar.js"></script>
<script src="<?php echo site_url('yachtProject/us/'); ?>js/element-in-view.js"></script>
<script src="<?php echo site_url('yachtProject/us/'); ?>js/custom-script.js"></script>