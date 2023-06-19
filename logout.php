<?php
session_start();
session_unset();
$_SESSION[""];

echo "
     <script>
          alert('logout berhasil');
          document.location.href='login.php';
     </script>
";
