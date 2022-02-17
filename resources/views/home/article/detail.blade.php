@extends("home.master.master")

@section('title')
{{ $article->title }}
@endsection

@section('style')
<link href="{{ asset('css/article.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom-card.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-8 article">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('category.page', $article->category->link) }}">{{ $article->category->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $article->title }}</li>
                </ol>
            </nav>
            <div class="article-tags">
                <a href="{{ route('category.page', $article->category->link) }}" class="tags bg-dark">{{ $article->category->name }}</a>
            </div>
            <div class="article-header">
                <h3>{{ $article->title }}</h3>
                <div class="article-meta">
                    <span class="meta-author"><a href="#">{{ $article->journalist->name }}</a> - </span>
                    <span class="meta-date">{{ $article->formated_created_date }}</span>
                </div>
            </div>

            <hr>
            <div class="article-content">
                <div class="article-image">
                    <img src="{{ asset('/img/article/'.$article->image_url) }}" alt="{{ $article->image_caption }}">
                    <p style="text-align: end;"><i>{{ $article->image_caption }}</i></p>
                </div>

                <p>{!! nl2br(e($article->content)) !!}</p>
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
            <form class="px-3 py-3 border rounded" id="comment-form" action="{{ route('create.article.comments')}}" method="post" enctype="multipart/form-data">
                @csrf

                <h5>Tinggalkan Komentar</h5>
                <input type="text" name="article_id" value="{{ $article->id }}" hidden>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama" required>
                </div>


                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>



                <div class="form-group">
                    <label>Komentar</label>
                    <textarea class="form-control" name="comments" placeholder="Komentar" required></textarea>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-sm">Kirim Komentar</button>
                </div>

            </form>

            <div class="article-comments">
                @if ( !$article->comments->isEmpty() )
                    <hr>
                    <h4>Komentar</h4>
                @endif
                @foreach($article->comments->sortByDesc('created_at') as $comment)
                <div class="card mb-3 horizontal-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('img/blank-profile-picture.png') }}" width="50px" height="50px" class="img-fluid rounded-start" alt="Profile Picture">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">{{ $comment->name }}</h6>
                                <small class="card-text">{{ $comment->created_at }}</small>

                            </div>
                            <div class="card-body">
                                <p>{{ $comment->comments }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <div class="col-md-4 aside bg-gray">

        </div>
    </div>




</div>

<!-- /.container-fluid -->
@endsection