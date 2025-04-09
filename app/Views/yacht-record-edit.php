<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Yacht Record Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo site_url('public/'); ?>assets/images/favicon.ico">

    <!-- preloader css -->
    <link rel="stylesheet" href="<?php echo site_url('public/'); ?>assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?php echo site_url('public/'); ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo site_url('public/'); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo site_url('public/'); ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

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
                                <h4 class="mb-sm-0 font-size-18">Edit Record</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Record</a></li>
                                        <li class="breadcrumb-item active">Edit Record</li>
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
                                        <div class="col-sm-8 m-auto">
                                            <!-- Form inside the modal -->
                                            <form method="post" action="<?php echo site_url('yacht/update-record' . $record['id']) ?>" enctype="multipart/form-data" id="uploadForm">
                                                <?= csrf_field() ?>

                                                <div class="mb-3">
                                                    <label for="services name" class="form-label">Services Name</label>
                                                    <textarea class="form-control" name="service_name" rows="5" required><?= esc($serviceNames) ?></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="build_name" class="form-label">Build Name</label>
                                                    <input type="text" name="build_name" class="form-control" id="build_name" aria-describedby="build_name" value="<?= $record['build_name'] ?>">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="yacht_length" class="form-label">Length (ft)</label>
                                                    <input type="text" name="yacht_length" class="form-control" id="yacht_length" aria-describedby="yacht_length" value="<?= $record['yacht_length'] ?>">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="size" class="form-label">Size</label>
                                                    <select class="form-select" name="size" required>
                                                        <option value="<?php echo $record['size']; ?>"><?php echo $record['size']; ?></option>
                                                        <option value="Small">Small</option>
                                                        <option value="Medium">Medium</option>
                                                        <option value="Large">Large</option>
                                                        <option value="Extra Large">Extra Large</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="days"
                                                        class="form-label">Days</label>

                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="days[]" id="monday" value="Monday" <?= strpos($record['days'], 'Monday') !== false ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="monday">Monday</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="days[]" id="tuesday" value="Tuesday" <?= strpos($record['days'], 'Tuesday') !== false ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="tuesday">Tuesday</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="days[]" id="wednesday" value="Wednesday" <?= strpos($record['days'], 'Wednesday') !== false ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="wednesday">Wednesday</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="days[]" id="thursday" value="Thursday" <?= strpos($record['days'], 'Thursday') !== false ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="thursday">Thursday</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="days[]" id="friday" value="Friday" <?= strpos($record['days'], 'Friday') !== false ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="friday">Friday</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="days[]" id="saturday" value="Saturday" <?= strpos($record['days'], 'Saturday') !== false ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="saturday">Saturday</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="days[]" id="sunday" value="Sunday" <?= strpos($record['days'], 'Sunday') !== false ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="sunday">Sunday</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="start_time" class="form-label">Start Date</label>
                                                    <input type="text" name="start_time" value="<?php echo $record['start_time']; ?>" class="form-control" onclick="changeToTimeInput(event)">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="end_time" class="form-label">End Date</label>
                                                    <input type="text" name="end_time" value="<?php echo $record['end_time']; ?>" class="form-control" onclick="changeToTimeInput(event)">
                                                </div>

                                                <script>
                                                    function changeToTimeInput(event) {
                                                        const timeInput = document.createElement("input");
                                                        timeInput.type = "time";
                                                        timeInput.name = event.target.name; // Ensure it uses the same name attribute
                                                        timeInput.classList.add("form-control");
                                                        timeInput.value = event.target.value;
                                                        event.target.replaceWith(timeInput);
                                                        timeInput.focus();
                                                    }
                                                </script>


                                                <!-- price added according hour -->
                                                <div class="mb-3">
                                                    <div id="hour_prices">
                                                        <!-- Check if there are price records to display -->
                                                        <?php if (!empty($price)) : ?>
                                                            <?php foreach ($price as $priceEntry) : ?>
                                                                <div class="hour_price_entry">
                                                                    <div class="form-row">
                                                                        <div class="row mt-2">
                                                                            <!-- Days Input Field -->
                                                                            <div class="col">
                                                                                <label for="day">Days</label>
                                                                                <input type="text" class="form-control" id="day" value="<?= esc($priceEntry['day']); ?>" name="day[]">
                                                                            </div>

                                                                            <!-- Pax Input Field -->
                                                                            <div class="col">
                                                                                <label for="packs">Pax</label>
                                                                                <input type="text" class="form-control" id="packs" value="<?= esc($priceEntry['packs']); ?>" name="packs[]">
                                                                            </div>

                                                                            <!-- Hours Input Field -->
                                                                            <div class="col">
                                                                                <label for="hours">Hours</label>
                                                                                <input type="text" class="form-control" id="hours" value="<?= esc($priceEntry['hours']); ?>" name="hours[]">
                                                                            </div>

                                                                            <!-- Price Input Field -->
                                                                            <div class="col">
                                                                                <label for="prices">Price($)</label>
                                                                                <input type="text" class="form-control" id="prices" value="<?= esc($priceEntry['rent']); ?>" name="rent[]">
                                                                            </div>
                                                                            <!-- MRP.Price Input Field -->
                                                                            <div class="col">
                                                                                <label for="prices">MRP.Price($)</label>
                                                                                <input type="text" class="form-control" id="mrp_price" value="<?= esc($priceEntry['mrp_price']); ?>" name="mrp_price[]">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php else : ?>
                                                            <!-- If no price records, show empty fields -->
                                                            <div class="hour_price_entry">
                                                                <div class="form-row">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <label for="day">Days</label>
                                                                            <input type="text" class="form-control" id="day" name="day[]">
                                                                        </div>
                                                                        <div class="col">
                                                                            <label for="packs">Pax</label>
                                                                            <input type="text" class="form-control" id="packs" name="packs[]">
                                                                        </div>
                                                                        <div class="col">
                                                                            <label for="hours">Hours</label>
                                                                            <input type="text" class="form-control" id="hours" name="hours[]">
                                                                        </div>
                                                                        <div class="col">
                                                                            <label for="prices">Price($)</label>
                                                                            <input type="text" class="form-control" id="prices" name="rent[]">
                                                                        </div>
                                                                        <div class="col">
                                                                            <label for="prices">MRP.Price($)</label>
                                                                            <input type="text" class="form-control" id="mrp_price" name="mrp_price[]">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <!-- price added according hour end -->

                                                <button type="button" class="btn btn-secondary mb-3" id="add_more_hours">Add More Hours</button>

                                                <script>
                                                    document.getElementById('add_more_hours').addEventListener('click', function() {
                                                        var div = document.createElement('div');
                                                        div.className = 'hour_price_entry';
                                                        div.innerHTML = '<div class="form-row"><div class="row mt-2">' +

                                                            '<div class="col">' +
                                                            '<label for="days">Days</label>' +
                                                            '<input type="text" class="form-control" id="day" name="day[]" required>' +
                                                            '</div>' +

                                                            '<div class="col">' +
                                                            '<label for="packs">Pax</label>' +
                                                            '<input type="text" class="form-control" id="packs" name="packs[]" required>' +
                                                            '</div>' +

                                                            '<div class="col">' +
                                                            '<label for="hours">Hours</label>' +
                                                            '<input type="text" class="form-control" id="hours" name="hours[]" required>' +
                                                            '</div>' +

                                                            '<div class="col">' +
                                                            '<label for="prices">Price($)</label>' +
                                                            '<input type="text" class="form-control" id="prices" name="rent[]" required>' +
                                                            '</div>' +

                                                            '<div class="col">' +
                                                            '<label for="mrp_price">MRP.Price($)</label>' +
                                                            '<input type="text" class="form-control" id="mrp_price" name="mrp_price[]" required>' +
                                                            '</div>' +

                                                            '</div>' +
                                                            '</div>';
                                                        document.getElementById('hour_prices').appendChild(div);
                                                    });
                                                </script>

                                                <!-- price and hours END -->
                                                <!-- price and hours END -->
                                                <div class="mb-3">
                                                    <label for="hname" class="form-label">Yacht Name</label>
                                                    <input type="text" name="hname" class="form-control" id="hname" aria-describedby="emailHelp" value="<?= $record['hname'] ?>">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="hname" class="form-label">Location</label>
                                                    <input type="text" name="location" class="form-control" id="location" aria-describedby="location" value="<?= $record['location'] ?>">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="hname" class="form-label">Address</label>
                                                    <input type="text" name="address" class="form-control" id="address" aria-describedby="address" value="<?= $record['address'] ?>">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="hname" class="form-label">Yacht Type</label>
                                                    <input type="text" name="yacht_type" class="form-control" id="yacht_type" aria-describedby="yacht_type" value="<?= $record['yacht_type'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="engine" class="form-label">Engine</label>
                                                    <input type="text" name="engine" class="form-control" id="engine" aria-describedby="engine" value="<?= $record['engine'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="max_speed" class="form-label">Max Speed (Knots)</label>
                                                    <input type="text" name="max_speed" class="form-control" id="max_speed" aria-describedby="max_speed" value="<?= $record['max_speed'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="builder" class="form-label">Builder</label>
                                                    <input type="text" name="builder" class="form-control" id="builder" aria-describedby="builder" value="<?= $record['builder'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="year_of_build" class="form-label">Year Of Build</label>
                                                    <input type="text" name="year_of_build" class="form-control" id="year_of_build" aria-describedby="year_of_build" value="<?= $record['year_of_build'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="guest" class="form-label">Guest (Max Capacity)</label>
                                                    <input type="text" name="guest" class="form-control" id="guest" aria-describedby="guest" value="<?= $record['guest'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="cabin" class="form-label">Cabin</label>
                                                    <input type="text" name="cabin" class="form-control" id="cabin" aria-describedby="cabin" value="<?= $record['cabin'] ?>">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="about" class="form-label">About Yacht</label>
                                                    <textarea name="about" class="form-control" id="about" rows="4" aria-describedby="about" value=""><?= $record['about'] ?></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="about" class="form-label">Important Note</label>
                                                    <textarea name="other" class="form-control" id="about" aria-describedby="about" value="" rows="5" cols="50"><?= $record['other'] ?> </textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="img" class="form-label">Thambnail Image (only jpg & jpeg)</label>
                                                    <input type="file" name="thumb-img"
                                                        class="form-control" id="fileInput" accept="image/jpeg, image/png" />
                                                    <img src="<?= base_url('uploads/thumbnail/' . $record['thumb-img']) ?>" width="50px" height="50px">
                                                </div>


                                                <input type="submit" class="btn btn-primary" id="uploadBtn" class="hidden">
                                                <script>
                                                    const fileInput = document.getElementById('fileInput');
                                                    const uploadBtn = document.getElementById('uploadBtn');

                                                    fileInput.addEventListener('change', () => {
                                                        const file = fileInput.files[0];
                                                        if (file) {
                                                            uploadBtn.classList.remove('hidden');
                                                        } else {
                                                            uploadBtn.classList.add('hidden');
                                                        }
                                                    });
                                                </script>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <!-- end col-->
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
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Bookmyyacht.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        <!-- Design & Develop by <a href="#!" class="text-decoration-underline">Themesdesign</a> -->
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

    <!-- Right bar overlay--
<div class="rightbar-overlay"></div> -->

    <!-- JAVASCRIPT -->
    <script src="<?php echo site_url('public/'); ?>assets/libs/jquery/jquery.min.js"></script>
    <script src="<?php echo site_url('public/'); ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo site_url('public/'); ?>assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?php echo site_url('public/'); ?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo site_url('public/'); ?>assets/libs/node-waves/waves.min.js"></script>
    <script src="<?php echo site_url('public/'); ?>assets/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="<?php echo site_url('public/'); ?>assets/libs/pace-js/pace.min.js"></script>

    <script src="<?php echo site_url('public/'); ?>assets/js/app.js"></script>

</body>


</html>