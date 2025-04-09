<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo site_url('public/'); ?>assets/images/favicon.ico">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <!-- to anoder link added started -->
    <!-- preloader css -->

    <!-- Bootstrap Css -->
    <link href="<?php echo site_url('public/'); ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo site_url('public/'); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo site_url('public/'); ?>assets/css/app.min.css" id="app-style" rel="stylesheet"
        type="text/css" />

    <!-- Sidebar Dropdown -->
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Feather Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css" rel="stylesheet">
    <!-- Include Feather Icons library -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <style type="text/css">
        .side-menu {
            padding: 10px 0px;
            color: #545a6d;
        }

        .nav-link {
            color: #545a6d;
        }

        .nav-link a:hover {
            color: #1c84ee;
        }

        .nav.flex-column li {
            list-style-type: none;
        }

        .link {
            color: #545a6d;
        }

        .link:hover {
            color: #1c84ee;
        }

        .nav-item {
            margin-top: 20px;
            color: grey !important;
        }
    </style>
    <!-- Modal -->
    <div class="modal fade" id="supportModal" tabindex="-1" aria-labelledby="supportModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contact Support</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    If you need any assistance or encounter an issue with your account, please don't hesitate to contact us here:
                    <br><br>
                    <b>Email:</b> shirin@bookmyyacht.us / team@bookmyyacht.us
                    <br>
                    <b>WhatsApp:</b> <a href="https://wa.me/17862977769">+1 (786) 297-7769</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</head>
<!-- <body style="background-color: red;"> -->

