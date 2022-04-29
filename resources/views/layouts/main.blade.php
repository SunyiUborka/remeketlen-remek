<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="icon" type="image/png" href="@yield('icon', "{{asset('favicon/home.png')}}")">
    <title>@yield('title', 'DosArc')</title>
</head>
<body>




@include('layouts.menu')
<div class="container">
    @yield('content', 'Valami hiba történt')
</div>


@yield('innerjs')
</body>
</html>
