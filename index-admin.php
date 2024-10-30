  <?php
include('konek.php');
  ?>

  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ADMIN - Elibrary</title>
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

      <h1 class="logo mr-auto"><a href="index.html">E-Library . Admin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index-admin.php">Home</a></li>
          <li><a href="#about">Input Buku</a></li>
          <li><a href="#services">Data User</a></li>
          <!-- <li><a href="#portfolio">Koleksi Buku</a></li> -->
           <li><a href="#team">Data Admin</a></li>
         <li><a href="logout.php">Logout</a></li>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Welcome To E-library</h1>
      <h2>Membaca adalah jendela dunia</h2>
      
  </section><!-- End Hero -->

  <main id="main">
 <div class="section-title">
          <span>Input Buku</span>
          <h2>Input Buku</h2>
          <p></p>
        </div>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

<th><a class='waves-effect waves-light darken-2 btn btn-danger' href='inputbuku.php'>Input Buku</a></th>
        <table class="text-center table-table-dark mt-5 mb-5 container text-centers " border="1">
  <thead>
    <form action="index-admin.php#about" method="get">
      <label>CARI :</label>
      <input type="text" name="cari">
      <input type="submit" value="cari">
    </form>

    <tr class="table-active">
      <th>ID BUKU</th>
      
      <th>NAMA BUKU </th>
     <th>BUKU</th>
      <th>JENIS BUKU</th>
      <th>NAMA PENERBIT</th>
      <th>TAHUN TERBIT</th>
     
    
      <th colspan="3" class="table-active">SETTING</th>
    </tr>

  </thead>  
  <?php

    if(isset($_GET['cari']))
    {
      $q  =$_GET['cari'];
  $sql = "SELECT * FROM buku WHERE nama_buku LIKE '%$q%'";
    }
    else
    {
      $sql = "SELECT * FROM buku";
    }
    $hasil = mysqli_query($konek,$sql);

  while($data = mysqli_fetch_assoc($hasil))
  {
  echo "<thead>";
  echo"<th>$data[id_buku]</th>";
  echo"<th>$data[nama_buku]</th>";
  echo"<th>$data[gambar]</th>";
  echo"<th>$data[jenis_buku]</th>";
  echo"<th>$data[nama_penerbit]</th>";
  echo"<th>$data[tahun_terbit]</th>";


   echo "<th><a class='waves-effect waves-light darken-2 btn btn btn-danger' href='hapusbuku.php?id_buku=$data[id_buku]'>Hapus</a></th>";
  echo "<th><a class='waves-effect waves-light darken-2 btn btn-success green' href='ubahbuku.php?id_buku=$data[id_buku]'>Edit</a></th>";
  
  echo "</thead>";
  
  }
  ?>

</table>







      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Data User</span>
          <h2>Data User</h2>
          <p></p>
        </div>
<th><a class='waves-effect waves-light darken-2 btn btn-danger' href='inputuser.php?id_user2=$data[id_user2]'>Input User</a></th>
        <table class="text-center table-table-dark mt-5 mb-5 container text-centers " border="1">
  <thead>
     <form action="index-admin.php#services" method="get">
      <label>CARI :</label>
      <input type="text" name="ini">
      <input type="submit" value="cari">
    </form>
    <tr class="table-active">
      <th>ID</th>
      <th>NAMA</th>
      <th>USERNAME</th>
      <th>EMAIL</th>
      <th>PASSWORD</th>
      <th>JABATAN</th>
    
      <th colspan="3" class="table-active">SETTING</th>
    </tr>

  </thead>  
  <?php
    if(isset($_GET['ini']))
    {
      $q  =$_GET['ini'];
  $sql = "SELECT * FROM user2 WHERE username LIKE '%$q%'";
    }
    else
    {
      $sql = "SELECT * FROM user2";
    }
    $hasil = mysqli_query($konek,$sql);

  while($data = mysqli_fetch_assoc($hasil))
  {
  echo "<thead>";
  echo"<th>$data[id_user2]</th>";
  echo"<th>$data[nama]</th>";
  echo"<th>$data[username]</th>";
  echo"<th>$data[email]</th>";
  echo"<th>$data[pass]</th>";
  echo"<th>$data[level]</th>";

   echo "<th><a class='waves-effect waves-light darken-2 btn btn btn-danger' href='hapususer.php?id_user2=$data[id_user2]'>Hapus</a></th>";
  echo "<th><a class='waves-effect waves-light darken-2 btn btn-success green' href='ubahuser.php?id_user2=$data[id_user2]'>Edit</a></th>";
  
  echo "</thead>";
  
  }
  ?>

</table>





       

    <!-- ======= Portfolio Section =======
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Koleksi Foto</span>
          <h2>Koleksi Foto</h2>
          <p>Membaca lah sampai orang lain lelah melihatmu membaca</p>
        </div>

<form method="POST" action="tambahbuku.php" enctype="multipart/form-data">


        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Edukasi</li>
              <li data-filter=".filter-card">Romance</li>
              <li data-filter=".filter-web">Horor</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- End Portfolio Section -->
<!-- </form>  -->

<!-- 
<!-- 
        <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <span>Data Admin</span>
          <h2>Data Admin</h2>
          <p>Pengolah Data Admin</p>
        </div>

  <th><a class='waves-effect dark btn btn-danger' href='inputadmin.php?id_user=$data[id_user]'>Tambah Admin</a></th>
<table class="text-center table-table-dark mt-5 mb-5 


container text-centers " border="1">
  <thead>
     <form action="index-admin.php#team" method="get">
      <label>CARI :</label>
      <input type="text" name="sb">
      <input type="submit" value="cari">
    </form>
    <tr class="table-active">
      <th>ID</th>
      <th>USERNAME</th>
      <th>PASSWORD</th>
      <th>JABATAN</th>
    
      <th colspan="3" class="table-active">SETTING</th>
    </tr>

  </thead>  
  <?php
    if(isset($_GET['sb']))
    {
      $q  =$_GET['sb'];
  $sql = "SELECT * FROM user WHERE username LIKE '%$q%'";
    }
    else
    {
      $sql = "SELECT * FROM user";
    }
    $hasil = mysqli_query($konek,$sql);

  while($data = mysqli_fetch_assoc($hasil))
  {
  echo "<thead>";
  echo"<th>$data[id_user]</th>";
  echo"<th>$data[username]</th>";
  echo"<th>$data[pass]</th>";
  echo"<th>$data[level]</th>";

   echo "<th><a class='waves-effect waves-light darken-2 btn btn-danger' href='hapusadmin.php?id_user=$data[id_user]'>Hapus</a></th>";
  echo "<th><a class='waves-effect waves-light darken-2 btn btn-success' href='ubahadmin.php?id_user=$data[id_user]'>Edit</a></th>";
  
  echo "</thead>";
  
  }
  ?>

</table>




        
    </section><!-- End Team Section -->


  </main><!-- End #main -->

 

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