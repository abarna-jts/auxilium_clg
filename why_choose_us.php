<?php include("header.php"); ?>

<style>
   

    a,
    a:active,
    a:focus {
        color: #333;
        text-decoration: none;
        transition-timing-function: ease-in-out;
        -ms-transition-timing-function: ease-in-out;
        -moz-transition-timing-function: ease-in-out;
        -webkit-transition-timing-function: ease-in-out;
        -o-transition-timing-function: ease-in-out;
        transition-duration: .2s;
        -ms-transition-duration: .2s;
        -moz-transition-duration: .2s;
        -webkit-transition-duration: .2s;
        -o-transition-duration: .2s;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    span,
    a,
    a:hover {
        display: inline-block;
        text-decoration: none;
        color: inherit;
    }

    .section-head {
        margin-bottom: 60px;
    }

    .section-head h4 {
        position: relative;
        padding: 0;
        color: #f91942;
        line-height: 1;
        letter-spacing: 0.3px;
        font-size: 34px;
        font-weight: 700;
        text-align: center;
        text-transform: none;
        margin-bottom: 30px;
    }

    .section-head h4:before {
        content: '';
        width: 60px;
        height: 3px;
        background: #f91942;
        position: absolute;
        left: 0px;
        bottom: -10px;
        right: 0;
        margin: 0 auto;
    }

    .section-head h4 span {
        font-weight: 700;
        padding-bottom: 5px;
        color: #2f2f2f
    }

    p.service_text {
        color: #cccccc !important;
        font-size: 16px;
        line-height: 28px;
        text-align: center;
    }

    .section-head p,
    p.awesome_line {
        color: #818181;
        font-size: 16px;
        line-height: 28px;
        text-align: center;
    }

    .extra-text {
        font-size: 34px;
        font-weight: 700;
        color: #2f2f2f;
        margin-bottom: 25px;
        position: relative;
        text-transform: none;
    }

    .extra-text::before {
        content: '';
        width: 60px;
        height: 3px;
        background: #f91942;
        position: absolute;
        left: 0px;
        bottom: -10px;
        right: 0;
        margin: 0 auto;
    }

    .extra-text span {
        font-weight: 700;
        color: #f91942;
    }

    .item {
        background: #fff;
        text-align: center;
        padding: 30px 25px;
        -webkit-box-shadow: 0 0px 25px rgba(0, 0, 0, 0.07);
        box-shadow: 0 0px 25px rgba(0, 0, 0, 0.07);
        border-radius: 20px;
        border: 5px solid rgb(212 241 252);
        margin-bottom: 30px;
        -webkit-transition: all .5s ease 0;
        transition: all .5s ease 0;
        transition: all 0.5s ease 0s;
    }

    .item:hover {
        background: transparent;
        box-shadow: 0 8px 20px 0px rgba(0, 0, 0, 0.2);
        -webkit-transition: all .5s ease 0;
        transition: all .5s ease 0;
        transition: all 0.5s ease 0s;
    }

    .item:hover .item,
    .item:hover span.icon {
        background: #fff;
        border-radius: 10px;
        -webkit-transition: all .5s ease 0;
        transition: all .5s ease 0;
        transition: all 0.5s ease 0s;
    }

    .item:hover h6 {
        color: #00adef;
        -webkit-transition: all .5s ease 0;
        transition: all .5s ease 0;
        transition: all 0.5s ease 0s;
    }

    .item:hover .item h6 {
        color: #00adef;
    }

    .item .icon {
        font-size: 40px;
        margin-bottom: 25px;
        color: #f91942;
        width: 90px;
        height: 90px;
        line-height: 96px;
        border-radius: 50px;
    }

    .item .feature_box_col_one {
        background: rgb(0 173 239 / 17%);
        color: #1d3f7e
    }

    .item .feature_box_col_two {
        background: rgb(0 173 239 / 17%);
        color: #1d3f7e
    }

    .item .feature_box_col_three {
        background: rgb(0 173 239 / 17%);
        color: #1d3f7e
    }

    .item .feature_box_col_four {
        background: rgb(0 173 239 / 17%);
        color: #1d3f7e
    }

    .item .feature_box_col_five {
        background: rgb(0 173 239 / 17%);
        color: #1d3f7e
    }

    .item .feature_box_col_six {
        background: rgb(0 173 239 / 17%);
        color: #1d3f7e
    }

    .item p {
        font-size: 15px;
        text-align: justify;
        line-height: 26px;
        height: 130px;
    }

    .item h6 {
        margin-bottom: 20px;
        color: #2f2f2f;
    }

    .mission p {
        margin-bottom: 10px;
        font-size: 15px;
        line-height: 28px;
        font-weight: 500;
    }

    .mission i {
        display: inline-block;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        background: #f91942;
        border-radius: 50%;
        color: #fff;
        font-size: 25px;
    }

    .mission .small-text {
        margin-left: 10px;
        font-size: 13px;
        color: #666;
    }

    .skills {
        padding-top: 0px;
    }

    .skills .prog-item {
        margin-bottom: 25px;
    }

    .skills .prog-item:last-child {
        margin-bottom: 0;
    }

    .skills .prog-item p {
        font-weight: 500;
        font-size: 15px;
        margin-bottom: 10px;
    }

    .skills .prog-item .skills-progress {
        width: 100%;
        height: 10px;
        background: #e0e0e0;
        border-radius: 20px;
        position: relative;
    }

    .skills .prog-item .skills-progress span {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        background: #f91942;
        width: 10%;
        border-radius: 10px;
        -webkit-transition: all 1s;
        transition: all 1s;
    }

    .skills .prog-item .skills-progress span:after {
        content: attr(data-value);
        position: absolute;
        top: -5px;
        right: 0;
        font-size: 10px;
        font-weight: 600;
        color: #fff;
        background: rgba(0, 0, 0, 0.9);
        padding: 3px 7px;
        border-radius: 30px;
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
                        <h2 class="breadcrumb-title">Why Choose us</h2>
                        <div class="breadcrumb-list">
                            <a href="index.php">Home</a>
                            <span>Academic</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="choose_us mt-50 mb-50">
        <div class="feat bg-gray pt-5 pb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="section-area mb-55 section-area-top text-center">
                        <h2 class="section-title mb-20">Why Choose Us</h2>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-graduation-cap"></i></span>
                            <h6>Empowering Education</h6>
                            <p> Auxilium Arts and Science College for Women is committed to transforming the lives of young women from rural and underprivileged backgrounds by offering quality education and fostering personal growth. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_two"><i class="fas fa-hand-holding-heart"></i></span>
                            <h6>Holistic Development</h6>
                            <p>Our focus is not just on academics but also on nurturing intellectual, emotional, moral, and social development to create well-rounded individuals prepared for life’s challenges. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_three"><i class="fas fa-route"></i></span>
                            <h6>Strategic Location</h6>
                            <p>Conveniently located on the Trichy-Madurai highway, the college is easily accessible to students from nearby villages, making education within reach for rural communities. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_four"><i class="fas fa-chalkboard-teacher"></i></span>
                            <h6>Experienced Faculty</h6>
                            <p>Our dedicated and highly qualified faculty provide personalized attention to ensure students achieve their full potential. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_five"><i class="fas fa-user-graduate"></i></span>
                            <h6>Diverse Academic Programs</h6>
                            <p> We offer a range of undergraduate and postgraduate courses, along with job-oriented diploma programs, designed to equip students with skills for a competitive job market. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_six"><i class="fas fa-microscope"></i></span>
                            <h6>State-of-the-Art Facilities</h6>
                            <p>Modern infrastructure, including well-equipped classrooms, laboratories, a library, hostel facilities, and a canteen, provides a comfortable and conducive learning environment. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_six"><i class="fas fa-balance-scale"></i></span>
                            <h6>Strong Values and Vision</h6>
                            <p>Guided by the charism of Don Bosco and Mother Mazzarello, the college fosters a culture of social responsibility, integrity, and empowerment. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_six"><i class="fas fa-hand-holding-usd"></i></span>
                            <h6>Affordable Education</h6>
                            <p>With a mission to support economically disadvantaged young women, we provide accessible and affordable education without compromising on quality. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_six"><i class="fas fa-hands-helping"></i></span>
                            <h6>Supportive Community</h6>
                            <p>The Auxilium Educating Community—comprising staff, parents, students, and affiliates—works collaboratively to create a nurturing and supportive environment for every learner. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_six"><i class="fas fa-medal"></i></span>
                            <h6>Proven Legacy</h6>
                            <p>Established by the Salesian Sisters of Don Bosco, the college is part of a renowned network dedicated to empowering young women through education for over a century. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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

<!-- Mirrored from themephi.net/template/eduan/eduan/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Nov 2024 06:59:21 GMT -->

</html>