<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!-- Plugins CSS -->
        <link rel="stylesheet" href="assets/css/plugins.css">
        <!-- Icon Plugins CSS -->
        <link rel="stylesheet" href="assets/css/iconplugins.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="assets/css/theme-dark.css">

        <!-- Title -->
        <title>Login - Perpustakaan Desa</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
    </head>
    <body>

        <!-- User Area -->
        <div class="user-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="user-img">
                            <img src="assets/images/faq-img.jpg" alt="faq" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="user-all-form">
                            <div class="contact-form">
                                <h3 class="user-title"> Sign in</h3>
                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control" required data-error="Username Or Email Address*" placeholder="Username Or Email Address*">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" type="password" name="Password" placeholder="Password*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 form-condition">
                                            <div class="agree-label">
                                                <input type="checkbox" id="chb1">
                                                <label for="chb1">
                                                    Remember Me <a class="forget" href="forgot-password.html">Forgot Password?</a>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <a href="index.html" type="submit" class="default-btn btn-danger text-decoration-none">
                                                Kembali
                                            </a>
                                            <button type="submit" class="default-btn">
                                                Login
                                            </button>
                                        </div>
                                        <div class="mt-4">
                                            <span>Jika anda belum memiliki akun <a href="signup.html">Daftar</a></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Area End -->

        <!-- Jquery Min JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Plugins JS -->
        <script src="assets/js/plugins.js"></script>
        <!-- Custom  JS -->
        <script src="assets/js/custom.js"></script>
    </body>
</html>
