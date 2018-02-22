@extends('pages::public.master')

@section('bodyClass', 'body-galleries body-galleries-index body-page body-page-'.$page->id)

@section('wraperClass', 'half')

@section('main')

	<!-- CONTENT NAV -->
	<nav class="content-nav fixed">
		<ul class="parent">
			<li>
				<span>Businesses</span>
				{!! Menus::render('business') !!}
			</li>
		</ul>
	</nav>
	<!-- END CONTENT NAV -->

	<section class="content">
		<div class="main-content">
			{!! $page->present()->body !!}

			@if ($models->count())
		    @include('galleries::public._list', ['items' => $models])
		    @endif
		</div>
	</section>

	<!-- GALLERIES -->
	@include('galleries::public._galleries', ['model' => $page])
	<!-- END GALLERIES -->

    {!! $models->appends(Request::except('page'))->render() !!}

@endsection
