<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatiblackcontent="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <meta property="og:site_name" content="{{ $websiteTitle }}">
    <meta property="og:title" content="@yield('ogTitle')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ URL::full() }}">
    <meta property="og:image" content="@yield('image')">

    <!-- <link href="{{ app()->isLocal() ? asset('css/public.css') : asset(elixir('css/public.css')) }}" rel="stylesheet"> -->
    <link href="{{ app()->isLocal() ? asset('css/normalize.css') : asset(elixir('css/normalize.css')) }}" rel="stylesheet">
    <link href="{{ app()->isLocal() ? asset('css/style.css') : asset(elixir('css/style.css')) }}" rel="stylesheet">

    @include('core::public._feed-links')

    @yield('css')

    @include('core::public._google_analytics_code')

</head>

<body class="body-{{ $lang }} @yield('bodyClass') @if($navbar)has-navbar @endif">

    @include('core::public._google_tag_manager_code')

    <!-- WRAPPER -->
    <div class="mo-wraper @yield('wraperClass')">
        <div class="mo-container">
            @include('core::public._navbar')
            <!-- MAIN CONTENT -->
            @yield('main')
            <!-- END MAIN CONTENT -->
            @include('core::public._alert')
        </div>
    </div>
    <!-- END WRAPPER -->

    <!-- FOOTER -->
    @section('site-footer')
    <footer class="mo-footer">
        <div class="mo-footer-container">
            <nav class="mo-nav-footer">
                {!! Menus::render('footer') !!}
            </nav>
            <div class="mo-social-footer">
                @include('core::public._social-footer')
            </div>
        </div>
    </footer>
    @show
    <!-- END FOOTER -->

    <!-- @include('core::_navbar') -->

    <script src="@if(app()->environment('production')){{ asset(elixir('js/public/components.min.js')) }}@else{{ asset('js/public/components.min.js') }}@endif"></script>
    <script src="@if(app()->environment('production')){{ asset(elixir('js/public/master.js')) }}@else{{ asset('js/public/master.js') }}@endif"></script>
    <script src="@if(app()->environment('production')){{ asset(elixir('js/public/common.js')) }}@else{{ asset('js/public/common.js') }}@endif"></script>
    @if (Request::input('preview'))
    <script src="{{ asset('js/public/previewmode.js') }}"></script>
    @endif

    @yield('js')

</body>

</html>
