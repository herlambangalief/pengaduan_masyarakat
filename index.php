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

			<?php include 'header.php'; ?>

			<?php 
			require 'koneksi.php';
			 if (isset($_POST['lapor'])) {
			 	$perihal=$_POST['perihal'];
			 	$laporan=$_POST['laporan'];
			 	$kategori=$_POST['kategori'];
			 	$nik=$_SESSION['nik'];
			 	$tanggal=date("Y-m-d");

			 	if ($_POST['rahasia']==TRUE) {
			 		$rahasia=$_POST['rahasia'];
			 	}
			 	else{
			 		$rahasia="";
			 	}

			 	if ($_POST['anonim']==TRUE) {
			 		$anonim=$_POST['anonim'];
			 	}
			 	else{
			 		$anonim="";
			 	}

			 	if ($_FILES['filez']['name'] != "") {
			 		$ukuran = $_FILES['filez']['size'];
				    $file_tmp = $_FILES['filez']['tmp_name'];
				    $gambar = $_FILES['filez']['name'];
				    move_uploaded_file($file_tmp, 'img/'.$gambar);
			 	}
			 	else{
			 		echo "<script type='text/javascript'>document.getElementById('filenames').innerHTML='Wajib Menambah File'</script>";
			 	}

			 	$sql=mysqli_query($koneksi,"INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `perihal`, `isi_laporan`, `id_kategori`, `foto`, `status`, `kondisi1`, `kondisi2`,`id_user`) VALUES (NULL, '$tanggal', '$nik', '$perihal', '$laporan', '$kategori', '$gambar', '0', '$rahasia', '$anonim', '$_SESSION[nik]');");

			 	echo "<script>location.href='laporan.php'</script>";

			 }

			?>

			<!-- start banner Area -->
			<section class="banner-area bg-info" id="home">	
				<div class="container">
					<form method="post" action="" enctype="multipart/form-data">
						<div class="row fullscreen d-flex align-items-center justify-content-start">
							<div class="banner-content col-lg-10">
								<h6 style="margin-top: 135px;">.</h6>
								<h2 class="text-white">
									Pelayanan Pengaduan Masyarakat
								</h2>
								<br><br>
								<input type="text" required="" name="perihal" placeholder="Perihal Pengaduan" class="form-control col-md-12">
								<textarea name="laporan" required="" class="form-control col-md-12" rows="10" placeholder="Ketikan Laporan Anda Di Sini...."></textarea>
								<select name="kategori" class="form-control">
									<option selected="" disabled="">Kategori Laporan</option>
									<option>1</option>
								</select>
					            <div class="form-control col-md-12">
					              	<div onclick="document.getElementById('uploader').click();"  class="btn btn-warning">Add File</div>
					               	<span id="filenames">Anda Wajib Memasukan Gambar</span>
					               	<input required="" style="" type="file" hidden="" name="filez" id="uploader" onchange="addname(this)">
					             </div>
					            <br>
								<table class="col-md-12 bg-light">
									<tr>
										<td class="col-md-1"><input type="submit" name="lapor" value="Laporkan" class="btn btn-success"></td>
										<td class="col-md-2"><span class="text-dark">Anonim</span> <input type="checkbox" name="anonim" value="anonim"></td>
										<td class="col-md-9"><span class="text-dark">Rahasia</span> <input type="checkbox" name="rahasia" value="rahasia"></td>
									</tr>
								</table>
								<br>
							</div>	
						</div>
					</form>
					<br><br><br>
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

			<section class="row">
				<div class="container fluid col-md-6">
					<div class="card-body bg-info">
						<center>
							<h1 class="text-light">
								<i style="font-size: 150%;" class="fa fa-arrow-up"></i>
								<br>
								Jumlah Laporan Yang Diterima
								<br>
								100
							</h1>
						</center>
					</div>
				</div>
				<div class="container fluid col-md-6">
					<div class="card-body bg-success">
						<center>
							<h1 class="text-light">
								<i style="font-size: 150%;" class="fa fa-check"></i>
								<br>
								Jumlah Laporan Diselesaikan
								<br>
								90
							</h1>
						</center>
					</div>
				</div>
			</section>

			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="footer-bottom row">
						<p class="footer-text m-0 col-lg-6 col-md-12">
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

		<script type="text/javascript">
			  	function upload() {
			  		document.getElementById('uploader').click();
			  	}
			  	function addname(val){
			  			var FileSize = val.files[0].size / 1024 / 1024;
				        if (FileSize > 2) {
				            document.getElementById("filenames").innerHTML="<b style='color:#f00;'>File Tidak Boleh Lebih Dari 2 MB</b>";
				        }
				        else if (FileSize < 2){

					  	var fullPath = document.getElementById('uploader').value;
					  		if (fullPath) {
					    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
					    var filename = fullPath.substring(startIndex);
					    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
					        filename = filename.substring(1);
					    }
					    document.getElementById("filenames").innerHTML=filename;
					    }
					}
				}
			  	
			  	
			  </script>
	</html>



