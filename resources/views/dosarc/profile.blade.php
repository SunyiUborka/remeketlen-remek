@extends('layouts.main')

@section('content')
    <div class="user-profile">
        <div class="user-image">
            <img src="{{route('home')}}/{{\Illuminate\Support\Facades\Auth::user()->user_image}}" alt="">
            <form action="{{route('user.update-image')}}" method="post" enctype="multipart/form-data" class="auth-form">
                @csrf
                @method('put')
                <div class="form-item">
                    <input type="file" class="auth-input" name="user_image">
                </div>
                <div class="form-item">
                    <input type="submit" value="Mentés" class="auth-input btn">
                </div>
            </form>
        </div>
        <div class="user-data">
            <h1>
                {{\Illuminate\Support\Facades\Auth::user()->username}}
            </h1>
            <form action="{{route('user.update-password')}}" method="post" class="auth-form">
                @csrf
                @method('put')
                <div class="form-item">
                    <label for="old_password" class="auth-label">Jelenlegi jelszó</label>
                    <input required type="password" name="old_password" id="old_password" class="auth-input">
                    @if(Session::has('bad_password'))
                        <div class="invalid-feedback">
                            {{Session::get('bad_password')}}
                        </div>
                    @endif
                </div>
                <div class="form-item">
                    <label for="password" class="auth-label">Új jelszó</label>
                    <input required type="password" name="password" id="password" class="auth-input">
                </div>
                <div class="form-item">
                    <label for="password_confirmation" class="auth-label">Jelenlegi jelszó</label>
                    <input required type="password" name="password_confirmation" id="password_confirmation" class="auth-input">
                </div>
                <div class="form-item">
                    <input type="submit" class="auth-input btn" value="Mentés">
                </div>
            </form>
        </div>
        @if($errors->any)
            @foreach($errors->all() as $message)
                <div class="invalid-feedback">
                    {{$message}}</li>
                </div>
            @endforeach
        @endif
    </div>
@endsection

@section('innerjs')
@endsection