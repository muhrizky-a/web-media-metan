@extends("admin.master.master")

@section('title')
    Buat Artikel
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/trix.css') }}">
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Buat Artikel</h1>
        </div>

        <!-- Content Row -->
        <form class="row" action="{{ route('create.article') }}" method="post" enctype="multipart/form-data">

            @csrf

            @if ($categories->isEmpty() || $journalists->isEmpty())
                <div class="col-12">
                    <div class="form-group">
                        <div class="container-fluid bg-danger text-light p-2">

                            Silahkan buat data
                            <b>
                                @if ($categories->isEmpty() && $journalists->isEmpty())
                                    Kategori dan Wartawan
                                @elseif ( $categories->isEmpty() )
                                    Kategori
                                @elseif ( $journalists->isEmpty() )
                                    Wartawan
                                @endif
                            </b>
                            terlebih dahulu</b>
                        </div>
                    </div>
                </div>
            @endif

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
                        @foreach ($categories as $row)
                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Wartawan / Penulis</label>
                    <select name="journalist" class="form-control">
                        @foreach ($journalists as $row)
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
                    <input type="file" accept="image/png, image/gif, image/jpeg, image/jpg, image/bmp" name="image"
                        class="form-control" required>
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
                    <input id="x" type="hidden" name="content" required />
                    <trix-editor input="x"></trix-editor>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    @if (!$categories->isEmpty() || !$journalists->isEmpty())
                        <button type="submit" class="btn btn-primary">Submit</button>
                    @endif

                </div>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
@endsection

@section('script')
    <script src="{{ asset('js/trix.js') }}"></script>
    <script src="{{ asset('js/trix-custom.js') }}"></script>
@endsection
