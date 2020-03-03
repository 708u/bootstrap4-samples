@extends('layouts.layout')

@section('head')
@endsection
@section('title')
    Bootstrap4 samples
@endsection
@section('content')
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
<div class="container-fluid">
    <a href="#" class="navbar-brand">Bootstrap4 samples</a>
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

{{-- Junbotron --}}
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-12">
            <p class="lead">Bootstrap4の実装サンプル一覧を管理する</p>
        </div>
    </div>
</div>

<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Complete website layout</div>
                <div class="card-body">
                    <p class="card-text">
                        bootstrap4のチュートリアル動画を参考に実装
                    </p>
                    <p class="card-text">
                        Tutorial from <a href="https://www.youtube.com/watch?v=9cKsq14Kfsw">here. </a>
                    </p>
                    <a href="{{ route('bootstrap.complete-website-layout.home') }}" class="btn btn-outline-secondary">See Sample</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Components Samples</div>
                <div class="card-body">
                    <h4 class="card-title">コンポーネント凡例</h4>
                    <p class="card-text">bootstrap4公式ドキュメントの実装</p>
                    <a href="{{ route('bootstrap.components.alert') }}" class="btn btn-outline-secondary">See Sample</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
