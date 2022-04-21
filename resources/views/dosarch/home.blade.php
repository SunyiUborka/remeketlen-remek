@extends('layouts.main')

@section('content')

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
