
@extends('layouts.layout')
    

@section('content')
    <div>

        <h1>Create a new log</h1>
        <form action="" method="">
            <label for="name">Your name: </label>
            <input type="text" id="name" name="name">
            <label for="catagory">Please choose a catagory: </label>
            <select name="catagory" id="catagory">
                <option value="Barbell">Barbell</option>
                <option value="Dumbbell">Dumbbell</option>
                <option value="Machine/other">Machine/other</option>
                <option value="Weighted/Bodyweight">Weighted/Bodyweight</option>
            </select>
            <label for="bodypart">Please choose a split: </label>
            <select name="catagory" id="catagory">
                <option value="Barbell">Core</option>
                <option value="Arms">Arms</option>
                <option value="Back">Back</option>
                <option value="Chest">Chest</option>
                <option value="Legs">Legs</option>
                <option value="Shoulders">Shoulders</option>
                <option value="Other">Other</option>
                <option value="Cardio">Cardio</option>
            </select>
            <label for="liftName">Lift Name</label>
            <select name="liftName" id="liftName">
                <option value="Barbell">Bench-press</option>
                <option value="Barbell">Back-squate</option>
                <option value="Barbell">Front-squat</option>
                <option value="Barbell">Skullcrushers</option>
                <option value="Barbell">Romanian Deadlift</option>
                <option value="Barbell">Seated Overhead-press</option>
                <option value="Barbell">Lunge</option>
                <option value="Barbell">Lying Leg Curl</option>
                <option value="Barbell">Bicep Curl</option>
                <option value="Barbell">Pec Deck</option>
                <option value="Barbell">Lat Pulldown</option>
                <option value="Barbell">Incline Bench-press</option>
            </select>
            <input type="submit" value="Submit Log">


        </form>


    </div>
@endsection
