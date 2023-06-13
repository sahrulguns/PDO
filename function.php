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
     $nrp = $data["nrp"];
     $nama = $data["nama"];
     $email = $data["email"];
     $jurusan = $data["jurusan"];
     $gambar = $data["gambar"];

     // query insert data
     $query = "INSERT INTO mahasiswa VALUES('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')";
     mysqli_query($conn, $query);

     // kembalikan nilai
     return mysqli_affected_rows($conn);
}

function hapus($id)
{
     var_dump($id);
     global $conn;

     mysqli_query($conn, "DELETE FROM mahasiswa WHERE id='$id'");

     return mysqli_affected_rows($conn);
}

function ubah($data)
{
     global $conn;

     $nrp = htmlspecialchars($data['nrp']);
     $nama = htmlspecialchars($data['nama']);
     $jurusan = htmlspecialchars($data['jurusan']);
     $gambar = htmlspecialchars($data['gambar']);
     $email = htmlspecialchars($data['email']);
     $id = $data['id'];

     $query = "UPDATE mahasiswa SET
               nrp = '$nrp',
               nama = '$nama',
               email = '$email',
               jurusan = '$jurusan',
               gambar = '$gambar'
               WHERE id=$id
          ";
     mysqli_query($conn, $query);

     // kembalikan nilai
     return mysqli_affected_rows($conn);
}
