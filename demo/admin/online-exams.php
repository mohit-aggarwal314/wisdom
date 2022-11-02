<?php
include 'header1.php';
?>



<main class="u-main" role="main">
    <!-- Sidebar -->
    <?php
    include 'footer.php';
    ?>
    <!-- End Sidebar -->

    <div class="u-content">
        <div class="u-body">

            <!-- breadcumb-area -->
            <section class="breadcumb-area card bg-gradient mb-5">
                <div class="bread-cumb-content card-body d-flex align-items-center">
                    <div class="breadcumb-heading">
                        <h2 class="text-white">Online Exams</h2>
                    </div>
                    <div class="breadcumb-image ml-auto">
                        <img src="assets/img/breadcumb-exam.png" alt="">
                    </div>
                </div>
            </section>
            <!-- End breadcumb-area -->




            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Add New Question</h2>
                    </header>
                    <div class="card-body">
                        <form action="" class="es-form es-add-form">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="question">Question</label>
                                    <select id="question" class="es-add-select">
                                        <option data-display="Example Question">Example Question</option>
                                        <option value="1">Example Question1</option>
                                        <option value="2">Example Question2</option>
                                        <option value="3">Example Question3</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="class">Class</label>
                                    <select id="class" class="es-add-select">
                                        <option data-display="X">X</option>
                                        <option value="1">iX</option>
                                        <option value="2">Viii</option>
                                        <option value="3">Vii</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="section">Section</label>
                                    <select id="section" class="es-add-select">
                                        <option data-display="A">A</option>
                                        <option value="1">B</option>
                                        <option value="2">C</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="subject">Subject</label>
                                    <select id="subject" class="es-add-select">
                                        <option data-display="Accounting">Accounting</option>
                                        <option value="1">Physics</option>
                                        <option value="2">Chemistry</option>
                                        <option value="3">Math</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="answer">Answer</label>
                                    <select id="answer" class="es-add-select">
                                        <option data-display="Example Anwer">Example Answer</option>
                                        <option value="1">Example Answer1</option>
                                        <option value="2">Example Answer2</option>
                                        <option value="3">Example Answer3</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                                    <a href="" class="btn btn-danger btn-block bg-gradient border-0 text-white">Add</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </section>

            <div class="row">
                <div class="col-md-12 text-center">
                    <nav aria-label="Bootstrap Pagination" class="mt-5 text-center d-inline-block">
                        <ul class="pagination mb-0">
                            <li class="page-item">
                                <a class="btn btn-outline-danger prev" href="#"><span class="ml-1 d-none d-xl-inline-block">Previous</span></a>
                            </li>
                            <li class="page-item">
                                <a class="btn btn-danger bg-gradient text-white ml-4 mr-4" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="btn btn-outline-danger next" href="#"><span class="mr-1 d-none d-xl-inline-block">Next</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>



        </div>
    </div>
</main>

<!-- Global Vendor -->
<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>

<!-- Initialization  -->
<script src="assets/js/sidebar-nav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/dashboard-page-scripts.js"></script>
<!--<script src="assets/js/scripts.js"></script>-->
</body>

</html>