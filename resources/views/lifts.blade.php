
@extends('layouts.layout')
    

@section('content')
    <h1>List of exercises</h1>



    {{-- @for($i = 0; $i < 5; $i++)
    <p>The Value of i is {{ $i }}</p>
    @endfor --}}

        {{-- @for($i = 0; $i < count($pizzas); $i++)
        <p>{{ $pizzas[$i]['type'] }}</p>
        @endfor --}}

        @foreach($pizzas as $pizza)
        <div>
        {{$loop->index}}    {{$pizza['type']}} - {{$pizza['base']}}
        @if($loop->first)
        <span> first in the loop </span>
        @endif
        </div>
        @endforeach
@endsection
