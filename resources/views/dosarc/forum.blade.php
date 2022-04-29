@extends('layouts.main')


@section('content')

<h1>Fórum létrehozása</h1>
{{Form::open(['route' => 'post.store', 'class' => 'auth-form'])}}
<div class="form-item">
    {{Form::label('title', 'Fórum neve', ['class' => 'auth-label'])}}
    {{Form::text('title', $value ?? '', $attributes = ["class"=>"auth-input"])}}
</div>

<div class="form-item">
    {{Form::label('thread', 'Progamszál', ['class' => 'auth-label'])}}
    {{Form::text('thread', $value ?? '', $attributes = ["class"=>"auth-input"])}}
</div>

<div class="form-item">
    {{Form::label('description', 'Leírás', ['class' => 'auth-label'])}}
    {{Form::text('description', $value ?? '', $attributes = ["class"=>"auth-input"])}}
</div>

<div class="form-item">
    {{Form::label('comment', 'Hozzászólás', ['class' => 'auth-label'])}}
    {{Form::text('comment', $value ?? '', $attributes = ["class"=>"auth-input"])}}
</div>



<div class="form-item">
    {{Form::submit('Mentés', ['class' => 'btn auth-input'])}}
</div>
{{Form::close()}}

    @endsection