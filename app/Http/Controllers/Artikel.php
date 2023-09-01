<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Artikel extends Controller
{
    // function index(Request $request, $param1) {
    //     return view('artikel', compact('param1'));
    // }
    function index($param1) {
        return view('artikel', compact('param1'));
    }
}