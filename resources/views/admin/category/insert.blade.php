@extends("admin.master.master")

@section('title')
Buat Kategori
@endsection

@section('style')
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Kategori</h1>
    </div>

    <!-- Content Row -->
    <form class="row" action="{{ route('create.category')}}" method="post">
        @csrf


        <div class="col-12">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama Kategori">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->
@endsection