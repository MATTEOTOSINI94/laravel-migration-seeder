<?php

namespace App\Http\Controllers;
use App\Trip;

use Illuminate\Http\Request;

class TripsController extends Controller
{
    function index () {
        $viaggi = trip::all();
       
        return view('welcome', ["viaggio"=>$viaggi]);
    }
}
