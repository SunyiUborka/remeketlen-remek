@extends('layouts.main')


@section('content')
    <div class="panel">
        {!! Form::open(['route' => 'register.store', 'class' => "auth-form"]) !!}
            <h1>Regisztráció</h1>
            <div class="form-item">
<<<<<<< HEAD
                {{Form::label('username','Felhasználónév', ['class' => 'auth-label'])}}
                {{Form::text('username', $value = old('username'), $attributes = ["class"=>"auth-input"])}}
            </div>
            <div class="form-item">
                {{Form::label('email','Email', ['class' => 'auth-label'])}}
                {{Form::email('email', $value = old('email'), $attributes = ["class"=>"auth-input"])}}
=======
                {{Form::label('username','Felhasználónév')}}
                {{Form::text('username', $value = old('username'), $attributes = ["class"=>"form-control"])}}
                @error('username')
                <div id="usernameFeedBack" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-item">
                {{Form::label('email','Email')}}

                {{Form::email('email', $value = old('email'), $attributes = ["class"=>"form-control"])}}
                @error('email')
                <div id="emailFeedBack" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
>>>>>>> e895a7cdfc2098f83aeae4725b868ac938e73d56
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
    </div>
@endsection