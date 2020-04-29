<!doctype html>
<html lang="en">
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/adminregister.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('js/adminregister.js') }}"></script>


        <link rel="icon" href="Favicon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <title>Sevva Yuk</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="/admin">Sevva Yuk</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register">Register</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <main class="my-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Log In</div>
                                    <div class="card-body">
                                    @if ($errors->any()) 
                                        <div class="alert alert-danger"> 
                                            <ul> 
                                                @foreach ($errors->all() as $error) 
                                                    <li>{{ $error }}</li> 
                                                @endforeach 
                                            </ul> 
                                        </div> 
                                    @endif 
                                    
                                    @if (\Session::has('success')) 
                                        <div class="alert alert-success"> 
                                            <p>{{ \Session::get('success') }}</p> 
                                        </div><br /> 
                                    @endif
                                    @if (\Session::has('alert')) 
                                        <div class="alert alert-danger"> 
                                            <p>{{ \Session::get('alert') }}</p> 
                                        </div><br /> 
                                    @endif
                                        <form method="post" action="{{url('/v1/loginPost')}}">
                                        {{csrf_field()}}
                                            <div class="form-group row">
                                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="username" class="form-control" name="username">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                                <div class="col-md-6">
                                                    <input type="password" id="password" class="form-control" name="password">
                                                </div>
                                            </div>
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                Log In
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
