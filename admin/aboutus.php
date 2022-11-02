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
                        <h2 class="text-white">About Us</h2>
                    </div>
                    <div class="breadcumb-image ml-auto">
                        <img src="assets/img/breadcumb-students.png" alt="">
                    </div>
                </div>
            </section>
            <!-- End breadcumb-area -->



            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <a href="aboutus_add_post.php" class="btn btn-sm btn-pill btn-outline-light ml-auto">+ Add New</a>
                    </header>
                    <div class="card-body">

                        <div class="attendances-list-wrap mt-5">


                            <div class="table-responsive">
                                <table class="table mb-0">

                                    <thead class="bg-gradient">
                                        <tr>
                                            <th scope="col" class="text-white">ID</th>
                                            <th scope="col" class="text-white text-center">Title</th>
                                            <th scope="col" class="text-white text-center">description</th>
                                            <th scope="col" class="text-white text-center">image_url</th>
                                            <th scope="col" class="text-white text-center">Option</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $sql = "SELECT * FROM aboutus_add_post WHERE ('id');";
                                    $run = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($run)) {
                                    ?>
                                        <tbody>
                                            <tr>

                                                <td><?php echo $row['id'] ?></td>
                                                <td>
                                                    <pre><?php echo $row['title'] ?></pre>
                                                </td>
                                                <td><?php echo $row['description'] ?></td>
                                                <td><?php echo $row['image_url'] ?></td>
                                                <td class="text-center"><a href="aboutus_update.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-danger es-am-btn">Edit</a></td>
                                            </tr>


                                        <?php
                                    }
                                        ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
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