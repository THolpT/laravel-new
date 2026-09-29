<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    function index() {
        $array = [0, 1, 2, 3];
        
        return view('first', compact('array'));
    }
}
