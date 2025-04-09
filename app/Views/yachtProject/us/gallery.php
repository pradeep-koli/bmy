<?php
include 'header.php';
?>

<style>
    .image-box {
        width: 100%;
        height: 300px;
        overflow: hidden;
        position: relative;
    }

    .image-box .image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>


<!--Page Title-->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(<?= base_url('yachtProject/us/'); ?>images/background/banner-1.jpg);"></div>

    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Gallery</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url('/') ?>">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-section portfolio-masonry">
    <div class="auto-container">
        <!--Masonry Galery-->
        <div class="sortable-masonry filter-gallery">
            <div class="filters clearfix">
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="filter active" data-role="button" data-filter=".all">View All</li>
                </ul>
            </div>

            <div class="items-container row clearfix">
                <!--Gallery Item 1-->
                <div class="gallery-block-three masonry-item all lifestyle travel col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure class="image">
                                <a class="lightbox-image" href="yacht_gallery/01.jpg"><img src="<?= base_url() ?>yacht_gallery/01.jpg" alt=""></a>
                            </figure>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <div class="content">
                                        <h4><a href="#">Book My Yacht</a></h4>
                                        <div class="separator"><span class="dot"></span></div>
                                        <div class="category">Adventure</div>
                                    </div>
                                </div>
                                <div class="zoom-btn">
                                    <a class="lightbox-image zoom-link" href="<?= base_url() ?>yacht_gallery/01.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Item 2-->
                <div class="gallery-block-three masonry-item all cruising destination lifestyle travel col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure class="image">
                                <a class="lightbox-image" href="yacht_gallery/14.jpg"><img src="<?= base_url() ?>yacht_gallery/14.jpg" alt=""></a>
                            </figure>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <div class="content">
                                        <h4><a href="#">Book My Yacht</a></h4>
                                        <div class="separator"><span class="dot"></span></div>
                                        <div class="category">Adventure</div>
                                    </div>
                                </div>
                                <div class="zoom-btn">
                                    <a class="lightbox-image zoom-link" href="<?= base_url() ?>yacht_gallery/14.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Item3-->
                <div class="gallery-block-three masonry-item all adventure chartering destination col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure class="image">
                                <a class="lightbox-image" href="yacht_gallery/10.jpg"><img src="<?= base_url() ?>yacht_gallery/10.jpg" alt=""></a>
                            </figure>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <div class="content">
                                        <h4><a href="#">Book My Yacht</a></h4>
                                        <div class="separator"><span class="dot"></span></div>
                                        <div class="category">Adventure</div>
                                    </div>
                                </div>
                                <div class="zoom-btn">
                                    <a class="lightbox-image zoom-link" href="<?= base_url() ?>yacht_gallery/10.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Gallery Item4-->
                <div class="gallery-block-three masonry-item all chartering cruising destination col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure class="image">
                                <a class="lightbox-image" href="yacht_gallery/12.jpg"><img src="<?= base_url() ?>yacht_gallery/12.jpg" alt=""></a>
                            </figure>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <div class="content">
                                        <h4><a href="#">Book My Yacht</a></h4>
                                        <div class="separator"><span class="dot"></span></div>
                                        <div class="category">Adventure</div>
                                    </div>
                                </div>
                                <div class="zoom-btn">
                                    <a class="lightbox-image zoom-link" href="<?= base_url() ?>yacht_gallery/12.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Item5-->
                <div class="gallery-block-three masonry-item all cruising destination travel col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure class="image">
                                <a class="lightbox-image" href="yacht_gallery/11.jpg"><img src="<?= base_url() ?>yacht_gallery/11.jpg" alt=""></a>
                            </figure>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <div class="content">
                                        <h4><a href="#">Book My Yacht</a></h4>
                                        <div class="separator"><span class="dot"></span></div>
                                        <div class="category">Adventure</div>
                                    </div>
                                </div>
                                <div class="zoom-btn">
                                    <a class="lightbox-image zoom-link" href="<?= base_url() ?>yacht_gallery/11.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Item6-->
                <div class="gallery-block-three masonry-item all chartering cruising destination travel col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure class="image">
                                <a class="lightbox-image" href="yacht_gallery/13.jpg"><img src="<?= base_url() ?>yacht_gallery/13.jpg" alt=""></a>
                            </figure>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <div class="content">
                                        <h4><a href="#">Book My Yacht</a></h4>
                                        <div class="separator"><span class="dot"></span></div>
                                        <div class="category">Adventure</div>
                                    </div>
                                </div>
                                <div class="zoom-btn">
                                    <a class="lightbox-image zoom-link" href="<?= base_url() ?>yacht_gallery/13.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Item7-->
                <div class="gallery-block-three masonry-item all adventure chartering cruising destination lifestyle travel col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure class="image">
                                <a class="lightbox-image" href="yacht_gallery/07.jpg"><img src="<?= base_url() ?>yacht_gallery/07.jpg" alt=""></a>
                            </figure>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <div class="content">
                                        <h4><a href="#">Book My Yacht</a></h4>
                                        <div class="separator"><span class="dot"></span></div>
                                        <div class="category">Adventure</div>
                                    </div>
                                </div>
                                <div class="zoom-btn">
                                    <a class="lightbox-image zoom-link" href="<?= base_url() ?>yacht_gallery/07.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Item8-->
                <div class="gallery-block-three masonry-item all adventure chartering destination col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure class="image">
                                <a class="lightbox-image" href="yacht_gallery/15.jpg"><img src="<?= base_url() ?>yacht_gallery/15.jpg" alt=""></a>
                            </figure>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <div class="content">
                                        <h4><a href="#">Book My Yacht</a></h4>
                                        <div class="separator"><span class="dot"></span></div>
                                        <div class="category">Adventure</div>
                                    </div>
                                </div>
                                <div class="zoom-btn">
                                    <a class="lightbox-image zoom-link" href="<?= base_url() ?>yacht_gallery/15.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Item end-->

            </div>

        </div>

    </div>
    <div class="d-flex justify-content-center align-items-center">
        <a href="https://drive.google.com/drive/folders/1KSmk01d7OSqhIuMPGfY7X966SvdsEhU9?usp=sharing" class="theme-btn btn-style-one">
            <div class="btn-title rounded">View More</div>
        </a>
    </div>

</section>

</div>
<?php
include 'footer.php';
?>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon flaticon-back"></span></div>