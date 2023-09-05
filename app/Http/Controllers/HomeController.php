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
    public function landing()
    {
        return view('frontend.landing');
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
    public function hr()
    {
        return view('frontend.human-resource');
    }
    public function finance()
    {
        return view('frontend.finance');
    }
    public function dataScience()
    {
        return view('frontend.data-science');
    }
    public function purchases()
    {
        return view('frontend.purchases');
    }

}
