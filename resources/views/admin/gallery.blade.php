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
                                <h4>Data Gambar</h4>
                            </div>
                            <div class="card-body">
                                <!--button tambah data-->
                                <div class="card-body text-right">
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#tambahGambar">Tambah Gambar</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped" id="myTable">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Gambar</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($image as $img)
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center"><img id="image"
                                                            class="profile-user-img img-responsive"
                                                            style="height: auto; width: 100px; display: block; margin: auto;"
                                                            src="{{ url('img/gallery/' . $img->image) }}" alt=""></td>
                                                    <td class="text-center">
                                                        <form action="{{ route('delete.gallery', $img->id) }}"
                                                            method="post">
                                                            @csrf
                                                            <button class="btn btn-outline-danger btn-sm fa fa-trash"
                                                                type="submit"></button>
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
        </section>
    </div>

    <!-- Modal Tambah data -->
    <div class="modal fade" id="tambahGambar" tabindex="-1" role="dialog" aria-labelledby="PortofolioModalTabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Tambah Gambar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store.gallery') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <input type="hidden" name="_token" value=""> --}}
                        {{-- <input type="hidden" name="idPortofolio" value="2"> --}}
                        <div class="form-group">
                            <label for="gambar">Image</label>
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
    @endsection
