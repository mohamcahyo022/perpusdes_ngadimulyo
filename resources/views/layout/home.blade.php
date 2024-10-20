@extends('layout.main')
@section('title', 'Home | Perpustakaan Desa')
@section('content')
        <!-- Banner Area -->
        <div class="banner-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <span data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">FOR A BETTER FUTURE</span>
                            <h1 data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                Selamat Datang di Perpustakaan Desa Cahaya Dunia!
                            </h1>
                            <p data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                Jangan lewatkan kesempatan untuk menjelajahi karya-karya menarik yang
                                banyak dibaca oleh masyarakat.
                            </p>
                            <div class="banner-form-area" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                <form class="banner-form" data-toggle="validator" method="POST">
                                    <input type="email" class="form-control" placeholder="Cari Buku Anda" name="EMAIL" required autocomplete="off">
                                    <button class="default-btn" type="submit">
                                        <i class="ri-search-line"></i> Cari Buku
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-img" data-speed="0.05" data-revert="true">
                            <img src="assets/images/home-one/man.png" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true" alt="Man" />
                            <div class="bg-shape">
                                <img src="assets/images/home-one/home-one-shape.png" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true" alt="Shape" />
                            </div>
                            <div class="top-content" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                <i class="flaticon-student"></i>
                                <div class="content">
                                    <h3>250K</h3>
                                    <p>Assisted student</p>
                                </div>
                            </div>
                            <div class="right-content" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                <i class="flaticon-checked"></i>
                                <div class="content">
                                    <h3>Congratulations</h3>
                                    <p>Your admission completed</p>
                                </div>
                            </div>

                            <div class="left-content" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                <div class="content">
                                    <img src="assets/images/home-one/user-img.jpg" alt="User" />
                                    <h3>User experience class</h3>
                                    <p>Today at 12.00 PM</p>
                                </div>
                                <a href="/register" class="join-btn">Join now</a>
                            </div>
                            <div class="banner-img-shape" >
                                <div class="shape1" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                    <img src="assets/images/home-one/shape3.png" alt="Shape" />
                                </div>
                                <div class="shape2" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                    <img src="assets/images/home-one/shape2.png" alt="Shape" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape">
                <div class="banner-shape1">
                    <img src="assets/images/home-one/shape1.png" alt="Shape" />
                </div>
            </div>
        </div>
        <!-- Banner Area End -->

        <!-- Counter Area -->
        <div class="counter-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="counter-content">
                            <i class="flaticon-online-course"></i>
                            <h3><span class="odometer" data-count="15000">00000</span>+</h3>
                            <p>Courses & videos</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="counter-content">
                            <i class="flaticon-student"></i>
                            <h3><span class="odometer" data-count="145000">000000</span>+</h3>
                            <p>Students enrolled</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="counter-content">
                            <i class="flaticon-online-course-1"></i>
                            <h3><span class="odometer" data-count="10000">00000</span>+</h3>
                            <p>Courses instructors</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="counter-content">
                            <i class="flaticon-customer-satisfaction"></i>
                            <h3><span class="odometer" data-count="100">000</span>%</h3>
                            <p>Satisfaction rate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End -->

        <!-- Featured Area -->
        <div class="featured-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center mb-45">
                    <div class="col-lg-8 col-md-9">
                        <div class="section-title mt-rs-20">
                            <h2>Eksplor Kategori Buku Paling Favorit</h2>
                            <p>Lihat kategori buku yang paling banyak dibaca dan disukai oleh orang lain </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 text-end">
                        <a href="courses.html" class="default-btn">Explore more</a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-web-development"></i>
                                <h3>Development</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-design"></i>
                                <h3>Web designing</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-wellness"></i>
                                <h3>Lifestyle</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-heart-beat"></i>
                                <h3>Health & fitness</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-corporate"></i>
                                <h3>Gov. exams</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-camera"></i>
                                <h3>Photography</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-user"></i>
                                <h3>Accounting</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-4">
                        <div class="featured-card">
                            <a href="courses.html">
                                <i class="flaticon-folder"></i>
                                <h3>Data science</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Area End -->

        <!-- Courses Area -->
        <div class="courses-area pb-70">
            <div class="container">
                <div class="section-title text-center mb-45">
                    <h2>Temukan Buku Paling Populer Saat Ini</h2>
                    <p>
                        Temukan Buku Yang Sedang Populer Saat ini dan bacalah sekarang
                    </p>
                </div>
                <div class="row">

                    @foreach ($bukus as $buku)
                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <a href="{{ route('buku.digital.detail', $buku->id) }}">
                                <img src="{{ asset('storage/' . $buku->cover_buku) }}" alt="Courses"/>
                            </a>
                            <div class="content">
                                <a href="courses.html" class="tag-btn">{{ $buku->jenis_buku }}</a>
                                <h3><a href="{{ route('buku.digital.detail', $buku->id) }}">{{ $buku->judul_buku }}</a></h3>
                                <ul class="course-list">
                                    <li><i class="ri-group-line"></i> 4 Orang</li>
                                    <li><i class="ri-star-fill"></i> 67 favorit</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Courses Area End -->
@endsection
