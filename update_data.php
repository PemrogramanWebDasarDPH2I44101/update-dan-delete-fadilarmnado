<?php
 include ("koneksi.php");



if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = $conn -> prepare("select * from siswa where id = $id ");
  $sql -> execute();

  $row = $sql -> fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <form method="post">
      <table>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
        </tr>
        <tr>
          <td>NIM</td>
          <td><input type="text" name="nim" value="<?php echo $row['nim']; ?>"></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td><input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>"></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Kirim"> </td>
        </tr>
      </table>
    </form>
  </body>
</html>

<?php

  if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $tgl_lahir = $_POST['tgl_lahir'];

    $sql = $conn -> prepare("UPDATE siswa set nama = '$nama',
                    nim = '$nim', tgl_lahir = '$tgl_lahir' where id = '$id' ");
    $sql -> execute();

    if ($sql) {
      echo "sukses";
      header("location: list.php");
    }else {
      echo "gagal";
    }
  }
?>
