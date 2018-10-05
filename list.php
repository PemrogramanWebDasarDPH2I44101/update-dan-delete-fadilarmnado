<?php
include ('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>list data</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Tanggal Lahir</th>
        <th>action</th>
      </tr>

      <?php
      $sql = $conn->prepare("select * from siswa");
      $sql -> execute();

     while ($row = $sql -> fetch(PDO::FETCH_ASSOC)) {
       ?>
         <tr>
           <td><?php echo $row['id'] ; ?> </td>
           <td><?php echo $row['nama']; ?> </td>
           <td><?php echo $row['nim']; ?> </td>
           <td><?php echo $row['tgl_lahir']; ?> </td>
           <td><a href="update_data.php?id=<?php echo $row['id'];?>">edit</a> || <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a> </td>
         </tr>
         <?php
     }
      ?>

   </table>
  </body>
</html>
