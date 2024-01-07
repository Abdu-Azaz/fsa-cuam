<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <style>
            *{
                margin:0;
                padding:0;
            }
           body{
            background-color:#1a202c;
            color:#fff;
                width: 100vw;
                height: 100vh;
           }
           .container{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
           }
           .code{
            font-size: 9rem;
           }
           .msg{
            font-size: 5rem;
           }
           .desc{
            font-size: 2rem;
            margin-top:10px;
           }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="code">
                @yield('code')
            </div>

            <div class="msg">
                @yield('message')
            </div>
            <div class="desc">
                @yield('description')
            </div>
            <div style="color: yellow; wsidth:100px; padding:12px; margin:12px;">
                <a style="color:white; font-size:2rem " href="{{route('homepage')}}" >Home</a>
            </div>
        </div>
    </body>
</html>
