@extends('admin-layout.app')
@section('content')
  <div class="main-content">
    <div class="col-md-12 col-lg-12 col-xl-12">
        @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ Session('message') }}
            </div>
        @endif
        <div class="card">
            <div class="modal-body">
                <form action="{{route('update.menu', $menu->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis</label>
                        <select class="form-control" name="idJenis">
                            @foreach ($jenis as $j)
                                <option value="{{ $j->id }}">{{ $j->jenisMenu }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                      <div id="inputFormRow">
                          <label>Nama Menu</label>
                          <div class="input-group">
                              <input type="text" class="form-control m-input @error('namaMenu') is-invalid @enderror" id="namaMenu" autocomplete="off" name="namaMenu" value="{{$menu->namaMenu}}">
                              @error('namaMenu') <small>{{ $message }}</small> @enderror
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div id="inputFormRow">
                            <label>Harga</label>
                            <div class="input-group">
                                <input type="text" class="form-control m-input @error('harga') is-invalid @enderror" id="harga" autocomplete="off" name="harga" value="{{$menu->harga}}">
                                @error('harga') <small>{{ $message }}</small> @enderror
                            </div>
                            </div>
                    </div>
                  <button type="submit" class="btn btn-primary m-t-15 waves-effect" style="float:right">Submit</button>
                </form>
              </div>
          </div>
    </div>
</div>
@endsection
