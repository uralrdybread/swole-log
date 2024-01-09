
@extends('layouts.layout')
    

@section('content')
    <div>
        <h1>Order for {{ $lift->name }}</h1>
        <p class="type">Catagory - {{ $lift->catagory }}</p>
        <p class="bodypart">Bodypart - {{ $lift->bodypart }}</p>
        <p class="liftName">Lift Name - {{ $lift->liftName }}</p>
    </div>
    <a href="/lifts"><- Back to all logs</a>
@endsection
