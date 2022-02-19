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
        <div class="col-6">
            <div class="card mb-3 horizontal-card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="py-2 px-2">
                            <img src="{{ asset('img/journalist/'.$row->image_url) }}" width="150px" height="150px" class="img-fluid rounded-start" alt="Foto Profil">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="d-flex flex-row align-items-center justify-content-between">
                                <h5 class="card-title text-warning"><b>{{ $row->name }}</b> <small class="card-text tags rounded">{{ $row->status}}</small></h5>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in  p-0"
                                        aria-labelledby="dropdownMenuLink">
                                        <a href="{{ route('admin.journalist.update', $row) }}">
                                            <button class="dropdown-item bg-primary text-white">
                                                <i class="fas fa-edit fa-sm text-white-50"></i> Edit
                                            </button>
                                        </a>
                                        <a class="dropdown-item bg-danger text-white" href="#" id="btn-delete{{$row->id}}" onclick="document.querySelector('#submit-delete{{$row->id}}').click(); if({{count($row->article)}}){alert('Wartawan harus memiliki 0 artikel agar dapat dihapus.')}"> 
                                            <i class="fas fa-trash fa-sm text-white-50"></i> Hapus
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <form class=" d-sm-inline-block" action="{{ route('delete.journalist', $row) }}" method="post">
                                @csrf
                                @method('DELETE')                                            
                                    <input type="submit" id="submit-delete{{$row->id}}"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus wartawan ini?');"     
                                        {{ count($row->article) ? "disabled" : "" }}
                                        hidden>
                                    
                            </form>
                            
                            <p class="card-text my-0"><b>Alamat: </b>
                                {{ $row->address }}
                            </p>
                            <p class="card-text my-0"><b>Kontak: </b>
                                {{ $row->contact }}
                            </p>
                            <p class="card-text my-0"><b>Email: </b>
                                {{ $row->email }}
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