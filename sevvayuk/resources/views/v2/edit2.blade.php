<!-- edit2.blade.php -->
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
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="address">Alamat:</label>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="phonenumber">Nomor Telepon:</label>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="email">Email:</label>
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