@extends('layouts.app',['title' => "$tag->name İçerik Tagı",'breadcrumbList' => $breadcrumbList])
@section('description',"$tag->name tagı,Firstcode $tag->name tagı içeren dersleri")
@section('title',"$tag->name İçerik Tagı")
@section('content')
    <div class="py-4 w-full font-exo flex flex-wrap lg:flex-no-wrap min-h-32 justify-center font-semibold">
        @include('main.fixboxTop')
    </div>
    <div class="w-full font-exo flex flex-wrap lg:flex-no-wrap min-h-224 justify-center font-semibold">
        <div class="box-white py-4 px-5 mx-3 min-h-64 w-full" id="category-contents">
            <h1 class="text-5xl text-gray-700"><a href="{{route('main.tag.show',$tag->slug)}}"><span
                        class="text-indigo-500">{{$tag->name}}</span> Tagı İçeren Dersler</a></h1>
            @foreach($contents as $content)
                <article class="flex items-center mt-5 min-h-10 flex-shrink-0">
                    <div class="image-column w-10 flex-shrink-0">
                        <img src="{{$content->category->icon}}" alt="{{$content->category->name}}"/>
                    </div>
                    <div class="header-column w-full ml-3 text-md">
                        <h3>
                            <a href="{{route('main.content.show',$content->slug)}}">{{$content->title}}</a>
                        </h3>
                        <time class="text-md text-gray-500 block font-normal inline-block"
                              datetime="{{$content->updated_at}}">{{$content->updated_at->isoFormat('D MMMM YYYY dddd')}}</time>
                    </div>
                </article>
            @endforeach
            <div class="pagination-wrapper">
                {{$contents->links()}}
            </div>
        </div>
    </div>
@endsection
