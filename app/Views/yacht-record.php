<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Yacht List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo site_url('public/'); ?>assets/images/favicon.ico">

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
                                <h4 class="mb-sm-0 font-size-18">Yacht List</h4>

                                <div class="page-title-right">
                                    <!--<ol class="breadcrumb m-0">-->
                                    <!--    <li class="breadcrumb-item"><a href="javascript: void(0);">Yacht</a></li>-->
                                    <!--    <li class="breadcrumb-item active">Yacht List</li>-->
                                    <!--</ol>-->
                                    <!-- Button to trigger the modal -->
                                    <div class="text-sm-end">
                                        <button type="button" class="btn btn-primary mb-4"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Add Yacht
                                        </button>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Yacht
                                        Form</h5>
                                    <button type="button" class="btn-close"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form inside the modal -->
                                    <form method="post"
                                        action="<?= base_url('yacht/insert-record'); ?>"
                                        enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="username"
                                            value="<?= session('name'); ?>">

                                        <div class="mb-3">
                                            <label for="services name" class="form-label">Services Name</label>
                                            <textarea class="form-control" name="service_name" rows="4" required></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="build_name" class="form-label">Build
                                                Name</label>
                                            <input type="text" name="build_name"
                                                class="form-control" id="build_name"
                                                aria-describedby="build_name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="yacht_length"
                                                class="form-label">Length (ft)</label>
                                            <input type="text" name="yacht_length"
                                                class="form-control" id="yacht_length"
                                                aria-describedby="yacht_length">
                                        </div>
                                        <div class="mb-3">
                                            <label for="size"
                                                class="form-label">Size</label>
                                            <select name="size" id="" class="form-select">
                                                <option value="">Select Size</option>
                                                <option value="Small">Small</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Large">Large</option>
                                                <option value="Extra Large">Extra Large</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="days" class="form-label">Available Days:</label>

                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="days[]" id="monday" value="Monday">
                                                    <label class="form-check-label" for="monday">Monday</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="days[]" id="tuesday" value="Tuesday">
                                                    <label class="form-check-label" for="tuesday">Tuesday</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="days[]" id="wednesday" value="Wednesday">
                                                    <label class="form-check-label" for="wednesday">Wednesday</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="days[]" id="thursday" value="Thursday">
                                                    <label class="form-check-label" for="thursday">Thursday</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="days[]" id="friday" value="Friday">
                                                    <label class="form-check-label" for="friday">Friday</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="days[]" id="saturday" value="Saturday">
                                                    <label class="form-check-label" for="saturday">Saturday</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="days[]" id="sunday" value="Sunday">
                                                    <label class="form-check-label" for="sunday">Sunday</label>
                                                </div>
                                            </div>
                                        </div>

                                        <label for="days" class="form-label">Working Time:</label>
                                        <div class="mb-3">
                                            <label for="date"
                                                class="form-label">Start Date</label>
                                            <input type="time" name="start_time" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label for="date"
                                                class="form-label">End Date</label>
                                            <input type="time" name="end_time" class="form-control">
                                        </div>

