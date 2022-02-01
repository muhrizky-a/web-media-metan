@extends("master.master")

@section('title')
Batubara Archives
@endsection

@section('style')
<link href="{{ asset('css/category.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom-card.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="header container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Batubara</li>
        </ol>
    </nav>
    <div class="article-header">
        <h3>BATU BARA</h3>
    </div>
</div>



<div class="home-news main-news card-group">
    <div class="card grid-card image-card bg-dark text-white">
        <img src="https://www.tambang.co.id/wp-content/uploads/2022/01/WhatsApp-Image-2022-01-24-at-16.21.40-537x360.jpeg" class="card-img" alt="Menteri Bahlil Sebut 85 Persen Pekerja Proyek DME Berasal dari Dalam Negeri">
        <div class="card-img-overlay">
            <h5 class="card-title">Menteri Bahlil Sebut 85 Persen Pekerja Proyek DME Berasal dari Dalam Negeri</h5>
        </div>
    </div>
    <div class="card grid-card image-card bg-dark text-white">
        <img src="https://www.tambang.co.id/wp-content/uploads/2022/01/WhatsApp-Image-2022-01-24-at-16.21.40-537x360.jpeg" class="card-img" alt="Menteri Bahlil Sebut 85 Persen Pekerja Proyek DME Berasal dari Dalam Negeri">
        <div class="card-img-overlay">
            <h5 class="card-title">Menteri Bahlil Sebut 85 Persen Pekerja Proyek DME Berasal dari Dalam Negeri</h5>
        </div>
    </div>
</div>
<div class="home-news container">
    <div class="row">
        <div class="col-8">
            <div class="news-category">
                <div class="card mb-3 horizontal-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.tambang.co.id/wp-content/uploads/2015/05/indroyono.jpg" class="img-fluid rounded-start" alt="Pemerintah Kejar Eksplorasi Sektor Migas">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Pemerintah Kejar Eksplorasi Sektor Migas</h5>
                                <small class="card-text"><a href="#" class="tags">REGULASI</a></small>
                                <p class="card-text">Jakarta-TAMBANG. Salah satu yang menjadi perhatian pemerintah di sektor migas adalah kegiatan eksplorasi. Menteri Koordinator Kemaritiman Indroyono Soesilo mewakili Presiden Joko Widodo menegaskan bahwa...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 horizontal-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.tambang.co.id/wp-content/uploads/2021/05/PGN-Gas-Bumi-640x433.jpg" class="img-fluid rounded-start" alt="PGN Tetap Lanjutkan Proyek Interkoneksi Pipa SSWJ-West Java Area">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">PGN Tetap Lanjutkan Proyek Interkoneksi Pipa SSWJ-West Java Area</h5>
                                <p class="card-text"><a href="#" class="tags bg-dark">REGULASI</a></p>
                                <p class="card-text">Jakarta,TAMBANG,- Subholding Gas PT Perusahaan Gas Negara Tbk (PGN kehandalan jaringan maupun pasokan gas bumi tetap terjaga menjelang Idul Fitri 2021. Di sisi lain...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-4 aside bg-gray">

        </div>
    </div>

</div>

<!-- /.container-fluid -->
@endsection