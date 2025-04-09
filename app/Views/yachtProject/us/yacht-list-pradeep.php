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
                            <form method="post" action="<?= base_url('us/yacht-list') ?>">
                                <?= csrf_field(); ?>

                                <div class="row clearfix">
                                    <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <div class="field-icon"><span class="flaticon-calendar"></span></div>

                                            <input type="text" name="booking_date" id="datepicker"
                                                placeholder="booking date">

                                            <script>
                                                $(function () {
                                                    var today = new Date();
                                                    $('#datepicker').datepicker({
                                                        minDate: today,
                                                        maxDate: '+2y',
                                                        dateFormat: 'yy-mm-dd',
                                                        beforeShow: function (input, inst) {
                                                            setTimeout(function () {
                                                                inst.dpDiv.find('.ui-datepicker-current').trigger('click');
                                                            }, 0);
                                                        },
                                                        beforeShowDay: function (date) {
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
                                            <select name="yacht_type" class="custom-select-box">
                                                <option value="">Select Yacht</option>
                                                <option value="Motor Yachts">Motor Yachts</option>
                                                <option value="Luxury Yachts">Luxury Yachts</option>
                                                <option value="Classic Yachts">Classic Yachts</option>
                                                <option value="Catamarans">Catamarans</option>
                                                <option value="Trawler Yachts">Trawler Yachts</option>
                                                <option value="Fishing Yachts">Fishing Yachts</option>
                                                <!-- no record database -->
                                                <option value="Sailing Yachts">Sailing Yachts</option>
                                                <option value="Trimarans">Trimarans</option>
                                                <option value="Explorer Yachts">Explorer Yachts</option>
                                                <option value="Sports Yachts">Sports Yachts</option>
                                                <option value="Performance Yachts">Performance Yachts</option>
                                                <option value="Charter Yachts">Charter Yachts</option>
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
                                                    <option value="">Select Guest</option>
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

                                    <!--                             <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <div class="field-icon"><span class="flaticon-user-5"></span></div>
                                    <div id="guestSection1">
                                        <select name="cabin" id="guest"
                                        onchange="convertIfSelected(this, 'guestSection1')"
                                        style="padding-top: 18px; margin-left: 26px; border: none; width: 85%;">
                                        <option value="">Select Cabin</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5+</option>
                                        <option value="convert">custom</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->

                                    <script>
                                        function convertIfSelectedguest(selectElement, containerId) {
                                            if (selectElement.value === "convert") {
                                                var container = document.getElementById(containerId);
                                                var input = document.createElement("input");
                                                input.type = "text";
                                                input.name = "guest";
                                                input.style.cssText = 'background-color: transparent; width:100%;  border-radius: 5px; padding: 16px 16px 12.8px;  margin-left: 40px; border: none; outline:none';
                                                input.addEventListener('input', function (event) {
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
                                                input.addEventListener('input', function (event) {
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
                                                <select class="form-select" name="cabin" id="guestDropdown2"
                                                    onchange="convertIfSelectedcabin(this, 'guestSection2')"
                                                    style="padding-top: 18px; margin-left: 26px; border: none; width: 85%;">
                                                    <option value="">Select Cabin</option>
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
                                                <option value="">Select Length</option>
                                                <option value="40">40 feet</option>
                                                <option value="60">60 feet</option>
                                                <option value="70">70 feet</option>
                                                <option value="80">80 feet</option>
                                                <option value="100">100 feet</option>
                                                <option value="150">150 feet</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <div class="field-icon"><span class="flaticon-price"></span></div>
                                            <input type="text" name="price" placeholder="Enter Price" value=""
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
                                    <select id="sortSelect" onchange="sortProducts()">
                                        <option value="">Filter</option>
                                        <option value="lowToHigh">Price Low to High</option>
                                        <option value="highToLow">Price High to Low</option>
                                        <option value="ascending">Ascending</option>
                                        <option value="descending">Descending</option>
                                    </select>

                                    <script>
                                        function sortProducts() {
                                            var sortBy = document.getElementById('sortSelect').value;
                                            window.location.href = "<?= base_url('us/yacht-list') ?>" + sortBy;
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="results-row">
                <div class="row clearfix">
                    <!--Rental Block-->
                    <?php if ($yachtList == NULL) {
                        ?>

                        <center>
                            <h1>Result Not Found</h1>
                        </center>


                        <?php
                    } ?>

                    <?php foreach ($yachtList as $abc): ?>

                        <div class="rental-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box" style="height: 230px;">
                                    <figure class="image">
                                        <a href="<?= base_url('us/yacht-detail' . $abc['id']) ?>"><img
                                                src="<?= base_url('uploads/thumbnail/' . $abc['thumb-img']) ?>" alt=""
                                                title="" style="height: 230px; object-fit: cover;"></a>
                                    </figure>
                                    <div class="price-box">
                                        <div class="price">$<?php echo $abc['price']; ?></div>
                                        <div class="cycle">Per Day</div>
                                    </div>
                                </div>

                                <div class="title-box">
                                    <div class="more-link-box">
                                        <a href="<?= base_url('us/yacht-detail' . $abc['id']) ?>" class="theme-btn">View
                                            Details</a>
                                    </div>
                                    <h4><a href="<?= base_url('us/yacht-detail') ?>"><?php echo $abc['hname']; ?></a>
                                    </h4>
                                    <div class="info"><?php echo $abc['yacht_length']; ?> / <?php echo $abc['size']; ?> /
                                        <?php echo $abc['builder']; ?>
                                    </div>
                                </div>
                                <div class="meta-info">
                                    <ul class="clearfix">
                                        <li><span class="icon flaticon-calendar"></span> Cabin: <?php echo $abc['cabin']; ?>
                                        </li>
                                        <li><span class="icon flaticon-user"></span> Guest: <?php echo $abc['guest']; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination Links -->
                <div class="pagination-box text-center">
                    <ul class="styled-pagination">
                        <li><?= $pager->links() ?></li>
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
            }
            else if (parseInt(input.value) > 10000) {
                document.getElementById("error1").innerText = "Please enter numbers only up to 10,000.";
                document.getElementById("submitBtn").disabled = true;
            }
            else {
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
            }
            else if (parseInt(input.value) > 10000) {
                document.getElementById("error2").innerText = "Please enter numbers only up to 10,000.";
                document.getElementById("submitBtn").disabled = true;
            }
            else {
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