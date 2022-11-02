<?php

include 'conn.php';



?>




<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Dashboard Template</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Bootstrap Theme, Freebies, Dashboard, MIT
            license">
    <meta name="description" content="Stream - Dashboard UI Kit">
    <meta name="author" content="htmlstream.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href=".//assets/img/logo-mobile.png" type="image/png" sizes="16x16">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Components Vendor Styles -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- Theme Styles -->
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom Charts -->

</head>
<!-- End Head -->

<body>
    <!-- Header (Topbar) -->
    <header class="u-header">
        <div class="u-header-left">
            <a class="u-header-logo" href="index.html">
                <img class="u-logo-desktop" src="assets/img/logo1.png" width="160" alt="Stream Dashboard">
                <img class="img-fluid u-logo-mobile" src="assets/img/logo-mobile.png" width="50" alt="Stream
                        Dashboard">
            </a>
        </div>

        <div class="u-header-middle">
            <a class="js-sidebar-invoker u-sidebar-invoker text-danger" href="#!" data-is-close-all-except-this="true" data-target="#sidebar">
                <i class="fa fa-bars u-sidebar-invoker__icon--open"></i>
                <i class="fa fa-times u-sidebar-invoker__icon--close"></i>
            </a>

            <div class="u-header-search" data-search-mobile-invoker="#headerSearchMobileInvoker" data-search-target="#headerSearch">
                <a id="headerSearchMobileInvoker" class="btn btn-link
                        input-group-prepend u-header-search__mobile-invoker" href="#!">
                    <i class="fa fa-search"></i>
                </a>

            </div>
        </div>

        <div class="u-header-right">
            <!-- Activities -->
            <div class="dropdown mr-4">
                <a class="text-danger" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                    <span class="h3">
                        <i class="far fa-envelope"></i>
                    </span>
                    <span class="u-indicator u-indicator-top-right
                            u-indicator--xxs bg-success"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right border-0 py-0
                        mt-4" aria-labelledby="dropdownMenuLink" style="width:
                        360px;">
                    <div class="card">
                        <div class="card-header d-flex align-items-center
                                py-3">
                            <h2 class="h4 card-header-title">Activities</h2>
                            <a class="ml-auto" href="#">Clear all</a>
                        </div>

                        <div class="card-bod p-0" style="overflow: scroll; height: 350px;">
                            <div class="list-group list-group-flush">
                                <!-- Activity -->

                                <?php
                                $query = "SELECT * FROM any_questions";
                                $res = mysqli_query($conn, $query) or die("Query Unsuccessful.");
                                if (mysqli_num_rows($res) > 0) {


                                    while ($row = mysqli_fetch_assoc($res)) {
                                ?>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn" href="header1.php?id=<?php echo $data['id']; ?>" data-toggle="modal" data-target="#exampleModalCenter">

                                            <a class="list-group-item
                                        list-group-item-action" href="#">
                                                <div class="media align-items-center">
                                                    <img class="u-avatar--sm
                                                rounded-circle mr-3" src="assets/img/avatars/img1.png" alt="Image description">

                                                    <div class="media-body">
                                                        <div class="d-flex
                                                    align-items-center">
                                                            <h4 class="mb-1"><?php echo $row['Name'] ?></h4>
                                                            <!-- <small class="text-muted
                                                        ml-auto">23 Jan 2018</small> -->
                                                        </div>

                                                        <p class="text-truncate mb-0" style="max-width: 250px;">
                                                            <?php echo $row['Email'] ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </button>

                                        <!-- End Activity -->
                                    <?php
                                    }
                                    ?>

                                <?php
                                } else {
                                    echo "<h2>No Record Found</h2>";
                                }
                                // mysqli_close($conn);
                                ?>

                            </div>
                        </div>
                        <!-- <div class="card-footer py-3">
                            <a class="btn btn-block btn-outline-primary" href="#">View all activities</a>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Modal -->


            <!-- End Activities -->

            <!-- Notifications -->

            <!-- End Notifications -->

            <!-- User Profile -->
            <div class="dropdown ml-2">
                <a class="link-muted d-flex align-items-center
                        us-u-avatar-wrap" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                    <img class="u-avatar--xs img-fluid rounded-circle mr-2
                            bg-gradient" src="assets/img/avatars/img1.png" alt="User Profile">

                </a>

                <div class="dropdown-menu dropdown-menu-right border-0 py-0
                        mt-3" aria-labelledby="dropdownMenuLink" style="width:
                        260px;">
                    <div class="card">


                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-4">
                                    <a class="d-flex align-items-center
                                            link-dark" href="#!">
                                        <span class="h3 mb-0"><i class="far
                                                    fa-user-circle text-muted
                                                    mr-3"></i></span> View
                                        Profile
                                    </a>
                                </li>

                                <li>
                                    <a class="d-flex align-items-center
                                            link-dark" href="index_login.php">
                                        <span class="h3 mb-0"><i class="far
                                                    fa-share-square text-muted
                                                    mr-3"></i></span> Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End User Profile -->
        </div>
    </header>
    <!-- End Header (Topbar) -->



    <?php
    $sql = "SELECT * FROM any_questions";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>




            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLongTitle">Message</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <span>Name</span>
                            <p class="text-truncate mb-0" style="max-width: 250px;">
                                <?php echo $row['Name'] ?>
                            </p>
                            <span>Email</span>
                            <p class="text-truncate mb-0" style="max-width: 250px;">
                                <?php echo $row['Email'] ?>
                            </p>
                            <span>Phone</span>
                            <p class="text-truncate mb-0" style="max-width: 250px;">
                                <?php echo $row['Phone'] ?>
                            </p>
                            <span>Address</span>
                            <p class="text-truncate mb-0" style="max-width: 250px;">
                                <?php echo $row['Address'] ?>
                            </p>
                            <span>Message</span>
                            <p class="text-truncate mb-0" style="max-width: 250px;">
                                <?php echo $row['Message'] ?>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

    <?php

        }
    }
    ?>