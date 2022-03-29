@extends('layouts.main')


@section('content')
<div>
 <form method="post" action="register">
@csrf

 <label for="name">Felhasználónév</label>
    <input type="text" id="name" name="name">
    <label for="email">E-mail</label>
    <input type="email" id="email" name="email">
    <label for="password">Jelszó</label>
    <input type="password" id="password" name="passsword">
    <input type="submit" class="btn btn-primary" value="Regisztráció">

 </form>
</div>


   @endsection