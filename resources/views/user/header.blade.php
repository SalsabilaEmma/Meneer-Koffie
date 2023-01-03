  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+62 822-8900-0073</span></i>
        {{-- <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i> --}}
      </div>

      {{-- <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div> --}}
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="/">Meneer's Koffie</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('index')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('menu')}}">Menu</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="{{route('gallery')}}">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown">
              <a href="#" class="book-a-table-btn scrollto d-none d-lg-flex">
                  Reservation
                  <i class="bi bi-chevron-down"></i>
                  <i></i><i></i><i></i>
              </a>
            <ul>
                <li><a href="{{route('reservasi')}}">Reservation by Website</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=6283804872600&text=Halo, Saya Mau Reservasi di Meneer's Koffie.
                    %0ABerikut Detail Pesanannya.
                    %0ANama :
                    %0ATanggal :
                    %0AWaktu/Jam :
                    %0AJumlah Tempat Duduk untuk :     Orang
                    %0AEmail :
                    %0AWhatsapp :
                    %0ACatatan :
                    %0A
                    %0ATerima Kasih🙏🏼">
                    Reservation by Whatsapp</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->
