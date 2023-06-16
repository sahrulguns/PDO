<?php
require_once 'function.php';

if (isset($_POST['submit'])) {
     if (registrasi($_POST) > 0) {
          echo "
                    <script>
                         alert('registrasi berhasil!');
                    </script>
               ";
     } else {
          echo "
               <script>
                    alert('registrasi gagal!');
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
     <h1>Form Registrasi</h1>
     <div class="container">
          <form action="" method="post">
               <div class="">
                    <label for="username">username</label>
                    <input type="text" name="username" id="username">
               </div>
               <div class="">
                    <label for="password">password</label>
                    <input type="text" name="password" id="password">
               </div>
               <div class="">
                    <label for="password2">konfirmasi password</label>
                    <input type="text" name="password2" id="password2">
               </div>

               <button type="submit" name="submit">Simpan</button>

          </form>
     </div>
</body>

</html>