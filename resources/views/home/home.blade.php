@extends("home.master.master")

@section('title')
    Home
@endsection

@section('style')
    <link href="{{ asset('css/custom-card.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loading.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="home-news main-news">
        {{-- <div class="card bg-dark text-white d-flex">
            <img src="https://www.tambang.co.id/wp-content/uploads/2022/01/WhatsApp-Image-2022-01-24-at-16.21.40-537x360.jpeg" class="card-img" alt="Menteri Bahlil Sebut 85 Persen Pekerja Proyek DME Berasal dari Dalam Negeri">
            <div class="card-img-overlay">
                <h5 class="card-title">Menteri Bahlil Sebut 85 Persen Pekerja Proyek DME Berasal dari Dalam Negeri</h5>
            </div>
        </div> --}}

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @php
                    $i = 0;
                @endphp
                @foreach ($newest_articles as $article)
                    <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                        @php
                            $i = 1;
                        @endphp
                        <img class="d-block w-100" src="{{ asset('/img/article/' . $article->image_url) }}"
                            alt="{{ $article->title }}">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><a class="link"
                                    href="{{ route('article.detail', $article->link) }}">{{ $article->title }}</a></h5>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    <div class="home-news container">
        <div class="row">
            <div class="col-lg-8">
                @foreach ($article_groups as $article_group)
                    <div class="news-category">
                        @if (count($article_group->article) > 0)
                            <h3>{{ $article_group->name }}</h3>
                            @foreach ($article_group->article->sortByDesc('created_at')->take(3) as $article)
                                <div class="card mb-3 horizontal-card">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('/img/article/' . $article->image_url) }}"
                                                class="img-fluid rounded-start" alt="{{ $article->title }}">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <a
                                                        href="{{ route('article.detail', $article->link) }}">{{ $article->title }}</a>
                                                </h5>
                                                <small class="card-text"><a href=""
                                                        class="tags">{{ $article_group->name }}</a></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                @endforeach
            </div>
            <x-sidebar />

        </div>
        <div class="news-category">
            <h3>ENERGI</h3>
            <div class="card-group">
                <div class="card grid-card">
                    <img src="https://www.tambang.co.id/wp-content/uploads/2014/12/Smelter.jpg" class="card-img-top"
                        alt="Antam Kerjasama ITS untuk Pengolahan Bijih Nikel">
                    <div class="card-body">
                        <h5 class="card-title">Antam Kerjasama ITS untuk Pengolahan Bijih Nikel</h5>
                    </div>
                </div>
                <div class="card grid-card">
                    <img src="https://www.tambang.co.id/wp-content/uploads/2015/05/nikel-cina-di-pelabuhan.jpg"
                        class="card-img-top" alt="PT Timah Diduga Buat Laporan Keuangan Fiktif">
                    <div class="card-body">
                        <h5 class="card-title">PT Timah Diduga Buat Laporan Keuangan Fiktif</h5>
                    </div>
                </div>
                <div class="card grid-card">
                    <img src="https://www.tambang.co.id/wp-content/uploads/2021/12/Halmahera-Persada-Lygend-HARITA-640x360.jpg"
                        class="card-img-top" alt="Harita Operasikan Lini Kedua Pabrik Bahan Baku Baterai Kendaraan Listrik">
                    <div class="card-body">
                        <h5 class="card-title">Harita Operasikan Lini Kedua Pabrik Bahan Baku Baterai Kendaraan Listrik</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="loading bg-dark">
        <div class="loading-logo">
            <img src="{{ asset('img/logo-metan-gold.png') }}" alt="PT. Media Tambang Production">
        </div>
    </div>

    <script>
        $(document).ready(function() {

            //Fade loading screen
            setTimeout(() => {
                $(".loading").fadeTo("slow", 0);
            }, 1500);

            //Hide loading screen
            setTimeout(() => {
                $(".loading").prop("hidden", 1);
            }, 2500);
        });

    </script>
    <!-- /.container-fluid -->
@endsection
