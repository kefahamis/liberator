@extends('layouts.master')
@section('content')

@include('inc.nav')
<div class="container account-page">
<nav aria-label="breadcrumb" class="mt-3">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Learner Help Centre</a></li>
    <li class="breadcrumb-item active" aria-current="page">Account & notifications</li>
  </ol>
</nav>
<h2 class="mt-5 mb-4">Accounts & notifications</h2>
<p>Account settings, login issues, and notification preferences</p>
<div class="d-flex align-items-start gap-3 mt-5">
    <div>
        <img src="{{ asset('assets/img/settings.svg') }}"/>
    </div>
    <div>
        <strong>Account Settings</strong>
        <ul class="account-links">
            <li><a href="#">Set up your Liberator account</a></li>
            <li><a href="#">Change your Liberator account settings</a></li>
            <li><a href="#">Link or de-link your account with Google or Apple</a></li>
            <li><a href="#">Delete your Liberator account</a></li>
        </ul>
    </div>
</div>
<div class="d-flex align-items-start gap-3 mt-5">
    <div>
        <img src="{{ asset('assets/img/mail.svg') }}"/>
    </div>
    <div>
        <strong>Email notifications</strong>
        <ul class="account-links">
            <li><a href="#">Change email settings</a></li>
            <li><a href="#">Check and update your email communication preferences</a></li>
        </ul>
    </div>
</div>
<div class="d-flex align-items-start gap-3 mt-5">
    <div>
        <img src="{{ asset('assets/img/key.svg') }}"/>
    </div>
    <div>
        <strong>Login  issues</strong>
        <ul class="account-links">
            <li><a href="#">Reset your Liberator password</a></li>
            <li><a href="#">Troubleshooting login and account issues</a></li>
        </ul>
    </div>
</div>
</div>

@endsection