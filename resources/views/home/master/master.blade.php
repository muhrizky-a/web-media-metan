<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - Media Tambang</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #ddd;
        }

    </style>

    <!-- Custom styles for this template-->
    <!-- <link href="{{ asset('img/logo_CJa_icon.ico') }}" rel="icon"> -->
    <link href="{{ asset('img/logo-metan-gold.png') }}" rel="icon">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet">
    @yield('style')

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
</head>

<body>
    <div class="container logo">
        <div class="row">
            <div class="col ps-0">
                <a href="{{ route('home') }}">
                    <div class="d-flex">
                        <img src="{{ asset('img/logo-metan-regular-full.png') }}" alt="Logo" height="96px">
                        {{-- <img src="{{ asset('img/logo-metan-tipografi.png') }}" alt="Media Tambang" height="96px"> --}}
                    </div>
                </a>
            </div>
            <div class="col">
                <!-- <div class="td-all-visible">
                    <a href="https://www.uvex-safety.co.id/id/kelompok-produk/uvex-u-chem-3500/"><img src="https://www.tambang.co.id/wp-content/uploads/2021/02/Banner_Jan-2020_Mobile_safe.png" alt=""></a>
                </div> -->
            </div>
        </div>
    </div>
    <main class="container-lg bg-white">

        <x-header />

        <div class="content">
            <div class="container-lg">
                @yield('content')
            </div>
        </div>
        @include("home.layout.footer")
    </main>



    <!-- <script src="{{ asset('js/bootstrap.bundle.js') }}"></script> -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
