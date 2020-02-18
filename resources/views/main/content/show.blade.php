@extends('layouts.app',['title' => $content->title,'breadcrumbList' => $breadcrumbList])
@section('description',$content->description)
@section('title',$content->title)
@guest
    @section('grecaptcha')
        @include('main.grecaptcha')
    @endsection
@endguest
@section('content')
    <div
        class="py-4 lg:px-0 px-4 w-full font-exo flex lg:flex-row lg:flex-no-wrap flex-col-reverse min-h-64 justify-center font-semibold">
        <div class="content-wrapper lg:m-3 lg:w-3/4 w-full">
            <div class="box-white py-4 px-5 min-h-64" id="last-contents">
                <article>
                    <div id="content">
                        <h1 class="text-5xl"><a
                                href="{{route('main.content.show',$content->slug)}}">{{$content->title}}</a></h1>
                        <div class="inner-box my-6">
                            {!! $content->body !!}
                        </div>
                    </div>
                </article>
                <div class="flex justify-end items-center" id="content-time">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 75.05" width="18px" height="21px" class="inline-block mr-2">
                        <defs>
                            <style>.cls-1{fill:#4a5568;}.cls-2{fill:#fff;}</style>
                        </defs>
                        <title>fc-calender</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="fc-cal">
                                <g id="cgr">
                                    <rect class="cls-1" y="11.05" width="64" height="64" rx="5.84" ry="5.84"/>
                                    <path class="cls-2"
                                          d="M5.21,22.13v45A3.38,3.38,0,0,0,8.59,70.5H55.41a3.38,3.38,0,0,0,3.38-3.38v-45ZM17.68,64H8.38V56.8h9.3Zm0-9.38H8.38V47.43h9.3Zm0-9.37H8.38V38.05h9.3Zm0-9.38H8.38V28.68h9.3ZM30.33,64H21V56.8h9.31Zm0-9.38H21V47.43h9.31Zm0-9.37H21V38.05h9.31Zm0-9.38H21V28.68h9.31ZM43,64H33.67V56.8H43Zm0-9.38H33.67V47.43H43Zm0-9.37H33.67V38.05H43Zm0-9.38H33.67V28.68H43ZM55.62,64h-9.3V56.8h9.3Zm0-9.38h-9.3V47.43h9.3Zm0-9.37h-9.3V38.05h9.3Zm0-9.38h-9.3V28.68h9.3Z"/>
                                    <rect class="cls-2" x="12.04" y="1.12" width="7.65" height="16.87" rx="3.82" ry="3.82"/>
                                    <path class="cls-1"
                                          d="M15.86,19.12a5,5,0,0,1-4.95-5V5a4.95,4.95,0,0,1,9.9,0v9.22A5,5,0,0,1,15.86,19.12Zm0-16.87A2.7,2.7,0,0,0,13.16,5v9.22a2.7,2.7,0,0,0,5.4,0V5A2.7,2.7,0,0,0,15.86,2.25Z"/>
                                    <rect class="cls-2" x="44.43" y="1.12" width="7.65" height="16.87" rx="3.82" ry="3.82"/>
                                    <path class="cls-1"
                                          d="M48.25,19.12a5,5,0,0,1-5-5V5a5,5,0,0,1,9.9,0v9.22A5,5,0,0,1,48.25,19.12Zm0-16.87A2.7,2.7,0,0,0,45.55,5v9.22a2.7,2.7,0,0,0,5.4,0V5A2.7,2.7,0,0,0,48.25,2.25Z"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <time class="text-md text-gray-500 block font-normal inline-block"
                          datetime="{{$content->updated_at->isoFormat('YYYY-MM-DD')}}">{{$content->updated_at->isoFormat('D MMMM YYYY dddd')}}</time>
                </div>
            </div>
            <div id="tags" class="box-white py-4 px-5 my-3 w-full">
                <div class="inner-box flex items-center min-h-24">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="inline-block mr-2 flex-shrink-0">
                        <defs>
                            <style>.a{fill:#4a5568;}.b{fill:#fffdfe;}.c{fill:#fcfcfc;}</style>
                        </defs>
                        <title>tag</title>
                        <path class="a"
                              d="M11.91,1h0a1,1,0,0,0-.62-.27L1.92,0A1,1,0,0,0,.82,1.2l1.69,9a1,1,0,0,0,.34.59h0L15,21.47a1,1,0,0,0,1.44-.07l7.13-7.77a1.8,1.8,0,0,0-.14-2.58Z"/>
                        <path class="b"
                              d="M11.2,2.09h0a1,1,0,0,0-.63-.27L1.2,1.13A1,1,0,0,0,.1,2.33l1.7,9a1,1,0,0,0,.34.59h0L14.24,22.6a1,1,0,0,0,1.43-.07l7.14-7.77a1.81,1.81,0,0,0-.14-2.58Z"/>
                        <path class="a"
                              d="M11.11,3.23h0A1,1,0,0,0,10.48,3L1.11,2.28A1,1,0,0,0,0,3.47l1.69,9a1,1,0,0,0,.34.58h0l12.1,10.64a1,1,0,0,0,1.43-.07l7.14-7.77a1.8,1.8,0,0,0-.14-2.58Z"/>
                        <ellipse class="c" cx="5.51" cy="6.91" rx="2.37" ry="2.32"/>
                    </svg>
                    <ul class="flex flex-wrap">
                        @foreach($content->tags as $tag)
                            <li class="lg:my-0 mx-1 my-2"><a href="{{route('main.tag.show',$tag->slug)}}" rel="tag"
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
                                @guest
                                    <div class="input-group lg:w-1/2 lg:mr-16">
                                        <label class="form-label w-full mb-2">İsiminiz</label>
                                        <input type="text" name="name" class="form-input">
                                    </div>
                                    <div class="input-group lg:w-1/2 lg:ml-16">
                                        <label class="form-label w-full mb-2">Email Adresiniz</label>
                                        <input type="email" name="email" class="form-input">
                                    </div>
                                @endguest
                            </div>
                            <div class="input-group mt-4">
                                <label class="form-label w-full mb-2">Yorumunuz</label>
                                <textarea class="form-input min-h-32" name="comment"></textarea>
                            </div>
                            @guest
                                <div id="g-recaptcha" class="mt-4"></div>
                            @endguest
                            <input type="submit" value="Oluştur" class="btn mt-4">
                        </form>
                    </div>
                    <div class="comments">
                        <h2 class="font-bold text-lg text-gray-700">Yorumlar</h2>
                        @if($content->comments()->count())
                            <ul class="comment-list mt-5 m-h-64">
                                @foreach($content->comments as $comment)
                                    <li>
                                        <article class="my-6" id="{{$comment->commentId()}}">
                                            <div class="comment-author flex">
                                                <div class="avatar-wrapper flex-shrink-0">
                                                    <img src="{{$comment->gravatar()}}" alt="avatar"
                                                         class="rounded-full">
                                                </div>
                                                <div class="comment-wrapper px-2">
                                                    <div class="comment-author">
                                                        <b class="font-bold">
                                                            @if ($comment->auth)
                                                                <span class="text-indigo-600">{{$comment->name}}</span>
                                                                <sup class="text-red-500">Author</sup>
                                                            @else
                                                                <span class="text-gray-700">{{$comment->name}}</span>
                                                            @endif
                                                        </b>
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
            <div class="box-white p-4 w-full mt-3 min-h-64 mb-3" id="last-contents">
                <h2 class="font-bold text-lg text-gray-700">Benzer İçerikler</h2>
                @foreach($similarContents as $content)
                    <article class="flex items-center mt-5 min-h-10 flex-shrink-0">
                        <div class="image-column w-10 flex-shrink-0">
                            <img src="{{$content->category->icon}}" alt="{{$content->category->name}} Kategori Iconu"/>
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
