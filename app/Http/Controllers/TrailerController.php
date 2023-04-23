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

    public function show(Trailer $trailers) {

        // $trailers = Trailer::findOrFail($trailer);

        return view('trailers.show', compact('trailers'));
    }

    public function showdelete(Trailer $trailers) {

        // $trailers = Trailer::findOrFail($trailer);

        return view('trailers.delete', compact('trailers'));
    }

    public function canc(Trailer $trailers) {

        $trailers->delete();
        
        return redirect()->route('trailers.index')->with('message', 'Il tuo Trailer è stato cancellato correttamente');
        
    }

}
