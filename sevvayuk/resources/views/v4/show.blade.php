<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Detail Toko</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center">ID Order: {{ $order->idOrder }} </h2><br/>
<table width ="500px" class="table-striped" align="center">

    <tr>
        <td> ID Barang </td>
        <td>:</td>
        <td>{{ $order->idProduk }}</td>
    </tr>

    <tr>
        <td> Total Harga </td>
        <td>:</td>
        <td>{{ $order->price }}</td>
    </tr>

    <tr>
        <td> Jumlah </td>
        <td>:</td>
        <td>{{ $order->jumlah }}</td>
    </tr>
    
    <tr>
        <td> Data Dibuat Pada </td>
        <td>:</td>
        <td>{{ $order->created_at }}</td>
    </tr>
    
    <tr>
        <td> Data Terakhir Diubah </td>
        <td>:</td>
        <td>{{ $order->updated_at }}</td>
    </tr>
</table>

<div align="center">
<a href="{{action('OrderController@index')}}"
class="btn btn-primary">Daftar Order</a>
</div>

</div>
</body>
</html>