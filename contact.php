<?php include("header.php"); ?>
        <!-- header area end -->

        <style>
            .contact-wrap{
                background-color: #fff;
            }
        </style>

        <main>
            <!-- breadcrumb area start -->
            <section class="breadcrumb-area bg-default" data-background="assets/img/bg/inner-banner.png">
                <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="breadcrumb-title">Contact Us</h2>
                                <div class="breadcrumb-list">
                                    <a href="index.php">Home</a>
                                    <span>Contact Us</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- contact area start -->
            <section class="contact-area pt-50">
                <div class="container">
                    <div class="contact-wrap">
                        <div class="row">
                            <div class="col-xl-8 col-md-8">
                                <div class="contact-content pr-80 mb-20">
                                    <h3 class="contact-title mb-25">Send Me Message</h3>
                                    <form action="contact_mail.php" method="post" class="contact-form">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                                <div class="contact-form-input mb-30">
                                                    <input type="text" placeholder="Your Name" name="name" required >
                                                    <span class="inner-icon"><i class="fa-thin fa-user"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                                <div class="contact-form-input mb-30">
                                                    <input type="email" placeholder="Email Address" name="email" required>
                                                    <span class="inner-icon"><i class="fa-thin fa-envelope"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                                <div class="contact-form-input mb-30">
                                                    <input type="text" placeholder="Your Number" name="phone" required>
                                                    <span class="inner-icon"><i class="fa-thin fa-phone-volume"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 ">
                                                <div class="contact-form-input">
                                                    <span class="inner-icon inner-icon-select"><i class="fa-thin fa-circle-exclamation"></i></span>
                                                    <select name="course" class="contact-form-list has-nice-select mb-30" required>
                                                        <option value="1">Select Subject</option>
                                                        <option value="2">Undergraduate Programs</option>
                                                        <option value="3">Master's Graduate Courses</option>
                                                        <option value="4">Diploma Courses</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="contact-form-input mb-50 contact-form-textarea">
                                                    <textarea name="msg" cols="30" rows="10" placeholder="Feel free to get in touch!" required></textarea>
                                                    <span class="inner-icon"><i class="fa-thin fa-pen"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="contact-form-submit mb-30">
                                                    <div class="contact-form-btn">
                                                        <input type="submit" class="theme-btn contact-btn"/>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4">
                                <div class="contact-info ml-50 mb-20">
                                    <h3 class="contact-title mb-40">Get In Touch</h3>
                                    <div class="contact-info-item">
                                        <span><i class="fa-thin fa-location-dot"></i>Address</span>
                                        <p>Thamarapatti Bit (II) Village, Madurai East Taluk, Madurai – 625122</p>
                                    </div>
                                    <div class="contact-info-item">
                                        <span><i class="fa-thin fa-mobile-notch"></i>Phone</span>
                                        <a href="tel:+919487842386">+91 9487842386 </a>
                                        <a href="tel:+919025682789">+91 9025682789 </a>
                                    </div>
                                    <div class="contact-info-item">
                                        <span><i class="fa-thin fa-envelope"></i>Email</span>
                                        <a href="mailto:info@aascw.ac.in">info@aascw.ac.in</a>
                                        <a href="mailto:admissions@aascw.ac.in"> admissions@aascw.ac.in</a>
                                    </div>
                                    <div class="contact-social">
                                        <span>Social Media</span>
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.42364654378!2d78.23005097585575!3d9.981820373345569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c11e2e606175%3A0xec367c0937892668!2sAuxilium%20Arts%20and%20Science%20College%20for%20Women!5e0!3m2!1sen!2sin!4v1733113854810!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            <!-- contact area end -->

            
        </main>

        

        <!-- footer area start -->
        <?php include("footer.php"); ?>
        <!-- footer area end -->

		<!-- JS here -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from themephi.net/template/eduan/eduan/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Nov 2024 06:59:30 GMT -->
</html>