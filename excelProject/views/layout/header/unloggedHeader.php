<?php

require_once './excelProject/resources/php/logicHeader.php';

if (isset($_SESSION['user'])) {
  header('Location: https://5445-182-0-186-55.ngrok-free.app/views/dashboard.php');
  exit();
}
// else {
//   header('Location: https://79a0-103-233-100-232.ngrok-free.app');
//   exit();
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="/resources/css/output.css">
</head>

<body>