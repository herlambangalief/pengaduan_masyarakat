
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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


        <?php 
            require 'connection.php';
            $id=$_GET['id'];
            $query=mysqli_query($connect,"SELECT masyarakat.*,pengaduan.*   FROM pengaduan,masyarakat WHERE pengaduan. nik=masyarakat. nik AND pengaduan. id_pengaduan=$id");
            $data=mysqli_fetch_array($query);
            $judulz=$data['perihal'];

            if (isset($_POST['proses'])) {
                mysqli_query($connect,"UPDATE `pengaduan` SET `status` = 'proses' WHERE `pengaduan`.`id_pengaduan` = $id; ");
                echo "<script type='text/javascript'>location.href='message_detail.php?id=$id'</script>";
            }

            else if (isset($_POST['selesai'])) {
                mysqli_query($connect,"UPDATE `pengaduan` SET `status` = 'selesai' WHERE `pengaduan`.`id_pengaduan` = $id; ");
                echo "<script type='text/javascript'>location.href='message_detail.php?id=$id'</script>";
            }

            else if (isset($_POST['tanggapan'])) {
                $tgl=date("Y-m-d");
                $tanggapan=$_POST['tanggapan'];
                $id_user=$_POST['id_user'];
                $id_p=$id_petugas;
                mysqli_query($connect,"INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`, `id_user`) VALUES (NULL, '$id', '$tgl', '$tanggapan', '$id_p', '$id_user');");
                echo "<script type='text/javascript'>location.href='message_detail.php?id=$id'</script>";
            }
        ?>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php require 'header_desktop.php'; ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
             <div class="main-content">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>Laporan</h3>
                                    </div>
                                    <br>
                                    <div class="bg-light">
                                        <div class="row col-md-12">
                                            <h4 class="text-danger"> <?php echo  $data['status']; ?></h4>- 
                                            <h4 class="text-warning"> <?php echo  $data['kondisi1']; ?></h4>- 
                                            <h4 class="text-warning"> <?php echo  $data['kondisi2']; ?> </h4> 
                                        </div>
                                       <h2><?php echo $data['nama']; ?></h2>
                                       <br>
                                       <p><?php echo $data['isi_laporan']; ?></p>
                                       <form action="" method="post">
                                            <input type="submit" name="proses" class="btn btn-primary" value="Proses">
                                            <input type="submit" name="selesai" class="btn btn-secondary" value="Selesai">
                                            <br><br>
                                            <textarea name="tanggapan" class="form-control" rows="7" placeholder="Tanggapan"></textarea>
                                            <br><br>
                                            <input type="" hidden="" name="id_user" value="<?php echo $data['id_user'] ?>">
                                            <input type="submit" name="tanggapi" class="btn btn-success" value="Kirim">
                                       </form>
                                       <br><br><br>
                                       <a class="btn btn-warning" href="../images/<?php echo $data['foto']?>" target="_blank" download>
                                           <div class="col-md-4">
                                               <i class="fa fa-download"></i> download <?php echo $data['foto']; ?>
                                           </div>
                                       </a>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
