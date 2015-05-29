<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title>Kitteh Science!</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/g/pure@0.6.0(base-min.css+menus-min.css+grids-min.css+grids-responsive-min.css)"/>
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/custom.css') }}"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:700|Source+Sans+Pro:300"/>
    <link rel="shortcut icon" href="{{ asset('/assets/img/icons/favicon.ico') }}" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="{{ asset('/assets/img/icons/apple-touch-icon.png') }}"/>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/assets/img/icons/apple-touch-icon-57x57.png') }}"/>
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/assets/img/icons/apple-touch-icon-72x72.png') }}"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/assets/img/icons/apple-touch-icon-76x76.png') }}"/>
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/assets/img/icons/apple-touch-icon-114x114.png') }}"/>
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/assets/img/icons/apple-touch-icon-120x120.png') }}"/>
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/assets/img/icons/apple-touch-icon-144x144.png') }}"/>
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/assets/img/icons/apple-touch-icon-152x152.png') }}"/>
    @yield('head')
</head>
<body>
@yield('content')
</body>
</html>
