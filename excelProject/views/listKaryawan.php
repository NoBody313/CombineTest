<?php 

include('/CombineTest/excelProject/resources/logic/logicHeader.php');
include('/CombineTest/excelProject/db/database.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan</title>
    <link rel="stylesheet" href="../resources/css/output.css">
</head>

<body>
    <div class="flex flex-col bg-white">
        <div class="flex flex-row" id="sideHeader">
            <?php include('/CombineTest/excelProject/views/layout/sidebar.php') ?>
            <section class="content flex flex-col w-full p-4">
                <div class="flex flex-col w-full p-6 bg-gray-800 border border-gray-200 rounded-lg">
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                            <li class="inline-flex items-center">
                                <a href="/views/dashboard.php"
                                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                    <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                    </svg>
                                    Dashboard
                                </a>
                            </li>
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="/views/dashboard.php"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                Daftar Karyawan
                            </a>
                        </ol>
                    </nav>

                    <div class="flex flex-col mt-4">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Daftar Karyawan
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Let's set new data today.</p>
                    </div>
                </div>

                <div
                    class="flex flex-col w-full p-4 border border-blue-400 bg-blue-50 mt-4 rounded-md text-gray-800 placeholder-gray-400">
                    <table class="min-w-full divide-y-2  divide-blue-950 text-center">
                        <thead>
                            <tr class="pb-4">
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-blue-900" scope="col">No</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-blue-900" scope="col">Nama</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-blue-900" scope="col">NIK</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-blue-900" scope="col">Direktorat
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-blue-900" scope="col">Departemen
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-blue-900" scope="col">Unit</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-blue-900" scope="col">Job Title
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-blue-900" scope="col">Tgl
                                    Efektif Resign</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-blue-900" scope="col">Aksi</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-blue-200">
                            <?php 
                            $sql2   = "SELECT * FROM dataKaryawan ORDER BY id ASC";
                            $query2 = mysqli_query($conn, $sql2);
                            while ($row = mysqli_fetch_array($query2)) {
                                $id = $row['id'];
                                $nama = $row['nama'];
                                $nik = $row['nik'];
                                $direktorat = $row['direktorat'];
                                $departemen = $row['departemen'];
                                $unit = $row['unit'];
                                $jobTitle = $row['jobTitle'];
                                $tglEfektifResign = $row['tglEfektifResign'];

                                ?>
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 text-blue-800" scope="row"><?php echo $id?>
                                </th>
                                <td class="whitespace-nowrap px-4 py-2 text-blue-800" scope="row"><?php echo $nama ?>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-blue-800" scope="row"><?php echo $nik ?>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-blue-800" scope="row">
                                    <?php echo $direktorat ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-blue-800" scope="row">
                                    <?php echo $departemen ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-blue-800" scope="row"><?php echo $unit ?>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-blue-800" scope="row">
                                    <?php echo $jobTitle ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-blue-800" scope="row">
                                    <?php echo $tglEfektifResign; ?></td>
                                <!-- op Di sini dalam artian Option -->
                                <td class="whitespace-nowrap px-4 py-2 text-blue-700" scope="row">
                                    <a href="listEditKaryawan.php?op=edit&id=<?php echo $id ?>"><button type="button"
                                            class="btn btn-info bg-blue-300 text-blue-800">Edit</button></a>
                                    <a href="listEditKaryawan.php?op=delete&id=<?php echo $id?>"
                                        onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')"><button type="button"
                                            class="btn btn-error bg-red-300 text-red-800">Delete</button></a>
                                </td>
                            </tr>
                            <?php 
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</body>

</html>