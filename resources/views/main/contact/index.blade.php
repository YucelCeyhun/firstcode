@extends('layouts.app',['title' => 'İletişim','breadcrumbList' => $breadcrumbList])
@section('description','Firstcode iletişim,bize ulaş,Firstcode içerik eklemek için ulaş')
@section('title','İletişim')
@section('grecaptcha')
    @include('main.grecaptcha')
@endsection
@section('content')
    <div class="py-4 lg:px-0 px-4 w-full font-exo flex lg:flex-row lg:flex-no-wrap flex-col-reverse justify-center font-semibold">
        <div class="content-wrapper lg:m-3 lg:w-3/4 w-full">
            <div class="box-white py-4 px-5 min-h-192" id="last-contents">
                <article>
                    <div id="content">
                        <h1 class="text-5xl">İletişim</h1>
                        <div class="inner-box my-6">
                            <p>Direk <a href="mailto:ceyhun.yucel@hotmail.com" ref="nofollow" class="email-link font-bold text-indigo-500">ceyhun.yucel@hotmail.com</a> adresinden veya aşağıdaki formu doldurarak iletişime geçebilirsiniz.Buda yeterli değilse sosyal medya Discord kanalını kullabilirsiniz.</p>
                            <div class="mb-10 mt-5" id="contact-form">
                                <form action="{{route('main.contact.show')}}" method="post">
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
                                        <label class="form-label w-full mb-2">Talebiniz</label>
                                        <textarea class="form-input min-h-80" name="request"></textarea>
                                    </div>
                                    <div id="g-recaptcha" class="mt-4"></div>
                                    <input type="submit" value="Oluştur" class="btn mt-4">
                                </form>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="lg:w-1/4 w-full lg:m-3" id="last-commits">
         @include('main.fixboxRight')
        </div>

    </div>
@endsection
