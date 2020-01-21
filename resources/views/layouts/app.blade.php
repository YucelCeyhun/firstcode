<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Firstcode | Home</title>
    <link rel="stylesheet" href="{{asset('fonts/icofont/icofont.min.css')}}">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div id="wrapper">
        @include('main.header')
        <main>
            @yield('content')
        </main>
        @include('main.footer')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
