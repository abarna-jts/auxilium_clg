<?php include("header.php"); ?>
<style>
    .box {
        background-color: white;
        
        width: 100%;
        padding: 40px;
        padding-bottom: 50px;
        border-radius: 10px;
        box-shadow: 0 10px 15px 5px rgba(0, 0, 0, 0.2);
    }

    .box .main-title {
        font-size: 28px;
        font-weight: 600;
        color: indigo;
    }

    .box .card {
        margin-top: 20px;
        padding: 25px 10px;
        display: flex;
        justify-content: space-between;
        gap: 30px;
        flex-direction: row;
    }

    /* To make radio button hidden */
    .card input[type="radio"] {
        display: none;
    }

    .card .list {
        width: 40%;
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    position: relative;
    }

    .list label {
        width: 100%;
        height: 50px;
        display: flex;
        padding-left: 20px;
        align-items: center;
        gap: 5px;
        font-size: 17px;
        color: var(--clr-body-text);
        z-index: 5;
        cursor: pointer;
    }

    .list label:hover {
        color: #1d3f7e;
    }

    /* To make label color white */
    #tamil:checked~.list .tamil,
    #history:checked~.list .history,
    #economic:checked~.list .economic,
    #commerce:checked~.list .commerce,
    #ca:checked~.list .ca,
    #cs:checked~.list .cs,
    #dsa:checked~.list .dsa,
    #psychology:checked~.list .psychology,
    #microbiology:checked~.list .microbiology,
    #maths:checked~.list .maths {
        color: white;
    }

    .list label i {
        font-size: 22px;
    }

    .list .topic {
        font-size: 17px;
        font-weight: 500;
    }

    .indicator {
        width: 100%;
        height: 50px;
        background-color: #1d3f7e;
        border-radius: 10px;
        position: absolute;
        top: 0;
        transition: 0.3s ease-in;
    }

    /* To move the indicatore based on click */
    #tamil:checked~.list .indicator {
        top: 0;
    }

    #history:checked~.list .indicator {
        top: 50px;
    }

    #economic:checked~.list .indicator {
        top: 100px;
    }

    #commerce:checked~.list .indicator {
        top: 150px;
    }

    #ca:checked~.list .indicator {
        top: 200px;
    }

    #cs:checked~.list .indicator {
        top: 200px;
    }

    #dsa:checked~.list .indicator {
        top: 200px;
    }

    #psychology:checked~.list .indicator {
        top: 200px;
    }

    #microbiology:checked~.list .indicator {
        top: 200px;
    }

    #maths:checked~.list .indicator {
        top: 200px;
    }

    .card .content {
        width: calc(100% - 150px);
    }

    /* To hide all the content */
    .content .tamil,
    .content .history,
    .content .economic,
    .content .commerce,
    .content .ca,
    .content .cs,
    .content .dsa,
    .content .psychology,
    .content .microbiology,
    .content .maths{
        display: none;
    }

    .content .sub-title {
        font-size: 21px;
        font-weight: 600;
    }

    .content hr {
        height: 3px;
        background-color: black;
    }

    .content .txt {
        margin-top: 5px;
        color: gray;
        text-align: justify;
        font-size: 16px;
    }

    /* To show the content based on selection */

    #tamil:checked~.content .tamil {
        display: block;
    }

    #history:checked~.content .history {
        display: block;
    }

    #economic:checked~.content .economic {
        display: block;
    }

    #commerce:checked~.content .commerce {
        display: block;
    }

    #ca:checked~.content .ca {
        display: block;
    }

    #cs:checked~.content .cs {
        display: block;
    }

    #dsa:checked~.content .dsa {
        display: block;
    }

    #psychology:checked~.content .psychology {
        display: block;
    }

    #microbiology:checked~.content .microbiology {
        display: block;
    }

    #maths:checked~.content .maths {
        display: block;
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
                        <h2 class="breadcrumb-title">Our Courses</h2>
                        <div class="breadcrumb-list">
                            <a href="index.php">Home</a>
                            <span>Curriculum</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course_section mt-50 mb-50">
        <div class="container">
            <div class="row">
            <div class="box col-md-12">
                <div class="main-title">
                    Vertical Tabs
                </div>
                <div class="card">
                    <input type="radio" name="tab" checked id="tamil">
                    <input type="radio" name="tab" id="history">
                    <input type="radio" name="tab" id="economic">
                    <input type="radio" name="tab" id="commerce">
                    <input type="radio" name="tab" id="ca">
                    <input type="radio" name="tab" id="cs">
                    <input type="radio" name="tab" id="dsa">
                    <input type="radio" name="tab" id="psychology">
                    <input type="radio" name="tab" id="microbiology">
                    <input type="radio" name="tab" id="maths">
                    <div class="list">
                        <label for="tamil" class="tamil">
                            <i class="fa-solid fa-hand-point-right"></i>
                            <span class="topic">Bachelor of Arts in Tamil (B.A. Tamil)</span>
                        </label>
                        <label for="history" class="history">
                            <i class="fa-solid fa-hand-point-right"></i>
                            <span class="topic">Bachelor of Arts in History (B.A. History)</span>
                        </label>
                        <label for="economic" class="economic">
                            <i class="fa-solid fa-hand-point-right"></i>
                            <span class="topic">Bachelor of Arts in Economics (B.A. Economics)</span>
                        </label>
                        <label for="commerce" class="commerce">
                            <i class="fa-solid fa-hand-point-right"></i>
                            <span class="topic">Bachelor of Commerce (B.Com)</span>
                        </label>
                        <label for="ca" class="ca">
                            <i class="fa-solid fa-hand-point-right"></i>
                            <span class="topic">Bachelor of Computer Applications (B.C.A.)</span>
                        </label>
                        <label for="cs" class="cs">
                            <i class="fa-solid fa-hand-point-right"></i>
                            <span class="topic">Bachelor of Science in Computer Science (B.Sc. Computer Science)</span>
                        </label>
                        <label for="dsa" class="dsa">
                            <i class="fa-solid fa-hand-point-right"></i>
                            <span class="topic">Bachelor of Science in Computer Science (Data Science and Analytics)</span>
                        </label>
                        <label for="psychology" class="psychology">
                            <i class="fa-solid fa-hand-point-right"></i>
                            <span class="topic">Bachelor of Science in Psychology (B.Sc. Psychology)</span>
                        </label>
                        <label for="microbiology" class="microbiology">
                            <i class="fa-solid fa-hand-point-right"></i>
                            <span class="topic">Bachelor of Science in Microbiology (B.Sc. Microbiology)</span>
                        </label>
                        <label for="maths" class="maths">
                            <i class="fa-solid fa-hand-point-right"></i>
                            <span class="topic">Bachelor of Science in Mathematics (B.Sc. Mathematics)</span>
                        </label>
                        <div class="indicator"></div>
                    </div>
                    <div class="content">
                        <div class="tamil">
                            <div class="sub-title">
                                Home Content
                            </div>
                            <hr>
                            <div class="txt">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
                                </p>
                            </div>
                        </div>
                        <div class="history">
                            <div class="sub-title">
                                Blog Content
                            </div>
                            <hr>
                            <div class="txt">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
                                </p>
                            </div>
                        </div>
                        <div class="economic">
                            <div class="sub-title">
                                Help Content
                            </div>
                            <hr>
                            <div class="txt">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
                                </p>
                            </div>
                        </div>
                        <div class="commerce">
                            <div class="sub-title">
                                Code Content
                            </div>
                            <hr>
                            <div class="txt">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
                                </p>
                            </div>
                        </div>
                        <div class="ca">
                            <div class="sub-title">
                                About Content
                            </div>
                            <hr>
                            <div class="txt">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
                                </p>
                            </div>
                        </div>
                        <div class="cs">
                            <div class="sub-title">
                                About Content
                            </div>
                            <hr>
                            <div class="txt">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
                                </p>
                            </div>
                        </div>
                        <div class="dsa">
                            <div class="sub-title">
                                About Content
                            </div>
                            <hr>
                            <div class="txt">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
                                </p>
                            </div>
                        </div>
                        <div class="psychology">
                            <div class="sub-title">
                                About Content
                            </div>
                            <hr>
                            <div class="txt">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
                                </p>
                            </div>
                        </div>
                        <div class="microbiology">
                            <div class="sub-title">
                                About Content
                            </div>
                            <hr>
                            <div class="txt">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
                                </p>
                            </div>
                        </div>
                        <div class="maths">
                            <div class="sub-title">
                                About Content
                            </div>
                            <hr>
                            <div class="txt">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
                                </p>
                            </div>
                        </div>
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