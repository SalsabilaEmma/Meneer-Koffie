@extends('admin-layout.app')
@section('content')
    <div class="main-content">
        <div class="col-md-12 col-lg-12 col-xl-12">
            @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ Session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#jenis" role="tab"
                                aria-selected="true">Jenis Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#menu" role="tab"
                                aria-selected="false">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#booklet" role="tab"
                                aria-selected="false">Booklet</a>
                        </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                        {{-- JENIS --}}
                        <div class="tab-pane fade show active" id="jenis" role="tabpanel" aria-labelledby="home-tab2">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Jenis Menu</h4>
                                </div>
                                <div class="card-body">
                                    <div class="text-right">
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#paket"> Tambah Data</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Jenis</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach ($jenis as $no => $j)
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $j->jenisMenu }}</td>
                                                        <td>
                                                            <form action="{{ route('delete.jenis', $j->id) }}"
                                                                method="POST">
                                                                {{--  --}}
                                                                @csrf
                                                                <button class="btn btn-outline-danger btn-sm fa fa-trash"
                                                                    type="submit"> </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- MENU --}}
                        <div class="tab-pane fade" id="menu" role="tabpanel" aria-labelledby="profile-tab2">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Menu</h4>
                                </div>
                                <div class="card-body">
                                    <div class="text-right">
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#isi"> Tambah Data</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Kategori</th>
                                                    <th>Jenis</th>
                                                    <th>Nama Menu</th>
                                                    <th>Harga</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach ($menu as $no => $m)
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            @if ($m->kategori == 'Makanan')
                                                                Makanan
                                                            @else
                                                                Minuman
                                                            @endif
                                                        </td>
                                                        {{-- <td>{{$m->kategori ?? NULL}}</td> --}}
                                                        <td>{{ $m->jenis->jenisMenu ?? null }}</td>
                                                        <td>{{ $m->namaMenu }}</td>
                                                        <td>{{ $m->harga }}</td>
                                                        <td>
                                                            <a href="{{ route('edit.menu', $m->id) }}" type="button"
                                                                class="btn btn-outline-warning btn-sm fa fa-pen"></a>
                                                            <form action="{{ route('delete.menu', $m->id) }}" method="post">
                                                                @csrf
                                                                <button class="btn btn-outline-danger btn-sm fa fa-trash"
                                                                    type="submit"></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="card-body">
                                            <div class="pull-right">
                                                {{-- {{ $menu->links('vendor.pagination.bootstrap-4') }} --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- BOOKLET --}}
                        <div class="tab-pane fade" id="booklet" role="tabpanel" aria-labelledby="home-tab2">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Booklet</h4>
                                </div>
                                <div class="card-body">
                                    <div class="text-right">
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#bookletAdd"> Tambah Data</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>File Booklet</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach ($imageBooklet as $no => $booklet)
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>{{ $loop->iteration }}</td>
                                                        {{-- <td>{{$booklet->image}}</td> --}}
                                                        <td class="text-center"><img id="image"
                                                                class="profile-user-img img-responsive"
                                                                style="height: auto; width: 100px; display: block; margin: auto;"
                                                                src="{{ url('img/booklet/' . $booklet->image) }}" alt="">
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('delete.booklet', $booklet->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <button class="btn btn-outline-danger btn-sm fa fa-trash"
                                                                    type="submit"> </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah jenis -->
    <div class="modal fade" id="paket" tabindex="-1" role="dialog" aria-labelledby="formModalJenis" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalJenis">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store.jenis') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Jenis</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control @error('jenisMenu') is-invalid @enderror"
                                    id="jenisMenu" placeholder="Masukkan Jenis Menu" name="jenisMenu" required>
                                @error('jenisMenu')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah menu-->
    <div class="modal fade" id="isi" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store.menu') }}" method="POST">
                        {{ csrf_field() }}
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
                            <label>Nama Menu</label>
                            <div id="inputFormRow">
                                <div class="input-group">
                                    <input type="text" class="form-control m-input @error('namaMenu') is-invalid @enderror"
                                        id="namaMenu" autocomplete="off" name="namaMenu[]" placeholder="Masukkan menu"
                                        required>
                                    @error('namaMenu')
                                        <small>{{ $message }}</small>
                                    @enderror
                                    <input type="text" class="form-control m-input @error('harga') is-invalid @enderror"
                                        id="harga" autocomplete="off" name="harga[]" placeholder="Masukkan Harga" required>
                                    @error('harga')
                                        <small>{{ $message }}</small>
                                    @enderror
                                    <div class="input-group-append">
                                        <button id="removeRow" type=""
                                            class="btn btn-outline-danger btn-sm fa fa-trash"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="newRow"></div>
                        <button id="addRow" type="button" class="btn btn-success m-t-15 waves-effect">+ Tambah
                            Baris</button>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect"
                            style="float:right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah booklet -->
    <div class="modal fade" id="bookletAdd" tabindex="-1" role="dialog" aria-labelledby="formModalJenis"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalJenis">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store.booklet') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Image Booklet</label>
                            <small>*max ukuran foto 2MB<br></small>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                accept="img/*" id="file-input" onchange="imageExtensionValidate(this)" required>
                            @error('image')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        // add row
        $("#addRow").click(function() {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group">';
            html +=
                '<input type="text" name="namaMenu[]" class="form-control m-input" placeholder="Masukkan Menu" autocomplete="off">';
            html +=
                '<input type="text" name="harga[]" class="form-control m-input" placeholder="Masukkan Harga" autocomplete="off">';
            html += '<div class="input-group-append">';
            html +=
                '<button id="removeRow" type="button" class="btn btn-outline-danger btn-sm fa fa-trash"></button>';
            html += '</div>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
        });
    </script>
@endsection
