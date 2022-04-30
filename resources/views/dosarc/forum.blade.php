@extends('layouts.main')


@section('content')

<h1>Fórum létrehozása</h1>
{{Form::open(['route' => 'threads.store', 'class' => 'auth-form'])}}
<div class="form-item">
    {{Form::label('program_id', 'Fórumhoz tartozó program', ['class' => 'auth-label'])}}
    {{Form::text('title', $value ?? '', $attributes = ["class"=>"auth-input"])}}
</div>

<div class="form-item">
    {{Form::label('post_title', 'Fórum neve', ['class' => 'auth-label'])}}
    {{Form::text('title', $value ?? '', $attributes = ["class"=>"auth-input"])}}
</div>

<div class="form-item">
    {{Form::label('threads_description', 'Progamszál', ['class' => 'auth-label'])}}
    {{Form::text('thread', $value ?? '', $attributes = ["class"=>"auth-input"])}}
</div>

<div class="form-item">
    {{Form::label('description', 'Leírás', ['class' => 'auth-label'])}}
    {{Form::text('description', $value ?? '', $attributes = ["class"=>"auth-input"])}}
</div>

<div class="form-item">
    {{Form::label('comment_text', 'Hozzászólás', ['class' => 'auth-label'])}}
    {{Form::text('comment_text', $value ?? '', $attributes = ["class"=>"auth-input"])}}
</div>



<div class="form-item">
    {{Form::submit('Mentés', ['class' => 'btn auth-input'])}}
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