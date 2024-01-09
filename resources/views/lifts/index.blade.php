
@extends('layouts.layout')
    

@section('content')
    <h1>List of exercises</h1>



    {{-- @for($i = 0; $i < 5; $i++)
    <p>The Value of i is {{ $i }}</p>
    @endfor --}}

        {{-- @for($i = 0; $i < count($pizzas); $i++)
        <p>{{ $pizzas[$i]['type'] }}</p>
        @endfor --}}

        @foreach($lifts as $lift)
            <div>
                {{ $lift->name }} - {{ $lift->catagory}} - {{$lift->bodypart}} - {{$lift->liftName}}
            </div>
        @endforeach
@endsection
