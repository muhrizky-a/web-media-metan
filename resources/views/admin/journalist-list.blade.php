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
    <div class="d-flex">
        @foreach($journalist_list as $row)
        <div style="padding: 5px;">
        <h3><a href="{{ route('journalist.posts', $row->link) }}" class="btn btn-primary">{{ $row->name }}</a></h3>
        </div>
        @endforeach
    </div>
</div>
<!-- /.container-fluid -->
@endsection