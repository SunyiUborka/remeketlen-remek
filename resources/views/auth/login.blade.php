@extends('layouts.main')

@section('content')
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
                {{Form::submit('Bejelentkezés', ['class' => 'auth-input'])}}
            </div>
        {!! Form::close() !!}
        @if(Session::has('danger'))
            <div class="invalid-feedback">
                {{ Session::get('danger') }}
            </div>
        @endif
@endsection