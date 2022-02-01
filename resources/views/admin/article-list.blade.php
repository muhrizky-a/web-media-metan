@extends("admin.master.master")
@section('title')
Daftar Artikel
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Artikel</h1>
        <a href="{{ route('admin.article.insert') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Tambah</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        @foreach($article_list as $row)
        <div class="col-12">
            <div class="card card-default" style="margin-bottom: 20px;">
                <div class="card-header">
                    <h3>{{ $row->title }}</h3>
                </div>
                <div class="card-body">
                    {{ $row->content }}
                </div>
                <div class="card-footer">
                    <a href="{{ route('article.detail', $row->link) }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-12">
            {{ $article_list->links("pagination::bootstrap-4") }}
        </div>
    </div>
    

</div>
<!-- /.container-fluid -->
@endsection