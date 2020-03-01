@extends('layouts.layout')

@section('head')
@endsection
@section('title')
    Badge Samples
@endsection
@section('content')
{{-- Navigation --}}
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
    <a href="#" class="navbar-brand"><img src="{{ asset('img/logo.png') }}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Service</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Team</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Connect</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Home</a>
            </li>
        </ul>
    </div>
</div>
</nav>

{{-- Image Slider --}}
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/background.png') }}">
            <div class="carousel-caption">
                <h1 class="display-2">Bootstrap</h1>
                <h3>Complete Website Layout</h3>
                <button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
                <button type="button" class="btn btn-primary btn-lg">Get Started</button>
                v
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/background2.png') }}">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/background3.png') }}">
        </div>
    </div>
</div>

{{-- Junbotron --}}
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="xol-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <p class="lead">A web hosting service allows individuals and organizations to make their website accessible  via the World Wide Web.</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 lo-lg 3 col-xl-2">
            <a href="#">
                <button type="button" class="btn btn-outline-secondary">Web Hosting</button>
            </a>
        </div>
    </div>
</div>
@endsection
