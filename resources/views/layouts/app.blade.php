<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AHaung Sine</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body id="body-app">
    <div id="app">
        <div class="nav-sign">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <!-- <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link b" href="/">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link b" href="/about">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link b" href="/contact">CONTACT</a>
                            </li>
                            @guest
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li> -->
                                @if (Route::has('register'))
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li> -->
                                @endif
                            @else
                                <!-- <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li> -->
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    
        <main class="py-4">
            @yield('content')
        </main>
        <div class="foot">
            <div class="d-flex justify-content-center">
                <div class="col-md-12 mt-2" style="text-align: center;">
                    <a href="" class="foot-n">Terms & Conditions</a>
                    <a href="" class="foot-n">Customer Support</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
</body>
</html>

<style>
    .b{
        color: rgb(0,0,2, 0.8) !important;
        font-weight: bold !important; 
        transition-duration: 0.5s;
        letter-spacing: 1px;
        font-size: 22px;
        font-family: 'PT Serif', serif !important;
    }

    .b:hover{
        text-shadow: 2px 2px rgb(255,255,255, 0.4);
        padding-right: 5px !important;
    }
    
    .foot{
            background-image: url('https://image.freepik.com/free-photo/brown-old-paper-texture-vintage-paper-background_43379-475.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 70px;
            box-shadow: 2px 2px 10px #ADA996;
        }

        .foot-n{
            text-decoration: none;
            color: rgb(0,0,2, 0.8);
            font-weight: bold;
            font-family: 'PT Serif', serif;
            font-size: 16px;
            text-transform: uppercase;
            display: block;
            letter-spacing: 2px;
        }
        
        .foot-n:hover{
            text-decoration: none;
            text-shadow: 2px 2px rgb(255,255,255, 0.4);
            color: #000;
            padding-right: 5px;
            transition-duration: 0.8s;
        }
</style>