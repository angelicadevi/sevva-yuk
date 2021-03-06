<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sunting Produk</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2 align="center">Perubahan Produk</h2><br/>
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
<label for="nameProduct">Nama Barang:</label>
<input type="hidden" class="form-control" name="nameProduct" value="{{$product->nameProduct}}">
<p> {{$product->nameProduct}} </p>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="price">Harga:</label>
<input type="hidden" class="form-control" name="price" value="{{$product->price}}">
<p> {{$product->price}} </p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="stok">Jumlah Barang</label>
<input type="text" class="form-control" name="stok" value="{{$product->stok}}">
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="merk">Merk</label>
<input type="text" class="form-control" name="merk" value="{{$product->merk}}">
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="color">Warna</label>
<input type="text" class="form-control" name="color" value="{{$product->color}}">
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="type">Tipe</label>
<input type="text" class="form-control" name="type" value="{{$product->type}}">
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<button type="submit" class="btn btn-success" style="marginleft:38px">Update Produk</button>
</div>
</div>
</form>
</div>
</body>
</html>