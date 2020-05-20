<?php
// koneksi ke DB & pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'pw_531412017');

// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Ubah data ke dalam array
$row = mysqli_fetch_row($result);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <tr>
      <td>1</td>
      <td><img src="img/gambar1.png" alt="" width="60"></td>
      <td>531412017</td>
      <td>Syahrul Noor</td>
      <td>Syahrul.noor@gmail.com</td>
      <td>Teknik Informatika</td>
      <td>
        <a href="#">Ubah</a> | <a href="#">Hapus</a>
      </td>
    </tr>
  </table>
</body>

</html>