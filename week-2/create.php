<?php

include './themepart/database-connect.php';

if ($_POST) {
  $name = $_POST['txt1'];
  $title = $_POST['txt2'];
  $details = $_POST['txt2'];

  $query = mysqli_query($connection, "insert into tbl_post(name, title,details) 
values('{$name}','{$title}','{$details}')");


  if ($query) {
    echo "<script>alert('Blog Created');window.location='display.php';</script>";
  }
}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Page Title -->
    <title>CREATE-BLOG</title>
    <!--Fevicon-->
    <link rel="icon" href="assets/img/icon/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- linear-icon -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/linear-icon.css">
    <!-- all css plugins css -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- default style -->
    <link rel="stylesheet" href="assets/css/default.css">
    <!-- Main Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>

    <header class="header-pos mb-40">

        <div class="header-top-menu theme-bg sticker">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="categories-menu-btn ha-toggle">
                            <div class="center">
                                <!-- <i class="lnr lnr-text-align-left"></i> -->
                                <span><a href="display.php">USER BLOGS</a></span>
                            </div>
                        </div>

                        <!-- HEADER -->

                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="create.php">CREATE POST</a></li>
                                </ul>
                            </nav>
                        </div> <!-- </div> end main menu -->


                    </div>

                </div>
            </div>
        </div>

    </header>
    <!-- header area end -->

    <!-- slider area start -->
    <div class="banner-area">
        <div class="container-fluid">
            <div class="row">
                <h1>BLOGS</h1>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="blog-comment-wrapper">
                            
                            <p><br></p>
                            <form action="#" method="post">
                                <div class="comment-post-box">
                                    <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label>NAME</label>
                                            <input type="text" class="coment-field" name="txt1" placeholder="Enter name" required>
                                        </div> <p><br></p>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label>TITLE</label>
                                            <input type="text" class="coment-field" name="txt2" placeholder="Post title" required>
                                        </div> <p><br></p>
                                        <div class="col-12">
                                            <label>DETAILS</label>
                                            <textarea placeholder="Post details" name="txt3" required></textarea>
                                        </div>                                   
                                        <div class="col-12">
                                            <div class="coment-btn mt-20">
                                                <input class="btn btn-secondary" type="submit" name="submit" value="Create Post">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider area end -->


    <!-- all js include here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>