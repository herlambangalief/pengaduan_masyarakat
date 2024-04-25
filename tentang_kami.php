<?php 
	require 'koneksi.php';
	$sql=mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE status='selesai' ORDER BY id_pengaduan LIMIT 3");
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

			<?php 
				include 'header.php';
			?>

			<!-- start banner Area -->
			<section class="banner-area bg-info" id="home">	
				<div class="container">				
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-9">
							<h6>Selalu ditangani oleh instansi berwenang</h6>
							<h1 class="text-white">
								Pelayanan Pengaduan  <br>
								Masyarakat
							</h1>
						</div>
						<img class="header-img img-fluid align-self-end d-flex" src="img/bg.png" alt="">			
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start callto Area -->
			<section class="calltotop-area pt-70 pb-70">
				<div class="container">
					<div class="callto-section">
						<div class="row justify-content-center align-items-center">
							<div class="col-lg-4 call-left no-padding">
								<p>
									Dapatkan <span>Penanganan</span><br>
									Orang-orang <span>Ahli</span>
								</p>
							</div>
							<div class="col-lg-5 call-middle">
								<p>
									Kami akan menangani laporan yang masyarakat berikan sebaik mungkin dengan bantuan instansi yang berwenang dan akan memberikan solusi dan bantuan terbaik untuk masyarakat
								</p>
							</div>
							<div class="col-lg-3 call-right justify-content-end d-flex">
								<a href="#" class="call-btn bg-info">Konsultasi Langsung</a>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End callto Area -->			


			<!-- Start service Area -->
			<section class="service-area section-gap" id="immigration">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-7 pb-40 header-text text-center">
							<h1 class="text-info">Penjelasan Solution</h1>
						</div>
					</div>					
					<center>
						<div class="row">
							<div class="col-lg-12">
								<div class="single-service">
									<div class="thumb">
										<center>
											<iframe class="col-md-10" style="height: 70vh;" src="https://www.youtube.com/embed/lXquUmTcWiw">
											</iframe>
										</center>
									</div>
								</div>
							</div>
						</div>
					</center>
				</div>	
			</section>
			<!-- End service Area -->


			<!-- Start service Area -->
			<section class="service-area section-gap" id="immigration">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-7 pb-40 header-text text-center">
							<h1 class="pb-10">Fitur Dari Kami</h1>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<center><img src="img/1.png" alt="" style="height: 30vh;"></center>
								</div>
								<center><a href="country-list.html"><h4>Anonim</h4></a></center>
								<center>
									<p>
										Bisa Menyembunyikan Identitas
									</p>
								</center>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<center><img src="img/3.png" alt="" style="height: 30vh;"></center>
								</div>
								<center><a href="country-list.html"><h4>Peninjauan Laporan
								</h4></a></center>
								<center>
									<p>
										Meninjau Proses Tindak Lanjut Laporan
									</p>
								</center>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<center><img src="img/2.jpg" alt="" style="height: 30vh;"></center>
								</div>
								<center><a href="country-list.html"><h4>Rahasia</h4></a></center>
								<center>
									<p>
										Bisa Membuat Laporan Anda Tidak Diketahui Publik
									</p>
								</center>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<center><img src="img/4.png" alt="" style="height: 30vh;"></center>
								</div>
								<center><a href="country-list.html"><h4>Membantu Orang Lain</h4></a></center>
								<center>
									<p>
										Bantu Orang Lain Yang Memiliki Masalah
									</p>
								</center>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End service Area -->
			


			<!-- Start booking Area -->
			<section class="booking-area section-gap relative" id="consultancy">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-5 col-md-6 booking-left">
							<h1 class="text-white">
								Menghubungkan Seluruh	
								Masyarakat
							</h1>
							<h4 class="text-white">

							</h4>
							<p class="text-light">
								Kami ingin membuat masyarakat bisa mendapatkan solusi dari masalahnya dengan bantuan dari instansi yang berwenang dan bantuan dari masyarakat lainnya untuk menciptakan hubungan sosial yang lebih baik
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End booking Area -->


			<!-- Start latest-blog Area -->
			<section class="latest-blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Laporan Terselesaikan</h1>
							</div>
						</div>
					</div>					
					<div class="row">
						<?php while ($data=mysqli_fetch_assoc($sql)) {?>
							<div class="col-lg-3 single-blog">
								<img class="img-fluid" style="height: 30vh; width: 150%;" src="img/<?php echo $data['foto']; ?>" alt="">
								
								<a href="isi_laporan.php?id=<?php echo $data['id_pengaduan'] ?>"><h4><?php echo $data['perihal']; ?></h4></a>
								<p>
									<?php echo $data['isi_laporan']; ?>
								</p>
								<p class="post-date"><?php echo $data['tgl_pengaduan']; ?></p>
							</div>
						<?php } ?>	
					</div>
				</div>	
			</section>
			<!-- End latest-blog Area -->		


			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="footer-bottom row">
						<p class="footer-text m-0 col-lg-6 col-md-12">
Copyright &copy; 2020 All rights reserved by <span class="text-info" >Herlambang Alief</span>
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



