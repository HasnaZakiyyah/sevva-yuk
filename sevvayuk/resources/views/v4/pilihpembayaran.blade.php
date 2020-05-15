<h2 align="center" > Detail Pembayaran</h2><br />
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-3"></div>
  <div class="col-sm-3">
      <table width="500px" align="center" class ="table" >
    <tr>
    <td>Kode Transaksi</td>
        <td>:</td>
        <td></td>
<tr>
<td>Nama Barang</td>
        <td>:</td>
        <td></td>
</tr>
<tr>
    <td>Harga</td>
        <td>:</td>
        <td></td>
</tr>
<tr>

<td>Pembayaran melalui </td>
        <td > : </td>

<td>

<div class="form-group">
    <label for="transaction" class="col-md-4 control-label">Pembayaran</label>

    <div class="col-md-6">
    <form action="{{url('/v4/save')}}" method="POST">
    @csrf
    <select class="form-control" name="pembayaran" required="required">
            <option value="Transfer">Transfer</option>
            <option value="OVO">OVO</option>
            <option value="Dana">Dana</option>
        </select>
    </div>
</div>  </td>
</tr>
</table>
</div>
  <div class="col-sm-2"></div>
</div>
<button type="submit" class="btn btn-success" style="margin-left:38px">Lanjutkan</button>
</form>

</div>
</div>
</body>
</html>