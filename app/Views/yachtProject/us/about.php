<?php
include 'header.php';
?>

<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="flaticon-targeting-cross"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="#">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Finance</a></li>
                <li><a href="#">Idea</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Growth</a></li>
                <li><a href="#">Plan</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Hidden Navigation Bar -->
<section class="hidden-bar right-align">

    <div class="hidden-bar-closer">
        <button><span class="flaticon-letter-x"></span></button>
    </div>

    <!-- Hidden Bar Wrapper -->
    <div class="hidden-bar-wrapper">

        <div class="logo">
            <a href="<?= base_url('/') ?>"><img src="images/logo.png" alt="" /></a>
        </div>
        <div class="content-box">
            <h3>Get In Touch</h3>
            <div class="text">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts..</div>
            <a href="about.php" class="theme-btn btn-style-two"><div class="btn-title">Consultation</div></a>
        </div>

        <div class="contact-info">
            <h2>Contact Info</h2>
            <ul class="list-style-two">
                <li><span class="icon fa fa-map-marker-alt"></span>Book my yachts 26, Old Brozon Mall, New york NY 10005</li>
                <li><span class="icon fa fa-phone-alt"></span><a href="tel:555626-0234">555 626-0234</a></li>
                <li><span class="icon fa fa-envelope-open"></span> <a href="mailto:support@bookmyyachts.us">support@Book my yachts.com</a></li>
                <li><span class="icon fa fa-clock"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
            </ul>
        </div>
    </div><!-- / Hidden Bar Wrapper -->

</section>
<!-- End / Hidden Bar -->

<!--Page Title-->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(<?= base_url('yachtProject/us/'); ?>images/background/banner-1.jpg);"></div>

    <div class="banner-inner" style="background-color: #00000073;">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>About Us</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url('/')?>">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Welcome Section-->
<section class="welcome-section">
    <div class="auto-container">
        <div class="title-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <h4>Hello!</h4>
            <h2>Welcome to <strong>Book my yachts</strong></h2>
            <div class="text">
               At Book My Yachts, we stand at the helm of delivering unparalleled maritime adventures, setting sail towards extraordinary voyages and unforgettable moments. Our dedication to curating exceptional experiences on the water is at the heart of everything we do.
           </div>
       </div>
       <div class="image-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <img src="<?= base_url('yachtProject/us/'); ?>../assets/bmy/yachts/563371.jpg" alt="">
    </div>

    <div class="event-carousel-box">
        <div class="event-carousel owl-theme owl-carousel">
            <!--Event Block-->
            <div class="event-block">
                <div class="inner">
                    <div class="date">June 13</div>
                    <h4><a href="#">Started for Yacht Lovers</a></h4>
                    <div class="text">Righteous indignation & dislike men who are beguiled all demoralized.</div>
                    <div class="year">1994</div>
                </div>
            </div>
            <!--Event Block-->
            <div class="event-block">
                <div class="inner">
                    <div class="date">September 14</div>
                    <h4><a href="#">Tour for With 500 Travellers</a></h4>
                    <div class="text">The charms of pleasure of the moment, so that they cannot foresee.</div>
                    <div class="year">1994</div>
                </div>
            </div>
            <!--Event Block-->
            <div class="event-block">
                <div class="inner">
                    <div class="date">December 25</div>
                    <h4><a href="#">Christmas Spacial Tour</a></h4>
                    <div class="text">Who are so beguiled and demoralized by pleasure of the moment.</div>
                    <div class="year">1994</div>
                </div>
            </div>
            <!--Event Block-->
            <div class="event-block">
                <div class="inner">
                    <div class="date">June 13</div>
                    <h4><a href="#">Started for Yacht Lovers</a></h4>
                    <div class="text">Righteous indignation & dislike men who are beguiled all demoralized.</div>
                    <div class="year">1995</div>
                </div>
            </div>
            <!--Event Block-->
            <div class="event-block">
                <div class="inner">
                    <div class="date">September 14</div>
                    <h4><a href="#">Tour for With 500 Travellers</a></h4>
                    <div class="text">The charms of pleasure of the moment, so that they cannot foresee.</div>
                    <div class="year">1995</div>
                </div>
            </div>
            <!--Event Block-->
            <div class="event-block">
                <div class="inner">
                    <div class="date">December 25</div>
                    <h4><a href="#">Christmas Spacial Tour</a></h4>
                    <div class="text">Who are so beguiled and demoralized by pleasure of the moment.</div>
                    <div class="year">1995</div>
                </div>
            </div>
            <!--Event Block-->
            <div class="event-block">
                <div class="inner">
                    <div class="date">June 13</div>
                    <h4><a href="#">Started for Yacht Lovers</a></h4>
                    <div class="text">Righteous indignation & dislike men who are beguiled all demoralized.</div>
                    <div class="year">1996</div>
                </div>
            </div>
            <!--Event Block-->
            <div class="event-block">
                <div class="inner">
                    <div class="date">September 14</div>
                    <h4><a href="#">Tour for With 500 Travellers</a></h4>
                    <div class="text">The charms of pleasure of the moment, so that they cannot foresee.</div>
                    <div class="year">1996</div>
                </div>
            </div>
            <!--Event Block-->
            <div class="event-block">
                <div class="inner">
                    <div class="date">December 25</div>
                    <h4><a href="#">Christmas Spacial Tour</a></h4>
                    <div class="text">Who are so beguiled and demoralized by pleasure of the moment.</div>
                    <div class="year">1996</div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<style>
    img.aboutimg {
        padding: 20px;
    }
