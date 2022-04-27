<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title', 'DosArc')</title>
</head>
<body>
@include('layouts.menu')
<div class="container">
    @yield('content', 'Something went wrong!')
</div>
@yield('innerjs')
</body>
</html>
