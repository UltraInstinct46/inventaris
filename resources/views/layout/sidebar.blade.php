<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <style>
            body{
                background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(183,208,190,1) 0%, rgba(110,210,216,1) 29%, rgba(92,210,222,1) 36%, rgba(56,211,235,1) 50%, rgba(38,211,241,1) 57%, rgba(55,211,235,1) 70%, rgba(0,212,255,1) 100%);
            }
        </style>
  </head>
  <body>
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/logo.jpg);"></div>
	  				<h3>Catriona Henderson</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
              <a href="{{ url('/detailpinjams') }}"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Detail </a>
          </li>
          <li>
            <a href="{{ url('/jenis') }}"><span class="fa fa-gift mr-3"></span> Jenis</a>
          </li>
          <li>
            <a href="{{ url('/ruangs') }}"><span class="fa fa-trophy mr-3"></span> Ruang</a>
          </li>
          <li>
            <a href="{{ url('/peminjamans') }}"><span class="fa fa-cog mr-3"></span> Peminjaman</a>
          </li>
          <li>
            <a href="{{ url('/inventaris') }}"><span class="fa fa-support mr-3"></span> Inventaris</a>
          </li>
          <li>
            <a href="{{ url('/pegawais') }}"><span class="fa fa-support mr-3"></span> Pegawai</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <main class="py-4">
            @yield('content')
        </main>
      </div>
		</div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
