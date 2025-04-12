<!Doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tohoney - @yield('frontendtitle')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('frontend.layouts.inc.style')
</head>

<body>
    <!--Start Preloader-->
    <div class="preloader-wrap">
        <div class="spinner"></div>
    </div>

    <!-- search-form here -->
    @include('frontend.layouts.inc.search') 
    <!-- search-form here -->

    @include('frontend.layouts.inc.header')

    @yield('frontend_content')

    @include('frontend.pages.widgets.newsletter')

    @include('frontend.layouts.inc.footer')

    @include('frontend.pages.widgets.modal')

    @include('frontend.layouts.inc.script')
</body>
</html>
