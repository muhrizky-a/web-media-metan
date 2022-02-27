@extends("home.master.master")

@section('title')
    {{ $page->title }}
@endsection

@section('style')
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">
    <link href="{{ asset('css/search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-card.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Begin Page Content -->

    <div class="container">

        <div class="header container">
            <h3>{{ $page->title }}</h3>
        </div>
        <div class="container">
            @php
                echo $page->content;
            @endphp
            <br>
        </div>

    </div>


@endsection
