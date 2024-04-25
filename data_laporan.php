<?php 
  require 'koneksi.php';
  $query=mysqli_query($connect,"SELECT * FROM ardiansyah_pengaduan WHERE ardiansyah_status='0'");
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
    
    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Pelaporan Terbaru</h2>
          </div>
        </div>

        <div class="row">
          
          <?php while ($data=mysqli_fetch_assoc($query)) {?>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img style="height: 25vh;" src="images/<?php echo $data['ardiansyah_foto'] ?>" alt="Image" class="img-fluid">
              <p class="texta-dark">
                <?php echo $data['ardiansyah_isi_laporan']; ?>
              </p>
              <p><a href="isi_laporan.php?id=<?php echo $data['ardiansyah_id_pengaduan'] ?>">Baca Lebih Lanjut.....</a></p>
            </div> 
          </div>

          <?php } ?>

        </div>
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