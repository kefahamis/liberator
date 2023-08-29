@extends('layouts.master')
@section('content')
<div class="wrapper">
    <div class="container">
        <ul class="d-flex flex-row gap-5 top-bar">
            <li>For Individuals</li>
            <li>For Business</li>
            <li>For University</li>
        </ul>
    </div>

</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Liberator</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Explore
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Business</a></li>
                <li><a class="dropdown-item" href="#">Data, Excel & Power BI</a></li>
                <li><a class="dropdown-item" href="#">Human Resource</a></li>
                <li><a class="dropdown-item" href="#">Finance and Environmental Social Governance Institute</a></li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- <form class="d-flex ms-auto">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
            <div class="input-group search-wrap ms-auto">
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control" placeholder="What do you want to learn?" />
                </div>
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Find your New Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                        </svg></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg><span>John Doe</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid inner-wrap">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Explore</a></li>
                <li class="breadcrumb-item active" aria-current="page">Business</li>
            </ol>
        </nav>

        <h3>Audit and Business Advisory</h3>
        <ul class="quick-links">
            <li>Leadership And Management</li>
            <li>Finance</li>
            <li>Marketing</li>
            <li>Entreprenuership</li>
            <li>Business Essentials</li>
            <li>Business Strategy</li>
            <li>Operations</li>
            <li>Tax</li>
        </ul>

    </div>

</div>
<div class="container-fluid">
    <div class="container">
        <div class="heading-title">
            <h3>Top Rated Programs</h3>
        </div>
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">


                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- End top rated programs -->
    </div>

</div>
<div class="container-fluid">
    <div class="container">
        <div class="heading-title">
            <h3>Launch Your Career with these Specializations</h3>
        </div>
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">


                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- career optimizations section -->
    </div>

</div>
<div class="container-fluid">
    <div class="container">
        <div class="heading-title">
            <h3>Personalized Specializations for You</h3>
        </div>
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">


                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Personalized specializations end section -->
    </div>

</div>
<div class="container mt-7 mb-5">
    <div class="d-flex flex-row gap-5">
        <div class="card mb-3 shadow-sm">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Accelerate Business <br>Transformation</h5>
                        <p class="card-text">Join our FREE webinar where we get to talk at length about this.
                            <br>
                            You will also get to ask our speaker your questions live during the Q&A session!
                        </p>
                        <button type="button" class="btn btn-primary">Register Now!</button>
                    </div>
                </div>
                <div class="col-md-4 bg-light">
                    <img src="" class="img-fluid rounded-start" alt="">
                </div>

            </div>
        </div>
        <div class="card mb-3 shadow-sm">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Interested in Automating Your<br> Financial Reports?</h5>
                        <p class="card-text">With Liberator for Teams, you can train your employees
                            with world-class content.</p>
                        <button type="button" class="btn btn-primary">Learn More</button>

                    </div>
                </div>
                <div class="col-md-4 bg-light">
                    <img src="" class="img-fluid rounded-start" alt="">
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="heading-title">
            <h3>Popular Beginner Programs for New Careers</h3>
        </div>
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">


                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Popular beginners end section -->
    </div>

</div>

<div class="container">
    <ul class="topics-links">
        <li class="shadow-sm border border-1 border-dark">Project Management</li>
        <li class="shadow-sm border border-1 border-dark">Finance</li>
        <li class="shadow-sm border border-1 border-dark">Marketing</li>
        <li class="shadow-sm border border-1 border-dark">Entreprenuership</li>
        <li class="shadow-sm border border-1 border-dark">Business Essentials</li>
        <li class="shadow-sm border border-1 border-dark">Business Strategy</li>
        <li class="shadow-sm border border-1 border-dark">Operations</li>
        <li class="shadow-sm border border-1 border-dark">Tax</li>
    </ul>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="heading-title">
            <h3>Story-telling: Data Analysis with Excel</h3>
        </div>
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">


                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- story telling -->
    </div>

</div>
<div class="container-fluid">
    <div class="container">
        <div class="heading-title">
            <h3>Communication Skills</h3>
        </div>
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">


                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- communication skills end -->

    </div>

</div>
<div class="container-fluid">
    <div class="container">
        <div class="heading-title">
            <h3>New Business Programs</h3>
        </div>
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">


                    <div class="card-group gap-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <ul class="d-flex align-items-center company-name">
                                <li></li>
                                <li>Capabuil Limited</li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Strategic Practical Tax Compliance</h5>
                                <ul class="d-flex gap-3 achievement-wrap">
                                    <li><img src="{{ asset('assets/img/basil_award-solid.png') }}" alt="Image" width="300" height="250" /></li>
                                    <li>Earn a Certificate<br>Get Accredited</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- New Business Programs end-->
<div class="container-fluid mt-6">
    <div class="container">
        <h4 class="text-center mt-3 mb-5">Frequently Asked Questions about Business</h4>
        <!-- FAQs -->
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        What are the best business programs?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        The best business programs are:
                        <ul>
                            <li>A</li>
                            <li>B</li>
                            <li>C</li>
                            <li>D</li>
                        </ul>

                        These courses provide a wealth of knowledge about different aspects of business management, allowing you to kick start your entrepreneurial journey.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        What are the best business programs for beginners?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        What are the best business programs for beginners?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        What are the best advanced business programs?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        What does it mean to enroll for a business Program?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        What are examples of popular careers in business?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        How can taking business programs on Liberator help my career?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        What skills or experiences do I need to have, before starting to learn business?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        How do I know if learning business is beneficial and right for me? </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        What type of places hire people with a background in business? </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        What are the career paths for someone in business?</button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        What Business Programs are the best for training & up-skilling employees?</button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <p>This FAQ content has been made available for informational purposes only. You are advised to conduct additional research to ensure that the programs and other credentials you pursue meet your personal, professional, and financial goals.</p>
        </div>
    </div>
</div>
@endsection