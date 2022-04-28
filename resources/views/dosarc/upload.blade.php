@extends('layouts.main')

@section('content')
    {{Form::open(['route' => 'dosarc.store', 'class' => 'auth-form'])}}
        <div class="form-item">
            {{Form::label('name', 'Program neve', ['class' => 'auth-label'])}}
            {{Form::text('name', $value ?? '', $attributes = ["class"=>"auth-input"])}}
        </div>
        <div class="form-item">
            {{Form::label('program_image', 'Program kép', ['class' => 'auth-label'])}}
            {{Form::file('program_image', ['class' => 'auth-input'])}}
        </div>
        <div class="form-item">
            {{Form::label('author', 'Készítő', ['class' => 'auth-label'])}}
            {{Form::text('author', $value ?? '', $attributes = ["class"=>"auth-input"])}}
        </div>
        <div class="form-item">
            {{Form::label('type_name', 'Típus', ['class' => 'auth-label'])}}
            {{Form::text('type_name', $value ?? '', $attributes = ["class"=>"auth-input"])}}
        </div>
        <div class="form-item">
            {{Form::label('category_name', 'Kategória', ['class' => 'auth-label'])}}
            {{Form::text('category_name', $value ?? '', $attributes = ["class"=>"auth-input"])}}
        </div>
        <div class="form-item">
            {{Form::label('program_file', 'Fájl', ['class' => 'auth-label'])}}
            {{Form::file('program_file', ['class' => 'auth-input'])}}
        </div>
        <div class="form-item">
            {{Form::label('release_date', 'Megjelenés', ['class' => 'auth-label'])}}
            {{Form::date('release_date', $value ?? '', $attributes = ["class"=>"auth-input"])}}
        </div>
        <div class="form-item">
            {{Form::submit('Feltöltés', ['class' => 'btn auth-input'])}}
        </div>
    {{Form::close()}}
    @if($errors->any)
        @foreach($errors->all() as $message)
            <li>{{$message}}</li>
        @endforeach
    @endif
@endsection