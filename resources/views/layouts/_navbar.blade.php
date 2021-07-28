<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="container-fluid d-flex justify-content-end">
        <ul class="navbar-nav">
            @include('layouts._locale',["lang"=>'es','nation'=>'es'])
            @include('layouts._locale',["lang"=>'en','nation'=>'gb'])
            @include('layouts._locale',["lang"=>'it','nation'=>'it'])
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <svg width="100" height="100" viewBox="0 0 177 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M88.5 38.75C88.5 44.9632 83.4632 50 77.25 50H66V38.75C66 32.5368 71.0368 27.5 77.25 27.5C83.4632 27.5 88.5 32.5368 88.5 38.75Z" fill="#A891C5" />
                <path d="M88.5 61.25C88.5 55.0368 93.5368 50 99.75 50H111V61.25C111 67.4632 105.963 72.5 99.75 72.5C93.5368 72.5 88.5 67.4632 88.5 61.25Z" fill="#00C9A8" />
                <path d="M66 61.25C66 67.4632 71.0368 72.5 77.25 72.5H88.5V61.25C88.5 55.0368 83.4632 50 77.25 50C71.0368 50 66 55.0368 66 61.25Z" fill="#FBEAFF" />
                <path d="M111 38.75C111 32.5368 105.963 27.5 99.75 27.5H88.5V38.75C88.5 44.9632 93.5368 50 99.75 50C105.963 50 111 44.9632 111 38.75Z" fill="#7955B3" />
            </svg>
            <h3>Rapido.es</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item bordeNav">
                    <a class="nav-link" href="#">{{__('ui.how')}}</a>
                </li>
                <li class="nav-item bordeNav">
                    <a class="nav-link" href="#">{{__('ui.delivery')}}</a>
                </li>
                <li class="nav-item bordeNav">
                    <a class="nav-link" href="{{route('announcement.all')}}">{{__('ui.ads')}}</a>
                </li>
                <li class="nav-item dropdown bordeNav">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.explorer')}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                        @foreach($categories as $category)
                        <li><a class="dropdown-item" href="#">{{__("ui.{$category->name}")}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item bordeNav">
                    <a class="nav-link" href="#">{{__('ui.help')}}</a>
                </li>
                @auth
                <li>
                    <a class="btn me-md-2 text-white bg-accent" href="{{route('announcement.create')}}">
                    {{__('ui.newAds')}}
                </a>
                </li>
                @endauth
            </ul>
            <ul class="navbar-nav">

                @guest
                <li>
                    <a class="btn btn-register btn-light mx-1 hovernav" href="{{route('register')}}">{{__('ui.register')}}</a>
                </li>
                <a class="btn me-md-2 text-white bg-accent hovernav" href="{{route('login')}}">
                    {{__('ui.logIn')}}
                </a>
                @endguest

                @auth
                @if (Auth::user()->is_revisor)
                <li class="nav-item bordeNav mx-2">
                    <a class="nav-link" href="{{ route('revisor.home') }}">
                        {{__('ui.revisor')}}
                        <span class="badge rounded-pill bg-danger">
                            {{\App\Models\Announcement::ToBeRevisionedCount() }}
                        </span>
                    </a>
                </li>
                @endif
                <form action="/logout" method="post">
                    @csrf
                    <button class="btn me-md-2 text-white bg-accent">{{__('ui.logOut')}}</button>
                </form>
                @endauth

            </ul>
        </div>
    </div>
</nav>