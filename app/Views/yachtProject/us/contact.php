
<?php
include 'header.php';
?>
<body>
    <div class="page-wrapper">
        

        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="flaticon-targeting-cross"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="">
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

        <section class="hidden-bar right-align">
            <div class="hidden-bar-closer">
                <button><span class="flaticon-letter-x"></span></button>
            </div>
            <div class="hidden-bar-wrapper">
                <div class="logo">
                    <a href="index.php"><img src="<?= base_url('yachtProject/us/'); ?>images/logo-two.png" alt="mainlogo" /></a>
                </div>
                <div class="content-box">
                    <h3>Get In Touch</h3>
                    <div class="text">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts..</div>
                    <a href="about.php" class="theme-btn btn-style-two"><div class="btn-title">Consultation</div></a>
                </div>
                <div class="contact-info">
                    <h2>Contact Info</h2>
                    <ul class="list-style-two">
                        <li><span class="icon fa fa-map-marker-alt"></span>Sailing 26, Old Brozon Mall, New York NY 10005</li>
                        <li><span class="icon fa fa-phone-alt"></span><a href="tel:555626-0234">555 626-0234</a></li>
                        <li><span class="icon fa fa-envelope-open"></span> <a href="mailto:support@sailing.com">support@sailing.com</a></li>
                        <li><span class="icon fa fa-clock"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="page-banner">
            <div class="image-layer" style="background-image:url(<?= base_url('yachtProject/us/')?>images/background/contact2.jpg);"></div>
            <div class="banner-inner" style="background-color: #00000073;"  >
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>GET IN TOUCH</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="<?= base_url('/') ?>">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-section">
            <div class="auto-container">
                <div class="contact-container">
                    <div class="row clearfix">
                        <div class="form-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="sec-title">
                                    <h2>Send <strong>Your Message</strong></h2>
                                    <div class="lower-text">Don’t Hesitate to Contact US</div>
                                </div>
                                <div class="default-form contact-form">
                                    <form method="post" id="myForm" onsubmit="return validateForm()"action="<?= base_url('user-contact'); ?>">
                                        <?= csrf_field()?>
                                        <div class="row clearfix">          
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-label">Name</div>
                                                <div class="field-inner">
                                                    <input type="text" name="name" placeholder="Your Name" id="userValid" oninput="userValidation()" required>
                                                    <span id="userError" class="text-danger"></span>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-label">Email</div>
                                                <div class="field-inner">
                                                    <input type="text" id="emailInput" name="email" placeholder="Your Email" required>
                                                    <span id="emailError" class="text-danger"></span>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="field-label">Contact Number</div>
                                                <div class="field-inner">
                                                    <input type="text" name="contact" placeholder="Your Contact Number" required="" value="" oninput="checkNumber2(this)">
                                                    <span id="error2" class="text-danger"></span>
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="field-label">Who are you ? </div>
                                                <div class="field-inner">
                                                    <input type="radio" name="ownerCustomer" value="Owner" required>&nbsp;&nbsp;&nbsp;Yacht Owner &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input type="radio" name="ownerCustomer" value="Customer" required>&nbsp;&nbsp;&nbsp; Customer
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="field-label">Subject</div>
                                                <div class="field-inner">
                                                    <input type="text" name="subject" placeholder="Subject" required="" value="">
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="field-label">Message</div>
                                                <div class="field-inner">
                                                    <textarea name="message" placeholder="Write your message..." required=""></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <input type="submit" name="submit" id="submitBtn" value="Send Your Message" disabled>
                                            </div>

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
/*                                                    background-color: black;*/
                                                }
                                            </style>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

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

                        <script type="text/javascript">
                            function checkNumber2(input) {
                                var isValid = /^\d+$/.test(input.value);
                                if (!isValid) {
                                    document.getElementById("error2").innerText = "Please enter numbers only.";
                                    input.value = '';
                                    document.getElementById("submitBtn").disabled = true;
                                } else if (input.value.length < 10 || input.value.length > 15)  {
                                    document.getElementById("error2").innerText = "Please enter a number between 10 and 15 digits.";
                                    document.getElementById("submitBtn").disabled = true;
                                } else {
                                    document.getElementById("error2").innerText = "";
                                    document.getElementById("submitBtn").disabled = false;
                                }
                            }
                        </script>

                        <div class="map-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <img src="<?= base_url('yachtProject/us/'); ?>../assets/bmy/drew-dau-_MGf3AUfipk-unsplash.jpg" alt="about" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-container">
                    <div class="row clearfix">
                        <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="flaticon-smartphone-3"></span>
                                </div>
                                <div class="title-box">
                                    <h4>Phone</h4>
                                    <div class="subtitle">For more enquiries</div>
                                </div>
                                <div class="content-box">
                                    <br>
                                    <div class="text">+1(786)-297-7769</div>
                                </div>
                                <div class="link-box">
                                    <a href="https://wa.me/17862977769" class="theme-btn"><div class="btn-title">Get Call Back</div></a>
                                </div>
                            </div>
                        </div>
                        <!--Info Block-->
                        <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="flaticon-email-1"></span>
                                </div>
                                <div class="title-box">
                                    <h4>Email</h4>
                                    <div class="subtitle">For Ask Anything</div>
                                </div>
                                <div class="content-box">
                                    <div class="text">
                                        contact@bookmyyacht.us <br>
                                    support@bookmyyacht.us</div>
                                </div>
                                <div class="link-box">
                                    <a href="mailto:contact@bookmyyacht.us" class="theme-btn"><div class="btn-title">Email us</div></a>
                                </div>
                            </div>
                        </div>
                        <!--Info Block-->
                        <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="flaticon-map"></span>
                                </div>
                                <div class="title-box">
                                    <h4>Office Location</h4>
                                    <div class="subtitle">Find Us </div>
                                </div>
                                <div class="content-box">
                                    <div class="text">4910 8th Green St, Dover, DE 19901</div>
                                    <!--<div class="text">Mon - Sun:<br> 9.00am to 6.00pm </div>-->
                                </div>
                                <div class="link-box">
                                    <a href="#" class="theme-btn"><div class="btn-title">Appointment</div></a>
                                </div>
                            </div>
                        </div>
                        <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="fas fa-icons"></span>
                                </div>
                                <div class="title-box mt-3">
                                    <h4>Social Media</h4>
                                    <div class="subtitle">Connect with us</div>
                                </div>
                                <div class="content-box">

                                    <div class="text">
                                       <a href="https://www.instagram.com/bookmyyachtt/"> <i class="fab fa-instagram" style="font-size:28px; margin: 5px;" ></i></a>
                                       <a href="https://www.linkedin.com/company/book-my-yacht/"> <i class="fab fa-linkedin" style="font-size:28px; margin: 5px;"></i></a>

                                       <a href="https://www.facebook.com/people/Book-My-Yacht/100083596328997/?mibextid=ZbWKwL"> <i class="fab fa-facebook" style="font-size:28px; margin: 5px;"></i></a>
                                       <a href="https://twitter.com/bookmyyachts?s=08"> <i class="fab fa-twitter" style="font-size:28px; margin: 5px;"></i></a>
                                   </div>
                               </div>
                               <div class="link-box">
                                <a href="#" class="theme-btn"><div class="btn-title ">Follow Us</div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Subscribe Section-->
    <section class="subscribe-section style-three no-padding-top">
        <div class="auto-container">
            <div class="inner">
                <div class="image-layer" style="background-image:url(<?= base_url('yachtProject/us/')?>images/background/image-12.jpg);"></div>
                <div class="title">
                    <h4>Subscribe to our newsletter</h4>
                    <div class="subtitle">Subscribe & Get Updates in Your Inbox </div>
                </div>
                <div class="default-form subscribe-form-two">
                    <form method="post" id="myForm1" onsubmit="return validateForm1() "action="<?= base_url('user-subscribe'); ?>">
                        <?= csrf_field(); ?>
                        <div class="row clearfix">        
                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <input type="text" name="name" placeholder="Your Name" id="userValid1" oninput="userValidation1()" required>
                                    <span id="userError1" class="error1 text-danger"></span>
                                </div>
                            </div>

                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <input type="text" id="emailInput1" name="email" placeholder="Your Email" required>
                                    <span id="emailError1" class="text-danger"></span>
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

    <!-- script here... -->
    <script>
        function validateForm1() {
            var name = document.getElementById("userValid1").value;
            var isValid = true;

            document.getElementById("userError1").innerHTML = "";

            var userDigit = /\d/.test(name);
            var userSpecialChar = /[@$!*]/.test(name);

            if (userDigit || userSpecialChar || name.trim() === "") {
                document.getElementById("userError1").innerHTML = "Please enter a valid username";
                isValid = false;
            }
        }

        function userValidation1() {
            var name = document.getElementById('userValid1').value;
            var userError = document.getElementById('userError1');

            var userDigit = /\d/.test(name);
            var userSpecialChar = /[@$!*]/.test(name);

            if (userDigit || userSpecialChar || name.trim() === "") {
                userError.textContent = "Please enter a valid username";
                document.getElementById("myForm1").querySelector('input[type="submit"]').disabled = true;
            } else {
                userError.textContent = "";
                document.getElementById("myForm1").querySelector('input[type="submit"]').disabled = false;
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

        document.getElementById("emailInput1").addEventListener("input", function() {
            var email = this.value.trim();
            var emailError = document.getElementById("emailError1");
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

        document.getElementById("myForm1").addEventListener("submit", function(event) {
            var email = document.getElementById("emailInput1").value.trim();
            if (!isValidEmail(email)) {
                event.preventDefault();
                document.getElementById("emailError1").textContent = "Invalid email address";
            }
        });
    </script>

    <?php
    include 'footer.php';
    ?>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->

</body>

<!-- Mirrored from st.ourhtmldemo.com/new/sailing-demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jul 2023 22:38:46 GMT -->
</html>