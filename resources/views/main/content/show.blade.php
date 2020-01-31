@extends('layouts.app',compact('breadcrumbList'))
@section('content')
    <div
        class="py-4 w-full font-exo flex lg:flex-row lg:flex-no-wrap flex-col-reverse min-h-64 my-1 justify-center font-semibold">
        <div class="content-wrapper lg:m-3 my-3 lg:w-3/4 w-full">
            <div class="box-white py-4 px-5 min-h-64" id="last-contents">
                <article>
                    <h1 class="text-5xl">{{$content->title}}</h1>
                    <div class="inner-box my-6">
                        <div id="content">
                            {!! $content->body !!}
                        </div>
                    </div>
                </article>
            </div>
            <div id="tags" class="box-white py-4 px-5 my-3 w-full">
                <div class="inner-box flex items-center min-h-24">
                    <i class="icofont-tags text-2xl"></i>
                    <ul class="flex">
                        @foreach($content->tags as $tag)
                            <li class="mx-1"><a href="#" rel="tag"
                                                class="bg-gray-700 px-3 py-2 text-white text-md mt-5">{{$tag->name}}</a>
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
                                        <article class="my-4">
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
            <div class="box-white p-4 w-full flex justify-end items-center" id="last-commits">
                <input type="text" class="form-input inline-block h-10 border-r-0 search">
                <button
                    class="inline-block bg-gray-100 px-4 border-t-2 border-b-2 border-r-2 text-gray-700 font-semibold border-gray-400 h-10 focus:outline-none"
                    title="deneme"><i class="icofont-ui-search text-xl"></i></button>
            </div>
            <div class="box-white p-4 w-full mt-3" id="last-contents">
                <h2 class="font-bold text-lg text-gray-700">Sosyal Medya</h2>
                <div class="mt-5">
                <span class="icon-discord inline-block" style="width:42px;height: 42px;overflow: hidden">
                    <div class="icon-wrapper" style="width: 42px;">
                        <a href="#" title="Discord">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 84">
                            <defs>
                                <style>.discord-cls-1 {
                                        fill: #4a5568;
                                    }

                                    .discord-cls-2 {
                                        fill: #fff;
                                    }

                                    .discord-cls-3 {
                                        fill: #7289da;
                                    }</style>
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
                                <style>.youtube-cls-1 {
                                        fill: #4a5568;
                                    }

                                    .youtube-cls-2 {
                                        fill: #fff;
                                    }

                                    .youtube-cls-3 {
                                        fill: url(#linear-gradient);
                                    }</style>
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
            <div class="box-white p-4 w-full mt-3 min-h-128" id="last-contents">
                <h2 class="font-bold text-lg text-gray-700">Benzer İçerikler</h2>
            </div>
        </div>

    </div>
@endsection
