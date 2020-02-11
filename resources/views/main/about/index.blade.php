@extends('layouts.app',['title' => 'Hakkında','breadcrumbList' => $breadcrumbList])
@section('description','Firstcode.site tüm yazılım ile uğraşan ya da uğraşmak isteyen ve kendini yazılım konusunda geliştirmek isteyen herkes için bir eğitim platformudur')
@section('title','Hakkında')
@section('content')
    <div class="py-4 lg:px-0 px-4 w-full font-exo flex lg:flex-row lg:flex-no-wrap flex-col-reverse justify-center font-semibold">
        <div class="content-wrapper lg:m-3 lg:w-3/4 w-full">
            <div class="box-white py-4 px-5 min-h-192" id="last-contents">
                <article>
                    <div id="content">
                        <h1 class="text-5xl">Hakkında</h1>
                        <div class="inner-box my-6">
                            <p class="text-indent">
                                Firstcode.site tüm yazılım ile uğraşan ya da uğraşmak isteyen ve kendini yazılım konusunda geliştirmek isteyen herkes için bir eğitim platformudur.
                                Platformumuz kar amacı gütmemekle birlikte,yazar olmak isteyen bununla birlikte kendisini tanıtmak ve kendi reklamını yapmak isteyen yazılımcılar veya tasarımcılar <b>aşırıya kaçmamak ve linklere nofollow eklmek</b> kaydıyla yapabilirler.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="lg:w-1/4 w-full lg:m-3" id="last-commits">
           @include('main.fixboxRight')
        </div>

    </div>
@endsection
