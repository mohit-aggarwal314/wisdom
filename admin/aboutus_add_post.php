<?php
include 'header1.php';
include 'conn.php';

if (isset($_POST['add'])) {
    $Title = $_POST['Title'];
    $Description = $_POST['Description'];
    $filename = $_FILES["image_url"]["name"];
    $image_type = $_FILES["image_url"]['type'];
    $image_size = $_FILES["image_url"]['size'];
    $tempname = $_FILES["image_url"]["tmp_name"];
    $folder = "upload_image/" . $filename;
    move_uploaded_file($tempname, $folder);

    $query = "insert into aboutus_add_post(title,description,image_url) values('$Title','$Description','$filename')";
    $res = mysqli_query($conn, $query) or die('Query not run');
    if ($res) {
        echo '<script> swal("Data SuccessFully", "your registration is successful", "success")</script>';
    } else {
        echo '<script> swal("Data Not SuccessFully", "your registration is not successful", "warning")</script>';
    }
}
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
                        <h2 class="text-white mb-0">Add New Question</h2>
                    </header>
                    <div class="card-body">
                        <form action="" method="POST" class="es-form es-add-form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="title">Image Upload</label>
                                    <input type="file" name="image_url">
                                </div>

                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="photo">Title Name</label>
                                    <!-- <input id="photo" type="text" placeholder="Title" name="Title"> -->
                                    <select name="Title">
                                        <option value="About us">About us</option>
                                        <option value="Our Vision">Our Vision</option>
                                        <option value="Our Mission">Our Mission</option>
                                        <option value="Careers">Careers</option>
                                        <option value="From the Desk of Director">From the Desk of Director</option>
                                        <option value="From the Desk of Principal">From the Desk of Principal</option>
                                        <option value="Association for Middle Level Education">Association for Middle Level Education</option>
                                        <option value="Comparative & International Education Society">Comparative & International Education Society</option>
                                        <option value="American Forest Kindergarten Association">American Forest Kindergarten Association</option>
                                        <option value="Members of the Advisory Board">Members of the Advisory Board</option>
                                        <option value="The Wisdom Groups">The Wisdom Groups</option>
                                        <option value="Fee Structure">Fee Structure</option>
                                        <option value="Infrastructure">Infrastructure</option>
                                        <option value="Student Life">Student Life</option>
                                        <option value="Photo Gallery">Photo Gallery</option>
                                        <option value="Activities">Activities</option>
                                        <option value="Academic Administration">Academic Administration</option>
                                        <option value="Academic Programme">Academic Programme</option>
                                        <option value="Facilities">Facilities</option>
                                        <option value="Teaching Methodology">Teaching Methodology</option>
                                        <option value="Uniform">Uniform</option>
                                        <option value="Kindergarten Programme">Kindergarten Programme</option>
                                        <option value="Curriculum And Board">Curriculum And Board</option>
                                        <option value="Admission">Admission</option>
                                        <option value="Library">Library</option>
                                        <option value="Counselling">Counselling</option>
                                        <option value="News">News</option>
                                        <option value="Contact Us">Contact Us</option>
                                    </select>
                                </div>

                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="photo">Description</label>
                                    <textarea id="photo" style="width: 100%; height: 120px;" type="text" placeholder="Description" name="Description"></textarea>
                                </div>



                                <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                                    <button name="add" class="btn btn-danger btn-block bg-gradient border-0 text-white">Add</button>
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