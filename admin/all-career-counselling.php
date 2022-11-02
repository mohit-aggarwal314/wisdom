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
                        <h2 class="text-white">Careers </h2>
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
                                            <th scope="col" class="text-white">No.</th>
                                            <th scope="col" class="text-white">Name</th>
                                            <th scope="col" class="text-white">BirthDay</th>
                                            <th scope="col" class="text-white">Phone No</th>
                                            <th scope="col" class="text-white">Email</th>
                                            <th scope="col" class="text-white">Address</th>
                                            <th scope="col" class="text-white">referred to us</th>
                                            <th scope="col" class="text-white">Others</th>
                                            <th scope="col" class="text-white">Resume</th>
                                            <th scope="col" class="text-white">Describe</th>
                                            <th scope="col" class="text-white">Training</th>
                                            <th scope="col" class="text-white">Name</th>
                                            <th scope="col" class="text-white">Phone No</th>
                                            <th scope="col" class="text-white">Years</th>
                                            <th scope="col" class="text-white">Address</th>
                                            <th scope="col" class="text-white">Name</th>
                                            <th scope="col" class="text-white">Phone No</th>
                                            <th scope="col" class="text-white">Years</th>
                                            <th scope="col" class="text-white">Address</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $query = "select * from careers";
                                        $res = mysqli_query($conn, $query) or die("Query Unsuccessful.");
                                        if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_assoc($res)) {
                                        ?>
                                                <tr>
                                                    <td>
                                                        <pre><?php echo $row['id']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['fname']; ?> <?php echo $row['re_lname']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['birth']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['phone_code']; ?> <?php echo $row['phone_num']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['email']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['address']; ?> <?php echo $row['street_address']; ?> <?php echo $row['city_add']; ?> <?php echo $row['state_add']; ?> <?php echo $row['zip_code_add']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['referred']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['others']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['up_resume']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['describe_skills']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['training']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['re_fname']; ?><?php echo $row['re_lname']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['re_phone_code']; ?> <?php echo $row['re_phone_num']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['re_years']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['re_address']; ?> <?php echo $row['re_street_address']; ?> <?php echo $row['re_city_add']; ?> <?php echo $row['re_state_add']; ?> <?php echo $row['re_zip_code_add']; ?>, <?php echo $row['re_country']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['ref_fname']; ?><?php echo $row['ref_lname']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['ref_phone_code']; ?> <?php echo $row['ref_phone_num']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['ref_years']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['ref_address']; ?> <?php echo $row['re_street_address']; ?> <?php echo $row['re_city_add']; ?><?php echo $row['re_state_add']; ?><?php echo $row['re_zip_code_add']; ?>,<?php echo $row['re_country']; ?></pre>
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