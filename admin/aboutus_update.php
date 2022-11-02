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
            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Aboutus Update</h2>
                    </header>
                    <div class="card-body">
                        <?php
                        $id = $_GET['id'];

                        $sql = "SELECT * FROM aboutus_add_post WHERE id = {$id}";
                        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                                <form action="" method="POST" class="es-form es-add-form" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                            <label for="title">Image Upload</label>
                                            <input type="file" name="image_url">
                                            <a href="upload_image/<?php echo $row['image_url']; ?>">
                                                <img src="upload_image/<?php echo $row['image_url']; ?>" width="150px" style="padding-top: 30px;" class="aboutfirstimg" alt="">
                                            </a>
                                        </div>

                                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                            <label for="photo">Title Name</label>
                                            <input id="photo" type="text" value="<?php echo $row['title']; ?>" placeholder="Title" name="Title">
                                        </div>

                                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                            <label for="photo">Description</label>
                                            <textarea id="photo" style="width: 100%; height: 120px;" type="text" placeholder="Description" name="Description"><?php echo $row['description']; ?></textarea>
                                        </div>


                                        <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                                            <button name="add" class="btn btn-danger btn-block bg-gradient border-0 text-white">Post Update</button>
                                        </div>

                                </form>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>
<?php
$id = $_GET['id'];

@$Title = $_POST['Title'];
@$Description = $_POST['Description'];
@$filename = $_FILES["image_url"]["name"];
@$image_type = $_FILES["image_url"]['type'];
@$image_size = $_FILES["image_url"]['size'];
@$tempname = $_FILES["image_url"]["tmp_name"];
@$folder = "upload_image/" . $filename;
move_uploaded_file($tempname, $folder);

$sql = "UPDATE aboutus_add_post SET title = '{$Title}', description = '{$Description}', image_url = '{$filename}' WHERE id = {$id}";
$res = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

@header("Location: localhost/akbstok/admin/aboutus.php");

mysqli_close($conn);
?>

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