@extends("admin.master.master")

@section('title')
Buat Artikel
@endsection

@section('style')
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Artikel</h1>

    </div>

    <!-- Content Row -->
    <form class="row" action="{{ route('create.article')}}" method="post"  enctype="multipart/form-data">
        @csrf


        <div class="col-12">
            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="title" class="form-control" placeholder="Judul Berita" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Kategori</label>
                <select name="category" class="form-control">
                    @foreach($category_list as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Wartawan / Penulis</label>
                <select name="journalist" class="form-control">
                    @foreach($journalist_list as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12">
        <hr>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Foto Artikel / Thumbnail</label>
                <input type="file"  accept="image/png, image/gif, image/jpeg, image/jpg, image/bmp" name="image" class="form-control" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Caption Foto Artikel</label>
                <input type="text" name="image-caption" class="form-control" placeholder="Caption" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Isi Konten Berita</label>
                <textarea class="form-control" name="content" placeholder="Isi Konten Berita" required></textarea>
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