@extends('layouts.main')

@section('content')

    <h1>Adatok</h1>

    <ul>

        <li>Felhasználónév: {{Illuminate\Support\Facades\Auth::user()->username}}</li>
        <li>E-mail: {{Illuminate\Support\Facades\Auth::user()->email}}</li>
        <li>Belépés dátuma</li>
        @if (Illuminate\Support\Facades\Auth::user()->user_image != null)
            <li>Kép: {{Illuminate\Support\Facades\Auth::user()->user_image}}</li>

        @else
            <li>Kép feltöltése</li>


        @endif
        <li>Videók:
            <ul>

                @foreach (Illuminate\Support\Facades\Auth::user()->programs as $programok)
                    <li>  {{$programok->version_number}}</li>
                @endforeach
            </ul>
        </li>
    </ul>
@endsection