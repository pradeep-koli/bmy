
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: KeenProduct Version: 3.0.7
Purchase: https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en" >
<!--begin::Head-->

<!-- Mirrored from preview.keenthemes.com/keen/demo1/authentication/layouts/corporate/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jul 2024 17:32:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Reset Password</title>
    <meta charset="utf-8"/>
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free."/>
    <meta name="keywords" content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/keen"/>
    <meta property="og:site_name" content="Keen by Keenthemes" />
    <link rel="canonical" href="sign-in.html"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo site_url('yachtProject/'); ?>assets/fav/favicon.ico">

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">     <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="<?= base_url('Login Page/') ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('Login Page/') ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Google tag-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-37564768-1');
  </script>
  <!--end::Google tag-->        
  <script>
            // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
    if (window.top != window.self) {
        window.top.location.replace(window.self.location.href);
    }
</script>

<style>
    .error {
        color: red;
    }
</style>

</head>
<!--end::Head-->

<!--begin::Body-->
<body  id="kt_body"  class="app-blank app-blank" >
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if ( document.documentElement ) {
            if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if ( localStorage.getItem("data-bs-theme") !== null ) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }           
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }            
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover  bgi-position-center" style="background-image: url(<?= base_url('Login Page/') ?>assets/media/misc/auth-bg.png)">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center p-6 p-lg-10 w-100">          
                    <!--begin::Logo-->
                    <a href="<?= base_url('/') ?>" class="mb-0 mb-lg-20" style="text-align: center; ">
                        <!-- <img alt="Logo" src="https://preview.keenthemes.com/keen/demo1/assets/media/logos/default-white.svg" class="h-40px h-lg-50px"/> -->
                        <img alt="Logo" src="<?php echo site_url('yachtProject/'); ?>assets/images/bmy-logo.png" alt="logo" class="h-40px h-lg-50px mb-3"/ style="margin-left: 30px;">  
                        <h2 style="font-family: 'Poppins', sans-serif;font-size: 30px;color:white;">Book My Yacht</h2>  
                    </a>
                    <!--end::Logo-->

                    <!--begin::Image-->                
                    <!-- <img class="d-none d-lg-block mx-auto w-300px w-lg-75 w-xl-500px mb-10 mb-lg-20" src="<?= base_url('Login Page/') ?>assets/media/misc/auth-screens.png" alt=""/> -->

                    <img class="d-none d-lg-block mx-auto w-300px w-lg-75 w-xl-500px mb-10 mb-lg-20" src="<?= base_url('Login Page/') ?>assets/media/misc/loginPhoto.png" alt=""/>           
                    <!--end::Image-->

                    <!--begin::Title-->
                    <!-- <h1 class="d-none d-lg-block text-white fs-2qx fw-bold text-center mb-7"> 
                        Fast, Efficient and Productive
                    </h1> -->  
                    <!--end::Title-->

                    <!--begin::Text-->
                    <!-- <div class="d-none d-lg-block text-white fs-base text-center">
                        In this kind of post, <a href="#" class="opacity-75-hover text-warning fw-semibold me-1">the blogger</a> 

                        introduces a person they’ve interviewed <br/> and provides some background information about 

                        <a href="#" class="opacity-75-hover text-warning fw-semibold me-1">the interviewee</a> 
                        and their <br/> work following this is a transcript of the interview.  
                    </div> -->
                    <!--end::Text-->
                </div>
                <!--end::Content-->
            </div>
            <!--begin::Aside-->

            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
                <!--begin::Form-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10">

                        <form method="post" action="<?= base_url('reset-password') ?>" onsubmit="return validatePassword()" class="form w-100">
                            <?= csrf_field() ?>

                            <div class="text-center mb-11">
                                <h1 class="text-gray-900 fw-bolder mb-3">
                                    Enter New Password
                                </h1>
                                <div class="text-gray-500 fw-semibold fs-6">
                                    Your new password will be updated once you complete this step.
                                </div>
                            </div>
                            <div class="row g-3 mb-9">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                            <div class="separator separator-content my-3">
                            </div>
                            <div class="fv-row mb-3">    
                                <input type="password" placeholder="Password" id="password" name="password" autocomplete="off" class="form-control bg-transparent"/>
                            </div>
                            <div class="fv-row mb-3">    
                                <input type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password" autocomplete="off" class="form-control bg-transparent"/>
                            </div>
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                    <span class="indicator-label">
                                    Submit</span>
                                    <span class="indicator-progress">
                                        Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                        <!-- <div class="text-gray-500 text-center fw-semibold fs-6">
                            Not a Member yet?
                            <a href="<?= base_url('manager-register') ?>" class="link-primary">
                                Sign Up
                            </a>
                        </div> -->
                    </form>
                </div>
                <!-- Error message container -->
                <div id="error_message" class="error"></div>
                <!--end::Wrapper-->
            </div>
            <!--end::Form-->
            <script>
                function validatePassword() {
                    var password = document.getElementById("password").value;
                    var confirm_password = document.getElementById("confirm_password").value;

                    if (password != confirm_password) {
                        document.getElementById("error_message").innerHTML = "Passwords do not match";
                        return false;
                    } else {
                        document.getElementById("error_message").innerHTML = "";
                        return true;
                    }
                }
            </script>   

            <!--begin::Footer-->
            <div class="d-flex flex-center flex-wrap px-5">
                <!--begin::Links-->
                <div class="d-flex fw-semibold text-primary fs-base">
                    <a href="<?= base_url('terms') ?>" class="px-5" target="_blank">Terms & Condition</a>

                    <!-- <a href="https://devs.keenthemes.com/" class="px-5" target="_blank">Plans</a> -->

                    <a href="<?= base_url('privacy'); ?>" class="px-5" target="_blank">Privacy Policy</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-in-->

</div>
<!--end::Root-->

<!--begin::Javascript-->
<script>
var hostUrl = "https://preview.keenthemes.com/keen/demo1/assets/";        </script>

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="<?= base_url('Login Page/') ?>assets/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url('Login Page/') ?>assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->


<!--begin::Custom Javascript(used for this page only)-->
<script src="<?= base_url('Login Page/') ?>assets/js/custom/authentication/sign-in/general.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/keen/demo1/authentication/layouts/corporate/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jul 2024 17:32:07 GMT -->
</html>