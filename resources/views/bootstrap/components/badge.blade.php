@extends('layouts.layout')

@section('head')
@endsection
@section('title')
    Badge Samples
@endsection
@section('content')
    <div class="container">
        @component('layouts.sample-card')
            @slot('header', 'Badge Samples')
            @slot('discription', 'それぞれのhタグに合わせてBadgeの大きさが変わる')
            @slot('cardTitle', "<h1>Example heading <span class=\"badge badge-secondary\">New</span></h1>")
            @slot('cardContents')
                <h1 class="card-text">Example heading <span class="badge badge-secondary">New</span></h1>
                <h2 class="card-text">Example heading <span class="badge badge-secondary">New</span></h2>
                <h3 class="card-text">Example heading <span class="badge badge-secondary">New</span></h3>
                <h4 class="card-text">Example heading <span class="badge badge-secondary">New</span></h4>
                <h5 class="card-text">Example heading <span class="badge badge-secondary">New</span></h5>
                <h6 class="card-text">Example heading <span class="badge badge-secondary">New</span></h6>
            @endslot
        @endcomponent

        @component('layouts.sample-card')
            @slot('header', 'Badge in button')
            @slot('discription', 'ボタン内にspanタグでバッチを表示')
            @slot('cardTitle', "<span class=\"badge badge-dark\">1</span>")
            @slot('cardContents')
                <button type="button" class="btn btn-primary">
                    notes <span class="badge badge-dark">1</span>
                </button>
            @endslot
        @endcomponent

        @component('layouts.sample-card')
            @slot('header', 'Contextual variations')
            @slot('discription', "classにbadge名指定で色を変更できる")
            @slot('cardTitle', "<span class=\"badge badge-primary\">Primary</span>")
            @slot('cardContents')
                <span class="badge badge-primary">Primary</span>
                <span class="badge badge-secondary">Secondary</span>
                <span class="badge badge-success">Success</span>
                <span class="badge badge-danger">Danger</span>
                <span class="badge badge-warning">Warning</span>
                <span class="badge badge-info">Info</span>
                <span class="badge badge-light">Light</span>
                <span class="badge badge-dark">Dark</span>
            @endslot
        @endcomponent

        @component('layouts.sample-card')
            @slot('header', 'Pill badges')
            @slot('discription', "バッチの角を丸くする")
            @slot('cardTitle', "<span class=\"badge badge-pill badge-primary\">Primary</span>")
            @slot('cardContents')
                <span class="badge badge-pill badge-primary">Primary</span>
                <span class="badge badge-pill badge-secondary">Secondary</span>
                <span class="badge badge-pill badge-success">Success</span>
                <span class="badge badge-pill badge-danger">Danger</span>
                <span class="badge badge-pill badge-warning">Warning</span>
                <span class="badge badge-pill badge-info">Info</span>
                <span class="badge badge-pill badge-light">Light</span>
                <span class="badge badge-pill badge-dark">Dark</span>
            @endslot
        @endcomponent

        @component('layouts.sample-card')
            @slot('header', 'Links')
            @slot('discription', "aタグに適用するとホバー時にフォーカスする")
            @slot('cardTitle', "<a href=\"#\" class=\"badge badge-primary\">Primary</a> ")
            @slot('cardContents')
                <a href="#" class="badge badge-primary">Primary</a>
                <a href="#" class="badge badge-secondary">Secondary</a>
                <a href="#" class="badge badge-success">Success</a>
                <a href="#" class="badge badge-danger">Danger</a>
                <a href="#" class="badge badge-warning">Warning</a>
                <a href="#" class="badge badge-info">Info</a>
                <a href="#" class="badge badge-light">Light</a>
                <a href="#" class="badge badge-dark">Dark</a>
            @endslot
        @endcomponent
    </div>
@endsection
