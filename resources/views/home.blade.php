@extends("master.master")

@section('title')
Home
@endsection

@section('style')
<link href="{{ asset('css/custom-card.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="home-news main-news">
    <!-- <div class="card bg-dark text-white d-flex">
        <img src="https://www.tambang.co.id/wp-content/uploads/2022/01/WhatsApp-Image-2022-01-24-at-16.21.40-537x360.jpeg" class="card-img" alt="Menteri Bahlil Sebut 85 Persen Pekerja Proyek DME Berasal dari Dalam Negeri">
        <div class="card-img-overlay">
            <h5 class="card-title">Menteri Bahlil Sebut 85 Persen Pekerja Proyek DME Berasal dari Dalam Negeri</h5>
        </div>
    </div> -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://www.tambang.co.id/wp-content/uploads/2022/01/WhatsApp-Image-2022-01-24-at-16.21.40-537x360.jpeg" alt="Menteri Bahlil Sebut 85 Persen Pekerja Proyek DME Berasal dari Dalam Negeri">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Menteri Bahlil Sebut 85 Persen Pekerja Proyek DME Berasal dari Dalam Negeri</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.tambang.co.id/wp-content/uploads/2020/01/menteri-esdm-arifin-tasrif-800x445-768x427.jpg" alt="Second slide">
                
                <div class="carousel-caption d-none d-md-block">
                    <h5>ESDM Ajak Kementerian dan Lembaga Percepat Konversi Kendaraan Listrik</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="home-news container">
    <div class="row">
        <div class="col-8">
            <div class="news-category">
                <h3>BATU BARA</h3>
                <div class="card mb-3 horizontal-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.tambang.co.id/wp-content/uploads/2021/10/Archi-Indonesia-Tambang-Emas-Toka-Tidung-1-640x427.jpg" class="img-fluid rounded-start" alt="Tak Penuhi Syarat, Pemerintah Tolak 460 RKAB Perusahaan Tambang">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Tak Penuhi Syarat, Pemerintah Tolak 460 RKAB Perusahaan Tambang</h5>
                                <small class="card-text"><a href="#" class="tags">BATU BARA</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 horizontal-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.tambang.co.id/wp-content/uploads/2022/01/presidenri.go_.id-24012022081512-61edfda09ea9d2.60533111-e1642986945528-512x288-1.jpeg" class="img-fluid rounded-start" alt="Kunjungi Sumsel, Presiden Akan Groundbreaking Proyek Hilirisasi Batu Bara">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Kunjungi Sumsel, Presiden Akan Groundbreaking Proyek Hilirisasi Batu Bara</h5>
                                <p class="card-text"><a href="#" class="tags bg-dark">BATU BARA</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news-category">
                <h3>MINERAL</h3>
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
                    <div class="card grid-card">
                        <img src="https://www.tambang.co.id/wp-content/uploads/2021/12/Halmahera-Persada-Lygend-HARITA-640x360.jpg" class="card-img-top" alt="Harita Operasikan Lini Kedua Pabrik Bahan Baku Baterai Kendaraan Listrik">
                        <div class="card-body">
                            <h5 class="card-title">Harita Operasikan Lini Kedua Pabrik Bahan Baku Baterai Kendaraan Listrik</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 aside bg-gray">

        </div>
    </div>
    <div class="news-category">
        <h3>ENERGI</h3>
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
            <div class="card grid-card">
                <img src="https://www.tambang.co.id/wp-content/uploads/2021/12/Halmahera-Persada-Lygend-HARITA-640x360.jpg" class="card-img-top" alt="Harita Operasikan Lini Kedua Pabrik Bahan Baku Baterai Kendaraan Listrik">
                <div class="card-body">
                    <h5 class="card-title">Harita Operasikan Lini Kedua Pabrik Bahan Baku Baterai Kendaraan Listrik</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="news-category">
        <h3>REGULASI</h3>
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
</div>

<!-- /.container-fluid -->
@endsection