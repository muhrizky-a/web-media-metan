@extends("admin.master.master")

@section('title')
Tambah Wartawan
@endsection

@section('style')
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Wartawan</h1>
    </div>

    <!-- Content Row -->
    <form class="row" action="{{ route('create.journalist')}}" method="post"  enctype="multipart/form-data">
        @csrf


        <div class="col-12">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama Wartawan" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Foto Profil</label>
                <input type="file"  accept="image/png, image/gif, image/jpeg, image/jpg, image/bmp" name="image" class="form-control" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="Aktif">Aktif</option>
                    <option value="Non Aktif">Non Aktif</option>
                </select>
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