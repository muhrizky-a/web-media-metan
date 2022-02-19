@extends("admin.master.master")
@section('title')
{{ $categories->name}} Archives
@endsection

@section('style')
<link href="{{ asset('css/custom-card.css') }}" rel="stylesheet">
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Artikel <strong>{{ $categories->name}}</strong></h1>
        <div class="action">
            <a href="{{ route('admin.category.update', $categories) }}" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Edit Kategori</a>
            <form class="d-sm-inline-block" action="{{ route('delete.category', $categories) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger shadow-sm" 
                    onclick="return confirm('Apakah anda yakin ingin menghapus kategori ini?');" 
                    title={{ count($categories->article) ? "Kategori-harus-memiliki-0-artikel-agar-dapat-dihapus" : 'Hapus-Kategori' }}
                    
                    {{ count($categories->article) ? "disabled" : "" }}>
                    <i class="fas fa-trash fa-sm text-white-50"></i> Hapus Kategori
                </button>
            </form>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        @foreach( $categories->article->reverse() as $row)

        <div class="col-12">
            <div class="card mb-3 horizontal-card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('/img/article/'.$row->image_url) }}" class="img-fluid rounded-start" alt="Tak Penuhi Syarat, Pemerintah Tolak 460 RKAB Perusahaan Tambang">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('admin.article.detail', $row->id) }}">{{ $row->title }}</a></h5>
                            <small class="card-text"><a href="{{ route('admin.category.list', $row->category_id) }}" class="tags">{{ $row->category->name}}</a></small>
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
            {{-- {{ $categories->article->links("pagination::bootstrap-4") }} --}}
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection