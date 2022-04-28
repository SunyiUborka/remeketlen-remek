@extends('layouts.main')

@section('content')
    <div class="user-profile">
        <div class="user-image">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2Fa%2Fac%2FNo_image_available.svg%2F1024px-No_image_available.svg.png&f=1&nofb=1" alt="">
            <form action="{{route('dosarc.store')}}" class="auth-form" method="put">
                @csrf
                <div class="form-item">
                    <input type="file" name="program_file" id="program_file">
                </div>
                <div class="form-item">
                    <input type="button" class="auth-input btn" value="Mentés">
                </div>
            </form>
        </div>
        <div class="user-data">
            <h1>
                {{\Illuminate\Support\Facades\Auth::user()->username}}
            </h1>
            {{Form::open(['route' => 'user.update', 'method' => 'put', 'class' => "auth-form"])}}
            <div class="form-item">
                {{Form::label('old-password', 'Jelenlegi Jelszó', ['class' => 'auth-label'])}}
                {{Form::password('old-password', ['class' => 'auth-input'])}}
            </div>
            <div class="form-item">
                {{Form::label('new-password', 'Új Jelszó', ['class' => 'auth-label'])}}
                {{Form::password('new-password', ['class' => 'auth-input'])}}
            </div>
            <div class="form-item">
                {{Form::label('new-password_confirmation', 'Új Jelszó újra', ['class' => 'auth-label'])}}
                {{Form::password('new-password_confirmation', ['class' => 'auth-input'])}}
            </div>
                {{Form::submit('Mentés', ['class' => 'auth-input btn'])}}
            {{Form::close()}}
        </div>
    </div>
@endsection