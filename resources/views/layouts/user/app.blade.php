<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DPM PM UNUD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- Favicons -->
  <link rel="icon" href="{{ asset('img/favicon.png') }}" />
  <!-- <link href="assets/img/favicon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.7.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><img src="{{ asset('img/logo.png') }}" alt="logo DPM UNUD" width="40" height="40"
          class="" /><a href="{{ route('index') }}"><span class="title-text-DPM-upper"> DPM PM UNUD</span></a>
      </h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ route('index') . '#hero' }}">Beranda</a></li>
          <li><a class="nav-link scrollto" href="{{ route('index') . '#about' }}">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="{{ route('index') . '#cta' }}">Perpustakaan</a></li>
          <li><a class="nav-link scrollto" href="{{ route('index') . '#recent-postingan' }}">Postingan</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="{{ route('index') . '#contact' }}">Aspirasi</a></li>
          <li><a class="nav-link scrollto" href="{{ route('index') . '#footer' }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/purecounter.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/glightbox.min.js') }}"></script>
  <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('js/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('js/sweetalert.min.js') }}"></script>
  <script src="{{ asset('js/purecounter.js') }}"></script>
  <script src="{{ asset('js/lazysizes.min.js') }}"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="https://kit.fontawesome.com/d09f97796c.js" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

  @yield('scripts')

</body>

</html>
