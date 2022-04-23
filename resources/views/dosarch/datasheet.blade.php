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
            <li>
                <div class="file">
                    {!! Form::open(['route' => 'auth.register', "class" =>"is-invalid" , 'method' => 'post']) !!}


                    <div class="form-item">
                        {{Form::label('image',"Kép feltöltése")}}
                    </div>
                    <div class="form-item">
                        {{ Form::file('stock_image', ['multiple' => true]) }}
                    </div>

                    <div class="form-item">
                        {{Form::submit('Kép feltöltése', ['class' => 'btn btn-primary'])}}
                    </div>
            {!! Form::close() !!}
                    </div>


            </li>



        @endif
        <li>Videók:
            <ul>


            </ul>
        </li>
    </ul>
@endsection