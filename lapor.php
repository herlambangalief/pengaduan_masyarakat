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

    <?php 
      require 'koneksi.php';
      $nik=$_SESSION['ardiansyah_nik'];
      $query=mysqli_query($connect,"SELECT * FROM ardiansyah_pengaduan WHERE ardiansyah_status='0' AND ardiansyah_nik=$nik");
    ?>

    <div class="site-blocks-cover" style="overflow: hidden;">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">
            
            <img src="images/undraw_investing_7u74.svg" alt="Image" class="img-fluid img-absolute">

            <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-6 mr-auto">
                <h1>Lakukan Pengaduan</h1>
                <p class="mb-5">Pengaduan masyarakat untuk membantu kehidupan masyarakat</p>
              </div>
              
              
            </div>

          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-image2 overlay" id="contact-section" style="background-image: url('images/landing_1.png');">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3 text-white">Pengaduan</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-9 mb-5">

            

            <form action="" method="post" enctype="multipart/form-data" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Form Pengaduan</h2> 
              <?php 
                  $nik= $_SESSION['ardiansyah_nik'];
              ?>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">NIK</label>
                  <input type="text" id="fname" readonly="" name="nik" class="form-control rounded-0" value="<?php echo $nik; ?>">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Permasalahan</label> 
                  <textarea name="permasalahan" required="" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Ketikkan Pesan Anda Di Sini"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Foto</label>
                  <input type="file" id="file" class="form-control rounded-0" name="filez">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="adukan" value="Adukan" class="btn btn-primary mr-2 mb-2">
                </div>
              </div>

  
            </form>
          </div>
        
        </div>
        
      </div>
    </div>

    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Laporan Anda</h2>
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
              <p><a href="laporan_user.php?id=<?php echo $data['ardiansyah_id_pengaduan'] ?>&nik=<?php echo $data['ardiansyah_nik'] ?>">Baca Lebih Lanjut.....</a></p>
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

  <?php 
    require 'koneksi.php';

    if (isset($_POST['adukan'])) {

   
      $ukuran = $_FILES['filez']['size'];
      $file_tmp = $_FILES['filez']['tmp_name'];
      $gambar = $_FILES['filez']['name'];
      move_uploaded_file($file_tmp, 'images/'.$gambar);
      
      
    $nik=$_POST['nik'];
    $permasalahan=$_POST['permasalahan'];
    $tanggal=date("Y-m-d");


      $sql_update="INSERT INTO `ardiansyah_pengaduan` (`ardiansyah_id_pengaduan`, `ardiansyah_tgl_pengaduan`, `ardiansyah_nik`, `ardiansyah_isi_laporan`, `ardiansyah_foto`, `ardiansyah_status`) VALUES (NULL, '$tanggal', '$nik', '$permasalahan', '$gambar', '0');";
      if ($sql_update) {
        mysqli_query($connect,$sql_update);
        echo "<script type='text/javascript'>location.href='lapor.php'</script>";
      }
    }
  ?>
</html>