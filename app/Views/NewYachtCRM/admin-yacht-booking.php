<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Yacht Booking</title>
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
                                <h4 class="mb-sm-0 font-size-18">My Bookings</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">My Bookings</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Booking By</th>
                                                <th>Yacht</th>
                                                <th>Customer Name</th>
                                                <th>Passenger</th>
                                                <th>Booking Date</th>
                                                <th>Booking Time</th>
                                                <th>Status</th>
                                                <!-- <th>Action</th> -->
                                                <?php if (session('role') != 'user'): ?>
                                                    <th>Action</th>
                                                <?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $index = 1;
                                            foreach ($users as $user): ?>
                                                <?php if (session('role') == "manager" && $user['username'] == session('name')): ?>
                                                    <tr>
                                                        <td><?= $index; ?></td>
                                                        <td>
                                                            <?php
                                                            echo ($user['username'] == session('name')) ? "Personal" : "BMY";
                                                            ?>
                                                        </td>
                                                        <td><?= $user['yacht_type']; ?></td>
                                                        <td><?= $user['customer_name']; ?></td>
                                                        <td><?= $user['ccount']; ?></td>
                                                        <td><?= $user['booking_date']; ?></td>
                                                        <td><?= $user['booking_time']; ?></td>
                                                        <td
                                                            style="color: <?= ($user['status'] == 'Approve') ? 'green' : (($user['status'] == 'Denied') ? 'red' : (($user['status'] == 'Pending') ? 'orange' : '')) ?>">
                                                            <?= $user['status'] ?>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <?php if ($user['status'] == 'Approve' || $user['status'] == 'Denied'): ?>
                                                                    <form action="<?= base_url('/users/delete/' . $user['id']) ?>" method="post" id="deleteForm_1<?= $user['id'] ?>">
                                                                        <?= csrf_field(); ?>
                                                                        <button type="button" class="btn btn-primary ms-2" onclick="confirmDelete1(<?= $user['id'] ?>)">Delete</button>
                                                                    </form>
                                                                <?php else: ?>
                                                                    <form action="<?= base_url('/users/approve/' . $user['id']) ?>" method="post">
                                                                        <?= csrf_field(); ?>
                                                                        <button type="submit"
                                                                            class="btn btn-success">Approve</button>
                                                                    </form>
                                                                    <form action="<?= base_url('/users/deny/' . $user['id']) ?>" method="post">
                                                                        <?= csrf_field(); ?>
                                                                        <button type="submit" class="btn btn-danger ms-2">Denied</button>
                                                                    </form>
                                                                    <?php
                                                                    if ($term == "Personal") {
                                                                    ?>
                                                                        <form action="<?= base_url('/users/delete/' . $user['id']) ?>" method="post" id="deleteForm_1<?= $user['id'] ?>">
                                                                            <?= csrf_field(); ?>
                                                                            <button type="button" class="btn btn-primary ms-2" onclick="confirmDelete1(<?= $user['id'] ?>)">Delete</button>
                                                                        </form>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                <?php
                                                                endif; ?>
                                                            </div>
                                                        </td>

                                                        <!-- Modal for confirmation -->
                                                        <div class="modal fade" id="deleteModal1" tabindex="-1" aria-labelledby="deleteModalLabel1" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="deleteModalLabel1">Confirm Deletion</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure you want to delete this user?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-primary" id="confirmDeleteBtn1">OK</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <script>
                                                            function confirmDelete1(userId) {
                                                                $('#deleteModal1').modal('show');
                                                                $('#confirmDeleteBtn1').off('click').on('click', function() {
                                                                    $('#deleteForm_1' + userId).submit();
                                                                    $('#deleteModal1').modal('hide');
                                                                });
                                                            }
                                                        </script>
                                                    </tr>

                                                <?php
                                                    $index++;
                                                elseif (session('role') == "admin"): ?>
                                                    <tr>
                                                        <td><?= $index; ?></td>
                                                        <td>@<?= $user['username']; ?></td>
                                                        <td><?= $user['yacht_type']; ?></td>
                                                        <td><?= $user['customer_name']; ?></td>
                                                        <td><?= $user['ccount']; ?></td>
                                                        <td><?= $user['booking_date']; ?></td>
                                                        <td><?= $user['booking_time']; ?></td>
                                                        <td style="color: <?= ($user['status'] == 'Approve') ? 'green' : (($user['status'] == 'Denied') ? 'red' : (($user['status'] == 'Pending') ? 'orange' : '')) ?>">
                                                            <?= $user['status'] ?>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <?php if ($user['status'] == 'approve' || $user['status'] == 'denied'): ?>
                                                                    <form action="<?= base_url('/users/delete/' . $user['id']) ?>" method="post" id="deleteForm_<?= $user['id'] ?>">
                                                                        <?= csrf_field(); ?>
                                                                        <button type="button" class="btn btn-primary ms-2" onclick="confirmDelete(<?= $user['id'] ?>)">Delete</button>
                                                                    </form>
                                                                <?php else: ?>
                                                                    <form action="<?= base_url('/users/approve/' . $user['id']) ?>" method="post">
                                                                        <?= csrf_field(); ?>
                                                                        <button type="submit" class="btn btn-success">Approve</button>
                                                                    </form>
                                                                    <form action="<?= base_url('/users/deny/' . $user['id']) ?>" method="post">
                                                                        <?= csrf_field(); ?>
                                                                        <button type="submit" class="btn btn-danger ms-2">Denied</button>
                                                                    </form>
                                                                    <form action="<?= base_url('/users/delete/' . $user['id']) ?>" method="post" id="deleteForm_<?= $user['id'] ?>">
                                                                        <?= csrf_field(); ?>
                                                                        <button type="button" class="btn btn-primary ms-2" onclick="confirmDelete(<?= $user['id'] ?>)">Delete</button>
                                                                    </form>
                                                                    <a href="yacht-booking-details<?= $user['yacht_id'] ?>" class="btn btn-info ms-2">ViewDetails</a>
                                                                <?php
                                                                    $index++;
                                                                endif; ?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal for confirmation -->
                                                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this user?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="button" class="btn btn-primary" id="confirmDeleteBtn">OK</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <script>
                                                        function confirmDelete(userId) {
                                                            $('#deleteModal').modal('show');
                                                            $('#confirmDeleteBtn').off('click').on('click', function() {
                                                                $('#deleteForm_' + userId).submit();
                                                                $('#deleteModal').modal('hide');
                                                            });
                                                        }
                                                    </script>
                                                <?php elseif (session('role') == "user" && $user['username'] == session('name')): ?>
                                                    <tr>
                                                        <td><?= $index; ?></td>
                                                        <td><?= $user['yacht_type']; ?></td>
                                                        <td><?= $user['customer_name']; ?></td>
                                                        <td><?= $user['ccount']; ?></td>
                                                        <td><?= $user['booking_date']; ?></td>
                                                        <td><?= $user['booking_time']; ?></td>
                                                        <td style="color: <?= ($user['status'] == 'Approve') ? 'green' : (($user['status'] == 'Denied') ? 'red' : (($user['status'] == 'Pending') ? 'orange' : '')) ?>">
                                                            <?= $user['status'] ?>
                                                        </td>
                                                    </tr>
                                                <?php
                                                    $index++;
                                                endif; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

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