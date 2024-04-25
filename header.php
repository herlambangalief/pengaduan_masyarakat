<?php
    session_start();
      if (!isset($_SESSION['login'])) {
        echo "<script type='text/javascript'>location.href='login.php'</script>";
      }

      else{
        if (isset($_SESSION['username'])) {
            $username= $_SESSION['username'];
            $nik= $_SESSION['nik'];
        }
      }
?>

<header id="header" id="home">
			    <div class="container">
			    	<div class="row header-top align-items-center">
			    		<div class="col-lg-4 col-sm-4 menu-top-left">
			    			<span>
			    				Membantu Seluruh Masyarakat <br>
			    				Menyelesaikan Masalah
			    			</span>
			    		</div>
			    		<div class="col-lg-4 row menu-top-middle justify-content-center d-flex">
							<a href="index.php">
								<img class="img-fluid" src="img/logo.png" style="height: 8vh;" alt="">
								<span style="font-size: 25px;" class="text-info">Solution</span>	
							</a>			    			
			    		</div>
			    		<div class="col-lg-4 col-sm-4 menu-top-right">
			    			<a class="tel" href="tel:+880 123 12 658 439">+62 831 4989 9368</a>
			    			<a href="tel:+62 831 4989 9368"><span class="lnr lnr-phone-handset bg-info"></span></a>
			    		</div>
			    	</div>
			    </div>	
			    	<hr>
			    <div class="container">	
			    	<div class="row align-items-center justify-content-center d-flex">
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="index.php">Laporkan</a></li>
				          <li><a href="tentang_kami.php">Tentang Kami</a></li>
				          <li><a href="laporan.php">Seluruh Laporan</a></li>
				          <li><a href="tanggapan.php">Tanggapan</a></li>
				          <li><a href="logout.php" class="text-danger">Logout</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->