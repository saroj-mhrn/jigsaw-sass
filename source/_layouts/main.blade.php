<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @if(isset($title))
        <title>{{ $title }}</title>
        <meta property="og:title" content="{{ $title }}" />
        @else
        <title>{{ $page->title }}</title>
        <meta property="og:title" content="{{ $page->title }}" />
        @endif
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}" />
        <meta property="og:image" content="{{ $page->getUrl() }}assets/images/arc-one-og.jpg" />
        <meta property="og:image:alt" content="Side view of the limited edition Arc One boat" />

        @if(isset($description))
        <meta property="og:description" content="{{ $description }}" />
        <meta name="description" content="{{ $description }}">
        @else
        <meta property="og:description" content="{{ $page->description }}" />
        <meta name="description" content="{{ $page->description }}">
        @endif

        @if(isset($keywords))
        <meta name="keywords" content="{{ $keywords }}">
        @else
        <meta name="keywords" content="{{ $page->keywords }}">
        @endif

        @if(isset($noindex))
        <meta name="robots" content="noindex">
        @endif

        <link rel="canonical" href="{{ $page->getUrl() }}">
        <link rel="icon" type="image/png" href="/assets/images/favicon-128x128.png" sizes="128x128">
        <link rel="icon" type="image/png" href="/assets/images/favicon-64x64.png" sizes="64x64">
        <link rel="icon" type="image/png" href="/assets/images/favicon-32x32.png" sizes="32x32">

        <link rel="stylesheet" href="{{ mix('css/app.css', 'assets/build') }}">
    </head>
    <body class="@yield('bodyClass')">
        <div id="wrapper">
            <div class="w1">

                @include('_partials/header')

                @yield('body')

            </div>

            @include('_partials/footer')
        </div>

        <script defer src="{{ mix('js/app.js', 'assets/build') }}"></script>

    </body>
</html>
