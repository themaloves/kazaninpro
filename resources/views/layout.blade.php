<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main class="inner-wrap">
        @yield('content')
    </main>
    @include('layout.footer')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
