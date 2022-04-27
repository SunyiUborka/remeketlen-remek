@extends('layouts.main')

@section('content')
    @auth
    <h1>Üdvözlünk az oldalon!</h1>
    @else
        {!! Form::open(['route' => 'auth.authenticate', "class" =>"is-invalid auth-form"]) !!}
        <h1>Bejelentkezés</h1>
        <div class="form-item">
            {{Form::label('username','Felhasználónév', ['class' => 'auth-label'])}}
            {{Form::text('username', $value = old('username'), $attributes = ["class"=>"form-control auth-input"])}}
        </div>
        <div class="form-item">
            {{Form::label('password',"Jelszó", ['class' => 'auth-label'])}}
            {{Form::password('password', ['class' => 'form-control auth-input'])}}
        </div>
        <div class="form-item">
            {{Form::submit('Bejelentkezés', ['class' => 'btn auth-input'])}}
        </div>
        {!! Form::close() !!}
        @if(Session::has('danger'))
            <div class="invalid-feedback">
                {{ Session::get('danger') }}
            </div>
        @endif
        <a class="btn auth-input" href="{{route('register.create')}}">Új felhasználó</a>
    @endauth
@endsection