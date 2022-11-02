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
                        <h2 class="text-white">Admission Enquiry</h2>
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
                                            <th scope="col" class="text-white">Student_Name</th>
                                            <th scope="col" class="text-white">Father_Name</th>
                                            <th scope="col" class="text-white">D_O_B</th>
                                            <th scope="col" class="text-white">Gender</th>
                                            <th scope="col" class="text-white">Category</th>
                                            <th scope="col" class="text-white">Nationality</th>
                                            <th scope="col" class="text-white">Boards</th>
                                            <th scope="col" class="text-white">Stream</th>
                                            <th scope="col" class="text-white">Seeking_Admission_Class</th>
                                            <th scope="col" class="text-white">Presently_Studying</th>
                                            <th scope="col" class="text-white">Previous_Pass_Class_Percentage</th>
                                            <th scope="col" class="text-white">Previous_School_Board</th>
                                            <th scope="col" class="text-white">Last_Class</th>
                                            <th scope="col" class="text-white">Email</th>
                                            <th scope="col" class="text-white">Mobile</th>
                                            <th scope="col" class="text-white">Address</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $query = "select * from admission_enquiry";
                                        $res = mysqli_query($conn, $query) or die("Query Unsuccessful.");
                                        if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_assoc($res)) {
                                        ?>
                                                <tr>
                                                    <td>
                                                        <pre><?php echo $row['ID']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Student_Name']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Father_Name']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['D_O_B']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Gender']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Category']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Nationality']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Boards']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Stream']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Seeking_Admission_Class']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Presently_Studying']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Previous_Pass_Class_Percentage']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Previous_School_Board']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Last_Class']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Email']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Mobile']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <pre><?php echo $row['Address']; ?></pre>
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