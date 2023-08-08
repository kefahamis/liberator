@extends('layouts.master')
@section('title', 'Explore our programs')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center align-items-center align-content-center flex-column lib-wrapper">
        <div class="d-flex justify-content-center align-items-center align-content-center flex-column">
            <img src="{{ asset('assets/img/Object-4.png') }}" style="width: 400px;" />

            <h3>Explore our programs</h3>
            <p>If you think that you or your company are
                looking to excel a midst the digital era, there are a number of programs tailored for you.</p>
        </div>
        
    </div>
    <ul class="d-flex justify-content-between navs">
        <li><a href="#" class="btn-skip">Skip</a></li>
        <li><a href="/start" class="btn-skip">Next</a></li>
    </ul>

</div>
@endsection