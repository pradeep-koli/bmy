<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yacht List</title>

    <!-- faviicon -->
    <link rel="icon" href="<?php echo site_url('yachtProject/us/'); ?>images/favicon.ico" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <style>
        /* styles.css */
        .styled-pagination {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        .styled-pagination li {
            margin: 0 5px;
        }

        .styled-pagination a {
            padding: 10px 15px;
            text-decoration: none;
            color: black;
            /* border: 1px solid #ddd; */
            border-radius: 5px;
        }

        .styled-pagination a:hover {
            background-color: #f0f0f0;
        }

        .styled-pagination .active a {
            background-color: #d5ae82;
            color: white;
            /* border-color: #007bff; */
        }

        ul#type-menu {
            overflow-y: auto;
            max-height: 250px;
        }
    </style>

</head>

<body>
    <!-- HEADER Start -->
    <?php
    include 'header.php';
    ?>
    <!-- HEADER End -->

    <!-- MAIN Start -->
    <!--Page Title-->
    <section class="page-banner">
        <div class="image-layer"
            style="background-image:url(<?= base_url('yachtProject/us/'); ?>images/background/banner-1.jpg);">
        </div>

        <div class="banner-inner" style="background-color: #00000073;">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Discover your dream yacht and enjoy sailing it.</h1>
                </div>
            </div>
        </div>
    </section>

    <!--Rent / Buy Section-->
    <section class="rent-buy-section">
        <div class="auto-container">
            <div class="form-tabs tabs-box">
                <ul class="tab-buttons clearfix">
                    <li class="tab-btn" data-tab="#rent-tab">Find</li>
                </ul>
                <div class="tabs-content">
                    <!--Tab-->
                    <div class="tab active-tab" id="rent-tab">
                        <div class="default-form yacht-search-form">
                            <form method="get" action="<?= base_url('filter') ?>" id="FilterForm">
                                <?= csrf_field(); ?>

                                <div class="row clearfix">
                                    <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <div class="field-icon"><span class="flaticon-search"></span></div>
                                            <select name="location" id="currentloc" class="custom-select-box">
                                                <?php
                                                if (isset($filter)) {
                                                    if ($filter['location'] == NULL) {
                                                        echo "<option value=''>Select Location</option>";
                                                    } else {
                                                        echo "<option id='locationdel'>" . $filter['location'] . "</option>";
                                                    }
                                                }
                                                ?>
                                                <!--<option value="">Select</option>-->
                                                <option>Alabama</option>
                                                <option>Alaska</option>
                                                <option>Arizona</option>
                                                <option>Arkansas</option>
                                                <option>California</option>
                                                <option>Colorado</option>
                                                <option>Connecticut</option>
                                                <option>Delaware</option>
                                                <option>Florida</option>
                                                <option>Georgia</option>
                                                <option>Hawaii</option>
                                                <option>Idaho</option>
                                                <option>Illinois</option>
                                                <option>Indiana</option>
                                                <option>Iowa</option>
                                                <option>Kansas</option>
                                                <option>Kentucky</option>
                                                <option>Louisiana</option>
                                                <option>Maine</option>
                                                <option>Maryland</option>
                                                <option>Massachusetts</option>
                                                <option>Michigan</option>
                                                <option>Minnesota</option>
                                                <option>Mississippi</option>
                                                <option>Missouri</option>
                                                <option>Montana</option>
                                                <option>Nebraska</option>
                                                <option>Nevada</option>
                                                <option>New Hampshire</option>
                                                <option>New Jersey</option>
                                                <option>New Mexico</option>
                                                <option>New York</option>
                                                <option>North Carolina</option>
                                                <option>North Dakota</option>
                                                <option>Ohio</option>
                                                <option>Oklahoma</option>
                                                <option>Oregon</option>
                                                <option>Pennsylvania</option>
                                                <option>Rhode Island</option>
                                                <option>South Carolina</option>
                                                <option>South Dakota</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Utah</option>
                                                <option>Vermont</option>
                                                <option>Virginia</option>
                                                <option>Washington</option>
                                                <option>West Virginia</option>
                                                <option>Wisconsin</option>
                                                <option>Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                    <style>
                                        ul#ui-id-1-menu {
                                            overflow-y: auto;
                                            max-height: 200px;
                                        }

                                        ul#currentloc-menu {
                                            overflow-y: auto;
                                            max-height: 250px;
                                        }
                                    </style>

                                    <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <div class="field-icon"><span class="flaticon-calendar"></span></div>

                                            <input type="text" name="booking_date" id="datepicker"
                                                placeholder="booking date" <?php
                                                                            if (isset($filter)) {
                                                                                if ($filter['booking_date'] == NULL) {
                                                                                    echo "value=''";
                                                                                } else {
                                                                                    echo "value='" . $filter['booking_date'] . "'";
                                                                                }
                                                                            }
                                                                            ?>>

                                            <script>
                                                $(function() {
                                                    var today = new Date();
                                                    $('#datepicker').datepicker({
                                                        minDate: today,
                                                        maxDate: '+2y',
                                                        dateFormat: 'yy-mm-dd',
                                                        beforeShow: function(input, inst) {
                                                            setTimeout(function() {
                                                                inst.dpDiv.find('.ui-datepicker-current').trigger('click');
                                                            }, 0);
                                                        },
                                                        beforeShowDay: function(date) {
                                                            var endDate = new Date();
                                                            endDate.setFullYear(date.getFullYear(), date.getMonth() + 1, 0);
                                                            return [true, '', date <= endDate ? '' : 'ui-datepicker-unselectable'];
                                                        }
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </div>

                                    <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <div class="field-icon"><span class="flaticon-boat-2"></span></div>
                                            <select name="yacht_type" id="type" class="custom-select-box">
                                                <?php
                                                if (isset($filter)) {
                                                    if ($filter['yacht_type'] == NULL) {
                                                        echo "<option value=''>Select Yacht</option>";
                                                    } else {
                                                        echo "<option id='typedel'>" . $filter['yacht_type'] . "</option>";
                                                    }
                                                }
                                                ?>
                                                <!--<option value="">Select Yacht</option>-->
                                                <option value="Motor Yachts">Motor Yachts</option>
                                                <option value="Luxury Yachts">Luxury Yachts</option>
                                                <option value="Classic Yachts">Classic Yachts</option>
                                                <option value="Catamarans Yachts">Catamarans Yachts</option>
                                                <option value="Trawler Yachts">Trawler Yachts</option>
                                                <option value="Fishing Yachts">Fishing Yachts</option>
                                                <!-- no record database -->
                                                <option value="Sailing Yachts">Sailing Yachts</option>
                                                <option value="Trimarans">Trimarans</option>
                                                <option value="Explorer Yachts">Explorer Yachts</option>
                                                <option value="Sports Yachts">Sports Yachts</option>
                                                <option value="Performance Yachts">Performance Yachts</option>
                                                <option value="Charter Yachts">Charter Yachts</option>
                                                <option value="Cruise">Cruise</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <div class="field-icon"><span class="flaticon-user-5"></span></div>
                                            <div id="guestSection1">
                                                <select name="guest" id="guest"
                                                    onchange="convertIfSelectedguest(this, 'guestSection1')"
                                                    style="padding-top: 18px; margin-left: 26px; border: none; width: 85%;">
                                                    <?php
                                                    if (isset($filter)) {
                                                        if ($filter['guest'] == NULL) {
                                                            echo "<option value=''>Select Guest</option>";
                                                        } else {
                                                            echo "<option id='del'>" . $filter['guest'] . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                    <!-- <option value="">Select Guest</option> -->
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5+</option>
                                                    <option value="convert">custom</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                                    <script>
                                        // JavaScript function to delete the option with ID 'del' when the select element is clicked
                                        document.getElementById('guest').addEventListener('click', function() {
                                            var optionToDelete = document.getElementById('del');
                                            if (optionToDelete) {
                                                optionToDelete.remove();
                                            }
                                        });

                                        document.getElementById('cabin').addEventListener('click', function() {
                                            var optionToDelete = document.getElementById('cabindel');
                                            if (optionToDelete) {
                                                optionToDelete.remove();
                                            }
                                        });

                                        document.getElementById('type').addEventListener('click', function() {
                                            var optionToDelete = document.getElementById('typedel');
                                            if (optionToDelete) {
                                                optionToDelete.remove();
                                            }
                                        });

                                        document.getElementById('currentloc').addEventListener('click', function() {
                                            var optionToDelete = document.getElementById('locationdel');
                                            if (optionToDelete) {
                                                optionToDelete.remove();
                                            }
                                        });

                                        function convertIfSelectedguest(selectElement, containerId) {
                                            if (selectElement.value === "convert") {
                                                var container = document.getElementById(containerId);
                                                var input = document.createElement("input");
                                                input.type = "text";
                                                input.name = "guest";
                                                input.style.cssText = 'background-color: transparent; width:100%;  border-radius: 5px; padding: 16px 16px 12.8px;  margin-left: 40px; border: none; outline:none';
                                                input.addEventListener('input', function(event) {
                                                    this.value = this.value.replace(/[^0-9]/g, '');
                                                });
                                                container.innerHTML = '';
                                                container.appendChild(input);
                                            }
                                        }

                                        function convertIfSelectedcabin(selectElement, containerId) {
                                            if (selectElement.value === "convert") {
                                                var container = document.getElementById(containerId);
                                                var input = document.createElement("input");
                                                input.type = "text";
                                                input.name = "cabin";
                                                input.style.cssText = 'background-color: transparent; width:100%;  border-radius: 5px; padding: 16px 16px 12.8px;  margin-left: 40px; border: none; outline:none';
                                                input.addEventListener('input', function(event) {
                                                    this.value = this.value.replace(/[^0-9]/g, '');
                                                });
                                                container.innerHTML = '';
                                                container.appendChild(input);
                                            }
                                        }
                                    </script>
                                    <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <div class="field-icon"><span class="flaticon-home"></span></div>
                                            <div id="guestSection2">
                                                <select class="form-select" name="cabin" id="cabin"
                                                    onchange="convertIfSelectedcabin(this, 'guestSection2')"
                                                    style="padding-top: 18px; margin-left: 26px; border: none; width: 85%;">
                                                    <?php
                                                    if (isset($filter)) {
                                                        if ($filter['cabin'] == NULL) {
                                                            echo "<option value=''>Select Cabin</option>";
                                                        } else {
                                                            echo "<option id='cabindel'>" . $filter['cabin'] . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                    <!-- <option value="">Select Cabin</option> -->
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5+</option>
                                                    <option value="convert">custom</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <div class="field-icon"><span class="flaticon-double-arrow"></span></div>
                                            <select name="yacht_length" class="custom-select-box">
                                                <?php
                                                if (isset($filter)) {
                                                    if ($filter['yacht_length'] == NULL) {
                                                        echo "<option  value=''>Select Length</option>";
                                                    } else {
                                                        echo "<option id='lendel'>" . $filter['yacht_length'] . "</option>";
                                                    }
                                                }
                                                ?>
                                                <!--<option value="">Yacht Length</option>-->
                                                <option value="40">30 - 40 ft</option>
                                                <option value="50">40 - 50 ft</option>
                                                <option value="60">50 - 60 ft</option>
                                                <option value="70">60 - 70 ft</option>
                                                <option value="80">70 - 80 ft</option>
                                                <option value="90">80 - 90 ft</option>
                                                <option value="100">90 - 100 ft</option>
                                                <option value="1000">Above 100 ft</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <div class="field-icon"><span class="flaticon-price"></span></div>
                                            <input type="text" name="price" placeholder="Enter Price" <?php
                                                                                                        if (isset($filter)) {
                                                                                                            if ($filter['price'] == NULL) {
                                                                                                                echo "value=''";
                                                                                                            } else {
                                                                                                                echo "value='" . $filter['price'] . "'";
                                                                                                            }
                                                                                                        }
                                                                                                        ?>
                                                oninput="checkNumber1(this)">
                                            <span id="error1" class="text-danger"></span>
                                        </div>
                                    </div>

                                    <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn"><span class="btn-title"><span
                                                    class="icon flaticon-magnifying-glass"></span> Find Your
                                                Yacht</span></button>
                                    </div>
                                </div>
                                <input type="hidden" id="sortOrder" name="sortOrder" value="">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="lower-filter-row clearfix">
                <div class="results-count">
                    <!-- <span>15 Results Found</span> -->
                </div>
                <!--Filter-->
                <div class="filters clearfix">
                    <div class="default-form clearfix">
                        <div class="filter-box">
                            <div class="form-group">
                                <div class="field-inner">

                                    <select id="sortOrderfrom" name="sortOrderfrom">
                                        <option value="">Sort By:</option>
                                        <option value="lowToHigh" <?= ($filter['sortOrder'] ?? '') == 'lowToHigh' ? 'selected' : '' ?>>Price: Low to High</option>
                                        <option value="highToLow" <?= ($filter['sortOrder'] ?? '') == 'highToLow' ? 'selected' : '' ?>>Price: High to Low</option>
                                    </select>

                                    <script>
                                        document.getElementById('sortOrderfrom').addEventListener('change', function() {
                                            var selectedValue = this.value;
                                            document.getElementById('sortOrder').value = selectedValue;
                                            document.getElementById('FilterForm').submit();
                                        });
                                    </script>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="results-row">

                <?php
                // print_r($filter);
                if ($yachtList == NULL) {
                ?>

                    <center>
                        <img src="<?= base_url() ?>yachtProject/us/images/coming-soon.jpg" alt="coming-soon">
                    </center>


                <?php
                } ?>
                <div id="yachtList" class="row clearfix">
                    <?php foreach ($yachtList as $abc): ?>
                        <div class="rental-block col-lg-4 col-md-6 col-sm-12" data-price="<?= $abc['price']; ?>">
                            <a href="<?= base_url('yacht-detail' . $abc['id']) ?>">
                                <div class="inner-box">

                                    <div class="image-box" style="height: 230px;">
                                        <figure class="image">

                                            <img
                                                src="<?= base_url('uploads/thumbnail/' . $abc['thumb-img']) ?>" alt=""
                                                title="" style="height: 230px; object-fit: content;">
                                        </figure>
                                        <div class="price-box">
                                            <div class="price">$<?= $abc['price']; ?></div>
                                            <div class="cycle">Hour</div>
                                        </div>

                                    </div>

                                    <div class="title-box">
                                        <div class="more-link-box">
                                            <a href="<?= base_url('yacht-detail' . $abc['id']) ?>" class="theme-btn">View
                                                Details</a>
                                        </div>
                                        <h4><a href="<?= base_url('yacht-detail' . $abc['id']) ?>"><?= $abc['hname']; ?></a>
                                        </h4>
                                        <div class="info"><?= $abc['yacht_length']; ?> ft/ <?= $abc['size']; ?> /
                                            <?= $abc['builder']; ?>
                                        </div>
                                    </div>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li><span class="icon flaticon-calendar"></span> Cabin: <?= $abc['cabin']; ?></li>
                                            <li><span class="icon flaticon-user"></span> Guest: <?= $abc['guest']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination Links -->
                <div class="pagination-box text-center">
                    <ul class="styled-pagination">
                        <?= $pager->only(['location', 'yacht_length', 'booking_date', 'yacht_type', 'guest', 'cabin', 'price', 'sortOrder'])->links() ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- MAIN End -->



    <!-- Custom JS -->
    <script type="text/javascript">
        function checkNumber1(input) {
            var isValid = /^\d+$/.test(input.value);

            if (!isValid) {
                document.getElementById("error1").innerText = "Please enter numbers only.";
                input.value = '';
                document.getElementById("submitBtn").disabled = true;
            } else if (parseInt(input.value) > 10000) {
                document.getElementById("error1").innerText = "Please enter numbers only up to 10,000.";
                document.getElementById("submitBtn").disabled = true;
            } else {
                document.getElementById("error1").innerText = "";
                document.getElementById("submitBtn").disabled = false;
            }
        }

        function checkNumber2(input) {
            var isValid = /^\d+$/.test(input.value);

            if (!isValid) {
                document.getElementById("error2").innerText = "Please enter numbers only.";
                input.value = '';
                document.getElementById("submitBtn").disabled = true;
            } else if (parseInt(input.value) > 10000) {
                document.getElementById("error2").innerText = "Please enter numbers only up to 10,000.";
                document.getElementById("submitBtn").disabled = true;
            } else {
                document.getElementById("error2").innerText = "";
                document.getElementById("submitBtn").disabled = false;
            }
        }
    </script>


    <!-- FOOTER Start -->
    <?php
    include 'footer.php';
    ?>
    <!-- FOOTER End -->
</body>

</html>