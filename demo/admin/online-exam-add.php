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




            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Add New Exam</h2>
                    </header>
                    <div class="card-body">
                        <form action="" class="es-form es-add-form">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="title">Title</label>
                                    <select id="title" class="es-add-select">
                                        <option data-display="Exam 1">Exam 1</option>
                                        <option value="1">Exam 2</option>
                                        <option value="2">Exam 3</option>
                                        <option value="3">Exam 4</option>
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
                                    <label for="date">Date Start</label>
                                    <div class="datepicker-wrap">
                                        <input type="text" id="datepicker" class="datepicker hasDatepicker" placeholder="25/12/2021">
                                    </div>
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="date">Date End</label>
                                    <div class="datepicker-wrap">
                                        <input type="text" id="datepicker" class="datepicker hasDatepicker" placeholder="05/01/2021">
                                    </div>
                                </div>
                                <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                                    <a href="" class="btn btn-danger btn-block bg-gradient border-0 text-white">Add</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </section>

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