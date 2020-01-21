@extends('layouts.admin')
@section('title','Content Settings | Content Create')
@section('content')
    <h2 class="text-gray-700 text-4xl">Create a Content</h2>
    <form action="{{action('Admin\ContentSettings\ContentController@store')}}" method="post">
        @csrf
        <div class="flex items-center mt-6">
            <label class="font-semibold text-gray-600 w-1/2 lg:w-1/6">İçerik Başlığı</label>
            <input type="text" name="title" autofocus value="" class="form-input"/>
        </div>
        <div class="flex items-center mt-6">
            <label class="font-semibold text-gray-600  w-1/2 lg:w-1/6">İçerik Açıklaması</label>
            <input type="text" name="description" value="" class="form-input"/>
        </div>
        <div class="mt-16">
            <label class="font-semibold text-gray-600">İçerik</label>
            <div class="editor-wrapper mt-3">
                <div id="editor-tools" class="h-16">
                    <a href="javascript:void('bold')"><i class="icofont-bold text-md"></i></a>
                    <a href="javascript:void('italic')"><i class="icofont-italic-alt"></i></a>
                    <a href="javascript:void('strike')"><i class="icofont-strike-through"></i></a>
                    <a href="javascript:void('color')"><i class="icofont-pencil-alt-2"></i></a>
                    <a href="javascript:void('link')"><i class="icofont-link-alt"></i></a>
                    <a href="javascript:void('image')"><i class="icofont-image text-lg"></i></a>
                </div>
                <!--<div id="editor" contenteditable="true" spellcheck="false" class="editor h-128">

                </div>-->

                <textarea class="editor h-128" name="body" id="editor">

                </textarea>
                <input type="submit" value="oluştur" class="bg-blue-600 shadow p-2 text-white font-semibold"/>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
    <script>
        $(function () {
            $('a[href="javascript:void(\'bold\')"]').on('click', function () {
                var editor = document.getElementById('editor');
                var start = editor.selectionStart;
                var end = editor.selectionEnd;
                editor.value = editor.value.substring(0, start) + '<b>' + window.getSelection() + '</b>' + editor.value.substring(end, editor.value.length);

            })
        })
    </script>
@endsection
