@extends('layouts.master')
@section('content')
@section('title', 'Book a Corporate Training for your team')

<div class="container">
    <div class="d-flex justify-content-center align-items-center align-content-center flex-column lib-wrapper">
        <div class="d-flex justify-content-center align-items-center align-content-center flex-column">
            <img src="{{ asset('assets/img/Object.svg') }}" style="width: 300px;" />

            <h3>Book a Corporate Training for your team</h3>
            <p>Transforming your work by offering corporate training and team building for your business.</p>
        </div>

    </div>
    <ul class="d-flex justify-content-between navs">
        <li><a href="#" class="btn-skip">Skip</a></li>
        <li><a href="/explore" class="btn-skip">Next</a></li>
    </ul>

</div>
@endsection