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
        height: 75px;
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
    #tally:checked~.list .tally,
    #dca:checked~.list .dca,
    #fashion:checked~.list .fashion,
    #beautician:checked~.list .beautician {
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
        height: 75px;
        background-color: #1d3f7e;
        border-radius: 10px;
        position: absolute;
        top: 0;
        margin-top: 0px;
        transition: 0.3s ease-in;
    }

    .txt li {
        color: var(--clr-body-text);
    }

    .txt p {
        margin-bottom: 0rem;
    }

    .txt h6 {
        margin: 10px 0px !important;
        font-size: 20px;
    }

    /* To move the indicatore based on click */
    #tally:checked~.list .indicator {
        top: 0;
    }


    #dca:checked~.list .indicator {
        top: 70px;
    }

    #fashion:checked~.list .indicator {
        top: 150px;
    }

    #beautician:checked~.list .indicator {
        top: 225px;
    }

    .card .content {
        width: calc(100% - 150px);
    }

    /* To hide all the content */
    .content .tally,
    .content .dca,
    .content .fashion,
    .content .beautician {
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

    #tally:checked~.content .tally {
        display: block;
    }

    #dca:checked~.content .dca {
        display: block;
    }

    #fashion:checked~.content .fashion {
        display: block;
    }

    #beautician:checked~.content .beautician {
        display: block;
    }


    @media(max-width:768px) {
        .box .card {
            flex-direction: column;
        }

        .card .list {
            width: 100%;
        }

        .card .content {
            width: 100%;
        }
    }


    @media (max-width:1024px) and (min-width:768px) {
        .box .card {
            flex-direction: column;
        }

        .card .list {
            width: 100%;
        }

        .card .content {
            width: 100%;
        }
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
                        <h2 class="breadcrumb-title">Diploma Courses</h2>
                        <div class="breadcrumb-list">
                            <a href="index.php">Home</a>
                            <span>Courses</span>
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
                        Diploma Courses
                    </div>
                    <div class="card">
                        <input type="radio" name="tab" checked id="tally">
                        <input type="radio" name="tab" id="dca">
                        <input type="radio" name="tab" id="fashion">
                        <input type="radio" name="tab" id="beautician">

                        <div class="list">
                            <label for="tally" class="tally">
                                <i class="fa-solid fa-hand-point-right"></i>
                                <span class="topic">Diploma in Tally</span>
                            </label>

                            <label for="dca" class="dca">
                                <i class="fa-solid fa-hand-point-right"></i>
                                <span class="topic">Diploma in Computer Application (DCA)</span>
                            </label>

                            <label for="fashion" class="fashion">
                                <i class="fa-solid fa-hand-point-right"></i>
                                <span class="topic">Diploma in Fashion Technology</span>
                            </label>

                            <label for="beautician" class="beautician">
                                <i class="fa-solid fa-hand-point-right"></i>
                                <span class="topic">Diploma in Beautician</span>
                            </label>

                            <div class="indicator"></div>
                        </div>
                        <div class="content">
                            <div class="tally">
                                <div class="sub-title">
                                    Diploma in Tally
                                </div>
                                <hr>
                                <div class="txt">


                                    <h6>About the Course:</h6>
                                    <p>The Diploma in Tally is a professional program designed to equip students with comprehensive
                                        knowledge of Tally ERP software, widely used for accounting and financial management in businesses.
                                        The course focuses on providing hands-on training in financial transactions, taxation, inventory
                                        management, and payroll processes. This program is ideal for individuals seeking to enhance their
                                        accounting and bookkeeping skills to meet industry demands.
                                    </p>
                                    <h6>Course Objectives:</h6>

                                    <li>To provide expertise in Tally ERP and its application in accounting and financial management. </li>
                                    <li>To familiarize students with financial reports, inventory management, and taxation compliance. </li>
                                    <li>To enhance skills in computerized accounting and prepare for industry-recognized certifications. </li>

                                    <h6>The Curriculum Overview:</h6>
                                    <p>The Diploma in Tally program is typically a short-term course lasting 6–12 months, depending on the institution,
                                        and includes the following modules: </p>

                                    <p><strong>Introduction to Tally:</strong></p>
                                    <li>Overview of Tally ERP software and its features. </li>
                                    <li>Installation and setup of Tally ERP. </li>

                                    <p><strong>Accounting Basics in Tally:</strong></p>
                                    <li>Creation and management of company accounts. </li>
                                    <li>Ledger creation and accounting groups. </li>

                                    <p><strong>Inventory Management:</strong></p>
                                    <li>Stock groups, categories, and items. </li>
                                    <li>Handling purchase and sales orders. </li>

                                    <p><strong>Taxation and GST Compliance:</strong></p>
                                    <li>Introduction to taxation concepts. </li>
                                    <li>GST setup and calculation in Tally. </li>
                                    <li>Generating tax invoices and reports. </li>

                                    <p><strong>Payroll Management:</strong></p>
                                    <li>Employee details and salary setup. </li>
                                    <li>PF, ESI, and payroll processing. </li>

                                    <p><strong>Advanced Tally Features:</strong></p>
                                    <li>Budgeting and scenario management</li>
                                    <li>Cost center and cost category management.</li>
                                    <li>Financial reporting and analysis. </li>

                                    <p><strong>Practical Applications:</strong></p>
                                    <li>Generating financial statements (Profit and Loss, Balance Sheet). </li>
                                    <li>Import and export of data in Tally. </li>
                                    <li>Tally audit and backup management. </li>

                                    <p><strong>Final Project:</strong></p>
                                    <li>Practical project focusing on real-world accounting scenarios. </li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Completing a Diploma in Tally opens doors to various career opportunities in the accounting and financial sectors, including: </p>
                                    <p><strong>Accounting Roles:</strong></p>
                                    <li>Accountant in small, medium, and large enterprises. </li>
                                    <li>Assistant Accountant in corporate accounting departments. </li>

                                    <p><strong>Financial Management:</strong></p>
                                    <li>Accounts Executive in industries and organizations. </li>
                                    <li>Finance Executive in banking and non-banking financial companies (NBFCs). </li>

                                    <p><strong>Taxation and Compliance:</strong></p>
                                    <li>GST Consultant or Tax Accountant. </li>
                                    <li>Payroll Administrator handling employee salary and compliance. </li>

                                    <p><strong>Small Business Support:</strong></p>
                                    <li>Freelance Accountant or Tally Specialist for small businesses. </li>
                                    <li>Self-employment in providing Tally-related accounting services. </li>

                                    <p><strong>Public Sector and Government Roles:</strong></p>
                                    <li>Eligibility for government jobs requiring knowledge of computerized accounting. </li>
                                    <li>Accountant in public-sector undertakings and administrative offices. </li>

                                    <p><strong>Education and Training:</strong></p>
                                    <li>Tally Trainer or Instructor in coaching institutes and vocational centers. </li>
                                    <li>Freelance translation services for literary and non-literary works. </li>

                                    <h6>Advantages of Pursuing a Diploma in Tally:</h6>
                                    <li>High demand for Tally professionals across industries. </li>
                                    <li>Quick entry into the job market with a specialized skill set. </li>
                                    <li>Opportunity to build a strong foundation for advanced roles in accounting and finance. </li>
                                    <li>Cost-effective program with significant career benefits. </li>

                                    <p>The Diploma in Tally is an excellent choice for individuals seeking a career in accounting and financial
                                        management, equipping them with industry-relevant skills and practical expertise to succeed in the
                                        competitive job market.</p>
                                </div>
                            </div>

                            <div class="dca">
                                <div class="sub-title">
                                    Diploma in Computer Application (DCA)
                                </div>
                                <hr>
                                <div class="txt">

                                    <h6>About the Course:</h6>
                                    <p>The Diploma in Computer Application (DCA) is a professional program that provides foundational knowledge
                                        and practical skills in computer applications. This short-term course is designed to equip students with
                                        essential computer skills, software knowledge, and the ability to handle business and personal computing
                                        needs. It is ideal for beginners who want to build a career in IT, office management, or related fields.
                                    </p>
                                    <h6>Course Objectives:</h6>

                                    <li>To provide a strong foundation in computer applications and IT fundamentals. </li>
                                    <li>To develop skills in office automation, software applications, and basic programming. </li>
                                    <li>To prepare students for entry-level jobs in IT, administration, and data management. </li>

                                    <h6>Curriculum Overview:</h6>
                                    <p>The DCA program typically lasts 6–12 months and includes the following modules: </p>

                                    <p><strong>Introduction to Computers:</strong></p>
                                    <li>Basics of computer hardware and software. </li>
                                    <li>Operating systems (Windows/Linux). </li>

                                    <p><strong>Office Automation Tools:</strong></p>
                                    <li>Microsoft Office Suite (Word, Excel, PowerPoint, Access). </li>
                                    <li>Document formatting, spreadsheets, and presentations. </li>

                                    <p><strong>Fundamentals of Internet and Networking:</strong></p>
                                    <li>Internet usage, email setup, and web browsing. </li>
                                    <li>Basics of networking and cybersecurity. </li>

                                    <p><strong>Programming Basics:</strong></p>
                                    <li>Introduction to programming languages (C or Python). </li>
                                    <li>Logical reasoning and problem-solving skills. </li>

                                    <p><strong>Database Management Systems</strong></p>
                                    <li>Basics of database creation and management. </li>
                                    <li>Working with SQL for data manipulation. </li>

                                    <p><strong>Graphic Design Basics</strong></p>
                                    <li>Introduction to graphic design tools (Photoshop/CorelDRAW). </li>
                                    <li>Basic image editing and design techniques. </li>

                                    <p><strong>Web Development Basics</strong></p>
                                    <li>Introduction to HTML and CSS for web design. </li>
                                    <li>Basic concepts of website creation. </li>

                                    <p><strong>Final Project</strong></p>
                                    <li>A practical project involving office automation, database management, or website design. </li>


                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of the DCA program have a variety of career opportunities across IT, administration, and technical support sectors, including: </p>
                                    <p><strong>Office and Administrative Roles:</strong></p>
                                    <li>Office Assistant handling automation tools and data management.</li>
                                    <li>Administrative Support Executive managing office workflows. </li>

                                    <p><strong>IT Support and Technical Roles:</strong></p>
                                    <li>Computer Operator in business, government, or educational institutions. </li>
                                    <li>IT Support Specialist providing troubleshooting and software assistance. </li>

                                    <p><strong>Data Management and Entry:</strong></p>
                                    <li>Data Entry Operator for business, healthcare, or financial organizations. </li>
                                    <li>Database Assistant managing and organizing data systems. </li>

                                    <p><strong>Web and Graphic Design:</strong></p>
                                    <li>Web Designer creating and maintaining basic websites. </li>
                                    <li>Graphic Designer for digital and print media. </li>

                                    <p><strong>Freelancing and Self-Employment</strong></p>
                                    <li>Freelance jobs in document preparation, graphic design, and web development. </li>
                                    <li>Offering IT services to small businesses or local organizations. </li>

                                    <p><strong>Higher Education and Certifications</strong></p>
                                    <li>Provides a strong foundation for advanced IT certifications or programs like PGDCA, BCA, or other specialized courses. </li>

                                    <p><strong>Government and Public Sector</strong></p>
                                    <li>Roles in government offices requiring computer proficiency</li>
                                    <li>Competitive exams for positions emphasizing computer knowledge. </li>

                                    <h6>Advantages of Pursuing DCA:</h6>
                                    <li>Ideal for beginners with no prior experience in computers. </li>
                                    <li>Short-term course with high employability in IT and administration sectors. </li>
                                    <li>Affordable and accessible training program with practical applications. </li>
                                    <li>Provides a foundation for advanced studies or certifications in computer science and IT. </li>


                                    <p>The Diploma in Computer Application (DCA) is an excellent starting point for individuals looking to enhance
                                        their computer skills and secure a position in today’s technology-driven workplace. It equips students with
                                        the practical expertise needed for a variety of roles in IT and administration.</p>
                                </div>
                            </div>

                            <div class="fashion">
                                <div class="sub-title">
                                    Diploma in Fashion Technology
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Course:</h6>
                                    <p>The Diploma in Fashion Technology is a comprehensive program designed to provide students with the knowledge
                                        and skills needed to excel in the dynamic and creative field of fashion. This course focuses on the principles
                                        of design, garment construction, textile studies, and fashion marketing, enabling students to develop a
                                        strong foundation in the fashion industry. It is ideal for individuals with a passion for creativity, design, and innovation.
                                    </p>
                                    <h6>Course Objectives</h6>

                                    <li>To provide an in-depth understanding of fashion design and garment construction techniques. </li>
                                    <li>To develop skills in fabric selection, pattern making, and sewing. </li>
                                    <li>To familiarize students with fashion trends, marketing strategies, and merchandising. </li>
                                    <li>To prepare students for entrepreneurial ventures or roles in the fashion and textile industries. </li>

                                    <h6>The Curriculum Overview:</h6>
                                    <p>The Diploma in Fashion Technology typically lasts 6–12 months and includes the following modules: </p>

                                    <p><strong>Introduction to Fashion Design:</strong></p>
                                    <li>Basics of design principles and elements. </li>
                                    <li>Color theory and its application in fashion. </li>

                                    <p><strong>Textile Studies:</strong></p>
                                    <li>Study of fabrics, fibers, and materials. </li>
                                    <li>Techniques for fabric selection and sourcing. </li>

                                    <p><strong>Garment Construction:</strong></p>
                                    <li>Pattern making and drafting. </li>
                                    <li>Sewing techniques and garment assembly. </li>

                                    <p><strong>Fashion Illustration:</strong></p>
                                    <li>Sketching techniques for fashion design. </li>
                                    <li>Computer-aided design (CAD) for fashion. </li>

                                    <p><strong>Fashion Marketing and Merchandising:</strong></p>
                                    <li>Fundamentals of fashion marketing and branding. </li>
                                    <li>Retail management and merchandising strategies. </li>

                                    <p><strong>Trend Analysis:</strong></p>
                                    <li>Study of global fashion trends and forecasting. </li>
                                    <li>Cultural influences on fashion design. </li>

                                    <p><strong>Entrepreneurship in Fashion:</strong></p>
                                    <li>Starting a fashion business or boutique.</li>
                                    <li>Financial management and marketing strategies for startups.</li>

                                    <p><strong>Practical Learning</strong></p>
                                    <li>Design and create garments for a mini collection or fashion show. </li>
                                    <li>Internship or on-the-job training with a fashion house or boutique. </li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of the Diploma in Fashion Technology have a variety of career opportunities in design, production, marketing, and retail, including: </p>
                                    <p><strong>Fashion Design:</strong></p>
                                    <li>Fashion Designer creating apparel and accessories. </li>
                                    <li>Freelance Designer working on bespoke projects. </li>

                                    <p><strong>Garment Production:</strong></p>
                                    <li>Pattern Maker or Garment Technician in manufacturing units. </li>
                                    <li>Tailor or Dressmaker for boutiques and custom clients. </li>

                                    <p><strong>Fashion Marketing and Retail:</strong></p>
                                    <li>Fashion Merchandiser or Buyer for retail stores and brands. </li>
                                    <li>Visual Merchandiser managing in-store displays and layouts. </li>


                                    <p><strong>Textile and Fabric Industry:</strong></p>
                                    <li>Textile Designer specializing in patterns and prints. </li>
                                    <li>Fabric Consultant advising on material choices. </li>


                                    <p><strong>Entrepreneurship:</strong></p>
                                    <li>Launch your own fashion label or boutique. </li>
                                    <li>Start a business in custom tailoring or alterations. </li>

                                    <p><strong>Fashion Illustration and Styling:</strong></p>
                                    <li> Fashion Illustrator for design studios or media. </li>
                                    <li>Fashion Stylist for celebrities, photoshoots, or events. </li>

                                    <p><strong>Event and Fashion Show Coordination:</strong></p>
                                    <li>Organize and manage fashion shows or exhibitions. </li>
                                    <li>Work with event management companies for fashion-related events. </li>

                                    <p><strong>Higher Studies and Certifications:</strong></p>
                                    <li>Pursue advanced courses in fashion design or textile technology. </li>
                                    <li>Specialize in areas like footwear design, jewelry design, or fashion management. </li>

                                    <h6>Advantages of Pursuing a Diploma in Fashion Technology:</h6>
                                    <li>Provides hands-on experience in designing and creating garments. </li>
                                    <li>Short-term program offering quick entry into the fashion industry. </li>
                                    <li>Encourages creativity and innovation, turning passion into a profession. </li>
                                    <li>Opens doors to a wide range of career opportunities in the fashion and textile industries. </li>

                                    <p>The Diploma in Fashion Technology is an excellent choice for individuals passionate about design
                                        and creativity. It equips students with the skills and knowledge required to thrive in the
                                        competitive fashion industry while offering opportunities to build a career or start their
                                        own business.</p>
                                </div>
                            </div>


                            <div class="beautician">
                                <div class="sub-title">
                                    Diploma in Beautician
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Course:</h6>
                                    <p>The "Diploma in Beautician" is a professional program designed to provide students with
                                        the knowledge and skills required to excel in the beauty and wellness industry. The course
                                        covers various aspects of beauty therapy, skincare, haircare, makeup artistry, and salon
                                        management. It is ideal for individuals passionate about grooming and wellness who want to
                                        turn their passion into a rewarding career. </p>
                                    <h6>Course Objectives:</h6>

                                    <li>To develop expertise in beauty treatments, hairstyling, and makeup techniques. </li>
                                    <li>To familiarize students with skincare and personal grooming practices. </li>
                                    <li>To provide knowledge of salon management and client relations. </li>
                                    <li>To prepare students for careers in the beauty and wellness industry or entrepreneurship. </li>

                                    <h6>Curriculum Overview:</h6>
                                    <p>The Diploma in Beautician program typically lasts 6–12 months and includes the following modules: </p>

                                    <p><strong>Introduction to Beauty Therapy:</strong></p>
                                    <li>Basics of skincare and beauty </li>
                                    <li>Anatomy and physiology related to beauty treatments. </li>


                                    <p><strong>Skincare and Facial Treatments:</strong></p>
                                    <li>Skin analysis and facial techniques. </li>
                                    <li>Treatments for different skin types and conditions. </li>


                                    <p><strong>Makeup Artistry:</strong></p>
                                    <li>Basics of makeup application for day, evening, and special occasions. </li>
                                    <li>Bridal makeup and advanced makeup techniques. </li>

                                    <p><strong>Haircare and Styling:</strong></p>
                                    <li>Haircuts, styling, and treatments. </li>
                                    <li>Hair coloring and chemical treatments. </li>

                                    <p><strong>Manicure and Pedicure:</strong></p>
                                    <li>Nail care, shaping, and polishing. </li>
                                    <li>Hand and foot massages and treatments. </li>

                                    <p><strong>Waxing and Hair Removal</strong></p>
                                    <li>Techniques for waxing and other hair removal methods</li>
                                    <li>Pre- and post-care for clients. </li>

                                    <p><strong>Salon Management</strong></p>
                                    <li>Setting up and managing a salon. </li>
                                    <li>Client handling and customer service. </li>

                                    <p><strong>Advanced Techniques (Optional):</strong></p>
                                    <li>Aromatherapy and spa treatments. </li>
                                    <li>Anti-aging treatments and skin rejuvenation. </li>

                                    <p><strong>Practical Learning:</strong></p>
                                    <li>Hands-on practice of beauty and hair treatments. </li>
                                    <li>Internship or on-the-job training in a salon or spa. </li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of the Diploma in Beautician program have a wide range of career opportunities in the beauty and wellness industry, including: </p>
                                    <p><strong>Beauty Therapist:</strong></p>
                                    <li>Provide skincare and beauty treatments in salons or spas. </li>
                                    <li>Specialize in facials, makeup, or haircare services. </li>

                                    <p><strong>Makeup Artist:</strong></p>
                                    <li>Work as a professional makeup artist for events, weddings, or media. </li>
                                    <li>Freelance as a bridal or editorial makeup specialist. </li>

                                    <p><strong>Hair Stylist:</strong></p>
                                    <li>Hairstylist in salons or personal haircare services. </li>
                                    <li>Specialist in hair coloring, treatments, or bridal hairstyling. </li>

                                    <p><strong>Nail Technician:</strong></p>
                                    <li>Work as a manicure and pedicure expert in salons. </li>
                                    <li>Freelance in nail art and nail care services. </li>

                                    <p><strong>Salon Manager or Owner:</strong></p>
                                    <li>Manage a beauty salon or spa, handling operations and customer service. </li>
                                    <li>Start your own beauty salon or wellness center. </li>

                                    <p><strong>Wellness Consultant:</strong></p>
                                    <li>Provide personalized beauty and wellness advice to clients. </li>
                                    <li>Work in luxury spas, resorts, or wellness centers. </li>

                                    <p><strong>Training and Education:</strong></p>
                                    <li>Trainer or Instructor in beauty academies or vocational centers. </li>

                                    <p><strong>Product Consultant:</strong></p>
                                    <li>Work with cosmetic and skincare brands as a sales or product consultant. </li>


                                    <h6>Advantages of Pursuing a Diploma in Beautician:</h6>
                                    <li>Quick entry into the beauty and wellness industry with practical skills. </li>
                                    <li>High demand for skilled professionals in personal grooming and wellness. </li>
                                    <li>Scope for self-employment and entrepreneurial ventures. </li>


                                    <p>The "Diploma in Beautician" is an excellent program for individuals looking to build a
                                        career in the beauty industry. It combines technical expertise with creative skills,
                                        opening doors to numerous opportunities in a rapidly growing field.</p>
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