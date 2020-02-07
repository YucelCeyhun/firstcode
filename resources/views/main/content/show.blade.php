@extends('layouts.app',compact('breadcrumbList'))
@section('content')
    <div class="py-4 lg:px-0 px-4 w-full font-exo flex lg:flex-row lg:flex-no-wrap flex-col-reverse min-h-64 justify-center font-semibold">
        <div class="content-wrapper lg:m-3 lg:w-3/4 w-full">
            <div class="box-white py-4 px-5 min-h-64" id="last-contents">
                <article>
                    <div id="content">
                        <h1 class="text-5xl"><a href="{{route('main.content.show',$content->slug)}}">{{$content->title}}</a></h1>
                    <div class="inner-box my-6">
                            {!! $content->body !!}
                        </div>
                    </div>
                </article>
                <div class="text-right" id="content-time">
                    <i class="icofont-ui-calendar"></i>
                    <time class="text-md text-gray-500 block font-normal inline-block"
                      datetime="{{$content->updated_at}}">{{$content->updated_at->isoFormat('D MMMM YYYY dddd')}}</time>
                </div>
            </div>
            <div id="tags" class="box-white py-4 px-5 my-3 w-full">
                <div class="inner-box flex items-center min-h-24">
                    <i class="icofont-tags text-2xl"></i>
                    <ul class="flex">
                        @foreach($content->tags as $tag)
                            <li class="mx-1"><a href="{{route('main.tag.show',$tag->slug)}}" rel="tag"
                                                class="tag">{{$tag->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="box-white py-4 px-5 min-h-128 my-3 w-full">
                <div class="inner-box">
                    <div class="comment-form mb-10">
                        <form action="{{action('Main\CommentController@store',compact('content'))}}" method="post">
                            @csrf
                            <div class="lg:flex lg:justify-between">
                                <div class="input-group lg:w-1/2 lg:mr-16">
                                    <label class="form-label w-full mb-2">İsiminiz</label>
                                    <input type="text" name="name" class="form-input">
                                </div>
                                <div class="input-group lg:w-1/2 lg:ml-16">
                                    <label class="form-label w-full mb-2">Email Adresiniz</label>
                                    <input type="email" name="email" class="form-input">
                                </div>
                            </div>
                            <div class="input-group mt-4">
                                <label class="form-label w-full mb-2">Yorumunuz</label>
                                <textarea class="form-input min-h-32" name="comment"></textarea>
                            </div>
                            <input type="submit" value="Oluştur" class="btn">
                        </form>
                    </div>
                    <div class="comments">
                        <h2 class="font-bold text-lg text-gray-700">Yorumlar</h2>
                        @if($content->comments()->count())
                            <ul class="comment-list mt-5 m-h-64">
                                @foreach($content->comments as $comment)
                                    <li>
                                        <article class="my-4" id="{{$comment->commentId()}}">
                                            <div class="comment-author flex">
                                                <div class="avatar-wrapper flex-shrink-0">
                                                    <img src="{{$comment->gravatar()}}" alt="avatar"
                                                         class="rounded-full">
                                                </div>
                                                <div class="comment-wrapper px-2">
                                                    <div class="comment-author">
                                                        <b class="font-bold">{{$comment->name}}</b>
                                                        <time class="text-sm text-gray-500 block font-normal"
                                                              datetime="{{$comment->updated_at}}">{{$comment->updated_at->diffForHumans()}}</time>
                                                    </div>
                                                    <div class="comment-content text-gray-600">
                                                        <p>{{$comment->comment}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="pt-4 text-gray-500">Henüz yorum yapılmamış.İlk yorumu siz yapın.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-1/4 w-full lg:m-3" id="last-commits">
            @include('main.fixboxRight')
            <div class="box-white p-4 w-full mt-3 min-h-64" id="last-contents">
                <h2 class="font-bold text-lg text-gray-700">Benzer İçerikler</h2>
                @foreach($similarContents as $content)
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
            </div>
        </div>
    </div>
@endsection
