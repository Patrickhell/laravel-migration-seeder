@extends('layouts.app')

@section('title', 'train')

@section('main-content')
<h1>
    Lista dei primi 20 treni:
</h1>
<ol>
    @foreach($trainList as $train)
    <li>
        {{ "$train->departing_trains_today"}}
    </li>

    <p>
        Azienda:{{ "$train->companie" }}
    </p>
    <div>
        <p>Stazione di partenza: {{"$train->departure_station"}}</p>
        <p> Ora di partenza: {{ "$train->departure"}} </p>
    </div>

    <div>
        <p>Stazione d'arrivo: {{ "$train->arrival_station"}}</p>
        <p>Ora di arrivo: {{" $train->arrival"}}</è>

    </div>
    <p> Numero Treno: {{"$train->train_number"}} </p>
    <p> Numero Carrozza: {{"$train->railroad_passenger_number"}} </p>
    <p>
        {{ ($train->in_time) ? '' : 'Cancelled'}}
    </p>

    @endforeach

</ol>



@endsection