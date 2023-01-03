@extends('user.app')
@section('content')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Meneer's Koffie</span></h1>
          <h2>Delivering great food for more than 18 years!</h2>

          <div class="btns">
            <a href="{{route('menu')}}" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="{{route('reservasi')}}" class="btn-book animated fadeInUp scrollto">Reservation by Website</a>
            <a href="https://api.whatsapp.com/send?phone=6283804872600&text=Halo, Saya Mau Reservasi di Meneer's Koffie.
                    %0ABerikut Detail Pesanannya.
                    %0ANama :
                    %0ATanggal :
                    %0AWaktu/Jam :
                    %0AJumlah Tempat Duduk untuk :     Orang
                    %0AEmail :
                    %0AWhatsapp :
                    %0ACatatan :
                    %0A
                    %0ATerima Kasih🙏🏼" class="btn-book animated fadeInUp scrollto">
                    Reservation by Whatsapp</a>
          </div>
        </div>
        {{-- <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
        </div> --}}

      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="img/logo.jpeg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>About Meneer's Koffie</h3>
            <p class="fst-italic">
                Menjadi destinasi kuliner bagi keluarga maupun kawula muda adalah keinginan kami. Meneer's Koffie yang terletak di JL. Raya PKP no.38 kelapa 2 wetan ciracas Jakarta Timur merupakan tempat yang sangat strategis
            </p>
            <p>
                Dengan nuansa yang sangat nyaman baik di lantai Satu maupun lantai Dua, menjadikan meneer's Koffie salah Satu favorite bagi seluruh kalangan untuk bersantai Dan menikmati sajian kami.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Restaurant</p>
        </div>

        <div class="row">

          <div class="col-lg-3">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Special Menu</h4>
            </div>
          </div>

          <div class="col-lg-3 mt-3 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Welcome for Reservation</h4>
            </div>
          </div>

          <div class="col-lg-3 mt-3 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>Comfort Place</h4>
            </div>
          </div>

          <div class="col-lg-3 mt-3 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>04</span>
              <h4>Exclusive Service</h4>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p><br>


        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

            {{-- drink --}}
            @foreach ($menu as $m )
          <div class="col-lg-6 menu-item">
            <div class="menu-content">
              <a>{{$m->namaMenu}}</a><span>{{$m->harga}}</span>
            </div>
            <div class="menu-ingredients">{{$m->jenis->jenisMenu ?? NULL}}</div>
          </div>
          @endforeach

        </div>

        <div class="section-title text-center"><br><br>
            <a href="{{route('menu')}}"><h2>View All</h2></a>
        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">
            @foreach ($image as $img)
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{url('img/gallery/'.$img->image)}}" class="gallery-lightbox" data-gall="gallery-item">
                    <img src="{{url('img/gallery/'.$img->image)}}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            @endforeach
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>
{{--
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.413806329914!2d106.88360841413878!3d-6.340416263798066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ece055176bb1%3A0xee648064f7bcf9a1!2sJl.%20Raya%20Pkp%20No.38%2C%20RT.2%2FRW.8%2C%20Klp.%20Dua%20Wetan%2C%20Kec.%20Ciracas%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013730!5e0!3m2!1sid!2sid!4v1640406686381!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
      </div> --}}

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location :</h4>
                    <p>JL. Raya PKP no.38 Kelapa 2 Weta Ciracas Jakarta Timur<br></p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours :</h4>
                <p>
                  Monday-Saturday :<br>
                  11:00 AM - 2300 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email :</h4>
                <p>meneerkofie@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call :</h4>
                <p>+62 822-8900-0073</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.413806329914!2d106.88360841413878!3d-6.340416263798066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ece055176bb1%3A0xee648064f7bcf9a1!2sJl.%20Raya%20Pkp%20No.38%2C%20RT.2%2FRW.8%2C%20Klp.%20Dua%20Wetan%2C%20Kec.%20Ciracas%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013730!5e0!3m2!1sid!2sid!4v1640406686381!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
              </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

