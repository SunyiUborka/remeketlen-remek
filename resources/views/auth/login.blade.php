@extends('layouts.main')

@section('content')
    <div class="panel">
    {!! Form::open(['route' => 'auth.authenticate', "class" =>"is-invalid"]) !!}
    <div class="row mt-3">
        <div class="col">
            {{Form::label('username','Felhasználónév')}}
            {{Form::text('username', $value = old('username'), $attributes = ["class"=>"form-control"])}}
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
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
    </div>
    <div class="row mt-3">
        <div class="col">
            {{Form::submit('Bejelentkezés', ['class' => 'btn btn-primary'])}}
        </div>
    </div>
    {!! Form::close() !!}

    @if($errors->any)
        @foreach($errors->all() as $message)
            <li style="color:red">{{$message}}</li>
        @endforeach
    @endif
    </div>
@endsection