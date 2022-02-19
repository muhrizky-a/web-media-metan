@extends("admin.master.master")

@section('title')
Edit Artikel
@endsection

@section('style')
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Artikel</h1>

    </div>

    <!-- Content Row -->
    <form class="row" action="{{ route('update.article', $article_detail) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="col-12">
            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="title" class="form-control" placeholder="Judul Berita" required value="{{ $article_detail->title }}">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>Kategori</label>
                <select name="category" class="form-control">

                    @foreach($categories as $row)
                    <option value="{{ $row->id }}" {{ $row->id == ($article_detail->category->id ?? -1) ? "selected" : "" }}>{{ $row->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Wartawan / Penulis</label>
                <select name="journalist" class="form-control">
                    @foreach($journalists as $row)
                    <option value="{{ $row->id }}" {{ $row->id == $article_detail->journalist->id ? "selected" : "" }}>{{ $row->name }}</option>
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
                <input type="file" accept="image/png, image/gif, image/jpeg, image/jpg, image/bmp" name="image" class="form-control">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Caption Foto Artikel</label>
                <input type="text" name="image-caption" class="form-control" placeholder="Caption" required value="{{ $article_detail->image_caption }}">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Isi Konten Berita</label>
                <textarea class="form-control" name="content" placeholder="Isi Konten Berita" required>{{ $article_detail->content }}</textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</div>

@endsection