        <!-- Start Navbar Area -->
        <div class="navbar-area ledu-area">
            <div class="mobile-responsive-nav">
                <div class="container">
                   <div class="mobile-responsive-menu">
                        <div class="logo">
                            <a href="/">
                                <img src="assets/images/logos/LAST.png" class="logo-one" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="desktop-nav nav-area">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="/">
                            <img src="assets/images/logos/LAST.png" class="logo-one" alt="Logo">
                        </a>
                        <div class="nav-widget-form">
                            <form class="search-form">
                                <input type="search" class="form-control" placeholder="Cari Buku...">
                                <button type="submit">
                                    <i class="ri-search-line"></i>
                                </button>
                            </form>
                        </div>

                        <div class="navbar-category">
                            <div class="dropdown category-list-dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButtoncategory" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='flaticon-list'></i>
                                    Kategori Buku
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtoncategory">
                                    <a href="courses-details.html" class="nav-link-item">
                                        <i class="flaticon-web-development"></i>
                                        Development
                                    </a>
                                    <a href="courses-details.html">
                                        <i class="flaticon-design"></i>
                                        Web designing
                                    </a>
                                    <a href="courses-details.html">
                                        <i class="flaticon-wellness"></i>
                                        Lifestyle
                                    </a>
                                    <a href="courses-details.html">
                                        <i class="flaticon-heart-beat"></i>
                                        Health & fitness
                                    </a>
                                    <a href="courses-details.html">
                                        <i class="flaticon-folder"></i>
                                        Data science
                                    </a>
                                    <a href="courses-details.html">
                                        <i class="flaticon-user"></i>
                                        Accounting
                                    </a>
                                    <a href="courses-details.html">
                                        <i class="flaticon-camera"></i>
                                        Photography
                                    </a>
                                    <a href="courses-details.html">
                                        <i class="flaticon-corporate"></i>
                                        Marketing
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                                        Home
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('/buku-digital') }}" class="nav-link {{ Request::is('buku-digital*') ? 'active' : '' }}" class="nav-link">
                                        Buku Digital
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('/buku-fisik') }}" class="nav-link {{ Request::is('buku-fisik*') ? 'active' : '' }}" class="nav-link">
                                        Buku Fisik
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('/about') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">
                                        Tentang Perpustakaan
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('/contact') }}" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">
                                        Kontak
                                    </a>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <div class="optional-item">
                                    <a href="signup.html" class="default-btn two">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="side-nav-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="circle-inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="side-nav-inner">
                            <div class="side-nav justify-content-center align-items-center">
                                <div class="side-item">
                                    <form class="search-form">
                                        <input type="search" class="form-control" placeholder="Search courses">
                                        <button type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="side-item">
                                    <a href="signup.html" class="default-btn two">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
