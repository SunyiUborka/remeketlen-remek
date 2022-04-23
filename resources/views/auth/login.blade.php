@extends('layouts.main')

@section('content')
    <div class="panel">
        {!! Form::open(['route' => 'auth.authenticate', "class" =>"is-invalid auth-form"]) !!}
            <h1>Bejelentkezés</h1>
            <div class="form-item">
<<<<<<< HEAD
                {{Form::label('username','Felhasználónév', ['class' => 'auth-label'])}}
                {{Form::text('username', $value = old('username'), $attributes = ["class"=>"form-control auth-input"])}}
=======
                {{Form::label('username','Felhasználónév')}}
                {{Form::text('username', $value = old('username'), $attributes = ["class"=>"form-control"])}}
                @error('username')
                <div id="usernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
>>>>>>> e895a7cdfc2098f83aeae4725b868ac938e73d56
            </div>
            <div class="form-item">
                {{Form::label('password',"Jelszó", ['class' => 'auth-label'])}}
                @error('password')
                    {{Form::password('password', ['class' => 'form-control is-invalid auth-input'])}}
                    <div id="passwordFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>

                @else
                    {{Form::password('password', ['class' => 'form-control auth-input'])}}
                @enderror
            </div>
            <div class="form-item">
                {{Form::submit('Bejelentkezés', ['class' => 'auth-input'])}}
            </div>
        {!! Form::close() !!}
        @if($errors->any)
            @foreach($errors->all() as $message)
                <li style="color:red">{{$message}}</li>

            @endforeach
        @endif
    </div>
@endsection