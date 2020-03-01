@extends('layouts.layout')

@section('head')
@endsection
@section('title')
    Badge Samples
@endsection
@section('content')
    <div class="container">
        <h1>Badge</h1>
            <p>{{ "<h1>Example heading <span class=\"badge badge-secondary\">New</span></h1>" }}</p>
        <div class="container">
            <h1>Example heading <span class="badge badge-secondary">New</span></h1>
            <h2>Example heading <span class="badge badge-secondary">New</span></h2>
            <h3>Example heading <span class="badge badge-secondary">New</span></h3>
            <h4>Example heading <span class="badge badge-secondary">New</span></h4>
            <h5>Example heading <span class="badge badge-secondary">New</span></h5>
            <h6>Example heading <span class="badge badge-secondary">New</span></h6>
        </div>
        <h1>Badge in button</h1>
        <div class="container">
            <button type="button" class="btn btn-primary">
                notes <span class="badge badge-dark">1</span>
            </button>
        </div>
        <h1>Contextual variations</h1>
        <div class="container">
            <span class="badge badge-primary">Primary</span>
            <span class="badge badge-secondary">Secondary</span>
            <span class="badge badge-success">Success</span>
            <span class="badge badge-danger">Danger</span>
            <span class="badge badge-warning">Warning</span>
            <span class="badge badge-info">Info</span>
            <span class="badge badge-light">Light</span>
            <span class="badge badge-dark">Dark</span>
        </div>
        <h1>Pill badges</h1>
        <div class="container">
            <span class="badge badge-pill badge-primary">Primary</span>
            <span class="badge badge-pill badge-secondary">Secondary</span>
            <span class="badge badge-pill badge-success">Success</span>
            <span class="badge badge-pill badge-danger">Danger</span>
            <span class="badge badge-pill badge-warning">Warning</span>
            <span class="badge badge-pill badge-info">Info</span>
            <span class="badge badge-pill badge-light">Light</span>
            <span class="badge badge-pill badge-dark">Dark</span>
        </div>
        <h1>Links</h1>
            <p>aタグに適用するとホバー時にフォーカスする</p>
            {{ "<a href=\"#\" class=\"badge badge-primary\">Primary</a> "}}
        <div class="container">
            <a href="#" class="badge badge-primary">Primary</a>
            <a href="#" class="badge badge-secondary">Secondary</a>
            <a href="#" class="badge badge-success">Success</a>
            <a href="#" class="badge badge-danger">Danger</a>
            <a href="#" class="badge badge-warning">Warning</a>
            <a href="#" class="badge badge-info">Info</a>
            <a href="#" class="badge badge-light">Light</a>
            <a href="#" class="badge badge-dark">Dark</a>
        </div>
    </div>
@endsection
