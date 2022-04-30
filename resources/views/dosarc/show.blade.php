@extends('layouts.main')
@section('title', $title)
@section('icon', asset('favicon/detail.png'))
@section('content')
    <div class="program_data">
        <h1>{{$data['name']}}</h1>
        <div class="program_details">
            <div>
                <table>
                    <tbody>
                    <tr>
                        <td>Készítő:</td>
                        <td>{{$data['developer']}}</td>
                    </tr>
                    <tr>
                        <td>Típus: </td>
                        <td>{{$data['type_name']}}</td>
                    </tr>
                    <tr>
                        <td>Megjelenés: </td>
                        <td>{{$data['release_date']}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="program-right">
                <img src="{{route('home')}}/{{$data['program_image']}}" alt="">
                <a href="{{route('home')}}/{{$data['program_file']}}" class="download">Letöltés</a>
            </div>

        </div>
    </div>


                    <div class="program_data">
                        <h1>Kommentek</h1>
                        <div class="program_details">
                            <div>
                                <div class="form-item">
                                    {{Form::open(['route' => 'comment.store', 'method' => 'post', 'class' => "auth-form"])}}
                                    <div class="form-item">
                                        {{Form::label('text', 'Szólj hozzá!' , ['class' => 'auth-label'])}}
                                        {{Form::textarea('text', $value ?? '', $attributes = ["class"=>"auth-input"])}}
                                    </div>
                                    <div class="form-item">
                                        {{Form::submit('Küldés', ['class' => 'btn auth-input'])}}
                                    </div>
                                    {{Form::close()}}
                                </div>
                            </div>

                        </div>

    </div>




@endsection