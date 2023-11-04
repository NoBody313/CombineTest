<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karyawandb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$id                 = "";
$nama               = "";
$nik                = "";
$direktorat         = "";
$departemen         = "";
$unit               = "";
$jobTitle           = "";
$tglEfektifResign   = "";
$success            = "";
$error              = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id             = $_GET['id'];
    $deleteQuery    = "DELETE FROM dataKaryawan WHERE id = '$id'";
    $deleteCall     = mysqli_query($conn, $deleteQuery);

    if ($deleteCall) {
        header('Location: /views/listKaryawan.php');
        $success    = "Berhasil menghapus data";
    } else {
        $error      = "Gagal menghapus data";
    }
}

// Edit Data
if ($op == 'edit') {
    $id = $_GET['id'];
    $select = "SELECT * FROM dataKaryawan WHERE id = '$id'";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);

    if ($row) {
        $nama               = $row['nama'];
        $nik                = $row['nik'];
        $direktorat         = $row['direktorat'];
        $departemen         = $row['departemen'];
        $unit               = $row['unit'];
        $jobTitle           = $row['jobTitle'];
        $tglEfektifResign   = $row['tglEfektifResign'];
    } else {
        $error = "Data tidak ditemukan";
    }
}

// Submit Button
if (isset($_POST['submit'])) {
    // Sanitasi input menggunakan mysqli_real_escape_string atau parameterized query
    $nama               = mysqli_real_escape_string($conn, $_POST["nama"]);
    $nik                = mysqli_real_escape_string($conn, $_POST["nik"]);
    $direktorat         = mysqli_real_escape_string($conn, $_POST["direktorat"]);
    $departemen         = mysqli_real_escape_string($conn, $_POST["departemen"]);
    $unit               = mysqli_real_escape_string($conn, $_POST["unit"]);
    $jobTitle           = mysqli_real_escape_string($conn, $_POST["jobTitle"]);
    $tglEfektifResign   = mysqli_real_escape_string($conn, $_POST["tglEfektifResign"]);

    if ($nama && $nik && $direktorat && $unit && $jobTitle && $tglEfektifResign) {
        if ($op == 'edit') { // Update Data
            $updateQuery = "UPDATE dataKaryawan SET nama = '$nama', nik = '$nik', direktorat = '$direktorat', departemen = '$departemen', unit = '$unit', jobTitle = '$jobTitle', tglEfektifResign = '$tglEfektifResign' WHERE id = '$id'";
            $updateCall = mysqli_query($conn, $updateQuery);

            if ($updateCall) {
                header("location: /views/listKaryawan.php");
                $success = "Data berhasil diupdate";
            } else {
                $error = "Data gagal diupdate: " . mysqli_error($conn);
            }
        } else { // Insert Data
            $insertQuery = "INSERT INTO dataKaryawan (nama, nik, direktorat, departemen, unit, jobTitle, tglEfektifResign) VALUES ('$nama', '$nik', '$direktorat', '$departemen', '$unit', '$jobTitle', '$tglEfektifResign')";
            $insertCall = mysqli_query($conn, $insertQuery);

            if ($insertCall) {
                header("location: /views/listKaryawan.php");
                $success = "Berhasil memasukkan data karyawan";
            } else {
                $error = "Gagal memasukkan data: " . mysqli_error($conn);
            }
        }
    } else {
        $error = "Semua field harus diisi";
    }
}
?>
