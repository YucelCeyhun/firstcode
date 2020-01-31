@extends('layouts.admin')
@section('title','Content Settings | Content Create')
@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <h2 class="text-gray-700 text-4xl">Create a Content</h2>
    <form action="{{action('Admin\ContentSettings\ContentController@store')}}" method="post">
        @csrf
        <div class="flex items-center mt-6">
            <label class="font-semibold text-gray-600 w-1/2 lg:w-1/6">İçerik Başlığı</label>
            <input type="text" name="title" autofocus class="form-input"/>
        </div>
        <div class="flex items-center mt-6">
            <label class="font-semibold text-gray-600  w-1/2 lg:w-1/6">İçerik Açıklaması</label>
            <input type="text" name="description" class="form-input"/>
        </div>
        <div class="flex items-center mt-6">
            <label class="font-semibold text-gray-600  w-1/2 lg:w-1/6">İçerik İçin Taglar</label>
            <input type="text" name="tag" class="form-input"/>
        </div>
        <div class="form-group">
            <label class="form-label">Kategori</label>
            <select class="form-input" name="category_id">
                <option value="" disabled selected>Kategori Seçin</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-16">
            <label class="font-semibold text-gray-600">İçerik</label>
            <div class="editor-wrapper" id="editor-wrapper">
                <div id="editor-tools"
                     class="h-12 flex justify-center items-center border-gray-400 border-2 border-b-0 bg-gray-300 shadow relative z-50">
                    <div class="mx-6">
                        <a href="javascript:void('hr')" id="hr" class="basic"><i class="icofont-minus"></i></a>
                        <a href="javascript:void('br')" id="br" class="basic"><i class="icofont-line-block-down"></i></a>
                    </div>
                    <div class="mx-6">
                        <a href="javascript:void('paragraph')" id="paragraph" class="basic-wrap"><i
                                class="icofont-paragraph"></i></a>
                        <a href="javascript:void('heading')" id="heading" class="basic-wrap"><i
                                class="icofont-heading"></i></a>
                        <a href="javascript:void('bold')" id="bold" class="basic-wrap"><i
                                class="icofont-bold text-md"></i></a>
                        <a href="javascript:void('underline')" id="underline" class="basic-wrap"><i
                                class="icofont-underline"></i></a>
                        <a href="javascript:void('italic')" id="italic" class="basic-wrap"><i
                                class="icofont-italic-alt"></i></a>
                        <a href="javascript:void('strike')" id="strike" class="basic-wrap"><i
                                class="icofont-strike-through"></i></a>
                    </div>
                    <div mx-6>
                        <a href="javascript:void('color')" id="color" class="specific"><i
                                class="icofont-pencil-alt-2"></i></a>
                        <a href="javascript:void('link')" id="link" class="specific"><i
                                class="icofont-link-alt"></i></a>
                        <a href="javascript:void('image')" id="image" class="specific"><i
                                class="icofont-image text-lg"></i></a>
                    </div>
                    <div>

                    </div>
                </div>

                <textarea class="editor h-128" name="body" id="editor" spellcheck="false" autocomplete="off">

                </textarea>

            </div>
            <div class="hidden mb-2" id="review-wrapper">
                <div class="h-12 border-gray-400 border-2 border-b-0 bg-gray-300 shadow relative z-50 text-lg font-bold flex items-center justify-center">
                    <h5>Review</h5>
                </div>
                <div class="h-128 editor overflow-y-auto" id="review"></div>
            </div>
            <div class="flex justify-between">
                <input type="submit" value="GÖNDER"
                       class="bg-blue-500 shadow p-2 text-white font-semibold text-sm hover:bg-blue-600"/>
                <div class="toggle-buttons">
                    <a href="javascript:void('edit')" class="btn mr-1 inline-block" id="edit-btn">Düzenle</a>
                    <a href="javascript:void('review')" class="btn inline-block" id="review-btn">Önizle</a>
                </div>
            </div>
        </div>
    </form>
    <div class="box-wrapper min-h-screen min-w-full min-h-full fixed left-0 top-0 hidden">
        <div class="black-box bg-black opacity-50 fixed top-0 left-0 min-w-full min-h-full"></div>
        <div class="box-white min-h-80 min-w-128 absolute editor-box flex justify-center p-6">
            <i class="icofont-ui-close absolute close hover:opacity-75" id="close"></i>
            <ul class="flex w-64">
                <li class="bg-gray-900 w-24 hover:opacity-75 color"></li>
                <li class="bg-gray-600 w-24 hover:opacity-75 color"></li>
                <li class="bg-gray-500 w-24 hover:opacity-75 color"></li>
                <li class="bg-gray-300 w-24 hover:opacity-75 color"></li>
                <li class="bg-red-700 w-24 hover:opacity-75 color"></li>
                <li class="bg-red-500 w-24 hover:opacity-75 color"></li>
                <li class="bg-red-300 w-24 hover:opacity-75 color"></li>
                <li class="bg-indigo-800 w-24 hover:opacity-75 color"></li>
                <li class="bg-indigo-600 w-24 hover:opacity-75 color"></li>
                <li class="bg-indigo-300 w-24 hover:opacity-75 color"></li>
                <li class="bg-blue-600 w-24 hover:opacity-75 color"></li>
                <li class="bg-blue-300 w-24 hover:opacity-75 color"></li>
                <li class="bg-teal-600 w-24 hover:opacity-75 color"></li>
                <li class="bg-teal-300 w-24 hover:opacity-75 color"></li>
                <li class="bg-purple-600 w-24 hover:opacity-75 color"></li>
                <li class="bg-pink-500 w-24 hover:opacity-75 color"></li>
            </ul>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/editor.js')}}"></script>
@endsection
