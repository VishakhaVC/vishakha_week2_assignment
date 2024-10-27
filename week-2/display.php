<?php

include './themepart/database-connect.php';

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
    <title>BLOG</title>
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

                    <?php
              
              //delete query
              if(isset($_GET['did'])){
                //echo "yes";
                $did = $_GET['did'];
                $deletequery = mysqli_query($connection, "delete from tbl_post where id='{$did}'");
                if($deletequery){
                  echo "<script>alert('Record Deleted');window.location='display.php';</script>";
                }
              }

              //display

              $query = mysqli_query($connection, "select * from tbl_post");
              $count = mysqli_num_rows($query);
              
              echo "<div class='card-body'>";

              
                echo "<table class='table table-bordered'>";
                  echo"<thead>";
                  echo "<tr>";
                  echo "<th >Name</th>";
                  echo "<th>Title</th>";
                  echo "<th>Details</th>";
                  echo "<th>Action</th>"; 
                  echo "</tr>";
                  
                  echo "</thead>";
                 
                  while($row = mysqli_fetch_array($query)){
                      echo "<tbody>";
                      echo "<tr>";
                      echo "<td>{$row['name']}</td>";
                      echo "<td>{$row['title']}</td>";
                      echo "<td>{$row['details']}</td>";                    
                      echo "<td><a href='update.php?eid={$row['id']}'>Edit</a> | <a href='display.php?did={$row['id']}'>Delete</a></td>";
                      echo "</tr>";
                      echo "</tbody>";
                }
                echo "</table>";
              echo"</div>";
              
                    ?>
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