<?php
require 'class/Connection.php';
require 'class/AdminLogin.php';
$oal = new AdminLogin();

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $oal->adminLogin($username, $password);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>Open IT Ltd. : Admin Login</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/assets.css">
    <link rel="stylesheet" type="text/css" href="assets/css/typography.css">
    <link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

</head>
<body id="bg">
<div class="page-wraper">
    <div id="loading-icon-bx"></div>
    <div class="account-form">
        <div class="account-head" style="background-image:url(../assets/images/backgrounds/login_bg.jpg);">
            <a href="index.html"><img src="../assets/images/logo-white.png" alt=""></a>
        </div>
        <div class="account-form-inner">
            <div class="account-container">
                <div class="heading-bx left">
                    <h2 class="title-head">Login to <span>Admin Panel</span></h2>
                    <p>Login to the admin panel for manage the website</a></p>
                </div>
                <form method="post" class="contact-bx" onsubmit="return loginFormValidate();">
                    <div class="row placeani">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="username">Username</label>
                                    <input name="username" id="username" type="text" class="form-control">
                                    <div class="error-msg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="password">Password</label>
                                    <input name="password" id="password" type="password" class="form-control">
                                    <div class="error-msg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group form-forget">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                </div>
                                <a href="forget-password.php" class="ml-auto">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="col-lg-12 m-b30">
                            <button name="login" type="submit" class="btn button-md btn-block">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/formValidation.js"></script>

</body>

</html>
