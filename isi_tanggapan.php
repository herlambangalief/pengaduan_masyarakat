<?php 
    require 'koneksi.php';
    $id=$_GET['id'];
    $sql=mysqli_query($koneksi,"SELECT * FROM tanggapan WHERE id_tanggapan=$id");
    $fetch=mysqli_fetch_assoc($sql);

    $sqli=mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE id_pengaduan='$fetch[id_pengaduan]'");
    $data=mysqli_fetch_assoc($sqli);
?>

    <!DOCTYPE html>
    <html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Solution -- Pengaduan Masyarakat</title>
        <link rel="icon" type="image/png" href="img/logo.png">

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/nice-select.css">                  
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="css/owl.carousel.css">
            <link rel="stylesheet" href="css/main.css">
        </head>
        <body>

            <?php require 'header.php'; ?>  
			<br><br>
			<!-- Start blog-posts Area -->
			<section class="blog-posts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 post-list blog-post-list">
							<div class="single-post">
								<img class="img-fluid" src="img/<?php echo $data['foto']; ?>" style="height: 70vh; width: 100%;" alt="">
								
								<a href="#">
									<h1 style="text-transform: capitalize;">
                                        <?php echo $data['perihal']; ?>
									</h1>
								</a>
								<div class="content-wrap">
									<?php echo $fetch['tanggapan']; ?>
								</div>

                            <!-- Start nav Area -->
                            


							</div>			
						</div>
					</div>
				</div>	
			</section>
			<!-- End blog-posts Area -->
			

            <!-- start footer Area -->      
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="footer-bottom row">
                        <p class="footer-text m-0 col-lg-6 col-md-12">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights  by <a href="#">M.Herlambang</a>
                        </p>
                    </div>
                </div>
            </footer>   
            <!-- End footer Area -->

            <script src="js/vendor/jquery-2.2.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="js/vendor/bootstrap.min.js"></script>          
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
            <script src="js/easing.min.js"></script>            
            <script src="js/hoverIntent.js"></script>
            <script src="js/superfish.min.js"></script> 
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script> 
            <script src="js/owl.carousel.min.js"></script>          
            <script src="js/jquery.sticky.js"></script>
            <script src="js/jquery.nice-select.min.js"></script>            
            <script src="js/parallax.min.js"></script>  
            <script src="js/waypoints.min.js"></script>
            <script src="js/jquery.counterup.min.js"></script>          
            <script src="js/mail-script.js"></script>   
            <script src="js/main.js"></script>  
        </body>
    </html>

