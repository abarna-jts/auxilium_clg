<?php include("header.php"); ?>

<style>
    /* TABLE STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    :root {
        --white: #fff;
        --darkblue: #1b4965;
        --lightblue: #edf2f4;
    }

    .table-wrapper {
        overflow-x: auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .table-wrapper::-webkit-scrollbar {
        height: 8px;
    }

    .table-wrapper::-webkit-scrollbar-thumb {
        background: var(--darkblue);
        border-radius: 40px;
    }

    .table-wrapper::-webkit-scrollbar-track {
        background: var(--white);
        border-radius: 40px;
    }

    .table-wrapper table {
        margin: 50px 0 20px;
        border-collapse: collapse;
        text-align: center;
    }

    .table-wrapper table th,
    .table-wrapper table td {
        padding: 15px;
        min-width: 100%;
        text-align: start;
        border-right: 1px solid #ccc;
    }

    .table-wrapper table th {
        color: var(--white);
        background: var(--darkblue);
    }

    .table-wrapper table tbody tr:nth-of-type(even)>* {
        background: var(--lightblue);
    }

    .table-wrapper table td:first-child {
        display: grid;
        grid-template-columns: 25px 1fr;
        text-align: start;
    }

    .table-credits {
        font-size: 12px;
        margin-top: 10px;
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
                        <h2 class="breadcrumb-title">Faculty details</h2>
                        <div class="breadcrumb-list">
                            <a href="index.php">Home</a>
                            <span>Currriculum</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name of the Staff</th>
                                    <th>Qualification</th>
                                    <th>Department</th>
                                    <th>Designation</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-af"></span>
                                        </span>
                                        <span>1.</span>
                                    </td>
                                    <td>Sr. Saveriammal V.</td>
                                    <td>M.Com., M.Ed., Ph.D.</td>
                                    <td></td>
                                    <td>Secretary & Principal</td>

                                </tr>
                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-al"></span>
                                        </span>
                                        <span>2.</span>
                                    </td>
                                    <td>Sr. Gnana Jennifer S.</td>
                                    <td>M.Sc., Adv. Dip. HR, Ph.D. (SET)</td>
                                    <td>Psychology</td>
                                    <td>Head, Asst. Prof.</td>

                                </tr>
                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>3.</span>
                                    </td>
                                    <td>Sr. Bernadette Neha</td>
                                    <td>B.Sc., M.A.</td>
                                    <td>English</td>
                                    <td>Asst. Prof. </td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>4.</span>
                                    </td>
                                    <td>Dr. Jenitha S</td>
                                    <td>M.A., M.P.A., M.Phil., Ph.D. </td>
                                    <td>History</td>
                                    <td>Head, Asst. Prof. </td>

                                </tr>


                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>5.</span>
                                    </td>
                                    <td>Dr. Vanisri P</td>
                                    <td>M.A., M.Phil., Ph.D. (NET) </td>
                                    <td>Tamil</td>
                                    <td>Head, Asst. Prof </td>

                                </tr>


                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>6.</span>
                                    </td>
                                    <td>Rasi D</td>
                                    <td>M.A., M.Phil.</td>
                                    <td>Tamil</td>
                                    <td>Asst. Prof. </td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>6.</span>
                                    </td>
                                    <td>Rasi D</td>
                                    <td>M.A., M.Phil.</td>
                                    <td>Tamil</td>
                                    <td>Asst. Prof. </td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>7.</span>
                                    </td>
                                    <td>Murugu V</td>
                                    <td>M.A., B.Ed., M.Phil., (Ph.D.) (Submitted)</td>
                                    <td>Tamil</td>
                                    <td>Asst. Prof. </td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>8.</span>
                                    </td>
                                    <td>Pavithra B</td>
                                    <td>M.A.</td>
                                    <td>Tamil</td>
                                    <td>Asst. Prof. </td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>9.</span>
                                    </td>
                                    <td>Rajalakshmi A</td>
                                    <td>M.A.</td>
                                    <td>English</td>
                                    <td>Head, Asst. Prof. </td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>10.</span>
                                    </td>
                                    <td>Muthu Meenakshi K</td>
                                    <td>M.A., B.Ed.</td>
                                    <td>English</td>
                                    <td>Asst. Prof.</td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>11.</span>
                                    </td>
                                    <td>Balasubha B</td>
                                    <td>M.A., B.Ed.</td>
                                    <td>English</td>
                                    <td>Asst. Prof.</td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>12.</span>
                                    </td>
                                    <td>Sharen Shiny Roostella A</td>
                                    <td>M.A., B.Ed.</td>
                                    <td>English</td>
                                    <td>Asst. Prof.</td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>13.</span>
                                    </td>
                                    <td>Ramya Bharathy M</td>
                                    <td>M.A., B.Ed.</td>
                                    <td>English</td>
                                    <td>Asst. Prof.</td>

                                </tr>


                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>14.</span>
                                    </td>
                                    <td>Sahaya Rose Amali L</td>
                                    <td>M.A., B.Ed.</td>
                                    <td>Economics</td>
                                    <td>Head, Asst. Prof. </td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>15.</span>
                                    </td>
                                    <td>Sri Mahalakshmi V</td>
                                    <td>M.A.</td>
                                    <td>Economics</td>
                                    <td>Asst. Prof. </td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>16.</span>
                                    </td>
                                    <td>Bharathi R</td>
                                    <td>M.Com, PGDCA., DGT. (Ph.D.) Pursuing</td>
                                    <td>Commerce</td>
                                    <td>Head, Asst. Prof.</td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>17.</span>
                                    </td>
                                    <td>Priya Dharshini S</td>
                                    <td>B.Sc., M.B.A.</td>
                                    <td>Economics</td>
                                    <td>Asst. Prof. </td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>18.</span>
                                    </td>
                                    <td>Anushka A</td>
                                    <td>M.Com CA., DCA</td>
                                    <td>Economics</td>
                                    <td>Asst. Prof. </td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>19.</span>
                                    </td>
                                    <td>Kaveri S</td>
                                    <td>M.Sc., M.Phil.</td>
                                    <td>Mathematics</td>
                                    <td>Asst. Prof. </td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>20.</span>
                                    </td>
                                    <td>Shanthini M</td>
                                    <td>M.Sc., M.Phil.</td>
                                    <td>Mathematics</td>
                                    <td>Asst. Prof. </td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>21.</span>
                                    </td>
                                    <td>Anitha M</td>
                                    <td>M.Sc., B.Ed.</td>
                                    <td>Physics</td>
                                    <td>Asst. Prof. </td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>22.</span>
                                    </td>
                                    <td>Jeenath Sofia A</td>
                                    <td>M.Sc., M.Phil., B.Ed.</td>
                                    <td>Microbiology</td>
                                    <td>Head, Asst. Prof.</td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>23.</span>
                                    </td>
                                    <td>Abitha R</td>
                                    <td>M.Sc., (Ph.D.) (Pursuing)</td>
                                    <td>Microbiology</td>
                                    <td>Asst. Prof</td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>24.</span>
                                    </td>
                                    <td>Mercy Annal Mary L</td>
                                    <td>MCA., M.Phil.</td>
                                    <td>Comp. Sci.</td>
                                    <td>Head, Asst. Prof.</td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>25.</span>
                                    </td>
                                    <td>Anandha Lakshmi P</td>
                                    <td>M.Sc., M.Phil.</td>
                                    <td>Comp. Sci.</td>
                                    <td>Asst. Prof.</td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>26.</span>
                                    </td>
                                    <td>Shanmuga Priya M</td>
                                    <td>M.Sc., M.Phil.</td>
                                    <td>Comp. Sci.</td>
                                    <td>Asst. Prof.</td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>27.</span>
                                    </td>
                                    <td>Ganga Maheswari A</td>
                                    <td>MCA., M.Phil.</td>
                                    <td>Comp. Sci.</td>
                                    <td>Asst. Prof.</td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>28.</span>
                                    </td>
                                    <td>Suriya J</td>
                                    <td>M.C.A.</td>
                                    <td>Comp. Sci.</td>
                                    <td>Asst. Prof.</td>

                                </tr>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-dz"></span>
                                        </span>
                                        <span>29.</span>
                                    </td>
                                    <td>Yasothai S</td>
                                    <td>M.Com., M.Phil., (Ph.D.) Submitted</td>
                                    <td>Commerce (Part-time)</td>
                                    <td>Asst. Prof.</td>

                                </tr>


                            </tbody>
                        </table>
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