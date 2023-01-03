@extends('admin-layout.app')
@section('content')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Reservasi</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <ul class="list-group">
                                <li class="list-group-item">Tanggal Reservasi : {{$reserv->created_at->format('d-m-Y H:i')}}</li>
                                <li class="list-group-item">Nama Pemesan : {{$reserv->name}}</li>
                                <li class="list-group-item">Whatsapp : {{$reserv->wa}}</li>
                                <li class="list-group-item">Email : {{$reserv->email}}</li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <ul class="list-group">
                                <li class="list-group-item">Tanggal : {{$reserv->tanggal}}</li>
                                <li class="list-group-item">Waktu : {{$reserv->waktu}}</li>
                                <li class="list-group-item">Tempat Duduk : {{$reserv->jmlkursi}} Orang</li>
                                <li class="list-group-item">Catatan Tambahan : {{$reserv->note}}</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

@endsection
