<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Status Pembayaran</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center" > Status Pembayaran</h2><br />
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
      <table width="500px" align="center" class ="table" >
    <tr>
    <td>Kode Transaksi</td>
        <td>:</td>
        <td></td>
<tr>
<td>Nomor Pembayaran</td>
        <td>:</td>
        <td><div class="row">
  <div class="row-sm-4">{{ $ininama->merk}}</div>
  <div class="row-sm-4">ini pake if sek lali carane</div></td>
        
</tr>
<tr>
    <td>Batas Waktu Pembayaran</td>
        <td>:</td>
        <td>{{ number_format($bataswaktu->waktu)}</td>
</tr>
<tr>
<td>Status Pembayaran </td>
        <td > : </td>
<td>
ini pake if juga</td>
</tr>

</table>
</div>
  <div class="col-sm-4"></div>
</div>



<div align="center">
<a href="{{action('Upload Bukti@index') }}"
class="btn btn-primary">Upload Bukti</a>
</div>
</div>
</body>
</html>