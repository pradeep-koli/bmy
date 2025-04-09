<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Images Edit</title>
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
                                    <h4 class="mb-sm-0 font-size-18">YACHT Records</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">YACHT</a></li>
                                            <li class="breadcrumb-item active">YACHT Records</li>
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
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <div class="search-box me-2 mb-2 d-inline-block">
                                                    <div class="position-relative">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-end">
                                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Add Records</button>
                                                </div>

                                                <!-- form model -->
                                                <div class="container">
                                                  <!-- Button to trigger the modal -->
                                                  <div class="text-sm-end">
                                                      <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Add Records
                                                    </button>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">YACHT Form</h5>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                          <!-- Form inside the modal -->
                                                          <form method= "post" action="<?= base_url('yacht/insert-record');?>" enctype="multipart/form-data">
                                                            <?= csrf_field() ?>
                                                            <div class="mb-3">
                                                              <label for="build_name" class="form-label">Build Name</label>
                                                              <input type="text" name="build_name" class="form-control" id="build_name" aria-describedby="build_name">
                                                              <div id="build_name" class="form-text">We'll never share your email with anyone else.</div>
                                                          </div>            
                                                          <div class="mb-3">
                                                              <label for="yacht_length" class="form-label">Length</label>
                                                              <input type="text" name="yacht_length" class="form-control" id="yacht_length" aria-describedby="yacht_length">
                                                              <div id="yacht_length" class="form-text">We'll never share your email with anyone else.
                                                              </div>
                                                          </div>            
                                                          <div class="mb-3">
                                                              <label for="size" class="form-label">Size</label>
                                                              <input type="text" name="size" class="form-control" id="size" aria-describedby="size">
                                                              <div id="size" class="form-text">We'll never share your email with anyone else.
                                                              </div>
                                                          </div>            
                                                          <div class="mb-3">
                                                              <label for="hname" class="form-label">Yacht Type</label>
                                                              <input type="text" name="hname" class="form-control" id="hname" aria-describedby="emailHelp">
                                                              <div id="hname" class="form-text">We'll never share your email with anyone else.
                                                              </div>
                                                          </div>            
                                                          <div class="mb-3">
                                                              <label for="engine" class="form-label">Engine</label>
                                                              <input type="text" name="engine" class="form-control" id="engine" aria-describedby="engine">
                                                              <div id="engine" class="form-text">We'll never share your email with anyone else.
                                                              </div>
                                                          </div>            
                                                          <div class="mb-3">
                                                              <label for="max_speed" class="form-label">Max Speed</label>
                                                              <input type="text" name="max_speed" class="form-control" id="max_speed" aria-describedby="max_speed">
                                                              <div id="max_speed" class="form-text">We'll never share your email with anyone else.
                                                              </div>
                                                          </div>
                                                          <div class="mb-3">
                                                            <label for="builder" class="form-label">Builder</label>
                                                            <input type="text" name="builder" class="form-control" id="builder" aria-describedby="builder">
                                                            <div id="builder" class="form-text">We'll never share your email with anyone else.
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                          <label for="year_of_build" class="form-label">Year Of Build</label>
                                                          <input type="text" name="year_of_build" class="form-control" id="year_of_build" aria-describedby="year_of_build">
                                                          <div id="year_of_build" class="form-text">We'll never share your email with anyone else.
                                                          </div>
                                                      </div>
                                                      <div class="mb-3">
                                                          <label for="guest" class="form-label">GUEST</label>
                                                          <input type="text" name="guest" class="form-control" id="guest" aria-describedby="guest">
                                                          <div id="guest" class="form-text">We'll never share your email with anyone else.
                                                          </div>
                                                      </div>
                                                      <div class="mb-3">
                                                          <label for="cabin" class="form-label">CABIN</label>
                                                          <input type="text" name="cabin" class="form-control" id="cabin" aria-describedby="cabin">
                                                          <div id="cabin" class="form-text">We'll never share your email with anyone else.
                                                          </div>
                                                      </div>
                                                      <div class="mb-3">
                                                        <label for="price" class="form-label">PRICE</label>
                                                        <input type="text" name="price" class="form-control" id="price" aria-describedby="price">
                                                        <div id="price" class="form-text">We'll never share your email with anyone else.
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="Image File" class="form-label">Thambnail Image</label>
                                                        <input type="file" name="thumb-img" class="form-control" id="img" aria-describedby="img">
                                                        <div id="img" class="form-text">This is Yacht Image
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Add Images</label>
                                                        <input type="file" name="images[]" class="form-control" id="img" aria-describedby="img"  multiple accept="image/*">
                                                        <div id="img" class="form-text">This is Yacht Image
                                                        </div>
                                                    </div>
                                                    <input type="submit" class="btn btn-primary">
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end col-->
                </div>

                <div class="table-responsive">
                    <table class="table align-middle table-nowrap table-check">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">ID</th>

                                <th class="align-middle">Build Name</th>
                                <th class="align-middle">Yacht Length</th>
                                <th class="align-middle">Size</th>

                                <th class="align-middle">YACHT TYPE</th>
                                <th class="align-middle">ENGINE</th>
                                <th class="align-middle">MAX.SPEED</th>

                                <th class="align-middle">BUILDER</th>
                                <th class="align-middle">YEAR OF BUILD</th>
                                <th class="align-middle">GUEST</th>

                                <th class="align-middle">CABIN</th>
                                <th class="align-middle">PRICE</th>
                                <th class="align-middle">Thumbnail Image</th>
                                <th class="align-middle">Add Images</th>

                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($yacht as $user) {
                                ?>
                                <tr>
                                    <td><?php echo $user['id'];?></td>

                                    <td><?php echo $user['build_name'];?></td>
                                    <td><?php echo $user['yacht_length'];?></td>
                                    <td><?php echo $user['size'];?></td>

                                    <td><?php echo $user['hname'];?></td>
                                    <td><?php echo $user['engine'];?></td>
                                    <td><?php echo $user['max_speed'];?></td>

                                    <td><?php echo $user['builder'];?></td>
                                    <td><?php echo $user['year_of_build'];?></td>
                                    <td><?php echo $user['guest'];?></td>

                                    <td><?php echo $user['cabin'];?></td>
                                    <td><?php echo $user['price'];?></td>
                                    

                                    <td>
                                      <!-- add images section start -->
                                      <div class="container">
                                        <!-- Button to trigger the modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRecords">
                                          Add Images
                                      </button>

                                      <!-- Modal -->
                                      <div class="modal fade" id="addRecords" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add More Images</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form inside the modal -->
                                                <form method= "post" action="<?php echo site_url('images/update-record'.$data['id']) ?>" enctype="multipart/form-data">
                                                  <?= csrf_field() ?>
                                                  <div class="mb-3">
                                                    <label for="img" class="form-label">Add Image</label>
                                                    <input type="file" name="images" class="form-control" id="price" aria-describedby="price">
                                                    <img src="<?= base_url('uploads/mainContent/'.$data['images']) ?>" width="50px" height="50px">

                                                    <div id="img" class="form-text">Add Image
                                                    </div>
                                                </div>

                                                <input type="submit" class="btn btn-primary">
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- add images section end -->
                    </td>
                    <td>
                        <div class="d-flex gap-3">
                            <a href="<?= base_url('yacht/edit-record'.$user['id']) ?>" class="text-success">
                                <i class="mdi mdi-pencil font-size-18"></i>
                            </a> 
                            <a href="<?= base_url('yacht/delete-record'.$user['id']) ?>" class="text-danger">
                                <i class="mdi mdi-delete font-size-18"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php } ?>


        </tbody>
    </table>
