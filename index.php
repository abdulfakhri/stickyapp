<!doctype html>
<html lang="en">
<?php
session_start();
if(empty($_SESSION["username"]))
{
    header('location:login.php');
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Vendor/styles.css">
    <link rel="stylesheet" href="Vendor/css/bootstrap.css">
    <link rel="stylesheet" href="Vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="Vendor/font-awesome/fonts/fontawesome-webfont5b62.eot">
    <link rel="stylesheet" href="Vendor/font-awesome/fonts/fontawesome-webfont5b62.svg">
    <link rel="stylesheet" href="Vendor/font-awesome/fonts/fontawesome-webfont5b62.ttf">
    <title>Sticky Review App</title>
</head>

<body>
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom"> <?php echo $_SESSION['username']; ?></div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Dashboard</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="Branding/">Branding</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="campaign/">Campaigns</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="reviews/">Sticky Review</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="review_link">Create Review Link</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="PositiveFeedbacks/">Positive Feedbacks</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="NegativeFeedbacks/">Negative Feedbacks</a>

            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="Controllers/logoutController.php?logout=1">Sign Out</a>
        </div>
    </div>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
            <div class="container-fluid">
                <button class="btn btn-primary" id="sidebarToggle"><i class="navbar-toggler-icon"></i></button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Sticky Reviews</a></li>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container-fluid">

        </div>
    </div>
</div>

<script src="Vendor/js/bootstrap.bundle.js"></script>
<script src="Vendor/script.js"></script>
</body>
</html>
