<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function payment(){
        return view('frontend.payment');
    }
    public function updates(){
        return view('frontend.updates');
    }
    public function accomplishments(){
        return view('frontend.accomplishments');
    }
    public function helpcenter(){
        return view('frontend.helpcenter');

    }
    public function account(){
        return view('frontend.helpcenter.account');
 
    }

}
