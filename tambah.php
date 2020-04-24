<?php

require 'function.php';

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

//cek apakah data berhasil diupdate atau tidak
if( tambah($_POST) > 0 ) {
    echo "
        <script>
        alert('data berhasil ditambahkan..!');
        document.location.href = 'index.php';
        </script>";
} else {
    echo "
    <script>
    alert('data gagal ditambahkan..!');
    document.location.href = 'index.php';
    </script>";
       }
}

?>


<html>
<head><title>Tambah Data</title></head>
<body>

<h1>Tambah Data Pasien</h1>

<form action="" method="post">
<table>

<tr>
<td width=70> Jumlah Positif</td>
<td><input type="text" name="Positif" id="Positif" required></td>
</tr>

<tr>
<td width=110> Jumlah Dirawat</td>
<td><input type="text" name="Dirawat" id="Dirawat" required></td>
</tr>

<tr>
<td width=50> Jumlah Sembuh</td>
<td><input type="text" name="Sembuh" id="Sembuh" required></td>
</tr>

<tr>
<td width=120> Jumlah Meninggal</td>
<td><input type="text" name="Meninggal" id="Meninggal" required></td>
</tr>

<tr>
<td width=100> Nama Wilayah</td>
<td><input type="text" name="wil" id="wil" required></td>
</tr>

<tr>
<td width=50> Nama Operator</td>
<td><input type="text" name="operator" id="operator" required></td>
</tr>

<tr>
<td width=50> NIM Mahasiswa</td>
<td><input type="text" name="nim" id="nim" required></td>
</tr>

<br></br>
<td>
<button type="submit" name="submit"> Simpan..! </button>
</td>
</table>
</form>
</body>
</html>
