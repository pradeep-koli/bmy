<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Themesbrand" name="author" />
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
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-4 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a class="d-block auth-logo">
                                            <img src="<?php echo site_url('public/');?>assets/images/bmylogo.png" alt="" height="35px"> <span class="logo-txt">bookmyyacht</span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Register Account</h5>
                                            <p class="text-muted mt-2">Get your free bookmyyacht account now.</p>
                                        </div>
                                        <form method="post" action="<?= base_url('register/home')?>">
                                            <?= csrf_field() ?>

                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="text" name="name" class="form-control" id="input-name" placeholder="Enter User Name" required>
                                                <div class="invalid-feedback">
                                                    Please Enter Username
                                                </div> 
                                                <label for="input-name">Username</label>
                                                <div class="form-floating-icon">
                                                   <i data-feather="users"></i>
                                               </div>
                                           </div>

                                           <div class="form-floating form-floating-custom mb-4">
                                            <input type="email" name="email" class="form-control" id="input-email" placeholder="Enter Email" required>
                                            <div class="invalid-feedback">
                                                Please Enter Email
                                            </div> 
                                            <label for="input-email">Email</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                        </div>


                                        <div class="form-floating form-floating-custom mb-4">
                                            <input type="password" name="password" class="form-control" id="input-password" placeholder="Enter Password" required>
                                            <div class="invalid-feedback">
                                                Please Enter Password
                                            </div> 
                                            <label for="input-password">Password</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>

                                        <div class="form-floating form-floating-custom mb-4">
                                            <input type="text" name="phone" class="form-control" id="input-password" placeholder="Enter Phone" required>
                                            <div class="invalid-feedback">
                                                Phone
                                            </div> 
                                            <label for="input-Phone">Phone</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="phone"></i>
                                            </div>
                                        </div>

                                        <div class="form-floating form-floating-custom mb-4">
                                            <label for="genderSelect" class="form-label"></label>
                                            <select class="form-select" id="genderSelect" name="gender">
                                              <option value="">Select gender</option>
                                              <option value="male" placeholder="male">Male</option>
                                              <option value="female" placeholder="female">Female</option>
                                              <option value="other" placeholder="other">Other</option>
                                          </select>
                                          <div class="form-floating-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>

                                    <div class="form-floating form-floating-custom mb-4">
                                        <input type="text" name="address" class="form-control" id="input-password" placeholder="Enter Address" required>
                                        <div class="invalid-feedback">
                                            Please Enter Address
                                        </div> 
                                        <label for="input-password">Address</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="map-pin"></i>
                                        </div>
                                    </div>

                                    <div class="form-floating form-floating-custom mb-4">
                                        <label for="country" class="form-label"></label>
                                        <select class="form-select" id="country" name="country">
                                            <option value="India" placeholder="India">India</option>
                                            <option value="Pakistan" placeholder="Pakistan">Pakistan</option>
                                            <option value="America" placeholder="America">America</option>
                                            <option value="Japan" placeholder="Japan">Japan</option>
                                            <!-- Add more countries as needed -->
                                        </select>
                                        <div class="form-floating-icon">
                                            <i data-feather="globe"></i>
                                        </div>
                                    </div>

                                    <div class="form-floating form-floating-custom mb-4">
                                        <label for="roleSelect" class="form-label"></label>
                                        <select class="form-select" id="role" name="role">
                                          <option value="">Select Role</option>
                                          <option value="admin" placeholder="Admin">Admin</option>
                                          <option value="manager" placeholder="Manager">Manager</option>
                                          <option value="user" placeholder="Regular User">Regular User</option>
                                      </select>
                                      <div class="form-floating-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <p class="mb-0">By registering you agree to the bookmyyacht <a href="#" class="text-primary">Terms of Use</a></p>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="submit" value="Register" class="btn btn-primary w-100 waves-effect waves-light">
                                </div>
                            </form>

                            <div class="mt-5 text-center">
                                <p class="text-muted mb-0">Already have an account ? <a href="<?= base_url('admin')?>"
                                    class="text-primary fw-semibold"> Login </a> </p>
                                </div>
                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script>Copyrights©2024 BMY - Book My Yacht . <i class="mdi mdi-heart text-danger"></i>All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
            <!-- end col -->
            <div class="col-xxl-9 col-lg-8 col-md-7">
                <div class="auth-bg pt-md-5 p-4 d-flex">
                    <div class="bg-overlay"></div>
                    <ul class="bg-bubbles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <!-- end bubble effect -->

                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container fluid -->
</div>

<!-- JAVASCRIPT -->
<script src="<?php echo site_url('public/');?>assets/libs/jquery/jquery.min.js"></script>
<script src="<?php echo site_url('public/');?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo site_url('public/');?>assets/libs/metismenu/metisMenu.min.js"></script>
<script src="<?php echo site_url('public/');?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo site_url('public/');?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?php echo site_url('public/');?>assets/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="<?php echo site_url('public/');?>assets/libs/pace-js/pace.min.js"></script>

<!-- validation init -->
<script src="<?php echo site_url('public/');?>assets/js/pages/validation.init.js"></script>

<script src="<?php echo site_url('public/');?>assets/js/pages/feather-icon.init.js"></script>

</body>


<!-- Mirrored from themesdesign.in/dason-django/layouts/default/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 22:11:22 GMT -->
</html>