<body style="box-shadow: 20px 20px 50px #edeef1;">
    <!-- header code start -->
    <header style="background-color: #1c84ee; color: white; box-shadow: 20px 20px 50px #edeef1;" id="changeBg">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="d-flex">
                    <div class="">
                        <a href="<?= base_url('calendar'); ?>" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.svg" alt="" height="30">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-sm.svg" alt="" height="24"> <span
                                    class="logo-txt">Book My Yacht</span>
                            </span>
                        </a>
                    </div>
                    <!--<button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">-->
                    <!--    <i class="fa fa-fw fa-bars" style="color: white; margin-left: 150px; margin-top: 10px;"></i>-->
                    <!--</button>-->
                </div>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                    </ul>
                    <!-- </div> -->
                    <!--<div class="col-xl-3 col-lg-4 col-sm-6">-->
                    <!--    bx bx-support-->
                    <!--</div>-->

                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item" data-bs-toggle="modal" data-bs-target="#supportModal">
                            <i class="bx bx-support" style="color: white;"></i>

                        </button>
                    </div>
                    <!--<div class="dropdown d-none d-sm-inline-block">-->
                    <!--    <button type="button" class="btn header-item" id="mode-setting-btn">-->
                    <!--        <i data-feather="moon" class="icon-lg layout-mode-dark" style="color: white;"></i>-->
                    <!--        <i data-feather="sun" class="icon-lg layout-mode-light" style="color: white;"></i>-->
                    <!--    </button>-->
                    <!--</div>-->
                    <script type="text/javascript">
                        document.addEventListener("DOMContentLoaded", function() {
                            var modeBtn = document.getElementById("mode-setting-btn");
                            modeBtn.addEventListener("click", function() {
                                var moonIcon = document.querySelector('.layout-mode-dark');
                                var sunIcon = document.querySelector('.layout-mode-light');
                                var changeBack = document.getElementById('changeBg');

                                if (moonIcon.style.display !== 'none') {
                                    moonIcon.style.display = 'none';
                                    sunIcon.style.display = 'inline';
                                    changeBack.style.backgroundColor = '#1c84ee';
                                } else {
                                    moonIcon.style.display = 'inline';
                                    sunIcon.style.display = 'none';

                                    changeBack.style.backgroundColor = 'black';
                                    changeBack.style.color = 'white';
                                }
                            });
                        });
                    </script>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="background-color: #2589ef; border: none; color: white;">

                            <div class="dropdown d-none d-sm-inline-block">
                                <i class="rounded-circle header-profile-user" data-feather="user" style="    background-color: #ffffff36 ;"></i><span></span>
                            </div>
                            <span class="d-none d-xl-inline-block ms-1 fw-medium"><?= session('name') ?></span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="<?php echo base_url('logout'); ?>"><i
                                    class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <!-- header code end -->

    <!-- sidebar start -->

    <div class="container-fluid">
        <div class="row">

            <!-- sidebar start -->

            <div class="col-xl-2 col-lg-2 test" style="box-shadow: 20px 20px 50px #edeef1;">
                <div class="side-menu">
                    <nav>
                        <ul class="nav flex-column">
                            <!-- ========== Admin Section Start ========== -->

                            <ul class="nav flex-column">
                                <?php if (session()->get('role') == 'admin'): ?>

                                    <li class="nav-item">
                                        <a href="javascript: void(0);" class="has-arrow" id="usersDropdownLink2"
                                            style="color: #545a6d;">
                                            <i data-feather="user-check"></i>
                                            <span data-key="t-admin">Booking</span>
                                            <i class="fas fa-angle-down" style="margin-left: 100px;"></i>
                                        </a>
                                        <ul class="sub-menu collapse" id="usersDropdown2">
                                            <li><a href="<?= base_url('calendar'); ?>" class="nav-link"
                                                    data-key="t-data-tables">Your Yacht Calendar</a>
                                            </li>
                                            <li><a href="<?= base_url('admin-yacht-booking'); ?>" class="nav-link"
                                                    data-key="t-data-tables">Yacht Booking</a>
                                            </li>
                                            <li><a href="<?= base_url('booking-details'); ?>" class="nav-link"
                                                    data-key="t-data-tables">Booking Details</a>
                                            </li>
                                            <li><a href="<?= base_url('user-details'); ?>" class="nav-link"
                                                    data-key="t-data-tables">User list</a>
                                            </li>
                                            <li><a href="<?= base_url('yachtNA'); ?>" class="nav-link"
                                                    data-key="t-data-tables">Yacht Availability</a>
                                            </li>
                                            <li><a href="<?= base_url('enquiry-form'); ?>" class="nav-link"
                                                    data-key="t-data-tables">Enquiry Form</a>
                                            </li>
                                            <li><a href="<?= base_url('contact-form'); ?>" class="nav-link"
                                                    data-key="t-data-tables">Contact Form</a>
                                            </li>
                                            <li><a href="<?= base_url('contact-subscribe'); ?>" class="nav-link"
                                                    data-key="t-data-tables">Contact Subscribe</a>
                                            </li>
                                            <li><a href="<?= base_url('about-subscribe'); ?>" class="nav-link"
                                                    data-key="t-data-tables">About Subscribe</a>
                                            </li>
                                        </ul>
                                    </li>
                            </ul>

                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript: void(0);" class="has-arrow link" id="usersDropdownLink1"
                                        style="color: #545a6d;">
                                        <i data-feather="anchor"></i>
                                        <span data-key="t-yachts">Yacht</span>
                                        <i class="fas fa-angle-down" style="margin-left: 120px;"></i>
                                    </a>

                                    <ul class="sub-menu collapse" id="usersDropdown1">
                                        <li><a href="<?= base_url('yacht-record'); ?>" class="nav-link"
                                                data-key="t-data-tables">Yacht List</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- manager payment -->
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript: void(0);" class="has-arrow link" id="usersDropdownLink3"
                                        style="color: #545a6d;">
                                        <i data-feather="credit-card"></i>
                                        <span data-key="t-yachts">Payment</span>
                                        <i class="fas fa-angle-down" style="margin-left: 95px;"></i>
                                    </a>

                                    <ul class="sub-menu collapse" id="usersDropdown3">
                                        <li><a href="<?= base_url('payment-detail'); ?>" class="nav-link"
                                                data-key="t-data-tables">Bank Account</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- manager payment end -->

                            <li class="nav-item">
                                <a href="<?= base_url(''); ?>" class="has-arrow link" id="usersDropdownLink"
                                    style="color: #545a6d;">
                                    <i data-feather="users"></i>
                                    <span data-key="t-users">Users</span>
                                    <i class="fas fa-angle-down" style="margin-left: 120px;"></i>
                                </a>

                                <ul class="sub-menu collapse" id="usersDropdown">
                                    <li><a href="<?= base_url('register'); ?>" class="nav-link"
                                            data-key="t-data-tables">User Register</a>
                                    </li>
                                    <li><a href="<?= base_url('admin'); ?>" class="nav-link"
                                            data-key="t-data-tables">User Login</a>
                                    </li>
                                    <li><a href="<?= base_url('user-records'); ?>" class="nav-link"
                                            data-key="t-data-tables">User List</a>
                                    </li>
                                    <li><a href="<?= base_url('user-history'); ?>" class="nav-link"
                                            data-key="t-data-tables">Logs History</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- ========== Admin Section End ========== -->

                            <!-- ========== Yacht Section Start ========== -->
                        <?php elseif (session()->get('role') == 'manager'): ?>

                            <li class="nav-item">
                                <a href="javascript: void(0);" class="has-arrow" id="usersDropdownLink2"
                                    style="color: #545a6d;">
                                    <i data-feather="user-check"></i>
                                    <span data-key="t-admin">Booking</span>
                                    <i class="fas fa-angle-down" style="margin-left: 80px;"></i>
                                </a>
                                <ul class="sub-menu collapse" id="usersDropdown2">
                                    <li><a href="<?= base_url('calendar'); ?>" class="nav-link"
                                            data-key="t-data-tables">Yacht Calendar</a>
                                    </li>
                                    <li><a href="<?= base_url('admin-yacht-booking'); ?>" class="nav-link"
                                            data-key="t-data-tables">Yacht Booking</a>
                                    </li>

                                    <li><a href="<?= base_url('yachtNA'); ?>" class="nav-link"
                                            data-key="t-data-tables">Yacht Availability</a>
                                    </li>
                                </ul>
                            </li>

                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript: void(0);" class="has-arrow link" id="usersDropdownLink1"
                                        style="color: #545a6d;">
                                        <i data-feather="anchor"></i>
                                        <span data-key="t-yachts">Yacht</span>
                                        <i class="fas fa-angle-down" style="margin-left: 100px;"></i>
                                    </a>

                                    <ul class="sub-menu collapse" id="usersDropdown1">
                                        <li><a href="<?= base_url('yacht-record'); ?>" class="nav-link"
                                                data-key="t-data-tables">Yacht List</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- manager payment -->
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript: void(0);" class="has-arrow link" id="usersDropdownLink3"
                                        style="color: #545a6d;">
                                        <i data-feather="credit-card"></i>
                                        <span data-key="t-yachts">Payment</span>
                                        <i class="fas fa-angle-down" style="margin-left: 75px;"></i>
                                    </a>

                                    <ul class="sub-menu collapse" id="usersDropdown3">
                                        <li><a href="<?= base_url('payment-detail'); ?>" class="nav-link"
                                                data-key="t-data-tables">Bank Account</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- manager payment end -->

                            <!-- ========== Yacht Section End ========== -->

                            <!-- ========== Users Section Start ========== -->
                        <?php elseif (session()->get('role') == 'user'): ?>

                            <li class="nav-item">
                                <a href="<?= base_url(''); ?>" class="has-arrow link" id="usersDropdownLink"
                                    style="color: #545a6d;">
                                    <i data-feather="users"></i>
                                    <span data-key="t-users">Users</span>
                                    <i class="fas fa-angle-down" style="margin-left: 120px;"></i>
                                </a>

                                <ul class="sub-menu collapse" id="usersDropdown">
                                    <li><a href="<?= base_url('admin-yacht-booking'); ?>" class="nav-link"
                                            data-key="t-data-tables">Yacht Booking</a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        </ul>
                        <!-- ========== Users Section End ========== -->

                        <!-- ========== DASHBOARD Section Start ========== -->

                        <!--   <li class="nav-item">
    <a href="<?= base_url('dashboard'); ?>" class="link">
        <i data-feather="home"></i>
        <span data-key="t-dashboard">Dashboard</span>
    </a>
