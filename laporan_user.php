<?php 
  require 'koneksi.php';
  $id=$_GET['id'];
  $nik=$_GET['nik'];
  $query=mysqli_query($connect,"SELECT * FROM ardiansyah_pengaduan WHERE ardiansyah_status='0' AND ardiansyah_id_pengaduan=$id");
  $fetch=mysqli_fetch_assoc($query);
  $judul1=$fetch['ardiansyah_isi_laporan'];
  $judul2=explode(" ",$judul1);
  $judul=$judul2[0]." ".$judul2[1]." ".$judul2[2]." ".$judul2[3];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pengaduan Masyarakat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <?php require 'header.php'; ?>

    <br><br>


    <div class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3"><?php echo $judul; ?></h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-12" data-aos="fade-right">
            <img src="images/<?php echo $fetch['ardiansyah_foto'] ?>" alt="Image" class="img-fluid">
            <br><br>
          </div>
          <div class="col-lg-12 ml-auto pl-lg-5">
            <h2 class="text-black mb-4 h3 font-weight-bold">Isi Pengaduan</h2>
            <p class="mb-4"><?php echo $fetch['ardiansyah_isi_laporan']; ?></p>
          </div>
        </div>

        
      </div>
    </div>

    <br>

    <div class="container" style="margin-bottom: 70px;">
      <center><h2 class="text-dark">Tanggapan Admin</h2></center>
      <textarea class="form-control" rows="10"></textarea>
      <br>
      <div class="row">
        <form method="post" action="">
          <input type="submit" class="btn btn-success" value="Selesai"  name="">
        </form>
        <a href="balas_admin.php?id=<?php echo $id ?>&nik=<?php echo $nik ?>" class="btn btn-info">Balas</a>
      </div>
    </div>
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
  
  </body>
</html>