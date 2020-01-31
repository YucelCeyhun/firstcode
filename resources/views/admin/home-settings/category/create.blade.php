@extends('layouts.admin')
@section('title','HomeSettings | Menu Create')
@section('content')
    <h2 class="text-gray-700 text-4xl">Ders Kategorisi Yarat</h2>
    <form action="{{action('Admin\HomeSettings\CategoryController@store')}}" method="post" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="form-label">Kategori Adı</label>
            <input type="text" name="name" class="form-input"/>
        </div>
        <div class="form-group">
            <label class="form-label">Url <sup class="text-red-500">Zorunlu değil</sup></label>
            <input type="text" name="slug" class="form-input"/>
        </div>
        <div class="form-group">
            <label class="form-label">Açıklaması</label>
            <input type="text" name="description" class="form-input"/>
        </div>
        <div class="form-group">
            <label class="form-label">Kategori Icon</label>
            <input type="file" name="icon" class="form-input border-0">
        </div>
        <div class="form-group">
            <label class="form-label">İçerik Eklenebilir</label>
            <div class="w-full">
                <input type="checkbox" value="1" class="form-checkbox" name="content_addable" checked>
            </div>
        </div>
        <div class="form-group justify-end">
          <input type="submit" value="Oluştur" class="btn"/>
        </div>
    </form>
@endsection
