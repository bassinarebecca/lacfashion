<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>LacFashion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}} " rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}} " rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}} " rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}} " rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/monCss.css')}} " rel="stylesheet">
  <link href="{{asset('assets/css/style.css')}} " rel="stylesheet">
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">bassinarebecca@gmail.com</a>
        <i class="icofont-phone"></i> +226 72 41 40 73
      </div>
      <div class="social-links">
        <a href="https://www.facebook.com/PADAF-103550915300853" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Le pagne<span>Authentique</span></a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route('accueil')}}">Accueil</a></li>
          <li><a href="{{route('apropos')}}">A propos</a></li>
          <li><a href="{{route('produit')}}">Produits</a></li>
          <li class="drop-down"><a href="">Catalogue</a>
            <ul>
                @foreach ($categories as $categorie)
                <li class=""><a href=" {{route('cata.scategorie', $categorie)}}"> {{$categorie->nom}}</a>
                @endforeach
            </ul>
          </li>
          <li><a href="{{route('contact')}}">Contact</a></li>
          <li><a class="text-muted" href="#panier">Panier</a></li>

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  <section id="hero1" class="d-flex align-items-center">
      {{-- vide --}}
  </section>
  <!-- ======= Hero Section ======= -->
  <main class="mt-2" id="main">
    @yield('contenu')
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div id="footer" class="footer-top text-center">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 col-md-6 footer-links">
            <div class="copyright">
                &copy; Copyright <strong><span>LacFashion</span></strong>. Tout droit reservé
              </div>
          </div>
          <div class="col-lg-6 col-md-6 footer-links">
            <div class="social-links  d-flex">
              <h6>Newsletters</h6>
              @if (session()->has('success'))
                <div class="alert alert-success">
                   (session()->get('success'))
                </div>
              @endif
              @if (session()->has('failure'))
              <div class="alert alert-failure">
                 (session()->get('failure'))
              </div>
            @endif
              <form class="d-flex ml-1" action="{{route('test')}}" method="post">
                  @csrf
                <input type="email" name="email">
                <input type="submit" value="Subscribe">
              </form>

            </div>
        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
