<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/buttwel.css') }}" rel="stylesheet">

        <title>SevvaYuk</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #0C0033;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }


            .links > a {
                font-family: 'Helvetica', 'Arial', sans-serif;
                color: white;
                padding: 10 25px;
                margin-left: 20px;
                margin-right: 30px;
                font-size: 15px;
                font-weight: 500;
                padding: 1em 2em;
                margin-top: 100px;
                margin-bottom: 60px;
                text-decoration: none;
                letter-spacing: 2px;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

        </style>
    </head>
    <body>  
        @if (\Session::has('success')) 
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <p>{{ \Session::get('success') }}</p> 
            </div><br /> 
        @endif
        <div class="container">
            <div class="neon">
                <h1>
                    <span class="fast-flicker">s</span>evva<span class="fast-flicker"> y</span>uk<span class="flicker">!</span>
                </h1>
            </div>
            <br>
            <div class="links" align="center">
                <a href="login" class="button glow-button">Log In</a>
                <a href="register" class="button glow-button">Sign Up</a>
            </div>
        </div>
    </body>
</html>
