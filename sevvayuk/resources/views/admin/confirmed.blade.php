@extends('layouts.appadmin2')

@section('content')
    <center>
        @if ($errors->any()) 
        <div class="alert alert-danger"> 
            <ul> 
                @foreach ($errors->all() as $error) 
                    <li>{{ $error }}</li> 
                @endforeach 
            </ul> 
        </div><br /> 
        @endif
        <div class="col-md-6">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" align="left">Canceled</div>
                            <div class="card-body">
                                <p align="left">Confirmation event has been sent!</p>
                                <div class="col-md-6">
                                    <a href="{{Route('confirmed')}}" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>  
@endsection