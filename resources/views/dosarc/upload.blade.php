@extends('layouts.main')

@section('content')
    {{Form::open(['route' => 'dosarc.store', 'class' => 'auth-form', 'files' => true])}}
        <div class="form-item">
            {{Form::label('name', 'Program neve', ['class' => 'auth-label'])}}
            {{Form::text('name', $value ?? '', $attributes = ["class"=>"auth-input"])}}
        </div>
        <div class="form-item">
            {{Form::label('program_image', 'Program kép', ['class' => 'auth-label'])}}
            {{Form::file('program_image', ['class' => 'auth-input'])}}
        </div>
        <div class="form-item">
            {{Form::label('developer', 'Készítő', ['class' => 'auth-label'])}}
            {{Form::text('developer', $value ?? '', $attributes = ["class"=>"auth-input"])}}
        </div>
        <div class="form-item">
            <p>Típus</p>
            <div class="radio-btn-group">
                    {{Form::label('', 'Szoftver', ['class' => 'auth-label'])}}
                    {{Form::radio('type_name', 'Szoftver', true)}}

                    {{Form::label('', 'Játék', ['class' => 'auth-label'])}}
                    {{Form::radio('type_name', 'Játék', )}}
            </div>
        </div>
        <div class="form-item">
            {{Form::label('category_name', 'Kategória', ['class' => 'auth-label'])}}
            {{Form::text('category_name', $value ?? '', $attributes = ["class"=>"auth-input"])}}
        </div>
        <div class="form-item">
            {{Form::label('program_file', 'Fájl (zip)', ['class' => 'auth-label'])}}
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
        <ul>
        @foreach($errors->all() as $message)
            <li>{{$message}}</li>
        @endforeach
        </ul>
    @endif
@endsection