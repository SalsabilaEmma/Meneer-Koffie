@extends('admin-layout.app')
@section('content')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-6 col-sm-6 col-lg-6">
                <center><img src="../img/logomk.jpeg" width="380px" alt="Meneer Koffie Logo"></center>
            </div>
            <div class="col-6 col-sm-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                      <a href="{{route('index.reserv')}}">
                        <h4>Reservasi</h4>
                      </a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr class="text-center">
                          <th>No</th>
                          <th>Tanggal Pesan</th>
                          <th>Nama</th>
                          <th>Tempat Duduk</th>
                        </tr>
                        @foreach ($reserv as $r )
                        <tr class="text-center">
                          <td>{{$loop->iteration}}</td>
                          <td>{{$r->created_at->format('d-m-Y')}}</td>
                          <td>{{$r->name}}</td>
                          <td>{{$r->jmlkursi}}</td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </section>
      </div>

@endsection
