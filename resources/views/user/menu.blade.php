@extends('user.app')
@section('content')
    <main id="main">
        <section class="inner-page">
            <div class="container">
                <!-- ======= Menu Section ======= -->
                <section id="menu" class="menu section-bg">
                    <div class="container" data-aos="fade-up">
                        <div class="section-title">
                            <h2>Menu</h2>
                            <p>Menu from Our Restaurant</p><br>
                            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                                <h2 class="text-center">Food</h2>
                                {{-- @foreach ($menu as $m) --}}
                                @foreach ($menu as $m)
                                    @if ($m->kategori == 'Makanan')
                                        <div class="col-lg-6 menu-item">
                                            <div class="menu-content">
                                                <a>{{ $m->namaMenu }}</a><span>{{ $m->harga }}</span>
                                            </div>
                                            <div class="menu-ingredients">{{ $m->jenis->jenisMenu ?? null }}</div>
                                        </div>
                                    @endif
                                @endforeach
                                {{-- @endforeach --}}
                            </div>
                            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                                <h2 class="text-center">Drink</h2>
                                @foreach ($menu as $m)
                                    @if ($m->kategori == 'Minuman')
                                    <div class="col-lg-6 menu-item">
                                        <div class="menu-content">
                                            <a>{{ $m->namaMenu }}</a><span>{{ $m->harga }}</span>
                                        </div>
                                        <div class="menu-ingredients">{{ $m->jenis->jenisMenu ?? null }}</div>
                                    </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                            <div class="row g-0">
                                @foreach ($imageBooklet as $booklet)
                                <div class="col-lg-3 col-md-4">
                                    <div class="gallery-item">
                                        <a href="{{ url('img/booklet/' . $booklet->image) }}" class="gallery-lightbox" data-gall="gallery-item">
                                            <img src="{{ url('img/booklet/' . $booklet->image) }}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section><!-- End Menu Section -->
    </main><!-- End #main -->
@endsection
