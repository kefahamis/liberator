@extends('layouts.master')
{{-- Nav --}}
@include('layouts.nav')
{{-- SideNav --}}
@include('layouts.sidenav')
<main class="content">
    {{-- TopBar --}}
    @include('layouts.topbar')
    <div class="d-flex p-5">
        <div class="d-flex justify-content-start align-items-start align-content-start flex-column ">
            <div class="d-flex justify-content-start align-items-start align-content-start flex-column">
                <h2>Explore</h2>
                <div class="search">
                    <input type="text" class="form-control" placeholder="Search catalog">
                </div>

            </div>
            <div class="d-flex justify-content-between navs">
                    <p>Topics</p>
                    <p><a href="#">See all</a></p>
            </div>
            <div class="d-flex justify-content-start">
                <a href="#" class="btn btn-info p-2 ms-2">Business</a>
                <a href="#" class="btn btn-success p-2 ms-2">Leadership</a>
                <a href="#" class="btn btn-danger p-2 ms-2">Business</a>
            </div>

        </div>
     

    </div>
</main>