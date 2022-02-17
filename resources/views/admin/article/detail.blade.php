@extends("admin.master.master")
@section('title')
{{ $article_detail->title }}
@endsection

@section('style')
<link href="{{ asset('css/article.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom-card.css') }}" rel="stylesheet">
<style></style>
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <a href="{{ route('admin.article.update', $article_detail->id) }}" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Edit Artikel</a>
            <form class="d-sm-inline-block" action="{{ route('delete.article', $article_detail) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger shadow-sm" onclick="return confirm('Apakah anda yakin ingin menghapus artikel ini?');"><i class="fas fa-trash fa-sm text-white-50"></i> Hapus Artikel</buton>
            </form>
            
        </div>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('category.page', $article_detail->category->link) }}">{{ $article_detail->category->name }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $article_detail->title }}</li>
        </ol>
    </nav>


    <!-- Content Row -->
    <div class="row">

        <div class="col-12">
            <div class="article-header">
                <h3>{{ $article_detail->title }}</h3>
                <div class="article-meta">
                    <span class="meta-author"><a href="#">{{ $article_detail->journalist->name }}</a> - </span>
                    <span class="meta-date">{{ $article_detail->formated_created_date }}</span>
                </div>
            </div>

            <hr>
            <div class="article-content">
                <div class="article-image">
                    <img src="{{ asset('img/article/'.$article_detail->image_url) }}" alt="{{ $article_detail->image_caption }}">
                    <p style="text-align: end;">{{ $article_detail->image_caption }}</p>
                </div>

                <p>{!! nl2br(e($article_detail->content)) !!}</p>
            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->
@endsection