<div class="col-lg-4 aside bg-gray">

    <div class="news-category">
        <h3>ARTIKEL POPULER</h3>
        
        @foreach ($popular_articles as $row)
        
        
        <div class="card mb-3 horizontal-card">
            @php
                $popular_article = $row[0]->article;
            @endphp
            <div class="row g-0">
                
                <div class="col-md-4">
                    <img src="{{ asset('img/article/'.$popular_article->image_url ) }}"  class="img-fluid rounded-start" alt="{{$popular_article->title}}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('article.detail', $popular_article->link) }}">{{ $popular_article->title}}</a></h5>
                    </div>
                </div>
            </div>
        </div>
        
        @endforeach
    </div>      
</div>