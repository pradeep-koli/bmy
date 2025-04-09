
<!DOCTYPE html>
<html lang="en" >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Manager Register</title>
    <link rel="canonical" href="sign-in.html"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo site_url('yachtProject/'); ?>assets/fav/favicon.ico">

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->



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
                    <img class="d-none d-lg-block mx-auto w-300px w-lg-75 w-xl-500px mb-10 mb-lg-20" src="<?= base_url('Login Page/') ?>assets/media/misc/registerPhoto.png" alt=""/>                 
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

                        <!--begin::Form-->
                        <form method="post" action="<?= base_url('register/home')?>" class="form w-100">
                            <?= csrf_field() ?>

                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <!--begin::Title-->
                                <h1 class="text-gray-900 fw-bolder mb-3">
                                    Sign Up
                                </h1>
                                <!--end::Title-->

                                <!--begin::Subtitle-->
                                <div class="text-gray-500 fw-semibold fs-6">
                                    <!-- Your Social Campaigns -->
                                    Register to your partner account
                                </div>
                                <!--end::Subtitle--->
                            </div>
                            <!--begin::Heading-->

                            <!--begin::Login options-->
                            <div class="row g-3 mb-9">
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <!--begin::Google link--->
                                    <!-- <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo" src="https://preview.keenthemes.com/keen/demo1/assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3"/>   
                                        Sign in with Google
                                    </a> -->
                                    <!--end::Google link--->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <!--begin::Google link--->
                                    <!-- <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo" src="https://preview.keenthemes.com/keen/demo1/assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-15px me-3"/>
                                        <img alt="Logo" src="https://preview.keenthemes.com/keen/demo1/assets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show h-15px me-3"/>     
                                        Sign in with Apple
                                    </a> -->
                                    <!--end::Google link--->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Login options-->

                            <!--begin::Separator-->
                            <div class="separator separator-content my-3">
                                <!-- <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span> -->
                            </div>
                            <!--end::Separator-->

                            <!--begin::Input group--->
                            <input type="hidden" name="role" value="manager">
                            <input type="hidden" name="country" value="USA">
                            <!--end::Input group--->

                            <!--begin::Input group--->
                            <div class="fv-row mb-8">
                                <!--begin::Email-->
                                <input type="text" placeholder="Username" name="name" autocomplete="off" class="form-control bg-transparent"/> 
                                <!--end::Email-->
                            </div>
                            <!--end::Input group--->

                            <!--begin::Input group--->
                            <div class="fv-row mb-8">
                                <!--begin::Email-->
                                <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent"/> 
                                <!--end::Email-->
                            </div>
                            <!--end::Input group--->

                            <!--begin::Input group--->
                            <div class="fv-row mb-8">    
                                <!--begin::Password-->
                                <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent"/>
                                <!--end::Password-->
                            </div>
                            <!--end::Input group--->

                            <!--begin::Input group--->
                            <div class="fv-row mb-8">    
                                <!--begin::Phone-->
                                <input type="Phone" placeholder="Phone" name="phone" autocomplete="off" class="form-control bg-transparent"/>
                                <!--end::Phone-->
                            </div>
                            <!--end::Input group--->

                            <!--begin::Input group--->
                            <div class="fv-row mb-8">    
                                <!--begin::Phone-->
                                <select class="form-select" id="genderSelect" name="gender">
                                  <option value="">Select gender</option>
                                  <option value="male" placeholder="male">Male</option>
                                  <option value="female" placeholder="female">Female</option>
                                  <option value="other" placeholder="other">Other</option>
                              </select>
                              <!--end::Phone-->
                          </div>
                          <!--end::Input group--->

                          <!--begin::Input group--->
                          <div class="fv-row mb-8">    
                            <!--begin::Address-->
                            <input type="Address" placeholder="Address" name="address" autocomplete="off" class="form-control bg-transparent"/>
                            <!--end::Address-->
                        </div>
                        <!--end::Input group--->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                            <div></div>

                            <!--begin::Link-->
                                <!-- <a href="reset-password.html" class="link-primary">
                                    Forgot Password ?
                                </a> -->
                                <!--end::Link-->
                            </div>
                            <!--end::Wrapper-->    

                            <!--begin::Submit button-->
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">

                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">
                                    Sign Up</span>
                                    <!--end::Indicator label-->

                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">
                                        Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                    <!--end::Indicator progress-->        </button>
                                </div>
                                <!--end::Submit button-->

                                <!--begin::Sign up-->
                                <div class="text-gray-500 text-center fw-semibold fs-6">
                                    Not a Member yet?

                                    <a href="<?= base_url('admin') ?>" class="link-primary">
                                        Sign In
                                    </a>
                                </div>
                                <!--end::Sign up-->
                            </form>
                            <!--end::Form--> 
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Form-->       

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