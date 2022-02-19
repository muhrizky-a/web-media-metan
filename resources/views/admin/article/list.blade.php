@extends("admin.master.master")
@section('title')
Daftar Artikel
@endsection

@section('style')
<link href="{{ asset('css/custom-card.css') }}" rel="stylesheet">
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Artikel</h1>
        <a href="{{ route('admin.article.insert') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        @foreach($articles as $row)
        
        <div class="col-12">
            <div class="card mb-3 horizontal-card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('/img/article/'.$row->image_url) }}" class="img-fluid rounded-start" alt="Tak Penuhi Syarat, Pemerintah Tolak 460 RKAB Perusahaan Tambang">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('admin.article.detail', $row->id) }}">{{ $row->title }}</a></h5>

                            <small class="card-text"><a href="{{ $row->category ? route('admin.category.detail', $row->category->id ) : route('admin.category.list' ) }}" class="tags">{{ $row->category->name ?? 'Uncategorized'}}</a></small>
                            <hr>
                            <p class="card-text">{{ $row->content }}
                                <a href="{{ route('article.detail', $row) }}">Selengkapnya</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-12">
            {{ $articles->links("pagination::bootstrap-4") }}
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection