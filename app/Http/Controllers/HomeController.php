<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }
    public function book()
    {
        return view('frontend.book');
    }
    public function explore()
    {
        return view('frontend.explore');
    }
    public function start()
    {
        return view('frontend.start');
    }

}
