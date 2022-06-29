<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Impact Camp</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>

    </style>

    <style>
        body,html {
            font-family: 'Nunito', sans-serif;
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("images/cover.jpg");

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .noscroll {
            overflow: hidden;
        }

        .auth-text {
            text-transform: uppercase;
            font-size: 4vh;
            color: white;
            text-decoration: none;
            padding-right: 4vh;

        }

        .auth-position {
            display: block;
            margin-left: 40%;
            margin-top: 21%;
        }

        .logo {
            display: block;
            margin-left: 3vh;
            margin-top: 2vh;
            width: 10%;
        }
    </style>
</head>
<body class="antialiased bg noscroll">

<div><img src="svg/logo_white.svg" class="logo"></div>

<div class="auth-position">
    @if (Route::has('login'))
        <div>
            @auth
                <a href="{{ url('/home') }}" class="auth-text">Hello </a>
            @else
                <a href="{{ route('login') }}" class="auth-text" style="border-right: 1px solid #ffffff">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="auth-text" style="padding-left: 4vh">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>


</body>
</html>
