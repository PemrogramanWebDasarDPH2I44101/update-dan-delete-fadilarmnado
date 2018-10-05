<?php
include ('koneksi.php');

  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $submit = $_POST['submit'];

  if (isset($submit)) {
    $sql = "INSERT INTO siswa(nama,nim,tgl_lahir)
            VALUES ('$nama','$nim','$tgl_lahir')";
    $conn->exec($sql);
    echo "berhasil dimasukkan ke database";
  }
?>
<br>
<a href="list.php"><button type="button" name="button">list data</button> </a>
