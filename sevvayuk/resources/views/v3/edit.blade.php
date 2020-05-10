<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sunting Toko</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2 align="center">Perubahan Toko</h2><br/>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div><br />
@endif
<form method="post" action="{{action('StoreController@update', $id)}}">
{{csrf_field()}}
<input name="_method" type="hidden" value="PATCH">
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="nameStore">Nama Toko:</label>
<input type="hidden" class="form-control" name="nameStore" value="{{$store->nameStore}}">
<p> {{$store->nameStore}} </p>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="address">Alamat:</label>
<input type="hidden" class="form-control" name="address" value="{{$store->address}}">
<p> {{$store->address}} </p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="phonenumber">Nomor Telepon:</label>
<input type="hidden" class="form-control" name="phonenumber" value="{{$store->phonenumber}}">
<p> {{$store->phonenumber}} </p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="email">Email:</label>
<<input type="hidden" class="form-control" name="email" value="{{$store->email}}">
<p> {{$store->phonenumber}} </p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<button type="submit" class="btn btn-success" style="marginleft:38px">Update Toko</button>
</div>
</div>
</form>
</div>
</body>
</html>