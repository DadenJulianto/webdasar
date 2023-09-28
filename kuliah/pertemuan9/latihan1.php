<?php 
//koneksi ke databese
//$koneksi = mysqli_connect("localhost", "root", " ", "webdasar");





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Data Mahasiswa</title>
</head>
<body>
  <table border="2px" solid blue>
   <tr>
    <th>No</th>
    <th>NIK</th>
    <th>Nama</th>
    <th>NRP</th>
    <th>Jurusan</th>
    <th>Alamat</th>
    <th>Edit</th>
   </tr>
   <tr>
    <td>1</td>
    <td>232212</td>
    <td>Daden Julianto</td>
    <td>23456321</td>
    <td>Teknik Informatikq</td>
    <td>Cianjur, Jawa barat</td>
    <td>
      <a href="">hapus</a> |
      <a href="">Ubah</a>
    </td>
   </tr>
  </table>
</body>
</html>