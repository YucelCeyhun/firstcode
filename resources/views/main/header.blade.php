<header class="box-white relative z-20">
    <div class="header-nav flex justify-between items-center py-3 lg:py-0">
        <div class="logo px-6 hover:opacity-50 flex-shrink-0">
            <a href="{{route('main.home')}}"><img src="{{asset('images/logo.svg')}}" alt="Firstcode Brand" width="162" title="Firstcode"/></a>
        </div>
        <nav class="mr-6">
            <button class="lg:hidden focus:outline-none" id="menu-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 30 30" role="img" focusable="false"  class="p-2 rounded-full bg-gray-700">
                    <title>Menu</title>
                    <path stroke="#FFFFFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                </svg>
            </button>
            <ul class="lg:flex justify-center font-bold text-gray-700 font-exo tracking-wider lg:relative absolute bg-white text-center lg:text-left lg:border-b-0 border-b-2 border-gray-200 hidden" id="nav-menu">
                <li class="menu-list-item"><a href="{{route('main.home')}}">Anasayfa</a></li>
                <li class="menu-list-item owner-sub-list lg:hover:bg-gray-200">
                    <a href="{{route('main.lessons')}}" class="owner-sub-link desk">Dersler</a>
                    <a href="{{route('main.lessons')}}" class="owner-sub-link mob">Dersler</a>
                    <ul class="lg:absolute  min-w-40 text-sm text-gray-500 lg:text-gray-700 font-bold lg:p-4 py-2 lg:min-h-64 lg:border-0 border-t-2  border-b-2 border-gray-200 lg:bg-white bg-gray-100 hidden" style="left: 0;top: 100%;">
                        @foreach($categories as $category)
                            <li class="hover:text-indigo-500 py-1">
                                <a href="{{route('main.category.show',$category->slug)}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="menu-list-item"><a href="{{route('main.about.index')}}">Hakkında</a></li>
                <li class="menu-list-item"><a href="{{route('main.contact.index')}}">İletişim</a></li>
            </ul>
        </nav>
    </div>
</header>
