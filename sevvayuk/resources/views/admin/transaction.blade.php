@extends('layouts.appadmin2')

@section('content')
    <div class="container"> 
        @if (\Session::has('success')) 
        <div class="alert alert-success"> 
            <p>{{ \Session::get('success') }}</p> 
        </div><br /> 
        @endif 
                
        <br>
        <table class="table table-striped"> 
            <thead> 
                <tr> 
                    <th>ID</th> 
                    <th>User ID</th> 
                    <th>Cara Pembayaran</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Total</th>
                    <th>Img</th>
                    <th>Status</th>
                    <th colspan="3" align= "center">Action</th> 
                </tr> 
            </thead> 
            <tbody> 
                @foreach($transactions as $transaction) 
                    
                    <tr> 
                        <td>{{$transaction['id']}}</td> 
                        <td>{{$transaction['user_id']}}</td>
                        <td>{{$transaction['cara']}}</td>
                        <td>{{$transaction['start']}}</td>
                        <td>{{$transaction['end']}}</td>
                        <td>{{$transaction['total']}}</td>
                        <td><img src="fetch_image{{$transaction->id}}" class="img-thumbnail" width="75"/> </td>
                        <td>{{$transaction['status']}}</td>
                        @if($transaction['status'] == 'Lunas') 
                            <td><button type="button" class="btn btn-success" disabled>Konfirmasi</button></td> 
                            <td><button type="button" class="btn btn-warning" disabled>Reminder</button></td> 
                            <td><button type="button" class="btn btn-danger" disabled>Cancel</button></td>
                        @elseif($transaction['status'] == 'Cancel')
                            <td><button type="button" class="btn btn-success" disabled>Konfirmasi</button></td> 
                            <td><button type="button" class="btn btn-warning" disabled>Reminder</button></td> 
                            <td><button type="button" class="btn btn-danger" disabled>Cancel</button></td>
                        @else
                            <td><a href="{{action('TransactionController@updateconfirmed', $transaction['id'])}}" class="btn btn-success">Konfirmasi</a></td> 
                            <td><a href="{{action('TransactionController@updateremembered', $transaction['id'])}}" class="btn btn-warning">Reminder</a></td>
                            <td><a href="{{action('TransactionController@updatecanceled', $transaction['id'])}}" class="btn btn-danger">Cancel</a></td>
                        @endif
                    </tr>
                @endforeach 
            </tbody> 
        </table> 
    </div>
@endsection