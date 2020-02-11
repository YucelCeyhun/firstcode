<!doctype html>
<html lang="tr">
<head>
    <!-- Google Tag Manager -->
   <!-- <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NCRQCQQ');
    </script>-->
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="google-site-verification" content="..."/>
    @include('main.openGraph',compact('title'))
    <title>@yield('title')@unless(request()->routeIs('main.home') || request()->routeIs('main.content.show'))
            - {{env('APP_NAME')}}@endunless</title>

    <link rel="stylesheet" href="{{asset('fonts/icofont/icofont.min.css')}}">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <!--<script data-ad-client="ca-pub-9833974853193702" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
</head>
<body class="bg-gray-200">
<!-- Google Tag Manager (noscript) -->
<!--<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCRQCQQ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>-->
<!-- End Google Tag Manager (noscript) -->
<div id="wrapper">
    @include('main.header')
    <main>
        <div class="h-8 box-white bg-gray-100 px-3 text-xs text-gray-500 font-semibold flex items-center"
             style="z-index: 10;position: relative;" xmlns:svg="http://www.w3.org/1999/xhtml">
            <ol vocab="https://schema.org/" typeof="BreadcrumbList">
                <li class="inline-block"><a href="{{url('/')}}">Anasayfa</a></li>
                @if (isset($breadcrumbList))
                    @foreach($breadcrumbList as $bread)
                        >
                        <li class="inline-block" itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ListItem">
                            <a property="item" typeof="WebPage" href="{{$bread['url']}}"><span
                                    property="name">{{$bread['name']}}</span></a>
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
<div class="progress-bar fixed inset-0 z-50 pointer-events-none">
    <div class="bg-indigo-500 z-50 progress progressing"></div>
</div>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
