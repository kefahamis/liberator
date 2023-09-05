@extends('layouts.master')
@section('content')

@include('inc.nav')
<div class="container mt-3 p-3 bg-white ">
    <h2 style="font-weight:400;">Purchases</h2>
    <p class="text-start">Need more help? Check out our help center. You can write an email to us at <a href="mailto:info@capabuil.com">info@capabuil.com </a> </p>
    <hr class="dropdown-divider">
    <div class="d-flex justify-content-between mb-5">
        <h5 style="color: #0086F8;">Payment History</h5>
        <a href="#">Update Payment Method</a>
    </div>
    <div class="d-flex justify-content-between">
        <p class="align-self-start flex-fill">Purchase</p>
        <p class="flex-grow-2" style="padding-right: 16%;">Amount</p>
        <p style="padding-right: 2%;">Payment
            Date</p>
        <p class="align-self-end">Payment
            Status</p>
    </div>
    <ul class="d-flex justify-content-between shadow-sm rounded align-items-center p-3 border border-dark mb-5">
        <li>
            <strong>Program Certificate for Strategic Practical Tax Compliance</strong>
            <p>Certificate: Awarded on July 2023</p>
            <p>CPD Hours Awarded: 15</p>
        </li>
        <li>
            Kshs.<br>
            89,850. 00
        </li>
        <li>Jul 21,<br>
            2023</li>
        <li>Paid</li>
    </ul>
    <ul class="d-flex justify-content-between shadow-sm rounded align-items-center p-3 border border-dark mb-5">
        <li>
            <strong>Program Certificate for Strategic Practical Tax Compliance</strong>
            <p>Certificate: Awarded on July 2023</p>
            <p>CPD Hours Awarded: 15</p>
        </li>
        <li>
            Kshs.<br>
            89,850. 00
        </li>
        <li>Jul 21,<br>
            2023</li>
        <li>Paid</li>
    </ul>
    <ul class="d-flex justify-content-between shadow-sm rounded align-items-center p-3 border border-dark mb-5">
        <li>
            <strong>Program Certificate for Strategic Practical Tax Compliance</strong>
            <p>Certificate: Awarded on July 2023</p>
            <p>CPD Hours Awarded: 15</p>
        </li>
        <li>
            Kshs.<br>
            89,850. 00
        </li>
        <li>Jul 21,<br>
            2023</li>
        <li>Paid</li>
    </ul>
    <ul class="d-flex justify-content-between shadow-sm rounded align-items-center p-3 border border-dark mb-5">
        <li>
            <strong>Program Certificate for Strategic Practical Tax Compliance</strong>
            <p>Certificate: Awarded on July 2023</p>
            <p>CPD Hours Awarded: 15</p>
        </li>
        <li>
            Kshs.<br>
            89,850. 00
        </li>
        <li>Jul 21,<br>
            2023</li>
        <li>Paid</li>
    </ul>
</div>

@endsection