@extends('layouts.app',['title' => 'Firstcode Yazılım ve Tasarım Platformu'])
@section('title','Firstcode Yazılım ve Tasarım Platformu')
@section('content')
    <div class="relative z-0 join-us-parent">
        <div class="wrapper absolute z-50 bg-black w-full inset-0"></div>
        <div class="request absolute w-full inset-0 flex items-center justify-center">
            <a href="{{route('main.contact.index')}}" class="join-us text-center">Sizde İçerik Eklemek İster Misiniz ?</a>
        </div>
    </div>
    <div class="py-4 w-full font-exo flex flex-wrap lg:flex-no-wrap min-h-32 justify-center font-semibold">
        @include('main.fixboxTop')
    </div>
    <div class="w-full font-exo flex flex-wrap lg:flex-no-wrap min-h-64 justify-center font-semibold">
        <div class="box-white p-4 mx-3 min-h-64 w-full mb-4" id="last-contents">
            <h2 class="font-bold text-lg text-gray-700">Son İçerikler</h2>
            @foreach($contents as $content)
                <article class="flex items-center mt-5 min-h-10 flex-shrink-0">
                    <div class="image-column w-10 flex-shrink-0">
                        <img src="{{$content->category->icon}}" alt="{{$content->category->name}} Kategori Iconu"/>
                    </div>
                    <div class="header-column w-full ml-3 text-md">
                        <h5 class="text-gray-500"><a href="{{route('main.category.show',$content->category->slug)}}">{{$content->category->name}}</a></h5>
                        <h5>
                            <a href="{{route('main.content.show',$content->slug)}}">{{$content->title}}</a>
                        </h5>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="box-white p-4 mx-3 min-h-64 w-full mb-4" id="last-commits">
            <h2 class="font-bold text-lg text-gray-700">Son Yorumlar</h2>
            @foreach($comments as $comment)
                <article class="flex items-center mt-5 min-h-10 flex-shrink-0">
                    <div class="header-column w-full ml-3 text-md">
                        <h5>
                            <a href="{{route('main.content.show',$comment->contentWithCommentId())}}">
                                {{$comment->content->title}} <span class="block text-gray-500 text-sm"> için {{$comment->name}}</span>
                            </a>
                        </h5>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
@endsection
