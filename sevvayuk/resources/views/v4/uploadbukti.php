<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pembayaran</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center" >Pembayaran</h2><br />
<table width="500px" align="center" class ="table-striped" >
    <tr>
    <td>Kode Transaksi</td>
        <td>:</td>
        <td>{{ $inikodenya->id}}</td>
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

<h1>Upload Image</h1>
 
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
    <?php
    $file = $_FILES['image']['tmp_name'];
 
 if(!isset($file)){
     echo 'Pilih file gambar';
 }else{
     $image 		= addslashes(file_get_contents($_FILES['image']['tmp_name']));
     $image_name	= addslashes($_FILES['image']['name']);
     $image_size	= getimagesize($_FILES['image']['tmp_name']);

     if($image_size == false){
         echo 'File yang anda pilih tidak gambar';
     }else{
         if(!$insert = mysql_query("INSERT INTO images VALUES(NULL, '$image_name', '$image')")){
             echo 'Gagal upload gambar';
         }else{
             //ambil id terakhir insert
             $lastid = mysql_insert_id();

             echo 'Gambar berhasil di upload.<p>Gambar anda:</p><img src="get.php?id='.$lastid.'">';
         }
     }
 }
 ?>
 
<div align="center">
<a href="{{action('keuploadbukti@index') }}"
class="btn btn-primary">Kembali</a>
</div>
</div>
</body>
</html>