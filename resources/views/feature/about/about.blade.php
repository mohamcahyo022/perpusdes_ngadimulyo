@extends('layout.main')
@section('title', 'Tentang Perpustakaan | Perpustakaan Desa')
@section('content')
        <!-- Inner Banner -->
        <div class="inner-banner inner-banner-bg">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Tentang Perpustakaan</h3>
                    <h3>Cahaya Dunia</h3>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Tentang Perpustakaan</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Enrolled Area -->
        <div class="enrolled-area-two pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="enrolled-img-three mb-30 pr-20">
                            <img src="assets/images/enrolled/enrolled-img3.jpg" alt="Enrolled">
                            {{-- <div class="enrolled-img-content">
                                <i class="flaticon-discount"></i>
                                <div class="content">
                                    <h3>Get 40% off</h3>
                                    <p>Every course</p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="enrolled-content mb-30">
                            <div class="section-title">
                                {{-- <span>WHO WE ARE</span> --}}
                                <h2>Perpustakaan Desa Cahaya Dunia</h2>
                                <p>
                                    Perpustakaan Desa Cahaya Dunia merupakan pusat pembelajaran dan pengembangan masyarakat di Desa Ngadimulyo. Dibangun dengan tujuan untuk memberikan akses literasi dan informasi kepada seluruh warga, perpustakaan ini menjadi tempat bertumbuhnya pengetahuan dan kreativitas.
                                </p>
                            </div>
                            <div class="row">
                                <h4>Visi dan Misi</h4>
                                <div class="col-lg-6 col-6">
                                    <ul class="enrolled-list">
                                        <li><i class="flaticon-check"></i> Menjadi pusat literasi di Desa Ngadimulyo.</li>
                                        <li><i class="flaticon-check"></i> Menciptakan masyarakat yang cerdas dan kreatif.</li>
                                    </ul>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <ul class="enrolled-list">
                                        <li><i class="flaticon-check"></i> Meningkatkan minat baca</li>
                                        <li><i class="flaticon-check"></i> Menyediakan akses informasi </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <a href="courses.html" class="default-btn border-radius-50">Enrolled today</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Enrolled Area End -->

        <!-- Counter Area -->
        <div class="counter-area-three pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="counter-card box-shadow">
                            <i class="flaticon-online-course"></i>
                            <h3><span class="odometer" data-count="{{ $jumlahDigital }}">00000</span></h3>
                            <p>Buku Digital</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="counter-card box-shadow">
                            <i class="flaticon-online-course-1"></i>
                            <h3><span class="odometer" data-count="{{ $jumlahFisik }}">000000</span></h3>
                            <p>Buku Fisik</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="counter-card box-shadow">
                            <i class="flaticon-student"></i>
                            <h3><span class="odometer" data-count="{{$jumlahUser}}">00000</span></h3>
                            <p>User Yang Terdaftar</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="counter-card box-shadow">
                            <i class="flaticon-customer-satisfaction"></i>
                            <h3><span class="odometer" data-count="{{ $jumlahJenis }}">000</span></h3>
                            <p>Kategori Buku yang Tersedia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End -->

        <!-- Testimonials Area -->
        {{-- <div class="testimonials-area section-bg pt-100 pb-100">
            <div class="container">
                <div class="section-title text-center">
                    <span>TESTIMONIAL</span>
                    <h2>What people say about us</h2>
                </div>
                <div class="testimonials-slider-two owl-carousel owl-theme">
                    <div class="testimonials-card-two">
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                        <div class="content">
                            <img src="assets/images/testimonials/testimonials-img1.jpg" alt="testimonials" />
                            <h3>Nikolas brooten</h3>
                            <span>Student</span>
                        </div>
                        <div class="quote"> <i class="flaticon-quote"></i></div>
                    </div>
                    <div class="testimonials-card-two">
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                        <div class="content">
                            <img src="assets/images/testimonials/testimonials-img2.jpg" alt="testimonials" />
                            <h3>Terry ambady</h3>
                            <span>Content strategist</span>
                        </div>
                        <div class="quote"> <i class="flaticon-quote"></i></div>
                    </div>
                    <div class="testimonials-card-two">
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                        <div class="content">
                            <img src="assets/images/testimonials/testimonials-img3.jpg" alt="testimonials" />
                            <h3>Cory zamora</h3>
                            <span>Photographer</span>
                        </div>
                        <div class="quote"> <i class="flaticon-quote"></i></div>
                    </div>
                    <div class="testimonials-card-two">
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                        <div class="content">
                            <img src="assets/images/testimonials/testimonials-img3.jpg" alt="testimonials" />
                            <h3>Jonquil von</h3>
                            <span>Photographer</span>
                        </div>
                        <div class="quote"> <i class="flaticon-quote"></i></div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Testimonials Area End -->


        <!-- Instructors Area -->
        <div class="instructors-area pb-70">
            <div class="container">
                <div class="section-title text-center mb-45">
                    <h2>Susunan Pengurus Perpustakaan Cahaya Dunia</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="instructors-card">
                            <a href="instructors-details.html">
                                <img src="assets/images/instructors/instructors-img1.jpg" alt="Team Images">
                            </a>
                            <div class="content">
                                <ul class="instructors-social">
                                    <li class="share-btn"><i class="ri-add-line"></i></li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                </ul>
                                <h3><a href="#">Sally welch</a></h3>
                                <span>Ketua</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="instructors-card">
                            <a href="instructors-details.html">
                                <img src="assets/images/instructors/instructors-img2.jpg" alt="Team Images">
                            </a>
                            <div class="content">
                                <ul class="instructors-social">
                                    <li class="share-btn"><i class="ri-add-line"></i></li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class="ri-linkedin-box-line"></i>
                                        </a>
                                    </li>
                                </ul>
                                <h3><a href="#">Jesse joslin</a></h3>
                                <span>Sekertaris</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="instructors-card">
                            <a href="instructors-details.html">
                                <img src="assets/images/instructors/instructors-img3.jpg" alt="Team Images">
                            </a>
                            <div class="content">
                                <ul class="instructors-social">
                                    <li class="share-btn"><i class="ri-add-line"></i></li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class="ri-linkedin-box-line"></i>
                                        </a>
                                    </li>
                                </ul>
                                <h3><a href="instructors-details.html">Lance altman</a></h3>
                                <span>Photographer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="instructors-card">
                            <a href="instructors-details.html">
                                <img src="assets/images/instructors/instructors-img4.jpg" alt="Team Images">
                            </a>
                            <div class="content">
                                <ul class="instructors-social">
                                    <li class="share-btn"><i class="ri-add-line"></i></li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class="ri-linkedin-box-line"></i>
                                        </a>
                                    </li>
                                </ul>
                                <h3><a href="instructors-details.html">Jonquil von</a></h3>
                                <span>Art director</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Instructors Area End -->

@endsection
