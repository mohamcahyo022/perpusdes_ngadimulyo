@extends('layout.master-dashboard')
@section('content')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                            <span class="ml-2 d-none d-lg-inline text-white small">Maman Ketoprak</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal"
                                data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            {{-- Topbar --}}

            <!-- Container Fluid-->
            <div class="container-fluid" id="container-wrapper">
                <div class="d-sm-flex align-items-center justify-content-between">
                    {{-- <h1 class="h3 mb-0 text-gray-800">DataTables</h1> --}}
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item">Tambah</li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Buku Digital</li>
                    </ol>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <!-- Form Basic -->
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Buku Digital</h6>
                            </div>
                            <div class="card-body">
                                <form action="/tambah-buku-digital-store" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="judul">Judul Buku</label>
                                        <input type="text" class="form-control" name="judul_buku" placeholder="Masukkan Judul Buku">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_buku">Jenis Buku</label>
                                        <select class="form-control" id="jenis_buku" name="jenis_buku" required>
                                                <option selected disabled>Pilih Jenis Buku</option>
                                            @foreach ($bukus as $jenis)
                                                <option value="{{ $jenis->jenis_buku }}">{{ $jenis->jenis_buku }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="penulis_buku">Penulis</label>
                                        <input type="text" class="form-control" name="penulis_buku" placeholder="Masukkan Penulis Buku">
                                    </div>
                                    <div class="form-group">
                                        <label for="penerbit">Penerbit</label>
                                        <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Penerbit Buku">
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun_terbit">Tahun Terbit</label>
                                        <input type="text" class="form-control" name="tahun_terbit" placeholder="Masukkan Tahun Terbit">
                                    </div>
                                    <div class="form-group">
                                        <label for="sinopsis_buku">Sinopsis Buku</label>
                                        <textarea class="form-control" name="sinopsis_buku" rows="5" placeholder="Masukkan Sinopsis Buku"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="file_buku">Masukan File Buku</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file_buku" name="file_buku" accept="application/pdf">
                                            <label class="custom-file-label" for="file_buku">Pilih file buku</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cover_buku">Masukan Cover Buku</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="cover_buku" name="cover_buku" accept="image/*">
                                            <label class="custom-file-label" for="cover_buku">Pilih cover buku</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!--Row-->
    @endsection
