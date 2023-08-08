@extends('layouts.master')
{{-- Nav --}}
@include('layouts.nav')
{{-- SideNav --}}
@include('layouts.sidenav')
<main class="content">
    {{-- TopBar --}}
    @include('layouts.topbar')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center align-content-center flex-column lib-wrapper">
            <div class="d-flex justify-content-center align-items-center align-content-center flex-column">
                <h2>Downloads</h2>
                <img src="{{ asset('assets/img/solar_download-broken.svg') }}" style="width: 400px;" />


                <h5>Download anywhere, anytime</h5>
                <p>You can download your program/training materials here.

                    You can download the details of your team based
                    on the programs they attended.

                    Your downloads will show up here</p>
                <a href="/book" class="btn btn-info btn-programs">Find a document to download </a>

            </div>

        </div>


    </div>
</main>