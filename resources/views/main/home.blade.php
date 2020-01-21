@extends('layouts.app')
@section('content')
    <div class="h-8 box-white bg-gray-100 px-3 text-xs text-gray-500 font-semibold flex"
         style="z-index: 10;position: relative;" xmlns:svg="http://www.w3.org/1999/xhtml">
        <span class="self-center">Anasayfa > Laravel > Laravelde Notfication Göndermek</span>
    </div>
    <div class="relative z-0">
        <img src="{{asset('images/home-image.png')}}" class="object-cover object-left min-h-40">
        <div class="wrapper absolute z-50 bg-black w-full inset-0" style="opacity: 0.7"></div>
        <div class="request absolute w-full inset-0 flex items-center justify-center">
            <a href="#"
               class="border-2 border-white text-gray-100 font-bold px-16 py-4 rounded-full z-50 uppercase hover:border-indigo-500 hover:text-indigo-500"
               style="background-color: rgba(0,0,0,0.3);">Discord Kanalımıza Katıl</a>
        </div>
    </div>
    <div class="py-4 w-full font-exo flex flex-wrap lg:flex-no-wrap min-h-32 my-1 justify-center font-semibold">
        <div class="box-white py-4 px-5 m-3 w-full" id="last-contents">
            <h2 class="font-bold text-lg text-gray-700">Sosyal Medya</h2>
            <div class="mt-5">
                <span class="icon-discord inline-block" style="width:42px;height: 42px;overflow: hidden">
                    <div class="icon-wrapper" style="width: 42px;">
                        <a href="#" title="Discord">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 84">
                            <defs>
                                <svg:style>.discord-cls-1{fill:#4a5568;}.discord-cls-2{fill:#fff;}.discord-cls-3{fill:#7289da;}</svg:style>
                            </defs>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <rect class="discord-cls-1" width="42" height="42" rx="5" ry="5"/>
                                    <path class="discord-cls-2"
                                          d="M6.48,15.09V26.74H4.84a2.75,2.75,0,0,1-1.15-.65,2.64,2.64,0,0,1-.65-1v-8a3.47,3.47,0,0,1,.65-1.15,3.77,3.77,0,0,1,1-.82Z"/>
                                    <path class="discord-cls-2"
                                          d="M35.52,26.58V14.93h1.64a2.8,2.8,0,0,1,1.15.66,2.54,2.54,0,0,1,.65,1v8a3.47,3.47,0,0,1-.65,1.15,3.77,3.77,0,0,1-1,.82Z"/>
                                    <path class="discord-cls-2"
                                          d="M31.67,11H10.17a2.32,2.32,0,0,0-2.32,2.32V28.69A2.32,2.32,0,0,0,10.17,31h21.5A2.31,2.31,0,0,0,34,28.69V13.31A2.31,2.31,0,0,0,31.67,11Zm-5.33,4.59a2.23,2.23,0,1,1-2.23,2.22A2.21,2.21,0,0,1,26.34,15.58Zm-10.7,0a2.23,2.23,0,1,1-2.23,2.22A2.22,2.22,0,0,1,15.64,15.58ZM28.28,27H13.55a1.39,1.39,0,0,1,0-2.78H28.28a1.39,1.39,0,0,1,0,2.78Z"/>
                                    <rect class="discord-cls-3" y="42" width="42" height="42" rx="5" ry="5"/>
                                    <path class="discord-cls-2"
                                          d="M6.48,57.09V68.74H4.84a2.75,2.75,0,0,1-1.15-.65,2.64,2.64,0,0,1-.65-1v-8a3.47,3.47,0,0,1,.65-1.15,3.77,3.77,0,0,1,1-.82Z"/>
                                    <path class="discord-cls-2"
                                          d="M35.52,68.58V56.93h1.64a2.8,2.8,0,0,1,1.15.66,2.54,2.54,0,0,1,.65,1v8a3.47,3.47,0,0,1-.65,1.15,3.77,3.77,0,0,1-1,.82Z"/>
                                    <path class="discord-cls-2"
                                          d="M31.67,53H10.17a2.32,2.32,0,0,0-2.32,2.32V70.69A2.32,2.32,0,0,0,10.17,73h21.5A2.31,2.31,0,0,0,34,70.69V55.31A2.31,2.31,0,0,0,31.67,53Zm-5.33,4.59a2.23,2.23,0,1,1-2.23,2.22A2.21,2.21,0,0,1,26.34,57.58Zm-10.7,0a2.23,2.23,0,1,1-2.23,2.22A2.22,2.22,0,0,1,15.64,57.58ZM28.28,69H13.55a1.39,1.39,0,1,1,0-2.78H28.28a1.39,1.39,0,1,1,0,2.78Z"/>
                                </g>
                            </g>
                        </svg>
                        </a>
                    </div>
                </span>
                <a href="#" title="Youtube">
                    <span class="icon-youtube inline-block" style="width:42px;height: 42px;overflow: hidden">
                    <div class="icon-wrapper" style="width: 42px;">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 42 84">
                            <defs>
                                <svg:style>.youtube-cls-1 {
                                    fill: #4a5568;
                                    }

                                    .youtube-cls-2 {
                                    fill: #fff;
                                    }

                                    .youtube-cls-3 {
                                    fill: url(#linear-gradient);
                                    }</svg:style>
                                <linearGradient id="linear-gradient" x1="21" y1="94.35" x2="21" y2="52.35"
                                                gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#e53e3e"/>
                                    <stop offset="0.22" stop-color="#dd0b00"/>
                                    <stop offset="0.78" stop-color="#dd0b00"/>
                                    <stop offset="0.88" stop-color="#ed1c24"/>
                                    <stop offset="1" stop-color="#eb0000"/>
                                </linearGradient>
                            </defs>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <rect class="youtube-cls-1" width="42" height="42" rx="5" ry="5"/>
                                    <polygon class="youtube-cls-2"
                                             points="8.71 35.19 8.71 21 8.71 6.81 21 13.9 33.29 21 21 28.1 8.71 35.19"/>
                                    <rect class="youtube-cls-3" y="42" width="42" height="42" rx="5" ry="5"/>
                                    <polygon class="youtube-cls-2"
                                             points="8.71 77.19 8.71 63 8.71 48.81 21 55.9 33.29 63 21 70.1 8.71 77.19"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </span>
                </a>
            </div>

        </div>
        <div class="box-white p-4 m-3  w-full flex justify-end items-center" id="last-commits">
            <input type="text" class="form-input inline-block h-10 border-r-0 search">
            <button
                class="inline-block bg-gray-100 px-4 border-t-2 border-b-2 border-r-2 text-gray-700 font-semibold border-gray-400 h-10 focus:outline-none"
                title="deneme"><i class="icofont-ui-search text-xl"></i></button>
        </div>

    </div>
    <div class="py-4 w-full font-exo flex flex-wrap lg:flex-no-wrap min-h-64 my-1 justify-center font-semibold">
        <div class="box-white py-4 px-5 m-3 min-h-64 w-full" id="last-contents">
            <h2 class="font-bold text-lg text-gray-700">Son İçerikler</h2>
            <article class="flex items-center mt-5 min-h-10 flex-shrink-0">
                <div class="image-column w-10 flex-shrink-0">
                    <img src="{{asset('images/laravel.svg')}}" alt="laravel"/>
                </div>
                <div class="header-column w-full ml-3">
                    <h5 class="text-md">
                        Laravelde Pipiline Design Pattern Kullanımı
                    </h5>
                </div>
            </article>
            <article class="flex items-center mt-5 min-h-10">
                <div class="image-column w-10 flex-shrink-0">
                    <img src="{{asset('images/laravel.svg')}}" alt="laravel"/>
                </div>
                <div class="header-column w-full ml-3">
                    <h5 class="text-md">
                        Laravelde Pipiline Design Pattern Kullanımı,Pipiline İle Filtreleme Yapmak
                    </h5>
                </div>
            </article>
            <article class="flex items-center mt-5 min-h-10">
                <div class="image-column w-10 flex-shrink-0">
                    <img src="{{asset('images/laravel.svg')}}" alt="laravel"/>
                </div>
                <div class="header-column w-full">
                    <h5 class="text-md ml-3">
                        Laravelde Pipiline Design Pattern Kullanımı,Pipiline İle Filtreleme Yapmak
                    </h5>
                </div>
            </article>
            <article class="flex items-center mt-5 min-h-10">
                <div class="image-column w-10 flex-shrink-0">
                    <img src="{{asset('images/laravel.svg')}}" alt="laravel"/>
                </div>
                <div class="header-column w-full">
                    <h5 class="text-md ml-3">
                        Laravelde Pipiline Design Pattern Kullanımı,Pipiline İle Filtreleme Yapmak Laravelde Pipiline
                    </h5>
                </div>
            </article>
            <article class="flex items-center mt-5 min-h-10">
                <div class="image-column w-10 flex-shrink-0">
                    <img src="{{asset('images/laravel.svg')}}" alt="laravel"/>
                </div>
                <div class="header-column w-full">
                    <h5 class="text-md ml-3">
                        Laravelde Pipiline Design Pattern Kullanımı,Pipiline İle Filtreleme Yapmak Laravelde Pipiline

                    </h5>
                </div>
            </article>
            <article class="flex items-center mt-5 min-h-10">
                <div class="image-column w-10 flex-shrink-0">
                    <img src="{{asset('images/laravel.svg')}}" alt="laravel"/>
                </div>
                <div class="header-column w-full">
                    <h5 class="text-md ml-3">
                        Laravelde Pipiline Design Pattern Kullanımı,Pipiline İle Filtreleme Yapmak Laravelde Pipiline

                    </h5>
                </div>
            </article>
            <article class="flex items-center mt-5 min-h-10">
                <div class="image-column w-10 flex-shrink-0">
                    <img src="{{asset('images/laravel.svg')}}" alt="laravel"/>
                </div>
                <div class="header-column w-full">
                    <h5 class="text-md ml-3">
                        Laravelde Pipiline Design Pattern Kullanımı,Pipiline İle Filtreleme Yapmak Laravelde Pipiline

                    </h5>
                </div>
            </article>
            <article class="flex items-center mt-5 min-h-10">
                <div class="image-column w-10 flex-shrink-0">
                    <img src="{{asset('images/laravel.svg')}}" alt="laravel"/>
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
