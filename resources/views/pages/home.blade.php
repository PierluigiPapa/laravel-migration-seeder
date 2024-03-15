@extends('layouts.app')

@section('content')

<h1 class="text-center">TABELLONE ORARIO TRENI</h1>

<div class="container">
    <table class="table my-5">
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


