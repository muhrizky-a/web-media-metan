@extends("admin.master.master")
@section('title')
Kategori Artikel
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kategori Artikel</h1>
        <a href="{{ route('admin.category.insert') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah</a>
    </div>

    <!-- Content Row -->
    <div class="d-flex">
        @foreach($categories as $row)
        <div class="card mx-2 my-2">
            <a href="{{ route('admin.category.detail', $row) }}"  class="card-header card-link">
                {{ $row->name }}                
            </a>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{ count($row->article)}} Artikel</li>
              
            </ul>
          </div>
        
        @endforeach
    </div>
</div>
<!-- /.container-fluid -->
@endsection