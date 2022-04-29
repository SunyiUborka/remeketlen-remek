@extends('layouts.main')

@section('content')
        <h1>Főoldal</h1>
        <div class="card-list">
            @foreach(\App\Models\Program::all() as $item)
                <div class="card">
                    <div class="card-header">
                        <img src="{{route('home')}}/{{$item['program_image']}}" class="card-img">
                        <a href="{{route('dosarc.show', $item)}}" class="card-title">{{$item['name']}}</a>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{$item['description']}}</p>
                    </div>
                </div>
            @endforeach

        </div>
@endsection

@section('innerjs')

@endsection