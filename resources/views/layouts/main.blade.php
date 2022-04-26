<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title', 'DosArc')</title>
</head>
<body>
@if(Session::has('success'))
        <div class="alert alert-success my-2">{{ Session::get('success') }}</div>
    @endif

  

@include('layouts.menu')
<div class="container">
    @yield('content', 'Something went wrong!')
</div>
@if(Session::has('danger'))
        <div class="alert alert-success my-2">{{ Session::get('danger') }}</div>
    @endif

@yield('innerjs')
</body>
</html>
