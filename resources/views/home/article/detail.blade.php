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

    <div class="row">
        <div class="col-lg-8 article">
            <div class="article-tags">
                <a href="{{ $article->category ? route('category.page', $article->category->link) : '#' }}"
                    class="tags rounded">{{ $article->category ? $article->category->name : 'Uncategorized' }}</a>
            </div>
            <div class="article-header">
                <h3>{{ $article->title }}</h3>
                <div class="article-meta d-flex text-grey">
                    <a href="#" class="meta-item"><i class="fa fa-user" aria-hidden="true"></i>
                        {{ $article->journalist->name }}</a>
                    <span class="meta-item"><i class="fa fa-clock-o" aria-hidden="true"></i>
                        {{ $article->created_at->diffForHumans() }}</span>
                    {{-- <span class="meta-item"><i class="fa fa-eye" aria-hidden="true"></i> Dikunjungi
                        {{ count($article->page_views) }} kali</span> --}}
                </div>
            </div>

            <hr>
            <div class="article-content">
                <div class="article-image">
                    <img src="{{ asset('/img/article/' . $article->image_url) }}" alt="{{ $article->image_caption }}">
                    <p style="text-align: end;"><i>{{ $article->image_caption }}</i></p>
                </div>

                <div style="text-align: justify">
                    @php
                        echo $article->content;
                    @endphp
                    <br>
                </div>
                {{-- <p>{!! nl2br(e($article->content)) !!}</p> --}}
            </div>
            <div class="article-footer">
                <hr>
                <div class="author-box">
                    <a href="#">
                        <img src="{{ asset('img/journalist/' . $article->journalist->image_url) }}" width="96px"
                            height="96px">
                    </a>
                    <div class="desc">
                        <div class="td-author-name vcard author"><span class="fn"><a
                                    href="#">{{ $article->journalist->name }}</a></span></div>
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
                    @foreach ($related_articles as $related_article)
                        <div class="card grid-card">
                            <img src="{{ asset('/img/article/' . $related_article->image_url) }}" class="card-img-top"
                                alt="{{ $related_article->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $related_article->title }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <form class="px-3 py-3 border rounded" id="comment-form" action="{{ route('create.article.comments') }}"
                method="post" enctype="multipart/form-data">
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
                @if (!$article->comments->isEmpty())
                    <hr>
                    <h4>Komentar</h4>
                @endif
                @foreach ($article->comments->sortByDesc('created_at') as $comment)
                    <div class="card mb-3 horizontal-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('img/blank-profile-picture.png') }}" width="150px" height="150px"
                                    class="img-fluid rounded-start" alt="Profile Picture">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $comment->name }}</h6>
                                    <small class="card-text">{{ $comment->created_at->diffForHumans() }}</small>

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
        <x-sidebar />
    </div>


    <!-- /.container-fluid -->
@endsection
