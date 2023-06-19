<?php
session_start();
require_once 'function.php';

if (!isset($_SESSION['login'])) {
     header("location:login.php");
}

if (isset($_POST['submit'])) {
     if (tambah($_POST) > 0) {
          echo "
               <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href='index.php';
               </script>
          ";
     } else {
          echo "
          <script>
               alert('data gagal ditambahkan!');

          </script>
          
          " . mysqli_error($conn);
     }
}
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
               <h1>Form Tambah Data</h1>
          </div>
          <div class="body">
               <form action="" method="post">
                    <div class="">
                         <label for="nrp">nrp</label>
                         <input type="text" name="nrp" id="nrp">
                    </div>
                    <div class="">
                         <label for="nama">nama</label>
                         <input type="text" name="nama" id="nama">
                    </div>
                    <div class="">
                         <label for="email">email</label>
                         <input type="text" name="email" id="email">
                    </div>
                    <div class="">
                         <label for="jurusan">jurusan</label>
                         <input type="text" name="jurusan" id="jurusan">
                    </div>
                    <div class="">
                         <label for="gambar">gambar</label>
                         <input type="text" name="gambar" id="gambar">
                    </div>
                    <button type="submit" name="submit">simpan</button>
               </form>
          </div>

     </div>
</body>

</html>