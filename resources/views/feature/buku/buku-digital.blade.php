@extends('layout.main')
@section('title', 'Buku Digital | Perpustakaan Desa')
@section('content')
<!-- Inner Banner -->
<div class="inner-banner inner-banner-bg10">
    <div class="container">
        <div class="inner-title text-center">
            <h3>All Courses</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Courses</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Courses Area -->
<div class="courses-area pt-100 pb-70">
    <div class="container">
        <div class="product-topper mb-45">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6">
                    <div class="product-title">
                        <h3>We found  <span> 09 </span>courses available for you</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-list">
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Urutkan Berdasarkan</option>
                            <option value="1">Paling Banyak Dibaca</option>
                            <option value="2">Baru Ditambahkan</option>
                        </select>
                        <i class="ri-arrow-down-s-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($bukus as $buku)
            <div class="col-lg-4 col-md-6">
                <div class="courses-item">
                    <a href="courses-details.html">
                        <img src="{{ asset('storage/' . $buku->cover_buku) }}" alt="Courses"/>
                    </a>
                    <div class="content">
                        <a href="courses.html" class="tag-btn">{{ $buku->jenis_buku }}</a>
                        <h3><a href="courses-details.html">{{ $buku->judul_buku }}</a></h3>
                        <ul class="course-list">
                            <li><i class="ri-group-line"></i> 4 Orang</li>
                            <li><i class="ri-star-fill"></i> 67 favorit</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-lg-12 col-md-12 text-center">
                <div class="pagination-area">
                    <a href="courses.html" class="prev page-numbers">
                        <i class="flaticon-left-arrow"></i>
                    </a>

                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="courses.html" class="page-numbers">2</a>
                    <a href="courses.html" class="page-numbers">3</a>

                    <a href="courses.html" class="next page-numbers">
                        <i class="flaticon-chevron"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses Area End -->
@endsection
