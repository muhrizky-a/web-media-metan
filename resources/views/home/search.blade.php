@extends("home.master.master")

@section('title')
    Hasil pencarian testing123
@endsection

@section('style')
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">
    <link href="{{ asset('css/search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-card.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Begin Page Content -->

    <div class="row">
        <div class="col-lg-8" style="padding: 20px;">
            <div class="header">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Batubara</li>
                    </ol>
                </nav>
                <h3><span id="search-word">{{ $search }}</span> - Hasil Pencarian</h3>

            </div>
            <div class="search-form">
                <form class="form-inline my-2 my-lg-0 d-flex" action="{{ route('search') }}">
                    <input class="form-control" type="text" name="q" placeholder="Cari Artikel" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Cari</button>
                </form>
            </div>
            <div class="search-result my-5">

                @if ($articles->isEmpty())
                    <h3 id="search-not-found">Tidak ada hasil untuk pencarian Anda</h3>
                @else

                    @foreach ($articles as $row)
                        <div class="card mb-3 horizontal-card">
                            <div class="row g-0">
                                <div class="col-sm-4">
                                    <img src="{{ asset('img/article/' . $row->image_url) }}"
                                        class="img-fluid rounded-start" alt="{{ $row->title }}">
                                </div>
                                <div class="col-sm-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a
                                                href="{{ route('article.detail', $row->link) }}">{{ $row->title }}</a>
                                        </h5>
                                        <small class="card-text"><a
                                                href="{{ route('category.page', $row->category->link) }}"
                                                class="tags">{{ $row->category->name }}</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @endif

            </div>

        </div>
        <x-sidebar />
    </div>


@endsection
