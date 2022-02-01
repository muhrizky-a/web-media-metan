@extends("master.master")

@section('title')
Hasil pencarian testing123
@endsection

@section('style')
<link href="{{ asset('css/category.css') }}" rel="stylesheet">
<link href="{{ asset('css/search.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom-card.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container">
<div class="row">
    <div class="col-8">
        <div class="header container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Batubara</li>
                </ol>
            </nav>
            <h3><span id="search-word">test</span> - Hasil Pencarian</h3>

        </div>
        <div class="container">
            <div class="search-form">
                <form class="form-inline my-2 my-lg-0 d-flex">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Cari</button>
                </form>
            </div>
            <div class="search-result my-5">
                <h3 id="search-not-found">Tidak ada hasil untuk pencarian Anda</h3>
                <div class="card-group">
                    <div class="card grid-card">
                        <img src="https://www.tambang.co.id/wp-content/uploads/2014/12/Smelter.jpg" class="card-img-top" alt="Antam Kerjasama ITS untuk Pengolahan Bijih Nikel">
                        <div class="card-body">
                            <h5 class="card-title">Antam Kerjasama ITS untuk Pengolahan Bijih Nikel</h5>
                        </div>
                    </div>
                    <div class="card grid-card">
                        <img src="https://www.tambang.co.id/wp-content/uploads/2015/05/nikel-cina-di-pelabuhan.jpg" class="card-img-top" alt="PT Timah Diduga Buat Laporan Keuangan Fiktif">
                        <div class="card-body">
                            <h5 class="card-title">PT Timah Diduga Buat Laporan Keuangan Fiktif</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 aside bg-gray">

    </div>
</div></div>

@endsection