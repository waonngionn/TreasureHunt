<!DOCTYPE html>
<html>
<head>
    @section('GoogleAnalytics.blade')
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <link href="{{secure_asset('/css/index.css')}}" rel="stylesheet">
</head>
<body>
    @yield('body')
</body>
</html>