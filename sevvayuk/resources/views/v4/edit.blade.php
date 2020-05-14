<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sunting Order</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2 align="center">Perubahan Order</h2><br/>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div><br />
@endif
<form method="post" action="{{action('ProductController@update', $id)}}">
{{csrf_field()}}
<input name="_method" type="hidden" value="PATCH">
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="idProduct">ID Product</label>
<input type="hidden" class="form-control" name="idProduct" value="{{$order->idProduct}}">
<p> {{$order->nameProduct}} </p>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="totprice">Total Harga:</label>
<input type="hidden" class="form-control" name="totprice" value="{{$order->totprice}}">
<p> {{$order->totprice}} </p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="jumlah">Jumlah:</label>
<input type="text" class="form-control" name="jumlah" value="{{$order->jumlah}}">
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="rentdate">Tanggal Peminjaman:</label>
<input type="date" class="form-control" name="rentdate" value="{{$order->rentdate}}">
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="returndate">Tanggal Pengembalian:</label>
<input type="date" class="form-control" name="returndate" value="{{$order->returndate}}">
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<button type="submit" class="btn btn-success" style="marginleft:38px">Update Order</button>
</div>
</div>
</form>
</div>
</body>
</html>