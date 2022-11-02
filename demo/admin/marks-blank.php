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
                        <h2 class="text-white">All Students Marks</h2>
                    </div>
                    <div class="breadcumb-image ml-auto">
                        <img src="assets/img/breadcumb-marks.png" alt="">
                    </div>
                </div>
            </section>
            <!-- End breadcumb-area -->




            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 d-flex align-items-center">
                        <a href="" class="btn btn-sm btn-pill btn-outline-light ml-auto">+ Add New</a>
                    </header>
                    <div class="card-body">
                        <form action="#" class="es-form">
                            <div class="row align-items-center">
                                <div class="col">
                                    <label for="class">Class</label>
                                    <select id="class" class="">
                                        <option data-display="Select">Nothing</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3" disabled>A disabled option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="section">Section</label>
                                    <select id="section" class="">
                                        <option data-display="Select">Nothing</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3" disabled>A disabled option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="date">Date</label>
                                    <div class="datepicker-wrap">
                                        <input type="text" id="datepicker" class="datepicker" placeholder="25/12/2021">
                                        <i class="fa fa-calendar datepicker-icon"></i>
                                    </div>

                                </div>
                                <div class="col">
                                    <a href="" class="es-form-btn btn btn-block bg-gradient text-white">View</a>
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