  <?php
include('konek.php');
  ?>

  <!DOCTYPE html>
<html lang="en">

  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>USER - Elibrary</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons --> 

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


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">E-Library . User</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index-user.php">Home</a></li>
        
          <li><a href="#portfolio">Koleksi Buku</a></li>
         <li><a href="logout.php">Logout</a></li>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Welcome To E-library </h1>
      <h2>Membaca adalah jendela dunia</h2>
      
  </section><!-- End Hero -->


    

    <!-- ======= Cta Section ======= -->
    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Koleksi Buku</span>
          <h2>Koleksi Buku</h2>
          <p>Membaca adalah jendela dunia</p>

          <form action="index-user.php#portfolio" method="get">
             <label>Cari :</label>
            <input type="text" name="cari">
            <input type="submit" value="cari">
          </form>
        

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
        <?php  $hasil = mysqli_query($konek,"select * from buku");

        while($data = mysqli_fetch_assoc($hasil)):
        ?>
        <a href="uploadbuku/<?= $data['gambar'] ?>">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/buku.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Nama Buku       : <?= $data['nama_buku'] ?></h4>
               <h4>Jenis Buku     : <?= $data['jenis_buku'] ?></h4>
                <h4>Nama Penulis  : <?= $data['nama_penerbit'] ?></h4>
                 <h4>Tahun Terbit : <?= $data['tahun_terbit'] ?></h4>

              
              
            </div>
          </div>
        </a>
          <?php endwhile; ?>

          

      </div>
    </section><!-- End Portfolio Section -->

    

   


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