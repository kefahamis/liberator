@extends('layouts.master')
@section('title', 'Explore our programs')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center align-items-center align-content-center flex-column lib-wrapper">
        <div class="d-flex justify-content-center align-items-center align-content-center flex-column">
            <img src="{{ asset('assets/img/Object-3.png') }}" style="width: 300px;" />

            <h3>Get Started</h3>
            <p>Take the first step on your journey to better learning and empowerment.
                Get started today!</p>
        </div>
    </div>
    <ul class="d-flex justify-content-between navs">
        <li><a href="#" class="btn-skip">Skip</a></li>
        <li><a href="/start" class="btn-skip">Next</a></li>
    </ul>
</div>
@endsection