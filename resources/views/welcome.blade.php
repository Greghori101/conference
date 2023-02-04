<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ URL::asset('pro.css') }}">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
                  
        </style>
    </head>
    <body class="antialiased">
        <div class="relatives"  >
            @if (Route::has('login'))
                <div style="jjj" >
                    @auth
                        <a href="{{ url('/home') }} " >Home</a>
                    @else
                        <a href="{{ route('login') }} ">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="container">
            <div class="ss" >
                <div class="img" >
                    <img src={{URL::asset('Untitled-1.png')}} alt="">
                </div>
                <div class="dd">
                    <div>
                        <h1><span >Eventu</span> <br> <span style="color: aliceblue;"> best</span>  <br><span>management</span><br><span>conferences tool</span> </h1>
                    </div>
                </div>
            </div>
        </div>
        <script src={{ asset('public/pro.js') }}></script>     
    </body>
</html>
