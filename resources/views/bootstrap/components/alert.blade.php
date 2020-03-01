@extends('layouts.layout')

@section('head')
@endsection
@section('title')
    Alert Samples
@endsection
@section('content')
    <div class="container">
        <h1>Alert samples</h1>
        <h2>Alert</h2>
        <div class="alert alert-primary" role="alert">
            A simple primary alert with <a href="#">an example link</a>. Give it a click if you like.
        </div>
        <h2>Alert with link color</h2>
        <div class="alert alert-primary" role="alert">
            A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-secondary" role="alert">
            A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-success" role="alert">
            A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-danger" role="alert">
            A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-warning" role="alert">
            A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-info" role="alert">
            A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-light" role="alert">
            A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-dark" role="alert">
            A simple dark alert—check <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <h2>Additional Content</h2>
        <div class="alert alert-dark" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        </div>
        <h2>Dismissing</h2>
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            A simple dark alert—check <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
    </div>
@endsection
