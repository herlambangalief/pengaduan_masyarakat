
	
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

			<?php 
				include 'header.php';
			?>
			<?php 
				require 'koneksi.php';
				$sql=mysqli_query($koneksi,"SELECT * FROM tanggapan WHERE id_user='$_SESSION[nik]'");
			?>
			<br><br>

			<!-- Start service Area -->
			<section class="service-area section-gap list-page-service" id="immigration">
				<div class="container">				
					<div class="row">
						<?php while ($data=mysqli_fetch_assoc($sql)) {
							$sqli=mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE id_pengaduan=$data[id_pengaduan]");
							$fetch=mysqli_fetch_assoc($sqli);
						?>
							<div class="col-lg-3 single-blog">
								<a href="isi_tanggapan.php?id=<?php echo $data['id_tanggapan'] ?>">
								<img class="img-fluid" style="height: 30vh; width: 150%;" src="img/<?php echo $fetch['foto']; ?>" alt="">
								<h4><?php echo $fetch['perihal']; ?></h4>
								<p>
									<?php echo $fetch['isi_laporan']; ?>
								</p>
								<p class="post-date"><?php echo $fetch['tgl_pengaduan']; ?></p>
								</a>
							</div>
						<?php } ?>						
					</div>
				</div>	
			</section>
			<!-- End service Area -->

			<!-- Start booking Area -->
			<section class="booking-area section-gap relative" id="consultancy">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-12 col-md-6 booking-left">
							<h1 class="text-white">
								Selalu Memberikan Hasil <br> 
								Terbaik Untuk Masyarakat
							</h1>
							<h4 class="text-white">
								Kami akan memberi solusi untuk seluruh masyarakat tanpa terkecuali demi menciptakan kehidupan bermasyarakat yang lebih nyaman dan harmonis
							</h4>
						</div>
					</div>
				</div>	
			</section>
			<!-- End booking Area -->
			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						
					<div class="footer-bottom row">
						<p class="footer-text m-0 col-lg-12 col-md-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; 2020 All rights reserved by <span class="text-info" >Herlambang Alief</span>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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



