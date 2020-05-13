@extends('layouts.appadmin1')

@section('content')
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
                                    <form method="post" action="{{url('/admin/loginPost')}}">
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
@endsection