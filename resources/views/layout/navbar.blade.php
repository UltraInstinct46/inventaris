<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>INVENTARIS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body{
            background-image: url('images/splashscreen.png');
            background-size: 100%;
            opacity: 0.9;
        }
        </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand">
                    inventaris
                </a>
                      <a class="navbar-brand" href="{{ url('/jenis') }}">
                        Jenis
                    </a>
                    <a class="navbar-brand" href="{{ url('/ruangs') }}">
                        Ruang
                    </a>
                    <a class="navbar-brand" href="{{ url('/pegawais') }}">
                        Pegawai
                    </a>
                    <a class="navbar-brand" href="{{ url('/detailpinjams') }}">
                        Detail Pinjam
                    </a>
                    <a class="navbar-brand" href="{{ url('/peminjamans') }}">
                        Peminjaman
                    </a>
                    <a class="navbar-brand" href="{{ url('/pegawais') }}">
                        Pegawai
                    </a>
                    <a class="navbar-brand" href="{{ url('/inventaris') }}">
                        Inventaris
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
