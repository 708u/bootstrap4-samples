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
@endsection
