<!Doctype HTML>
<html lang="zxx">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
        <!-- Icon Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/iconplugins.css') }}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">
        <!-- Animate CSS (external) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>



        <!-- Title -->
        <title>@yield('title')</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    </head>

    <body>
        {{-- Header Layout --}}
        @include('layout.header')

        @yield('content')

        {{-- Footer Layout --}}
        @include('layout.footer')

        <!-- Jquery Min JS -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <!-- Plugins JS -->
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <!-- Custom  JS -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @if(session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                showConfirmButton: true,
                confirmButtonText: 'OK',
                position: 'center',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            });
        </script>
        @endif

        @if ($errors->any())
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '{{ $errors->first() }}',
                });
            </script>
        @endif
    </body>
