@extends('layouts.master')
@section('content')

@include('inc.nav')
<div class="container-fluid bg-primary bg-wrap">
    <div class="container">
    <div class="d-flex justify-content-center align-items-center flex-column flex-wrap" style="height: 300px;">
        <h2 class="text-center mb-4" style="color: #fff;">Learner Help Centre</h2>
        <div class="input-group search-wrap help-search">
        <button type="button" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control" placeholder="Search help" />
                </div>
                
            </div>
    </div>
    </div>
    
</div>
<div class="container mb-8">
    <div class="d-flex mt-6 gap-4 flex-wrap justify-content-center">
    <div class="card shadow pt-3" style="width: 30%;">
  <img src="{{ asset('assets/img/account-user.svg') }}" class="" alt="..." width="48">
  <div class="card-body">
    <a href="/account"><h5 class="card-title text-center">Account & notifications</h5></a>
    <p class="card-text text-center">Account settings, login issues, and
notification preferences</p>
  </div>
</div>
<div class="card shadow pt-3" style="width: 30%;">
  <img src="{{ asset('assets/img/payment.svg') }}" class="" alt="..." width="48">
  <div class="card-body">
    <h5 class="card-title text-center">Payments & Subscriptions</h5>
    <p class="card-text text-center">Help with payments and subscription options</p>
  </div>
</div>
<div class="card shadow pt-3" style="width: 30%;">
  <img src="{{ asset('assets/img/enrollment.svg') }}" class="" alt="..." width="48">
  <div class="card-body">
    <h5 class="card-title text-center">Enrollment</h5>
    <p class="card-text text-center">Find programs to take and learn about
enrollment options</p>
  </div>
</div>
<div class="card shadow pt-3" style="width: 30%;">
  <img src="{{ asset('assets/img/medal.svg') }}" class="" alt="..." width="48">
  <div class="card-body">
    <h5 class="card-title text-center">Certificates & Verification</h5>
    <p class="card-text text-center">FHow to get and share a Program Certificate</p>
  </div>
</div>
<div class="card shadow pt-3" style="width: 30%;">
  <img src="{{ asset('assets/img/carbon_deployment-policy.svg') }}" class="" alt="..." width="48">
  <div class="card-body">
    <h5 class="card-title text-center">Liberator Policies</h5>
    <p class="card-text text-center">Find programs to take and learn about
enrollment options</p>
  </div>
</div>
    </div>

</div>
@endsection