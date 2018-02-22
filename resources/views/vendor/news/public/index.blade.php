@extends('pages::public.master')

@section('bodyClass', 'body-news body-news-index body-page body-page-'.$page->id)

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

    @if ($page->image)
    <section class="content-header-bg">
		<img src="{!! url($page->present()->thumbSrc()) !!} " alt="" width="1000px">
	</section>
    @endif
	<section class="content">
		<div class="main-content">
			{!! $page->present()->body !!}

			@if ($models->count())
		    @include('news::public._list', ['items' => $models])
		    @endif
		</div>
	</section>

    @include('galleries::public._galleries', ['model' => $page])

    {!! $models->appends(Request::except('page'))->render() !!}

@endsection
