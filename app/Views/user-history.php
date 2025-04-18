<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>User History</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo site_url('public/');?>assets/images/favicon.ico">

    <!-- Responsive Table css -->
    <link href="<?php echo site_url('public/');?>assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />

    <!-- preloader css -->
    <link rel="<?php echo site_url('public/');?>stylesheet" href="assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?php echo site_url('public/');?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo site_url('public/');?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo site_url('public/');?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- ========== Header Start ========== -->
            <?php include('header.php')?>
            <!-- ========== Header End ========== -->
            
            <!-- ========== Left Sidebar Start ========== -->
            <?php include('sidebar.php')?>
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
                                    <h4 class="mb-sm-0 font-size-18">Users Logs History</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Logs</a></li>
                                            <li class="breadcrumb-item active">Users Logs</li>
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
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Status</th>
                                                        <th>Data Time</th>
                                                        <th>IP</th>
                                                        <th>Browser</th>
                                                        <th>OS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    foreach($users as $record){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $record['id'];?></td>
                                                            <td><?php echo $record['name'];?></td>
                                                            <td><?php echo $record['email'];?></td>
                                                            <td><?php echo $record['status'];?></td>
                                                            <td><?php echo $record['data_time'];?></td>
                                                            <td><?php echo $record['IP'];?></td>
                                                            <td><?php echo $record['browser'];?></td>
                                                            <td><?php echo $record['os'];?></td>
                                                        <?php } ?>
                                                    </tr>
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
                            <script>document.write(new Date().getFullYear())</script> © Bookmyyacht.
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


   

        <!-- JAVASCRIPT -->
        <script src="<?php echo site_url('public/');?>assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo site_url('public/');?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo site_url('public/');?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo site_url('public/');?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo site_url('public/');?>assets/libs/node-waves/waves.min.js"></script>
        <script src="<?php echo site_url('public/');?>assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="<?php echo site_url('public/');?>assets/libs/pace-js/pace.min.js"></script>

        <!-- Required datatable js -->
        <script src="<?php echo site_url('public/');?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo site_url('public/');?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo site_url('public/');?>assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo site_url('public/');?>assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo site_url('public/');?>assets/libs/jszip/jszip.min.js"></script>
        <script src="<?php echo site_url('public/');?>assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?php echo site_url('public/');?>assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="<?php echo site_url('public/');?>assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo site_url('public/');?>assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo site_url('public/');?>assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="<?php echo site_url('public/');?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo site_url('public/');?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?php echo site_url('public/');?>assets/js/pages/datatables.init.js"></script>    

        <script src="<?php echo site_url('public/');?>assets/js/app.js"></script>

</body>

<!-- Mirrored from themesdesign.in/dason-django/layouts/default/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 22:11:40 GMT -->
</html>
