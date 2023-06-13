<?php
// konrksi
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');

function query($query)
{
     global $conn;

     $result = mysqli_query($conn, $query);
     $rows = [];
     while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
     }

     return $rows;
}

function tambah($data)
{
     global $conn;
     // mengambil data dari setiap inputan
     $nrp = $_POST["nrp"];
     $nama = $_POST["nama"];
     $email = $_POST["email"];
     $jurusan = $_POST["jurusan"];
     $gambar = $_POST["gambar"];

     // query insert data
     $query = "INSERT INTO mahasiswa VALUES('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')";
     mysqli_query($conn, $query);

     // kembalikan nilai
     return mysqli_affected_rows($conn);
}
