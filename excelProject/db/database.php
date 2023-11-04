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

// Data 
// $id                     = "";
$nama = "";
$nik = "";
$direktorat = "";
$unit = "";
$jobTitle = "";
$tglEfektifResign = "";

if (isset($_POST['submit'])) {
    $nama = $_POST["nama"];
    $nik = $_POST["nik"];
    $direktorat = $_POST["direktorat"];
    $unit = $_POST["unit"];
    $jobTitle = $_POST["jobTitle"];
    $tglEfektifResign = $_POST["tglEfektifResign"];

    if ($nama && $nik && $direktorat && $unit && $jobTitle && $tglEfektifResign) {
        $sql = "INSERT INTO dataKaryawan (nama, nik, direktorat, unit, jobTitle, tglEfektifResign) VALUES ('$nama', '$nik', '$direktorat', '$unit', '$jobTitle', '$tglEfektifResign')";
        $call = mysqli_query($conn, $sql);

        if ($call) {
            echo "<script>alert('Data berhasil disimpan')</script>";
        } else {
            echo "<script>alert('Gagal menyimpan data')</script>";
        }
    }
}
