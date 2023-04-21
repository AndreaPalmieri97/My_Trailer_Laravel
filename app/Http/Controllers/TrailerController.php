<?php

namespace App\Http\Controllers;

use App\Models\Trailer;
use Illuminate\Http\Request;

class TrailerController extends Controller
{
    public function create() {
        return view ('trailers.create');
    }

    public function store(Request $request) {
        
        Trailer::create(
            [
                'title' => $request->input('title'),
                'genre' => $request->input('genre'),
                'img' => $request->file('img')->store('public/trailers'),
                'abstract' => $request->input('abstract'),
                'year' => $request->input('year'),
                'director' => $request->input('director'),
                'url' => $request->input('url')
            ]
        );
        return redirect()->route('home')->with('message', 'Il tuo Trailer è stato aggiunto correttamente!');
    }

    public function index() {

        $trailers = Trailer::orderBy('created_at', 'desc')->get();

        return view('trailers.index', compact('trailers'));
    }

    public function show($id) {

        $trailers = Trailer::findOrFail($id);

        return view('trailers.show', compact('trailers'));
    }


}