<!-- price added according hour -->
<div class="mb-3">
    <div id="hour_prices">
        <div class="hour_price_entry">
            <div class="form-row">
                <div class="row">
                    <div class="col">
                        <label for="day">Days</label>
                        <input type="text" class="form-control" id="day" name="day[]" required>
                    </div>
                    <div class="col">
                        <label for="packs">Pax</label>
                        <input type="text" class="form-control" id="packs" name="packs[]" required>
                    </div>
                    <div class="col">
                        <label for="hours">Hours</label>
                        <input type="text" class="form-control" id="hours" name="hours[]" required>
                    </div>
                    <div class="col">
                        <label for="prices">Price($)</label>
                        <input type="text" class="form-control" id="prices" name="rent[]" required>
                    </div>
                    <div class="col">
                        <label for="mrp_price">MRP($)</label>
                        <input type="text" class="form-control" id="mrp_price" name="mrp_price[]" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- price added according hour end end -->

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


                                        <!-- new addred record end -->

                                        <div class="mb-3">
                                            <label for="hname" class="form-label">Yacht
                                                Name</label>
                                            <input type="text" name="hname"
                                                class="form-control" id="hname"
                                                aria-describedby="hname">
                                        </div>

                                        <div class="mb-3">
                                            <label for="location"
                                                class="form-label">Location</label>
                                            <input type="text" name="location"
                                                class="form-control" id="location"
                                                aria-describedby="location">
                                        </div>

                                        <div class="mb-3">
                                            <label for="address"
                                                class="form-label">Address</label>
                                            <input type="text" name="address"
                                                class="form-control" id="address"
                                                aria-describedby="address">
                                        </div>

                                        <div class="mb-3">
                                            <label for="about"
                                                class="form-label">About Yacht</label>
                                            <textarea name="about" id="" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="yacht_type" class="form-label">Yacht Type</label>
                                            <div class="field-inner">
                                                <div class="field-icon">
                                                    <span class="flaticon-boat-2"></span>
                                                </div>
                                                <select id="yacht_type" name="yacht_type" class="form-select">
                                                    <option value="">Select Yacht</option>
                                                    <option value="Motor Yachts">Motor Yacht</option>
                                                    <option value="Gulet Yachts">Gulet Yacht</option>
                                                    <option value="Sports Yachts">Sports Yacht</option>
                                                    <option value="Luxury Yachts">Luxury Yacht</option>
                                                    <option value="Sailing Yachts">Sailing Yacht</option>
                                                    <option value="Catamarans Yachts">Catamarans Yacht</option>
                                                    <option value="Trimarans Yachts">Trimarans Yacht</option>
                                                    <option value="Explorer Yachts">Explorer Yacht</option>
                                                    <option value="Trawler Yachts">Trawler Yacht</option>
                                                    <option value="Classic Yachts">Classic Yacht</option>
                                                    <option value="Day Sailors">Day Sailors</option>
                                                    <option value="Performance Yachts">Performance Yacht</option>
                                                    <option value="Fishing Yachts">Fishing Yachts</option>
                                                    <option value="Charter Yachts">Charter Yacht</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById('yacht_type').addEventListener('change', function() {
                                                if (this.value === 'Other') {
                                                    // Create the new input field
                                                    var input = document.createElement('input');
                                                    input.type = 'text';
                                                    input.name = 'yacht_type';
                                                    input.className = 'form-control';

                                                    // Replace the select element with the new input field
                                                    this.parentNode.replaceChild(input, this);
                                                }
                                            });
                                        </script>
                                        <div class="mb-3">
                                            <label for="engine"
                                                class="form-label">Engine</label>
                                            <input type="text" name="engine"
                                                class="form-control" id="engine"
                                                aria-describedby="engine">
                                        </div>
                                        <div class="mb-3">
                                            <label for="max_speed" class="form-label">Max
                                                Speed (Knots)</label>
                                            <input type="text" name="max_speed"
                                                class="form-control" id="max_speed"
                                                aria-describedby="max_speed">
                                        </div>
                                        <div class="mb-3">
                                            <label for="builder"
                                                class="form-label">Builder</label>
                                            <input type="text" name="builder"
                                                class="form-control" id="builder"
                                                aria-describedby="builder">
                                        </div>
                                        <div class="mb-3">
                                            <label for="year_of_build"
                                                class="form-label">Year Of Build</label>
                                            <input type="text" name="year_of_build"
                                                class="form-control" id="year_of_build"
                                                aria-describedby="year_of_build">
                                        </div>
                                        <div class="mb-3">
                                            <label for="guest"
                                                class="form-label">Guest (Max Capacity)</label>
                                            <input type="text" name="guest"
                                                class="form-control" id="guest"
                                                aria-describedby="guest">
                                        </div>
                                        <div class="mb-3">
                                            <label for="cabin"
                                                class="form-label">Cabin</label>
                                            <input type="text" name="cabin"
                                                class="form-control" id="cabin"
                                                aria-describedby="cabin">
                                        </div>

                                        <div class="mb-3" bis_skin_checked="1">
                                            <label for="cabin" class="form-label">Describe Pricing Plan</label>
                                            <textarea id="basicpill-address-input" name="others" class="form-control" rows="2"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="Image File"
                                                class="form-label">Thambnail Image (only jpg & jpeg)</label>
                                            <input type="file" name="thumb-img"
                                                class="form-control" id="img"
                                                aria-describedby="img">
                                        </div>

                                        <div class="mb-3">
                                            <label for="image" class="form-label">Add
                                                Images (Select Max 10 Images)</label>
                                            <input type="file" name="images[]" class="form-control" id="images" aria-describedby="images" multiple accept="image/*">
                                        </div>
                                        <input type="submit" class="btn btn-primary">
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <!-- form model -->


                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">

                                        <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">ID</th>

                                                <?php if (session('role') != 'manager'): ?>
                                                    <th>Username</th>
                                                <?php endif; ?>

                                                <!--<th class="align-middle">Days</th>-->
                                                <!--<th class="align-middle">Start Time</th>-->
                                                <!--<th class="align-middle">End Time</th>-->
                                                <th class="align-middle">Status</th>
                                                <th class="align-middle">Yacht Name</th>
                                                <th class="align-middle">Yacht Type</th>
                                                <th class="align-middle">Location</th>
                                                <th class="align-middle">Length/Speed/Guest/Cabin</th>
                                                <th class="align-middle">Price</th>
                                                <th class="align-middle">Thumbnail</th>
                                                <th class="align-middle">Add Images</th>
                                                <th class="align-middle">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $index = 1;
                                            foreach ($yacht as $user) {
                                            ?>
                                                <?php if (session('role') == "manager" && $user['username'] == session('name')) {
                                                ?>

                                                    <tr>
                                                        <td>
                                                            <?php echo $index; ?>
                                                        </td>
                                                        <!--<td><?php echo $user['days']; ?></td>-->
                                                        <!--<td><?php echo $user['start_time']; ?></td>-->
                                                        <!--<td><?php echo $user['end_time']; ?></td>-->
                                                        <!-- <td>hide username</td> -->
                                                        <td>
                                                            <?php
                                                            $status = $user['status'];
                                                            $color = '';

                                                            if ($status == 'Approve') {
                                                                $color = 'green';
                                                            } elseif ($status == 'Pending') {
                                                                $color = '#ffca2c';
                                                            } elseif ($status == 'Declined') {
                                                                $color = 'red';
                                                            }
                                                            ?>

                                                            <span style="color: <?php echo $color; ?>;">
                                                                <?php echo $status; ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <?php echo $user['hname']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $user['yacht_type']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $user['location']; ?>
                                                        </td>

                                                        <td>
                                                            <?php echo $user['yacht_length']; ?> ft /
                                                            <?php echo $user['max_speed']; ?> Knot /
                                                            <?php echo $user['guest']; ?> Max /
                                                            <?php echo $user['cabin']; ?>
                                                        </td>
                                                        <td>$
                                                            <?php echo $user['price']; ?>
                                                        </td>
                                                        <td><img src="<?= " uploads/thumbnail/" . $user['thumb-img']; ?>"
                                                                height="50px" width="50px">
                                                        </td>

                                                        <td>
                                                            <!-- add images section start -->
                                                            <div class="container">
                                                                <!-- Button to trigger the modal -->
                                                                <button type="button" class="btn btn-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#addRecords<?php echo $user['id']; ?>">
                                                                    Add Images
                                                                </button>

                                                                <!-- Modal -->
                                                                <div class="modal fade"
                                                                    id="addRecords<?php echo $user['id']; ?>" tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                                    Select Max 10 Images
                                                                                </h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <!-- Form inside the modal -->
                                                                                <form method="post"
                                                                                    action="<?= base_url('img'); ?>"
                                                                                    enctype="multipart/form-data">
                                                                                    <?= csrf_field() ?>
                                                                                    <input type="hidden" name="id"
                                                                                        value="<?php echo $user['id']; ?>">
                                                                                    <div class="mb-3">
                                                                                        <label for="extra-add-img"
                                                                                            class="form-label">Add
                                                                                            Images</label>
                                                                                        <input type="file" name="images[]"
                                                                                            class="form-control"
                                                                                            id="extra-add-img"
                                                                                            aria-describedby="add-img" multiple>
                                                                                        <div id="extra-add-img"
                                                                                            class="form-text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="submit"
                                                                                        class="btn btn-primary">
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
                                                                <!--<a href="<?= base_url('yacht/edit-record' . $user['id']) ?>"-->
                                                                <!--    class="text-success">-->
                                                                <!--    <i class="mdi mdi-pencil font-size-18"></i>-->
                                                                <!--</a>-->
                                                                <a href="<?= base_url('yacht/delete-record' . $user['id']) ?>"
                                                                    onclick="alert('Do you want to delete?')"
                                                                    class="text-danger">
                                                                    <i class="mdi mdi-delete font-size-18"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    $index++;
                                                } elseif (session('role') == "admin") {
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $index; ?>
                                                        </td>
                                                        <td>@
                                                            <?php echo $user['username']; ?>
                                                        </td>
                                                        <!--<td><?php echo $user['days']; ?></td>-->
                                                        <!--<td><?php echo $user['start_time']; ?></td>-->
                                                        <!--<td><?php echo $user['end_time']; ?></td>-->

                                                        <td>
                                                            <form id="statusForm<?= $user['id'] ?>"
                                                                action="<?= base_url('update-status') ?>" method="post">
                                                                <?= csrf_field(); ?>
                                                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                                                <select name="status" id="update<?= $user['id'] ?>"
                                                                    class="btn p-2"
                                                                    style="background-color: #fff; border: 2px solid #e6dadb;">
                                                                    <option value="<?= $user['status']; ?>">
                                                                        <?= $user['status']; ?>
                                                                    </option>
                                                                    <option value="Approve">Approve</option>
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Declined">Declined</option>
                                                                </select>
                                                            </form>

                                                            <script>
                                                                document.addEventListener('DOMContentLoaded', function() {
                                                                    var selectBox = document.getElementById('update<?= $user['id'] ?>');
                                                                    selectBox.addEventListener('change', function() {
                                                                        document.getElementById('statusForm<?= $user['id'] ?>').submit();
                                                                    });
                                                                });
                                                            </script>
                                                        </td>
                                                        <td>
                                                            <?php echo $user['hname']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $user['yacht_type']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $user['location']; ?>
                                                        </td>

                                                        <td>
                                                            <?php echo $user['yacht_length']; ?> ft /
                                                            <?php echo $user['max_speed']; ?> Knot /
                                                            <?php echo $user['guest']; ?> Max /
                                                            <?php echo $user['cabin']; ?>
                                                        </td>
                                                        <td>$
                                                            <?php echo $user['price']; ?>
                                                        </td>
                                                        <td><img src="<?= " uploads/thumbnail/" . $user['thumb-img']; ?>"
                                                                height="50px" width="50px">
                                                        </td>

                                                        <td>
                                                            <!-- add images section start -->
                                                            <div class="container">
                                                                <!-- Button to trigger the modal -->
                                                                <button type="button" class="btn btn-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#addRecords<?php echo $user['id']; ?>">
                                                                    Add Images
                                                                </button>

                                                                <!-- Modal -->
                                                                <div class="modal fade"
                                                                    id="addRecords<?php echo $user['id']; ?>" tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                                    Add More Images
                                                                                </h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <!-- Form inside the modal -->
                                                                                <form method="post"
                                                                                    action="<?= base_url('img'); ?>"
                                                                                    enctype="multipart/form-data">
                                                                                    <?= csrf_field() ?>
                                                                                    <input type="hidden" name="id"
                                                                                        value="<?php echo $user['id']; ?>">
                                                                                    <div class="mb-3">
                                                                                        <label for="extra-add-img"
                                                                                            class="form-label"><b>Select Max 10
                                                                                                Images</b></label>
                                                                                        <input type="file" name="images[]"
                                                                                            class="form-control"
                                                                                            id="extra-add-img"
                                                                                            aria-describedby="add-img" multiple>
                                                                                        <div id="extra-add-img"
                                                                                            class="form-text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="submit"
                                                                                        class="btn btn-primary">
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
                                                                <a href="<?= base_url('yacht/edit-record' . $user['id']) ?>"
                                                                    class="text-success">
                                                                    <i class="mdi mdi-pencil font-size-18"></i>
                                                                </a>
                                                                <a href="<?= base_url('yacht/delete-record' . $user['id']) ?>"
                                                                    onclick="alert('Do you want to delete?')"
                                                                    class="text-danger">
                                                                    <i class="mdi mdi-delete font-size-18"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                            <?php
                                                    $index++;
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
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
                                <!-- Design & Develop by <a class="text-decoration-underline">Book My Yacht</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <script>
        document.getElementById('yachtForm').addEventListener('submit', function(e) {
            var images = document.getElementById('images').files;
            if (images.length < 10) {
                e.preventDefault(); // Prevent form submission
                alert('Please upload at least 10 images.');
            }
        });
    </script>


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