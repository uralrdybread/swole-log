<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lift;

class LiftController extends Controller
{
    public function index() {

        $lifts = Lift::all();


        return view('lifts.index', [
            'lifts' => $lifts,
        ]);
    }

    public function show($id) {

        $lift = Lift::findOrFail($id);

        return view('lifts.show', ['lift' => $lift]);
    }

    public function create(){
        return view('lifts.create');
    }
}
