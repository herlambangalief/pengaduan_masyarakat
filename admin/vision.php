<?php 
    require 'connection.php';
    $sql="SELECT * FROM vision WHERE lang='eng'";
    $query=mysqli_query($connect,$sql);

    $sql2="SELECT * FROM vision WHERE lang='ind'";
    $query2=mysqli_query($connect,$sql2);
?>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin</title>
    <link rel="icon" href="images/logos.png" type="image/png">
    <!-- Fontfaces CSS-->
    
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php require 'header.php'; ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php require 'sidebar.php'; ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php require 'header_desktop.php'; ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <center>
                <br><br><br>
                <h2>English</h2>
                <div class="main-content col-md-12 row">
                    <?php while ($data=mysqli_fetch_array($query)) {?>
                        <div class="card border border-success col-md-5 offset-md-1">
                            <div class="card-header">
                                <a href="vision_edit.php?id=<?php echo $data['id_vision'] ?>" style="float: left;" class="text-warning"><i class="fa fa-keyboard-o"></i> Edit</a>
                                <strong class="card-title"><?php echo $data['title_vision']; ?></strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php echo $data['description_vision']; ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <h2>Indonesian</h2>
                <div class="main-content col-md-12 row">
                    <?php while ($data2=mysqli_fetch_array($query2)) {?>
                        <div class="card border border-success col-md-5 offset-md-1">
                            <div class="card-header">
                                <a href="vision_edit.php?id=<?php echo $data2['id_vision'] ?>" style="float: left;" class="text-warning"><i class="fa fa-keyboard-o"></i> Edit</a>
                                <strong class="card-title"><?php echo $data2['title_vision']; ?></strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php echo $data2['description_vision']; ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </center>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
