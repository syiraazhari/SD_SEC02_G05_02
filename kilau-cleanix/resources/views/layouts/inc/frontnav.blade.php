<link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">

<section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-h">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    
                        <img src="{{ asset('assets/images/kilaucleanixlogo2.png')}}" alt="Kilau Cleanix Logo" style="height: 3.8rem;">
                    
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="#">Kilau Cleanix</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="#">SERVICES</a></li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="#">
                            PROMOTIONS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="#">
                            TIPS AND RESOURCES
                        </a>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link link text-black display-4" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link link text-black display-4" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                            <li class="nav-item nav-dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle link text-black display-4" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end link text-black display-4" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item link text-black display-4" href="{{ route('profile') }}">
                                        My Profile
                                    </a>
                                    <a class="dropdown-item link text-black display-4" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>   
                    @endguest
                </ul>   
            </div>
        </div>
    </nav>
</section>