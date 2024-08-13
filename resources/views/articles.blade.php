<!-- Articles Section -->
<section class="page-section bg-light" id="articles">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center tt mt-0" style="font-size: 2.5rem; color: #333;">Articles</h2>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            @foreach($articles as $article)
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="article-card">
                        @if($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }} ">
                        @endif
                        <div class="article-card-body">
                            <h3 class="article-card-title">{{ $article->title }}</h3>
                            <p class="article-card-text">{{ $article->excerpt }}</p>
                            <a class="btn btn-primary btn-sm" href="{{ route('articles.show', $article->id) }}">Plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
