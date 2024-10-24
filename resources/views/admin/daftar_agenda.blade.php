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
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
                            </div>
                            <div class="table-responsive p-3">
                                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center">Judul Agenda</th>
                                            <th class="text-center">Foto Agenda</th>
                                            <th class="text-center">Isi Agenda</th>
                                            <th class="text-center">Waktu Dibuat</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($agendas as $agenda)
                                            <tr>
                                                <td class="text-center">{{ $agenda->judul_agenda }}</td>
                                                <td class="text-center">
                                                    <img src="{{ asset('storage/' . $agenda->foto_agenda) }}"
                                                        alt="Foto Agenda" style="width: 100px; height: auto;">
                                                </td>
                                                <td class="text-center">
                                                    {!! Str::limit($agenda->isi_agenda, 20) !!}
                                                    @if (strlen($agenda->isi_agenda) > 20)
                                                        <!-- Tombol untuk memicu modal -->
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#pesanModal{{ $agenda->id }}"><span
                                                                class="badge badge-primary">Lihat Detail</span></a>
                                                    @endif
                                                </td>
                                                <td class="text-center">{{ $agenda->created_at }}</td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm text-white" style="cursor: pointer;"
                                                        data-toggle="modal"
                                                        data-target="#editModal{{ $agenda->id }}">Edit</a>
                                                    <form id="deleteForm{{ $agenda->id }}"
                                                        action="{{ route('agenda.hapus', $agenda->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            onclick="confirmDelete({{ $agenda->id }})">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>

                                            <!-- Modal Detail -->
                                            <div class="modal fade" id="pesanModal{{ $agenda->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Detail
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {!! $agenda->isi_agenda !!} <!-- Tampilkan isi agenda disini -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Modal untuk Edit -->
                                            <div class="modal fade" id="editModal{{ $agenda->id }}" tabindex="-1"
                                                aria-labelledby="editModalLabel{{ $agenda->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="editModalLabel{{ $agenda->id }}">
                                                                Edit Data Agenda</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('agenda.update', $agenda->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group">
                                                                    <label for="judul_buku">Judul Agenda</label>
                                                                    <input type="text" class="form-control"
                                                                        id="judul_buku" name="judul_agenda"
                                                                        value="{{ $agenda->judul_agenda }}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cover_buku">Foto Agenda</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input"
                                                                            id="cover_buku" name="foto_agenda"
                                                                            aria-describedby="inputGroupFileAddon01">
                                                                        <label class="custom-file-label"
                                                                            for="cover_buku">Choose file</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="isi_agenda">Isi Agenda</label>
                                                                    <input id="isi_agenda" type="hidden" name="isi_agenda" value="{{ $agenda->isi_agenda }}" required>
                                                                    <trix-editor input="isi_agenda" class="form-control"></trix-editor>
                                                                </div>
                                                                
                                                                <button type="submit" class="btn btn-primary">Simpan
                                                                    Perubahan</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <p>Tidak Ada Data</p>
                                        @endforelse
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
