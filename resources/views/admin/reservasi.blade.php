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
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr class="text-center">
                          <th>No</th>
                          <th>Tanggal Pesan</th>
                          <th>Nama</th>
                          <th>Tanggal</th>
                          <th>Waktu/Jam</th>
                          <th>Tempat Duduk</th>
                          <th>Nomor Whatsapp</th>
                          <th>Action</th>
                        </tr>
                        @foreach ($reserv as $r )
                        <tr class="text-center">
                          <td>{{$loop->iteration}}</td>
                          <td>{{$r->created_at->format('d-m-Y')}}</td>
                          <td>{{$r->name}}</td>
                          <td>{{$r->tanggal}}</td>
                          <td>{{$r->waktu}}</td>
                          <td>{{$r->jmlkursi}}</td>
                          <td>{{$r->wa}}</td>
                          <td class="text-center">
                              {{-- ini button infone kan --}}
                            {{-- <button type="button" id="detail2" class="btn btn-outline-info btn-sm fa fa-info" data-attr="{{$r->id}}"
                                data-toggle="modal" data-target="#detail" data-id="{{$r->id}}"> --}}
                                <a href="{{route('indexDetail.reserv', $r->id)}}" id="detail" name="detail" class="btn btn-outline-info btn-sm fa fa-info"></a>
                            </button>
                        </td>
                          <td class="text-center">
                            {{ $reserv->links() }}</td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection
