<?php
session_start();
include 'conn.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from admin_users where username = '$username' AND password = '$password'";
    $res = mysqli_query($conn, $query) or die('Query not run');

    if (mysqli_num_rows($res) == 1) {
        header('location:index.php');
    } else {
        echo '<script>alert("Login Not successfully")</script>';
    }
}

?>



<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN | Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
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
    <!-- <link rel="stylesheet" href="assets/css/theme.css"> -->
    <link rel="stylesheet" href=".//assets/css/style.css">

</head>

<body>
    <div id="wrapper-admin" class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 login">
                    <span class="admi" style="color: #f40000; padding-left: 35%; font-size: 24px; font-weight: 800;">Admin</span>
                    <!-- Form Start -->
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="" required>
                        </div>
                        <input type="submit" name="login" class="btn btn-danger" value="login" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>