@extends('layouts.main')

@section('content')
    <form action="{{route("dosarch.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="user_id">user_id</label>
        <input type="text" name="user_id" id="user_id">
        <label for="program_id">program_id</label>
        <input type="text" name="program_id" id="program_id">
        <input type="text" name="version_number" id="version_number">
        <label for="version_number">verzió szám</label>
        <input type="text" name="release_date" id="release_date">
        <label for="release_date">kiadás ideje</label>

        <label for="program_file">alkalmazás </label>
        <input type="file" name="program_file" id="program_file">

        <input type="submit">
    </form>
    @if($errors->any)
        @foreach($errors->all() as $message)
            <li>{{$message}}</li>
        @endforeach
    @endif


@endsection