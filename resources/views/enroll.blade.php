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
                <h2>Enroll</h2>
                <img src="{{ asset('assets/img/book.svg') }}" style="width: 400px;" />


                <p>Start by enrolling in a program and learn something new</p>
                <a href="/book" class="btn btn-info btn-programs">Explore Programs</a>

            </div>

        </div>


    </div>
</main>