</div>
<ul class="pagination pagination-rounded justify-content-end mb-2">
    <li class="page-item disabled">
        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
            <i class="mdi mdi-chevron-left"></i>
        </a>
    </li>
    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
    <li class="page-item">
        <a class="page-link" href="javascript: void(0);" aria-label="Next">
            <i class="mdi mdi-chevron-right"></i>
        </a>
    </li>
</ul>
</div>
</div>
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


<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center bg-dark p-3">

            <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>

        <!-- Settings -->
        <hr class="m-0" />

        <div class="p-4">
            <h6 class="mb-3">Layout</h6>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout"
                id="layout-vertical" value="vertical">
                <label class="form-check-label" for="layout-vertical">Vertical</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout"
                id="layout-horizontal" value="horizontal">
                <label class="form-check-label" for="layout-horizontal">Horizontal</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-mode"
                id="layout-mode-light" value="light">
                <label class="form-check-label" for="layout-mode-light">Light</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-mode"
                id="layout-mode-dark" value="dark">
                <label class="form-check-label" for="layout-mode-dark">Dark</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-width"
                id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                <label class="form-check-label" for="layout-width-fuild">Fluid</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-width"
                id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed'),document.body.setAttribute('data-sidebar-size', 'sm')">
                <label class="form-check-label" for="layout-width-boxed">Boxed</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-position"
                id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                <label class="form-check-label" for="layout-position-fixed">Fixed</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-position"
                id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="topbar-color"
                id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                <label class="form-check-label" for="topbar-color-light">Light</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="topbar-color"
                id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                <label class="form-check-label" for="topbar-color-dark">Dark</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                <label class="form-check-label" for="sidebar-size-default">Default</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                <label class="form-check-label" for="sidebar-size-compact">Compact</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                <label class="form-check-label" for="sidebar-color-light">Light</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                <label class="form-check-label" for="sidebar-color-dark">Dark</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                <label class="form-check-label" for="sidebar-color-brand">Brand</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Direction</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-direction"
                id="layout-direction-ltr" value="ltr">
                <label class="form-check-label" for="layout-direction-ltr">LTR</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-direction"
                id="layout-direction-rtl" value="rtl">
                <label class="form-check-label" for="layout-direction-rtl">RTL</label>
            </div>

        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="<?php echo site_url('public/');?>assets/libs/jquery/jquery.min.js"></script>
<script src="<?php echo site_url('public/');?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo site_url('public/');?>assets/libs/metismenu/metisMenu.min.js"></script>
<script src="<?php echo site_url('public/');?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo site_url('public/');?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?php echo site_url('public/');?>assets/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="<?php echo site_url('public/');?>assets/libs/pace-js/pace.min.js"></script>

<script src="<?php echo site_url('public/');?>assets/js/app.js"></script>

</body>

<!-- Mirrored from themesdesign.in/dason-django/layouts/default/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 22:11:09 GMT -->
</html>
