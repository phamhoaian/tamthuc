@extends('core::public.master')

@section('title', $model->title.' – '.trans('news::global.name').' – '.$websiteTitle)
@section('ogTitle', $model->title)
@section('description', $model->summary)
@section('image', $model->present()->thumbUrl())
@section('bodyClass', 'body-news body-news-'.$model->id.' body-page body-page-'.$page->id)
@section('wraperClass', 'half')

@section('main')

    <!-- CONTENT NAV -->
    <nav class="content-nav fixed">
        <ul class="parent">
            <li>
                <span>News</span>
                {!! Menus::render('news') !!}
            </li>
        </ul>
    </nav>
    <!-- END CONTENT NAV -->

    <section class="content">
        <div class="main-content">
            <article class="news" itemscope itemtype="http://schema.org/Article">
                <h1 class="news-title" itemprop="name">{{ $model->title }}</h1>
                {!! $model->present()->thumb(null, 540) !!}
                <meta itemprop="image" content="{{ $model->present()->thumbUrl() }}">
                <p class="news-summary" itemprop="headline">{{ nl2br($model->summary) }}</p>
                <div class="news-body" itemprop="articleBody">{!! $model->present()->body !!}</div>
            </article>

            @include('core::public._btn-prev-next', ['module' => 'News', 'model' => $model])
        </div>
    </section>

    @include('galleries::public._galleries')

@endsection
