@extends('layouts.main')
@section('title', $title)
@section('content')
    <div class="program_data">
        <h1>{{$data['name']}}</h1>
        <div class="program_details">
            <div>
                <table>
                    <tbody>
                    <tr>
                        <td>Készítő:</td>
                        <td>{{$data['author']}}</td>
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
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2Fa%2Fac%2FNo_image_available.svg%2F1024px-No_image_available.svg.png&f=1&nofb=1" alt="">
        </div>
    </div>


                    <div class="program_data">
                        <h1>Comments</h1>
                        <div class="program_details">
                            <div>
                                <div class="form-item">
                                    {{Form::open(['route' => 'comment.store', 'method' => 'post', 'class' => "auth-form"])}}
                                    {{Form::label('text', 'Szólj hozzá!' , ['class' => 'auth-label'])}}
                                    {{Form::text('text', $value ?? '', $attributes = ["class"=>"auth-input"])}}
                                    <div class="form-item">
                                        {{Form::submit('Küldés', ['class' => 'btn auth-input'])}}
                                    </div>
                                    {{Form::close()}}
                                </div>
                            </div>

                        </div>

    </div>




@endsection