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
     <a href="tambah.php">tambah.php</a>
     <table border="1" cellpadding="10" cellspacing="0">
          <tr>
               <td>NO</td>
               <td>NRP</td>
               <td>Nama</td>
               <td>Email</td>
               <td>Jurusan</td>
               <td>Gambar</td>
               <td>aksi</td>
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
                         <a href="">ubah</a>
                         <a href="">hapus</a>
                    </td>
               </tr>
          <?php endforeach;  ?>
     </table>
</body>

</html>