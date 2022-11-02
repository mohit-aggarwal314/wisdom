<?php
include 'header1.php';
include 'conn.php';

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
                        <h2 class="text-white">Any Questions</h2>
                    </div>
                    <div class="breadcumb-image ml-auto">
                        <img src="assets/img/breadcumb-students.png" alt="">
                    </div>
                </div>
            </section>
            <!-- End breadcumb-area -->




            <section class="es-form-area">
                <div class="card">

                    <div class="card-body">


                        <div class="attendances-list-wrap mt-5">


                            <div class="table-responsive">
                                <table class="table mb-0">

                                    <thead class="bg-gradient">
                                        <tr>
                                            <th scope="col" class="text-white">ID.</th>
                                            <th scope="col" class="text-white">Name</th>
                                            <th scope="col" class="text-white">Email</th>
                                            <th scope="col" class="text-white">Phone</th>
                                            <th scope="col" class="text-white">Address</th>
                                            <th scope="col" class="text-white">Message</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $query = "select * from any_questions";
                                        $res = mysqli_query($conn, $query) or die("Query Unsuccessful.");
                                        if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_assoc($res)) {
                                        ?>
                                                <tr>
                                                    <td>
                                                        <pre><?php echo $row['ID']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Name']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Email']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Phone']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Address']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Message']; ?></pre>
                                                    </td>

                                                </tr>
                                        <?php
                                            }
                                        } else {
                                            echo "<tr>
                                                    <td><h2> <pre>No Record Found</pre> </h2></td>
                                                </tr>";
                                        }
                                        // mysqli_close($conn);

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