<?php
require __DIR__ . '/../config.php';
require __DIR__ . '/../common.php';
require __DIR__ . '/../vendor/autoload.php';

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
    // header('Location: https://testingsso.my.id/views/home.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="20; url=/">
    <title>Redirect Login</title>
    <link rel="stylesheet" href="/resources/css/output.css">
</head>

<body>
    <div
        class="contentRedirect container flex flex-col w-full h-screen mx-auto my-auto justify-center items-center align-middle space-y-4">
        <h1 class="p-2 text-center items-center font-medium text-2xl">Login dulu atuh Aaa 🙏</h1>

        <iframe class="my-4 rounded-md" width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1"
            frameborder="0"></iframe>

            <a href="/" class="p-4 bg-blue-300 rounded-md font-medium">Skip this video !</a>
    </div>
</body>

</html>