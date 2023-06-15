<?php
require_once 'function.php';

if (isset($_POST['submit'])) {
     if (ubah($_POST) >= 0) {
          echo "
               <script>
                    alert('berhasil!');
                    document.location.href='index.php';
               </script>
          ";
     } else {
          echo "
          <script>
               alert('gagal!');
               
          </script>
     " . mysqli_error($conn);
     }
}
$id = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa WHERE id='$id'")[0];


?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <div class="container">
          <div class="header">
               <h1>Form Ubah Data</h1>
          </div>
          <div class="body">
               <form action="" method="post">
                    <div class="">
                         <label for="id">id</label>
                         <input type="text" name="id" id="id" value="<?= $mhs['id']; ?>">
                    </div>
                    <div class="">
                         <label for="nrp">nrp</label>
                         <input type="text" name="nrp" id="nrp" value="<?= $mhs['nrp']; ?>">
                    </div>
                    <div class="">
                         <label for="nama">nama</label>
                         <input type="text" name="nama" id="nama" value="<?= $mhs['nama']; ?>">
                    </div>
                    <div class="">
                         <label for="email">email</label>
                         <input type="text" name="email" id="email" value="<?= $mhs['email']; ?>">
                    </div>
                    <div class="">
                         <label for="jurusan">jurusan</label>
                         <input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan']; ?>">
                    </div>
                    <div class="">
                         <label for="gambar">gambar</label>
                         <input type="text" name="gambar" id="gambar" value="<?= $mhs['gambar']; ?>">
                    </div>
                    <button type="submit" name="submit">simpan</button>
               </form>
          </div>

     </div>
</body>

</html>