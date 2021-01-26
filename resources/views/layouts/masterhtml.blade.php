<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AHaung Sine</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

    <!-- <link rel=”stylesheet” href="{{ asset('./css/app.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('./css/custom.css') }}">
</head>
<body style="background: linear-gradient(to top, #ada996, #f2f2f2, #dbdbdb, #eaeaea);">
    <div id="app">
    <div class="nav-sign">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
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
                    </ul>
                </div>
            </div>
        </nav>
        </div>
        <div class="view-div">
            @yield('content')
        </div>
        <div class="foot">
            <div class="d-flex justify-content-center">
                <div class="col-md-12 mt-2" style="text-align: center;">
                    <a href="" class="foot-n">Terms & Conditions</a>
                    <a href="" class="foot-n">Customer Support</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <!-- <script src="{{ asset('./js/app.js') }}"></script> -->
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