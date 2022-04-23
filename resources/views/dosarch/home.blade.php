@extends('layouts.main')

@section('content')
<<<<<<< HEAD
    <div class="panel">
        <h1>Főoldal</h1>
        <div class="card">
            <div class="card-header">
                <img src="img" class="card-img">
                <h3 class="card-title"></h3>
            </div>
            <div class="card-body">
                <p class="card-text"></p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="img" class="card-img">
                <h3 class="card-title"></h3>
            </div>
            <div class="card-body">
                <p class="card-text"></p>
            </div>
        </div>
@endsection
=======

<h1>A Dos játékok megtekintése</h1>







<ul>

</ul>
@endsection

@section('innerjs')
<script>
fetch('dosarch.home').then(response => response.json())
.then(data => {

const list = data.data
let programs = " ";
for (let key in list) {
programs = `<li>${key.name}</li>`;

}
})

let b = document.querySelector('ul');
</script>
@endsection
>>>>>>> e895a7cdfc2098f83aeae4725b868ac938e73d56
