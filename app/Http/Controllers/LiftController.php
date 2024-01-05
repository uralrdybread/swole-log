<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lift;

class LiftController extends Controller
{
    public function index() {

        $lifts = Lift::all();


        return view('lifts', [
            'lifts' => $lifts,
        ]);
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
