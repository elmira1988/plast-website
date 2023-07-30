<!DOCTYPE html>
<html lang="en" class="overflow" style="">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="#">
    <meta name="description" content="#">
    <title>ПластСтер</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
</head>
<body class="loader">
<!-- preloader -->
<div class="preloader">
    <img src="{{ asset('images/pre-loader-1.svg') }}" alt="img">
</div>
<!-- preloader -->

<!-- topbar -->
@include('layouts.topbar')
<!-- topbar -->

<!-- navigation -->
@include('layouts.navigation')
<!-- navigation -->

@section('content')
@show

@include('layouts.footer')

</body>
</html>
