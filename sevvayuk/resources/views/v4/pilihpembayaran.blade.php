<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Detail Pembayaran</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<form method="post" action="{{url('transaksi')}}">
{{csrf_field()}}
<div class="container">
<h2 align="center" > Detail Pembayaran</h2><br />
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-3">{{$inigambar->gambar}}</div>
  <div class="col-sm-3">
      <table width="500px" align="center" class ="table" >
    <tr>
    <td>Kode Transaksi</td>
        <td>:</td>
        <td></td>
<tr>
<td>Nama Barang</td>
        <td>:</td>
        <td>{{ $ininama->merk}}</td>
</tr>
<tr>
    <td>Harga</td>
        <td>:</td>
        <td>{{ number_format($iniharga->price,0)}}</td>
</tr>
<tr>
<td>Pembayaran melalui </td>
        <td > : </td>
<td>
<div class = "form-check form-check-inline">
    <input class="form-check-input" type="radio" name = "pembayaran" id="tersediaOptions1" value="Transfer">
    <label class="form-check-label" for="companyTypeOptions1">Transfer</label>
    </div>
    <div class = "form-check form-check-inline">
    <input class="form-check-input" type="radio" name = "pembayaran" id="tersediaOptions2" value="OVO">
    <label class="form-check-label" for="companyTypeOptions2">OVO</label>
    </div>
    <div class = "form-check form-check-inline">
    <input class="form-check-input" type="radio" name = "pembayaran" id="tersediaOptions2" value="Dana">
    <label class="form-check-label" for="companyTypeOptions2">Dana</label>
    </div>
</div>
<select id="pembayaran">
  <option value="Transfer">Transfer</option>
  <option value="OVO">OVO</option>
  <option value="Dana">Dana</option>
</select></td>
</tr>

</table>
</div>
  <div class="col-sm-2"></div>
</div>
<button type="submit" class="btn btn-success" style="margin-left:38px">Lanjutkan</button>



<div align="center">
<a href="{{action('@index') }}"
class="btn btn-primary">Lanjutkan</a>
</div>
</div>
</body>
</html>