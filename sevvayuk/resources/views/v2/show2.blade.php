<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Detail Toko</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center">Nama Toko: {{ $store->nameStore }} </h2><br/>
<table width ="500px" class="table-striped" align="center">

    <tr>
        <td> Kode Toko </td>
        <td>:</td>
        <td>{{ $store->id }}</td>
    </tr>

    <tr>
        <td> Alamat </td>
        <td>:</td>
        <td>{{ $store->address }}</td>
    </tr>

    <tr>
        <td> Nomor Telepon </td>
        <td>:</td>
        <td>{{ $store->phonenumber }}</td>
    </tr>
    
    <tr>
        <td> Email </td>
        <td>:</td>
        <td>{{ $store->email }}</td>
    </tr>
    
</table>

<div align="center">
<a href="{{action('StoreController@index')}}"
class="btn btn-primary">Daftar Toko</a>
</div>

</div>
</body>
</html>