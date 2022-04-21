@extends('layouts.main')

@section('content')
    <div class="panel">
        {!! Form::open(['route' => 'auth.authenticate', "class" =>"is-invalid"]) !!}
            <h1>Bejelentkezés</h1>
            <div class="form-item">
                {{Form::label('username','Felhasználónév')}}
                {{Form::text('username', $value = old('username'), $attributes = ["class"=>"form-control"])}}
                @error('username')
                <div id="usernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-item">
                {{Form::label('password',"Jelszó")}}
                @error('password')
                    {{Form::password('password', ['class' => 'form-control is-invalid'])}}
                    <div id="passwordFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>

                @else
                    {{Form::password('password', ['class' => 'form-control'])}}
                @enderror
            </div>
            <div class="form-item">
                {{Form::submit('Bejelentkezés', ['class' => 'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}
        @if($errors->any)
            @foreach($errors->all() as $message)
                <li style="color:red">{{$message}}</li>

            @endforeach
        @endif
    </div>
@endsection