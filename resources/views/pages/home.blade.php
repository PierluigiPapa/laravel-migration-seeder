@extends('layouts.app')

@section('content')

<h1 class="text-center text-white fw-bold">TABELLONE ORARIO TRENI</h1>
<img class="mx-auto d-block my-4 rounded rounded-5" src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2015/03/18/19/36-Hogwarts-Express-PA.jpg?quality=75&width=990&crop=3%3A2%2Csmart&auto=webp" alt="" style="max-width: 600px; border: 2px solid white">

<div class="container">
    <table class="table my-5 bg-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">COMPAGNIA</th>
            <th scope="col">STAZIONE DI PARTENZA</th>
            <th scope="col">STAZIONE DI ARRIVO</th>
            <th scope="col">ORARIO DI PARTENZA</th>
            <th scope="col">ORARIO DI ARRIVO</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($filterTrains as $train)
          <tr>
            <th scope="row">{{$train['id']}}</th>
            <td>{{$train['company']}}</td>
            <td>{{$train['departure_station']}}</td>
            <td>{{$train['arrival_station']}}</td>
            <td>{{$train['departure_time']}}</td>
            <td>{{$train['arrival_time']}}</td>
          </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
