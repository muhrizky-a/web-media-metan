@extends("admin.master.master")
@section('title')
Wartawan
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Wartawan</h1>
        <a href="{{ route('admin.journalist.insert') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        @foreach($journalists as $row)
        <div class="col-12">
            <div class="card mb-3 horizontal-card">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="{{ asset('img/journalist/'.$row->image_url) }}" height="100px" class="rounded-start" alt="Foto Profil">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('admin.article.detail', $row->id) }}">{{ $row->name }} <small class="card-text tags rounded">{{ $row->status}}</small></a></h5>
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
    
</div>
<!-- /.container-fluid -->
@endsection