</li> -->

                        <!-- ========== DASHBOARD Section End ========== -->

                    </nav>
                </div>

                <!-- Bootstrap JS and dependencies -->

                <!--   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
                <!-- Feather Icons JS -->
                <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
            </div>

            <script type="text/javascript">
                function replaceFeatherIcons() {
                    feather.replace();
                }

                function handleDropdownToggle() {
                    $(document).ready(function() {
                        $('#usersDropdownLink').click(function(e) {
                            e.preventDefault();
                            $('#usersDropdown').toggleClass('show');
                        });
                    });
                }

                replaceFeatherIcons();
                handleDropdownToggle();
                // box 1 end

                function replaceFeatherIcons1() {
                    feather.replace();
                }

                function handleDropdownToggle1() {
                    $(document).ready(function() {
                        $('#usersDropdownLink1').click(function(e) {
                            e.preventDefault();
                            $('#usersDropdown1').toggleClass('show');
                        });
                    });
                }

                replaceFeatherIcons1();
                handleDropdownToggle1();
                // box 2 end

                function replaceFeatherIcons2() {
                    feather.replace();
                }

                function handleDropdownToggle2() {
                    $(document).ready(function() {
                        $('#usersDropdownLink2').click(function(e) {
                            e.preventDefault();
                            $('#usersDropdown2').toggleClass('show');
                        });
                    });
                }

                replaceFeatherIcons2();
                handleDropdownToggle2();
                // box 3 end

                function replaceFeatherIcons3() {
                    feather.replace();
                }

                function handleDropdownToggle3() {
                    $(document).ready(function() {
                        $('#usersDropdownLink3').click(function(e) {
                            e.preventDefault();
                            $('#usersDropdown3').toggleClass('show');
                        });
                    });
                }

                replaceFeatherIcons3();
                handleDropdownToggle3();
                // box 4 end
            </script>

            <!-- sidebar code end -->
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-body" style="border: 2px solid #e9e9ec;">
                        <div id="calendar">
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $('#calendar').fullCalendar({
                        header: {
                            left: 'month, agendaWeek, agendaDay, list',
                            center: 'title',
                            right: 'prev, today, next'
                        },

                        events: [
                            <?php foreach ($events as $event): ?>
                                <?php if (session('role') == "manager" && $event['token'] == session('name')): ?> {
                                        title: '<?= $event['customer_name']; ?>',
                                        start: '<?= $event['booking_date']; ?>',
                                        <?php if ($event['status'] == 'Approve'): ?>
                                            color: 'green',
                                            textColor: 'white'
                                        <?php elseif ($event['status'] == 'Denied'): ?>
                                            color: 'red',
                                            textColor: 'white'
                                        <?php else: ?>
                                            color: 'orange',
                                            textColor: 'black'
                                        <?php endif; ?>
                                    },
                                <?php elseif (session('role') == "admin"): ?> {
                                        title: '<?= $event['customer_name']; ?>',
                                        start: '<?= $event['booking_date']; ?>',
                                        <?php if ($event['status'] == 'Approve'): ?>
                                            color: 'green',
                                            textColor: 'white'
                                        <?php elseif ($event['status'] == 'Denied'): ?>
                                            color: 'red',
                                            textColor: 'white'
                                        <?php else: ?>
                                            color: 'orange',
                                            textColor: 'black'
                                        <?php endif; ?>
                                    },
                                <?php elseif (session('role') == "user" && $event['username'] == session('name')): ?> {
                                        title: '<?= $event['customer_name']; ?>',
                                        start: '<?= $event['booking_date']; ?>',
                                        <?php if ($event['status'] == 'Approve'): ?>
                                            color: 'green',
                                            textColor: 'white'
                                        <?php elseif ($event['status'] == 'Denied'): ?>
                                            color: 'red',
                                            textColor: 'white'
                                        <?php else: ?>
                                            color: 'orange',
                                            textColor: 'black'
                                        <?php endif; ?>
                                    },
                                <?php endif; ?>
                            <?php endforeach; ?>


                            <?php foreach ($yachtNA as $holiday):

                                if (session('role') == "manager" && $holiday['username'] == session('name')) { ?> {
                                        title: '<?= $holiday['reason']; ?>',
                                        start: '<?= $holiday['date']; ?>',
                                        textColor: 'blue',
                                    },

                                <?php } elseif (session('role') == "admin") {
                                ?> {
                                        title: '<?= $holiday['reason']; ?>',
                                        start: '<?= $holiday['date']; ?>',
                                        textColor: 'blue',
                                    },

                            <?php
                                }
                            endforeach; ?>

                        ],

                    });
                });
            </script>


            <!-- form start -->
            <div class="col-xl-4 col-lg-4">
                <div class="card">
                    <div class="card-body" style="border: 2px solid #e9e9ec;">

                        <form method="post" id="myForm" onsubmit="return validateForm()" class="mb-3"
                            action="<?= base_url('submit-booking') ?>">
                            <?= csrf_field(); ?>

                            <div class="row mb-3">
                                <label class="form-label">Yacht Name</label>
                                <select class="form-select" name="yacht_type" required>
                                    <option value="">Select Yacht</option>
                                    <?php foreach ($options as $option):
                                        if ($option['username'] == session('name')) {
                                    ?>

                                            <option value="<?php echo $option['hname']; ?>"><?php echo $option['hname']; ?>
                                            </option>
                                        <?php } elseif ('admin' == session('role')) {

                                        ?>
                                            <option value="<?php echo $option['hname']; ?>"><?php echo $option['hname']; ?>
                                            </option>
                                    <?php
                                        }
                                    endforeach; ?>
                                </select>
                            </div>

                            <input type="hidden" name="username" value="<?= session('name') ?>">
                            <input type="hidden" name="yacht_owner" value="<?= session('name') ?>">


                            <div class="row mb-3">
                                <label class="form-label">Customer Name</label>
                                <input type="text" name="customer_name" class="form-control" id="userValid"
                                    oninput="userValidation()" required>
                                <span id="userError" class="text-danger"></span>
                            </div>

                            <div class="row mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>

                            <div class="row mb-3">
                                <label for="phone" class="form-label">Phone:</label>
                                <input type="tel" id="phone" name="phone" class="form-control"
                                    data-search-enabled="true" aria-label=".form-select-sm" oninput="checkNumber3(this)"
                                    required>
                                <span id="error3" class="text-danger"></span>
                            </div>

                            <div class="row mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" id="emailInput" name="email" class="form-control" required>
                                <span id="emailError" class="text-danger"></span>
                            </div>

                            <div class="row mb-3">
                                <label class="form-label">Reservation Date</label>
                                <input type="text" name="booking_date" class="form-control" id="datepicker"
                                    placeholder="Booking Date" required>
                            </div>

                            <script>
                                $(function() {
                                    var today = new Date();
                                    $('#datepicker').datepicker({
                                        minDate: today,
                                        maxDate: '+2y',
                                        dateFormat: 'yy-mm-dd'
                                    });
                                });
                            </script>

                            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
                            <!-- date script end -->

                            <div class="row mb-3">
                                <label class="form-label">Reservation Time</label>
                                <input type="time" name="booking_time" class="form-control" id="booking_time"
                                    placeholder="Regervation Time" required>
                            </div>

                            <div class="row mb-3">
                                <label class="form-label">Duration</label>
                                <select class="form-select" name="plan_description" required>
                                    <option value="">Select Hour</option>
                                    <option value="1 hour">1 hour</option>
                                    <option value="2 hour">2 hour</option>
                                    <option value="3 hour">3 hour</option>
                                    <option value="4 hour">4 hour</option>
                                    <option value="5 hour">5 hour</option>
                                    <option value="5 hour">6 hour</option>
                                    <option value="5 hour">7 hour</option>
                                    <option value="5 hour">8 hour</option>
                                    <option value="5 hour">9 hour</option>
                                    <option value="5 hour">10 hour</option>
                                </select>
                            </div>

                            <div class="row mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select" name="status" required>
                                    <option value="Pending">Select Status</option>
                                    <option value="Approve">Approve</option>
                                    <option value="Decline">Decline</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>

                            <div class="row mb-3">
                                <label class="form-label">No of Peaple</label>
                                <input type="text" name="ccount" class="form-control" id="name"
                                    placeholder="No Of Guests" id="numberInput" oninput="checkNumber1(this)" / required>
                                <span id="error1" class="text-danger"></span>
                            </div>

                            <input type="submit" name="submit" id="submitBtn" class="btn btn-primary" disabled>
                        </form>
                    </div>
                </div>
            </div>

            <style>
                #phone {
                    width: 100%;
                    margin-left: -10px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    box-sizing: border-box;
                    margin-bottom: 10px;
                }
            </style>

            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
            <script>
                var input = document.querySelector("#phone");
                var iti = window.intlTelInput(input, {
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
                });

                function validateForm() {
                    var phone = iti.getNumber();
                    var name = document.getElementById("userValid").value;
                    var isValid = true;

                    document.getElementById("phoneError").innerHTML = "";
                    document.getElementById("userError").innerHTML = "";

                    if (!phone) {
                        document.getElementById("phoneError").innerHTML = "Phone number is required";
                        isValid = false;
                    }

                    var userDigit = /\d/.test(name);
                    var userSpecialChar = /[@$!*]/.test(name);

                    if (userDigit || userSpecialChar || name.trim() === "") {
                        document.getElementById("userError").innerHTML = "Please enter a valid username";
                        isValid = false;
                    }
                }

                function userValidation() {
                    var name = document.getElementById('userValid').value;
                    var userError = document.getElementById('userError');

                    var userDigit = /\d/.test(name);
                    var userSpecialChar = /[@$!*]/.test(name);

                    if (userDigit || userSpecialChar || name.trim() === "") {
                        userError.textContent = "Please enter a valid username";
                        document.getElementById("myForm").querySelector('input[type="submit"]').disabled = true;
                    } else {
                        userError.textContent = "";
                        document.getElementById("myForm").querySelector('input[type="submit"]').disabled = false;
                    }
                }
            </script>

            <script type="text/javascript">
                function isValidEmail(email) {
                    if (email.indexOf('@') === -1 || email.indexOf('.') === -1) {
                        return false;
                    }
                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@.]+$/;
                    return emailRegex.test(email) && email.split('.').length === 2;
                }

                document.getElementById("emailInput").addEventListener("input", function() {
                    var email = this.value.trim();
                    var emailError = document.getElementById("emailError");
                    var submitButton = document.getElementById("submitButton");

                    if (email === "") {
                        emailError.textContent = "Email is required";
                        submitButton.disabled = true;
                    } else if (!isValidEmail(email)) {
                        emailError.textContent = "Please enter a valid email address";
                        submitButton.disabled = true;
                    } else {
                        emailError.textContent = "";
                        submitButton.disabled = false;
                    }
                });

                document.getElementById("myForm").addEventListener("submit", function(event) {
                    var email = document.getElementById("emailInput").value.trim();
                    if (!isValidEmail(email)) {
                        event.preventDefault();
                        document.getElementById("emailError").textContent = "Invalid email address";
                    }
                });
            </script>

            <script type="text/javascript">
                function checkNumber1(input) {
                    var isValid = /^\d+$/.test(input.value);
                    if (!isValid) {
                        document.getElementById("error1").innerText = "Please enter numbers only.";
                        input.value = '';
                        document.getElementById("submitBtn").disabled = true;
                    } else {
                        document.getElementById("error1").innerText = "";
                        document.getElementById("submitBtn").disabled = false;
                    }
                }

                function checkNumber3(input) {
                    var isValid = /^\d+$/.test(input.value);
                    if (!isValid) {
                        document.getElementById("error3").innerText = "Please enter numbers only.";
                        input.value = '';
                        document.getElementById("submitBtn").disabled = true;
                    } else if (input.value.length < 10 || input.value.length > 15) {
                        document.getElementById("error3").innerText = "Please enter a number between 10 and 15 digits.";
                        document.getElementById("submitBtn").disabled = true;
                    } else {
                        document.getElementById("error3").innerText = "";
                        document.getElementById("submitBtn").disabled = false;
                    }
                }
            </script>
            <!-- form end -->
        </div>
    </div>

    <!-- footer start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Bookmyyacht.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        <!-- Design & Develop by <a class="text-decoration-underline">Themesdesign</a> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
</body>

</html>