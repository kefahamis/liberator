@extends('layouts.master')
@section('content')

@include('inc.nav')
<div class="container bg-white pt-5 pb-5 mt-2">
    <h2 class="mt-1 mb-3">Payment</h2>
    <div class="d-flex justify-content-between"> 
        <div class="col-4"><span>Name of card</span></div>

    <div class="col-8 mb-4">
       
        <input type="text" aria-label="First name" class="form-control">
        
    </div>
    </div>
    <div class="d-flex justify-content-between"> 
        <div class="col-4"><span>Enter Card Number</span></div>

    <div class="col-8 mb-4">
       
        <input type="text" aria-label="First name" class="form-control">
        
    </div>
    </div>
    <div class="d-flex justify-content-between"> 
        <div class="col-4"><span>Expiration Date</span></div>

    <div class="col-8 mb-4">
       
        <input type="text" aria-label="First name" class="form-control">
        
    </div>
    </div>
    <div class="d-flex "> 
        <div class="col-1"><span>CVV</span></div>

    <div class="col-2 mb-4">
       
        <input type="text" aria-label="First name" class="form-control">
        
    </div>
    </div>
    <div>
    <button type="button" class="btn btn-outline-dark shadow-sm border-dark">Save</button>
    </div>

</div>
@endsection