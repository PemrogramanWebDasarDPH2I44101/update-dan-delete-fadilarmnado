<?php
  $server = "localhost";
  $username = "root";
  $password = "";

  try {
    $conn = new PDO("mysql:host=$server;dbname=webdasar",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "koneksi gagal". $e->getMessage();
  }

?>
