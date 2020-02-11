@extends('layouts.admin')
@section('title','HomeSettings | Kategori Edit')
@section('content')
    <h2 class="text-gray-700 text-4xl">Kategori Güncelle</h2>
    <form action="{{action('Admin\HomeSettings\CategoryController@update',$category)}}" method="post" autocomplete="off" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group">
            <label class="form-label">Kategori Adı</label>
            <input type="text" name="name" value="{{old('name',$category->name)}}" class="form-input"/>
        </div>
        <div class="form-group">
            <label class="form-label">Url <sup class="text-red-500">Zorunlu değil</sup></label>
            <input type="text" name="slug" value="{{old('name',$category->slug)}}"  class="form-input"/>
        </div>
        <div class="form-group">
            <label class="form-label">Açıklaması</label>
            <input type="text" name="description" value="{{old('name',$category->name)}}"  class="form-input"/>
        </div>
        <div class="form-group">
            <label class="form-label">Kategori Icon</label>
            <input type="file" name="icon" value="{{old('name',$category->name)}}"  class="form-input border-0">
        </div>
        <div class="form-group">
            <label class="form-label">İçerik Eklenebilir</label>
            <div class="w-full">
                <input type="checkbox" value="1" class="form-checkbox" @if (old('content_addable',$category->content_addable)) checked @endif name="content_addable">
            </div>
        </div>
        <div class="form-group justify-end">
          <input type="submit" value="Oluştur" class="btn"/>
        </div>
    </form>
@endsection
