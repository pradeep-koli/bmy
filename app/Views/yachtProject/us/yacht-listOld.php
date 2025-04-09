<?php
include 'header.php';
?>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>

<!--Page Title-->
<section class="page-banner" >
    <div class="image-layer" style="background-image:url(<?= base_url('yachtProject/us/'); ?>images/background/banner-1.jpg);" >
    </div>

    <div class="banner-inner" style="background-color: #00000073;">
        <div class="auto-container" >
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
                        <form method="post" action="<?= base_url('us/yacht-list')?>">
                            <?= csrf_field(); ?>

                            <div class="row clearfix">
                                <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <div class="field-icon"><span class="flaticon-calendar"></span></div>

                                        <input type="text" name="booking_date"  id="datepicker" placeholder="booking date">

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
                                            <select name="guest" id="guest" onchange="convertIfSelected(this, 'guestSection1')" style="padding-top: 18px; margin-left: 26px; border: none; width: 85%;">
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

                                <script>
                                    function convertIfSelected(selectElement, containerId) {
                                        if (selectElement.value === "convert") {
                                            var container = document.getElementById(containerId);
                                            var input = document.createElement("input");
                                            input.type = "text";
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
                                            <select class="form-select" id="guestDropdown2" onchange="convertIfSelected(this, 'guestSection2')" style="padding-top: 18px; margin-left: 26px; border: none; width: 85%;">
                                                <option value="Select">CABINS</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5+">5+</option>                        
                                                <option value="convert">Custom</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <div class="field-icon"><span class="flaticon-double-arrow"></span></div>
                                        <select name="yacht_length" class="custom-select-box">
                                            <option value="">Select Length</option>
                                            <option value="40 feet">40 feet</option>
                                            <option value="60 feet">60 feet</option>
                                            <option value="70 feet">70 feet</option>
                                            <option value="80 feet">80 feet</option>
                                            <option value="100 feet">100 feet</option>
                                            <option value="150 feet">150 feet</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <div class="field-icon"><span class="flaticon-price"></span></div>
                                        <input type="text" name="field-name" placeholder="Minimum Price"  value="" oninput="checkNumber1(this)">
                                    </div>
                                </div>

                                <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <div class="field-icon invert"><span class="flaticon-price"></span></div>
                                        <input type="text" name="field-name" placeholder="Maximum Price"  value="" >
                                    </div>
                                </div>

                                <div class="form-group col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <button type="submit" class="theme-btn"><span class="btn-title"><span class="icon flaticon-magnifying-glass"></span> Find Your Yacht</span></button>
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
                <?php foreach ($yachtList as $abc) : ?>

                    <div class="rental-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box" style="height: 230px;">
                                <figure class="image">
                                    <a href="<?= base_url('us/yacht-detail'.$abc['id'])?>"><img src="<?= base_url('uploads/thumbnail/'.$abc['thumb-img']) ?>" alt="" title="" style="height: 230px; object-fit: cover;"></a>
                                </figure>
                                <div class="price-box">
                                    <div class="price">$<?php echo $abc['price']; ?></div>
                                    <div class="cycle">Per Day</div>
                                </div>
                            </div>

                            <div class="title-box">
                                <div class="more-link-box">
                                    <a href="<?= base_url('us/yacht-detail'.$abc['id'])?>" class="theme-btn">View Details</a>
                                </div>
                                <h4><a href="<?= base_url('us/yacht-detail')?>"><?php echo $abc['yacht_type'];?></a></h4>
                                <div class="info"><?php echo $abc['yacht_length'];?> / <?php echo $abc['size'];?> / <?php echo $abc['builder'];?></div>
                            </div>
                            <div class="meta-info">
                                <ul class="clearfix">
                                    <li><span class="icon flaticon-calendar"></span> Cabin: <?php echo $abc['cabin'];?></li>
                                    <li><span class="icon flaticon-user"></span> Guest:  <?php echo $abc['guest'];?></li>
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

<?php
include 'footer.php';
?>
