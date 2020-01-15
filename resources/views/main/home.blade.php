@extends('layouts.app')
@section('content')
    <div class="h-8 box-white bg-gray-100 px-3 text-xs text-gray-500 font-semibold flex"
         style="z-index: 10;position: relative;">
        <span class="self-center">Anasayfa > Laravel > Laravelde Notfication Göndermek</span>
    </div>
    <div class="relative z-0">
        <img src="{{asset('images/home-image.png')}}" class="object-cover object-left min-h-40">
        <div class="wrapper absolute z-50 bg-black w-full inset-0" style="opacity: 0.7"></div>
        <div class="request absolute w-full inset-0 flex items-center justify-center">
            <a href="#"
               class="border-2 border-white text-gray-100 font-bold px-16 py-4 rounded-full z-50 uppercase hover:border-teal-300"
               style="background-color: rgba(0,0,0,0.3);">Bize Katıl</a>
        </div>
    </div>
    <div class="py-4 w-full font-exo flex flex-wrap lg:flex-no-wrap min-h-64 my-1 justify-center font-semibold">
        <div class="box-white py-4 px-5 m-3 min-h-64 w-full" id="last-contents">
            <h2 class="font-bold text-lg text-gray-700">Son İçerikler</h2>
            <article class="flex items-center mt-5 min-h-10">
                <div class="image-column w-10">
                    <img src="{{asset('images/laravel.svg')}}" alt="laravel"/>
                </div>
                <div class="header-column w-full ml-3">
                    <h5 class="text-md">
                        Laravelde Pipiline Design Pattern Kullanımı
                    </h5>
                </div>
            </article>
            <article class="flex items-center mt-5 min-h-10">
                <div class="image-column w-10">
                    <img src="{{asset('images/laravel.svg')}}" alt="laravel"/>
                </div>
                <div class="header-column w-full ml-3">
                    <h5 class="text-md">
                        Laravelde Pipiline Design Pattern Kullanımı,Pipiline İle Filtreleme Yapmak
                    </h5>
                </div>
            </article>
            <article class="flex items-center mt-5 min-h-10">
                <div class="image-column w-10">
                    <img src="{{asset('images/laravel.svg')}}" alt="laravel"/>
                </div>
                <div class="header-column w-full">
                    <h5 class="text-md ml-3">
                        Laravelde Pipiline Design Pattern Kullanımı,Pipiline İle Filtreleme Yapmak
                    </h5>
                </div>
            </article>
            <article class="flex items-center mt-5 min-h-10">
                <div class="image-column w-10">
                    <img src="{{asset('images/laravel.svg')}}" alt="laravel" />
                </div>
                <div class="header-column w-full">
                    <h5 class="text-md ml-3">
                        Laravelde Pipiline Design Pattern Kullanımı,Pipiline İle Filtreleme Yapmak Laravelde Pipiline
                    </h5>
                </div>
            </article>
            <article class="flex items-center mt-5 min-h-10">
                <div class="image-column w-10">
                    <img src="{{asset('images/laravel.svg')}}" alt="laravel" />
                </div>
                <div class="header-column w-full">
                    <h5 class="text-md ml-3">
                        Laravelde Pipiline Design Pattern Kullanımı,Pipiline İle Filtreleme Yapmak Laravelde Pipiline

                    </h5>
                </div>
            </article>

        </div>
        <div class="box-white p-4 m-3 min-h-64 w-full" id="last-commits">
            <h2 class="font-bold text-lg text-gray-700">Son Yorumlar</h2>

        </div>

    </div>
@endsection
