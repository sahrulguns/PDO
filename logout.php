<?php
session_start();
session_unset();
$_SESSION[""];

setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

echo "
     <script>
          alert('logout berhasil');
          document.location.href='login.php';
     </script>
";
