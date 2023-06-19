<?php
require_once 'function.php';

if (isset($_POST['login'])) {
     $username = $_POST['username'];
     $password = $_POST['password'];

     $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");

     if (mysqli_num_rows($result) ===  1) {
          header('location:index.php');
          exit;
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
               <button type="login" name="login">Login</button>
          </form>
     </div>
</body>

</html>