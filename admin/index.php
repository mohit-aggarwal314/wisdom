<?php
include 'header1.php';
@session_start();
// include 'conn.php';
if (isset($_SESSION['username'])) {
    header("Location: index_login.php");
}
?>



<main class="u-main" role="main">
    <?php
    include 'footer.php';
    ?>

    <div class="u-content">
        <div class="u-body">

            <!-- breadcumb-area -->
            <section class="breadcumb-area card bg-gradient mb-5">
                <div class="bread-cumb-content card-body d-flex
                            align-items-center">
                    <div class="breadcumb-heading">
                        <h2 class="text-white">Dashboard</h2>
                    </div>
                    <div class="breadcumb-image ml-auto">
                        <img src="assets/img/breadcumb-dashboard.png" alt="">
                    </div>
                </div>
            </section>
            <!-- End breadcumb-area -->

            <!-- Deal Overview -->
            <class="card mb-4">
                <!-- Card Header -->
                <header class="card-header text-center">
                    <h2 class="h3 card-header-title text-dark pt-2">The Wisdom School</h2>
                </header>


                <!-- highlight-area End -->
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