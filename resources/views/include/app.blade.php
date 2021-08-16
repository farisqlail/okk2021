<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OKK DINAMIKA 2021</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('./assets/img/logo.png') }}" rel="icon">
  <link href="{{ asset('./assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500;600&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


  <!-- Template Main CSS File -->
  <link href="{{ asset('./assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
      <img src="./assets/img/logo-nav.png" alt="">
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="{{ url('/') }}">Beranda</a></li>
        <li><a class="nav-link scrollto" href="{{ url('/pengumumanHome') }}">Pengumuman</a></li>
        <li><a class="nav-link scrollto" href="{{ url('/galeri') }}">Galeri</a></li>
        <li><a class="nav-link scrollto" href="{{ url('/jadwal') }}">Jadwal</a></li>
        <li><a class="nav-link scrollto" href="{{ url('/tentang') }}">Tentang</a></li> 
      </ul>
      <i class="fas fa-bars mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<main>
    @yield('content')
</main>


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">`
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{ asset('./assets/img/logo-nav.png') }}" alt="">
              
            </a>
            <p style="color: #4F5551;">OKK Universitas Dinamika adalah kegiatan Orientasi Kehidupan dan Kampus yang mengenalkan kehidupan seorang mahasiswa baik di dalam lingkungan kampus Universitas Dinamika maupun di masyarakat.</p>
            <div class="social-links mt-3">
              <a href="https://www.instagram.com/okkdinamika/?hl=en" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Downloads</h4>
            <ul>
              <li><a href="#">Buku Panduan OKK 2021</a></li>
              <li><a href="#">Twibbon OKK 2021</a></li>
              <li><a href="#">Buku Panduan Pergantian Foto Profil & Nama Gmail</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
           
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontak Kami</h4>
            <p style="color: #4F5551;">
              Jl. Raya Kedung Baruk 98, Surabaya <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> okk@dinamika.ac.id<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>OKK DINAMIKA 2021</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="fas fa-arrow-up"></i></a>

  <!-- Vendor JS Files -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	
	<!--Fixed AOS Not Showing Content-->
	<script>AOS.init();</script>
	<!--End of Script-->

  <!-- Template Main JS File -->
  <script src="{{ asset('./assets/js/main.js') }}"></script>

</body>

</html>