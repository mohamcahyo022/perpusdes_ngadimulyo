@extends('layout.master-dashboard')
@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
            <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-1 small"
                                    placeholder="What do you want to look for?" aria-label="Search"
                                    aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> --}}

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
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">DataTables</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active" aria-current="page">DataTables</li>
                </ol>
            </div>

            <!-- Row -->
            <div class="row">
                <!-- DataTable with Hover -->
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
                        </div>
                        <div class="table-responsive p-3">
                            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">Judul Buku</th>
                                        <th class="text-center">Jenis Buku</th>
                                        <th class="text-center">Penulis</th>
                                        <th class="text-center">Penerbit</th>
                                        <th class="text-center">Tahun Terbit</th>
                                        <th class="text-center">Cover Buku</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($bukus as $buku)
                                    <tr>
                                        <td class="text-center">{{ $buku->judul_buku }}</td>
                                        <td class="text-center">{{ $buku->jenis_buku }}</td>
                                        <td class="text-center">{{ $buku->penulis }}</td>
                                        <td class="text-center">{{ $buku->penerbit }}</td>
                                        <td class="text-center">{{ $buku->tahun_terbit }}</td>
                                        <td class="text-center" >
                                            <img src="{{ asset('storage/' . $buku->cover_buku) }}" alt="Cover Buku" style="width: 100px; height: auto;">
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-warning btn-sm text-white" style="cursor: pointer;" data-toggle="modal" data-target="#editModal{{ $buku->id }}">Edit</a>
                                            <form action="{{ route('buku.hapus', $buku->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Modal untuk Edit -->
                                        <div class="modal fade" id="editModal{{ $buku->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $buku->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel{{ $buku->id }}">Edit Data Buku</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label for="judul_buku">Judul Buku</label>
                                                                <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="{{ $buku->judul_buku }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="jenis_buku">Jenis Buku</label>
                                                                <input type="text" class="form-control" id="jenis_buku" name="jenis_buku" value="{{ $buku->jenis_buku }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="penulis_buku">Penulis Buku</label>
                                                                <input type="text" class="form-control" id="penulis_buku" name="penulis_buku" value="{{ $buku->penulis }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="penerbit">Penerbit</label>
                                                                <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tahun_terbit">Tahun Terbit</label>
                                                                <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="file_buku">File Buku</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="file_buku" name="file_buku" aria-describedby="inputGroupFileAddon01">
                                                                    <label class="custom-file-label" for="file_buku">Choose file</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="cover_buku">Cover Buku</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="cover_buku" name="cover_buku" aria-describedby="inputGroupFileAddon01">
                                                                    <label class="custom-file-label" for="cover_buku">Choose file</label>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                        </form>
                                                    </div>
                                                </div>
    </div>
</div>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Logout -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to logout?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary"
                                data-dismiss="modal">Cancel</button>
                            <a href="/" class="btn btn-primary">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!---Container Fluid-->
    </div>
@endsection
