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
    #english:checked~.list .english,
    #commerce:checked~.list .commerce,
    #cs:checked~.list .cs{
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
    #english:checked~.list .indicator {
        top: 0;
    }


    #commerce:checked~.list .indicator {
        top: 70px;
    }

    #cs:checked~.list .indicator {
        top: 150px;
    }

    .card .content {
        width: calc(100% - 150px);
    }

    /* To hide all the content */
    .content .english,
    .content .commerce,
    .content .cs {
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

    #english:checked~.content .english {
        display: block;
    }

    #commerce:checked~.content .commerce {
        display: block;
    }

    #cs:checked~.content .cs {
        display: block;
    }


    @media(max-width:768px){
        .box .card {
        flex-direction: column;
        }
        .box{
            padding: 15px;
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
                        <h2 class="breadcrumb-title">Master's Graduate Courses</h2>
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
                        Master's Courses
                    </div>
                    <div class="card">
                        <input type="radio" name="tab" checked id="english" >
                        <input type="radio" name="tab" id="commerce">
                        <input type="radio" name="tab" id="cs">
                        
                        <div class="list">
                            <label for="english" class="english">
                                <i class="fa-solid fa-hand-point-right"></i>
                                <span class="topic">Master of Arts in English (M.A. English)</span>
                            </label>
                            
                            <label for="commerce" class="commerce">
                                <i class="fa-solid fa-hand-point-right"></i>
                                <span class="topic">Master of Commerce (M.Com)</span>
                            </label>
                            
                            <label for="cs" class="cs">
                                <i class="fa-solid fa-hand-point-right"></i>
                                <span class="topic">Master of Science in Computer Science (M.Sc. Computer Science)</span>
                            </label>
                            
                            <div class="indicator"></div>
                        </div>
                        <div class="content">
                            <div class="english">
                                <div class="sub-title">
                                    Master of Arts in English (M.A. English)
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Department:</h6>
                                    <p>The Department of English at Auxilium Arts and Science College for Women is committed
                                         to fostering advanced linguistic, literary, and critical thinking skills.
                                          The department aims to create scholars and professionals who appreciate the richness
                                           of English literature and its cultural contexts while developing the analytical
                                            and creative skills necessary for success in academia and industry.   </p>

                                    <h6>About the Course:</h6>
                                    <p>The Master of Arts in English (M.A. English) is a two-year postgraduate program designed 
                                        to provide an in-depth understanding of English literature, linguistics, and critical 
                                        theory. The program encourages students to explore literary works across genres, historical
                                         periods, and cultures, while fostering research and communication skills essential for
                                          academic and professional growth.  
                                    </p>
                                    <h6>The course aims to:</h6>

                                    <li>Develop advanced knowledge of English literature and critical approaches.  </li>
                                    <li>Enhance research and analytical skills for literary and cultural studies.   </li>
                                    <li>Foster creative and academic writing abilities.  </li>
                                    <li> Prepare students for careers in academia, writing, and related fields.  </li>

                                    <h6>The Curriculum Overview:</h6>
                                    <p>The M.A. English program spans two years and includes the following components:   </p>

                                    <p><strong>Core Subjects:</strong></p>
                                    <li>British Literature (Medieval, Renaissance, Romantic, Victorian, and Modern)  </li>
                                    <li>American Literature </li>
                                    <li>Postcolonial Literature  </li>
                                    <li>Indian Writing in English  </li>
                                    <li>Literary Criticism and Theory</li>
                                    <li>Linguistics and Language Studies  </li>

                                    <p><strong>Elective Subjects:</strong></p>
                                    <li>Comparative Literature</li>
                                    <li>Women’s Writing  </li>
                                    <li>World Literature  </li>
                                    <li>Cultural Studies  </li>

                                    <p><strong>Skill-Based Courses:</strong></p>
                                    <li>Academic Writing and Research Methodology</li>
                                    <li>Translation Studies  </li>
                                    <li>Creative Writing  </li>
                                    <li>Media and Communication Studies  </li>

                                    <p><strong>Practical Learning:</strong></p>
                                    <li>Research paper writing and seminar presentations.</li>
                                    <li>Dissertation or thesis on a chosen literary or linguistic topic in the final year.</li>
                                    <li>Participation in literary workshops, debates, and cultural events.</li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of M.A. English have a wide range of career opportunities in education, media, publishing, and more, including:  </p>
                                    <p><strong>Education and Academia:</strong></p>
                                    <li>Lecturer or Professor in colleges and universities.  </li>
                                    <li>Researcher or Academic Writer specializing in English studies.  </li>

                                    <p><strong>Writing and Content Creation:</strong></p>
                                    <li>Creative Writer, Novelist, or Poet.  </li>
                                    <li>Content Writer or Editor for digital and print media.  </li>
                                    <li>Copywriter or Scriptwriter in advertising or entertainment.  </li>

                                    <p><strong>Publishing and Journalism:</strong></p>
                                    <li>Editor or Proofreader in publishing houses.  </li>
                                    <li>Journalist or Reporter for newspapers, magazines, and online platforms.  </li>

                                    <p><strong>Cultural and Literary Fields:</strong></p>
                                    <li>Positions in english literary forums, cultural organizations, and heritage institutions.</li>
                                    <li>Event coordination for english cultural festivals and literary events.</li>

                                    <p><strong>Media and Communication:</strong></p>
                                    <li>Media Specialist or Communication Consultant.</li>
                                    <li>Roles in public relations, corporate communication, or media production.</li>

                                    <p><strong>Translation and Interpretation:</strong></p>
                                    <li>Translator or Interpreter for government agencies, organizations, or publishing houses</li>
                                    <li>Freelance translation services for literary and non-literary works.  </li>

                                    <p><strong>Civil Services and Competitive Exams:</strong></p>
                                    <li>Strong foundation for exams like UPSC or state-level public service commissions, especially in English-related roles.  </li>

                                    <p><strong>Cultural and Creative Industries:</strong></p>
                                    <li>Literary Critic or Reviewer for publications or cultural forums.  </li>
                                    <li>Event Coordinator for literary festivals and cultural events.  </li>

                                    <p><strong>Higher Education and Research:</strong></p>
                                    <li>Pursue M.Phil. or Ph.D. in English for advanced academic and research roles.</li>
                                    <li>Researcher in cultural studies, comparative literature, or language studies.  </li>
                                    
                                    <p>The M.A. English program equips students with critical, creative, and communicative 
                                        skills essential for academic, professional, and cultural contributions. By delving 
                                        deeply into literature and language, graduates are well-prepared for meaningful careers
                                         and advanced research opportunities.</p>






                                </div>
                            </div>
                            
                            <div class="commerce">
                                <div class="sub-title">
                                    Master of Commerce (M.Com)
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Department:</h6>
                                    <p>The Department of Commerce at Auxilium Arts and Science College for Women is dedicated to nurturing
                                         advanced knowledge in business, finance, and commerce. The department focuses on developing 
                                         critical thinking, analytical skills, and ethical decision-making among students. With a 
                                         blend of theoretical knowledge and practical applications, the program equips students for 
                                         leadership roles in business, academia, and research.  </p>

                                    <h6>About the Course:</h6>
                                    <p>The "Master of Commerce (M.Com)" is a two-year postgraduate program designed to provide an 
                                        in-depth understanding of commerce, finance, accounting, and business management. The course 
                                        is ideal for students aiming to pursue higher-level roles in corporate finance, banking, and 
                                        academia or preparing for professional certifications.  
                                    </p>
                                    <h6>The program aims to:</h6>

                                    <li>Develop expertise in advanced commerce and finance concepts.  </li>
                                    <li>Foster analytical and research skills for solving business and economic challenges.  </li>
                                    <li>Equip students with leadership and managerial abilities for the business world.  </li>
                                    <li>Prepare students for academic, professional, and entrepreneurial pursuits.  </li>

                                    <h6>The Curriculum Overview:</h6>
                                    <p>The M.Com program spans two years and includes the following components:</p>

                                    <p><strong>Core Subjects:</strong></p>
                                    <li>Advanced Financial Accounting   </li>
                                    <li>Corporate Finance and Strategic Management   </li>
                                    <li>Cost and Management Accounting   </li>
                                    <li>Taxation and GST   </li>
                                    <li>Business Research Methods </li>
                                    <li>Banking and Financial Services   </li>

                                    <p><strong>Elective Subjects:</strong></p>
                                    <li>Investment and Portfolio Management   </li>
                                    <li>E-Commerce and Digital Business   </li>
                                    <li>International Business and Trade   </li>
                                    <li>Financial Markets and Institutions   </li>

                                    <p><strong>Skill-Based Courses:</strong></p>
                                    <li>Business Analytics and Data Interpretation   </li>
                                    <li>Entrepreneurship Development </li>
                                    <li>Risk Management and Insurance  </li>
                                    <li>Advanced Excel and Financial Modelling </li>

                                    <p><strong>Practical Learning:</strong></p>
                                    <li>Case studies on business strategy and financial planning.  </li>
                                    <li>Research projects on contemporary business issues in the final year.  </li>
                                    <li>Internship opportunities in finance, accounting, or business consultancy.  </li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of M.Com have diverse career opportunities in finance, business, research, and academia, including:  </p>
                                    <p><strong>Corporate Finance and Accounting:</strong></p>
                                    <li>Financial Analyst, Accountant, or Auditor in corporate firms. </li>
                                    <li>Roles in budget management, investment analysis, or cost accounting.   </li>

                                    <p><strong>Banking and Insurance:</strong></p>
                                    <li>Positions in commercial and investment banking as Credit Analyst, Risk Manager, or Loan Officer.  </li>
                                    <li>Insurance Consultant or Claims Specialist.</li>

                                    <p><strong>Business and Management:</strong></p>
                                    <li>Business Development Manager or Operations Manager in multinational corporations.  </li>
                                    <li>Consultant for financial planning or business strategy.  </li>

                                    <p><strong>Entrepreneurship:</strong></p>
                                    <li>Entrepreneur or Startup Founder in commerce or finance-focused businesses.  </li>


                                    <p><strong>Education and Academia:</strong></p>
                                    <li>Lecturer or Professor in colleges and universities.  </li>
                                    <li>Academic Researcher or Author in commerce and business studies.  </li>


                                    <p><strong>Public Sector and Civil Services:</strong></p>
                                    <li>Eligibility for competitive exams like UPSC, SSC, or state public service commissions.  </li>
                                    <li>Roles in government departments dealing with commerce, trade, and finance.  </li>

                                    <p><strong>Professional Certifications:</strong></p>
                                    <li>Strong foundation for pursuing Chartered Accountancy (CA), Cost and Management Accounting (CMA), Company Secretary (CS), or Certified Financial Analyst (CFA).  </li>

                                    <p><strong>Consulting and Auditing:</strong></p>
                                    <li>Tax Consultant, Auditor, or Compliance Officer in consultancy firms.  </li>
                                    <li>Independent consultancy for small businesses or startups.  </li>

                                    <p><strong>E-Commerce and Digital Business:</strong></p>
                                    <li>Roles in online business platforms as E-Commerce Analyst or Digital Marketing Specialist. </li>


                                    <p>The M.Com program provides a comprehensive and in-depth understanding of commerce, 
                                        preparing students for leadership roles and specialized careers in business, finance, 
                                        and academia. With its emphasis on analytical and managerial skills, the program fosters 
                                        both professional growth and academic excellence.</p>
                                </div>
                            </div>
                            
                            <div class="cs">
                                <div class="sub-title">
                                Master of Science in Computer Science (M.Sc. Computer Science)
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Department:</h6>
                                    <p>The Department of Computer Science at Auxilium Arts and Science College for Women is committed
                                         to producing industry-ready professionals and innovative researchers in the field of 
                                         computer science. The department emphasizes a balance between theoretical foundations
                                          and practical applications, providing students with the tools to thrive in academia, 
                                          industry, and entrepreneurship. State-of-the-art labs and experienced faculty ensure 
                                          an enriching learning experience.  </p>

                                    <h6>About the Course:</h6>
                                    <p>The "Master of Science in Computer Science (M.Sc. Computer Science)" is a two-year postgraduate 
                                        program designed to provide advanced knowledge and skills in computer science. The course
                                         covers theoretical concepts, emerging technologies, and research methodologies, preparing 
                                         students for careers in IT, research, and academia.  
                                    </p>
                                    <h6>The program aims to:</h6>

                                    <li>Equip students with advanced knowledge of computing systems, algorithms, and software development.  </li>
                                    <li>Foster research-oriented skills and innovative thinking.  </li>
                                    <li>Explore emerging areas like artificial intelligence, machine learning, and cybersecurity.</li>
                                    <li>Prepare students for leadership roles in the technology industry or academia.  </li>

                                    <h6>The Curriculum Overview:</h6>
                                    <p>The M.Sc. Computer Science program spans two years and includes the following components: </p>

                                    <p><strong>Core Subjects:</strong></p>
                                    <li>Advanced Data Structures and Algorithms  </li>
                                    <li>Machine Learning and Artificial Intelligence   </li>
                                    <li>Database Systems and Data Analytics   </li>
                                    <li>Software Engineering and Quality Assurance </li>
                                    <li>Advanced Operating Systems  </li>
                                    <li>Computer Networks and Cybersecurity  </li>

                                    <p><strong>Elective Subjects:</strong></p>
                                    <li>Cloud Computing  </li>
                                    <li>Internet of Things (IoT)   </li>
                                    <li>Blockchain Technology  </li>
                                    <li>Big Data Analytics   </li>

                                    <p><strong>Skill-Based Courses:</strong></p>
                                    <li>Programming with Python and R   </li>
                                    <li>Web and Mobile Application Development   </li>
                                    <li>DevOps and Agile Development   </li>
                                    <li>Advanced Computer Graphics and Visualization </li>

                                    <p><strong>Practical Learning:</strong></p>
                                    <li>Hands-on lab sessions in programming, networking, and data analysis.   </li>
                                    <li>Mini-projects in emerging technologies like AI, IoT, or cloud computing.  </li>
                                    <li>A comprehensive dissertation or thesis on a chosen research topic in the final year.</li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of M.Sc. Computer Science have diverse career opportunities in IT, research, and education, including:  </p>
                                    <p><strong>Software Development and Engineering:</strong></p>
                                    <li>Software Engineer, Full-Stack Developer, or Mobile App Developer.   </li>
                                    <li>Quality Assurance Engineer or Test Automation Specialist.  </li>

                                    <p><strong>Data Science and Analytics:</strong></p>
                                    <li>Data Scientist or Big Data Engineer.  </li>
                                    <li>Business Intelligence Analyst or Data Analyst.  </li>

                                    <p><strong>Cybersecurity and Network Administration:</strong></p>
                                    <li>Cybersecurity Analyst or Ethical Hacker.   </li>
                                    <li>Network Administrator or Security Consultant. </li>


                                    <p><strong>Artificial Intelligence and Machine Learning:</strong></p>
                                    <li>AI/ML Engineer or Researcher.   </li>
                                    <li>Specialist in Natural Language Processing or Computer Vision.</li>


                                    <p><strong>Cloud Computing and IoT:</strong></p>
                                    <li>Cloud Architect or IoT Specialist in tech firms.  </li>
                                    <li>Consultant for cloud-based solutions or IoT implementations.  </li>

                                    <p><strong>Education and Research:</strong></p>
                                    <li> Lecturer or Professor in colleges and universities.  </li>
                                    <li>Researcher in academic or corporate R&D centers.  </li>

                                    <p><strong>Higher Education and Certifications:</strong></p>
                                    <li>Pursue advanced degrees like M.Sc. in Computer Science, MCA, or specialized certifications in cloud computing, data science, or machine learning.</li>

                                    <p><strong>Entrepreneurship:</strong></p>
                                    <li>Start your own tech venture or work as a freelance developer or consultant. </li>

                                    <p><strong>Public Sector and Competitive Exams:</strong></p>
                                    <li>Roles in government IT departments or public-sector organizations.  </li>
                                    <li>Preparation for exams like UPSC, TNPSC, or IT-specific roles in government services.</li>


                                    <p>The M.Sc. Computer Science program equips students with the knowledge and skills to excel
                                         in technology-driven industries and research. With a focus on emerging technologies and
                                          problem-solving abilities, graduates are well-prepared for high-impact roles in academia,
                                           industry, and entrepreneurship.</p>
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