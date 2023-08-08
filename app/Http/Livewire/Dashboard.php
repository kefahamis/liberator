<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('dashboard');
    }
    public function enroll()
    {
        return view('enroll');
    }
    public function download()
    {
        return view('download');
    }
    public function explore()
    {
        return view('exploreprogram');
    }
    
}
