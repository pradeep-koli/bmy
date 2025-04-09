<?php
include 'header.php';
?>

<style>
    .rental-block .image-box img {
        height: 250px;
    }

    .gallery-item {
        cursor: pointer;
    }

    .lightbox {
        display: none;
        position: fixed;
        z-index: 9999;
        padding-top: 60px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .lightbox-content {
        margin: auto;
        display: block;
        max-width: 80%;
        max-height: 80%;
    }

    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: white;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 40px;
        transition: 0.3s;
        user-select: none;
    }

    .prev {
        left: 0;
    }

    .next {
        right: 0;
    }

    .prev:hover,
    .next:hover {
        color: #bbb;
    }

    .info {
        text-shadow: 0px 2px 20px #000000
    }

    h2 {
        text-shadow: 2px 2px 4px #000000;
    }

    .rental-block .image-box img {
        height: 250px;
    }
</style>
<!--Page Title-->
<section class="secondary-breadcrumb">
    <div class="auto-container">
        <ul class="bread-crumb clearfix">
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li><a href="<?= base_url('us/yacht-list'); ?>">Yatch</a></li>
            <li><a>Rent</a></li>
        </ul>
    </div>
</section>

<!--yacht Details Section-->
<section class="yacht-details">
    <div class="auto-container">
        <div class="main-image-box">
            <figure class="image">
                <img src="<?= base_url('uploads/thumbnail/' . $record['thumb-img']) ?>"
                style="height: 500px; object-fit: cover;">
            </figure>

            <!-- to set the images properly -->

            <div class="caption-box">
                <h2><?php echo $record['hname']; ?></h2>
                <div class="info"><?php echo $record['yacht_length']; ?> / <?php echo $record['size'] ?> /
                    <?php echo $record['builder']; ?>
                </div>
            </div>
        </div>
        <div class="basic-info clearfix">
            <div class="left-info">
                <div class="icon"><span class="flaticon-gas"></span></div>
                <div class="p-title">Asking Price</div>
                <div class="">
                    <h3><?php echo $record['price']; ?>/1 hours</h3>
                </div>
            </div>

            <div class="down-link">
                <a href="<?= base_url('us/booking-page' . $record['id']) ?>" class="theme-btn btn-style-one">
                    <div class="btn-title" style="border-radius: 15px;">Yacht Booking</div>
                </a>
            </div>
        </div>

        <div id="lightbox" class="lightbox">
            <span class="close">&times;</span>
            <img class="lightbox-content" id="lightboxImage">
            <a class="prev" id="prevBtn">&#10094;</a>
            <a class="next" id="nextBtn">&#10095;</a>
        </div>
        <!-- gallary end -->

        <div class="row clearfix mt-5">
            <div class="content-column col-xl-7 col-lg-6 col-md-12 cl-sm-12">
                <div class="inner">
                    <div class="text-block">
                        <h4>About Yacht</h4>
                        <p><?php echo $record['about']; ?></p>
                        <h4>Onboard Facilities</h4>
                        <p>We have provide incredible facilities in your sotavento yacht. </p>
                    </div>

                    <div class="scroller-box">
                        <div class="scroller">

                            <div class="feature">
                                <div class="feature-inner">
                                    <div class="icon"><span class="flaticon-kitchen"></span></div>
                                    <h5>Modern Kitchen</h5>
                                    <div class="text">Certain circumstances and owing</div>
                                </div>
                            </div>

                            <div class="feature">
                                <div class="feature-inner">
                                    <div class="icon"><span class="flaticon-swimming-pool"></span></div>
                                    <h5>Swimming Pool</h5>
                                    <div class="text">Untrammelled and when nothing prevents</div>
                                </div>
                            </div>

                            <div class="feature">
                                <div class="feature-inner">
                                    <div class="icon"><span class="flaticon-video"></span></div>
                                    <h5>Private Cinemas</h5>
                                    <div class="text">Frequently occur that pleasures have to</div>
                                </div>
                            </div>

                            <div class="feature">
                                <div class="feature-inner">
                                    <div class="icon"><span class="flaticon-treadmill"></span></div>
                                    <h5>Gymnasium</h5>
                                    <div class="text">Duty or the obligations of business</div>
                                </div>
                            </div>

                            <div class="feature">
                                <div class="feature-inner">
                                    <div class="icon"><span class="flaticon-swimming-pool"></span></div>
                                    <h5>Swimming Pool</h5>
                                    <div class="text">Untrammelled and when nothing prevents</div>
                                </div>
                            </div>

                            <div class="feature">
                                <div class="feature-inner">
                                    <div class="icon"><span class="flaticon-kitchen"></span></div>
                                    <h5>Modern Kitchen</h5>
                                    <div class="text">Certain circumstances and owing</div>
                                </div>
                            </div>

                            <div class="feature">
                                <div class="feature-inner">
                                    <div class="icon"><span class="flaticon-video"></span></div>
                                    <h5>Private Cinemas</h5>
                                    <div class="text">Frequently occur that pleasures have to</div>
                                </div>
                            </div>

                            <div class="feature">
                                <div class="feature-inner">
                                    <div class="icon"><span class="flaticon-treadmill"></span></div>
                                    <h5>Gymnasium</h5>
                                    <div class="text">Duty or the obligations of business</div>
                                </div>
                            </div>

                            <div class="feature">
                                <div class="feature-inner">
                                    <div class="icon"><span class="flaticon-swimming-pool"></span></div>
                                    <h5>Swimming Pool</h5>
                                    <div class="text">Untrammelled and when nothing prevents</div>
                                </div>
                            </div>

                            <div class="feature">
                                <div class="feature-inner">
                                    <div class="icon"><span class="flaticon-kitchen"></span></div>
                                    <h5>Modern Kitchen</h5>
                                    <div class="text">Certain circumstances and owing</div>
                                </div>
                            </div>

                            <div class="feature">
                                <div class="feature-inner">
                                    <div class="icon"><span class="flaticon-video"></span></div>
                                    <h5>Private Cinemas</h5>
                                    <div class="text">Frequently occur that pleasures have to</div>
                                </div>
                            </div>

                            <div class="feature">
                                <div class="feature-inner">
                                    <div class="icon"><span class="flaticon-treadmill"></span></div>
                                    <h5>Gymnasium</h5>
                                    <div class="text">Duty or the obligations of business</div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="specs-column col-xl-5 col-lg-6 col-md-12 cl-sm-12">
                <div class="inner">
                    <div class="title-box clearfix">
                        <h4>Specification</h4>
                    </div>

                    <div class="features-list">
                        <ul>
                            <li class="clearfix"><span class="ttl">Yacht Type</span><span
                                class="dtl"><?php echo $record['yacht_type']; ?></span></li>
                                <li class="clearfix"><span class="ttl">Yacht Name</span><span
                                    class="dtl"><?php echo $record['hname']; ?></span></li>

                                    <li class="clearfix"><span class="ttl">Engine</span><span
                                        class="dtl"><?php echo $record['engine']; ?></span></li>

                                        <li class="clearfix"><span class="ttl">Max Speed</span><span
                                            class="dtl"><?php echo $record['max_speed']; ?> Knots</span></li>

                                            <li class="clearfix"><span class="ttl">Builder</span><span
                                                class="dtl"><?php echo $record['builder']; ?></span></li>

                                                <li class="clearfix"><span class="ttl">Year Of Build</span><span
                                                    class="dtl"><?php echo $record['year_of_build']; ?></span></li>

                                                    <li class="clearfix"><span class="ttl">yacht Length</span><span
                                                        class="dtl"><?php echo $record['yacht_length']; ?> Ft</span></li>

                                                        <li class="clearfix"><span class="ttl">Guest</span><span
                                                            class="dtl"><?php echo $record['guest']; ?> Max Capacity</span></li>

                                                            <li class="clearfix"><span class="ttl">Cabin</span><span
                                                                class="dtl"><?php echo $record['cabin']; ?></li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <!-- similar yacht start-->
                                    <section>
                                        <div class="auto-container mb-5">
                                            <div class="results-row">
                                                <div class="title-box clearfix py-2">
                                                    <h3 style="color: black">Similar Yachts You May Enjoy:</h3>
                                                </div>
                                                <div class="row clearfix">
                                                    <!-- similar yacht not match code start -->
                                                    <?php
                                                    if ($similar == NULL) {
                                                        ?>
                                                        <center>
                                                            <img src="<?= base_url() ?>yachtProject/us/images/coming-soon.jpg" alt="coming-soon">
                                                        </center>
                                                        <?php
                                                    } ?>
                                                    <!-- similar yacht not match code end -->

                                                    <!-- item start -->
                                                    <?php

                                                    $limit = 5;
                                                    $count = 0;

                                                    foreach ($similar as $abc) {

                                                        if ($count >= $limit) {
                                                            break;
                                                        }

                                                        ?>

                                                        <div class="rental-block col-lg-4 col-md-6 col-sm-12 my-4">
                                                            <div class="inner-box">
                                                                <div class="image-box">
                                                                    <figure class="image">
                                                                        <a href="<?= base_url('us/yacht-detail' . $abc['id']) ?>"><img
                                                                            src="<?= base_url('uploads/thumbnail/' . $abc['thumb-img']) ?>" alt="thumbnail"
                                                                            title="thumbnail" style="object-fit: cover"></a>
                                                                        </figure>
                                                                        <div class="price-box">
                                                                            <div class="price">$<?= $abc['price']; ?></div>
                                                                            <div class="cycle">Per Day</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-box">
                                                                        <div class="more-link-box">
                                                                            <a href="<?= base_url('us/yacht-detail' . $abc['id']) ?>" class="theme-btn">View
                                                                            Details</a>
                                                                        </div>
                                                                        <h4><a href="yacht-detail.php"><?= $abc['hname']; ?></a></h4>
                                                                        <div class="info"><?= $abc['yacht_length']; ?> ft / <?= $abc['size']; ?> /
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
                                                            </div>
                                                            <?php

                                                            $count++;
                                                        }
                                                        ?>
                                                        <!-- item end -->
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- similar yacht end-->

                                        <!-- its working -->
                                        <!-- insert the new record -->
                                        <section class="yacht-featured-images">
                                            <div class="images-container">
                                                <div class="outer-box clearfix">
                                                    <!--Featured Image Block-->
                                                    <?php

                                                    $limit = 5;
                                                    $count = 0;

                                                    foreach ($booking as $bookings) {

                                                        if ($count >= $limit) {
                                                            break;
                                                        }

                                                        ?>
                                                        <div class="yacht-featured-image">
                                                            <div class="inner-box">
                                                                <div class="image-layer"
                                                                style="object-fit: cover; background-image: url(<?= base_url('uploads/mainContent/' . $bookings['images']) ?>">
                                                            </div>

                                                            <div class="hover-box">
                                                                <div class="hover-inner">
                                                                    <h3><a><?php echo $record['yacht_type'] ?></a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php

                                                    $count++;
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </section>

                                    <script type="text/javascript">
                                        document.addEventListener('DOMContentLoaded', () => {
                                            const images = document.querySelectorAll('.gallery-item');
                                            const lightbox = document.getElementById('lightbox');
                                            const lightboxImage = document.getElementById('lightboxImage');
                                            const closeBtn = document.querySelector('.close');
                                            const prevBtn = document.getElementById('prevBtn');
                                            const nextBtn = document.getElementById('nextBtn');

                                            let currentIndex = 0;

                                            function showImage(index) {
                                                lightboxImage.src = images[index].src;
                                                currentIndex = index;
                                                lightbox.style.display = 'block';
                                            }

                                            images.forEach((image, index) => {
                                                image.addEventListener('click', () => {
                                                    showImage(index);
                                                });
                                            });

                                            closeBtn.addEventListener('click', () => {
                                                lightbox.style.display = 'none';
                                            });

                                            prevBtn.addEventListener('click', () => {
                                                currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
                                                showImage(currentIndex);
                                            });

                                            nextBtn.addEventListener('click', () => {
                                                currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
                                                showImage(currentIndex);
                                            });

        // Close lightbox when clicking outside of the image
                                            lightbox.addEventListener('click', (e) => {
                                                if (e.target === lightbox) {
                                                    lightbox.style.display = 'none';
                                                }
                                            });
                                        });

                                    </script>

                                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                                    <script src="scripts.js"></script>

                                    <?php include ('footer.php'); ?>

                                    </html>