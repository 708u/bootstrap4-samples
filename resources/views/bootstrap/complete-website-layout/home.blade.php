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

{{-- Welcom section --}}
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Built with ease.</h1>
        </div>
    </div>
    <hr>
    <div class="col-12">
        <p class="lead">
            Welcom to my Bootstrap 4 website tutorial! Bootstrap is a free and open-source front-end library with HTML and CSS based designes.
        </p>
    </div>
</div>

{{-- Three Columen Section --}}
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-code"></i>
            <h3>HTML５</h3>
            <p>Built with the latast version of HTML, HTML5.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-bold"></i>
            <h3>Bootstrap 4</h3>
            <p>Built with the latast version of Bootstrap, Bootstrap4.</p>
        </div>
        <div class="col-sm-12 col-md-4">
            <i class="fab fa-css3"></i>
            <h3>CSS3</h3>
            <p>Built with the latast version of CSS, CSS3</p>
        </div>
    </div>
    <hr class="my-4">
</div>

{{-- Two Column Section --}}
<div class="container fluid padding">
    <div class="row padding">
        <div class="col-lg-6">
            <h2>If you build it...</h2>
            <p>The columns will automatically stack on top of each other when the screen is less than 576px wide.</p>
            <p>Resize the browser window to see the effect. Responsive web design has become more important as the amount of mobile traffic now accounts for more than half of total internet traffic.</p>
            <p>It can alos display the web page differently depending on the screen size or viewing device.</p>
            <br>
            <a href="#" class="btn btn-primary">Learn more</a>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('img/desk.png') }}" class="img-fluid">
        </div>
    </div>
</div>
@endsection
