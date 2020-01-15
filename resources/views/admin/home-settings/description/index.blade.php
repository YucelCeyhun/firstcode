@extends('layouts.admin')
@section('title','Home Settings | Destination')
@section('content')
    <div class="flex items-center mt-6">
        <label class="font-semibold text-gray-600 w-1/2 lg:w-1/6">Anasayfa Açıklaması</label>
        <input type="text" name="description" autofocus value="{{$homesettings->description}}" class="form-input"/>
    </div>
    <div class="flex items-center mt-6">
        <label class="font-semibold text-gray-600  w-1/2 lg:w-1/6">Anasayfa Başlığı</label>
        <input type="text" name="title" autofocus value="{{$homesettings->description}}" class="form-input"/>
    </div>
@endsection
