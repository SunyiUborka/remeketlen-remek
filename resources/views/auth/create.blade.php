@extends('layouts.main')


@section('content')
    <div class="panel">
        {!! Form::open(['route' => 'register.store']) !!}
            <h1>Regisztráció</h1>
            <div class="form-item">
                {{Form::label('username','Felhasználónév')}}
                {{Form::text('username', $value = old('username'), $attributes = ["class"=>"form-control"])}}
            </div>
            <div class="form-item">
                {{Form::label('email','Email')}}
                {{Form::email('email', $value = old('email'), $attributes = ["class"=>"form-control"])}}
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
                {{Form::label('password_confirmation',"Jelszó újra")}}
                {{Form::password('password_confirmation', ['class' => 'form-control'])}}
            </div>
            <div class="form-item">
                {{Form::submit('Regisztráció', ['class' => 'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}
        @if($errors->any)
            @foreach($errors->all() as $message)
                <li>{{$message}}</li>
            @endforeach
        @endif
    </div>
@endsection