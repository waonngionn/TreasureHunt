<!DOCTYPE html>
<html>
<head>
    @section('GoogleAnalytics.blade')
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('/css/index.css') }}" rel="stylesheet">
</head>
<body>
    @yield('body')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>