@extends("master.master")

@section('title')
ESDM Ajak Kementerian dan Lembaga Percepat Konversi Kendaraan Listrik
@endsection

@section('style')
<link href="{{ asset('css/article.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom-card.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container">
    <div class="row">
        <div class="col-8 article">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('category.page', $article_detail->category_link) }}">{{ $article_detail->category }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ESDM Ajak Kementerian dan Lembaga Percepat Konversi Kendaraan Listrik</li>
                </ol>
            </nav>
            <div class="article-tags">
                <a href="#" class="tags bg-dark">{{ $article_detail->category }}</a>
            </div>
            <div class="article-header">
                <h1>{{ $article_detail->title }}</h1>
                <div class="article-meta">
                    <span class="meta-author"><a href="#">Admin</a> - </span>
                    <span class="meta-date">{{ $article_detail->formated_created_date }}</span>
                </div>
            </div>

            <hr>
            <div class="article-content">
                <div class="article-image">
                    <img src="https://www.tambang.co.id/wp-content/uploads/2020/01/menteri-esdm-arifin-tasrif-800x445-768x427.jpg" alt="Image">
                </div>

                <p>{!! nl2br(e($article_detail->content)) !!}</p>
            </div>
            <div class="article-footer">
                <hr>
                <div class="author-box">
                    <a href="https://www.tambang.co.id/author/muflihun-hidayat/">
                        <img src="https://secure.gravatar.com/avatar/cd9506ddb314859eba078c3549b6bc8a?s=96&d=mm&r=g" width="96px" height="96px">
                    </a>
                    <div class="desc">
                        <div class="td-author-name vcard author"><span class="fn"><a href="https://www.tambang.co.id/author/muflihun-hidayat/">muflihun hidayat</a></span></div>
                        <div class="td-author-description"></div>
                        <div class="td-author-social"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="news-category related-articles">
                <h3>Artikel Terkait</h3>
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

</div>

<!-- /.container-fluid -->
@endsection