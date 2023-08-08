@extends('layouts.master')
@section('title', 'Liberator landing page')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center align-items-center align-content-center flex-column lib-wrapper">
        <div class="d-flex justify-content-center align-items-center align-content-center flex-column">
        <img src="{{ asset('assets/img/liberator-app.svg') }}" style="width: 150px;" />

        <h3>Welcome to liberator</h3>
        <p>CPD Booking app</p>
        </div>
        <a href="/book" class="btn btn-info btn-start">Get started</a>
    </div>

</div>
@endsection