<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SevvaYuk</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #a096c6;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 70px;
            }

            .links > a {
                color: white;
                padding: 10 25px;
                margin-left: 20px;
                margin-right: 20px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .btn {
                border: 2px solid black;
                background: #c0b9d9;
                color: black;
                padding: 10px 28px;
                font-size: 14px;
                cursor: pointer;
            }
            .info {
                border-color: #dfdcec;
                color: black;
            }
            .info:hover {
                background: #6250a1;
                color: #27040;
            }
        </style>
    </head>
    <body>  
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            @if (\Session::has('success')) 
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <p>{{ \Session::get('success') }}</p> 
                </div><br /> 
             @endif
            <div class="content">
                
                <div class="title m-b-md">
                    SEVVA YUK!
                </div>

                <div class="links">
                    <a href="login" class="btn info">Log In</a>
                    <a href="register" class="btn info">Sign Up</a>
                </div>
            </div>
        </div>
    </body>
</html>
