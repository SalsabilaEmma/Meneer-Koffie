@extends('user.app')
@section('content')
<main id="main">
    <section class="inner-page">
    <div class="container">
        <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Reservation</h2>
            <p>Book a Table</p>
          </div>

          <form action="{{route('reserv.store')}}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-lg-4 col-md-6 form-group"><p>Nama :</p>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Nama Anda">
                @error('name') <small>{{ $message }}</small> @enderror
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0"><p>Tanggal :</p>
                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" required id="tanggal" placeholder="Date" data-rule="minlen:4" data-msg="Pilih Tanggal Pesan">
                @error('tanggal') <small>{{ $message }}</small> @enderror
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0"><p>Waktu/Jam :</p>
                <input type="time" class="form-control @error('waktu') is-invalid @enderror" required  name="waktu" id="waktu" placeholder="Time" data-rule="minlen:4" data-msg="Pilih Jam Pesan">
                @error('waktu') <small>{{ $message }}</small> @enderror
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3"><p>Tempat Duduk :</p>
                <input type="number" class="form-control @error('jmlkursi') is-invalid @enderror" required  name="jmlkursi" id="jmlkursi" placeholder="Jumlah Pesan Tempat Duduk" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                @error('jmlkursi') <small>{{ $message }}</small> @enderror
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3"><p>E-mail :</p>
                <input type="email" class="form-control @error('email') is-invalid @enderror" required  name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Please enter a valid email">
                @error('email') <small>{{ $message }}</small> @enderror
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3"><p>No. Whatsapp :</p>
                <input type="text" class="form-control @error('waz') is-invalid @enderror" required  name="wa" id="wa" placeholder="No Whatsapp" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                @error('wa') <small>{{ $message }}</small> @enderror
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group mt-3"><p>Catatan :</p>
              <textarea class="form-control" name="note" rows="5" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your booking request was sent. Thank you!
                </div>
            </div>
            <div class="text-center"><button type="submit">Kirim Reservasi</button></div>
          </form>

        </div>
      </section><!-- End Book A Table Section -->

    </div>
    </section>
  </main><!-- End #main -->
@endsection
