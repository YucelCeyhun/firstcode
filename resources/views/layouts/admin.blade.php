<!doctype html>
<html lang="en" class="font-sans">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('fonts/icofont/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body class="bg-gray-100">
<div id="wrapper" class="flex w-100 items-stretch">

    @include('admin.sidebar')
    <div class="main px-6 py-3 w-full">
        @include('admin.header')
        <div class="content p-6 my-6 bg-white min-h-screen box-white">
            @yield('content')
        </div>
        @include('admin.footer')
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
@yield('scripts')
</body>
</html>
