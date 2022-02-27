@extends("admin.master.master")

@section('meta')
    <meta name="csrf_token" content="{{ csrf_token() }}">
@endsection

@section('title')
    {{ $page->title }}
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/trix.css') }}">
@endsection

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $page->title }}</h1>
        </div>

        <form method="post" action="{{ route('admin.update.footer', $page) }}">
            @csrf
            @method('PUT')

            <input id="x" type="hidden" name="content" value="{{ $page->content }}" />
            <trix-editor input="x"></trix-editor>
            <input type="submit" name="submit" value="Submit" />
        </form>

    </div>
    <script src="{{ asset('js/trix.js') }}"></script>
    <script src="{{ asset('js/trix-custom.js') }}"></script>
@endsection
