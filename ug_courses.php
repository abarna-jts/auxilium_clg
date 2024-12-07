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
    #tamil:checked~.list .indicator {
        top: 0;
    }

    #history:checked~.list .indicator {
        top: 70px;
    }

    #economic:checked~.list .indicator {
        top: 150px;
    }

    #commerce:checked~.list .indicator {
        top: 220px;
    }

    #ca:checked~.list .indicator {
        top: 300px;
    }

    #cs:checked~.list .indicator {
        top: 375px;
    }

    #dsa:checked~.list .indicator {
        top: 450px;
    }

    #psychology:checked~.list .indicator {
        top: 525px;
    }

    #microbiology:checked~.list .indicator {
        top: 600px;
    }

    #maths:checked~.list .indicator {
        top: 670px;
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
    .content .maths {
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

    @media(max-width:768px) {
        
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
                        <h2 class="breadcrumb-title">Undergraduate Programs</h2>
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
                        UG Courses
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
                                    Bachelor of Arts in Tamil (B.A. Tamil)
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Department:</h6>
                                    <p>The Department of Tamil at Auxilium Arts and Science College for Women is dedicated
                                        to preserving and promoting the rich heritage, culture, and literary excellence of
                                        the Tamil language. The department emphasizes the holistic development of students
                                        by nurturing their linguistic, literary, and analytical skills. Through a
                                        combination of traditional and modern pedagogical approaches, the department
                                        provides an enriching academic environment that fosters critical thinking
                                        and creativity. </p>

                                    <h6>About the Course:</h6>
                                    <p>The "Bachelor of Arts in Tamil" is a comprehensive undergraduate program designed
                                        to provide students with a deep understanding of Tamil literature, language, and
                                        cultural history. The course blends traditional Tamil literary works with
                                        contemporary texts to give students a broad perspective of the language's
                                        evolution and its relevance in the modern world.
                                    </p>
                                    <h6>The program aims to:</h6>

                                    <li>Enhance proficiency in the Tamil language. </li>
                                    <li> Provide an in-depth study of Tamil literature, including classical, medieval, and modern works. </li>
                                    <li> Develop critical appreciation and analytical skills for literary and linguistic research. </li>
                                    <li> Explore the cultural and historical contexts of Tamil literary works. </li>

                                    <h6>The Curriculum Overview:</h6>
                                    <p>The B.A. Tamil program typically spans three years and includes the following key components: </p>

                                    <p><strong>Core Subjects:</strong></p>
                                    <li>Classical Tamil Literature (Sangam Literature, Bhakthi Literature, Epics)</li>
                                    <li>Modern Tamil Literature (Short Stories, Novels, Poetry, Drama)</li>
                                    <li>Grammar and Linguistics</li>
                                    <li>History of Tamil Language and Culture</li>
                                    <li>Folklore and Oral Traditions </li>

                                    <p><strong>Elective Subjects:</strong></p>
                                    <li>Comparative Literature</li>
                                    <li>Tamil Journalism</li>
                                    <li>Tamil for Competitive Exams</li>
                                    <li>Creative Writing and Translation</li>

                                    <p><strong>Skill-Based Courses:</strong></p>
                                    <li>Tamil Computing and Digital Tools</li>
                                    <li>Communication Skills in Tamil</li>

                                    <p><strong>Project Work:</strong></p>
                                    <li>Students undertake a research-based project in their final year, focusing on a specific
                                        area of Tamil literature, language, or culture. </li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of B.A. Tamil have diverse career opportunities across various fields, such as:</p>
                                    <p><strong>Education and Academia:</strong></p>
                                    <li>Tamil Teacher or Lecturer in schools, colleges, and universities.</li>
                                    <li>Researcher in Tamil language and literature.</li>

                                    <p><strong>Media and Journalism:</strong></p>
                                    <li>Reporter, Editor, or Writer for Tamil newspapers, magazines, and online media platforms.</li>
                                    <li>Content Creator or Translator for media and publishing industries.</li>

                                    <p><strong>Civil Services and Competitive Exams:</strong></p>
                                    <li>Preparation for Tamil Nadu Public Service Commission (TNPSC) and other civil service
                                        examinations where Tamil knowledge is advantageous. </li>

                                    <p><strong>Cultural and Literary Fields:</strong></p>
                                    <li>Positions in Tamil literary forums, cultural organizations, and heritage institutions.</li>
                                    <li>Event coordination for Tamil cultural festivals and literary events.</li>

                                    <p><strong>Creative Arts and Translation:</strong></p>
                                    <li>Tamil Scriptwriter or Lyricist for the film and television industry.</li>
                                    <li>Translator for literary works, official documents, and international Tamil projects.</li>

                                    <p><strong>Digital and IT Industries:</strong></p>
                                    <li>Tamil content developer for websites, mobile applications, and e-learning platforms.</li>
                                    <li>Tamil language specialist in artificial intelligence and linguistic research projects.</li>

                                    <p>The B.A. Tamil program not only equips students with linguistic proficiency and literary
                                        insight but also prepares them to contribute meaningfully to the preservation and promotion
                                        of Tamil language and culture in a globalized world.</p>






                                </div>
                            </div>
                            <div class="history">
                                <div class="sub-title">
                                    Bachelor of Arts in History (B.A. History)
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Department:</h6>
                                    <p>The Department of History at Auxilium Arts and Science College for Women is committed to
                                        fostering a deep understanding of historical events, cultures, and civilizations.
                                        Through a multidisciplinary approach, the department emphasizes critical analysis, research,
                                        and the contextual understanding of historical narratives. It seeks to instill in students
                                        a sense of global citizenship and an appreciation for the significance of history in
                                        shaping contemporary society. </p>

                                    <h6>About the Course:</h6>
                                    <p>The "Bachelor of Arts in History" is an undergraduate program designed to provide students with a comprehensive understanding of the past and its relevance to the present and future. The program covers a wide range of topics, including ancient, medieval, and modern history, as well as world civilizations, cultural heritage, and historiography.
                                    </p>
                                    <h6>The course aims to:</h6>

                                    <li>Develop an in-depth knowledge of historical events, movements, and figures. </li>
                                    <li> Enhance analytical and critical thinking skills through the study of historical contexts and interpretations </li>
                                    <li>Promote research and inquiry into historical sources and evidence. </li>
                                    <li> Foster an appreciation of cultural diversity and global interconnectedness. </li>

                                    <h6>The Curriculum Overview:</h6>
                                    <p>The B.A. History program typically spans three years and includes the following key components: </p>

                                    <p><strong>Core Subjects:</strong></p>
                                    <li>Ancient Indian History and Culture </li>
                                    <li>Medieval Indian History </li>
                                    <li>Modern Indian History (1757–1947) </li>
                                    <li>History of World Civilizations </li>
                                    <li>History of Tamil Nadu </li>
                                    <li>Historiography and Historical Methods </li>

                                    <p><strong>Elective Subjects:</strong></p>
                                    <li>Indian National Movement </li>
                                    <li>History of Science and Technology </li>
                                    <li>Gender Studies in History </li>
                                    <li>Environmental History</li>

                                    <p><strong>Skill-Based Courses:</strong></p>
                                    <li>Archival Studies and Museum Management </li>
                                    <li>Historical Tourism and Heritage Management </li>
                                    <li>Research Methodology </li>

                                    <p><strong>Project Work:</strong></p>
                                    <li>Students undertake a research-based project in their final year, focusing on a specific historical theme, event, or figure. </li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of B.A. History have diverse career opportunities across various fields, including:</p>
                                    <p><strong>Education and Academia:</strong></p>
                                    <li>History Teacher or Lecturer in schools, colleges, and universities. </li>
                                    <li>Researcher in historical studies and cultural preservation. </li>

                                    <p><strong>Civil Services and Competitive Exams:</strong></p>
                                    <li>Ideal preparation for civil service examinations such as UPSC and TNPSC, where knowledge of history is a key component. </li>

                                    <p><strong>Museums and Heritage Management:</strong></p>
                                    <li>Museum Curator or Archivist.</li>
                                    <li>Heritage Site Manager or Guide</li>
                                    <li>Consultant for cultural preservation projects.</li>

                                    <p><strong>Media and Journalism:</strong></p>
                                    <li>Historical Content Writer or Editor for newspapers, magazines, and digital media</li>
                                    <li>Documentary Filmmaker or Researcher for historical narratives. </li>

                                    <p><strong>Tourism and Travel:</strong></p>
                                    <li>Historical Tour Guide or Coordinator</li>
                                    <li>Heritage Tourism Specialist or Consultant</li>

                                    <p><strong>Publishing and Translation:</strong></p>
                                    <li>Author, Editor, or Translator of historical books and research papers</li>

                                    <p><strong>Non-Governmental Organizations (NGOs):</strong></p>
                                    <li>- Involvement in cultural and historical awareness programs, community development, and educational outreach. </li>

                                    <p><strong>Archaeology and Cultural Studies:</strong></p>
                                    <li>Archaeological Assistant or Researcher in excavations and heritage studies.</li>
                                    <li>Cultural Anthropologist or Historian.</li>

                                    <p>The "B.A. History" program equips students with the knowledge and skills necessary to explore
                                        the connections between the past and present, fostering a deeper understanding of societal
                                        evolution. It prepares graduates to make meaningful contributions in various professional
                                        fields while promoting historical awareness and cultural appreciation.</p>
                                </div>
                            </div>
                            <div class="economic">
                                <div class="sub-title">
                                    Bachelor of Arts in Economics (B.A. Economics)
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Department:</h6>
                                    <p>The Department of Economics at Auxilium Arts and Science College for Women is
                                        dedicated to equipping students with a strong foundation in economic theory,
                                        policy, and application. With a focus on analytical thinking and real-world
                                        problem-solving, the department aims to produce graduates who can critically
                                        evaluate economic issues and contribute meaningfully to societal development.
                                        The department fosters a dynamic learning environment through interactive teaching,
                                        research opportunities, and co-curricular activities. </p>

                                    <h6>About the Course:</h6>
                                    <p>The "Bachelor of Arts in Economics" is an undergraduate program designed to provide
                                        a comprehensive understanding of economic principles, theories, and their practical
                                        applications. The program covers both microeconomics and macroeconomics, along with
                                        specialized areas such as public finance, international trade, and developmental economics.
                                    </p>
                                    <h6>The course aims to:</h6>

                                    <li>Build a strong theoretical foundation in economics. </li>
                                    <li>Develop analytical and quantitative skills for economic research and policy-making. </li>
                                    <li>Foster critical thinking and problem-solving abilities in addressing economic challenges. </li>
                                    <li>Explore the interconnections between economics and other disciplines, such as politics, sociology, and environmental studies. </li>

                                    <h6>The Curriculum Overview:</h6>
                                    <p>The B.A. Economics program typically spans three years and includes the following key components:</p>

                                    <p><strong>Core Subjects:</strong></p>
                                    <li>Microeconomics and Macroeconomics </li>
                                    <li>Indian Economy </li>
                                    <li>Public Finance and Fiscal Policy</li>
                                    <li>International Trade and Finance </li>
                                    <li>Development Economics </li>
                                    <li>Environmental Economics </li>

                                    <p><strong>Elective Subjects:</strong></p>
                                    <li>Agricultural Economics </li>
                                    <li>Industrial Economics </li>
                                    <li>Financial Markets and Institutions </li>
                                    <li>Econometrics and Data Analysis </li>

                                    <p><strong>Skill-Based Courses:</strong></p>
                                    <li>Quantitative Techniques for Economics </li>
                                    <li>Historical Tourism and Heritage Management </li>
                                    <li>Economic Survey and Report Writing </li>
                                    <li>Policy Analysis and Economic Forecasting </li>

                                    <p><strong>Project Work:</strong></p>
                                    <li>Students undertake a research-based project in their final year, focusing on real-world economic issues, policy analysis, or data-driven research. </li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of B.A. Economics have diverse career opportunities across various sectors, including:</p>
                                    <p><strong>Government and Policy Making:</strong></p>
                                    <li>Economic Analyst or Policy Advisor in government departments and think tanks.</li>
                                    <li>Economist in public institutions such as Reserve Bank of India (RBI), Planning Commission, or ministries. </li>

                                    <p><strong>Banking and Finance:</strong></p>
                                    <li>Roles in commercial banks, investment banks, or financial institutions as Financial Analyst, Risk Manager, or Loan Officer. </li>

                                    <p><strong>Corporate Sector:</strong></p>
                                    <li>Business Analyst or Consultant in industries such as consulting, market research, and corporate strategy. </li>

                                    <p><strong>Education and Academia:</strong></p>
                                    <li>Teaching positions in schools, colleges, and universities.</li>
                                    <li>Researcher or Academic Writer specializing in economic studies. </li>

                                    <p><strong>International Organizations:</strong></p>
                                    <li>Opportunities in organizations like the United Nations, World Bank, International Monetary Fund, or NGOs working on developmental and economic projects. </li>


                                    <p><strong>Entrepreneurship and Business Development:</strong></p>
                                    <li>Startup founder or entrepreneur, applying economic knowledge to innovate and solve market challenges. </li>

                                    <p><strong>Data Analytics and Research:</strong></p>
                                    <li>Data Analyst or Research Associate in economic research firms, multinational corporations, or academic institutions. </li>

                                    <p><strong>Competitive Exams:</strong></p>
                                    <li>Strong foundation for exams such as UPSC, SSC, and TNPSC, where economic knowledge is highly valued. </li>


                                    <p>The "B.A. Economics" program prepares students to tackle contemporary economic challenges
                                        and contribute to sustainable development and policymaking. It equips graduates with the
                                        skills and knowledge necessary for impactful careers in a variety of fields, fostering
                                        both personal growth and societal advancement.</p>
                                </div>
                            </div>
                            <div class="commerce">
                                <div class="sub-title">
                                    Bachelor of Commerce (B.Com)
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Department:</h6>
                                    <p>The Department of Commerce at Auxilium Arts and Science College for Women is dedicated to developing
                                        skilled professionals with a strong foundation in business, finance, and entrepreneurship.
                                        The department fosters a learning environment that emphasizes academic rigor, practical knowledge,
                                        and ethical decision-making. Through a blend of theoretical concepts and hands-on training,
                                        students are prepared to excel in the competitive global business environment. </p>

                                    <h6>About the Course:</h6>
                                    <p>The "Bachelor of Commerce (B.Com)" is an undergraduate program designed to provide students
                                        with a comprehensive understanding of commerce, accounting, finance, taxation, and business
                                        law. The course emphasizes practical knowledge and analytical skills to meet the demands
                                        of a dynamic business landscape.
                                    </p>
                                    <h6>The program aims to:</h6>

                                    <li>Build a solid foundation in commerce, finance, and business management.</li>
                                    <li>Enhance analytical and problem-solving skills through case studies and real-world applications. </li>
                                    <li>Equip students with the knowledge and skills required for professional careers or entrepreneurial ventures. </li>
                                    <li>Foster ethical business practices and social responsibility. </li>

                                    <h6>The Curriculum Overview:</h6>
                                    <p>The B.Com program typically spans three years and includes the following key components: </p>

                                    <p><strong>Core Subjects:</strong></p>
                                    <li>Financial Accounting </li>
                                    <li>Business Law </li>
                                    <li>Corporate Accounting </li>
                                    <li>Income Tax and GST </li>
                                    <li>Cost and Management Accounting </li>
                                    <li>Banking and Financial Services </li>

                                    <p><strong>Elective Subjects:</strong></p>
                                    <li>Investment Management </li>
                                    <li>E-Commerce </li>
                                    <li>Business Analytics </li>
                                    <li>Entrepreneurship Development </li>

                                    <p><strong>Skill-Based Courses:</strong></p>
                                    <li>Business Communication </li>
                                    <li>Computer Applications in Business </li>
                                    <li>Digital Marketing and Social Media Management </li>
                                    <li>Financial Modelling </li>

                                    <p><strong>Project Work:</strong></p>
                                    <li>Students undertake a practical project or internship in their final year, focusing on topics such as financial analysis, business strategy, or market research. </li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of B.Com have diverse career opportunities across various industries and sectors, including:</p>
                                    <p><strong>Accounting and Finance:</strong></p>
                                    <li>Accountant, Tax Consultant, or Auditor in public and private organizations. </li>
                                    <li>Financial Analyst or Investment Advisor in financial institutions or firms. </li>

                                    <p><strong>Banking and Finance:</strong></p>
                                    <li>Roles in commercial and investment banking as Loan Officer, Risk Analyst, or Relationship Manager.</li>
                                    <li>Positions in insurance companies as Underwriter or Claims Adjuster. </li>

                                    <p><strong>Corporate Sector:</strong></p>
                                    <li>Business Analyst, Operations Manager, or Corporate Consultant in multinational companies.</li>
                                    <li>Marketing Executive or Sales Manager in retail and service industries.</li>

                                    <p><strong>Entrepreneurship:</strong></p>
                                    <li>Entrepreneur or Startup Founder, applying business knowledge to launch and manage ventures. </li>


                                    <p><strong>Public Sector and Civil Services:</strong></p>
                                    <li>Eligibility for government exams like UPSC, SSC, and TNPSC, especially for roles in accounts and finance departments.</li>


                                    <p><strong>Entrepreneurship and Business Development:</strong></p>
                                    <li>Startup founder or entrepreneur, applying economic knowledge to innovate and solve market challenges. </li>

                                    <p><strong>Professional Courses:</strong></p>
                                    <li>A strong foundation for pursuing advanced qualifications such as Chartered Accountancy (CA), Cost and Management Accounting (CMA), Company Secretary (CS), or MBA in Finance or Marketing. </li>

                                    <p><strong>E-Commerce and Digital Marketing:</strong></p>
                                    <li>Roles in e-commerce firms as Digital Marketing Specialist or E-Business Analyst. </li>

                                    <p><strong>Education and Research:</strong></p>
                                    <li>Teaching positions or research roles in commerce and business studies. </li>


                                    <p>The "B.Com" program is a gateway to numerous professional paths, offering students the
                                        knowledge and skills to thrive in the business world. The course not only prepares
                                        graduates for immediate employment but also equips them for further studies and
                                        professional growth.</p>
                                </div>
                            </div>
                            <div class="ca">
                                <div class="sub-title">
                                    Bachelor of Computer Applications (B.C.A.)
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Department:</h6>
                                    <p>The Department of Computer Applications at Auxilium Arts and Science College for
                                        Women is committed to nurturing future technology professionals and innovators.
                                        The department provides a robust academic foundation in computer science and
                                        applications while encouraging creativity, problem-solving, and adaptability
                                        in the ever-evolving IT industry. With access to modern labs, skilled faculty,
                                        and industry-aligned training, students are well-prepared to excel in the
                                        technological domain.</p>

                                    <h6>About the Course:</h6>
                                    <p>The "Bachelor of Computer Applications (B.C.A.)" is a three-year undergraduate program that equips students with the knowledge and skills required for careers in the IT and software industry. The course offers a balanced mix of theoretical concepts and practical applications in computing, programming, and information technology.
                                    </p>
                                    <h6>The program aims to:</h6>

                                    <li>Develop proficiency in programming languages and software development. </li>
                                    <li>Provide hands-on experience in system design, database management, and web technologies. </li>
                                    <li>Foster analytical and critical thinking skills to solve real-world computing problems.</li>
                                    <li>Prepare students for advanced studies and professional roles in the IT sector. </li>

                                    <h6>The Curriculum Overview:</h6>
                                    <p>The B.C.A. program spans three years and includes the following components:</p>

                                    <p><strong>Core Subjects:</strong></p>
                                    <li>Programming Languages (C, C++, Java, Python) </li>
                                    <li>Data Structures and Algorithms </li>
                                    <li>Database Management Systems (DBMS) </li>
                                    <li>Operating Systems </li>
                                    <li>Software Engineering </li>
                                    <li>Computer Networks </li>

                                    <p><strong>Elective Subjects:</strong></p>
                                    <li>Artificial Intelligence and Machine Learning</li>
                                    <li>Mobile Application Development</li>
                                    <li>Cloud Computing </li>
                                    <li>Cybersecurity </li>

                                    <p><strong>Skill-Based Courses:</strong></p>
                                    <li>Web Design and Development </li>
                                    <li>Multimedia and Graphics Design </li>
                                    <li>Internet of Things (IoT) Basics </li>
                                    <li>Big Data Analytics </li>

                                    <p><strong>Practical Learning:</strong></p>
                                    <li>Laboratory sessions for programming, software development, and project execution.</li>
                                    <li>Minor and major projects focusing on real-world IT applications.</li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of B.C.A. have a wide range of career opportunities in the technology and IT sectors, including:</p>
                                    <p><strong>Software Development:</strong></p>
                                    <li>Software Developer or Engineer in IT companies and startups.</li>
                                    <li>Application Developer for desktop, mobile, and web platforms.</li>

                                    <p><strong>IT Services and Consulting:</strong></p>
                                    <li>IT Consultant or Support Specialist. </li>
                                    <li>System Analyst or IT Administrator in organizations. </li>

                                    <p><strong>Web Development and Design:</strong></p>
                                    <li>Web Developer or UX/UI Designer for online platforms. </li>
                                    <li>E-commerce Specialist or Webmaster. </li>

                                    <p><strong>Data Science and Analytics:</strong></p>
                                    <li>Data Analyst or Data Scientist in industries relying on big data. </li>
                                    <li>Roles in business intelligence and data visualization.</li>


                                    <p><strong>Cybersecurity and Network Administration:</strong></p>
                                    <li>Cybersecurity Analyst or Ethical Hacker. </li>
                                    <li>Network Administrator or Security Specialist. </li>


                                    <p><strong>Emerging Technologies:</strong></p>
                                    <li>AI/ML Developer or Robotics Programmer. </li>
                                    <li>IoT Specialist or Blockchain Developer. </li>

                                    <p><strong>Entrepreneurship:</strong></p>
                                    <li>Launch your own tech startup or become a freelance developer. </li>

                                    <p><strong>Higher Education and Certifications:</strong></p>
                                    <li>Pursue advanced degrees like M.C.A., M.Sc. in Computer Science, or MBA in IT Management.</li>
                                    <li>Obtain professional certifications in cloud computing, cybersecurity, or data science. </li>

                                    <p><strong>Competitive Exams and Public Sector:</strong></p>
                                    <li>Eligibility for competitive exams like UPSC and state-level exams with IT roles.</li>
                                    <li>Positions in government IT departments or public-sector undertakings.</li>


                                    <p>The B.C.A. program equips students with the technical expertise, creativity, and problem-solving skills necessary to thrive in the IT sector. Graduates are well-positioned for rewarding careers in technology or advanced studies to further enhance their knowledge and opportunities.</p>
                                </div>
                            </div>
                            <div class="cs">
                                <div class="sub-title">
                                    Bachelor of Science in Computer Science (B.Sc. Computer Science)
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Department:</h6>
                                    <p>The Department of Computer Science at Auxilium Arts and Science College for Women is dedicated
                                        to preparing students for the dynamic and rapidly evolving field of technology. With a focus on
                                        foundational concepts, practical skills, and emerging technologies, the department fosters innovation,
                                        analytical thinking, and technical expertise. Equipped with state-of-the-art labs and experienced faculty,
                                        students are guided to become competent IT professionals and problem-solvers. </p>

                                    <h6>About the Course:</h6>
                                    <p>The "Bachelor of Science in Computer Science (B.Sc. Computer Science)" is a three-year
                                        undergraduate program designed to provide a strong foundation in computing principles,
                                        programming, and system design. The course emphasizes both theoretical understanding
                                        and practical applications to prepare students for the demands of the IT industry.
                                    </p>
                                    <h6>The program aims to:</h6>

                                    <li>Provide in-depth knowledge of computer systems, programming, and software development.</li>
                                    <li> Foster problem-solving and critical thinking skills for IT-related challenges. </li>
                                    <li>Introduce students to emerging fields such as artificial intelligence, data science, and cybersecurity. </li>
                                    <li>Prepare students for careers in the IT industry or advanced studies in computer science. </li>

                                    <h6>The Curriculum Overview:</h6>
                                    <p>The B.Sc. Computer Science program spans three years and includes the following components:</p>

                                    <p><strong>Core Subjects:</strong></p>
                                    <li>Fundamentals of Programming (C, C++, Java, Python) </li>
                                    <li>Data Structures and Algorithms </li>
                                    <li>Computer Architecture and Organization </li>
                                    <li>Database Management Systems (DBMS) </li>
                                    <li>Operating Systems </li>
                                    <li>Software Engineering </li>

                                    <p><strong>Elective Subjects:</strong></p>
                                    <li>Artificial Intelligence and Machine Learning</li>
                                    <li>Internet of Things (IoT) </li>
                                    <li>Cloud Computing </li>
                                    <li>Mobile Application Development </li>

                                    <p><strong>Skill-Based Courses:</strong></p>
                                    <li>Web Design and Development </li>
                                    <li>Cybersecurity Basics </li>
                                    <li>Big Data Analytics </li>
                                    <li>Virtual Reality and Augmented Reality </li>

                                    <p><strong>Practical Learning:</strong></p>
                                    <li>Lab sessions for programming, software development, and networking. </li>
                                    <li>Mini-projects in core and elective subjects to solve real-world problems.</li>
                                    <li>Major project in the final year, focusing on research or IT application development.</li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of B.Sc. Computer Science have diverse career opportunities across various sectors, including: </p>
                                    <p><strong>Software Development and IT Services:</strong></p>
                                    <li>Software Developer, Programmer, or Tester in IT firms. </li>
                                    <li>Application Developer for desktop, mobile, or web platforms.</li>

                                    <p><strong>System Administration and Networking:</strong></p>
                                    <li>System Administrator or Network Engineer in IT departments.</li>
                                    <li>IT Support Specialist or Infrastructure Manager. </li>

                                    <p><strong>Data Science and Analytics:</strong></p>
                                    <li>Data Analyst or Data Scientist in organizations utilizing big data. </li>
                                    <li>Business Intelligence Analyst or Data Engineer. </li>

                                    <p><strong>Cybersecurity and Ethical Hacking:</strong></p>
                                    <li>Cybersecurity Analyst, Penetration Tester, or Ethical Hacker. </li>
                                    <li>Security Consultant for organizations. </li>


                                    <p><strong>Web and Mobile Technologies:</strong></p>
                                    <li>Web Developer, UX/UI Designer, or Mobile App Developer. </li>
                                    <li>E-commerce Specialist or Digital Solutions Architect. </li>


                                    <p><strong>Emerging Technologies:</strong></p>
                                    <li>Roles in AI/ML Development, Blockchain Technology, or IoT. </li>
                                    <li>Robotics Programmer or VR/AR Developer. </li>

                                    <p><strong>Entrepreneurship:</strong></p>
                                    <li>Start your own technology-focused business or freelance in software development. </li>

                                    <p><strong>Higher Education and Certifications:</strong></p>
                                    <li>Pursue advanced degrees like M.Sc. in Computer Science, MCA, or specialized certifications in cloud computing, data science, or machine learning.</li>

                                    <p><strong>Public Sector and Competitive Exams:</strong></p>
                                    <li>Opportunities in government IT roles or public-sector undertakings.</li>
                                    <li>Preparation for competitive exams like UPSC or state-level IT-specific roles. </li>


                                    <p>The B.Sc. Computer Science program equips students with the skills and knowledge
                                        to excel in the competitive and innovative IT sector. With a blend of theory,
                                        practical application, and exposure to cutting-edge technologies, graduates are
                                        well-prepared for successful careers or further academic pursuits.</p>
                                </div>
                            </div>
                            <div class="dsa">
                                <div class="sub-title">
                                    Bachelor of Science in Computer Science (Data Science and Analytics)
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Department:</h6>
                                    <p>The Department of Computer Science (Data Science and Analytics) at Auxilium Arts and
                                        Science College for Women is dedicated to preparing students for careers in the rapidly
                                        expanding field of data science. With a focus on computational techniques, statistical
                                        analysis, and big data technologies, the department emphasizes the development of practical
                                        skills and analytical thinking. The program fosters innovation and equips students to
                                        extract actionable insights from complex data, ensuring they are ready to tackle modern
                                        data-driven challenges. </p>

                                    <h6>About the Course:</h6>
                                    <p>The "Bachelor of Science in Computer Science (Data Science and Analytics)" is a specialized undergraduate program designed to provide a comprehensive understanding of data science principles, methods, and tools. The program integrates computer science, statistics, and data visualization techniques to prepare students for the demands of the data-driven economy.
                                    </p>
                                    <h6>The course aims to:</h6>

                                    <li>Develop proficiency in programming, data analysis, and visualization. </li>
                                    <li>Equip students with knowledge of big data technologies and tools like Python, R, and SQL.</li>
                                    <li>Foster problem-solving skills for real-world data challenges. </li>
                                    <li>Introduce students to emerging fields such as machine learning, artificial intelligence, and predictive analytics. </li>

                                    <h6>The Curriculum Overview:</h6>
                                    <p>The B.Sc. Computer Science (Data Science and Analytics) program spans three years and includes the following components: </p>

                                    <p><strong>Core Subjects:</strong></p>
                                    <li>Introduction to Data Science </li>
                                    <li>Programming for Data Science (Python, R) </li>
                                    <li>Data Structures and Algorithms </li>
                                    <li>Statistics for Data Analysis </li>
                                    <li>Database Management Systems (SQL, NoSQL) </li>
                                    <li>Machine Learning Basics </li>

                                    <p><strong>Elective Subjects:</strong></p>
                                    <li>Big Data Technologies (Hadoop, Spark) </li>
                                    <li>Predictive Analytics </li>
                                    <li>Artificial Intelligence and Deep Learning </li>
                                    <li>Business Analytics </li>

                                    <p><strong>Skill-Based Courses:</strong></p>
                                    <li>Data Visualization Tools (Tableau, Power BI) </li>
                                    <li>Cloud Computing for Data Science (AWS, Azure) </li>
                                    <li>Natural Language Processing (NLP)</li>
                                    <li>IoT and Data Integration </li>

                                    <p><strong>Practical Learning:</strong></p>
                                    <li>Hands-on projects involving data collection, cleaning, and visualization. </li>
                                    <li>Laboratory sessions in data modeling, algorithm implementation, and analytics. </li>
                                    <li>A capstone project in the final year focusing on solving real-world data problems. </li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of B.Sc. Computer Science (Data Science and Analytics) have a wide range of career opportunities in data-centric industries, including: </p>
                                    <p><strong>Data Analysis and Analytics:</strong></p>
                                    <li>Data Analyst or Business Analyst in industries like finance, healthcare, and e-commerce. </li>
                                    <li>Operations Analyst or Data Visualization Specialist. </li>

                                    <p><strong>Data Science and Machine Learning:</strong></p>
                                    <li>Data Scientist or Machine Learning Engineer. </li>
                                    <li>AI Specialist in technology firms and research organizations. </li>

                                    <p><strong>Big Data and Cloud Computing:</strong></p>
                                    <li>Big Data Engineer or Architect. </li>
                                    <li>Cloud Data Specialist using platforms like AWS, Azure, or Google Cloud. </li>

                                    <p><strong>IT and Software Development:</strong></p>
                                    <li>Software Developer for data-driven applications. </li>
                                    <li>System Administrator for data infrastructure management. </li>


                                    <p><strong>Business Intelligence and Decision Support</strong></p>
                                    <li>Business Intelligence Developer or Consultant. </li>
                                    <li> Decision Scientist in management and consulting firms.</li>


                                    <p><strong>Research and Higher Studies:</strong></p>
                                    <li>Pursue advanced degrees like M.Sc. in Data Science, AI, or Analytics. </li>
                                    <li>Research opportunities in academic or corporate settings. </li>

                                    <p><strong>Entrepreneurship:</strong></p>
                                    <li>Build a data-centric startup or freelance in data analytics and visualization.</li>


                                    <p><strong>Public Sector and Competitive Exams:</strong></p>
                                    <li>Roles in government departments focusing on big data and analytics. </li>
                                    <li>Eligibility for data-driven positions in public-sector undertakings. </li>


                                    <p>The B.Sc. Computer Science (Data Science and Analytics)* program is designed
                                        to produce graduates who are well-equipped to analyze, interpret, and utilize
                                        data to solve real-world problems. The combination of technical expertise,
                                        statistical knowledge, and practical exposure prepares students for
                                        impactful careers in one of the fastest-growing domains of the modern economy.</p>
                                </div>
                            </div>
                            <div class="psychology">
                                <div class="sub-title">
                                    Bachelor of Science in Psychology (B.Sc. Psychology)
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Department:</h6>
                                    <p>The Department of Psychology at Auxilium Arts and Science College for Women is
                                        dedicated to understanding and improving human behavior and mental health. With
                                        an emphasis on both theoretical knowledge and practical applications, the department
                                        provides a nurturing environment for students to explore the complexities of the
                                        human mind. The program focuses on fostering critical thinking, empathy, and research
                                        skills, preparing students for diverse careers in psychology and related fields. </p>

                                    <h6>About the Course:</h6>
                                    <p>The "Bachelor of Science in Psychology (B.Sc. Psychology)" is a three-year undergraduate
                                        program that delves into the scientific study of human behavior, thought processes,
                                        and emotions. The program blends foundational psychology theories with practical training,
                                        enabling students to analyze and address psychological challenges in individuals and
                                        communities.
                                    </p>
                                    <h6>The course aims to:</h6>

                                    <li>Provide an in-depth understanding of psychological principles and theories. </li>
                                    <li>Equip students with research and analytical skills for psychological studies.</li>
                                    <li>Foster an empathetic and ethical approach to understanding human behavior. </li>
                                    <li>Prepare students for advanced studies or professional roles in psychology. </li>

                                    <h6>The Curriculum Overview:</h6>
                                    <p>The B.Sc. Psychology program spans three years and includes the following components: </p>

                                    <p><strong>Core Subjects:</strong></p>
                                    <li>Introduction to Psychology </li>
                                    <li>Developmental Psychology </li>
                                    <li>Social Psychology </li>
                                    <li>Abnormal Psychology </li>
                                    <li>Cognitive Psychology </li>
                                    <li>Biopsychology </li>

                                    <p><strong>Elective Subjects:</strong></p>
                                    <li>Industrial and Organizational Psychology </li>
                                    <li>Educational Psychology </li>
                                    <li>Forensic Psychology </li>
                                    <li>Positive Psychology </li>

                                    <p><strong>Skill-Based Courses:</strong></p>
                                    <li>Psychological Assessment and Testing </li>
                                    <li>Counseling Techniques and Theories </li>
                                    <li>Research Methodology and Statistical Analysis </li>
                                    <li>Health Psychology </li>

                                    <p><strong>Practical Learning:</strong></p>
                                    <li>Lab sessions focused on psychological testing, data analysis, and case studies. </li>
                                    <li>Internship opportunities in mental health clinics, schools, or HR departments. </li>
                                    <li>Research projects on psychological topics in the final year. </li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of B.Sc. Psychology have diverse career opportunities in mental health,
                                        education, business, and research, including: </p>
                                    <p><strong>Clinical and Counseling Psychology:</strong></p>
                                    <li>Assistant Psychologist in mental health clinics or hospitals. </li>
                                    <li>Counselor in schools, colleges, or corporate settings. </li>

                                    <p><strong>Educational and Developmental Psychology:</strong></p>
                                    <li>School Counselor or Educational Psychologist. </li>
                                    <li>Developmental Specialist working with children and adolescents. </li>

                                    <p><strong>Industrial and Organizational Psychology:</strong></p>
                                    <li>HR Specialist or Organizational Behavior Consultant. </li>
                                    <li>Employee Wellness Coordinator in corporate environments. </li>

                                    <p><strong>Forensic and Criminal Psychology:</strong></p>
                                    <li>Forensic Assistant or Consultant for legal and criminal cases. </li>
                                    <li>Behavioral Analyst in law enforcement agencies. </li>


                                    <p><strong>Social Work and Community Services:</strong></p>
                                    <li>Social Worker or Mental Health Advocate in NGOs. </li>
                                    <li>Program Coordinator for community well-being initiatives. </li>


                                    <p><strong>Higher Education and Research:</strong></p>
                                    <li>Advanced studies in psychology (M.Sc., M.Phil., or Ph.D.). </li>
                                    <li>Research Associate or Academic Writer in psychology. </li>

                                    <p><strong>Entrepreneurship:</strong></p>
                                    <li>Private practice as a counselor or therapist (with further qualifications). </li>
                                    <li>Founder of mental health or wellness programs. </li>

                                    <p>The B.Sc. Psychology program equips students with the knowledge and skills to understand,
                                        analyze, and address complex psychological issues. By fostering empathy, critical
                                        thinking, and research abilities, the program prepares graduates to make meaningful
                                        contributions to individuals and society in various professional domains.</p>
                                </div>
                            </div>
                            <div class="microbiology">
                                <div class="sub-title">
                                    Bachelor of Science in Microbiology (B.Sc. Microbiology)
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Department:</h6>
                                    <p>The Department of Microbiology at Auxilium Arts and Science College for Women is
                                        dedicated to understanding microorganisms and their role in various fields, including
                                        health, agriculture, and the environment. The department provides a strong foundation
                                        in microbiological principles and practical applications, preparing students for
                                        careers in research, healthcare, biotechnology, and other industries. With modern
                                        laboratories and experienced faculty, students gain hands-on experience and a deep
                                        understanding of microbial sciences. </p>

                                    <h6>About the Course:</h6>
                                    <p>The "Bachelor of Science in Microbiology (B.Sc. Microbiology)" is a three-year
                                        undergraduate program focused on the study of microorganisms such as bacteria,
                                        viruses, fungi, and protozoa. The course explores their structure, function,
                                        and impact on humans, animals, plants, and the environment.
                                    </p>
                                    <h6>The program aims to:</h6>

                                    <li>Provide an in-depth understanding of microbial diversity, physiology, and genetics.</li>
                                    <li>Equip students with practical skills in microbiological techniques and research. </li>
                                    <li>Explore the applications of microbiology in medicine, industry, and environmental science.</li>
                                    <li>Prepare students for advanced studies or professional careers in microbiology and related fields. </li>

                                    <h6>The Curriculum Overview:</h6>
                                    <p>The B.Sc. Microbiology program spans three years and includes the following components: </p>

                                    <p><strong>Core Subjects:</strong></p>
                                    <li>General Microbiology </li>
                                    <li>Microbial Genetics and Molecular Biology </li>
                                    <li>Medical Microbiology </li>
                                    <li>Environmental Microbiology </li>
                                    <li>Industrial Microbiology </li>
                                    <li>Immunology</li>

                                    <p><strong>Elective Subjects:</strong></p>
                                    <li>Agricultural Microbiology </li>
                                    <li>Food Microbiology </li>
                                    <li>Virology </li>
                                    <li>Bioinformatics</li>

                                    <p><strong>Skill-Based Courses:</strong></p>
                                    <li>Techniques in Microbiology (Microscopy, Sterilization, and Culturing) </li>
                                    <li>Biochemical and Molecular Techniques </li>
                                    <li>Quality Control in Microbiology </li>
                                    <li>Microbial Biotechnology </li>

                                    <p><strong>Practical Learning:</strong></p>
                                    <li>Laboratory sessions focusing on microbial isolation, identification, and analysis. </li>
                                    <li>Internship opportunities in research labs, hospitals, or biotech firms. </li>
                                    <li>A research project in the final year on a specific microbiological topic or application. </li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of B.Sc. Microbiology have diverse career opportunities in healthcare,
                                        research, industry, and environmental management, including: </p>
                                    <p><strong>Healthcare and Diagnostics:</strong></p>
                                    <li>Microbiologist in clinical laboratories, hospitals, or diagnostic centers. </li>
                                    <li>Infection Control Specialist or Medical Lab Technician. </li>

                                    <p><strong>Research and Development:</strong></p>
                                    <li>Research Associate in universities, research institutions, or pharmaceutical companies </li>
                                    <li>Microbial Geneticist or Molecular Biologist. </li>

                                    <p><strong>Industrial Microbiology:</strong></p>
                                    <li>Quality Control Analyst in food and beverage industries.</li>
                                    <li>Fermentation Specialist in pharmaceutical or bio-product industries.</li>


                                    <p><strong>Environmental Microbiology:</strong></p>
                                    <li>Environmental Scientist focusing on pollution control and waste management. </li>
                                    <li>Microbiologist in water treatment and bioremediation projects. </li>


                                    <p><strong>Agricultural Microbiology:</strong></p>
                                    <li>Soil Microbiologist or Plant Pathologist in agricultural research. </li>
                                    <li>Consultant for biofertilizer or biopesticide development. </li>

                                    <p><strong>Biotechnology and Bioinformatics:</strong></p>
                                    <li>Specialist in microbial biotechnology applications such as vaccine development. </li>
                                    <li>Bioinformatics Analyst for microbial genome studies. </li>

                                    <p><strong>Higher Education and Research:</strong></p>
                                    <li>Pursue advanced degrees like M.Sc., M.Phil., or Ph.D. in Microbiology. </li>
                                    <li>Academic roles as lecturers or professors in microbiology departments. </li>

                                    <p><strong>Government and Public Sector:</strong></p>
                                    <li>Roles in health departments, agriculture ministries, or environmental agencies. </li>
                                    <li>Positions in public sector research organizations like CSIR, ICMR, or DRDO. </li>

                                    <p>The B.Sc. Microbiology program prepares students for impactful careers by
                                        equipping them with both theoretical knowledge and practical expertise
                                        in microbial sciences. Graduates are well-positioned to address global
                                        challenges in healthcare, industry, and environmental sustainability,
                                        making meaningful contributions to society.</p>
                                </div>
                            </div>
                            <div class="maths">
                                <div class="sub-title">
                                    Bachelor of Science in Mathematics (B.Sc. Mathematics)
                                </div>
                                <hr>
                                <div class="txt">
                                    <h6>About the Department:</h6>
                                    <p>The Department of Mathematics at Auxilium Arts and Science College for Women is
                                        dedicated to fostering analytical thinking, problem-solving, and logical reasoning.
                                        With a focus on both pure and applied mathematics, the department aims to provide
                                        students with a strong foundation in mathematical concepts and techniques. Faculty
                                        members strive to cultivate a passion for mathematics, encouraging students to explore
                                        its applications across various disciplines. </p>

                                    <h6>About the Course:</h6>
                                    <p>The "Bachelor of Science in Mathematics (B.Sc. Mathematics)" is a three-year undergraduate
                                        program designed to provide students with a comprehensive understanding of mathematical
                                        principles, theories, and applications. The course emphasizes the development of analytical
                                        and computational skills, preparing students for careers in academia, research, and industry.
                                    </p>
                                    <h6>The program aims to:</h6>

                                    <li>Develop a deep understanding of mathematical theories and their real-world applications.</li>
                                    <li>Enhance problem-solving and logical reasoning skills.</li>
                                    <li>Prepare students for advanced studies or professional roles requiring mathematical expertise. </li>


                                    <h6>The Curriculum Overview:</h6>
                                    <p>The B.Sc. Mathematics program spans three years and includes the following components: </p>

                                    <p><strong>Core Subjects:</strong></p>
                                    <li>Calculus and Analytical Geometry </li>
                                    <li>Algebra and Trigonometry</li>
                                    <li>Real and Complex Analysis </li>
                                    <li>Differential Equations </li>
                                    <li>Linear Algebra </li>
                                    <li>Probability and Statistics </li>

                                    <p><strong>Elective Subjects:</strong></p>
                                    <li>Numerical Methods </li>
                                    <li>Graph Theory </li>
                                    <li>Operations Research </li>
                                    <li>Mathematical Modeling </li>

                                    <p><strong>Skill-Based Courses:</strong></p>
                                    <li>Mathematical Modeling </li>
                                    <li>Financial Mathematics </li>
                                    <li>Data Analysis and Visualization </li>
                                    <li>Cryptography </li>

                                    <p><strong>Practical Learning:</strong></p>
                                    <li>Lab sessions for computational mathematics and programming.</li>
                                    <li>Projects and seminars on advanced mathematical topics.</li>
                                    <li>Collaborative problem-solving exercises and workshops. </li>

                                    <h6>Career Opportunities:</h6>
                                    <p>Graduates of B.Sc. Mathematics have diverse career opportunities in education, research,
                                        finance, technology, and more, including: </p>
                                    <p><strong>Education and Academia:</strong></p>
                                    <li>Teacher or Lecturer in schools and colleges. </li>
                                    <li>Research Assistant or Academic Writer in mathematics. </li>

                                    <p><strong>Finance and Banking:</strong></p>
                                    <li>Analyst roles in banks, financial institutions, or insurance companies. </li>
                                    <li>Actuarial roles involving risk assessment and financial modeling. </li>

                                    <p><strong>Technology and IT:</strong></p>
                                    <li>Data Scientist or Analyst using mathematical modeling and data interpretation. </li>
                                    <li>Software Developer or IT Consultant in tech firms. </li>


                                    <p><strong>Government and Public Sector:</strong></p>
                                    <li>Statistician or Data Analyst in government agencies. </li>
                                    <li>Roles in public sector research organizations like ISRO, DRDO, or CSIR.</li>


                                    <p><strong>Emerging Fields:</strong></p>
                                    <li>Cryptographer or Cybersecurity Specialist in the digital security domain. </li>
                                    <li>Mathematician in artificial intelligence and machine learning projects. </li>

                                    <p><strong>Higher Education and Research:</strong></p>
                                    <li>Pursue advanced degrees like M.Sc. in Mathematics, Statistics, or related fields. </li>
                                    <li>Engage in research roles or Ph.D. programs in theoretical or applied mathematics. </li>

                                    <p><strong>Higher Education and Research:</strong></p>
                                    <li>Pursue advanced degrees like M.Sc., M.Phil., or Ph.D. in Microbiology. </li>
                                    <li>Academic roles as lecturers or professors in microbiology departments. </li>

                                    <p><strong>Entrepreneurship and Consulting:</strong></p>
                                    <li>Independent consultant for mathematical modeling and data analysis projects.</li>
                                    <li>Entrepreneurial ventures in education, technology, or data analytics. </li>

                                    <p>The B.Sc. Mathematics program provides a versatile foundation for careers in a wide
                                        range of fields. By combining theoretical knowledge with practical applications,
                                        graduates are well-prepared to address complex problems and make significant
                                        contributions to academia, industry, and society.</p>
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