@extends('layout.sidebar')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>INVENTARIS</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>
@endsection
