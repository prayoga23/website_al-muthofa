<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Website MTs Al-Musthofa</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="MTs Al-Musthofa" name="keywords" />
  <meta content="Website MTs. Al-Musthofa" name="description" />

  <!-- Favicon -->
  <link href="{{ asset('img/logo.png')}}" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

  <!-- Flaticon Font -->
  <link href="{{ asset('lib/flaticon/font/flaticon.css')}}" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="{{asset('template/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
  <link href="{{asset('template/lib/lightbox/css/lightbox.min.css')}} " rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{ asset('template/css/style.css')}}" rel="stylesheet" />
  <link href="{{ asset('template/css/newstyle.css')}}" rel="stylesheet" />

<!-- Google adsense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7328519214074833"
     crossorigin="anonymous"></script>
</head>

<body>
  <!-- Navbar Start -->
  <div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
      <a href="{{ route('index') }}" class="navbar-brand font-weight-bold text-secondary" style="font-size: 30px">
        <img src="{{ asset('img/logo.png')}}" alt="" width="80" height="80">
        <span class="text-primary">MTs. Al-Musthofa</span>
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a href="{{ route('index') }}" class="nav-item nav-link {{ Nav::isRoute('index') }}">Beranda</a>
          <a href="{{ route('tentang kami') }}" class="nav-item nav-link  {{ Nav::isRoute('tentang kami') }}">Tentang
            Kami</a>
          <a href="{{ route('publikasi') }}" class="nav-item nav-link  {{ Nav::isRoute('publikasi') }}">Publikasi</a>
          <a href="{{ route('berita') }}" class="nav-item nav-link  {{ Nav::isRoute('berita') }}">Berita</a>
          <a href="{{ route('galeri') }}" class="nav-item nav-link  {{ Nav::isRoute('galeri') }}">Galeri</a>
          <a href="{{ route('struktur-kepengurusan') }}" class="nav-item nav-link  {{ Nav::isRoute('struktur-kepengurusan') }}">Struktur Mahdrasah</a>
        </div>
        @if (Route::has('login'))
        <div class="top-right links">
          @auth
          <a class="btn btn-primary px-4" href="{{ route('home') }}">Home</a>
          @else
          <a class="btn btn-primary px-4" href="{{ route('register') }}">Daftar Sekarang</a>
       
          @endauth
        </div>
        @endif
      </div>
    </nav>
  </div>
  <!-- Navbar End -->
  <!-- Main Start -->
  @yield('main-content')
  <!-- Footer Start -->
  <div class="container-fluid bg-secondary text-white mt-0 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
      <div class="col-lg-3 col-md-6 mb-5">
        <a href="{{ route('index') }}" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
          style="font-size: 32px; line-height: 35px">
          <!-- <i class="flaticon-043-teddy-bear"></i> -->
          <img src="{{ asset('img/logo.png') }}" alt="" width="50" height="50">
          <span class="text-white">MTs. Al-Musthofa</span>
        </a>
        <p style="text-align:justify;">
         Mahdrasah Tsanawiyah (MTs) Al-Musthofa Canggu adalah ..
        </p>
        <div class="d-flex justify-content-start mt-4">
         <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px"
            href="https://www.youtube.com/@almusthofamojokerto"><i class="fab fa-youtube"></i></a>
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px"
            href="https://www.instagram.com/mts.almusthofa?igsh=MWk0NTZncTcyZmUwMA==/"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5" style="margin-left: 20px;">
        <h3 class="text-primary mb-4">Kontak kami</h3>
        <div class="d-flex">
          <h4 class="fa fa-map-marker-alt text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Alamat</h5>
            <p>Jl. Raya Canggu No.303-A, Sono Sari, Canggu, Kec. Jetis, Kabupaten Mojokerto, Jawa Timur 61352</p>
          </div>
        </div>
        <div class="d-flex">
          <h4 class="fa fa-envelope text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Email</h5>
            <p>mts.almusthofacanggu@gmail.com</p>
          </div>
        </div>
        <div class="d-flex">
          <h4 class="fa fa-phone-alt text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Telepon</h5>
            <p>(0321)3673474</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 mb-5" style="margin-left: 20px;">
        <h3 class="text-primary mb-4">Navigasi</h3>
        <div class="d-flex flex-column justify-content-start">
          <a class="text-white mb-2" href="{{ route('index') }}"><i class="fa fa-angle-right mr-2"></i>Beranda</a>
          <a class="text-white mb-2" href="{{ route('tentang kami') }}"><i class="fa fa-angle-right mr-2"></i>Tentang
            kami</a>
          <a class="text-white mb-2" href="{{ route('publikasi') }}"><i class="fa fa-angle-right mr-2"></i>Publikasi</a>
          <a class="text-white mb-2" href="{{ route('berita') }}"><i class="fa fa-angle-right mr-2"></i>Berita</a>
          <a class="text-white mb-2" href="{{ route('galeri') }}"><i class="fa fa-angle-right mr-2"></i>Galeri</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5" style="margin-left: 10px;">
        <h3 class="text-primary mb-4">Berlangganan</h3>
        <form action="">
          <div class="form-group">
            <input type="text" class="form-control border-0 py-4" placeholder="Nama Lengkap" required="required" />
          </div>
          <div class="form-group">
            <input type="email" class="form-control border-0 py-4" placeholder="Email" required="required" />
          </div>
          <div>
            <button class="btn btn-primary btn-block border-0 py-3" type="submit">
              <b>Kirim</b>
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;">
      <p class="m-0 text-center text-white">
        &copy;
        <a class="text-primary font-weight-bold" href="#">MTs. Al-Musthofa</a>.
        All Rights Reserved. 2024
      </p>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('template/lib/easing/easing.min.js')}}"></script>
  <!-- <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->
  <script src="{{asset('template/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('template/lib/lightbox/js/lightbox.min.js')}}"></script>

  <!-- Contact Javascript File -->
  <script src="{{ asset('template/mail/jqBootstrapValidation.min.js')}}"></script>
  <script src="{{ asset('template/mail/contact.js')}}"></script>

  <!-- Template Javascript -->
  <script src="{{ asset('template/js/main.js')}}"></script>
</body>

</html>
