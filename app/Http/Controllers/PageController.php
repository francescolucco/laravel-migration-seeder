<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }


    public function servizi(){
        return view('servizi');
    }

    public function news(){
        return view('news');
    }

    public function contatti(){
        return view('contatti');
    }
}