</style>
<!--About Section-->
<section class="about-section-three">
    <div class="bg-image-layer" style="background-image: url(<?= base_url('yachtProject/us/'); ?>images/background/image-10.jpg);"></div>
    <div class="image-box-left wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="image-layer" >
            <img src="<?= base_url('yachtProject/us/'); ?>../assets/bmy/geio-tischler-zTiYT7HHzAE-unsplash.jpg" alt="About Img" class="aboutimg" style="">
        </div>
    </div>
    <div class="auto-container">
        <div class="content-outer clearfix">
            <div class="content-inner">
                <h2>“Experience luxury yachting with the world's top charter services”</h2>
                <div class="info">
                    <div class="name">Hemant Pardhi</div>
                    <div class="designation">CEO &amp; Founder</div>
                </div>
                <div class="signature">
                    <img src="<?= base_url('yachtProject/us/'); ?>images/resource/hsignature.png" alt="signature" width="30%">
                </div>
            </div>
        </div>

    </div>
</section>

<!--Features Section-->
<section class="features-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Feature-->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="octagonWrap">
                            <div class="octagon"></div>
                        </div>
                        <span class="icon flaticon-scuba"></span>
                    </div>
                    <div class="content">
                        <h4>Quality & <br>Best Equipments</h4>
                        <div class="text">Unrivaled excellence with premium yacht equipment setting the standard for quality at sea.</div>
                        <div class="link-box">
                            <a href="<?= base_url('us/about')?>" class="default-link">
                                <span class="icon flaticon-logout"></span> <span class="link-text">More About Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature-->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="octagonWrap">
                            <div class="octagon"></div>
                        </div>
                        <span class="icon flaticon-boat-race"></span>
                    </div>
                    <div class="content">
                        <h4>Professional & <br>Expert Instructors</h4>
                        <div class="text">Navigate with confidence under the guidance of our seasoned and professional yacht instructors</div>
                        <div class="link-box">
                            <a href="<?= base_url('us/about')?>" class="default-link">
                                <span class="icon flaticon-logout"></span> <span class="link-text">More About Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature-block col-lg-4 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="octagonWrap">
                            <div class="octagon"></div>
                        </div>
                        <span class="icon flaticon-wallet"></span>
                    </div>
                    <div class="content">
                        <h4>Value for <br>Spending Money</h4>
                        <div class="text">Experience the epitome of value as your every penny unfolds into unforgettable moments at sea</div>
                        <div class="link-box">
                            <a href="<?= base_url('us/about')?>" class="default-link">
                                <span class="icon flaticon-logout"></span> <span class="link-text">More About Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="subscribe-section style-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
    <div class="auto-container">
        <div class="inner">
            <div class="title">
                <h4>Subscribe to our newsletter</h4>
                <div class="subtitle">Subscribe & Get Updates in Your Inbox </div>
            </div>
            <div class="default-form subscribe-form-two">
                <form method="post" id="myForm" onsubmit="return validateForm()" action="<?= base_url('about-subscribe'); ?>">

                    <?= csrf_field(); ?>
                    <div class="row clearfix">        
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="name" placeholder="Your Name" id="userValid" oninput="userValidation()" required>
                                <span id="userError" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" id="emailInput" name="email" placeholder="Your Email" required>
                                <span id="emailError" class="text-danger"></span>
                            </div>
                        </div>

                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                            <input type="submit" name="submit" value="SUBSCRIBE NOW" id="submitBtn" disabled>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<style type="text/css">
    #submitBtn{
        font-size: 13px;
        line-height: 28px;
        color: #ffffff;
        font-weight: 600;
        padding: 12px 45px;
        background: #d5ae82;
        border-radius: 0px;
        width: 100%;
    }

    #submitBtn:hover{
        background-color: black;
    }
</style>
<!-- subscribe form script -->

<!-- script here... -->
<script>
    function validateForm() {
        var name = document.getElementById("userValid").value;
        var isValid = true;

        document.getElementById("userError").innerHTML = "";

        var userDigit = /\d/.test(name);
        var userSpecialChar = /[@$!*]/.test(name);

        if (userDigit || userSpecialChar || name.trim() === "") {
            document.getElementById("userError").innerHTML = "Please enter a valid username";
            isValid = false;
        }
    }

    function userValidation() {
        var name = document.getElementById('userValid').value;
        var userError = document.getElementById('userError');

        var userDigit = /\d/.test(name);
        var userSpecialChar = /[@$!*]/.test(name);

        if (userDigit || userSpecialChar || name.trim() === "") {
            userError.textContent = "Please enter a valid username";
            document.getElementById("myForm").querySelector('input[type="submit"]').disabled = true;
        } else {
            userError.textContent = "";
            document.getElementById("myForm").querySelector('input[type="submit"]').disabled = false;
        }
    }
</script>

<script type="text/javascript">
    function isValidEmail(email) {
        if (email.indexOf('@') === -1 || email.indexOf('.') === -1) {
            return false;
        }
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@.]+$/;
        return emailRegex.test(email) && email.split('.').length === 2;
    }

    document.getElementById("emailInput").addEventListener("input", function() {
        var email = this.value.trim();
        var emailError = document.getElementById("emailError");
        var submitButton = document.getElementById("submitButton");

        if (email === "") {
            emailError.textContent = "Email is required";
            submitButton.disabled = true;
        } else if (!isValidEmail(email)) {
            emailError.textContent = "Please enter a valid email address";
            submitButton.disabled = true;
        } else {
            emailError.textContent = "";
            submitButton.disabled = false;
        }
    });

    document.getElementById("myForm").addEventListener("submit", function(event) {
        var email = document.getElementById("emailInput").value.trim();
        if (!isValidEmail(email)) {
            event.preventDefault();
            document.getElementById("emailError").textContent = "Invalid email address";
        }
    });
</script>


</body>

<?php
include 'footer.php';
?>
</html>