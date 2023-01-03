@extends('user.app')
@section('content')
    <main id="main">
        <section class="inner-page">
            <div class="container">
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
                                        <a href="{{ url('img/gallery/' . $img->image) }}" class="gallery-lightbox"
                                            data-gall="gallery-item">
                                            <img src="{{ url('img/gallery/' . $img->image) }}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </section><!-- End Gallery Section -->
            </div>
        </section>
    </main><!-- End #main -->
@endsection
