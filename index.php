<?php
require_once 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <a href="tambah.php">
          <h2>Tambah data</h2>
     </a>
     <table cellpadding="10" cellspacing="0" border="1">
          <tr>
               <td>No</td>
               <td>NRP</td>
               <td>Nama</td>
               <td>Email</td>
               <td>Jurusan</td>
               <td>Gambar</td>
               <td>Aksi</td>
          </tr>
          <?php $no = 1;
          foreach ($mahasiswa as $row) : ?>
               <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nrp']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['jurusan']; ?></td>
                    <td><?= $row['gambar']; ?></td>
                    <td>
                         <a href="update.php?id=<?= $row['id']; ?>">update</a>
                         <a href="hapus.php?id=<?= $row['id']; ?>">delete</a>
                    </td>
               </tr>
          <?php endforeach; ?>
     </table>
</body>

</html>