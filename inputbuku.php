  <?php
include('konek.php');
  ?>

  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Input Data Admin - Elibrary</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day - v2.1.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href=".com">elibrary@gmail.com</a>
        <i class="icofont-phone"></i> 0857 3862 3210
      </div>
      
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="#">Input Buku</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->



    </div>
  </header><!-- End Header -->



 
          </form>


            

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      
  

 <form class="col s12" method="POST" action="tambahbuku.php" enctype="multipart/form-data">


          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>NAMA BUKU</label>
                <input class="form-control" name="nama_buku" type="text" placeholder="NAMA BUKU" required="required" data-validation-required-message="Harap Masukan username Anda!">
                <p class="help-block text-danger"></p>
              </div>
            </div>

          <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>BUKU</label>
                <input class="form-control" name="nama_file" type="File" placeholder="BUKU">
                <p class="help-block text-danger"></p>
              </div>
            </div>



            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>JENIS BUKU</label>
                <input class="form-control" name="jenis_buku" type="text" placeholder="JENIS BUKU" >
                <p class="help-block text-danger"></p>
              </div>
            </div>
             <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>NAMA PENERBIT</label>
                <input class="form-control" name="nama_penerbit" type="text" placeholder="NAMA PENULIS" required="required" >
                <p class="help-block text-danger"></p>
              </div>


              <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>TAHUN TERBIT</label>
                <input class="form-control" name="tahun_terbit" type="text" placeholder="TAHUN TERBIT" required="required" >
                <p class="help-block text-danger"></p>
              </div>


          
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" name="upload" value="kirim" >Send</button>
            </div>
          </form>
</section>
<hr>

   
      <div class="credits">
      
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

