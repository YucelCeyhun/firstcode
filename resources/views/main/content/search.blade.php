@extends('layouts.app',['title' => "Arama {$find} Sonuçları",'breadcrumbList' => $breadcrumbList])
@section('description','Platformundaki bütün derslerin listesi')
@section('title',"Arama {$find} Sonuçları")
@section('content')
    <div class="py-4 w-full font-exo flex flex-wrap lg:flex-no-wrap min-h-32 justify-center font-semibold">
        @include('main.fixboxTop')
    </div>
    <div class="w-full font-exo flex flex-wrap lg:flex-no-wrap min-h-224 justify-center font-semibold">
        <div class="box-white py-4 px-5 mx-3 min-h-64 w-full" id="category-contents">
            <h1 class="text-5xl text-gray-700"><span class="text-indigo-500">{{$find}}</span> arama sonuçu</h1>
            @if ($contents->isNotEmpty())
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
            @else
                <p class="text-lg">Ne yazık ki arama ile ilgili sonuç bulunamadı.</p>
            @endif
            <div class="pagination-wrapper">
                {{$contents->withPath("?search={$find}")->links()}}
            </div>
        </div>
    </div>
@endsection
