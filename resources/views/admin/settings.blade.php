@extends("admin.master.master")

@section('title')
    Admin Home
@endsection

@section('style')
@endsection

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pengaturan</h1>

        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">Ubah Kata Sandi</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.change.password') }}">
                                @csrf

                                @foreach ($errors->all() as $error)
                                    <p class="text-danger">{{ $error }}</p>
                                @endforeach

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Kata Sandi
                                        Sekarang</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="current_password"
                                            autocomplete="current-password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Kata Sandi
                                        Baru</label>

                                    <div class="col-md-6">
                                        <input id="new_password" type="password" class="form-control" name="new_password"
                                            autocomplete="current-password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Konfirmasi Kata
                                        Sandi Baru</label>

                                    <div class="col-md-6">
                                        <input id="new_confirm_password" type="password" class="form-control"
                                            name="new_confirm_password" autocomplete="current-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Ubah Kata Sandi
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
