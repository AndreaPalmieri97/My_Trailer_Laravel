<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrailerController extends Controller
{
    public function create() {
        return view ('trailers.create');
    }

    public function store(Request $request) {
        dd($request);
    }
}
