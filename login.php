<?php
session_start();
require_once 'function.php';

// cek cookir
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
     $id = $_COOKIE['id'];
     $key = $_COOKIE['key'];

     // abil username berdasarkan id
     $result = mysqli_query($conn, "SELECT username FROM user WHERE id='$id' ");
     $row = mysqli_fetch_assoc($result);

     // cel cookie dan username
     if ($key === hash('sha256', $row['username'])) {
          $_SESSION['login'] = true;
     }
}


if (isset($_SESSION['login'])) {
     header("location:index.php");
     exit;
}



if (isset($_POST['login'])) {
     $username = $_POST['username'];
     $password = $_POST['password'];

     $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");

     if (mysqli_num_rows($result) ===  1) {
          $row = mysqli_fetch_assoc($result);
          if (password_verify($password, $row['password'])) {
               /* cek remember me */
               if (isset($_POST['remember'])) {
                    setcookie('id', $row['id'], time() + 60);
                    setcookie('key', hash('sha256', $row['username'], time() +  60));
               }
               // buat session
               $_SESSION['login'] = true;
               header('location:index.php');
               exit;
          }
     } else {
          echo "password/username salah!";
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
          <h1>Login</h1>
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
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember Me</label>

               </div>
               <button type="login" name="login">Login</button>
          </form>
     </div>
</body>

</html>