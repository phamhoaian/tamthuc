<li class="item" itemscope itemtype="http://schema.org/Article">
    <div class="img">
        <a class="news-anchor" href="{{ route($lang.'.news.slug', $news->slug) }}" itemprop="url">
            {!! $news->present()->thumb(540, 400) !!}
            <meta itemprop="image" content="{{ $news->present()->thumbUrl() }}">
        </a>
    </div>
    <div class="content">
        <h3 class="news-title" itemprop="name">
            <a class="news-anchor" href="{{ route($lang.'.news.slug', $news->slug) }}" itemprop="url">{{ $news->title }}</a>
        </h3>
        <div class="news-summary" itemprop="headline">{{ $news->summary }}</div>
    </div>
</li>
