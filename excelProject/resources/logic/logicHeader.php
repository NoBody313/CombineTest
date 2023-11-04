<?php
// require __DIR__ . '/../../../config.php';
// require __DIR__ . '/../../../common.php';
// require __DIR__ . '/../../../vendor/autoload.php';

// use League\OAuth2\Client\Provider\GenericProvider;

// $provider = new GenericProvider([
//     'clientId'                => $client_id,
//     'clientSecret'            => $client_secret,
//     'redirectUri'             => $redirect_uri,
//     'urlAuthorize'            => $fa_url . '/oauth2/authorize',
//     'urlAccessToken'          => $fa_url . '/oauth2/token',
//     'urlResourceOwnerDetails' => $fa_url . '/oauth2/userinfo',
// ]);

// // Inisialisasi sesi jika belum ada
// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }

// // Simpan state yang dihasilkan untuk sesi.
// if (isset($_SESSION['oauth2state'])) {
//     $_SESSION['oauth2state'] = $provider->getState();
//     header('Location: https://cd82-103-233-100-233.ngrok-free.app/views/dashboard.php');
// } 
// else {
//     header('Location: https://a479-103-233-100-231.ngrok-free.app');
// }

// if (isset($_SESSION['oauth2state'])) {
//     header('Location: https://cd82-103-233-100-233.ngrok-free.app/views/dashboard.php'); 
//     exit();
// } elseif (!isset($_SESSION['oauth2state'])) {
//     exit();
// }
