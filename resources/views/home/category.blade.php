@extends("home.master.master")

@section('title')
    {{ $category->name }} Archives
@endsection

@section('style')
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-card.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="header container-lg">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
            </ol>
        </nav>
        <div class="article-header">
            <h3>{{ $category->name }}</h3>
        </div>
    </div>



    <div class="home-news newest-category-news card-group">
        @foreach ($article_thubnails as $row)
            <div class="card grid-card image-card">
                <a href="{{ route('article.detail', $row->link) }}" class="">
                    <img src="{{ asset('img/article/' . $row->image_url) }}" class="card-img" alt="{{ $row->title }}">
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{ $row->title }}</h5>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="news-category">

                @foreach ($articles as $row)
                    <div class="card mb-3 horizontal-card">
                        <div class="row g-0">
                            <div class="col-sm-4">
                                <img src="{{ asset('img/article/' . $row->image_url) }}" class="img-fluid rounded-start"
                                    alt="{{ $row->title }}">
                            </div>
                            <div class="col-sm-8">
                                <div class="card-body">
                                    <h5 class="card-title"><a
                                            href="{{ route('article.detail', $row->link) }}">{{ $row->title }}</a>
                                    </h5>
                                    <small class="card-text"><a href="{{ route('category.page', $category->link) }}"
                                            class="tags">{{ $category->name }}</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    {{ $articles->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        <x-sidebar />
    </div>



    <!-- /.container-fluid -->
@endsection
