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
        <div class="h-8 box-white bg-gray-100 px-3 text-xs text-gray-500 font-semibold flex items-center"
             style="z-index: 10;position: relative;" xmlns:svg="http://www.w3.org/1999/xhtml">
            <ol vocab="https://schema.org/" typeof="BreadcrumbList">
                <li class="inline-block"><a href="{{url('/')}}">Anasayfa</a></li>
                @if (isset($breadcrumbList))
                    @foreach($breadcrumbList as $bread)
                        > <li class="inline-block" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a property="item" typeof="WebPage" href="{{$bread['url']}}"><span property="name">{{$bread['name']}}</span></a>
                            <meta property="position" content="{{$bread['position']}}">
                        </li>
                    @endforeach
                @endif
            </ol>
        </div>
        @yield('content')
    </main>
    @include('main.footer')
</div>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
