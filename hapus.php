<?php
  include ('koneksi.php');

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $row = $conn -> prepare("delete from siswa where id = $id ");
    $row ->execute();

    if ($row) {
      header("location: list.php");
    }else {
      echo "data gagal";
    }
  }
?>
