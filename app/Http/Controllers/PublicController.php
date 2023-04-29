<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{

    public function home() {
        return view('welcome');
    }
    
    public function profile() {

        $user = Auth::user();
        $trailers = $user->trailers;
        return view('profile', compact('trailers'));
    }
}
