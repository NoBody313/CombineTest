<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karyawandb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Export Import
if (isset($_POST['submit'])) {
    $errorUpload        = "";
    $extensi            = "";
    $success            = "";

    $fileName   = $_FILES['fileExcel']['name'];
    $fileData     = $_FILES['fileExcel']['tmp_name'];

    if (empty($fileData)) {
        $errorUpload = "<li>Silahkan masukan file yang ingin diupload</li>";
    } else {
        $extensi = pathinfo($fileName)['extension'];
    }

    $ekstensiValid = array("xls", "xlsx");
    if (!in_array($extensi, $ekstensiValid)) {
        $errorUpload = "<li>Silahkan masukan extensi file yang sesuai</li>";
    }

    if ($errorUpload) {
?>
        <div class="alert alert-error mt-4 rounded-md text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Gagal memasukkan data karyawan!</span>
        </div>
    <?php
    }

    if ($success) {
    ?>
        <div class="alert alert-success mt-4 rounded-md text-white fill-current">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Berhasil memasukkan data karyawan!</span>
        </div>
<?php
    }
}
?>