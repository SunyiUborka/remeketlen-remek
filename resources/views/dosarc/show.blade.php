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
    </div>




@endsection
