<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <title>Aplikasi Penjualan</title> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
        <style>
            .container{
                font-size: 20px;
            }
            h1{
                font-size: 100;
                color: white;
                text-align: center;
            }
        </style>
    </head> 
    <body>
        <div class="container"> 
            @if(session()->has('status'))
                {{ session('status') }}
            @endif 
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
            <div class="page-wrapper bg-gra-01 p-t-16 p-b-20 font-poppins">
                <div class="wrapper wrapper--w780">
            
                <div class="card card-3">
                    
                    <div class="card-body">
                        <form method="post" class="signup" action="{{url('/registerPost')}}">
                            {{csrf_field()}}
                            <h1>Sign Up</h1>
                            <div class="input-group">
                                <input class="input--style-3" type="text" placeholder="First Name" name="fname">
                            </div>
                            <div class="input-group">
                                <input class="input--style-3" type="text" placeholder="Last Name" name="lname">
                            </div>
                            <div class="input-group">
                                <input class="input--style-3" type="text" placeholder="KTP Number" name="noktp">
                            </div>
                            <div class="input-group">
                                <input class="input--style-3" type="text" placeholder="Phone Number" name="notelp">
                            </div>
                            <div class="input-group">    
                                <input class="input--style-3" type="text" placeholder="E-mail" name="email">
                            </div>
                            <div class="input-group">
                                <input class="input--style-3" type="text" placeholder="Username" name="username">
                            </div>
                            <div class="input-group">
                                <input class="input--style-3" type="password" placeholder="Password" name="password">
                            </div>
                            <div class="p-t-10">
                                <button class="btn btn--pill btn--green" type="submit" class="button" style="marginleft:38px; font-size: 20px;">Sign Up</button> 
                            </div>
                        </form> 
                </div>
            </div>
        </div> 
    </body> 
</html>