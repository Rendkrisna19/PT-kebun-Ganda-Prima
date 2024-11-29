<?php
$host = "localhost"; // Nama host
$user = "root";      // Username database
$pass = "";          // Password database
$db   = "db_perusahaan2"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>