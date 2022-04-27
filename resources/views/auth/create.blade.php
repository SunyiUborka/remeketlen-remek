@extends('layouts.main')


@section('content')
        {!! Form::open(['route' => 'register.store', 'class' => "auth-form"]) !!}
            <h1>Regisztráció</h1>
            <div class="form-item">
                {{Form::label('username','Felhasználónév', ['class' => 'auth-label'])}}
                {{Form::text('username', $value = old('username'), $attributes = ["class"=>"auth-input"])}}
                @error('username')
                <div id="usernameFeedBack" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-item">
                {{Form::label('email','Email', ['class' => 'auth-label'])}}
                {{Form::email('email', $value = old('email'), $attributes = ["class"=>"auth-input"])}}
                @error('email')
                <div id="emailFeedBack" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-item">
                {{Form::label('password',"Jelszó", ['class' => 'auth-label'])}}
                @error('password')
                    {{Form::password('password', ['class' => 'auth-input is-invalid'])}}
                    <div id="passwordFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @else
                    {{Form::password('password', ['class' => 'auth-input'])}}
                @enderror
            </div>
            <div class="form-item">
                {{Form::label('password_confirmation',"Jelszó újra", ['class' => 'auth-label'])}}
                {{Form::password('password_confirmation', ['class' => 'auth-input'])}}
            </div>
            <div class="form-item">
                {{Form::submit('Regisztráció', ['class' => 'auth-input'])}}
            </div>
        {!! Form::close() !!}
        @if($errors->any)
            @foreach($errors->all() as $message)
                <li>{{$message}}</li>
            @endforeach
        @endif
@endsection