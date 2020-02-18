<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Login - Firstcode</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
    @include('main.grecaptcha')
</head>
<body class="h-full bg-gray-200">
<div class="form-wrapper flex justify-center min-h-full items-center">
    <div class="form-box box-white md:w-128 w-full p-16">
        <form action="{{route('fc-admin.auth.login')}}" method="post">
            @csrf
            <div class="input-group my-3">
                <label class="form-label my-1 w-full">Kullanıcı Adı</label>
                <input type="text" name="name" class="form-input"/>
            </div>
            <div class="input-group my-3">
                <label class="form-label my-1 w-full">Şifre</label>
                <input type="password" name="password" class="form-input"/>
            </div>
            <div id="g-recaptcha" class="my-6"></div>
            <input type="submit" value="Giriş" class="btn float-right"/>
        </form>
    </div>
</div>
</body>
</html>
