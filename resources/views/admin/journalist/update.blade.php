@extends("admin.master.master")

@section('title')
Edit Data Wartawan
@endsection

@section('style')
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Wartawan</h1>
    </div>

    <!-- Content Row -->
    <form class="row" action="{{ route('update.journalist', $journalist)}}" method="post"  enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="col-12">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama Wartawan" required value="{{ $journalist->name }}">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="address" class="form-control" rows="5">{{ $journalist->address }}</textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email Wartawan" required value="{{ $journalist->email }}">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Kontak</label>
                <input type="number" name="contact" class="form-control" placeholder="Kontak Wartawan" required value="{{ $journalist->contact }}">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Foto Profil</label>
                <input type="file"  accept="image/png, image/gif, image/jpeg, image/jpg, image/bmp" name="image" class="form-control">
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