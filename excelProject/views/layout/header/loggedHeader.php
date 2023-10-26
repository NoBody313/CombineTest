<?php
require __DIR__ . '/../../../../config.php';
require __DIR__ . '/../../../../common.php';
require __DIR__ . '/../../../../vendor/autoload.php';

use League\OAuth2\Client\Provider\GenericProvider;

$provider = new GenericProvider([
    'clientId'                => $client_id, 
    'clientSecret'            => $client_secret,
    'redirectUri'             => $redirect_uri,
    'urlAuthorize'            => $fa_url . '/oauth2/authorize',
    'urlAccessToken'          => $fa_url . '/oauth2/token',
    'urlResourceOwnerDetails' => $fa_url . '/oauth2/userinfo',
]);

// Inisialisasi sesi jika belum ada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Simpan state yang dihasilkan untuk sesi.
if (!isset($_SESSION['oauth2state'])) {
    $_SESSION['oauth2state'] = $provider->getState();
}

if (isset($_SESSION['user'])) {
  // Jika variabel sesi tidak diatur, pengguna belum login
  // Redirect pengguna ke halaman login
  header('Location: https://88d6-103-233-100-229.ngrok-free.app/views/home.php');
  exit;
} 
else {
  header('Location: https://da88-103-233-100-230.ngrok-free.app ');
  exit();
}
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