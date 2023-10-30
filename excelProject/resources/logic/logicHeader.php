<?php 
require __DIR__ . '/../../../config.php';
require __DIR__ . '/../../../common.php';
require __DIR__ . '/../../../vendor/autoload.php';

use League\OAuth2\Client\Provider\GenericProvider;

$provider = new GenericProvider([
    'clientId'                => $client_id, 
    'clientSecret'            => $client_secret,
    'redirectUri'             => $redirect_uri,
    'urlAuthorize'            => $fa_url . '/oauth2/authorize',
    'urlAccessToken'          => $fa_url . '/oauth2/token',
    'urlResourceOwnerDetails' => $fa_url . '/oauth2/userinfo',
]);

// Simpan state yang dihasilkan untuk sesi.
if (!isset($_SESSION['oauth2state'])) {
    $_SESSION['oauth2state'] = $provider->getState();
}

if (!isset($_SESSION['user'])) {
    header('Location: https://testingsso.my.id');
}
?>