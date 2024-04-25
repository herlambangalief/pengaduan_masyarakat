<?php
	require 'koneksi.php'; 
	if (isset($_POST['daftar'])) {
		$nik=$_POST['nik'];
		$nama=$_POST['nama'];
		$username=$_POST['username'];
		$pass=$_POST['pass'];
		$email=$_POST['email'];
		$tlp=$_POST['tlp'];

		$sql=mysqli_query($koneksi,"INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `email`, `foto_profil`, `bio`, `tanggal_lahir`, `jenis_kelamin`, `telp`) VALUES ('$nik', '$nama', '$username', '$pass', '$email', NULL, NULL, NULL, NULL, '$tlp');");
		if ($sql) {
			echo "<script type='text/javascript'>location.href='login.php'</script>";
		}
		else{
			echo "<script type='text/javascript'>location.href='daftar.php'</script>";
		}

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Solution</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form method="post" action="" class="login100-form validate-form flex-sb flex-w">
				
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							NIK
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "NIK Diperlikan">
						<input maxlength="16" class="input100" type="text" name="nik" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Nama
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Nama Di Perlukan">
						<input maxlength="60" class="input100" type="text" name="nama" >
						<span class="focus-input100"></span>
					</div>


					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username Di Perlukan">
						<input maxlength="20" class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password Di Perlukan">
						<input maxlength="30" class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Email Diperlukan">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							No Telp
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "No Telp Diperlukan">
						<input maxlength="13" class="input100" type="text" name="tlp" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" name="daftar" class="login100-form-btn">
							Daftar
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<a href="login.php" class="txt2 bo1">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main1.js"></script>

</body>
</html>