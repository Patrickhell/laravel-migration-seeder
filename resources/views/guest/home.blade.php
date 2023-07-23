@extends('layouts.app')
@section ('title', 'Homepage')

@section('main-content')
<h1>
    Lista di tutti i treni in partenza alla data odierna:
</h1>
<ul>
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

</ul>

@endsection