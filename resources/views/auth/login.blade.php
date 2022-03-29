@extends('layouts.main')

@section('content')

<label for="name">Felhasználónév</label>
    <input type="text" id="name" name="name">
    <label for="password">Jelszó</label>
    <input type="password" id="password" name="passsword">
    <input type="submit" class="btn btn-primary" value="Bejelentkezés">


@endsection