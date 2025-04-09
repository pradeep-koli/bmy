<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Booking Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo site_url('public/'); ?>assets/images/favicon.ico">

    <link href="<?php echo site_url('public/'); ?>assets/libs/%40fullcalendar/core/main.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo site_url('public/'); ?>assets/libs/%40fullcalendar/daygrid/main.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo site_url('public/'); ?>assets/libs/%40fullcalendar/bootstrap/main.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo site_url('public/'); ?>assets/libs/%40fullcalendar/timegrid/main.min.css" rel="stylesheet"
        type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="<?php echo site_url('public/'); ?>assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?php echo site_url('public/'); ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo site_url('public/'); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo site_url('public/'); ?>assets/css/app.min.css" id="app-style" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== Header Start ========== -->
        <?php include('header.php') ?>
        <!-- ========== Header End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include('sidebar.php') ?>
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
                                <h4 class="mb-sm-0 font-size-18">Yacht Booking Detail</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Yacht Booking Detail</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="product-detai-imgs">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-3 col-4">
                                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                            <a class="nav-link active" id="product-1-tab" data-bs-toggle="pill" href="#product-1" role="tab" aria-controls="product-1" aria-selected="true">
                                                                <img src="uploads\thumbnail\<?= $YachtModel['thumb-img'] ?>" alt="" class="avatar-lg">
                                                            </a>
                                                            <a class="nav-link" id="product-2-tab" data-bs-toggle="pill" href="#product-2" role="tab" aria-controls="product-2" aria-selected="false">
                                                            </a>
                                                            <a class="nav-link" id="product-3-tab" data-bs-toggle="pill" href="#product-3" role="tab" aria-controls="product-3" aria-selected="false">
                                                                <img src="uploads/mainContent/<?= $img2; ?>" alt="" class="avatar-lg">
                                                            </a>
                                                            <a class="nav-link" id="product-4-tab" data-bs-toggle="pill" href="#product-4" role="tab" aria-controls="product-4" aria-selected="false">
                                                                <img src="uploads/mainContent/<?= $img3; ?>" alt="" class="avatar-lg">
                                                            </a>
                                                            <a class="nav-link" id="product-5-tab" data-bs-toggle="pill" href="#product-5" role="tab" aria-controls="product-5" aria-selected="false">
                                                                <img src="uploads/mainContent/<?= $img4; ?>" alt="" class="avatar-lg">
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                                                        <div class="tab-content" id="v-pills-tabContent">
                                                            <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                                                <div>
                                                                    <img src="uploads\thumbnail\<?= $YachtModel['thumb-img'] ?>" alt="" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="product-2" role="tabpanel" aria-labelledby="product-2-tab">
                                                                <div>
                                                                    <img src="uploads/mainContent/<?= $img2; ?>" alt="" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="product-3" role="tabpanel" aria-labelledby="product-3-tab">
                                                                <div>
                                                                    <img src="uploads/mainContent/<?= $img2; ?>" alt="" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="product-4" role="tabpanel" aria-labelledby="product-4-tab">
                                                                <div>
                                                                    <img src="uploads/mainContent/<?= $img3; ?>" alt="" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="product-5" role="tabpanel" aria-labelledby="product-5-tab">
                                                                <div>
                                                                    <img src="uploads/mainContent/<?= $img4; ?>" alt="" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="mt-4 mt-xl-3">
                                                <a href="javascript: void(0);" class="text-primary"><?= $YachtModel['yacht_type'] ?></a>
                                                <h4 class="mt-1 mb-3"><?= $YachtModel['hname'] ?></h4>

                                                <h5 class="mb-4">Price : <b>$<?= $YachtModel['price'] ?></b></h5>
                                                <div class="row mb-3">
                                                    <div class="col-sm-6" <?= empty($YachtService) ? 'style="display:none;"' : ''; ?>>
                                                        <h5 class="font-size-15">Facilities :</h5>
                                                        <!-- List -->
                                                        <ul class="list-group list-group-borderless mt-2 mb-0">
                                                            <?php foreach ($YachtService as $abc) : ?>
                                                                <p>
                                                                    <i class="fa fa-check-circle font-size-16 align-middle text-primary me-1"></i><?= $abc['service_name']; ?>
                                                                </p>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="product-color">
                                                    <h5 class="font-size-15">Yacht Images :</h5>
                                                    <?php foreach ($FilesModel as $img) : ?>
                                                        <a href="javascript: void(0);">
                                                            <div class="product-color-item border rounded">
                                                                <img src="uploads\mainContent\<?= $img['images'] ?>" alt="" class="avatar-lg">
                                                            </div>
                                                        </a>
                                                    <?php endforeach; ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="mt-5">
                                        <h5 class="mb-3">Yacht Details:</h5>
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-bordered">
                                                <thead>
                                                    <!-- <th>About</th> -->
                                                    <th>ID</th>
                                                    <th>Username</th>
                                                    <th>Status</th>
                                                    <th>Yacht Name</th>
                                                    <th>Yacht Type</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Location</th>
                                                    <th>Address</th>
                                                    <th>Model No</th>
                                                    <th>Yacht Length</th>
                                                    <th>Size</th>
                                                    <th>Engine</th>
                                                    <th>Maximum Speed</th>
                                                    <th>Builder Name</th>
                                                    <th>Year</th>
                                                    <th>Guest</th>
                                                    <th>Cabin</th>
                                                    <th>Price</th>
                                                    <th>Other</th>
                                                    <th>Days</th>
                                                    <th>Thumbnail Image</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <!-- <td><?= $YachtModel['about'] ?></td> -->
                                                        <td><?= $YachtModel['id'] ?></td>
                                                        <td><?= $YachtModel['username'] ?></td>
                                                        <td
                                                            style="color: <?= ($YachtModel['status'] == 'Approve') ? 'green' : (($YachtModel['status'] == 'Denied') ? 'red' : (($YachtModel['status'] == 'Pending') ? 'orange' : '')) ?>">
                                                            <?= $YachtModel['status'] ?>
                                                        </td>
                                                        <td><?= $YachtModel['hname'] ?></td>
                                                        <td><?= $YachtModel['yacht_type'] ?></td>
                                                        <td><?= $YachtModel['start_time'] ?></td>
                                                        <td><?= $YachtModel['end_time'] ?></td>
                                                        <td><?= $YachtModel['location'] ?></td>
                                                        <td><?= $YachtModel['address'] ?></td>
                                                        <td><?= $YachtModel['build_name'] ?></td>
                                                        <td><?= $YachtModel['yacht_length'] ?>ft</td>
                                                        <td><?= $YachtModel['size'] ?></td>
                                                        <td><?= $YachtModel['engine'] ?></td>
                                                        <td><?= $YachtModel['max_speed'] ?>knots</td>
                                                        <td><?= $YachtModel['builder'] ?></td>
                                                        <td><?= $YachtModel['year_of_build'] ?></td>
                                                        <td><?= $YachtModel['guest'] ?></td>
                                                        <td><?= $YachtModel['cabin'] ?></td>
                                                        <td><?= $YachtModel['price'] ?></td>
                                                        <td><?= $YachtModel['other'] ?></td>
                                                        <td><?= $YachtModel['days'] ?></td>
                                                        <td><img src="uploads\thumbnail\<?= $YachtModel['thumb-img'] ?>" alt="" width="100px" height="100px" class="avatar-lg"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <h5 class="mb-3">User Details:</h5>
                                        <div class="container">
                                            <?php $serialNumber = 1; ?>
                                            <?php foreach ($YachtBookingModel as $record) : ?>
                                                <form action="<?= base_url('/users/update/' . $record['yacht_id']) ?>" method="post">
                                                    <?= csrf_field(); ?>

                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <!-- Yacht ID -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Yacht ID</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" value="<?= $record['yacht_id'] ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <!-- Username -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Username</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" value="<?= $record['username'] ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <!-- Status -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Status</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                        value="<?= $record['status'] ?>"
                                                                        style="color: <?= ($record['status'] == 'Approve') ? 'green' : (($record['status'] == 'Denied') ? 'red' : (($record['status'] == 'Pending') ? 'orange' : '')) ?>"
                                                                        readonly>
                                                                </div>
                                                            </div>

                                                            <!-- Yacht Type -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Yacht Type</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" value="<?= $record['yacht_type'] ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <!-- Yacht Name -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Yacht Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" value="<?= $record['hname'] ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <!-- Customer Name -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Customer Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" value="<?= $record['customer_name'] ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <!-- Passenger Count -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Passenger Count</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" value="<?= $record['ccount'] ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <!-- Phone -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Phone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" value="<?= $record['phone'] ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <!-- Email -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Email</label>
                                                                <div class="col-sm-10">
                                                                    <input type="email" class="form-control" value="<?= $record['email'] ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <!-- Address -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Address</label>
                                                                <div class="col-sm-10">
                                                                    <textarea class="form-control" rows="3" readonly><?= $record['address'] ?></textarea>
                                                                </div>
                                                            </div>

                                                            <!-- Booking Date -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Departure Date</label>
                                                                <div class="col-sm-10">
                                                                    <input type="date" class="form-control" value="<?= $record['booking_date'] ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <!-- Booking Time -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Departure Time</label>
                                                                <div class="col-sm-10">
                                                                    <input type="time" class="form-control" value="<?= $record['booking_time'] ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <!-- Plan Description -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Plan Description</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" value="<?= $record['plan_description'] ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <!-- Price -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Price</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" value="$<?= $record['price'] ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <!-- Additional Date -->
                                                            <div class="row mb-3">
                                                                <label class="col-sm-2 col-form-label">Booking Date</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" value="<?= $record['adate'] ?>" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            <?php endforeach; ?>
                                        </div>

                                    </div>
                                    <!-- end Specifications -->

                                </div>
                            </div>
                            <!-- end card -->
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

    <!-- Required datatable js -->
    <script src="<?php echo site_url('public/'); ?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script
        src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script
        src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script
        src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo site_url('public/'); ?>assets/libs/jszip/jszip.min.js"></script>
    <script src="<?php echo site_url('public/'); ?>assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo site_url('public/'); ?>assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script
        src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script
        src="<?php echo site_url('public/'); ?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="<?php echo site_url('public/'); ?>assets/js/pages/datatables.init.js"></script>

    <script src="<?php echo site_url('public/'); ?>assets/js/app.js"></script>
</body>

</html>