<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Review2 extends Controller
{
    function index(Request $request) {
        $search = $request->input('search');
        $order= $request->input('order');
        return view('review2', compact('search', 'order'));
    }
}
