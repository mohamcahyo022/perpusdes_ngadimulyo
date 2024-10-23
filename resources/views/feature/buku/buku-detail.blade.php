@extends('layout.main')
@section('title', 'Detail | Perpustakaan Desa')
@section('content')
        <!-- Inner Banner -->
        <div class="inner-banner inner-banner-bg9">
            <div class="container">
                <div class="inner-title">
                    <h3>{{ $buku->judul_buku }}</h3>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>Detail Buku</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Courses Details Area -->
        <div class="courses-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="courses-details-contact">
                            <div class="tab courses-details-tab">
                                <ul class="tabs">
                                    <li>
                                        Overview
                                    </li>
                                </ul>
                                <div class="tab_content current active">
                                    <div class="tabs_item current">
                                        <div class="courses-details-tab-content">
                                            <div class="courses-details-into">
                                               <h3>Sinopsis Buku</h3>
                                               <p style="text-align: justify;">{{ $buku->sinopsis }}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="courses-details-sidebar">
                            <img src="{{ asset('storage/' . $buku->cover_buku) }}" alt="Cover Buku"/>
                            <div class="content">
                                <span>Detail Buku :</span>
                                <ul class="courses-details-list">
                                    <li>Penulis : {{ $buku->penulis }}</li>
                                    <li>Penerbit : {{ $buku->penerbit }}</li>
                                    <li>Tahun Terbit : {{ $buku->tahun_terbit }}</li>
                                    <li>Jenis Buku : {{ $buku->jenis_buku }}</li>
                                </ul>
                                <a href="#" class="default-btn" data-id="{{ $buku->id }}" onclick="bacaBuku({{ $buku->id }})">Baca Buku</a>

                                <!-- Modal untuk menampilkan PDF -->
                                <div id="pdf-modal" class="pdf-modal" style="display: none;"> <!-- Hide modal by default -->
                                    <div class="pdf-modal-content">
                                        <span class="pdf-close" onclick="closeModal()">&times;</span>
                                        <iframe id="pdf-frame" src="" width="100%" height="100%" style="border:none;"></iframe>
                                    </div>
                                </div>

                                <script>
                                function bacaBuku(id) {
                                    fetch(`/baca-buku/${id}`)
                                        .then(response => response.json())
                                        .then(data => {
                                            document.getElementById('pdf-frame').src = `${data.file_url}#toolbar=0&navpanes=0&scrollbar=0`;
                                            document.getElementById('pdf-modal').style.display = 'flex';
                                            document.body.classList.add('modal-open');
                                            setTimeout(() => {
                                                document.getElementById('pdf-modal').classList.add('show');
                                                document.querySelector('.pdf-modal-content').classList.add('show');
                                            }, 10);
                                        })
                                        .catch(error => {
                                            console.error('Error:', error);
                                        });
                                }

                                function closeModal() {
                                    document.getElementById('pdf-modal').classList.remove('show');
                                    document.querySelector('.pdf-modal-content').classList.remove('show');
                                    document.body.classList.remove('modal-open');
                                    setTimeout(() => {
                                        document.getElementById('pdf-modal').style.display = 'none';
                                    }, 300);
                                }
                                </script>

                                <ul class="social-link">
                                    <li class="social-title">Share this course:</li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com/" target="_blank">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Details Area End -->
@endsection
