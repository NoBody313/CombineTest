<?php
// Informasi koneksi database
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "karyawandb"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = mysqli_connect ($servername, $username, $password, $dbname);

if (!$conn) {
    die("Failed to connect");
}

?>