<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Detail Barang</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center">Nama Barang : {{ $product->nameProduct }} </h2><br/>
<table width ="500px" class="table-striped" align="center">

    <tr>
        <td> Kode Barang </td>
        <td>:</td>
        <td>{{ $product->id }}</td>
    </tr>

    <tr>
        <td> Harga </td>
        <td>:</td>
        <td>{{ $product->price }}</td>
    </tr>

    <tr>
        <td> Merk </td>
        <td>:</td>
        <td>{{ $product->merk }}</td>
    </tr>

    <tr>
        <td> Warna </td>
        <td>:</td>
        <td>{{ $product->color }}</td>
    </tr>

    <tr>
        <td> Tipe </td>
        <td>:</td>
        <td>{{ $product->type }}</td>
    </tr>

    <tr>
        <td> Stock </td>
        <td>:</td>
        <td>{{ $product->stok }}</td>
    </tr>
    
    <tr>
        <td> Data Dibuat Pada </td>
        <td>:</td>
        <td>{{ $product->created_at }}</td>
    </tr>
    
    <tr>
        <td> Data Terakhir Diubah </td>
        <td>:</td>
        <td>{{ $product->updated_at }}</td>
    </tr>
    
</table>

<div align="center">
<a href="{{action('ProductController@index')}}"
class="btn btn-primary">Katalog Barang</a>
</div>

</div>
</body>
</html>