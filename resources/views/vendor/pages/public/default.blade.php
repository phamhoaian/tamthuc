@extends('pages::public.master')

@section('wraperClass', 'half')

@section('page')

    @if($children)
    <ul class="nav nav-subpages">
        @foreach ($children as $child)
        @include('pages::public._listItem', array('child' => $child))
        @endforeach
    </ul>

    @endif
    @if ($page->image)
    <section class="content-header-bg">
		<img src="{!! url($page->present()->thumbSrc()) !!} " alt="" width="1000px">
	</section>
    @endif
	<section class="content">
		<div class="main-content">
			{!! $page->present()->body !!}
		</div>
	</section>

    @include('galleries::public._galleries', ['model' => $page])

@endsection


